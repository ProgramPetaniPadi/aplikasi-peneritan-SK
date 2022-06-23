@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data Pendidikan</h1>
        <a href="{{ route('admin.Pendidikandosen') }}" class="btn btn-danger btn-primary shadow-sm">
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
            <form action="{{ route('admin.update|Pendidikandosen', $item->id) }}" method="get">

                @method('PUT')
                @csrf
                <div class="form-group">
                    <div class="form-group">
                        <label for="nama">NAMA</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama" required="required"
                            value="{{ $item->nama }}">
                    </div>
                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="text" class="form-control" name="nip" placeholder="Nip" required="required"
                            value="{{ $item->nip }}">
                    </div>
                    <div class="form-group">
                        <label for="pendidikan_terakhir">PENDIDIKAN TERAKHIR</label>
                        <input type="text" class="form-control" name="pendidikan_terakhir"
                            placeholder="Pendidikan Terakhir" value="{{ $item->pendidikan_terakhir }}">
                    </div>

                    <div class="form-group">
                        <form action="action">
                            <select name="tahun_kelulusan">
                                <option value="#">{{ $item->tahun_kelulusan }}</option>
                                <?php
                                    $thn_skr = date('Y');
                                    for ($x = $thn_skr; $x >= 2000; $x--) {
                                    ?>
                                <option value="<?php echo $x ?>"><?php echo $x ?></option>
                                <?php
                                    }
                                    ?>
                            </select>
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