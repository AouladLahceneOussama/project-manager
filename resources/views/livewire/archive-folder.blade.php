<div x-data="{ open:false }" class="bg-white overflow-hidden shadow-sm sm:rounded-lg my-4 p-6">
    <div x-data="{ edit: @entangle('showEdit').defer }" class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="w-full flex justify-between items-center mb-2">

            <!-- show folder name -->
            <div x-show="!edit">
                <span>
                    {{ $folder->name }}
                </span>

                <span class="text-gray-700 text-xs">
                    ( {{ $folder->archives()->count() }} )
                </span>
            </div>

            <!-- edit folder name -->
            <div class="w-1/2 flex justify-start items-center space-x-2" x-show="edit">
                <input type="text" wire:model.lazy="newFolderName" value="{{ $folder->name }}" class="text-sm w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white px-3 py-2 font-normal text-gray-700 transition-all focus:border-gray-500 focus:outline-none focus:transition-shadow">
                @if (session()->has('message')) <span class="text-gray-400 text-xs">{{ session('message') }}</span>@endif
            </div>

            <div class="flex justify-center items-center">
                <i @click="edit = !edit" class="fa-solid fa-pen text-green-500 px-2 cursor-pointer text-xs"></i>
                <form wire:submit.prevent="deleteFolder">
                    @csrf
                    <button onclick="return confirm('Etes-vous sur de supprimer cette element?')"><i class="fa-solid fa-trash text-red-500 p-1 cursor-pointer text-xs"></i></button>
                </form>
                <i wire:click="getArchives" @click="open = !open" class="fa-solid fa-square-caret-down text-gray-700 px-2 cursor-pointer text-sm"></i>
            </div>

        </div>

        <div x-show="open" class="mt-4 pt-4 border-t-2 border-gray-50">
            @forelse($archives as $archive)
            <div class="flex justify-between items-center px-4">
                <div>
                    <p class="mb-0 leading-tight text-xs text-slate-700">
                        {{ $archive->original_name }} <span class="text-xs text-gray-500"> ( {{ $archive->type }} )</span>
                    </p>
                </div>

                <div class="flex justify-center items-center">
                    <a href="{{ Storage::disk('public')->url($archive->path) }}" download>
                        <i class="fa-solid fa-download text-indigo-500 px-2 cursor-pointer text-xs"></i>
                    </a>
                    <form method="post" action="{{ route('archives.delete', [$archive->project_id, $archive->id]) }}">
                        @csrf
                        <button onclick="return confirm('Etes-vous sur de supprimer cette element?')"><i class="fa-solid fa-trash text-red-500 p-1 cursor-pointer text-xs"></i></button>
                    </form>
                </div>
            </div>

            @empty
            <div class="text-center">
                <p>This folder is empty</p>
            </div>
            @endforelse
        </div>

    </div>
</div>