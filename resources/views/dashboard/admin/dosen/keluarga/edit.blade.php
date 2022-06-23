@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data Keluarga</h1>
        <a href="{{ route('admin.Keluargadosen') }}" class="btn btn-danger btn-primary shadow-sm">
            <i class="fa-sm text-white-50"></i> Kembali
        </a>
    </div>


    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('admin.update|Keluargadosen', $item->id) }}" method="get">

                @csrf
                <div class="form-group">
                    <div class="form-group">
                        <label for="nip" class="col-sm-2 col-sm-2 control-label">NAMA DOSEN</label>
                        <select name="nip" id="txtFirst" class="form-control" required="required">
                            <option value="{{ $item->nip }}">{{ $item->datadosens->nama}}</option>
                            @foreach($dosen as $dosen)
                            <option value="{{ $dosen->nip }}">
                                {{ $dosen->nip }} | {{ $dosen->nama  }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="suamiistri">NAMA SUAMAI ATAU ISTRI </label>
                        <input type="text" class="form-control" name="suamiistri" placeholder="Nama......"
                            value="{{ $item->suamiistri }}">
                    </div>
                    <div class="form-group">
                        <label for="jumlah_anak">JUMLAH ANAK</label>
                        <input type="text" class="form-control" name="jumlah_anak" placeholder="jumlah_anak"
                            value="{{ $item->jumlah_anak }}">
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