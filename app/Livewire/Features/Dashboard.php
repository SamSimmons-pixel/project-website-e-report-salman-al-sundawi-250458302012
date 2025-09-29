<?php

namespace App\Livewire\Features;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use App\Models\Laporan;

class Dashboard extends Component
{

    #[Layout('layouts.app')]
    public $title = 'Dashboard';

    public $laporanPending, $laporanProses, $laporanSelesai, $totalLaporan;

    public function mount()
    {
        $this->laporanPending = Laporan::where('status', 'pending')->count();
        $this->laporanProses = Laporan::where('status', 'proses')->count();
        $this->laporanSelesai = Laporan::where('status', 'selesai')->count();
        $this->totalLaporan = Laporan::count();
    }

    public function render()
    {
        return view('livewire.features.dashboard');
    }

}
