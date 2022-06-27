<?php

namespace App\Http\Livewire\Bpjs;

use Livewire\Component;
use App\Models\Bpjs;

class Create extends Component
{
    public $name;
    public $identity_card;
    public $family_card;
    public $bpjs_card;

    protected $rules = [
        'name' => 'required',
        'identity_card' => 'required',
        'family_card' => 'required',
        'bpjs_card' => 'required'

    ];

    public function create(){
        $this->validate();

        Bpjs::create([
            'name' => $this->name,
            'identity_card' => $this->identity_card,
            'family_card' => $this->family_card,
            'bpjs_card' => $this->bpjs_card,
        ]);

        $this->redirectRoute('bpjs.index');
    }

    public function render()
    {
        return view('livewire.bpjs.create');
    }
}
