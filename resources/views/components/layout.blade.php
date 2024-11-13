<!doctype html>
<html>
<head>
    <title>layout</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <div id="layout">
        <small><pre>components/layout</pre></small>

        <x-navigation />

        <h1 class="text-2xl">{{ $headline  }}</h1>

        {{ $slot }}
    </div>

</body>
</html>
