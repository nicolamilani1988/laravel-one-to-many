<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ONE-TO-MANY</title>
    {{-- google font --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Crete+Round&display=swap" rel="stylesheet">
    {{-- my style --}}
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
</head>
<body>
    <header>
        <div class="container">
            @include('components.header')
        </div>
    </header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
    
    <footer>
        <div class="container">
            @include('components.footer')
        </div>
    </footer>
</body>
</html>