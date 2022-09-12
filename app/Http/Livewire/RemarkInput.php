<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RemarkInput extends Component
{
    public $belling;
    public $remark;

    protected $messages = [
        'required' => 'Required'
    ];

    public function render()
    {
        return view('livewire.remark-input');
    }

    public function mount(){
        $this->remark = $this->belling->remark;
    }

    public function save(){
        // Validate the remarque
        $this->validate([
            'remark' => 'required|string'
        ]);

        $this->belling->update([
            'remark' => $this->remark
        ]);

        session()->flash('message', 'Saved.');
    }
}
