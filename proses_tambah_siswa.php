<?php 
include "koneksi.php";
$nama = $_POST['nama'];
$jarak = $_POST['jarak'];
$prestasi = $_POST['prestasi'];
$nilai = $_POST['nilai'];
$pendaftaran = $_POST['pendaftaran'];
$sekolah = $_POST['sekolah'];

$sql="INSERT INTO siswa (nama,jarak,prestasi,nilai,pendaftaran,sekolah) 
	 VALUES ('".$nama."','".$jarak."','".$prestasi."','".$nilai."','".$pendaftaran."','".$sekolah."')";
$a=$koneksi->query($sql);
			if($a == true){
?>

<script language="JavaScript">
        alert('Data Siswa berhasil ditambahkan!');
        document.location='dt_matrixkeputusan.php';
    </script>
<?php 			 }else {
				echo "eroooorrrr";
			}
 ?>

<!-- Insert data Ke Tabel Alternatfi -->
<?php
$sql_alternatif="INSERT INTO alternatif (nm_alternatif) 
	 VALUES ('".$nama."')";
$a_alternatif=$koneksi->query($sql_alternatif);
			if($a == true){
?>
<?php 			 }else {
				echo "eroooorrrr";
			}
 ?>

 