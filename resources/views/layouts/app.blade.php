<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> User </title>
    @include('includes.user.style')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('includes.user.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('includes.user.navbar')

                @yield('content')


            </div>
            <!-- End of Main Content -->

            @include('includes.user.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Siap untuk keluar</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Keluar" di bawah ini jika anda siap untuk keluar.</div>
                <div class="modal-footer">
                    <form action="{{ url('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                        <button class="btn btn-primary" type="submit">Keluar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- pesan jika data sudah ada -->
    <div class="modal fade" id="sukses" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                @if (Auth::user()->role ||"DIREKTUR"||"SEKETARIS DIREKTUR"||"BUK PERSURATAN"||"WADIR"
                ||"KOORDINATOR"||"PENERBITAN SK")
                <h5>DATA HANYA DAPAT DIKIRIM SEKALI</h5>
                @else
                <h5>AKSES DITOLAK</h5>
                @endif
            </div>
        </div>
    </div>
    <div class="modal fade" id="hakakses" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                @if (Auth::user()->role ||"DIREKTUR"||"SEKETARIS DIREKTUR"||"BUK PERSURATAN"||"WADIR"
                ||"KOORDINATOR"||"PENERBITAN SK")
                <h5>AKSES DITOLAK</h5>
                @endif
            </div>
        </div>
    </div>




    @stack('prepend-script')
    @include('includes.user.script')
    @stack('addon-script')

</body>

</html>