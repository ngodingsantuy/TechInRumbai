<!-- <!DOCTYPE html>
<html>
<head>
	<title>Update Data Fitness</title>
</head>
<body>
<?php
	/* include"koneksi.php";
	$id=$_GET['id'];
	$sql="select * from fitness where id='$id'";
	$query=mysqli_query($db,$sql);
	$n=mysqli_fetch_array($query);
	$hari=$n['haripilihan'];
	$cekhari=explode(", ", $hari);*/
?>

<form action></form>

</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
	<title>FORM PENDAFTARAN FITNESS</title>

</head>
<body>
<?php
		include	"koneksi.php";
		$id=$_GET['id'];
		$sql="select * from fitness where id=$id";
		$query=mysqli_query($db,$sql);
		$a=mysqli_fetch_array($query);
		$hari=$a['haripilihan'];
		$cekhari=explode(",", $hari);
?>
<div class="tengah">
	<h1>Pendaftaran Member Fitness "Segar Bugar"</h1>
	<hr></hr>

	<table border="0 ">
		<form action="updatedb.php" method="post">
		<input type="hidden" value="<?php print $a['id'];?>" name="id" 	/>

		<tr>
			<td>Name</td>
			<td>:</td>
			<td>
				<input type='text' name="nama" autofocus="" value="<?php print $a['nama']?>"></input>
			</td>
		</tr>

		<tr>
		<td>Tahun Lahir</td>
		<td>:</td>
		<td>
		<select name="tahun">
				<option>Tahun</option>
				<?php
						for ($year	=date('Y'); $year>date(	'Y')-100 ; $year--) {?> 
							
				<option value="<?php echo $year;?>" <?php if ($year==$a['tahun']) {echo"selected";} ?>><?php echo "$year";?>
				</option>
				<?php } ?>
			
				
		</select>
		</td>
		</tr>

		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
				<input type="radio" name="kelamin" value="Laki-laki" <?php 
						if ($a['jeniskelamin']=="Laki-laki") {
							echo "checked";
						}
				?> 
				> Laki-laki </input><br> lanjuta
				<input type="radio" name="kelamin" value="Perempuan"<?php 
						if ($a['jeniskelamin']=="Perempuan") {
					echo "checked";
						}
				?> > Perempuan</input>
			</td>
		</tr>

		<tr>
			<td>Pekerjaan</td>
			<td>:</td>
			<td>
			<select name="job">
				<option 
					<?php
						if ($a['pekerjaan']=="Dokter"){
							echo "selected";
						}
					?>
				value="Dokter"
				>Dokter</option>
				<option 
					<?php
						if ($a['pekerjaan']=="Pelukis"){
							echo "selected";
						}
					?>
				value="Pelukis">Pelukis</option>
				<option 
						<?php
						if ($a['pekerjaan']=="Satpam"){
							echo "selected";
						}
					?>
				value="Satpam">Satpam</option>
				<option
					<?php
						if ($a['pekerjaan']=="Programmer"){
							echo "selected";
						}
					?> 
				value="Programmer">Programmer</option>
				<option 
					<?php
						if ($a['pekerjaan']=="Pemadam Kebakaran"){
							echo "selected";
						}
					?> 
				name="Pemadam Kebakaran">Pemadam Kebakaran</option>
			</select>
			</td>
		</tr>

		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>
				<textarea name="alamat"><?php print $a['alamat']?></textarea>
			</td>
		</tr>

		<tr>
			<td>Pilih hari fitnes</td>
			<td>:</td>
			<td>
				<input type="checkbox" name="check_list[]" value="Senin" <?php
						if(in_array("Senin", $cekhari)){
							echo "checked";
						}
						?>> Senin</input><br>
				
				<input type="checkbox" name="check_list[]" value="Selasa"<?php
						if(in_array("Selasa", $cekhari)){
							echo "checked";
						}
						?>> Selasa</input><br>
				<input type="checkbox" name="check_list[]" value="Rabu"		<?php
						if(in_array("Rabu", $cekhari)){
							echo "checked";
						}
						?>
						> Rabu</input><br>
				<input type="checkbox" name="check_list[]" value="Kamis" <?php
						if(in_array("Kamis", $cekhari)){
							echo "checked";
						}
						?>
						> Kamis</input><br>
				<input type="checkbox" name="check_list[]" value="Jumat" <?php
						if(in_array("Jumat", $cekhari)){
							echo "checked";
						}
						?>
						> Jumat</input><br>
				<input type="checkbox" name="check_list[]" value="Sabtu"<?php
						if(in_array("Sabtu", $cekhari)){
							echo "checked";
						}
						?>
						> Sabtu</input><br>
				<input type="checkbox" name="check_list[]" value="Minggu" <?php
						if(in_array("Minggu", $cekhari)){
							echo "checked";
						}
						?>
						> Minggu</input>

			</td>
		</tr>
		<tr>
			<td colspan="3">
			<center><input type='submit' value='Submit' name="proses"></input></center>
			</td>
		</tr>
		</form>

	</table>
</div>
</body>
</html>