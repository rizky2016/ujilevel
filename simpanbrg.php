<?php
    include 'konek.php';

    if(isset($_POST['Lanjutkan'])){

        $ID = $_POST['ID'];
        $Nama = $_POST['Nama'];
        $Merek = $_POST['Merek'];
        $Tipe = $_POST['Tipe'];
        $Metode = $_POST['Metode'];
        $Kelas = $_POST['Kelas'];

        $sql = "INSERT INTO barang ( ID, Nama, Merek, Tipe, Metode, Kelas)
        VALUES ('$ID', '$Nama' , '$Merek' , '$Tipe' , '$Metode' , '$Kelas')";
        $query = mysqli_query($connect, $sql);

        if($query){
            header('Location: databarang.php');
        }else{
            header('Location: simpanbrg.php?status=gagal');
        }


    }

?>