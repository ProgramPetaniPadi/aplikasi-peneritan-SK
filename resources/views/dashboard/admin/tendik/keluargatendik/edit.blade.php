@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data Keluarga</h1>
        <a href="{{ route('admin.Keluargatendik') }}" class="btn btn-danger btn-primary shadow-sm">
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
            <form action="{{ route('admin.update|Keluargatendik', $item->id) }}" method="get">

                @method('PUT')
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
                        <label for="suamiistri">PENDIDIKAN TERAKHIR</label>
                        <input type="text" class="form-control" name="suamiistri" placeholder="Pendidikan Terakhir"
                            value="{{ $item->suamiistri }}">
                    </div>
                    <div class="form-group">
                        <label for="jumlah_anak">JUMLAH ANAK</label>
                        <input type="text" class="form-control" name="jumlah_anak" placeholder="jumlah_anak"
                            required="required" value="{{ $item->jumlah_anak }}">
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