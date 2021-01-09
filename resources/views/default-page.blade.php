<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Aldrumo- Laravel CMS</title>
        <meta name="author" content="Mike Barlow">
        <meta name="description" content="Aldrumo is a modular Laravel CMS">
        <link href="https://fonts.googleapis.com/css?family=Sansita+Swashed|Open+Sans:400,700&display=swap" rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <style>
            body {
                font-family: "Open Sans", "Helvetica", "Arial", "sans-serif";
            }

            .font-display {
                font-family: "Sansita Swashed", cursive;
            }
        </style>
    </head>

    <body class="bg-gray-200 font-sans">
        <div class="container mx-auto mt-40 text-center">
            <h1 class="text-5xl font-display mb-6">Aldrumo</h1>

            <p class="text-lg">This is the default Aldrumo page, you can now begin setting up your pages via the admin panel.</p>

            <div class="mt-10 mx-auto w-full flex text-base">
                <a href="{{ route('admin.dashboard') }}" class="mr-8 flex flex-grow justify-end hover:text-indigo-600">
                    <x-heroicon-s-pencil-alt class="w-4 h-4 mr-2 mt-1"/>
                    Admin Panel
                </a>

                <a href="#" class="mr-8 flex hover:text-indigo-600">
                    <x-heroicon-s-support class="w-4 h-4 mr-2 mt-1"/>
                    Documentation
                </a>

                <a href="https://github.com/Aldrumo" class="mr-8 flex hover:text-indigo-600">
                    <x-fab-github class="w-4 h-4 mr-2 mt-1"/>
                    Github
                </a>

                <a href="#" class="mr-8 flex flex-grow hover:text-indigo-600">
                    <x-fab-twitter class="w-4 h-4 mr-2 mt-1"/>
                    Twitter
                </a>
            </div>
        </div>
    </body>
</html>
