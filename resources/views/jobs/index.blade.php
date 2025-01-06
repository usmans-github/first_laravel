<x-layout>
    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-4 border border-black rounded-lg">
                <div class="text-sm font-medium text-indigo-400 ">{{ $job->employer->name}}</div>
                <div>
                    <strong>{{ $job['title']}}: </strong>Pays {{ $job['salary'] }} per year.
                </div>
            </a>
        @endforeach
        <div>
            {{ $jobs->links()}}
        </div>
    </div>
</x-layout>
