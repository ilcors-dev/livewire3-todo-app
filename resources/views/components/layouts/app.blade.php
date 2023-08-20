<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{ darkMode: (localStorage.getItem('darkMode') && localStorage.getItem('darkMode') === 'true') }" x-bind:class="darkMode ? 'dark' : ''"
    x-cloak
    x-on:dark-mode-toggle.window="($event) => {
        darkMode = $event.detail.checked;
        localStorage.setItem('darkMode', darkMode);
    }">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <title>{{ $title ?? 'Page Title' }}</title>
    @vite(['resources/css/app.css'])
</head>

<body class="h-screen bg-amber-300 dark:bg-gray-800">
    <livewire:navbar />
    <main>
        {{ $slot }}
    </main>
</body>

</html>
