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
                            <th>DISPOSISI</th>
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
                                            href="{{ route('Unit.lampiranwadir', $item->id) }}  ">Lampiran</a></button>
                                </div>
                            </td>
                            <td>
                                <div class="form-group ">
                                    <button type="botton" class="btn btn-success "><a class=" text-white"
                                            href="{{ route('Unit.suratbebanmengajarwadir', $item->id) }}  ">Surat
                                            Permohonan SK</a></button>
                                </div>
                            </td>
                            <td>

                                <div class="form-group ">
                                    <button type="botton" class="btn btn-success "><a class=" text-white"
                                            href="{{ route('Unit.lembaraccskwadir', $item->id) }}  ">Lembar
                                            Disposisi</a></button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection