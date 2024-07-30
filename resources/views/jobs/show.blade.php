<x-layout>
    <x-slot:heading>Job</x-slot:heading>
    <h1 class="font-bold text-lg">{{ $job['Title'] }}</h1>
    <p>This job pays {{ $job['Salary'] }} per year</p>
    @can('edit',$job)
        <x-button href="/job/{{ $job->id }}/edit" class="mt-3">Edit</x-button>
    @endcan
</x-layout>
