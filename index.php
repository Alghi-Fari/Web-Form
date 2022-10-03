<!DOCTYPE html>
<html>
<head>
    <title>Digi Talent</title>
    <link rel="stylesheet" href="form2.css">
</head>
<body>
<div class="form">
    <div class="title">List Mahasiswa</div>
    <table class="table">
    <tr><th>No</th><th>Nim</th><th>Nama</th><th>Gender</th><th>Jurusan</th><th>Action</th></tr>
    <?php
    include 'koneksi.php';
    $mahasiswa = mysqli_query($koneksi, "SELECT * from mahasiswa");
    $no = 1;
    foreach($mahasiswa as $row){
        $jenis_kelamin = $row['jenis_kelamin'] == 'P' ? 'Perempuan' : 'Laki-laki';
        echo "<tr>
                <td>$no</td>
                <td>".$row['nim']."</td>
                <td>".$row['nama']."</td>
                <td>".$jenis_kelamin."</td>
                <td>".$row['jurusan']."</td>
                <td><a href= 'form-edit.php?id_mhs=$row[id_mhs]' >Edit</a>
                    <a href= 'delete.php?id_mhs=$row[id_mhs]' >Delete</a>
                </td>
              </tr>";
        $no++;
    }
    ?>
    </table>
    <br>
    <button class="kembali"><a href="form-input.php">Kembali</a></button>
</div>
</body>
</html>