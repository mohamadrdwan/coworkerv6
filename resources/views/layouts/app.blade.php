<!DOCTYPE html>
<html lang="ar" dir="rtl">
    <head>
    <title>Coworker signin</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//db.onlinewebfonts.com/c/7d411bb0357d6fd29347455b7d207995?family=JF+Flat+Regular" rel="stylesheet" type="text/css"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

   <link rel="stylesheet" href="{{ asset('/css/style.css')}}">
   <!-- <link rel="stylesheet" href="main.css"> -->
   <!-- <link rel="stylesheet" href="../css/bootstrap.min.css" > -->
</head>
<body>
    <div id="app">
        <main class="py-4">
            <div class="container">
            @yield('content')
            </div>
        </main>
    </div>
</body>
</html> 