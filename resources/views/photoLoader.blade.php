
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
        <form method="POST" action="photo" enctype="multipart/form-data">
            <div>
            {!! csrf_field() !!}
            <?php
            use Illuminate\Support\Facades\Auth;
            if(Auth::check())
                echo (Auth::user()['email']);
            ?>
            </div>

            <div>
                <input style="margin: 10px;" type="file" name="photo"> ФОТО
            </div>

            <div>
                <button style="margin: 10px;" type="submit">Добавить</button>
            </div>
        </form>
    </div>
    @isset($path)
        <div>{{$path}}</div>
        <img class="img-fluid" src="{{ asset('/storage/' . $path) }}">
    @endisset
    @isset($has)
        <div>{{$has}}</div>
    @endisset
</div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>


