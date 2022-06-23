@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Pendidikan</h1>
        <a href="{{ route('admin.Pendidikantendik') }}" class="btn btn-danger btn-primary shadow-sm">
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
            <form action="{{ route('admin.store|Pendidikantendik') }}" method="get" autocomplete="on">
                @csrf
                <div class="form-group">
                    <div class="form-group">
                        <label for="nip" class="col-sm-2 col-sm-2 control-label">NAMA TENDIK</label>
                        <select name="nip" id="txtFirst" class="form-control" required="required">
                            <option value="">...Pilih Nip Tendik...</option>
                            @foreach($tendik as $tendik)
                            <option value=" {{ $tendik->nip }}">
                                {{ $tendik->nip }} | {{ $tendik->nama  }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pendidikan_terakhir">PENDIDIKAN TERAKHIR</label>
                        <input type="text" class="form-control" name="pendidikan_terakhir"
                            placeholder="Pendidikan Terakhir" required="required">
                    </div>
                    <div class="form-group">
                        <form action="action">
                            <select name="tahun_kelulusan">
                                <option value="">Tahun Kelulusan</option>
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