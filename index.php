<?php  
	include('koneksi.php');
	$sql = "SELECT * FROM mahasiswa";
	$res = $connect->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List Mahasiswa</title>
	<style>
		.link {
		    text-decoration: none;
		    font-weight: bold;
		    color: cornflowerblue;
		    border: 3px solid cornflowerblue;
		    padding: 5px;
		    border-radius: 6px;		
		    column-span: mr=3px;	
		}
		.link-delete {
		    text-decoration: none;
		    font-weight: bold;
		    color: indianred;
		    border: 3px solid indianred;
		    padding: 6px;
		    border-radius: 5px;			
		}
		th {
			background: #eee;
			border: 1px solid #eee 
		}
	</style>
</head>
<body>

	<center>
	 	<br>
	 	<h1>Data Universitas Hindu Negeri IGB Sugriwa</h1>
		<a href="tambah_mahasiswa.php" class="link">Tambah Data</a> 
		<!-- <a href="index_matakuliah.php" class="link">View Matakuliah</a>  -->

		<br>
		<br>
		<br>
		<div container="">
		<table cellpadding="20">
			<tr>
				<th>Nim</th>
				<th>Nama</th>
				<th>Fakultas</th>
				<th>Prodi</th>
				<th>Agama</th>
				<th>Nomor HP</th>
				<th>Alamat</th>
				<th>Opsi</th>
			</tr>
			<?php while ($row = $res->fetch_assoc()) { ?>
				<tr>
					<td><?= $row["nim"]; ?></td>
					<td><?= $row["nama"]; ?></td>
					<td><?= $row["fakultas"]; ?></td>
					<td><?= $row["prodi"]; ?></td>
					<td><?= $row["agama"]; ?></td>
					<td><?= $row["nomorhp"]; ?></td>
					<td><?= $row["alamat"]; ?></td>
					<td>
						<a href="edit_mahasiswa.php?nim=<?= $row["nim"]; ?>" class='link'>Edit</a>
						<a href="delete_mahasiswa.php?nim=<?= $row["nim"]; ?>" onclick="return confirm('Yakin Ingin Hapus ?')" class='link-delete'>Hapus</a>
					</td>
				</tr>	
			<?php } ?>
		</table>
		</div>		
	</center>

</body>
</html>
