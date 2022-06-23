@extends('layouts.tendik')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pengajuan Perubahan Data</h1>
        <a href="{{ route('Tendik.perubahan') }}" class="btn btn-danger btn-primary shadow-sm">
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
            <form method="post" action="{{ route('Tendik.store|perubahan') }}" enctype="multipart/form-data">

                @csrf
                <div class=" form-group">
                    <label for="nip">nip</label>
                    <input type="text" class="form-control" name="nip" placeholder="nip"
                        value="{{ Auth::guard('Tendik')->user()->nip }}" readonly>

                    <label for="nama">NAMA</label>
                    <input type="text" class="form-control" name="nama" placeholder="nama"
                        value="{{ Auth::guard('Tendik')->user()->nama }}" readonly>

                    @foreach($keluarga as $keluarga)
                    <label for="jumlah_anak_awal">jumlah anak</label>
                    @if (Auth::guard('Tendik')->user()->nip==$keluarga->nip)
                    <input type="text" class="form-control" name="jumlah_anak_awal" placeholder="jumlah awal"
                        value="{{ $keluarga->jumlah_anak }}" readonly>
                    @endif
                    @endforeach
                    <label for="jumlah_anak_perubahan">perubahan jumlah anak </label>
                    <input type="text" class="form-control" name="jumlah_anak_perubahan" placeholder="jumlah berubah">

                    <label for="akta">upload akta anak </label>
                    <input type="file" class="form-control" name="akta" id="akta">


                    <label for="kk">upload kartu keluarga terbaru </label>
                    <input type="file" class="form-control" name="kk" id="kk">

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