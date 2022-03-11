<?php

namespace App\Http\Livewire\MedicalRecord;

use Livewire\Component;

class ModalUser extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('livewire.medicalrecord.modal-user');
    }
}
