<form action=" " method="POST">
	<center>
		<table>
		<tr>
		<td>username 
			<td><input type="text" name="uname"></td><br>
		</tr>
		<tr>
		<td>password 
			<td><input type="password" name="pass"></td></tr>
		<tr>
			<td> Nama 
				<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td> NIM 
				 <td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td> Kelas 
			<td><input type="radio" name="kelas" value="D3MI41-01">D3MI41-01
			<td><input type="radio" name="kelas" value="D3MI41-02">D3MI41-02
			<td><input type="radio" name="kelas" value="D3MI41-03">D3MI41-03
			<td><input type="radio" name="kelas" value="D3MI41-04">D3MI41-04
		</td>
		<tr>
			<td> Jenis Kelamin
			<td><input type="radio" name="jenis" value="Laki-Laki">Laki-Laki<br>
			<td><input type="radio" name="jenis" value="Perempuan">Perempuan<br>
		</td>
		</tr>
		<tr>
			<td> Hobi
			<td><input type="checkbox" name="hobi" value="berenang">berenang<br>
			<td><input type="checkbox" name="hobi" value="membaca">membaca<br>
			<td><input type="checkbox" name="hobi" value="basket">basket<br>
			<td><input type="checkbox" name="hobi" value="menulis">menulis<br>
		</td>
		</tr>
		<tr>
			<td> Fakultas 
				<td><select name="fakultas">
				<option value="FIT"> FIT </option>
				<option value="FIk"> FIK </option>
				<option value="FKB"> FKB </option>
				<option value="FEB"> FEB </option>
				<option value="FRI"> FRI </option>
				<option value="FTE"> FTE </option>
			</select>
		</td>
		</tr>
		<tr>
			<td> Alamat 
				<td><input type="textarea" name="alamat"></td>
		</tr>
		<tr>
			<td>
			<input type="submit" name="input" value="input">
			</td>
		</tr>
		</table>
	</center>
</form>
<?php

	$servername = "localhost";
	$nama = "root";
	$nim = "";
	$db = "pendaftaran";
	$con = new mysqli($servername, $nama, $nim, $db);

	if($con==false){
		die("koneksi gagal". $con->connect_error);
	}

	if(isset($_POST['input'])){
	$uname = $_POST ['uname'];
	$pass = $_POST ['pass'];
	$nama = $_POST ['nama'];
	$nim = $_POST ['nim'];
	$kelas = $_POST ['kelas'];
	$jenis = $_POST ['jenis'];
	$hobi = $_POST ['hobi'];
	$fakultas = $_POST ['fakultas'];
	$alamat = $_POST ['alamat'];

	$sql = "INSERT INTO mhs (uname,pass,nama,nim,kelas,jenis,hobi,fakultas,alamat) values ('$uname','$pass','$nama','$nim','$kelas','$jenis','$hobi','$fakultas','$alamat')";
	if (mysqli_query($con, $sql)){
		echo "<center>Database sudah masuk</center>";
	}else{
		echo "ERROR";
	}
	header('location: login.php');
}
?>