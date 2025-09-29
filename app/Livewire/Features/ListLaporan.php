<?php

namespace App\Livewire\Features;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Laporan;

class ListLaporan extends Component
{
    #[Layout('layouts.app')]

    public $title = 'List Laporan';
    public $ListLaporan;

    public function mount()
    {
        $this->ListLaporan = Laporan::all();
    }

    public function render()
    {
        return view('livewire.features.list-laporan');
    }
}
