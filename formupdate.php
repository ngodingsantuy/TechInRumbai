<!DOCTYPE html>
<html>
<head>
	<title>Update Data Fitness</title>
</head>
<body>
<?php
include "koneksi.php";
$id = $_GET['id'];
$query = mysqli_query($db, "select * from fitness where id='$id'");
$m=mysqli_fetch_array($query);
$hari = $m['Hari'];
$cekhari = explode(", ", $hari);
?>
<form action="updatedb.php" method="post">
<input type="hidden" value="<?php print $m['id']; ?>" name="id" />
<h2>Pendafaran Member Fitness "Top Markotop"</h2><hr><br>
<table>
<tr>
<td>Nama</td>
<td>:</td>
<td><input type="text" name="nama" autofocus="" value="<?php print $m['name'] ?>"</td>
</tr>
<tr>
<td>Tahun</td>
<td>:</td>
<td>
	<select name="tahun">
	<option>Tahun</option>
	<?php for ($year=date('Y'); $year > date('Y')-100; $year--) { ?> 
<option value="<?php echo $year; ?>"<?php if($year==$m['tahun']){echo "selected";} ?>><?php echo $year; ?></option>
<?php } ?>
</select></td>
</tr>
<tr>
<td>Jenis Kelamin</td>
<td>:</td>
<td><input type="radio" name="jenis_kelamin" value="Laki-Laki" <?php if ($m['jenis_kelamin']=="Laki-Laki") {echo "checked"; } ?> />Laki-Laki<br>
<input type="radio" name="jenis_kelamin" value="Perempuan"<?php if ($m['jenis_kelamin']=="Perempuan") {echo "checked"; }?>/>Perempuan</td>
 </tr>
 <tr>
 	<td>Pekerjaan</td>
 	<td>:</td>
 	<td><select name="pekerjaan">
 	<option>Pekerjaan</option>
 	<option <?php if ($m['pekerjaan']=="Wiraswasta"){ echo "selected";} ?>>Wiraswasta</option>
 	<option <?php if ($m['pekerjaan']=="Pegawai Swasta"){ echo "selected";} ?>>Pegawai Swasta</option>
 	<option <?php if ($m['pekerjaan']=="Mahasiswi"){ echo "selected";} ?>>Mahasiswi</option>
 	<option <?php if ($m['pekerjaan']=="Lain-Lain"){ echo "selected";} ?>>Lain-Lain</option>
 	 {
 		
 	}</select></td>
 </tr>
 <td>Alamat</td>
 <td>:</td>
 <td><textarea name="alamat" rows="5"><?php print $m['alamat']?></textarea></td>
 </tr>
 <tr>
 	<td>Pilihan Hari Fitness</td>
 	<td>:</td>
 	<td>
 		<input type="checkbox" name="check_list[]" value="Senin"<?php
 		if (in_array("Senin", $cekhari)) {echo "checked"; }?>>Senin<br>
 			<input type="checkbox" name="check_list[]" value="Selasa"<?php
 		if (in_array("Selasa", $cekhari)) {echo "checked"; }?>>Selasa<br>
 			<input type="checkbox" name="check_list[]" value="Rabu"<?php
 		if (in_array("Rabu", $cekhari)) {echo "checked"; }?>>Rabu<br>
 			<input type="checkbox" name="check_list[]" value="Kamis"<?php
 		if (in_array("Kamis", $cekhari)) {echo "checked"; }?>>Kamis<br>
 			<input type="checkbox" name="check_list[]" value="Jumat"<?php
 		if (in_array("Jumat", $cekhari)) {echo "checked"; }?>>Jum'at<br>
 			<input type="checkbox" name="check_list[]" value="Sabtu"<?php
 		if (in_array("Sabtu", $cekhari)) {echo "checked"; }?>>Sabtu<br>
 			<input type="checkbox" name="check_list[]" value="Minggu"<?php
 		if (in_array("Minggu", $cekhari)) {echo "checked"; }?>>Minggu<br></td>

 </tr>
 <tr>
 	<td><input type="submit" name="daftar" value="Daftar"></td>
 	<td></td>
 	<td></td>

 </td>
 </tr>
 </table>
 </form>
 </body>
 </html>

	
</td>
 

</body>
</html>