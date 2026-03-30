<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEV↑UP - @yield('title', 'Level up your dev life')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">DEV↑UP</h1>
            <div class="flex space-x-4">
                @auth
                    <span>{{ auth()->user()->name }}</span>
                    <a href="{{ route('logout') }}" method="POST" class="bg-red-500 px-4 py-2 rounded">Logout</a>
                @else
                    <a href="{{ route('login') }}" class="bg-white text-blue-600 px-4 py-2 rounded">Login</a>
                    <a href="{{ route('register') }}" class="bg-green-500 px-4 py-2 rounded">Register</a>
                @endauth
            </div>
        </div>
    </nav>

    @auth
    <nav class="bg-gray-200 p-2">
        <div class="container mx-auto flex space-x-4">
            <a href="{{ route('challenges.index') }}" class="px-3 py-1 rounded hover:bg-gray-300">Challenges</a>
            <a href="{{ route('levels.index') }}" class="px-3 py-1 rounded hover:bg-gray-300">Levels</a>
        </div>
    </nav>
    @endauth

    <main class="container mx-auto p-4">
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        @yield('content')
    </main>
</body>
</html>
