<?php
    include 'konek.php';

    if(isset($_POST['Lanjutkan'])){

        $ID = $_POST['ID'];
        $Nama = $_POST['Nama'];
        $Alamat = $_POST['Alamat'];
        $TanggalLahir = $_POST['TanggalLahir'];
        $Kelamin = $_POST['Kelamin'];
        $Kelas = $_POST['Kelas'];

        $sql =" UPDATE `ujilevel` SET Nama ='$Nama',Alamat ='$Alamat',TanggalLahir ='$TanggalLahir',Kelamin ='$Kelamin',Kelas ='$Kelas'WHERE ID = '$ID'";
        $query = mysqli_query($connect, $sql);

        if($query){
            header('Location: datasiswa.php');
        }else{
            header('Location: perubahan.php?status=gagal');
        }

    }
?>  