<x-layout>
    <div>
        <h1 class="text-2xl font-bold mt-4 mb-4 "> Job Description</h1>
        <h2><strong>Title:</strong> {{ $job["title"]}}</h2>
        <p><strong>Salary:</strong> Company Pays <strong>{{ $job["salary"]}} </strong>per year</p>

    </div>

</x-layout>