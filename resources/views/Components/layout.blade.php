<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First Project</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="shrink-0 text-white font-bold">
                        My Website
                    </div>

                    <div class="hidden md:block ml-10">
                        <div class="flex items-baseline space-x-4">
                           <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                           <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
                           <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">
                {{ $heading }}
            </h1>
        </div>
    </header>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            {{ $slot }} //where the main page content will appear 
        </div>
    </main>

</body>
</html>