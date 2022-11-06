<?php

namespace App\Http\Livewire;

use App\Models\Folder;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class CreateFolder extends Component
{
    public $name;
    public $projectId;

    public function render()
    {
        return view('livewire.create-folder');
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|string|unique:folders',
        ],[
            'name.required' => 'Required',
            'name.unique' => 'This folder name already exist'
        ]);

        Folder::create([
            'project_id' => $this->projectId,
            'name' => $this->name
        ]);
        
        $this->name = '';
        redirect()->route('archives', $this->projectId);
    }
}
