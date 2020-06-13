<html>
<style>
table {
	border-collapse: collapse;
}

table, td, th {
	border: 1px solid black;
	padding:15px;
}
	
</style>
<body>
<table style="width:50%">

	<tr>
	<td>NIM</td>
	<td><?php echo $_POST["NIM"]; ?></td>
	</tr>
	<tr>
	<td>Nama</td>
	<td><?php echo $_POST["NAMA"]; ?></td>
	</tr>
	<tr>
	<td>Jenis Kelamin</td>
	<td><?php echo $_POST["KELAMIN"]; ?></td>
	</tr>
	<tr>
	<td>Program Studi</td>
	<td><?php echo $_POST["PRODI"]; ?></td>
	</tr>
</table>
</body>
</html>
	
	