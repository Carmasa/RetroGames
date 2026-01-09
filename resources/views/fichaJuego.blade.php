<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>{{ $game['title'] }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">

    <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-lg p-6">
        <img src="{{ $game['cover'] }}" alt="{{ $game['title'] }}" class="w-full rounded-lg mb-6">

        <h1 class="text-3xl font-bold mb-4">{{ $game['title'] }}</h1>

        <p class="text-gray-700 text-lg leading-relaxed">
            {{ $game['description'] }}
        </p>

        <a href="/" class="inline-block mt-6 text-blue-600 hover:underline">
            ← Volver a la lista
        </a>
    </div>

</body>
</html>
