<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Document;

class LaraFileUpload extends Component
{
    use WithFileUploads;

    public $title;
    public $file_name;

    public function submit()
    {
        $data = $this->validate([
            'title' => 'required',
            'file_name' => 'required',
        ]);

        $filename = $this->file_name->store('documents','public');

        $data['file_name'] = $filename;

        Document::create($data);

        session()->flash('message', 'File has been successfully Uploaded.');

        return redirect()->to('/lara-livewire-file-upload');
    }

    public function render()
    {
        return view('livewire.lara-file-upload');
    }
}
