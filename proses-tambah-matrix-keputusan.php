<?php 
include "koneksi.php";
$id_alternatif = $_POST['id_alternatif'];
$id_bobot = $_POST['id_bobot'];
$id_skala = $_POST['id_skala'];

$sql="INSERT INTO matrixkeputusan (id_alternatif,id_bobot,id_skala) 
	 VALUES ('".$id_alternatif."','".$id_bobot."','".$id_skala."')";
$a=$koneksi->query($sql);
			if($a == true){
?>

<script language="JavaScript">
        alert('Data Matrix Keputusan berhasil ditambahkan!');
        document.location='dt_matrixkeputusan.php';
    </script>
<?php 			 }else {
				echo "eroooorrrr";
			}
 ?>
 