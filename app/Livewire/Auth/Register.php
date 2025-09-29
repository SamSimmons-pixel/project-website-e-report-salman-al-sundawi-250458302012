<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{
    #[Layout('layouts.auth')]

    public $name, $email, $no_whatsapp, $password, $foto, $alamat;

    public function register()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'no_whatsapp' => 'required',
            'password' => 'required',
        ]);

        // image
        // $imagePath = time() . '_' . $this->foto->getClientOriginalName();
        // $imagePath= $this->foto->store('avatar_warga', 'public');


        // return dd($this)

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'no_whatsapp' => $this->no_whatsapp,
            'password' => Hash::make($this->password),
        ]);

        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
