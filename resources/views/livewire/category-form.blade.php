<form class="w-full py-2 px-8 mt-4 h-full overflow-y-auto">

    <div class="w-full mb-3">
        <span class="text-gray-400 text-xs ">{{ __('Category Informations')}}</span>
        <div class="bg-gray-200 w-full h-px"></div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-4">
        <div class="w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-1" for="title">
                {{ __('Title') }}
            </label>
            <input type="text" wire:model="title" name="title" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-gray-500 focus:outline-none focus:transition-shadow" placeholder="Title" id="title" />
            @error('title') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-4">
        <div class="w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-1" for="description">
                {{ __('Description') }}
            </label>
            <textarea type="text" rows="5" wire:model="description" name="description" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-gray-500 focus:outline-none focus:transition-shadow" placeholder="Description" id="description"></textarea>
            @error('description') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="{{ $showSubCategory ? 'hidden' : 'flex' }} flex-wrap -mx-3 mb-4">
        <div class="w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-1" for="total">
                {{ __('Total') }} (DH)
            </label>
            <input type="text" name="total" wire:model="total" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-gray-500 focus:outline-none focus:transition-shadow" placeholder="Total" id="total" />
            @error('total') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="flex justify-start items-center space-x-2 w-full mb-3">
        <div class="flex justify-start items-center">
            <button wire:click="showSubCategoryForm" type="button" class="bg-gray-700 text-white py-2 px-5 rounded-md text-sm cursor-pointer mb-1">{{ $showSubCategory ? __('Remove Sub Category') :__('Add Sub Category') }}</button>
        </div>
    </div>

    @if($showSubCategory)
    <div class="w-full mb-3">
        <span class="text-gray-400 text-xs ">{{ __('Add The Sub Category Informations')}}</span>
        <div class="bg-gray-200 w-full h-px"></div>
    </div>

    <div class="w-full flex justify-between items-start mb-4 space-x-12">
        @foreach ($subCategory as $index => $sub)

        <div wire:key="012{{ $loop->index }}" class="w-1/2">
            <div class="flex flex-wrap -mx-3 mb-4">
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-1" for="title_{{ $index }}">
                        {{ __('Title') }}
                    </label>
                    <input type="text" wire:model="subCategory.{{$index}}.title" name="title" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-gray-500 focus:outline-none focus:transition-shadow" placeholder="Title" id="title_{{ $index }}" />
                    @error("subCategory.$index.title") <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-4">
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-1" for="description_{{ $index }}">
                        {{ __('Description') }}
                    </label>
                    <textarea type="text" rows="3" wire:model="subCategory.{{$index}}.description" name="description" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-gray-500 focus:outline-none focus:transition-shadow" placeholder="Description" id="description_{{ $index }}"></textarea>
                    @error("subCategory.$index.description") <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                </div>
            </div>

            <!-- billings form -->
            <div class="w-full mb-3">
                <div class="flex justify-between">
                    <span class="text-gray-400 text-xs ">{{ __('Add The Billings')}}</span>
                    <button wire:click.prevent="addBillingForm('{{$index}}')" type="button" class="text-gray-400 rounded-full"><i class="fa-solid fa-plus-circle"></i></button>
                </div>
                <div class="bg-gray-200 w-full h-px"></div>
            </div>


            @forelse ($billings[$index] as $indexB => $billing)

            <div wire:key="{{ now()->timestamp.$index.$loop->index }}" class="mb-4">
                <div class="flex justify-between items-center mb-3 space-x-4">
                    <div class="flex flex-wrap w-1/2 mb-6 md:mb-0">
                        <label class="uppercase tracking-wide text-gray-500 text-xs font-bold mb-1" for="title_{{$index}}_{{$indexB}}">
                            {{ __('Title') }}
                        </label>
                        <input type="text" wire:model.defer="billings.{{$index}}.{{$indexB}}.title" value="{{ $subCategory[$index]['title'] }} - {{$indexB+1}}" name="title" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-gray-500 focus:outline-none focus:transition-shadow" placeholder="Title" id="title_{{$index}}_{{$indexB}}" />
                        @error("billings.$index.$indexB.title") <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    </div>

                    <div class="w-1/2 mb-6 md:mb-0">
                        <label class="uppercase tracking-wide text-gray-500 text-xs font-bold mb-1" for="total_{{$index}}_{{$indexB}}">
                            {{ __('Total') }} (DH)
                        </label>
                        <input type="text" wire:model.lazy="billings.{{$index}}.{{$indexB}}.total" name="total" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-gray-500 focus:outline-none focus:transition-shadow" placeholder="Total" id="total_{{$index}}_{{$indexB}}" />
                        @error("billings.$index.$indexB.total") <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    </div>

                    @if(!$loop->first)
                    <button wire:click.prevent="removeBillingForm('{{$index}}','{{$indexB}}')" type="button" class="mt-6">
                        <i class="fa-solid fa-times-circle text-red-400 cursor-pointer"></i>
                    </button>
                    @endif

                </div>
            </div>
            @empty
            <div class="py-4 px-3 mb-3 bg-gray-300 rounded-xl text-center">
                <span class="text-sm font-semibold text-white">Please use the plus icon <i class="fa-solid fa-plus-circle"></i> To add new billing</span>
            </div>
            @endforelse

            <!-- billings form -->
            <div class="w-full mb-3">
                <span class="text-gray-400 text-xs ">{{ __('Total Of Subcategory')}}</span>
                <div class="bg-gray-200 w-full h-px"></div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-4">
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-1" for="total_{{ $index }}">
                        {{ __('Total') }} (DH)
                    </label>
                    <input type="text" value="{{ $subCategory[$index]['total'] }}" name="total" disabled class="disabled:opacity-75 disabled:bg-gray-100 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-gray-500 focus:outline-none focus:transition-shadow" placeholder="Total" id="total_{{ $index }}" />
                </div>
            </div>

        </div>
        @endforeach
    </div>
    @endif


    <div class="w-full mb-3">
        <div class="flex justify-end items-center">
            <button wire:click.prevent="save" class="bg-gray-700 text-white py-2 px-5 rounded-md text-sm cursor-pointer mb-1">{{ __('Save')}}</button>
        </div>
    </div>

</form>