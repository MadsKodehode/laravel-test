<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>LaravelTest</title>
</head>
<body class="bg-slate-400">
    <nav class="p-6 bg-white flex justify-between mb-16">
      <ul class="flex items-center">
        <li>
            <a href="/" class="p-3 cursor-pointer">Home</a>
        </li>
        <li>
            <a href="{{ route('dashboard') }}" class="p-3 cursor-pointer">Dashboard</a>
        </li>
        <li>
            <a href="{{ route('posts') }}" class="p-3 cursor-pointer">Posts</a>
        </li>
    </ul>
      <ul class="flex items-center">
        @auth
        
            <li>
                <a class="p-3 cursor-pointer">{{ auth()->user()->name }}</a>
            </li>
            <li>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="cursor-pointer">Logout</button>  
                </form>
                
            </li>
        
        @endauth
       
        @guest
            
            <li>
                <a href="{{ route('login') }}" class="p-3 cursor-pointer">Login</a>
            </li>
            <li>
                <a href="{{ route('register') }}" class="p-3 cursor-pointer">Register</a>
            </li>
       
         @endguest
       
       
    </ul>
        

    </nav>
    @yield('content')
</body>
</html>