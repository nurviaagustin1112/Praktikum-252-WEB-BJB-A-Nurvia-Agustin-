@extends('template.default')

@section('content')
<div class="row">
    <div class="col-md-6">
        <h3>Tambah Data Kategori</h3>
    </div>
    <div class="col-md-6">
        <a href="{{ route('kategori.index') }}" class="btn btn-primary btn-sm float-end">
            <i class="fa fa-arrow-circle-left"></i> Kembali
        </a>
    </div>
</div>

<div class="card px-3 py-3">
    <form action="{{ route('kategori.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nama_kategori">Nama Kategori</label>
            <input type="text"
                class="form-control @error('nama_kategori') is-invalid @enderror"
                name="nama_kategori"
                id="nama_kategori"
                value="{{ old('nama_kategori') }}" required>

            @error('nama_kategori')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="keterangan">Keterangan</label>
            <textarea
                class="form-control @error('keterangan') is-invalid @enderror"
                name="keterangan"
                id="keterangan"
                rows="3">{{ old('keterangan') }}</textarea>

            @error('keterangan')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="col mb-3">
            <button class="btn btn-success" type="submit">
                <i class="fas fa-save"></i> Simpan
            </button>
        </div>
    </form>
</div>
@endsection
