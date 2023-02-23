<?php 
include "koneksi.php";
$nilai = $_POST['nilai'];
$keterangan = $_POST['keterangan'];

$sql="INSERT INTO skala (nilai,keterangan) 
	 VALUES ('".$nilai."','".$keterangan."')";
$a=$koneksi->query($sql);
			if($a == true){
?>

<script language="JavaScript">
        alert('Data Skala berhasil ditambahkan!');
        document.location='dt_skala.php';
    </script>
<?php 			 }else {
				echo "eroooorrrr";
			}
 ?>
 