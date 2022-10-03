<?php
include 'koneksi.php';
$id         = $_GET['id_mhs'];
$mahasiswa  = mysqli_query($koneksi, "SELECT * from mahasiswa where id_mhs='$id'");
$row        = mysqli_fetch_array($mahasiswa);

//membuat data makanan menjadi dinamis dalam bentuk array
$jurusan    = array('Teknik Informatika','Teknik Mesin','Teknik Kimia');

// membuat function set active radio button
function active_radio_button($value,$input){
    // apabila value dari radio sama dengan yang di input
    $result = $value == $input ? 'checked' : '';
    return $result;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Digi talent</title>
    <link rel="stylesheet" href="form3.css">
</head>
<body>
<div class="form">
    <form action="edit.php" method="post">
    <div class="title">Edit Data</div>
        <input type="hidden" name="id_mhs" value="<?php echo $row['id_mhs']; ?>">

            <!-- Input 1 -->
            <div class="input-cointainer ic1">
                <input type="text" name="nim" value="<?php echo $row['nim'] ?>" id="NIM" placeholder=" " class="input" required>
                    <div class="cut"></div>
                <label for="NIM" class="placeholder satu">NIM</label>
            </div>

            <!-- Input 2 -->
            <div class="input-cointainer ic2">
                <input type="text" name="nama" id="NAMA" class="input"  placeholder=" " value="<?php echo $row['nama'] ?>">
                    <div class="cut"></div>
                <label for="NAMA" class="placeholder dua">Nama Lengkap</label>
            </div>

            <!-- Input 3 -->
            <div class="input-container ic2">
                    <label for="jenkel" class="placeholder2">Jenis Kelamin</label>
                    <input type="radio" name="jenis_kelamin" value="L" <?php echo active_radio_button("L", $row['jenis_kelamin']) ?> id="jenkel" class="gender">
                    <label for="jenkel" class="gender">Laki-laki</label>
                    <input type="radio" name="jenis_kelamin" value="P" <?php echo active_radio_button("P", $row['jenis_kelamin']) ?> id="jenkel" class="gender">
                    <label for="jenkel" class="gender">Perempuan</label>
            </div>
            
            <!-- Input 4 -->
            <div class="input-container ic3">
                <label for="pilih" class="placeholder2 select">Jurusan</label>
                    <select name="jurusan" id="pilih" class="custom-select">
                        <?php 
                        foreach ($jurusan as $i){
                            echo "<option value='$i' ";
                            echo $row['jurusan']==$i?'selected="selected"':'';
                            echo ">$i</option>";
                        }
                        ?>
                    </select>
            </div>

            <!-- Input 5 -->
            <div class="input-container ic4">
                <input type="text"name="alamat" id="alamat" class="input" placeholder=" " required value="<?php echo $row['alamat'];?>">
                    <div class="cut"></div>
                <label for="alamat" class="placeholder">Alamat</label>
            </div>
            <button type="submit" value="simpan" class="submit">Simpan Perubahan</button>
    </form>
            <button class="index"><a href="index.php">Kembali</a></button> 
</div>
</body>
</html>