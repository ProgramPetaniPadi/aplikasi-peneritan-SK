@extends('layouts.unit')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">DATA Usulan Tugas Beban Mengajar</h1>

        <a href="{{route('Unit.datadosen')}}" class="btn btn-sm btn-success shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Input Data Dosen
        </a>
        <a href="{{route('Unit.matakuliah')}}" class="btn btn-sm btn-success shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Input Matakuliah
        </a>
        <a href="{{route('Unit.usulanmengajar')}}" class="btn btn-sm btn-success shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Usulan Surat
        </a>
    </div>



    <div class="col-xl-10 col-lg-10">
        <div class="card shadow">
            <div class="card-body">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>NO</th>
                        <th> NOMOR SURAT </th>
                        <th> JURUSAN </th>
                        <th> PROGGRAM STUDI </th>
                        <th> SEMESTER </th>
                        <th> TAHUN AKADEMIK </th>
                        <th>USULAN SURAT</th>
                        <th>SURAT BEBAN MENGAJAR</th>
                    </tr>
                    <?php
$i = 1;
?>
                    @forelse ($items as $items )
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td> {{ $items->nosurat }}</td>
                        <td> {{ $items->Jurusan }}</td>
                        <td> {{ $items->program_studi }}</td>
                        <td> {{ $items->semester }}</td>
                        <td> {{ $items->tahun_akademik }}</td>
                        <td>
                            <div class="form-group ">
                                <button type="botton" class="btn btn-success "><a class=" text-white"
                                        href="{{ route('Unit.showusulanmengajar', $items->id) }}  ">Detail</a></button>
                            </div>
                        </td>
                        <td>
                            @if($items->ttddirektur == "1")
                            <div class="form-group ">
                                <button type="botton" class="btn btn-success "><a class=" text-white"
                                        href="{{ route('Unit.showsuratbebanmengajar', $items->id) }}  ">Show Surat
                                        Tugas</a></button>
                            </div>
                            @endif
                        </td>
                    </tr>
                    @empty
                    @endforelse


                </table>
            </div>
        </div>
    </div>



</div>
<!-- /.container-fluid -->
@endsection