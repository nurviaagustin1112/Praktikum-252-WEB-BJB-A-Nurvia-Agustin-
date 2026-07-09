@extends('template.default')

@section('content')
@if (session('success'))
<div class="alert alert-primary" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="row">
    <div class="col-md-6">
        <h3>Kategori</h3>
    </div>
    <div class="col-md-6">
        <a href="{{ route('kategori.create') }}" class="btn btn-success btn-sm float-end">
            <i class="fa fa-plus-circle"></i> Tambah
        </a>
    </div>
</div>

<div class="row mt-3">
    <div class="col">
        <table class="table bg-white rounded shadow-sm table-hover">
            <thead>
                <tr>
                    <th width="50">#</th>
                    <th>Nama Kategori</th>
                    <th>Keterangan</th>
                    <th width="200">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($kategoris as $kategori)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $kategori->nama_kategori }}</td>
                    <td>{{ $kategori->keterangan }}</td>
                    <td>
                        @include('kategori.action')
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>

<form action="" method="POST" id="deleteForm">
    @csrf
    @method('DELETE')
    <input type="submit" style="display:none">
</form>

@endsection
