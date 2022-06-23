@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Jabatan Fungsional Dosen</h1>
        <a href="{{ route('admin.pekerjaandosen') }}" class="btn btn-danger btn-primary shadow-sm">
            <i class="fa-sm text-white-50"></i> Kembali
        </a>
    </div>

    @if(session('fail'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('fail')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('admin.store|pekerjaandosen') }}" method="get" autocomplete="off">

                @csrf
                <div class="form-group">
                    <label for="pekerjaan">NAMA</label>
                    <input type="text" class="form-control" name="pekerjaan" placeholder="jabatan fungsional"
                        required="required">
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