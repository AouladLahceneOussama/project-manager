<div x-data="{ open:false}">
    <button @click="open = !open" type="button" class="px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer active:opacity-85 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gray-700 hover:border-slate-700 hover:bg-slate-700 hover:text-white">
        {{ __('Create Folder') }}
    </button>

    <div x-show="open" class="fixed top-0 right-0 h-screen w-full z-50 bg-gray-500/50 flex justify-center items-center">
        <div class="bg-white w-full max-w-7xl rounded-md shadow-md py-4 px-6">
            <div class="w-full flex justify-end">
                <i @click="open = !open" class="fa-solid fa-times-circle text-gray-700 cursor-pointer"></i>
            </div>
            <div class="w-full mb-4 my-8">
                <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-1" for="foldername">
                    Folder name
                </label>
                <input wire:model="name" class="text-sm ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-gray-500 focus:outline-none focus:transition-shadow" id="foldername" />
                @error('name') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </div>


            <div class="w-full">
                <div class="flex justify-end items-center space-x-2">
                    <button @click="open = !open" class="bg-red-500 text-white py-2 px-5 rounded-md text-sm cursor-pointer mb-1">{{ __('Cancel')}}</button>
                    <button wire:click.prevent="store" class="bg-gray-700 text-white py-2 px-5 rounded-md text-sm cursor-pointer mb-1">{{ __('Create folder')}}</button>
                </div>
            </div>
        </div>
    </div>
</div>