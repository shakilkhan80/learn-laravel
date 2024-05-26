<x-layout>
    <x-slot:heading>
        Register User
    </x-slot:heading>
    <form method="POST" action="/register">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="first_name">First Name</x-form-label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <x-form-input type="text" name="first_name" required id="first_name"
                                    autocomplete="first_name" placeholder="CEO Leader" />
                            </div>
                        </div>
                        <x-form-error name="first_name" />
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="last_name">Last Name</x-form-label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <x-form-input type="text" name="last_name" required id="last_name"
                                    autocomplete="last_name" placeholder="$50,000 per year" />
                            </div>
                        </div>
                        <x-form-error name="last_name" />
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="email">Email</x-form-label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <x-form-input type="email" name="email" id="email" required autocomplete="email"
                                    placeholder="$50,000 per year" />
                            </div>
                        </div>
                        <x-form-error name="email" />
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="password">Password</x-form-label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <x-form-input type="password" name="password" required id="password"
                                    autocomplete="password" placeholder="$50,000 per year" />
                            </div>
                        </div>
                        <x-form-error name="password" />
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <x-form-input type="password" required name="password_confirmation"
                                    id="password_confirmation" autocomplete="password_confirmation"
                                    placeholder="$50,000 per year" />
                            </div>
                        </div>
                        <x-form-error name="password_confirmation" />
                    </x-form-field>

                </div>
            </div>

        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-form-button>Register</x-form-button>
        </div>
    </form>

</x-layout>
