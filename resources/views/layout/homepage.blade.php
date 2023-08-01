<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- font style --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;400&family=Poppins:,wght@1,300&display=swap" rel="stylesheet">
    {{-- css style --}}
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="icon" href="{{ asset("logo/logo IM-09.png") }}">
    <title>Web | Profile</title>
</head>
<body>
    @include('partials.header')

    @yield('content')

    @include('partials.footer')
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</body>
</html>
