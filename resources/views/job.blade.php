<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h2 class="text-2xl font-bold">{{ $job['title'] }}</h2>
    <p>This job pays {{ $job['sallary'] }} per year</p>
</x-layout>
