@extends('template.default')

@section('content')
<div class="row">
    <div class="col-md-6">
        <h3>Ubah Data Kategori</h3>
    </div>

    <div class="col-md-6">
        <a href="{{ route('kategori.index') }}" class="btn btn-primary btn-sm float-end">
            <i class="fa fa-arrow-circle-left"></i> Kembali
        </a>
    </div>
</div>

<div class="card px-3 py-3">

<form action="{{ route('kategori.update',$kategori) }}" method="POST">

@csrf
@method('PUT')

<div class="mb-3">
<label>Nama Kategori</label>

<input
type="text"
name="nama_kategori"
class="form-control @error('nama_kategori') is-invalid @enderror"
value="{{ old('nama_kategori') ?? $kategori->nama_kategori }}">

@error('nama_kategori')
<p class="text-danger">{{ $message }}</p>
@enderror

</div>

<div class="mb-3">

<label>Keterangan</label>

<textarea
name="keterangan"
class="form-control @error('keterangan') is-invalid @enderror"
rows="3">{{ old('keterangan') ?? $kategori->keterangan }}</textarea>

@error('keterangan')
<p class="text-danger">{{ $message }}</p>
@enderror

</div>

<button class="btn btn-success">
<i class="fas fa-save"></i>
Simpan
</button>

</form>

</div>

@endsection
