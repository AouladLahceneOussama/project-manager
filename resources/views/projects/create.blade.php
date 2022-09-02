<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Project') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <form method="post" class="w-full py-2 px-8 mt-4 h-full overflow-y-auto">
                        @csrf

                        <div class="w-full mb-3">
                            <span class="text-gray-400 text-xs ">{{ __('Project Informations')}}</span>
                            <div class="bg-gray-200 w-full h-px"></div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-4">

                            <div class="w-full px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-1" for="title">
                                    {{ __('Title') }}
                                </label>
                                <input type="text" name="title" class="text-size-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-gray-500 focus:outline-none focus:transition-shadow" placeholder="Title" id="title" />
                                @error('title') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="w-full mb-3">
                            <span class="text-gray-400 text-xs ">{{ __('Manager Informations')}}</span>
                            <div class="bg-gray-200 w-full h-px"></div>
                        </div>

                        <div class="w-full -mx-3 mb-4">

                            <div class="w-full px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-1" for="manager">
                                    Manager
                                </label>
                                <select name="manager" class="text-sm ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-gray-500 focus:outline-none focus:transition-shadow" id="manager">
                                    <option value="">{{ __('Please pick a manager') }}</option>
                                    
                                    @foreach($managers as $manager)
                                    <option value="{{ $manager->id }}">{{ $manager->name }}</option>
                                    @endforeach
                                </select>
                                @error('manager') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                            </div>
                        </div>

                        <div class="w-full mb-3">
                            <div class="flex justify-end items-center">
                                <button class="bg-gray-700 text-white py-2 px-5 rounded-md text-sm cursor-pointer mb-1">{{ __('Add')}}</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>