<x-layout>
    <h1 class=" text-2xl font-bold mt-4 mb-4 "> Jobs available</h1>
    <div class="space-y-4">


        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-4  border border-black rounded-md">
                <div class="text-xs font-medium text-indigo-400">{{ $job->employer->name }}</div>
                <div>
                    <strong>{{ $job['title']}}:</strong> Pays {{ $job['salary']}} per year.
                </div>
            </a>
        @endforeach
        <div>
            
            {{ $jobs->links() }}
        </div>
        
    </div>
    
</x-layout>
