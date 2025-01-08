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
    <header class="mx-16 border border-black px-6 rounded-full">
        <nav class="flex items-center justify-between gap-8  my-2">
            <div class="logo and links flex justify-between items-center gap-24">
                <x-nav-link href="/" class="no-underline"> 
                    <h1 class="text-4xl  text-red-500 font-bold">larajobs</h1>
                </x-nav-link>


                <ul class="flex justify-start items-center gap-6">
                    <x-nav-link href="/jobs">Jobs</x-nav-link>
                    <x-nav-link href="/jobs">Consultants</x-nav-link>
                    <x-nav-link href="/jobs">Github</x-nav-link>
                    <x-nav-link href="/login">Login</x-nav-link>
                </ul>
            </div>
            <div class="buttons flex items-center gap-4">
                @guest
                <x-nav-link href="/login">Login</x-nav-link>
                <x-nav-link href="/register" class="border border-black px-2 py-1 rounded-lg">Register</x-nav-link>
                @endguest

                @auth
                    <form method="POST" action="/logout">
                        @csrf
                        <x-form-button>Logout</x-form-button>
                    </form>
                @endauth
               
                
            </div>
        </nav>
    </header>
    <main class="mx-16 my-10">
        {{ $slot }}
    </main>
</body>

</html>
