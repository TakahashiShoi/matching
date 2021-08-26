<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">
</head>
<body>
    <div id="login">
        <h1 class="app-name">アプリ名</h1>
        <form name='form-login'>
        <span class="fontawesome-user"></span>
        <input type="text" id="user" placeholder="Username">
        <span class="fontawesome-lock"></span>
        <input type="password" id="pass" placeholder="Password">
        <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>