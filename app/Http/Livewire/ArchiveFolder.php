<?php

namespace App\Http\Livewire;

use App\Models\Archive;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class ArchiveFolder extends Component
{
    public $showEdit = false;
    public $folder;
    public $archives = [];

    public $newFolderName;

    public function render()
    {
        return view('livewire.archive-folder');
    }

    public function mount()
    {
        $this->newFolderName = $this->folder->name;
    }

    public function getArchives()
    {
        $this->archives = Archive::where('folder_id', $this->folder->id)->get();
    }

    public function updated($name, $value)
    {
        // dd($name);
        if ($name == 'newFolderName') {
            $this->folder->update([
                'name' => $this->newFolderName
            ]);
        }

        $this->showEdit = false;
        session()->flash('message', 'updated.');
    }

    public function deleteFolder()
    {
        $projectId = $this->folder->project_id;

        // check if the file exists
        foreach ($this->folder->archives as $archive) {
            Storage::disk('public')->delete($archive->path);
        }

        $this->folder->delete();
        redirect()->route('archives', $projectId);
    }
}
