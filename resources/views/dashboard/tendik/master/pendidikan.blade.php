 @extends('layouts.tendik')

 @section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800">Detail Tendik</h1>
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
             <table class="table table-striped">

                 <tr>
                     <th>NIP Tendik</th>
                     <td>{{ Auth::guard('Tendik')->user()->nip }}</td>
                 </tr>
                 <tr>
                     <th>Nama</th>
                     <td>{{ Auth::guard('Tendik')->user()->nama }}</td>
                 </tr>
                 <tr>

                     <th>PENDIDIKAN TERAKHIR</th>
                     @foreach($pendidikan as $pendidikan)
                     @if (Auth::guard('Tendik')->user()->nip==$pendidikan->nip)
                     <td>{{ $pendidikan->pendidikan_terakhir }}</td>

                 </tr>
                 <tr>
                     <th>TAHUN KELULUSAN</th>
                     <td>{{ $pendidikan->tahun_kelulusan }}</td>
                     @endif
                     @endforeach
                 </tr>
             </table>
         </div>
     </div>
 </div>
 <!-- /.container-fluid -->
 @endsection