<html>
<head>

</head>
<body>
	<div>
		<h3>Detail Data</h3>
		<table border="1" cellpadding="5px">
			<thead>
				<tr>
					<th>NRP</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>ID Jurusan</th>
				</tr>
			</thead>
			<tbody>
<?php
include 'koneksi.php';
if(isset($_POST["src"])){
	$search = $_POST['data'];
	$sql = "SELECT * FROM mahasiswa WHERE NRP like '%$search%'";
	$query = mysqli_query($koneksi, $sql) or die (mysqli_error());
}
				
$jumlah = mysqli_num_rows($query);
echo "<br>";
echo "Ditemukan: $jumlah";
echo "<br>";
while ($baris = mysqli_fetch_array($query)) {
echo "<tr>
	<td>$baris[0]</td>
	<td>$baris[1]</td>
	<td>$baris[2]</td>
	<td>$baris[3]</td>
	</tr>";

}
?>
		</tbody>
	</table>
</div>
</body>
</html>