<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Details of category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-6 space-x-8">
                <span class="px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer active:opacity-85 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gray-700 hover:border-slate-700 hover:bg-slate-700 hover:text-white">
                    {{ __('Total') }} : {{ $category->total }} DH
                </span>
            </div>
            <div class="bg-white py-4 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                    <div class="w-full py-2 px-8 h-full overflow-y-auto">

                        <div class="w-full mb-3">
                            <span class="text-gray-400 text-xs ">{{ __('Detail of category')}}</span>
                            <div class="bg-gray-200 w-full h-px"></div>
                        </div>


                        <div class="w-full flex mb-2">
                            <p class="text-md rounded-lg bg-white bg-clip-padding  font-semibold text-gray-900">
                                {{ __('Title')}} :
                            </p>
                            <p class="text-md rounded-lg bg-white bg-clip-padding px-3 font-normal text-gray-700">
                                {{ $category->title}}
                            </p>
                        </div>

                        <div class="w-full flex  mb-2">
                            <p class="text-md rounded-lg bg-white bg-clip-padding  font-semibold text-gray-900">
                                {{ __('Description')}} :
                            </p>
                            <p class="text-md rounded-lg bg-white bg-clip-padding px-3 font-normal text-gray-700">
                                {{ $category->description}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            @if($category->subcategories->count() >0)
            <div class="flex justify-between items-start flex-wrap mt-8">

                @foreach($category->subcategories as $sub)
                <div class="my-4" style="width:48%">
                    <div class="mb-6">
                        <span class="px-6 py-3 font-bold text-center text-white uppercase align-middle border-0 rounded-lg text-xs bg-gray-700">
                            {{ __('Total') }} : {{ $sub->total }} DH
                        </span>
                    </div>
                    <div class="bg-white shadow-sm rounded-lg p-4 sm:px-6 lg:px-8">
                        <p class="text-md uppercase rounded-lg bg-white px-3 font-semibold text-gray-800">
                            {{ $sub->title}}
                        </p>

                        @if(count($sub->billings) > 0)
                        <div class="w-full mt-3 px-3">
                            <span class="text-gray-400 text-xs ">{{ __('Detail of billings')}}</span>
                            <div class="bg-gray-200 w-full h-px"></div>
                        </div>

                        <div class="mt-4">
                            @foreach( $sub->billings as $belling)
                            <div class="my-3 flex justify-between items-center px-3">
                                <div class="flex justify-start items-start space-x-5">
                                    <div>
                                      <p class="text-sm">{{ $belling->title }} </p>
                                    <p class="text-sm text-gray-400">{{ $belling->info }} </p>     
                                    </div>
                                     <p class="font-bold text-sm">{{ $belling->total }} DH</p>
                                </div>
                                
                                @if(Auth::user()->is_admin == 1)
                                <livewire:remark-input :belling="$belling" :wire:key="$subcategories->id.'_'.$belling->id">
                                @else
                                @if($belling->remark != '')
                                <span class="text-xs block appearance-none rounded-md bg-red-600 px-8 py-2 text-white font-bold">{{$belling->remark}}</span>
                                @endif
                                @endif
                            </div>
                            @if(!$loop->last)
                            <div class="flex justify-center">
                                <div class="bg-gray-200 w-5/6 h-px"></div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                        @endif

                    </div>
                </div>
                @endforeach

            </div>
            @endif

        </div>
    </div>
</x-app-layout>