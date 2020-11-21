<!DOCTYPE html>
<html>

<head>
    <title>Tugas Minggu 3</title>
    <style>
        .tab-content {
            display: none;
        }

        .tab-content:target {
            display: block;

        }
    </style>
</head>
<?php
include 'Koneksi.php';
?>

<body>
    <nav>
        <ul>
            <li><a href="#form">Form Mahasiswa</a></li>
            <li><a href="#cari">Cari Data Mahasiswa</a></li>
            <li><a href="#del">Delete Data</a></li>
        </ul>
    </nav>
    <!-- TAB FORM MAHASISWA -->
    <form method="POST" enctype=multipart/form-data class="tab-content" id="form">
        <h2>FORM</h2>
        <label> Nama &nbsp;&nbsp;: </label>
        <input type="text" name="nm"><br /><br />
        <label> NRP &nbsp;&nbsp;&nbsp;&nbsp;: </label>
        <input type="text" name="nrp"><br /><br />
        <label> Alamat : </label>
        <textarea name="alamat"></textarea><br /><br />
        <label> jurusan : </label>
        <select name="jurusan" id="jurusan">
            <?php
            $sql = mysqli_query($koneksi, "SELECT * FROM jurusan");
            while ($data = mysqli_fetch_array($sql)) {
            ?>
                <option value="<?= $data['id_jur'] ?>"><?= $data['Nama'] ?></option>
            <?php
            }
            ?>
        </select><br /><br />
        <button type="submit" name="kirim">Tambah</button>
    </form>

    <!-- TAB CARI DATA MAHASISWA -->
    <form action="Cari.php" method="POST" class="tab-content" id="cari">
        <h2>CARI MAHASISWA</h2>
        Masukkan Nama Mahasiswa yang anda cari :
        <input type="text" name="data">
        <button type="submit" name="src">Cari</button><br /><br />
        <button type="submit" name="reset">Hapus Hasil Pencarian</button><br /><br />
    </form>
    <!-- TAB DELETE DATA MAHASISWA -->
    <form action="Delete.php" method="POST" class="tab-content" id="del">
        <h2>DELETE MAHASISWA</h2>
        Masukkan NRP Mahasiswa :
        <input type="text" name="deletenrp">
        <button type="submit" name="hapus">Hapus</button><br /><br />
    </form>
</body>
<?php
// SUBMIT TAMBAH FORM MAHASISWA
if (isset($_POST['kirim'])) {
    $nama = $_POST['nm'];
    $alamat = $_POST['alamat'];
    $nrp = $_POST['nrp'];
    $id = $_POST['jurusan'];
    mysqli_query($koneksi, "INSERT INTO mahasiswa (Nama,Alamat,NRP,id_jur) VALUES('$nama','$alamat','$nrp','$id')");
}

?>

</html>