<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learn with Polash Mahmud</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-300 flex items-center justify-center py-8 px-4">

<div class="lg:w-1/2 md:w-10/12 w-full flex flex-col items-center">
   @include('layouts.partials._nav')

    <div class="mt-3">
        {{ $slot }}
    </div>
</div>
</body>
</html>
