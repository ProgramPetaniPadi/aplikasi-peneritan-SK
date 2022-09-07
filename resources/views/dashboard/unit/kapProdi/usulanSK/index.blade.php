@extends('layouts.unit')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">DATA Usulan SK Tugas Beban Mengajar</h1>

    </div>
    <div class="row">

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error}}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="col-xl-8 col-lg-8">
            <div class="card shadow">
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>NO</th>
                            <th>JUDUL USULAN</th>
                            <th>LAMPIRAN</th>
                            <th>SURAT PERMOHONAN SK</th>
                            <th>ACTION</th>
                        </tr>
                        <?php 
                        $i = 1;
                        ?>
                        @forelse ($item as $item)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $item->judul_usulan }}</td>
                            <td>
                                <div class="form-group ">
                                    <button type="botton" class="btn btn-success "><a class=" text-white"
                                            href="{{ route('Unit.lampirankapprodi', $item->id) }}  ">Lampiran</a></button>
                                </div>
                            </td>
                            <td>
                                <div class="form-group ">
                                    <button type="botton" class="btn btn-success "><a class=" text-white"
                                            href="{{ route('Unit.suratbebanmengajar', $item->id) }}  ">Surat
                                            Permohonan SK</a></button>
                                </div>
                            </td>
                            <td>
                                <form action="{{ route('Unit.destroysk', $item->id) }}" method="get" class="d-inline"
                                    onclick="return confirm('Yakin ingin menghapus?');">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3">
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('Unit.storeusulansk') }}" method="post" autocomplete="on"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="judul_usulan">JUDUL USULAN</label>
                            <input type="text" class="form-control" name="judul_usulan" placeholder="judul usulan"
                                required="required">
                        </div>
                        <div class="form-group">
                            <label for="document">document</label>
                            <input type="file" class="form-control" name="document" placeholder="document surat tugas"
                                required="required">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection