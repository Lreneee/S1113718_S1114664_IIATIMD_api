<?php

namespace App\Http\Controllers;

use App\Http\Kernel;
use App\Notifications\FCMNotification;
use App\Token;
use App\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function test()
    {
        return view('test', ['users' => User::all()]);
    }

    public function opdracht(int $user)
    {
        $this->notification(User::find($user), request('opdracht'));
        return redirect()->back();
    }

    public function token(Request $request)
    {
        $user = auth()->user();

        $data = array_merge(\request()->all(), ['user_id' => $user->id]);

        $token = Token::create($data);
        return $user->fcm_token;
    }

    public function notification(User $user, $message)
    {
        $notification = [
            'title' => $message,
            'sound' => true,
        ];

        $extraNotificationData = ["message" => $notification, "moredata" => 'dd'];


        $json_data = [
            "to" => $user->fcm_token->token,
            "notification" => $notification,
            "data" => $extraNotificationData
        ];

        $data = json_encode($json_data);
        //FCM API end-point
        $url = 'https://fcm.googleapis.com/fcm/send';
        //api_key in Firebase Console -> Project Settings -> CLOUD MESSAGING -> Server key
        $server_key =  env('FMC_TOKEN');
        //header with content_type api key
        $headers = array(
            'Content-Type:application/json',
            'Authorization: key=AAAAR4PEdTc:APA91bHELWwLDbF5nzkJ859vnQLnBqBjeUMN0TyRAuio5n8Ol-J4xVeF-09VvyWuGQsDxpyHFxrGG-3qlcG2XeAADh-8Sf-oqXHGjCY_v1_0R6WgaoVKMAgWGUV_UmleyNAjQSJgboJ2'
        );
        //CURL request to route notification to FCM connection server (provided by Google)
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $result = curl_exec($ch);
        if ($result === FALSE) {
            die('Oops! FCM Send Error: ' . curl_error($ch));
        }
        curl_close($ch);

        dd($result);

        return true;
    }

    public $successStatus = 200;


    /**
     * login api
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();
            $success['token'] = $user->createToken('MyApp');
            return response()->json(['success' => $success], $this->successStatus);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }


    /**
     * Register api
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $input['name'] = ' ';
        $user = User::create($input);

        return response()->json(['status' => 'success'], $this->successStatus);
    }


    /**
     * details api
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function details()
    {
        $user = Auth::user();
        return response()->json(['success' => $user], $this->successStatus);
    }

}
