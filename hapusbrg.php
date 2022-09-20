<?php
include 'konek.php';

if (isset($_GET['ID'])) {
    header('Location:databarang.php');
}

$ID = $_GET['ID'];

$sql = "DELETE FROM barang WHERE ID='$ID'";
$query = mysqli_query($connect, $sql);

if ($query) {
    header('location: databarang.php');
}else{
    header('location: hapusbrg.php?status=gagal');
}
?>