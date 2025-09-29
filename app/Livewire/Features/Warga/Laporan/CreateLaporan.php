<?php

namespace App\Livewire\Features\Warga\Laporan;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;
use App\Models\Laporan;
use Livewire\WithFileUploads;

class CreateLaporan extends Component
{
    use WithFileUploads;

    #[Layout('layouts.app')]
    public $title = 'Create Laporan';

    public $judul, $detail, $tanggal, $foto;

    public function rules()
    {
        return [
            'judul' => 'required|string|max:255',
            'detail' => 'required|string',
            'tanggal' => 'required|date',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'judul.required' => 'Judul wajib diisi',
            'judul.string' => 'Judul harus berupa string',
            'judul.max' => 'Judul maksimal 255 karakter',
            'detail.required' => 'Detail wajib diisi',
            'tanggal.required' => 'Tanggal wajib diisi',
            'tanggal.date' => 'Tanggal harus berupa tanggal',
            'foto.required' => 'Foto wajib diisi',
            'foto.image' => 'Foto harus berupa gambar',
            'foto.mimes' => 'Foto harus berupa gambar',
            'foto.max' => 'Foto maksimal 2048KB',
        ];
    }

    public function store()
    {
        $this->validate();

        // upload foto
        $imagePath = time() . '_' . $this->foto->getClientOriginalName();
        $imagePath = $this->foto->store('laporan', 'public');

        // store data
        Laporan::create([
            'judul' => $this->judul,
            'detail' => $this->detail,
            'tanggal' => $this->tanggal,
            'foto' => $imagePath,
            'status' => 'pending',
            'pelapor_id' => Auth::user()->id,
        ]);

        return redirect()->route('warga.laporan');
    }

    public function render()
    {
        return view('livewire.features.warga.laporan.create-laporan');
    }
}
