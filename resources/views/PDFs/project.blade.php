<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
</head>

<body>

    <div class="bg-white">
        <x-table>
            <x-slot name="title">
                {{ __('Table of Projects') }}
            </x-slot>
            <x-slot name="thead">
                <tr>
                    <th class="px-4 py-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">{{ __('Project') }}</th>
                    <th class="px-4 py-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">{{ __('Cree_Par') }}</th>
                    <th class="px-4 py-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">{{ __('Manager_Par') }}</th>
                    <th class="px-4 py-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">{{ __('Add le') }}</th>
                    <th class="px-4 py-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">{{ __('Total') }} (DH)</th>
                </tr>
            </x-slot>
            <x-slot name="tbody">
                @foreach($projects as $project)
                <tr>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <p class="px-2 mb-0 leading-tight text-xs text-slate-700">{{ $project->title }}</p>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <div class="flex px-2 py-1">
                            <div class="flex flex-col justify-center">
                                <h6 class="mb-0 leading-normal text-sm">{{ $project->user->name }}</h6>
                                <p class="mb-0 leading-tight text-xs text-slate-700">{{ $project->user->email }}</p>
                            </div>
                        </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b text-sm whitespace-nowrap shadow-transparent">
                        <div class="flex px-2 py-1">
                            <div class="flex flex-col justify-center">
                                <h6 class="mb-0 leading-normal text-sm">{{ $project->manager->name }}</h6>
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
                </tr>
                @endforeach
            </x-slot>
        </x-table>
    </div>

</body>
</html>