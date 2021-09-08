<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <title>Welcome</title>
    </head>
    <body class="bg-green-light">
        <div class="flex items-center justify-center text-center flex-col min-h-screen text-white">
            <div class="text-8xl">
                World Football News
            </div>
            <div class="text-4xl">
                Begin by registering or logging in
            </div>
            <div class="flex items-center justify-center text-center">
                <a href="/login"><button class="bg-yellow-light hover:bg-yellow-dark text-white font-bold py-2 px-4 rounded">Login</button></a> 
                <a href="/register"><button class="bg-yellow-light hover:bg-yellow-dark text-white font-bold py-2 px-4 rounded">Register</button></a> 
            </div>
        </div>
    </body>
</html>