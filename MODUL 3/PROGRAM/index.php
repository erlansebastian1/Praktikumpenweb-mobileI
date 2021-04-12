<?php

   include 'koneksi.php';
   

?>

<html xmins="<html lang="en"> 
<head>
    <title>belajar crud</title>

</head>
<body>
    <h2>Modul3</h2>
	
    <form method="post">
	    <tables>
		    
			<tr>
			    <td>NIP</td>
				<td>:</td>
				<td><input type="text" name="NIP"/<>
				
			</tr>
			<tr>
			    <td>nama</td>
				<td>:</td>
				<td><input type="text" name="nama"/<>
			</tr>
			
			<tr>
			    <td>jenis_kelamin</td>
				<td>:</td>
				<td><input type="text" name="jenis_kelamin"
			</tr>
			
			<tr>
			    <td>telp</td>
				<td>:</td>
				<td><input type="text" name="telp"/<>
			</tr>
			
			<tr>
			    <td>alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat"/<>
			</tr>
		</table>
	
	    <input type="submit" name="submit" value="simpan data" />
		
	</form>
</body>
</html>