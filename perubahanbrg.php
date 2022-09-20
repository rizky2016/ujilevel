<?php
    include 'konek.php';

    if(isset($_POST['Lanjutkan'])){

        $ID = $_POST['ID'];
        $Nama = $_POST['Nama'];
        $Merek = $_POST['Merek'];
        $Tipe = $_POST['Tipe'];
        $Metode = $_POST['Metode'];
        $Kelas = $_POST['Kelas'];

        $sql =" UPDATE `barang` SET Nama ='$Nama',Merek ='$Merek',Tipe ='$Tipe',Metode ='$Metode',Kelas ='$Kelas'WHERE ID = '$ID'";
        $query = mysqli_query($connect, $sql);

        if($query){
            header('Location: databarang.php');
        }else{
            header('Location: perubahanbrg.php?status=gagal');
        }

    }
?>  