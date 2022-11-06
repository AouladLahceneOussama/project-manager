<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Archive') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Button to create a folder -->
            @livewire('create-folder', ['projectId' => $id])


            <!-- Upload file -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-6 my-4">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="py-5 px-4">
                        <form method="post" action="{{ route('archives.create', $id) }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="project_id" value="{{$id}}">
                            
                            <div class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-1">
                                <span>File</span>
                            </div>
                            <div class="flex justify-center items-center w-full">
                                <label x-data="{ files: null }" for="dropzone-file" class="flex flex-col justify-center items-center w-full h-42 rounded-lg border-2 border-gray-300 border-dashed cursor-pointer  hover:bg-gray-50 ease-in-out duration-150">
                                    <div class="flex flex-col justify-center items-center pt-5 pb-6">
                                        <svg aria-hidden="true" class="mb-3 w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                        </svg>
                                        <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload your files</span></p>
                                        <p class="text-xs text-gray-500 font-semibold" x-text="files ? files.map(file => file.name).join(', ') : 'PDF, DOCS, JPEG, PNG, JPG...'"></p>
                                    </div>
                                    <input x-on:change="files = Object.values($event.target.files)" name="archive_file" id="dropzone-file" type="file" class="hidden" />
                                </label>
                            </div>
                            <div class="w-full mb-4">
                                @error('archive_file') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                            </div>

                            <div class="w-full mb-4">
                                <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-1" for="folder">
                                    Folder
                                </label>
                                <select name="archive_folder" class="text-sm ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-gray-500 focus:outline-none focus:transition-shadow" id="folder">
                                    <option value="">{{ __('Please pick the folder or Create a new one') }}</option>

                                    @foreach($folders as $folder)
                                    <option value="{{ $folder->id }}">{{ $folder->name }}</option>
                                    @endforeach
                                </select>
                                @error('archive_folder') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                            </div>

                            <div class="w-full">
                                <div class="flex justify-end items-center">
                                    <button class="bg-gray-700 text-white py-2 px-5 rounded-md text-sm cursor-pointer mb-1">{{ __('Add File')}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Folders dragger -->
            @forelse($folders as $folder)
            <livewire:archive-folder :folder="$folder" :key="$folder->id" />
            @empty
            <div>
                Add folders first
            </div>
            @endforelse

        </div>
    </div>
</x-app-layout>