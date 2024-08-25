<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document X</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body class="bg-gray-100">
<div class="container mx-auto">
{{-- Without components --}}
    <x-blank-page componentsJson='[]' />

    {{-- With components --}}
{{--    <x-blank-page componentsJson='[{"type":"Header","content":"This is a header"}, {"type":"Paragraph","content":"This is a paragraph"}]' />--}}
</div>
</body>
</html>
