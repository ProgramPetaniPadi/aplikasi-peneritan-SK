@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data Tendik</h1>
        <a href="{{ route('admin.pekerjaantendik') }}" class="btn btn-danger btn-primary shadow-sm">
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
            <form action="{{ route('admin.update|pekerjaantendik', $item->id) }}" method="get">

                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="pekerjaan">NAMA</label>
                    <input type="text" class="form-control" name="pekerjaan" placeholder="pekerjaan"
                        value="{{ $item->pekerjaan }}">
                </div>
                <button type="submit" class="btn btn-primary">
                    Ubah Data
                </button>

            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection