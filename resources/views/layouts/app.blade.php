<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine.js" </script>
    <script src="https://kit.fontawesome.com/59ecaaffaa.js" crossorigin="anonymous"></script>
    <link href="{{ asset('./css/app.css') }}" rel="stylesheet" />
    <title>Librairies</title>

</head>

<body class="">
    <header>
        @include('layouts.header')
    </header>
    @yield('main')

    <footer>
        @include('layouts.footer')
    </footer>



</body>

</html>
