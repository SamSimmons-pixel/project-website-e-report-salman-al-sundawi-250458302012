<div>
    <button class="btn btn-primary mb-2" wire:click="back">
        Kembali
    </button>

    <div class="card">
        <div class="card-header">
            <h4>Detail Laporan - {{ $laporan->judul }}</h4>
            <div class="d-flex gap-2 justify-content-end">
                <button class="btn btn-primary" wire:click="ubahStatus">
                    Ubah Status
                </button>
                <button class="btn btn-success" wire:click="ubahStatusSelesai">
                    Ubah Status Selesai
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ Storage::url($laporan->foto) }}" alt="Foto" class="img-fluid w-100">
                </div>
                <div class="col-md-6">
                    <h5>Judul</h5>
                    <p>{{ $laporan->judul }}</p>
                    <h5>Detail</h5>
                    <p>{{ $laporan->detail }}</p>
                    <h5>Tanggal</h5>
                    <p>{{ $laporan->tanggal }}</p>
                    <h5>Status</h5>
                    <p>{{ $laporan->status }}</p>
                    <h5>Pelapor</h5>
                    <p>{{ $laporan->pelapor->name }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
