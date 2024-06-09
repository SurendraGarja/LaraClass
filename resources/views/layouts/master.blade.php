<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="bg-amber-500 flex w-full p-2 text-white justify-between item-center px-24">
        <h2 class="font-bold text-3xl">PASAL</h2>
        <div class="flex gap-10">
            <a href="{{route('home')}}">Home</a>
            <a href="{{route('about')}}">About</a>
            <a href="">Contact</a>
            <a href="{{route('shop')}}">Shop</a>
            <a href="{{route('login')}}">Login</a>
        </div>

    </nav>



@yield('content')



    <footer class="bg-amber-500 p-2 text-white text-center mb-0"><p>&copy; 2024 Pasal</p></footer>
</body>
</html>