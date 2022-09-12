<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Archive') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Archives tables -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <x-table>
                        <x-slot name="title">
                            {{ __('Table of archives files') }} ({{ count($archives) }})
                        </x-slot>
                        <x-slot name="thead">
                            <tr>
                                <th class="px-4 py-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">{{ __('Id') }}</th>
                                <th class="px-4 py-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">{{ __('Name') }}</th>
                                <th class="px-4 py-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">{{ __('Type') }}</th>
                                <th class="px-4 py-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">{{ __('Created_at') }}</th>
                                <th class="px-4 py-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">{{ __('Actions') }} </th>
                            </tr>
                        </x-slot>
                        <x-slot name="tbody">
                            @forelse($archives as $archive)
                            <tr>
                                <td class="w-8 p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <p class="px-2 mb-0 leading-tight text-xs text-slate-700">{{ $archive->id }}</p>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <p class="px-2 mb-0 leading-tight text-xs text-slate-700">{{ $archive->original_name }}</p>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <p class="px-2 mb-0 leading-tight text-xs text-slate-700">{{ $archive->type }}</p>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b text-size-sm whitespace-nowrap shadow-transparent">
                                    <p class="px-2 mb-0 leading-tight text-xs text-slate-700">{{ $archive->created_at->diffForHumans() }}</p>
                                </td>
                                <td class="w-48 p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <div class="flex justify-between items-center">
                                        <a href="{{ Storage::disk('public')->url($archive->path) }}" download>
                                            <i class="fa-solid fa-download text-indigo-500 px-2 cursor-pointer text-xs"></i>{{ $archive->original_name }}
                                        </a>
                                        <form method="post" action="{{ route('archives.delete', [$archive->project_id, $archive->id]) }}">
                                            @csrf
                                            <button onclick="return confirm('Etes-vous sur de supprimer cette element?')"><i class="fa-solid fa-trash text-red-500 p-1 cursor-pointer text-xs"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center py-4">
                                    {{ __('Table of archives est is empty')}}
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