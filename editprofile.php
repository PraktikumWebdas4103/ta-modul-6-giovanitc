<fieldset>
	<center><h1> Edit Profil </h1>
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