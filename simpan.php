<?php
    include 'konek.php';

    if(isset($_POST['Lanjutkan'])){

        $ID = $_POST['ID'];
        $Nama = $_POST['Nama'];
        $Kelamin = $_POST['Kelamin'];
        $TanggalLahir = $_POST['TanggalLahir'];
        $Alamat = $_POST['Alamat'];
        $Kelas = $_POST['Kelas'];

        $sql = "INSERT INTO ujilevel ( ID, Nama, Kelamin, TanggalLahir, Alamat, Kelas)
        VALUES ('$ID', '$Nama' , '$Kelamin' , '$TanggalLahir' , '$Alamat' , '$Kelas')";
        $query = mysqli_query($connect, $sql);

        if($query){
            header('Location: datasiswa.php');
        }else{
            header('Location: simpan.php?status=gagal');
        }


    }

?>