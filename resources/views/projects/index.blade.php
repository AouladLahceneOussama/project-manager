<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @can('crud-project')
            <div class="mb-6">
                <a href="{{ route('projects.create') }} " class="px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer active:opacity-85 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gray-700 hover:border-slate-700 hover:bg-slate-700 hover:text-white">
                    {{ __('New Project') }}
                </a>
            </div>
            @endcan
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                    <x-table>
                        <x-slot name="title">
                            {{ __('Projects Table') }} ({{ $count}})
                        </x-slot>
                        <x-slot name="thead">
                            <tr>
                                <th class="px-4 py-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">{{ __('Id') }}</th>
                                <th class="px-4 py-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">{{ __('Project') }}</th>
                                <th class="px-4 py-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">{{ __('Created_by') }}</th>
                                <th class="px-4 py-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">{{ __('Managed_by') }}</th>
                                <th class="px-4 py-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">{{ __('Creating Time') }}</th>
                                <th class="px-4 py-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">{{ __('Total') }} (DH)</th>
                                <th class="px-4 py-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">{{ __('Actions') }}</th>
                            </tr>
                        </x-slot>
                        <x-slot name="tbody">
                            @forelse($projects as $project)
                            <tr>
                                <td class="w-8 p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <p class="px-2 mb-0 leading-tight text-xs text-slate-700">{{ $project->id }}</p>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <p class="px-2 mb-0 leading-tight text-xs text-slate-700">{{ $project->title }}</p>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <div class="flex px-2 py-1">
                                        <div class="flex flex-col justify-center">
                                            <h6 class="mb-0 leading-normal text-size-sm">{{ $project->user->name }}</h6>
                                            <p class="mb-0 leading-tight text-xs text-slate-700">{{ $project->user->email }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b text-size-sm whitespace-nowrap shadow-transparent">
                                    <div class="flex px-2 py-1">
                                        <div class="flex flex-col justify-center">
                                            <h6 class="mb-0 leading-normal text-size-sm">{{ $project->manager->name }}</h6>
                                            <p class="mb-0 leading-tight text-xs text-slate-700">{{ $project->manager->email }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <span class="px-2 font-semibold leading-tight text-xs text-slate-700">{{ $project->created_at->diffForHumans() }}</span>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <span class="px-2 font-semibold leading-tight text-xs text-slate-700">{{ $project->total }}</span>
                                </td>
                                <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <div class="flex justify-center items-center">
                                        <a href="/projects/{{ $project->id }}/category"><i class="fa-solid fa-eye text-indigo-500 p-1 cursor-pointer text-xs"></i></a>
                                        @can('crud-project')
                                        <a href="{{ route('projects.update', $project->id) }}"><i class="fa-solid fa-pen text-green-500 p-1 cursor-pointer text-xs"></i></a>
                                        <form method="post" action="{{ route('projects.delete', $project->id) }}">
                                            @csrf
                                            <button onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash text-red-500 p-1 cursor-pointer text-xs"></i></button>
                                        </form>
                                        @endcan
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center py-4">
                                    {{ __('No Projects')}}
                                </td>
                            </tr>
                            @endforelse
                        </x-slot>
                    </x-table>
                    <div class="mb-8 ">
                        {{ $projects->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>