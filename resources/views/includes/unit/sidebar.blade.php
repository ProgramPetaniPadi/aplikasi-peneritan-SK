<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-text mx-3"> {{ Auth::user()->name }} </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    @if (Auth::user()->jabatan_fungsional == 'KAP PRODI')
    <li class="nav-item {{ request()->is('Unit/home') ?'active' : '' }}">
        <a class="nav-link" href="{{ route('Unit.home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item {{ request()->is('Unit/proses') || request()->is('Unit/selesai')  ?'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapmasterunit"
            aria-expanded="true" aria-controls="collapmasterunit">
            <span> Permohonan Surat Tugas</span>
        </a>
        <div id="collapmasterunit" class="collapse" aria-labelledby="headingpekerjaan" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('Unit.kapprodiproses') }}">Usulan Surat Tugas <br>Mengajar</a>
                <a class="collapse-item" href="{{ route('Unit.usulansk') }}">Usulan Surat SK <br>Mengajar</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('Unit.skkapprodi') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list"
                viewBox="0 0 16 16">
                <path
                    d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                <path
                    d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
            </svg>
            <span>Master SK Beban Mengajar </span></a>
    </li>
    @endif
    @if (Auth::user()->jabatan_fungsional == 'STAFF PRODI')
    <li class="nav-item {{ request()->is('Unit/home') ?'active' : '' }}">
        <a class="nav-link" href="{{ route('Unit.home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item {{ request()->is('Unit/proses') || request()->is('Unit/selesai')  ?'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapmasterunit"
            aria-expanded="true" aria-controls="collapmasterunit">
            <span> Permohonan Surat Tugas</span>
        </a>
        <div id="collapmasterunit" class="collapse" aria-labelledby="headingpekerjaan" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('Unit.usulanmengajarstaff') }}"> Surat Tugas Beban
                    <br>Mengajar</a>
                <a class="collapse-item" href="{{ route('Unit.usulansuratsk') }}">Usulan SK Beban Mengajar</a>
            </div>
        </div>
    </li>
    @endif

    @if (Auth::user()->jabatan_fungsional == 'STAFF UMUM')
    <li class=" nav-item {{ request()->is('Unit/home') ?'active' : '' }}">
        <a class="nav-link" href="{{ route('Unit.home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item {{ request()->is('Unit/proses') || request()->is('Unit/selesai')  ?'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapmasterunit"
            aria-expanded="true" aria-controls="collapmasterunit">
            <span> Permohonan Surat Tugas</span>
        </a>
        <div id="collapmasterunit" class="collapse" aria-labelledby="headingpekerjaan" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('Unit.staffumum') }}"> Surat Tugas Beban
                    <br>Mengajar</a>
                <a class="collapse-item" href="{{ route('Unit.usulanskstaffumum') }}">Usulan SK Beban
                    Mengajar</a>

            </div>
        </div>
    </li>
    @endif

    @if (Auth::user()->jabatan_fungsional == 'DIREKTUR')
    <li class="nav-item {{ request()->is('Unit/home') ?'active' : '' }}">
        <a class="nav-link" href="{{ route('Unit.home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item {{ request()->is('Unit/proses') || request()->is('Unit/selesai')  ?'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapmasterunit"
            aria-expanded="true" aria-controls="collapmasterunit">
            <span> Permohonan Surat Tugas</span>
        </a>
        <div id="collapmasterunit" class="collapse" aria-labelledby="headingpekerjaan" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('Unit.direktur') }}"> Surat Tugas Beban
                    <br>Mengajar</a>
                <a class="collapse-item" href="{{ route('Unit.usulanskdirektur') }}">Surat Usulan SK <br> Beban
                    Mengajar</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('Unit.skdirektur') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list"
                viewBox="0 0 16 16">
                <path
                    d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                <path
                    d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
            </svg>
            <span>Master SK Beban Mengajar </span></a>
    </li>
    @endif
    @if (Auth::user()->jabatan_fungsional == 'WADIR')
    <li class="nav-item {{ request()->is('Unit/home') ?'active' : '' }}">
        <a class="nav-link" href="{{ route('Unit.home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item {{ request()->is('Unit/proses') || request()->is('Unit/selesai')  ?'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapmasterunit"
            aria-expanded="true" aria-controls="collapmasterunit">
            <span> Permohonan Surat Tugas</span>
        </a>
        <div id="collapmasterunit" class="collapse" aria-labelledby="headingpekerjaan" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('Unit.wadir') }}"> Surat Tugas Beban
                    <br>Mengajar</a>
                <a class="collapse-item" href="{{ route('Unit.usulanskwadir') }}">Surat Usulan SK <br> Beban
                    Mengajar</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('Unit.skwadir') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list"
                viewBox="0 0 16 16">
                <path
                    d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                <path
                    d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
            </svg>
            <span>Master SK Beban Mengajar </span></a>
    </li>
    @endif
    @if (Auth::user()->jabatan_fungsional == 'KOORDINATOR')
    <li class="nav-item {{ request()->is('Unit/home') ?'active' : '' }}">
        <a class="nav-link" href="{{ route('Unit.home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item {{ request()->is('Unit/proses') || request()->is('Unit/selesai')  ?'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapmasterunit"
            aria-expanded="true" aria-controls="collapmasterunit">
            <span> Permohonan Surat Tugas</span>
        </a>
        <div id="collapmasterunit" class="collapse" aria-labelledby="headingpekerjaan" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('Unit.koordinator') }}"> Surat Tugas Beban
                    <br>Mengajar</a>
                <a class="collapse-item" href="#">Selesai</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('Unit.skkoordinator') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list"
                viewBox="0 0 16 16">
                <path
                    d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                <path
                    d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
            </svg>
            <span>Master SK Beban Mengajar </span></a>
    </li>
    @endif
    <!-- Nav Item - Pages Collapse Menu -->

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->