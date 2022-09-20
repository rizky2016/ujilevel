<?php
    include 'konek.php';

    if(isset($_POST['Lanjutkan'])){

        $ID = $_POST['ID'];
        $Nama = $_POST['Nama'];
        $Alamat = $_POST['Alamat'];
        $TanggalLahir = $_POST['TanggalLahir'];
        $Kelamin = $_POST['Kelamin'];
        $Kelas = $_POST['Kelas'];

        $sql = "INSERT INTO ujilevel ( ID, Nama, Alamat, TanggalLahir, Kelamin, Kelas)
        VALUES ('$ID', '$Nama' , '$Alamat' , '$TanggalLahir' , '$Kelamin' , '$Kelas')";
        $query = mysqli_query($connect, $sql);

        if($query){
            header('Location: datasiswa.php');
        }else{
            header('Location: simpan.php?status=gagal');
        }


    }

?>