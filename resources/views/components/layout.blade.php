<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
    <header class="mx-16">
        <nav class="flex justify-between items-center">
            <x-nav-link href="/"><h1 class="text-4xl font-bold">LARAVEL</h1></x-nav-link>
            
            
            <ul class="flex justify-start items-center gap-10">
                <x-nav-link href="/">Home</x-nav-link>
                <x-nav-link href="/jobs">Jobs</x-nav-link>   
            </ul>
        </nav>
    </header>
    <main class="flex flex-col justify-center items-center">
        {{ $slot }}
    </main>
</body>
</html>
