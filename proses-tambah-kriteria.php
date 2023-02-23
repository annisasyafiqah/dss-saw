<?php 
include "koneksi.php";
$nama = $_POST['nm_kriteria'];

$sql="INSERT INTO kriteria (nm_kriteria) 
	 VALUES ('".$nama."')";
$a=$koneksi->query($sql);
			if($a == true){
?>

<script language="JavaScript">
        alert('Data Kriteria berhasil ditambahkan!');
        document.location='dt_kriteria.php';
    </script>
<?php 			 }else {
				echo "eroooorrrr";
			}
 ?>
 