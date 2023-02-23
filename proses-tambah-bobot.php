<?php 
include "koneksi.php";
$id_kriteria = $_POST['id_kriteria'];
$value_bobot = $_POST['value_bobot'];

$sql="INSERT INTO bobot (id_kriteria,value_bobot) 
	 VALUES ('".$id_kriteria."','".$value_bobot."')";
$a=$koneksi->query($sql);
			if($a == true){
?>

<script language="JavaScript">
        alert('Data Bobot berhasil ditambahkan!');
        document.location='dt_bobot.php';
    </script>
<?php 			 }else {
				echo "eroooorrrr";
			}
 ?>


 