<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Select2 in Livewire</title>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

    @livewireStyles
</head>
<body class="bg-gray-100">
<div class="font-sans text-gray-900 antialiased">
    <div class="flex flex-col sm:justify-center items-center pt-5 pb-5">
        <h2 class="font-bold text-2xl">Select2 in Livewire: Tailwind Version</h2>

        <div class="w-full sm:max-w-2xl mt-6 mb-6 px-6 py-8 bg-white shadow-md overflow-hidden sm:rounded-lg">
            @livewire('product-create')
        </div>

        <a href="{{ route('bootstrap') }}">See Bootstrap version</a>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
@livewireScripts
@stack('scripts')
</body>
</html>
