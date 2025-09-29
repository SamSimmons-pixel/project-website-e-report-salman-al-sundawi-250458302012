<?php

namespace App\Livewire\Features\Warga;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;
use App\Models\Laporan as LaporanModel;
use Illuminate\Support\Facades\Storage;

class Laporan extends Component
{
    #[Layout('layouts.app')]

    public $title = 'Laporan';
    public $auth, $listLaporan;

    public function mount()
    {
        $this->auth = Auth::user();
        $this->listLaporan = LaporanModel::where('pelapor_id', $this->auth->id)->get();
    }

    public function delete($id)
    {
        $laporan = LaporanModel::find($id);

        // Remove image from storage
        if ($laporan->foto && Storage::disk('public')->exists($laporan->foto)) {
            Storage::disk('public')->delete($laporan->foto);
        }

        // Delete laporan
        $laporan->delete();

        return redirect()->route('warga.laporan');
    }

    public function render()
    {
        return view('livewire.features.warga.laporan');
    }
}
