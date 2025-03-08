<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css">

</head>
<body class="bg-gray-100">

    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">

            <li>
                <a href="{{ url('/') }}" class="font-semibold hover:bg-indigo-400 py-3 px-4 rounded-md glow-text">Home</a>
            </li>
            <li>
                <a href="#" class="font-semibold hover:bg-indigo-400 py-3 px-4 rounded-md glow-text">Dashboard</a>
            </li>
            <li>
                <a href="#" class="font-semibold hover:bg-indigo-400 py-3 px-4 rounded-md glow-text">Post</a>
            </li>
        </ul>
        <ul class="flex items-center">
            <li>
                <a href="#" class="font-semibold hover:bg-indigo-400 py-3 px-4 rounded-md glow-text">John Doe</a>
            </li>
            @if (Auth::check())
            <li class="mx-8">
                <p class="text-xl">Bienvenido  <b>{{Auth::user()->name}}</b> </p>

            </li>
            <li>
                <a href="{{ route('logout') }}"class="font-semibold text-red-600 hover:bg-indigo-400 
                py-1 px-4 rounded-md glow-text border-2 border-red-600">logout</a>
            </li>
            @else
            <li>
                <a href="{{route('login')}}" class="font-semibold hover:bg-indigo-400 
                py-3 px-4 rounded-md glow-text">Login</a>
            </li>
            <li>
                <a href="{{ route('register.index') }}" class="font-semibold hover:bg-indigo-400
                 py-3 px-4 rounded-md glow-text border-2 border-red">Register</a>
            </li>

            @endif
            
        </ul>
    </nav>

    @yield('content')

</body>
</html>