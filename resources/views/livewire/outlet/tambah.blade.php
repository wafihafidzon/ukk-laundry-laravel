<div>
    <form wire:submit="store">
        <div class="mb-3">
            <label for="name" class="form-label">Nama Outlet</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" wire:model="nama" placeholder="{{ $nama }}">
            @error('nama')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat Outlet</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" wire:model="alamat">
            @error('alamat')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="telepon" class="form-label">Telepon Outlet</label>
            <input type="number" class="form-control @error('telepon') is-invalid @enderror" wire:model="telepon">
            @error('telepon')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </form>
</div>
