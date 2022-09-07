@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<style>
input[type=text] {
    width: 100px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 1px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 2px 2px;
    background-repeat: no-repeat;
    padding: 1px 2px 1px 4px;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 30%;
}
</style>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">DATA SK BEBAN MENGAJAR</h1>

    </div>

    <form action="{{ route('admin.storesk') }}" method="get" autocomplete="on" enctype="multipart/form-data">
        @csrf
        <div class="form-group" align="right">
            <button type="submit" class="btn btn-primary">Simpan Data</button>
            <a href="{{ route('admin.sk') }}" class="btn btn-sm btn-warning shadow-sm">
                <i class=" text-white-50"></i> Kembali
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
                            <h6 style='margin-bottom:2px' align=center>NOMOR :<input name="nosurat" type="text"
                                    placeholder="Nomor Surat"></input>
                            </h6>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <p>
                            <h6 style='margin-bottom:2px' align=center>TENTANG</h6>
                            <h6 style='margin-bottom:2px' align=center>BEBAN MENGAJAR DOSEN SEMESTER <input
                                    name="semester" type="text" placeholder="ganjil /genap "></input></h6>
                            <h6 style='margin-bottom:2px' align=center>PROGRAM STUDI </h6>
                            <h6 style='margin-bottom:2px' align=center>TAHUN AKADEMIK <input name="tahun_akademik"
                                    type="text" placeholder="tahun akademik "></input></h6>
                            <h6 style='margin-bottom:2px' align=center> NAMA DOSEN
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
                            &nbsp;&nbsp; &nbsp;: <input name="nama_dosen" type="text" placeholder="Nama dosen "></input>
                        </td>
                    </tr>
                    <tr>
                        <td width="10%"> </td>
                        <td>
                            &nbsp;2. Jurusan &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                            &nbsp;: <input name="jurusan" type="text" placeholder="jurusan "></input>
                        </td>
                    </tr>
                    <tr>
                        <td width="10%"> </td>
                        <td>
                            &nbsp;3. Program Studi &nbsp; &nbsp; &nbsp;: <input name="program_studi" type="text"
                                placeholder="program studi "></input>
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
                        <tr align="left">
                            <td><input name="no1" type="text" placeholder="No.. "></input></td>
                            <td><input name="matakuliah1" type="text" placeholder="mata kuliah..."></input></td>
                            <td><input name="sks_t_p1" type="text" placeholder="sks t-p ..3 (1-2) "></input></td>
                            <td><input name="kelas1" type="text" placeholder="kelas.."></input></td>
                            <td><input name="semester1" type="text" placeholder="semester.."></input></td>
                            <td><input name="jumlah_sks1" type="text" placeholder="jumlah sks..."></input></td>
                        </tr>
                        <tr align="left">
                            <td><input name="no2" type="text" placeholder="No.. "></input></td>
                            <td><input name="matakuliah2" type="text" placeholder="mata kuliah..."></input></td>
                            <td><input name="sks_t_p2" type="text" placeholder="sks t-p ..3 (1-2) "></input></td>
                            <td><input name="kelas2" type="text" placeholder="kelas.."></input></td>
                            <td><input name="semester2" type="text" placeholder="semester.."></input></td>
                            <td><input name="jumlah_sks2" type="text" placeholder="jumlah sks..."></input></td>
                        </tr>
                        <tr align="left">
                            <td><input name="no3" type="text" placeholder="No.. "></input></td>
                            <td><input name="matakuliah3" type="text" placeholder="mata kuliah..."></input></td>
                            <td><input name="sks_t_p3" type="text" placeholder="sks t-p ..3 (1-2) "></input></td>
                            <td><input name="kelas3" type="text" placeholder="kelas.."></input></td>
                            <td><input name="semester3" type="text" placeholder="semester.."></input></td>
                            <td><input name="jumlah_sks3" type="text" placeholder="jumlah sks..."></input></td>
                        </tr>
                        <tr align="left">
                            <td><input name="no4" type="text" placeholder="No.. "></input></td>
                            <td><input name="matakuliah4" type="text" placeholder="mata kuliah..."></input></td>
                            <td><input name="sks_t_p4" type="text" placeholder="sks t-p ..3 (1-2) "></input></td>
                            <td><input name="kelas4" type="text" placeholder="kelas.."></input></td>
                            <td><input name="semester4" type="text" placeholder="semester.."></input></td>
                            <td><input name="jumlah_sks4" type="text" placeholder="jumlah sks..."></input></td>
                        </tr>
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
                            Pada Tanggal <input name="tanggal" type="text" placeholder="tanggal..."></input><br>
                            DIREKTUR POLITEKNIK NEGERI SAMBASs<br><br><br>
                            <u><input name="nama_direktur" type="text" placeholder="nama direktur.."></input></u><br>
                            <input name="nip_direktur" type="text" placeholder="nip direktur"></input><br><br><br><br>
                        </td>
                    </tr>
                </table>
            </div>
        </div>



    </form>

</div>
<!-- /.container-fluid -->
@endsection