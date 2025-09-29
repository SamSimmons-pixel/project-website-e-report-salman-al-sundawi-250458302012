<?php

namespace App\Livewire\Features\Warga;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;
use App\Models\Laporan;
use Illuminate\Support\Facades\DB;

class Dashboard extends Component
{
    #[Layout('layouts.app')]

    public $title = 'Dashboard';
    public $auth, $CountLaporanPending, $CountLaporanProses, $CountLaporanSelesai, $CountLaporanTotal;

    public $laporanProses = [];
    public $laporanPending = [];
    public $laporanSelesai = [];

    public function mount()
    {
        $this->auth = Auth::user();
        $this->CountLaporanPending = Laporan::where('pelapor_id', $this->auth->id)->where('status', 'pending')->count();
        $this->CountLaporanProses = Laporan::where('pelapor_id', $this->auth->id)->where('status', 'proses')->count();
        $this->CountLaporanSelesai = Laporan::where('pelapor_id', $this->auth->id)->where('status', 'selesai')->count();
        $this->CountLaporanTotal   = Laporan::where('pelapor_id', $this->auth->id)->count();

        // Ambil data laporan per bulan & status
        $laporan = Laporan::select(
            DB::raw('MONTH(created_at) as bulan'),
            'status',
            DB::raw('COUNT(*) as total')
        )
            ->where('pelapor_id', $this->auth->id)
            ->whereYear('created_at', date('Y'))
            ->groupBy('bulan', 'status')
            ->get();

        // Siapkan array kosong 12 bulan
        $this->laporanProses  = array_fill(1, 12, 0);
        $this->laporanPending = array_fill(1, 12, 0);
        $this->laporanSelesai = array_fill(1, 12, 0);

        foreach ($laporan as $row) {
            if ($row->status === 'proses') {
                $this->laporanProses[$row->bulan] = $row->total;
            }
            if ($row->status === 'pending') {
                $this->laporanPending[$row->bulan] = $row->total;
            }
            if ($row->status === 'selesai') {
                $this->laporanSelesai[$row->bulan] = $row->total;
            }
        }

        // Re-index biar mulai dari bulan 0 di JS
        $this->laporanProses  = array_values($this->laporanProses);
        $this->laporanPending = array_values($this->laporanPending);
        $this->laporanSelesai = array_values($this->laporanSelesai);
    }

    public function render()
    {
        return view('livewire.features.warga.dashboard');
    }
}
