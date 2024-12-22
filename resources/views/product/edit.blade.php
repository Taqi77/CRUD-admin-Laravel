<x-layout title="Edit Product" :breadcrumb="['Product','Edit']">

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Edit data
            </div>
            <div class="card-body">
                <form action="{{ route('index.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ $produk->nama }}">
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jenis">Jenis:</label>
                        <input type="text" class="form-control @error('jenis') is-invalid @enderror" id="jenis" name="jenis" value="{{ $produk->jenis  }}">
                        @error('jenis')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="harga_jual">Harga Jual:</label>
                        <input type="text" class="form-control @error('harga_jual') is-invalid @enderror" id="harga_jual" name="harga_jual" value="{{  $produk->harga_jual }}">
                        @error('harga_jual')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="harga_beli">Harga Beli:</label>
                        <input type="text" class="form-control @error('harga_beli') is-invalid @enderror" id="harga_beli" name="harga_beli" value="{{ $produk->harga_beli }}">
                        @error('harga_beli')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi:</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi">{{ $produk->id }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto Produk:</label>
                        <input type="file" class="form-control" id="foto" name="foto">
                        @if(isset($produk->foto) && !empty($produk->foto))
                            <img src="{{ url('images/' . $produk->foto) }}" alt="Foto Produk" class="rounded" style="width: 100%; max-width: 100px; height: auto;">
                        @else
                            <img src="{{ url('images/nophoto.jpg') }}" alt="No Foto" class="rounded" style="width: 100%; max-width: 100px; height: auto;">
                        @endif
 
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                </form>
            </div>
        </div>
</x-layout>