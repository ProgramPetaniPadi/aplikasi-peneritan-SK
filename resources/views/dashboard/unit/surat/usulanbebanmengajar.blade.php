<style>
table {
    border-collapse: collapse;
}

table,
th,
td {
    border: 1px solid;
}
</style>

<body onLoad="window.print()">
    <div class="col-xl-8 col-lg-8">
        <div class="card shadow">
            <div class="card-body">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th rowspan="2">NO</th>
                        <th rowspan="2">Nama Dosen Pengajar</th>
                        <th rowspan="2">Mata Kuliah</th>
                        <th rowspan="2">Semester / Kelas</th>
                        <th colspan="3">Jumlah</th>
                        <th rowspan="2">Jumlah SKS</th>
                    </tr>
                    <tr>
                        <td>SKS (T-P)</td>
                        <td>Jam MK</td>
                        <td>Kelas</td>
                    </tr>
                    <?php
$i=1;
                        ?>
                    @forelse ($matakuliah as $matakuliah)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $matakuliah->id_dosen }}</td>
                        <td>{{ $matakuliah->mata_kuliah }}</td>
                        <td>{{ $matakuliah->semester_kelas }}</td>
                        <td>{{ $matakuliah->sks_t_p }}</td>
                        <td>{{ $matakuliah->jamMK }}</td>
                        <td>{{ $matakuliah->kelas }}</td>
                        <td>{{ $matakuliah->totalSKS }}</td>
                    </tr>
                    @empty
                    @endforelse
                    <tr>
                        <th colspan="8">total</th>
                    </tr>


                </table>
            </div>
        </div>
    </div>
</body>