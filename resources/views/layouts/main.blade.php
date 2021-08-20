<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie App</title>

    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="font-sans bg-gray-900 text-white">
    
    <nav class="border-b border-gray-800">
        <div class="container mx-auto flex items-center justify-between px-4 py-6">
            <ul class="flex items-center">
                <li>
                    <img src="/images/logo.png" alt="" width="32px">
                    {{-- <a href="#">Logo</a> --}}
                </li>
                <li class="ml-16">
                    <a href="#" class="hover:text-gray-300">Movies</a>
                </li>
                <li class="ml-16">
                    <a href="#" class="hover:text-gray-300">TV Shows</a>
                </li>
                <li class="ml-16">
                    <a href="#" class="hover:text-gray-300">Actors</a>
                </li>
            </ul>
            <div class="flex items-center">
                <div class="relative">
                    <input type="text" class="bg-gray-800 text-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" placeholder="Search">
                </div>
                <div class="ml-4">
                    <img src="/images/avatar.jpg" alt="avatar" class="rounded-full w-8 h-8">
                </div>
            </div>
        </div>
    </nav>

    @yield('content')
</body>
</html>