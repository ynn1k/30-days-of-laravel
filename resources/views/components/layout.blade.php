<!doctype html>
<html>
<head>
    <title>layout</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        #layout, #layout div {
            padding: 8px;
            margin: 8px;
            outline: dashed 1px #ff000044;
        }
    </style>
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
