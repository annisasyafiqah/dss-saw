<?php 
include "koneksi.php";
error_reporting(0);


if(isset($_POST['aksi']))
{
    //Pengujian jika edit
    if($_GET['aksi'] == "ubah")
    {
      $id = $_POST['id_alternatif'];
      $nama = $_POST['nm_alternatif'];

      $sql=" UPDATE alternatif SET nm_alternatif='$nama' WHERE id_alternatif = '$id'";
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
<?php
    }else if($_GET['aksi'] == "hapus"){
        $id = $_POST['id_alternatif'];
      $nama = $_POST['nm_alternatif'];
       mysqli_query($koneksi,"DELETE FROM alternatif WHERE id_alternatif='$id'") or mysqli_error($koneksi);
              if($a == true){
        ?>
  
        <script language="JavaScript">
                alert('Data Dihapus!');
                document.location='dt_alternatif.php';
            </script>
        <?php 			 }else {
                echo "eroooorrrr";
              }
        ?>
  <?php
    }
}
?>