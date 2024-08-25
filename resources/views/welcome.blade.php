<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document X</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body class="bg-gray-100">
<div class="flex">
    <!-- Side Drawer -->
    <x-side-drawer />

    <!-- Main Content Area -->
    <div class="flex-1 ml-12">
        <x-blank-page componentsJson="[]" />
    </div>
</div>
</body>
</html>
