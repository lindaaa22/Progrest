<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center justify-center min-h-screen flex-col">

        <div class="w-full max-w-md bg-white dark:bg-gray-800 rounded-xl shadow-md p-6">
            <h1 class="text-2xl font-bold mb-4 text-center">
                Sign In
            </h1>
            <button class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-200">
                <a href="{{route('signin.view')}}">Sign In</a>
            </button>
        </div>

    </body>
</html>
