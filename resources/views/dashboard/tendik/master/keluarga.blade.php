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
                     <th>NIP tendik</th>
                     <td>{{ Auth::guard('Tendik')->user()->nip }}</td>
                 </tr>
                 <tr>
                     <th>Nama</th>
                     <td>{{ Auth::guard('Tendik')->user()->nama }}</td>
                 </tr>
                 <tr>

                     <th>NAMA SUAMAI / ISTRI</th>
                     @foreach($keluarga as $keluarga)
                     @if (Auth::guard('Tendik')->user()->nip==$keluarga->nip)
                     <td>{{ $keluarga->suamiistri }}</td>

                 </tr>
                 <tr>
                     <th>JUMLAH ANAK</th>
                     <td>{{ $keluarga->jumlah_anak }}</td>
                     @endif
                     @endforeach
                 </tr>
             </table>
         </div>
     </div>
 </div>
 <!-- /.container-fluid -->
 @endsection