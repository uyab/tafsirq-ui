<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <style>
        body {
            background: #fcf9f7;
        }
        .arabic {
            direction: rtl;
            font-family: "Amiri","Scheherazade", "Traditional Arabic";
            font-size: 1.7em;
            letter-spacing: 1px;
            line-height: 2em;
        }
        .fad {
            --fa-secondary-opacity: 1.0;
            --fa-primary-color: #594A3C;
            --fa-secondary-color: #238C97;
        }
        .fad.fa-light {
            --fa-secondary-opacity: 1.0;
            --fa-primary-color: #2fbccb;
            --fa-secondary-color: #FFFFFF;
        }
    </style>

    <script src="https://kit.fontawesome.com/a42e77f6db.js" crossorigin="anonymous"></script>

</head>
<body class="min-h-screen flex flex-col">

    <x-header></x-header>

    <div class="flex-grow mb-16">
        @yield('content')
    </div>

    <x-feature></x-feature>

    <x-footer></x-footer>

</body>
</html>
