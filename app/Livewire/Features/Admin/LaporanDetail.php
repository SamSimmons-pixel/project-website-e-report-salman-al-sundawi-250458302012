<?php

namespace App\Livewire\Features\Admin;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Laporan;

class LaporanDetail extends Component
{
    #[Layout('layouts.app')]

    public $title = 'Detail Laporan';
    public $laporan;

    public function mount($id)
    {
        $this->laporan = Laporan::find($id);
    }

    public function ubahStatus()
    {
        $this->laporan->update([
            'status' => 'proses',
        ]);
    }

    public function ubahStatusSelesai()
    {
        $this->laporan->update([
            'status' => 'selesai',
        ]);
    }

    public function back()
    {
        return redirect()->route('admin.list-laporan');
    }

    public function render()
    {
        return view('livewire.features.admin.laporan-detail');
    }
}
