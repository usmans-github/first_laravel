<x-layout>

    <h2 class="text-xl font-bold">Edit job: {{ $job->title }} </h2>
    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('PATCH')
        <div class="space-y-12">
            <div class=" pb-12">
               

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    {{-- job title  --}}
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1
                                outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2
                                focus-within:outline-indigo-600">
                                <input
                                 type="text" name="title" id="title" required
                                 value="{{ $job->title }}" 
                                 class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400
                                     focus:outline focus:outline-0 sm:text-sm/6"
                                 placeholder="e.g software engineer">
                            </div>
                            @error('title')
                                <p class="mt-2 text-sm font-semibold text-red-400 ">{{ $message }}</p>
                            @enderror
                        </div>
                       
                    </div>
                    {{-- //Salary --}}
                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm/6 font-medium text-gray-900">Salary</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1
                                 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2
                                  focus-within:outline-indigo-600">
                                <input type="text" name="salary" id="salary" required
                                value="{{ $job->salary }}"
                                    class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400
                                      focus:outline focus:outline-0 sm:text-sm/6"
                                    >
                            </div>
                            @error('salary')
                                <p class="mt-2 text-sm font-semibold text-red-400 ">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
               
            </div>


            <div class="mt-6 flex items-center justify-between gap-x-6">
                <div class="left  flex justify-center items-center">
                    <button form="delete" class="bg-red-600 hover:bg-red-500 text-white rounded-md px-3 py-2 text-sm font-semibold">Delete</button>
                </div>
                <div class="right flex justify-center items-center gap-5">

                    <a href="/jobs/{{ $job->id }}" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                    
                    
                    <div><x-form-button type="submit">Update</x-form-button></div>
                </div>
            </div>
    </form>
    <form action="/jobs/{{ $job->id }}" method="POST" class="hidden" id="delete">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
