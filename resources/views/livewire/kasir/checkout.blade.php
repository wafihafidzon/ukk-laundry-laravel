<div>
    <div class="card">
        <div class="card-header">Form</div>
        <div class="card-body">
            <form wire:submit="checkout">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Pemilik</label>
                    <input type="text" class="form-control @error('nama_paket') is-invalid @enderror" wire:model="nama">
                    @error('nama_paket')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat Pemilik</label>
                    <input type="text" class="form-control @error('jenis') is-invalid @enderror" wire:model="alamat">
                    @error('jenis')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="telepon" class="form-label">Telpon</label>
                    <input type="text" class="form-control @error('harga') is-invalid @enderror"
                        wire:model="telepon">
                    @error('harga')
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
    </div>
</div>
