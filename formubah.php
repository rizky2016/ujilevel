<?php

    include 'konek.php';

    $ID = $_GET['ID'] ;
    $sql = "SELECT * FROM ujilevel WHERE ID='$ID'";
    $query = mysqli_query($connect,$sql);
    $data = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) < 1){
        die("Data Tidak Ditemukan");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
    <link rel="stylesheet" href="formubah1.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
   
</head>
<body>

    <h1 class="judul-iky">Iky-adyt</h1>

     <div class="kotak-siswa">
            <a href="datasiswa.php" class="edit-siswa">Data Siswa</a>
     </div>

     <div class="kotak-barang">
        <a href="#" class="edit-barang">Data Barang</a>
     </div>



     <div class="kotak-1">

            <div class="kotak-uji">
                <h1 class="uji-level">Uji Level Kelas 11</h1>
            </div>

            <form action="perubahan.php" method="post">
                <table>

                    <tr>
                        <td><p><label>ID</p></td>
                        <td>:</td>
                        <td> <input type="number" name="ID" id="long" value="<?php echo $data['ID'] ?>"></label></td>
                    </tr>
                    <tr>
                        <td><p><label>Nama</p></td>
                        <td>:</td>
                        <td> <input type="text" name="Nama" id="long" value="<?php echo $data['Nama'] ?>"></label></td>
                    </tr>
                    <tr>
                        <td><p><label>Alamat</p></td>
                        <td>:</td>
                        <td> <input type="text" name="Alamat" id="long" value="<?php echo $data['Alamat'] ?>"></label></td>
                    </tr>
                    <tr>
                        <td><p><label>Tanggal-Lahir</p></td>
                        <td>:</td>
                        <td> <input type="date" name="TanggalLahir" id="long" value="<?php echo $data['TanggalLahir'] ?>"></label></td>
                    </tr>
                    <tr>
                        <td><p><label>Kelamin</p></td>
                        <td>:</td>
                        <td> <input type="text" name="Kelamin" id="long" value="<?php echo $data['Kelamin'] ?>"></label></td>
                    </tr>
                    <tr>
                        <td><p><label>Kelas</p></td>
                        <td>:</td>
                        <td> <input type="text" name="Kelas" id="long" value="<?php echo $data['Kelas'] ?>"></label></td>
                    </tr>
    
                </table>
                        
                <input type="submit" name="Lanjutkan" value="Lanjutkan" id="lanjutkan">

            </form>
     
        </div>
    
</body>
</html>