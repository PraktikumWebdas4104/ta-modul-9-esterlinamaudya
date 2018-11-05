<h1>CRUD OOP PHP</h1>
<h3>Tambah Data User</h3>

<form action="proses.php?aksi=tambah" method="post">
	
<table>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="Nama"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="Alamat"></td>
	</tr>
	<tr>
		<td>Usia</td>
		<td><input type="text" name="Usia"></td>
	</tr>
	<tr>
		<td>Genre Film</td>
		<td> <input type="checkbox" name="Genre[]" value="horor"> horor <br>
 		<input type="checkbox" name="Genre[]" value="anime"> anime <br>
 		<input type="checkbox" name="Genre[]" value="action"> action<br> 
 		<input type="checkbox" name="Genre[]" value="drama"> drama<br> 
 		<input type="checkbox" name="Genre[]" value="thriller"> thriller<br> 
 		</td>
	</tr>
	<tr>
		<td>Tempat Wisata</td>
		<td> <input type="checkbox" name="Wisata[]" value="Bali"> Bali<br>
 		<input type="checkbox" name="Wisata[]" value="Raja Ampat"> Raja Ampat <br>
 		<input type="checkbox" name="Wisata[]" value="Pulau Derawan"> Pulau Derawan<br> 
 		<input type="checkbox" name="Wisata[]" value="Bangka Belitung"> Bangka Belitung<br> 
 		<input type="checkbox" name="Wisata[]" value="Labuan Bajo"> Labuan Bajo<br> 
 		</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
</form>
