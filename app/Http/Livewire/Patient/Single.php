<?php

namespace App\Http\Livewire\Patient;

use App\Models\Patient;
use Livewire\Component;

class Single extends Component
{
    public $patient;

    public function mount(Patient $patient){
        $this->patient = $patient;
    }

    public function delete(){
        $this->patient->delete();
        $this->emit('patientDeleted');
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('livewire.patient.single');
    }
}
