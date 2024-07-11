<x-layout>
    <x-slot:heading>Jobs listing</x-slot:heading>
    <ul>
        @foreach ($Jobs as $job )
            <a href="job/{{ $job['id'] }}" class="text-blue-500 hover:underline">
                <li><strong>{{ $job['Title'] }}</strong> Pays {{ $job['Salary'] }} per year</li>
            </a>
        @endforeach
    </ul>
</x-layout>
