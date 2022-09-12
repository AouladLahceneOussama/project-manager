<div class="flex justify-start items-center space-x-2">
    <input type="text" wire:model="remark" value="{{$belling->remark}}" name="remark" class="text-sm block w-full appearance-none rounded-lg border border-gray-300 bg-white px-3 py-2 font-normal text-gray-700 transition-all focus:border-gray-500 focus:outline-none" placeholder="Remarque" />
    @error("remark") <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
    @if (session()->has('message')) <div class="text-gray-500 font-semibold">{{ session('message') }}</div> @endif

    <i wire:click="save" class="fa-solid fa-circle-exclamation text-red-400 cursor-pointer"></i>
</div>