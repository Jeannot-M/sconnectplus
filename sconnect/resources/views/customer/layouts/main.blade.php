<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,600;0,900;1,200;1,300;1,900&display=swap" rel="stylesheet">
    
    <title>Sconnect Plus</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/font-awesome-line-awesome/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @livewireStyles

</head>
<body>

    @include('includes._header')
    <div class="wrapper">
        @yield('customer_main')
    </div>

    <script src="{{ asset('js/form.js') }}"></script>
    
    @livewireScripts
    @include('includes._chatbot')
</body>
</html>