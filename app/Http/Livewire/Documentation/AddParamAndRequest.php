<?php

namespace App\Http\Livewire\Documentation;

use App\Models\Documentation;
use App\Models\Parameter;
use Livewire\Component;

class AddParamAndRequest extends Component
{
    public $doc;
    public $list_param = [];

    protected $listeners = [
        "paramAdded",
        "responseAdded"
    ];

    public function paramAdded(Parameter $param)
    {
        $this->list_param[] = $param;
        $this->dispatchBrowserEvent('close-model', [
            'id' => 'parameter-modal'
        ]);
    }

    public function mount(Documentation $doc){
        $this->doc = $doc;
        $this->list_param = $doc->parameters;
    }

    public function createResponse(){
        $this->dispatchBrowserEvent('show-model',[
            'id' => 'response-modal'
        ]);
    }

    public function addParam(){
        $this->dispatchBrowserEvent('show-model',[
            'id' => 'parameter-modal'
        ]);
    }

    public function render()
    {
        return view('livewire.documentation.add-param-and-request');
    }


}
