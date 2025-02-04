<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('quizzes.store') }}">
                @csrf

                <!-- Quiz name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Category -->
                <div>
                    <x-input-label for="category_id" :value="__('Category')" />
                    <x-select-input id="category_id" class="block mt-1 w-full" name="category_id" :value="old('category_id')" :options="$categories" />
                </div>

                <!-- Randomize -->
                <div>
                    <label for="randomize" class="inline-flex items-center">
                        <input id="randomize" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="randomize" value="1">
                        <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Randomize questions and answers') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ms-4">
                        {{ __('Save quiz') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
