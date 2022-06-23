@extends('layouts.unit')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Usulan Surat/ SK</h1>
        <a href="{{ route('Unit.proses') }}" class="btn btn-danger btn-primary shadow-sm">
            <i class="fa-sm text-white-50"></i> Kembali
        </a>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card shadow">
        <div class="card-body">
            <form method="post" action="{{ route('Unit.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama_unit">NAMA</label>
                    <input type="text" class="form-control" name="nama_unit" value="{{ Auth::user()->unit }}" readonly>
                    <label for="judul_usulan">JUDUL USULAN</label>
                    <input type="text" class="form-control" name="judul_usulan" placeholder="judul_usulan"
                        required="required">
                    <label for="document">SURAT</label>
                    <input type="file" class="form-control" name="document" placeholder="document" required="required">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                </div>
            </form>


        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection