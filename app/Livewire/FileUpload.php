<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class FileUpload extends Component
{
    use WithFileUploads;

    public $photo;

    public function submit ()
    {
        $this->validate([
            "photo" => "required|image"
        ]);
    }

    public function render()
    {
        return view('livewire.file-upload');
    }
}
