<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TafsirQ</title>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Scheherazade&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/a42e77f6db.js" crossorigin="anonymous"></script>

</head>
<body class="min-h-screen flex flex-col bg-brown-100">

    <x-header></x-header>

    <div class="flex-grow text-brown-800">
        @yield('content')
    </div>

    <x-footer></x-footer>

</body>
</html>
