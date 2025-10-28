<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;


class Login extends Component
{
    #[Layout('layouts.auth')]

    public string $name = '';
    public string $password = '';
    public bool $remember = false;

    protected $rules = [
        'name' => 'required',
        'password' => 'required',
    ];

    protected $messages = [
        'name.required' => 'Username wajib diisi.',
        'password.required' => 'Password wajib diisi.',
    ];

    public function login()
    {
        $credentials = $this->validate();

        if (Auth::attempt($credentials, $this->remember)) {
            session()->regenerate();

            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('warga.dashboard');
            }   
        }

        $this->addError('name', 'The provided credentials do not match our records.');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
