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
                            <th> NAMA DOSEN</th>
                            <th> SK BEBAN MENGAJAR</th>
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
                            <td>{{ $items->nama_dosen }}</td>
                            <td>
                                <div class="form-group ">
                                    <button type="botton" class="btn btn-success "><a class=" text-white"
                                            href="{{ route('Unit.detailskdirektur', $items->id) }}  ">DETAIL
                                            SK</a></button>
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