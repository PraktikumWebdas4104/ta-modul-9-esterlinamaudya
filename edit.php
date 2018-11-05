<?php 
include 'database.php';
$db = new database(); //isi dengan deklarasi method
?>

<h1>CRUD OOP PHP</h1>
<h3>Edit Data User</h3>

<form action="proses.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $d){ //panggil method edit dari class database
	$array = explode(", ", $d['Genre']);
	$arrayY = explode(", ", $d['Wisata']);
?>
<table>
	<tr>
		<td>Nama</td>
		<td>
			<input type="hidden" name="Id" value="<?php echo $d['id'] ?>">
			<input type="text" name="Nama" value="<?php echo $d['nama'] ?>">
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="Alamat" value="<?php echo $d['Alamat'] ?>"></td>
	</tr>
	<tr>
		<td>Usia</td>
		<td><input type="text" name="Usia" value="<?php echo $d['Usia'] ?>"></td>
	</tr>
	<tr>
		<td>Genre Film</td>
		
		<td> <input type="checkbox" name="Genre[]" value="horor" <?php if(in_array('horror',$array)){echo "checked=checked";} ?> > horor <br>
 		<input type="checkbox" name="Genre[]" value="anime" <?php if(in_array('anime',$array)){echo "checked=checked";} ?> > anime <br>
 		<input type="checkbox" name="Genre[]" value="action" <?php if(in_array('action',$array)){echo "checked=checked";} ?> > action<br> 
 		<input type="checkbox" name="Genre[]" value="drama" <?php if(in_array('drama',$array)){echo "checked=checked";} ?> > drama<br> 
 		<input type="checkbox" name="Genre[]" value="thriller" <?php if(in_array('thriller',$array)){echo "checked=checked";} ?> > thriller<br> 
 		</td>
	</tr>
	<tr>
		<td>Tempat Wisata</td>
		<td> <input type="checkbox" name="Wisata[]" value="Bali" <?php if(in_array('Bali',$arrayy)){echo "checked=checked";} ?> > Bali<br>
 		<input type="checkbox" name="Wisata[]" value="Raja Ampat" <?php if(in_array('Raja Ampat',$arrayy)){echo "checked=checked";} ?> > Raja Ampat <br>
 		<input type="checkbox" name="Wisata[]" value="Pulau Derawan" <?php if(in_array('Pulau Derawan',$arrayy)){echo "checked=checked";} ?> > Pulau Derawan<br> 
 		<input type="checkbox" name="Wisata[]" value="Bangka Belitung" <?php if(in_array('Bangka Belitung',$arrayy)){echo "checked=checked";} ?> > Bangka Belitung<br> 
 		<input type="checkbox" name="Wisata[]" value="Labuan Bajo" <?php if(in_array('Labuan Bajo',$arrayy)){echo "checked=checked";} ?> > Labuan Bajo<br> 
 		</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
<?php } ?>
</form>
