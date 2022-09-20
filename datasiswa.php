<?php
    include 'konek.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="datasiswa.css">

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
        <a href="#" class="edit-siswa">Data Siswa</a>
    </div>

    <div class="kotak-barang">
        <a href="databarang.php" class="edit-barang">Data-Barang</a>
    </div>

    <div class="kotak-1">
    
        <div class="kotak-uji">
            <h1 class="uji-level">Uji Level Kelas 11 </h1>
        </div>

        <div class="create">
            <a href="siswa.html" class="text-create">CREATE</a>
        </div>

        <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tanggal-Lahir</th>
                    <th>Kelamin</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
                <?php
            $sql = "select * FROM ujilevel";
            $query = mysqli_query($connect,$sql);

            while($data = mysqli_fetch_array($query)){
                echo"
                <tr>
                    <td>$data[ID]</td>
                    <td>$data[Nama]</td>
                    <td>$data[Alamat]</td>
                    <td>$data[TanggalLahir]</td>
                    <td>$data[Kelamin]</td>
                    <td>$data[Kelas]</td>
                    <td>
    
                        <a href='formubah.php?ID=".$data['ID']."'>Edit</a>
                        <a href='hapus.php?ID=".$data['ID']."'>Hapus</a>
    
                    </td>
            </tr>
            ";
            }
        ?>

                
             </table> 
    
    </div>

</body>
</html>