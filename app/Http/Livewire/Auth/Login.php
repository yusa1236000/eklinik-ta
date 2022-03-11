<?php

namespace App\Http\Livewire\Auth;

use Illuminate\View\View;
use Livewire\Component;

class Login extends Component
{
    public $password;
    public $email;
    public $keeplogin;

    protected $rules = [
        'password' => 'required',
        'email' => 'required|email|exists:users,email'
    ];

    public function login()
    {
        $data_credential = $this->validate();
        if (\Auth::attempt($data_credential, $this->keeplogin)) {
            $this->redirectRoute('home');
        }else{
            $this->reset();
            $this->dispatchBrowserEvent('show-message', [
                'type' => 'error',
                'message' => 'Login Gagal Pastikan email dan password yang anda inputkan benar.'
            ]);
        }
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('livewire.auth.login')->layout('layouts.plain');
    }
}
