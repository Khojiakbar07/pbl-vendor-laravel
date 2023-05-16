<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    <link href="{{ asset('theme/terminal/tailwind.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('theme/terminal/style.css') }}">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    @vite('resources/css/app.css')
</head>
<body class="bg-blue-gray-50">

    <div id="app"></div>

@vite('resources/js/app.js')
</body>
</html>
