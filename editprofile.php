<fieldset>
	<center><h1> Edit Profil </h1>
		<?php
	include 'pendaftaran.php';
	include 'login.php';

	session_start();
	$uname = $_SESSION['uname'];
	$pass = $_SESSION['pass'];

	$sql = "SELECT * FROM mahasiswa WHERE username = '$uname' AND pass = '$pass'";
	$query = mysqli_query($conn, $sql);

	if (mysqli_num_rows($query) > 0) {
		while ($row = mysqli_fetch_assoc($query)) {
?>
	<form action=" " method="POST">
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
			<input type="submit" name="edit" value="edit"> <input type="reset" name="batal">
			</td>
		</tr>
		</table>
	</center>
	</form>
</fieldset>
<?php
				}
			}

			if (isset($_POST['update'])) {
			$nama = $_POST ['nama'];
			$nim = $_POST ['nim'];
			$kelas = $_POST ['kelas'];
			$jenis = $_POST ['jenis'];
			$hobi = $_POST ['hobi'];
			$fakultas = $_POST ['fakultas'];
			$alamat = $_POST ['alamat'];

				$sql = "UPDATE datamahasiswa
					SET nama = '$nama',
					nim = '$nim',
					kelas = '$kelas',
					jenis = '$jenis',
					hobi = '$hobi',
					fakultas = '$fakultas',
					alamat = '$alamat'
					WHERE nim = '$nim'
				";
				$query = mysqli_query($conn, $sql);

				$update = '';
				if ($query) {
					header("Location: halamanawal.php?update='Data Berhasil Diupdate'");
				}else{
					echo 'Data Gagal Diupdate';
				}
			}
		?>
