<x-layout>
    <x-slot:heading>Jobs listing</x-slot:heading>
    <div class="space-y-4">
        @foreach ($Jobs as $job )
            <a href="job/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                <div class="font-bold text-blue-500">
                    {{ $job->employer->name }}
                </div>
                <div>
                    <strong>{{ $job['Title'] }}</strong> Pays {{ $job['Salary'] }} per year
                </div>
            </a>
        @endforeach
        <div>
            {{ $Jobs->links() }}
        </div>
    </div>
</x-layout>
