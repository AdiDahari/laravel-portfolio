<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Store new Project') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8 bg-gray-800 shadow-md rounded-md text-white">
            <form method="POST" action="{{ route('projects.store') }}" class="p-4" enctype="multipart/form-data">
                @csrf

                <!-- Skill ID -->
                <label for="skill_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                    Skill</label>
                <select id="skill_id" name="skill_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach ($skills as $skill)
                        <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                    @endforeach
                </select>


                <!-- Name -->
                <div class="mt-2">
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                        :value="old('name')" required autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Project URL -->
                <div class="mt-2">
                    <x-input-label for="project_url" :value="__('URL')" />
                    <x-text-input id="project_url" class="block mt-1 w-full" type="text" name="project_url"
                        :value="old('project_url')" required autofocus />
                    <x-input-error :messages="$errors->get('project_url')" class="mt-2" />
                </div>

                <!-- Image -->
                <div class="mt-4">
                    <x-input-label for="image" :value="__('Image')" />

                    <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" />

                    <x-input-error :messages="$errors->get('image')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ml-3">
                        {{ __('Store') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
