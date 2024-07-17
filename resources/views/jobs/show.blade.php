<x-layout>
    <x-slot:heading>Job</x-slot:heading>
    <h1 class="font-bold text-lg">{{ $job['Title'] }}</h1>
    <p>This job pays {{ $job['Salary'] }} per year</p>
</x-layout>
