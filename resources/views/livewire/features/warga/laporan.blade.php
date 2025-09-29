<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="card-title">Laporan</h4>
        <a href="{{ route('warga.create-laporan') }}" class="btn btn-primary">Tambah Laporan</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Foto Bukti</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Pelapor</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($listLaporan as $laporan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $laporan->judul }}</td>
                            <td>
                                <img src="{{ Storage::url($laporan->foto) }}" alt="Foto" class="img-flued w-25">
                            </td>
                            <td>{{ $laporan->tanggal }}</td>
                            <td>{{ $laporan->status }}</td>
                            <td>{{ $laporan->pelapor->name }}</td>
                            <td>{{ $laporan->aksi }}</td>
                            <td>
                                <a href="{{ route('warga.edit-laporan', $laporan->id) }}" class="btn btn-warning">Edit</a>
                                <button class="btn btn-danger" wire:confirm="Are you sure you want to delete this laporan?" wire:click="delete( {{  $laporan->id }})">Hapus</button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Tidak ada data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
