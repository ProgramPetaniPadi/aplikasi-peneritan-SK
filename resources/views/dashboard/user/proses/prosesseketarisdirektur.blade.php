@extends('layouts.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">upload bukti ACC</h1>
        <a href="{{ route('user.home') }}" class="btn btn-danger btn-primary shadow-sm">
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
            <form action="{{ route('user.updateseketrisdirektur', $item->id) }}" method="post"
                enctype="multipart/form-data" id="editform">
                @csrf
                <div class="form-group">
                    <label>NAMA UNIT : {{ $item->nama_unit }}</label>
                </div>
                <div class="form-group">
                    <label>SURAT USULAN :{{ $item->judul_usulan }}</label>
                </div>
                <div class="form-group">
                    <label for="seketaris_direktur">FILE DOCUMENT</label>
                    <input type="file" class="form-control" name="seketaris_direktur" id="seketaris_direktur">
                </div>
                <div class="form-group">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <button class="btn btn-primary" type="submit">Kirim</button>
                </div>

            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection