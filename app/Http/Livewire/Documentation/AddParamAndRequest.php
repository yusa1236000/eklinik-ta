<?php

namespace App\Http\Livewire\Documentation;

use App\Models\Documentation;
use App\Models\Parameter;
use App\Models\Response;
use Livewire\Component;
use Livewire\Response;

class AddParamAndRequest extends Component
{
    public $doc;
    public $list_param = [];
    public $response_data;

    protected $listeners = [
        "paramAdded",
        "responseAdded"
    ];

    public function paramAdded(Parameter $param)
    {
        $this->redirectRoute('doc.add-param', $this->doc->id);
    }

    public function responseAdded(Response $response)
    {
        $this->response_data = $response;
    }

    public function mount(Documentation $doc){
        $this->doc = $doc;
        $this->response_data = $doc->response;
        $this->list_param = $doc->parameters;
    }

<<<<<<< HEAD
        public function addResponse(){
=======
    public function addResponse(){
>>>>>>> 5f3f6cf2d8d08af4ff972acf1c724d319b201cde
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
