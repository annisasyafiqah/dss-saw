<?php 
include "koneksi.php";
$nama = $_POST['nm_alternatif'];

$sql="INSERT INTO alternatif (nm_alternatif) 
	 VALUES ('".$nama."')";
$a=$koneksi->query($sql);
			if($a == true){
?>

<script language="JavaScript">
        alert('Data Alternatif berhasil ditambahkan!');
        document.location='dt_alternatif.php';
    </script>
<?php 			 }else {
				echo "eroooorrrr";
			}
 ?>
 