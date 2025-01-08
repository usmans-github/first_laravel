<x-layout>
    <form method="POST" action="/login">
        @csrf
        <div  class="flex flex-col justify-center items-center">
            <div class="heading flex justify-center items-center">
                <h2 class="text-2xl font-bold text-center text-gray-900">Login</h2>
            </div>

            <div class="inputfields flex justify-center items-center">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-4  w-[30vw]">

                    {{-- email --}}
                    <x-form-field class="sm:col-span-4">
                        <x-form-label for='email'>Email</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="email" name="email" id="email" :value="old('email')" required />
                            <x-form-error name='email' />
                        </div>

                    </x-form-field>

                    {{-- password --}}
                    <x-form-field class="sm:col-span-4">
                        <x-form-label for='password'>Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="password" name="password" id="password" required />
                            <x-form-error name='password' />
                        </div>

                    </x-form-field>
                    
                </div>
            </div>

            <div class="buttons flex justify-between items-center  mt-6 w-[30vw]  gap-x-6">
                <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                <x-form-button>Login</x-form-button>
            </div>      
        </div>
    </form>

</x-layout>
