<?php
    include 'konek.php';

    if(isset($_POST['Lanjutkan'])){

        $ID = $_POST['ID'];
        $Nama = $_POST['Nama'];
        $Kelamin = $_POST['Kelamin'];
        $TanggalLahir = $_POST['TanggalLahir'];
        $Alamat = $_POST['Alamat'];
        $Kelas = $_POST['Kelas'];

        $sql =" UPDATE `ujilevel` SET Nama ='$Nama',Kelamin ='$Kelamin',TanggalLahir ='$TanggalLahir',Alamat ='$Alamat',Kelas ='$Kelas'WHERE ID = '$ID'";
        $query = mysqli_query($connect, $sql);

        if($query){
            header('Location: datasiswa.php');
        }else{
            header('Location: perubahan.php?status=gagal');
        }

    }
?>  