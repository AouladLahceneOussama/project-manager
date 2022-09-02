<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category Detail') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-6 space-x-8">
                <span class="px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer active:opacity-85 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gray-700 hover:border-slate-700 hover:bg-slate-700 hover:text-white">
                    {{ __('Total') }} : {{ $category->total}} DH
                </span>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                    <div class="w-full py-2 px-8 mt-4 h-full overflow-y-auto">

                        <div class="w-full mb-3">
                            <span class="text-gray-400 text-xs ">{{ __('Category Detail')}}</span>
                            <div class="bg-gray-200 w-full h-px"></div>
                        </div>


                        <div class="w-full flex px-3 mb-2">
                            <p class="text-md rounded-lg bg-white bg-clip-padding px-3 font-semibold text-gray-900">
                                {{ __('Title')}} :
                            </p>
                            <p class="text-md rounded-lg bg-white bg-clip-padding px-3 font-normal text-gray-700">
                                {{ $category->title}}
                            </p>
                        </div>

                        <div class="w-full flex px-3 mb-2">
                            <p class="text-md rounded-lg bg-white bg-clip-padding px-3 font-semibold text-gray-900">
                                {{ __('Description')}} :
                            </p>
                            <p class="text-md rounded-lg bg-white bg-clip-padding px-3 font-normal text-gray-700">
                                {{ $category->description}}
                            </p>
                        </div>

                        @if($category->subcategories->count() >0)
                        <div class="w-full mb-3">
                            <span class="text-gray-400 text-xs ">{{ __('Sub Category Detail')}}</span>
                            <div class="bg-gray-200 w-full h-px"></div>
                        </div>
                        @foreach($category->subcategories as $sub)
                        <div class="w-full flex px-3 mb-2">
                            <p class="text-md rounded-lg bg-white bg-clip-padding px-3 font-semibold text-gray-900">
                                {{ __('Title')}} :
                            </p>
                            <p class="text-md rounded-lg bg-white bg-clip-padding px-3 font-normal text-gray-700">
                                {{ $sub->title}}
                            </p>
                        </div>
                        <div class="w-full flex px-3 mb-2">
                            <p class="text-md rounded-lg bg-white bg-clip-padding px-3 font-semibold text-gray-900">
                                {{ __('Description')}} :
                            </p>
                            <p class="text-md rounded-lg bg-white bg-clip-padding px-3 font-normal text-gray-700">
                                {{ $sub->description}}
                            </p>
                        </div>
                        @if (!$loop->last)
                        <div class="w-full h-4 rounded-lg"></div>
                        @endif

                        @endforeach
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>