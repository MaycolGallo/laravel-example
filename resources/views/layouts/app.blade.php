<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posty</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-slate-100">
    <nav class="bg-white p-3">
        <div class="flex max-w-3xl mx-auto justify-between items-center">
            <h1 class="font-bold text-3xl">Mongoral</h1>
            <ul class="flex items-center gap-3">
                @auth
                    <li>{{auth()->user()->name}}</li>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>   
                @endauth

                @guest    
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @endguest
            </ul>
        </div>
    </nav>
    @yield('content')
</body>
</html>