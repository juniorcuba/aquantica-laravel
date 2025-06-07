<html>
    <head>
        <title>Home</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-gray-100 flex items-center justify-center">
        <h1 class="header">{{ __('messages.home') }}</h1>
    </body>
</html>