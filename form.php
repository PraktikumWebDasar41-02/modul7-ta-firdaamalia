
<form method="post">
	<h3>Form Input Mahasiswa</h3>
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

</form>


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

	$ningal= true;
	if(empty($nim)){
		echo "nim wajib di isi <br>";
		$ningal=false;
	}


	$ningal= true;
	if(empty($nama)){
		echo "nama wajib di isi <br>";
		$ningal=false;
	}

	$ningal= true;
	if(empty($tgl)){
		echo "tanggal wajib di isi <br>";
		$ningal=false;
	}

	$ningal= true;
	if(empty($jenis)){
		echo "jenis_kelamin wajib di isi <br>";
		$ningal=false;
	}

	$ningal= true;
	if(empty($jurusan)){
		echo "jurusan wajib di isi <br>";
		$ningal=false;
	}


	$ningal= true;
	if(empty($fak)){
		echo "fakultas wajib di isi <br>";
		$ningal=false;
	}


	$ningal= true;
	if(empty($asal)){
		echo "asal wajib di isi <br>";
		$ningal=false;
	}


	$ningal= true;
	if(empty($moto)){
		echo "moto wajib di isi <br>";
		$ningal=false;
	}




if (mysqli_query($conek, "INSERT INTO jurnal VALUES('$nama', '$nim', '$tgl', '$jenis', '$jurusan', '$fak', '$asal', '$moto') ")){

	 header("Location: file.php");
	}


}


 ?>