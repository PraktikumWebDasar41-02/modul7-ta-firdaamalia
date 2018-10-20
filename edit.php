<?php 
$conek=mysqli_connect('localhost','root','','jurnal_firda');

if(isset($_GET['nim'])){
	mysqli_query($conek, "SELECT FROM jurnal WHERE nim= '".$_GET['nim']."' ");
	header("Location: edit.php");
}
?>



<!DOCTYPE html>
<html>
    <head>
        <title>jurnal firda</title>
    </head>
    <body>
        <form method="post">
            
	<h3>Form Edit Mahasiswa</h3>
Nama:<br><input type="text" name="nama"><br>
NIM:<br><input type="text" name="nim"><br>
Tanggal Lahir<br><input type="date" name="tgl"><br><br>

<select name="jenis">
<option>--Jenis Kelamin-- </option> 
	<option value="Laki-Laki">Laki-Laki</option>
	<option value="perempuan">Perempuan</option>
</select><br><br>

<select name="jurusan">
	<option>--Program Studi--</option>  
	<option value="sistem informasi">sistem informasi</option>
	<option value="informatika">informatika</option>
	<option value="teknik informatika">teknik informatika</option>
	<option value="teknik komputer">teknik komputer</option>
</select><br><br>

Fakultas: 
<input type="radio" name="fakultas" value="FRI">FRI
<input type="radio" name="fakultas" value="FIT">FIT
<input type="radio" name="fakultas" value="FIK">FIK
<input type="radio" name="fakultas" value="FTE">FTE<br>

Asal:<br><input type="text" name="asal"><br>
Moto Hidup:<br><textarea name="moto"></textarea><br><br>
<input type="submit" name="submit" value="send">

<a href="file.php">Kembali</a></td></tr>
            
        </form>
    </body>
</html>

<?php 
if (isset($_POST['submit'])){
	$conek=mysqli_connect('localhost','root','','jurnal_firda');

	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$tgl = $_POST['tgl'];
	$jenis = $_POST['jenis'];
	$jurusan = $_POST['jurusan'];
	$fak = $_POST['fakultas'];
	$asal = $_POST['asal'];
	$moto = $_POST['moto'];

if (mysqli_query($conek, "INSERT INTO jurnal VALUES('$nama', '$nim', '$tgl', '$jenis', '$jurusan', '$fak', '$asal', '$moto') ")){

	 header("Location: file.php");
	}


}

?>








			


