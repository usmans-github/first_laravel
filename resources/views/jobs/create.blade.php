<x-layout>
    <form method="POST" action="/jobs">
        @csrf

        <div class="space-y-12">
            <div class=" pb-12">
                <h2 class="text-xl font-bold text-gray-900">Create a Job</h2>
                <p class="mt-1 text-sm text-gray-600">We just need basic info.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    {{-- job title  --}}
                    <x-form-field class="sm:col-span-4">
                        <x-form-label  for='title' >Title</x-form-label>
                        <div class="mt-2">
                           <x-form-input type="text" name="title" id="title" placeholder="Software Engineer" required />
                          <x-form-error name='title' />
                        </div>
                       
                    </x-form-field>
                    {{-- //Salary --}}
                    <x-form-field class="sm:col-span-4">
                        <x-form-label  for='salary' >Salary</x-form-label>
                        <div class="mt-2">
                           <x-form-input type="text" name="salary" id="salary" placeholder="$10,000" required />
                          <x-form-error name='salary' />
                        </div>
                       
                    </x-form-field>
                </div>
                {{-- <div class="error mt-4">

                    @if ($errors->any())
                        <ul class="flex flex-col ">

                            @foreach ($errors->all() as $error)
                                <li class="text-red-500">{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div> --}}

            </div>


            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/jobs" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
               <x-form-button>Create</x-form-button>
            </div>
    </form>

</x-layout>
