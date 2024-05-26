<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>
    <form method="POST" action="/jobs">
        @csrf
        <h2 class="font-bold text-2xl">Create a Job</h2>
        <p>We just need handfull of job details.</p>
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="title">Title</x-form-label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <x-form-input type="text" name="title" id="title" autocomplete="title"
                                    placeholder="CEO Leader" />
                            </div>
                        </div>
                        <x-form-error name="title" />
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="sallary">Sallary</x-form-label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <x-form-input type="text" name="sallary" id="sallary" autocomplete="sallary"
                                    placeholder="$50,000 per year" />
                            </div>
                        </div>
                        <x-form-error name="sallary" />
                    </x-form-field>
                </div>
            </div>

        </div>
        {{-- <div>
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-red-500 italic">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div> --}}

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <x-form-button>Save</x-form-button>
        </div>
    </form>

</x-layout>
