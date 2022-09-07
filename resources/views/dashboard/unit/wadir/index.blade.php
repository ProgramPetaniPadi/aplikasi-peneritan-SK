@extends('layouts.unit')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">DATA Usulan Tugas Beban Mengajar</h1>

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

        <div class="col-xl-12 col-lg-12">
            <div class="card shadow">
                <div class="card-body">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                            <th>NO</th>
                            <th> NOMOR SURAT </th>
                            <th> JURUSAN </th>
                            <th> PROGRAM STUDI </th>
                            <th> SEMESTER </th>
                            <th> TAHUN AKADEMIK</th>
                            <th>USULAN SURAT</th>
                            <th>SURAT PERMOHONAN </th>
                            <th>LEMBAR DISPOSISI</th>
                            <th>SURAT TUGAS</th>
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
                                            href="{{ route('Unit.showusulanmengajarwadir', $items->id) }}  ">Usulan
                                            Surat</a></button>
                                </div>
                            </td>
                            <td>
                                <div class="form-group ">
                                    <button type="botton" class="btn btn-success "><a class=" text-white"
                                            href="{{ route('Unit.showsuratwadir', $items->id) }}  ">Surat
                                            Permohonan</a></button>
                                </div>
                            </td>
                            <td>
                                <div class="form-group ">
                                    <button type="botton" class="btn btn-success "><a class=" text-white"
                                            href="{{ route('Unit.lembardisposisiwadir', $items->id) }}  ">Lembar
                                            Disposisi</a></button>
                                </div>
                            </td>
                        </tr>
                        @empty
                        @endforelse


                    </table>
                </div>
            </div>
        </div>




    </div>
</div>
<!-- /.container-fluid -->
@endsection