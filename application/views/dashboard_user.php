<body>


    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-3 pt-2 ">
            <div class="card-body p-2">
                <div align="center">
                    <div class="btn btn-primary">BERANDA</div>
                </div>

                <div class="container">
                    <h4>Selamat Datang di E-Learning STT Bandung</h4><hr>                    
                    
                    

                    <p>NPM : <?php print_r($datamhs[0]["int_npm"]); ?></p>
                    <p>Nama : <?php print_r($datamhs[0]["str_nama"]); ?></p>
                    <p>Program Studi : <?php print_r($datamhs[0]["str_prodi"]); ?></p>
                    <p>Kelas: <?php print_r($datamhs[0]["str_kelas"]); ?>
                    <p>Semester: <?php print_r($datamhs[0]["int_semester"]); ?>
                </p><hr>


            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-3 pt-2 ">
        <div class="card-body p-2">
            <div align="center">
                <div class="btn btn-primary">JADWAL</div><br>
            </div>

            <div class="container">
                <h4>Jadwal Mata Kuliah Hari ini</h4><hr>

                <div class="btn btn-success ml-5 mr-5">
                    <div class="card-body mr-3 ml-3">
                        <div style="bold">
                            <p>Mata Kuliah : Pemrograman Web 2</p>
                            <p>Dosen : Andri Nugroho,S.Kom</p>
                            <p>Waktu : Senin(08.00 - 10.15)</p>
                            <p>Ruang : Kampus 1 Ruang 2.9</p>
                        </div>
                    </div>
                </div>

                <div class="btn btn-success ml-5 mr-5">
                    <div class="card-body mr-3 ml-3">
                        <div style="bold">
                            <p>Mata Kuliah : Mobile Programing</p>
                            <p>Dosen : Andri Nugraha,M.Kom</p>
                            <p>Waktu : Senin(10.15 - 12.30)</p>
                            <p>Ruang : Kampus 1 Ruang 3.5</p>
                        </div>
                    </div>
                </div>

                <div class="btn btn-danger ml-5 mr-5">
                    <div class="card-body mr-3 ml-3">
                        <div style="bold">
                            <p>Mata Kuliah : Enteurpreneurship</p>
                            <p>Dosen : Tarsinah Sumarni,M.Kom</p>
                            <p>Waktu : Senin(14.30 - 16.00)</p>
                            <p>Ruang : Kampus 1 Ruang 2.2</p>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-3 pt-2 ">
        <div class="card-body p-2">
            <div align="center">
                <div class="btn btn-primary">Nilai</div>
            </div>

            <div class="container">
                <h4>Nilai Perkuliahan Mahasiswa</h4>
                <table style="margin:20px auto;" class="table">
                    <tr>
                        <th rowspan="2">No</th>
                        <th rowspan="2">Mata Kuliah</th>
                        <th colspan="6">Nilai</th>                            
                        <tr>
                            <td>UTS</td>
                            <td>UAS</td>
                            <td>Kuis</td>
                            <td>Tugas</td>
                            <td>Absensi</td>
                            <td>Grade</td>
                        </tr>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>Augmented & Virtual Reality</td>
                        <td>80</td>
                        <td>80</td>
                        <td>80</td>
                        <td>80</td>
                        <td>80</td>
                        <td>AB</td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Mobile Programming</td>
                        <td>80</td>
                        <td>80</td>
                        <td>80</td>
                        <td>80</td>
                        <td>80</td>
                        <td>AB</td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Pemrograman Berorientasi Objek</td>
                        <td>80</td>
                        <td>80</td>
                        <td>80</td>
                        <td>80</td>
                        <td>80</td>
                        <td>AB</td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>Pemograman Web 2</td>
                        <td>80</td>
                        <td>80</td>
                        <td>80</td>
                        <td>80</td>
                        <td>80</td>
                        <td>AB</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-3 pt-2 ">
        <div class="card-body p-2">
            <div align="center">
                <div class="btn btn-primary">ABSENSI</div>
            </div>

            <div class="container">
                <h4>Kehadiran Perkuliahan Mahasiswa</h4>                    

                <table style="margin:20px auto;" class="table">
                    <tr>
                        <th>No</th>
                        <th>ID Kurikulum</th>
                        <th>Nama Mata Kuliah</th>
                        <th>Nama Kelas</th>
                        <th>Hadir</th>
                        <th>Izin</th>
                        <th>Alfa</th>
                        <th>Sakit</th>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>123</td>
                        <td>Augmented & Virtual Reality</td>                            
                        <td><?php print_r($datamhs[0]["str_kelas"]); ?></td>
                        <td>14</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>234</td>
                        <td>Mobile Programming</td>                            
                        <td><?php print_r($datamhs[0]["str_kelas"]); ?></td>
                        <td>14</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>345</td>
                        <td>Pemrograman Berorientasi Objek</td>
                        <td><?php print_r($datamhs[0]["str_kelas"]); ?></td>
                        <td>14</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>456</td>
                        <td>Pemograman Web 2</td>
                        <td><?php print_r($datamhs[0]["str_kelas"]); ?></td>
                        <td>14</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                </table>


            </div>
        </div>
    </div>
</div>

</div>
</body>