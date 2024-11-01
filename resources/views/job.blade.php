<x-layout>
    <x-slot name="heading">
        Job Listing
    </x-slot>

    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>
    <p>
        This job pays {{ $job['salary'] }} per month
    </p>

</x-layout>