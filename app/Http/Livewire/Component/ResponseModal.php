<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;
use App\Models\Response;

class ResponseModal extends Component
{
    public $success;
    public $failed;
    public $description;

    protected $rules = [
        'success' => 'required',
        'failed' => 'required',
        'description' => 'required'
    ];

    public function save()
    {
        $this->validate();
        $response = Response::create([
            'success' => $this->success,
            'failed' => $this->failed,
            'description' => $this->description
        ]);
        $this->emit('responseCreated', $response->id);
    }
    public function render()
    {
        return view('livewire.component.response-modal');
    }

}
