<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-6 space-x-8">
                <a href="category/create" class="px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer active:opacity-85 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gray-700 hover:border-slate-700 hover:bg-slate-700 hover:text-white">
                    {{ __('Add Category') }}
                </a>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                    <x-table>
                        <x-slot name="title">
                            {{ __('Categories Table') }} ({{ $count }})
                        </x-slot>
                        <x-slot name="thead">
                            <tr>
                                <th class="px-4 py-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">{{ __('Id') }}</th>
                                <th class="px-4 py-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">{{ __('Title') }}</th>
                                <th class="px-4 py-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">{{ __('Project') }}</th>
                                <th class="px-4 py-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">{{ __('Description') }}</th>
                                <th class="px-4 py-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">{{ __('Total') }} (DH)</th>
                                <th class="px-4 py-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">{{ __('Actions') }} </th>
                            </tr>
                        </x-slot>
                        <x-slot name="tbody">
                            @forelse($categories as $category)
                            <tr>
                                <td class="w-8 p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <p class="px-2 mb-0 leading-tight text-xs text-slate-700">{{ $category->id }}</p>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <p class="px-2 mb-0 leading-tight text-xs text-slate-700">{{ $category->title }}</p>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <p class="px-2 mb-0 leading-tight text-xs text-slate-700">{{ $category->project->title }}</p>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b text-size-sm whitespace-nowrap shadow-transparent">
                                    <p class="px-2 mb-0 leading-tight text-xs text-slate-700">{{ $category->description }}</p>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <span class="px-2 font-semibold leading-tight text-xs text-slate-700">{{ $category->total }}</span>
                                </td>
                                <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <div class="flex justify-center items-center">
                                        <a href="/projects/{{$category->project_id}}/category/{{$category->id}}">
                                            <i class="fa-solid fa-eye text-indigo-500 p-1 cursor-pointer text-xs"></i>
                                        </a>
                                        <form method="post" action="{{ route('category.delete', [$category->project_id, $category->id]) }}">
                                            @csrf
                                            <button onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash text-red-500 p-1 cursor-pointer text-xs"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center py-4">
                                    {{ __('No Categories')}}
                                </td>
                            </tr>
                            @endforelse
                        </x-slot>
                    </x-table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>