<?php
include 'konek.php';

if (isset($_GET['ID'])) {
    header('Location:datasiswa.php');
}

$ID = $_GET['ID'];

$sql = "DELETE FROM ujilevel WHERE ID='$ID'";
$query = mysqli_query($connect, $sql);

if ($query) {
    header('location: datasiswa.php');
}else{
    header('location: hapus.php?status=gagal');
}
?>