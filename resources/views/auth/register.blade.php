<x-layout>
    <form method="POST" action="/register">
        @csrf
        <div  class="flex flex-col justify-center items-center">
            <div class="heading flex justify-center items-center">
                <h2 class="text-2xl font-bold text-center text-gray-900">Register</h2>
            </div>

            <div class="inputfields flex justify-center items-center">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-4  w-[30vw]">
                    {{-- first_name  --}}
                    <x-form-field class="sm:col-span-4">
                        <x-form-label for='title'>First name</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="text" name="first_name" id="first_name" required />
                            <x-form-error name='first_name' />
                        </div>

                    </x-form-field>
                    {{-- last_name --}}
                    <x-form-field class="sm:col-span-4">
                        <x-form-label for='last_name'>Last name</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="text" name="last_name" id="last_name" required />
                            <x-form-error name='last_name' />
                        </div>

                    </x-form-field>

                    {{-- email --}}
                    <x-form-field class="sm:col-span-4">
                        <x-form-label for='email'>Email</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="email" name="email" id="email" required />
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
                    {{-- password confirmation --}}
                    <x-form-field class="sm:col-span-4">
                        <x-form-label for='password_confirmation'>Confirm Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="password" name="password_confirmation" id="password_confirmation"
                                required />
                            <x-form-error name='password_confirmation' />
                        </div>

                    </x-form-field>
                </div>
            </div>

            <div class="buttons flex justify-between items-center  mt-6 w-[30vw]  gap-x-6">
                <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                <x-form-button>Register</x-form-button>
            </div>      
        </div>
    </form>

</x-layout>
