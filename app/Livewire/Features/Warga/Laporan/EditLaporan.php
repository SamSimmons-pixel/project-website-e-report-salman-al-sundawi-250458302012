<?php

namespace App\Livewire\Features\Warga\Laporan;

use Livewire\Component;
use App\Models\Laporan;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;

class EditLaporan extends Component
{
    use WithFileUploads;

    #[Layout('layouts.app')]

    public $laporan;
    public $judul, $detail, $tanggal, $foto;

    public function mount($id)
    {
        $this->laporan = Laporan::find($id);
        $this->judul = $this->laporan->judul;
        $this->detail = $this->laporan->detail;
        $this->tanggal = $this->laporan->tanggal;
        $this->foto = $this->laporan->foto;
    }

    public function rules()
    {
        return [
            'judul' => 'required|string|max:255',
            'detail' => 'required|string',
            'tanggal' => 'required|date',
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
        ];
    }

    public function update()
    {
        $this->validate();

        // Simpan foto lama untuk referensi
        $oldFoto = $this->laporan->foto;
        $imagePath = $oldFoto; // Default menggunakan foto lama

        // Upload gambar baru jika ada
        if ($this->foto && is_object($this->foto)) {
            $imagePath = $this->foto->store('laporan', 'public');

            // Hapus gambar lama jika ada dan berbeda dengan yang baru
            if ($oldFoto && Storage::disk('public')->exists($oldFoto)) {
                Storage::disk('public')->delete($oldFoto);
            }
        }

        $this->laporan->update([
            'judul' => $this->judul,
            'detail' => $this->detail,
            'tanggal' => $this->tanggal,
            'foto' => $imagePath,
            'status' => 'pending',
        ]);

        return redirect()->route('warga.laporan');
    }

    public function render()
    {
        return view('livewire.features.warga.laporan.edit-laporan');
    }
}
