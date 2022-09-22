<?php

    include 'konek.php';

    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        
        $sql = "SELECT * FROM ujilevel WHERE ID='$cari'";
        $query = mysqli_query($connect, $sql);				
    }else{
        $query = mysqli_query("SELECT * FROM ujilevel");;
    }
       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="search.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

</head>

<body>


    <h1 class="judul-iky">Iky-Adyt</h1>

    <div class="kotak-siswa">
        <a href="datasiswa.php" class="edit-siswa">Data Siswa</a>
    </div>

    <div class="kotak-barang">
        <a href="#" class="edit-barang">Data-Barang</a>
    </div>

    <div class="kotak-1">
    
        <div class="kotak-uji">
            <h1 class="uji-level">Uji Level Kelas 11 </h1>
        </div>


        <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Kelamin</th>
                    <th>Tanggal-Lahir</th>
                    <th>Alamat</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
                <?php
            
            

            while($data = mysqli_fetch_array($query)){
                echo"
                <tr>
                    <td>$data[ID]</td>
                    <td>$data[Nama]</td>
                    <td>$data[Kelamin]</td>
                    <td>$data[TanggalLahir]</td>
                    <td>$data[Alamat]</td>
                    <td>$data[Kelas]</td>
                    <td>
    
                    <div class='kotakaja'><a href='formubah.php?ID=".$data['ID']."' class='button'>Edit</a></div>

                    <div class='kotakajaa'><a href='hapus.php?ID=".$data['ID']."' class='button'>Hapus</a></div>
                       
                     
    
                    </td>
            </tr>
            ";
            }
        ?>

                
             </table> 
    
    </div>

</body>
</html>


