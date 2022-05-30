<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--Stile di deafault--}} <link rel="stylesheet" href="{{asset('./css/app.css')}}">
    <title>Laravel Trains migration seeder</title>
</head>
<body class="bg-primary">
    
    @include('includes.header')

    <main>
        @yield('content')
    </main>

    <script src="{{asset('./js/app.js')}}"></script>
</body>
</html>