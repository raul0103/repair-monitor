<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-900 antialiased">
    <div class="container mx-auto px-6 py-8">
        <h1 class="text-2xl font-bold mb-6">Главная страница</h1>

        @livewire('tables.requests-table')
    </div>

</body>

</html>