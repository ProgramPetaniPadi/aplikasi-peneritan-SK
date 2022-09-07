@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->


<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">DATA SK BEBAN MENGAJAR</h1>
        <a href="{{ route('admin.sk') }}" class="btn btn-sm btn-warning shadow-sm">
            <i class=" text-white-50"></i> Kembali
        </a>
        <a href="{{ route('admin.printsk', $items->id) }}" class="btn btn-sm btn-warning shadow-sm" target="_blank">
            <i class=" text-white-50"></i> print
        </a>
    </div>


    <div class="col-xl-10 col-lg-10">
        <div class="card shadow">
            <br><br>
            <table border=0 width=100%>
                <tr style="float : left">
                    <td align="center">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img
                            src='../../images/logo.png' width='120px'></td>
                </tr>
                <tr style="float : left">
                    <td align="center">
                        <p>KEMENTERIAN PENDIDIKAN, KEBUDAYAAN, RISET DAN TEKNOLOGI <br>
                            <b>POLITEKNIK NEGERI SAMBAS</b><br>
                            Jalan Raya Sejangkung - Sambas, 79462 Kalimantan Barat <br>
                            Telp (0562) 6303000/6303333 Laman : www. poltesa.ac.id Email:info@poltesa.ac.id
                        </p>
                    </td>
                </tr>
                <td>
                    <hr style='border:1px solid #000'>
                </td>
            </table>
            <table width='90%' align="center">
                <tr>
                    <td colspan="2" align="center">
                        <p>
                        <h6 style='margin-bottom:2px' align=center>KEPUTUSAN</h6>
                        <h6 style='margin-bottom:2px' align=center>DIREKTUR POLITEKNIK NEGERI SAMBAS</h6>
                        <h6 style='margin-bottom:2px' align=center>NOMOR :{{$items->nosurat}}
                        </h6>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <p>
                        <h6 style='margin-bottom:2px' align=center>TENTANG</h6>
                        <h6 style='margin-bottom:2px' align=center>BEBAN MENGAJAR DOSEN SEMESTER {{$items->semester}}
                        </h6>
                        <h6 style='margin-bottom:2px' align=center>PROGRAM STUDI </h6>
                        <h6 style='margin-bottom:2px' align=center>TAHUN AKADEMIK {{$items->tahun_akademik}}</h6>
                        <h6 style='margin-bottom:2px' align=center>{{$items->nama_dosen}}
                        </h6>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <p>
                        <h6 style='margin-bottom:2px' align=center>DIREKTUR POLITEKNIK NEGERI SAMBAS, </h6>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td width="5%">Menimbang </td>
                    <td>
                        : 1. &nbsp;&nbsp;&nbsp; Wahwa dalam rangka melaksanakan Tri Dharma Perguruan Tinggi di
                        lingkungan Politeknik
                    </td>
                </tr>
                <tr>
                    <td width="20%"> </td>
                    <td>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Negeri Sambas perlu
                        diatur beban tugas tenaga pengajar,
                    </td>
                </tr>
                <tr>
                    <td width="10%"></td>
                    <td>
                        <p>
                            &nbsp;2. &nbsp;&nbsp;&nbsp;&nbsp;Bahwa sehubungan dengan hal tersebut perlu
                            ditetapkan
                            dengan Surat
                            Keputusan
                            Direktur,<br><br>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td width="5%">Mengingat </td>
                    <td>
                        : 1. &nbsp;&nbsp;&nbsp; UU nomor 20 tahun 1997 tentang Penerimaan Negara Bukan Pajak (PNBP):
                    </td>
                </tr>
                <tr>
                    <td width="10%"></td>
                    <td>
                        &nbsp;2. &nbsp;&nbsp;&nbsp;&nbsp; Undang-Undang, Nomor 20 Tahun 2003 tentang Sistem
                        Pendidikan
                        Nasional (Lembaran
                    </td>
                </tr>

                <tr>
                    <td width="10%"> </td>
                    <td>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Negara Republik Indonesia Tahun
                        2003 Nomor 78, Tambahan Lembaran
                    </td>
                </tr>
                <tr>
                    <td width="10%"> </td>
                    <td>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tepublik Indonesia Nomor 4301):

                    </td>
                </tr>
                <tr>
                    <td width="10%"></td>
                    <td>
                        &nbsp;3. &nbsp;&nbsp;&nbsp;&nbsp; Peraturan Pemerintah Republik Indonesia Nomor 32 Tahun
                        2013
                        tentang Standar
                    </td>
                </tr>
                <tr>
                    <td width="10%"> </td>
                    <td>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tepublik Indonesia Nomor
                        4301):Nasional Pendidikan,
                    </td>
                </tr>
                <tr>
                    <td width="10%"></td>
                    <td>
                        &nbsp;4. &nbsp;&nbsp;&nbsp;&nbsp; Permendikbud Nomor 15 Tahun 2013 tentang Pendirian,
                        Organisasi, dan Tata Kerja
                    </td>
                </tr>
                <tr>
                    <td width="10%"> </td>
                    <td>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Politeknik Negeri Sambas,
                    </td>
                </tr>
                <tr>
                    <td width="10%"></td>
                    <td>
                        &nbsp;5. &nbsp;&nbsp;&nbsp;&nbsp; P Kepmendikbudristek RI Nomor 64121/MPK.LA/KP.07.00/2021
                        tentang pengangkatan
                    </td>
                </tr>
                <tr>
                    <td width="10%"> </td>
                    <td>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;direktur Politeknik Negeri
                        Sambas
                        perlode tahun 2021 - 2025:
                    </td>
                </tr>
                <tr>
                    <td width="10%"></td>
                    <td>
                        &nbsp;5. &nbsp;&nbsp;&nbsp;&nbsp;Permen Pendayagunaan Aparatur Negara dan Reformasi
                        Birokrasi
                        Republik Indonesia
                    </td>
                </tr>
                <tr>
                    <td width="10%"> </td>
                    <td>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nomor 17 Tahun 2013 tentang
                        jabatan
                        fungsional dosen dan angka kreditnya:
                    </td>
                </tr>
                <tr>
                    <td>Memperhatikan </td>
                    <td>
                        &nbsp;: 6. &nbsp;&nbsp;&nbsp;&nbsp;Surat Tugas Beban Mengajar Dosen Nomor 176/PL37/AK/2021
                        tanggal
                        17 September
                    </td>
                </tr>
                <tr>
                    <td width="10%"> </td>
                    <td>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2021 Program Studi Manajemen
                        Informatika: <br><br>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        MEMUTUSKAN
                    </td>
                </tr>
                <tr>
                    <td>Menetapkan </td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td>KESATU </td>
                    <td>
                        &nbsp;: Dosen tersebut di bawah ini :
                    </td>
                </tr>
                <tr>
                    <td width="10%"> </td>
                    <td>
                        &nbsp;1. Nama &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                        &nbsp;&nbsp; &nbsp;: {{$items->nama_dosen}}
                    </td>
                </tr>
                <tr>
                    <td width="10%"> </td>
                    <td>
                        &nbsp;2. Jurusan &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                        &nbsp;: {{$items->jurusan}}
                    </td>
                </tr>
                <tr>
                    <td width="10%"> </td>
                    <td>
                        &nbsp;3. Program Studi &nbsp; &nbsp; &nbsp;:{{$items->program_studi}}
                    </td>
                </tr>
            </table>
            <div class="card-body">
                <table border="1px-solid" width="90%" align="center">
                    <tr align="center">
                        <th>NO</th>
                        <th>MATA KULIAH</th>
                        <th>SKS (T-P)</th>
                        <th>KELAS</th>
                        <th>SEMESTER</th>
                        <th>JUMLAH SKS</th>
                    </tr>
                    @if($items->no1 != null)
                    <tr align="left">
                        <td>{{$items->no1}}</td>
                        <td>{{$items->matakuliah1}}</input></td>
                        <td>{{$items->sks_t_p1}}</td>
                        <td>{{$items->kelas1}}</td>
                        <td>{{$items->semester1}}</td>
                        <td>{{$items->jumlah_sks1}}</td>
                    </tr>
                    @endif
                    @if($items->no2 != null)
                    <tr align="left">
                        <td>{{$items->no2}}</td>
                        <td>{{$items->matakuliah2}}</td>
                        <td>{{$items->sks_t_p2}}</td>
                        <td>{{$items->kelas2}}</td>
                        <td>{{$items->semester2}}</td>
                        <td>{{$items->jumlah_sks2}}</td>
                    </tr>
                    @endif
                    @if ($items->no3 != null)
                    <tr align="left">
                        <td>{{$items->no3}}</td>
                        <td>{{$items->matakuliah3}}</td>
                        <td>{{$items->sks_t_p3}}</td>
                        <td>{{$items->kelas3}}</td>
                        <td>{{$items->semester3}}</td>
                        <td>{{$items->jumlah_sks3}}</td>
                    </tr>
                    @endif
                    @if($items->no4 != null)
                    <tr align="left">
                        <td>{{$items->no4}}</td>
                        <td>{{$items->matakuliah4}}</td>
                        <td>{{$items->sks_t_p4}}</td>
                        <td>{{$items->kelas4}}</td>
                        <td>{{$items->semester4}}</td>
                        <td>{{$items->jumlah_sks4}}</td>
                    </tr>
                    @endif
                </table>
            </div>
            <table width='90%' align="center">

                <tr>
                    <td width="5%">KEDUA </td>
                    <td>
                        : Keputusan ini berlaku sejak tanggal ditetapkan dengan ketentuan apabila
                        kemudian hari
                    </td>
                </tr>
                <tr>
                    <td width="20%"> </td>
                    <td>
                        &nbsp;&nbsp;terdapat kekeliruan akan diperbaiki
                        sebagaimana mestinya<br><br><br>
                    </td>
                </tr>
            </table>

            <table width=100% align="center">
                <tr>
                    <td width="10%"></td>
                    <td>
                        <br>
                        Tembusan, <br>
                        &nbsp;&nbsp; 1. Wakil Direktur I dab II<br>
                        &nbsp;&nbsp; 2. Ketua Jurusan Manajemen Informatika<br>
                        &nbsp;&nbsp; 3. Koordinator Prodi Manajemen Informatika<br>
                        &nbsp;&nbsp; 4. Koord BUK<br>
                        &nbsp;&nbsp; 5. Yang Bersangkutan<br>
                        &nbsp;&nbsp; 6. Arsip<br><br><br><br>

                    </td>

                    <td width="5%">

                    </td>

                    <td>

                        Ditetapkan di Sambas<br>
                        Pada Tanggal {{$items->tanggal}}<br>
                        DIREKTUR POLITEKNIK NEGERI SAMBASs<br><br><br>
                        <u>{{$items->nama_direktur}}</u><br>
                        {{ $items->nip_direktur}}<br><br><br><br>
                    </td>
                </tr>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection