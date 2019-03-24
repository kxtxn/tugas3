<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <title>Tugas 3 Menampilkan isi tabel mysql dalam format JSON</title>

</head>

<body>
    
        <div class="row">
            <h3>Penduduk Miskin:</h3>
            <?php

            $q = "SELECT * FROM penduduk_miskin";
            $hasil = mysqli_query($koneksi, $q);

            if (mysqli_num_rows($hasil) > 0) {
                $data = array();
                $data['json'] = array();
                while ($x = mysqli_fetch_array($hasil)) {
                    $d['id_pen'] = $x["id_pen"];
                    $d['no_kk'] = $x["no_kk"];
                    $d['n_kpl_keluarga'] = $x["n_kpl_keluarga"];
                    $d['nama'] = $x["nama"];
                    $d['raskin'] = $x["raskin"];
                    $d['jamkesmas'] = $x["jamkesmas"];
                    $d['pkh'] = $x["pkh"];
                    $d['s_ekonomi'] = $x["s_ekonomi"];
                    array_push($data['json'], $d);
                }
                echo json_encode($data);
            } else {
                $data["pesan"] = "tidak ada data";
                echo json_encode($data);
            }
            ?>
        </div>
		
				        <div class="row">
            <h3>Agama:</h3>
            <?php

            $q = "SELECT * FROM ref_agama";
            $hasil = mysqli_query($koneksi, $q);

            if (mysqli_num_rows($hasil) > 0) {
                $data = array();
                $data['json'] = array();
                while ($x = mysqli_fetch_array($hasil)) {
                    $d['id_agama'] = $x["id_agama"];
                    $d['deskripsi'] = $x["deskripsi"];
                    $d['is_diakui'] = $x["is_diakui"];
                    array_push($data['json'], $d);
                }
                echo json_encode($data);
            } else {
                $data["pesan"] = "tidak ada data";
                echo json_encode($data);
            }
            ?>
        </div>

		        <div class="row">
            <h3>Siswa Miskin:</h3>
            <?php

            $q = "SELECT * FROM siswa_miskin";
            $hasil = mysqli_query($koneksi, $q);

            if (mysqli_num_rows($hasil) > 0) {
                $data = array();
                $data['json'] = array();
                while ($x = mysqli_fetch_array($hasil)) {
                    $d['id_siswa'] = $x["id_siswa"];
                    $d['no_kk'] = $x["no_kk"];
                    $d['nik'] = $x["nik"];
                    $d['nama'] = $x["nama"];
                    $d['pendidikan'] = $x["pendidikan"];
                    $d['bsm'] = $x["bsm"];
                    $d['s_ekonomi'] = $x["s_ekonomi"];
                    array_push($data['json'], $d);
                }
                echo json_encode($data);
            } else {
                $data["pesan"] = "tidak ada data";
                echo json_encode($data);
            }
            ?>
        </div>
		
		

  




    </body>


</html> 