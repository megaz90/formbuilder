<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Form Builder</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Tailwind CSS -->
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

        <!-- Styles -->
        <style>

        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <nav class="container mx-auto">
            <h1 class="text-center bg-blue-400 font-bold p-4 text-5xl">
                <a href="/">Form Builder</a>
            </h1>
        </nav>

        <main class="container mt-14 mx-auto">
            <div class="flex justify-center space-x-10">
                <button class="py-1 px-6 mb-14 rounded-2xl border-2 border-blue-500 hover:bg-blue-300" id="json">JSON</button>
                <button class="py-1 px-6 mb-14 rounded-2xl border-2 border-blue-500 hover:bg-blue-300" id="save">SAVE</button>
                <button class="py-1 px-6 mb-14 rounded-2xl border-2 border-red-500 hover:bg-red-200" id="save">CLEAR ALL</button>
            </div>
            <div id="fb-editor"></div>
        </main>


        <script src="{{ asset('assets/libs/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/libs/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('assets/libs/form-builder.min.js') }}"></script>
        <script src="{{ asset('assets/js/form-builder.init.js') }}"></script>
    </body>
</html>
