<x-layout>
    <x-slot:heading>
        Job Listing
    </x-slot:heading>
    <div class="spece-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                <div class="font-blod text-blue-400 text-sm">
                    {{ $job->employer->name }}
                </div>
                <div>
                    <strong>{{ $job['title'] }}</strong>: pays
                    {{ $job['sallary'] }}
                </div>
            </a>
        @endforeach
    </div>
    <div>
        {{ $jobs->links() }}
    </div>
</x-layout>
