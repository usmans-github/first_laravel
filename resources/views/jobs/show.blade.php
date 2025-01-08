<x-layout>
    <div class="mb-8">
        <h1 class="text-2xl font-bold mt-4 mb-4 "> Job Description</h1>
        <h2><strong>Title:</strong> {{ $job->title }}</h2>
        <p><strong>Salary:</strong> Company Pays <strong>{{ $job->salary }} </strong>per year</p>

    </div>

    @can('edit', $job)
        <p class="mt-4 ">
            <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
        </p>
    @endcan



</x-layout>
