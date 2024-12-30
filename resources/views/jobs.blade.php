<x-layout>
    <div class="">
        <h1 class="text-2xl font-bold mt-4 mb-4 "> Jobs available</h1>

        <ul role="list" class="list-disc flex flex-col justify-center gap-2">
            @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id']}}">
                <li>
                    <span class="px-2 bg-zinc-900 text-white">{{$job["id"]}}</span>
                    <strong>{{ $job["title"] }}</strong>
                    {{ $job['salary'] }}
                </li>
            </a>
            @endforeach

        </ul>

    </div>

</x-layout>