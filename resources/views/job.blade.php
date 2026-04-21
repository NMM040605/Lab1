<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2 class="text-lg font-bold">{{ $job['title'] }}</h2>

    <p class="mt-2 text-gray-700">
        This job pays {{ $job['salary'] }} per year
    </p>
</x-layout>