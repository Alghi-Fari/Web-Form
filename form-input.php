<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="form.css">
    <title>Form</title>
</head>
<body>
<div class="form">
    <form action="simpan.php" method="post">
    <div class="title">Form Mahasiswa</div>
        <!-- Input 1 -->
        <div class="input-container ic1">
            <input id="NIM" class="input" type="text" placeholder=" " name="nim" required/>
                <div class="cut"></div>
            <label for="NIM" class="placeholder">NIM</label>
        </div>

        <!-- Input 2 -->
        <div class="input-container ic2">
            <input id="NAMA" class="input" type="text" placeholder=" " name="nama" required/>
                <div class="cut"></div>
            <label for="NAMA" class="placeholder">Nama Lengkap</label>
        </div>

        <!-- Input 3 -->
        <div class="input-container ic2">
            <label for="jenkel" class="placeholder2">Jenis Kelamin</label>
            <input type="radio" id="jenkel" name="jenis_kelamin" value="L" class="gender">
            <label for="jenkel" class="gender">Laki-laki</label>
            <input type="radio" id="jenkel" name="jenis_kelamin" value="P" class="gender">
            <label for="jenkel" class="gender">Perempuan</label>
        </div>

        <!-- Input 4 -->
        <div class="input-container ic3">
        <label for="pilih" class="placeholder2 select">Jurusan</label>
        <br>    
        <select id="pilih" class="custom-select" name="jurusan">
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Teknik Mesin">Teknik Mesin</option>
                <option value="Administrasi Bisnis">Administrasi Bisnis</option>
            </select>
        </div>

        <!-- Input 5 -->
        <div class="input-container ic4">
            <input id="alamat" class="input" type="text" placeholder=" " name="alamat" required />
                <div class="cut"></div>
            <label for="alamat" class="placeholder">Alamat</>
        </div>
        <button type="submit" class="submit">Submit</button>
    </form>
        <button class="index"><a href="index.php">Liat Index</a></button>
    </div>
</body>
</html>