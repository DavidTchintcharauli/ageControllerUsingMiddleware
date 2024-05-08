<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body>
        <h1>Welcome</h1>
        <p>Please enter your age:</p>
        <form action="{{ route('check.age') }}" method="GET">
            <input type="number" name="age" required>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>
