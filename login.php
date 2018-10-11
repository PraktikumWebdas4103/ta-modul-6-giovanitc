<form action = "halamanawal.php" method="POST">
	<center>
	<table>
	<tr>
	<td>username <input type="text" name="uname"></td><br>
</tr>
<tr>
	<td>password <input type="password" name="pass"></td></tr>
	<tr>
			<td>
			<input type="submit" name="input" value="input">
			</td>
		</tr>
</table>
</center></form>
<?php
$servername = "localhost";
	$nama = "root";
	$nim = "";
	$db = "pendaftaran";
	$con = new mysqli($servername, $nama, $nim, $db);

	if($con==false){
		die("koneksi gagal". $con->connect_error);
	}
if(isset($_POST['submit'])){
	$uname = $_POST ['uname'];
	$pass = $_POST ['pass'];

	$sql = "SELECT * FROM tb_mhs WHERE uname='".$uname."' and pass='".$pass."'";
	$result = mysql_query($con,$sql);

	if($result){
		$data=mysqli_fetch_row($result);
		session_start();
		$_SESSION['uname']=$mhs[0];
		$_SESSION['pass']=$mhs[1];
		
	}
	header('location: halamanawal.php');
}
?>