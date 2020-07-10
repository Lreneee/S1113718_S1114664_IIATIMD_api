<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

@foreach($users as $user)
    <form action="{{route("opdracht", [$user->id])}}" method="post">
        @csrf
        <label>Send message to user: {{$user->email}}</label>
        <input type="text" name="opdracht" id="opdracht">
        <input type="submit">
    </form>
    <hr>
@endforeach
</body>
</html>
