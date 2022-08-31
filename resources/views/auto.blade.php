
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <title>Регистрация</title>
</head>
<body>
<div class="container">
    <div class="row">
        <form method="POST" action="login" style="text-align: center; margin: auto;">
            {!! csrf_field() !!}
            @error('err')
            <div>{{$message}}</div>
            @enderror
            <div>
                Email
                <input style="margin: 10px;" type="email" name="email" value="{{ old('email') }}">
            </div>

            <div>
                Пароль
                <input style="margin: 10px;" type="password" name="password" id="password">
            </div>

            <div>
                <input style="margin: 10px;" type="checkbox" name="remember"> Запомнить меня
            </div>

            <div>
                <button style="margin: 10px;" type="submit">Вход</button>
            </div>
        </form>
    </div>
</div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>


