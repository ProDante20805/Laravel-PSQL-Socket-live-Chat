<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel with Vite</title>
    @vite(['resources/css/app.css', 'resources/js/app.jsx']) <!-- Include your Vite assets -->
</head>
<body>
    <div id="app"></div>
</body>
</html>
