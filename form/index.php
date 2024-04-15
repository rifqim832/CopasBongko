<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form method="post">
        <table align="center">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tempatLhr"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tanggalLhr" ></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="gender" id="male" value="Laki-laki">
                    <label for="male">Laki-laki</label>
                    <input type="radio" name="gender" id="felmale" value="Perempuan">
                    <label for="felmale">Perempuan</label>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Sekolah Asal</td>
                <td>:</td>
                <td>
                    <input type="radio" name="school" value="SMA ">
                    <label for="SMA">SMA</label>
                    <input type="radio" name="school" value="MA ">
                    <label for="MA">MA</label>
                    <input type="radio" name="school" value="SMK ">
                    <label for="SMK">SMK</label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="text" name="namaSklh"></td>
            </tr>
            <tr>
                <td>Nilai UAN</td>
            </tr>
            <tr>
                <td>matematika</td>
                <td>:</td>
                <td><input type="text" name="mtk"></td>
            </tr>
            <tr>
                <td>Bahasa Inggris</td>
                <td>:</td>
                <td><input type="text" name="big"></td>
            </tr>
            <tr>
                <td>Bahasa Indonesia</td>
                <td>:</td>
                <td><input type="text" name="bin"></td>
            </tr>
            <tr>
                <td>Jurusan Yang Dipilih:</td>
            </tr>
            <tr>
                <td>Pilihan 1</td>
                <td>:</td>
                <td><select name="jurusan1">
                    <option value=""></option>
                    <option value="TEKNIK INFORMATIKA">Teknik Informatika</option>
                    <option value="TEKNIK INDUSTRI">Teknik Industri</option>
                </select></td>
            </tr>
            <tr>
                <td>Pilihan 2</td>
                <td>:</td>
                <td><select name="jurusan2">
                    <option value=""></option>
                    <option value="TEKNIK INFORMATIKA">Teknik Informatika</option>
                    <option value="TEKNIK INDUSTRI">Teknik Industri</option>
                </select></td>
            </tr>
            <tr>
                <td>Alasan Masuk UNIROW</td>
                <td>:</td>
                <td>
                    <textarea name="alasan" id="UNIROW" cols="30" rows="5"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="3"><input type="checkbox" value="">Dengan ini menyatakan bahwa yang <br> diberikan sesuai dengan sebenarnya.</td>
            </tr>
            <tr>
                <td colspan="3" align="right"><input type="submit" name="proses" id="kirim" value="Daftar">&nbsp;<input type="submit"value="Batal"><br><br><br></td>
            </tr>
        </table>
    </form>
</body>
<?php
if(isset($_POST['proses'])){
    $nama = $_POST['nama'];
    $tempatLhr = $_POST['tempatLhr'];
    $tanggalLhr = $_POST['tanggalLhr'];
    $gender = $_POST['gender'];
    $alamat = $_POST['alamat'];
    $school = $_POST['school'];
    $namaSklh = $_POST['namaSklh'];
    $mtk = $_POST['mtk'];
    $big = $_POST['big'];
    $bin = $_POST['bin'];
    $jurusan1 = $_POST['jurusan1'];
    $jurusan2 = $_POST['jurusan2'];
    $alasan = $_POST['alasan'];
};
?>
<table align="center">
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><?php echo $nama;?></td>
    </tr>
    <tr>
        <td>Tempat Lahir</td>
        <td>:</td>
        <td><?php echo $tempatLhr;?></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td>:</td>
        <td><?php echo $tanggalLhr;?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><?php echo $gender?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo $alamat?></td>
    </tr>
    <tr>
        <td>Sekolah Asal</td>
        <td>:</td>
        <td><?php echo $school, $namaSklh?></td>
    </tr>
    <tr>
        <td>Nilai UAN:</td>
    </tr>
    <tr>
        <td>Matematika</td>
        <td>:</td>
        <td><?php echo $mtk?></td>
    </tr>
    <tr>
        <td>Bahasa Inggris</td>
        <td>:</td>
        <td><?php echo $big?></td>
    </tr>
    <tr>
        <td>Bahasa Indonesia</td>
        <td>:</td>
        <td><?php echo $bin?></td>
    </tr>
    <tr>
        <td>Jurusan Yang Dipilih:</td>
    </tr>
    <tr>
        <td>Pilihan 1</td>
        <td>:</td>
        <td><?php echo $jurusan1?></td>
    </tr>
    <tr>
        <td>Pilihan 1</td>
        <td>:</td>
        <td><?php echo $jurusan2?></td>
    </tr>
    <tr>
        <td>Alasan Masuk UNIROW</td>
        <td>:</td>
        <td><?php echo $alasan?></td>
    </tr>
</table>
    <h3 align="center">TANGGAL DAFTAR : <?php echo date('l, d-M-Y')?></h3>
</html>