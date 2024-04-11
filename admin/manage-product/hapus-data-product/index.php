<?php
include "../../koneksi.php";
$id_product = $_GET['id_product'];

$query = mysqli_query($koneksi,"delete from product where id_product='$id_product'");

if($query)
{
	header("location:../#");
}
else
{
	echo "Data gagal dihapus!";
}
?>