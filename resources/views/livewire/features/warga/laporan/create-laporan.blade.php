<div class="card">
    <div class="card-header">
        <h4 class="card-title">Create Laporan</h4>
    </div>
    <div class="card-body">
        <form wire:submit="store">
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" wire:model="judul" class="form-control">
                @error('judul')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="detail">Detail</label>
                <textarea wire:model="detail" class="form-control"></textarea>
                @error('detail')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" wire:model="tanggal" class="form-control">
                @error('tanggal')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" wire:model="foto" class="form-control">
                @error('foto')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            @if ($foto)
                <img src="{{ $foto->temporaryUrl() }}" alt="Foto" class="img-fluid w-25">
            @endif
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">
                    Buat Laporan
                </button>
            </div>
        </form>
    </div>
</div>
