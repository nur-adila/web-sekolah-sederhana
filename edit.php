<!DOCTYPE html>
<html>

<head>
	<title>update</title>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<body>
	<div class="container col-md-6 mt-4">
		<h1>Table Jadwal</h1>
		<div class="card">
			<div class="card-header bg-success text-white ">
				Edit Jadwal
			</div>
			<div class="card-body">
				<?php
				include('koneksi.php');

				$id = $_GET['id']; //mengambil id barang yang ingin diubah

				//menampilkan barang berdasarkan id
				$data = mysqli_query($koneksi, "select * from jadwal where id = '$id'");
				$row = mysqli_fetch_assoc($data);

				?>
				<form action="" method="post" role="form">
					<div class="form-group">
						<label>Jadwal Agenda</label>
						<!--  menampilkan nama barang -->
						<input type="text" name="jadwal_agenda" required="" class="form-control" value="<?= $row['jadwal_agenda']; ?>">

						<!-- ini digunakan untuk menampung id yang ingin diubah -->
						<input type="hidden" name="id" required="" value="<?= $row['id']; ?>">
					</div>
					<div class="form-group">
						<label>Waktu</label>
						<input type="text" name="waktu" class="form-control" value="<?= $row['waktu']; ?>">
					</div>

					<div class="form-group">
						<label>Deskripsi</label>
						<textarea class="form-control" name="deskripsi"><?= $row['deskripsi']; ?></textarea>
					</div>
					<button type="submit" class="btn btn-primary" name="submit" value="simpan">update data</button>
				</form>

				<?php

				//jika klik tombol submit maka akan melakukan perubahan
				if (isset($_POST['submit'])) {
					$id = $_POST['id'];
					$jadwal_agenda = $_POST['jadwal_agenda'];
					$waktu = $_POST['waktu'];
					$deskripsi = $_POST['deskripsi'];

					//query mengubah barang
					mysqli_query($koneksi, "update jadwal set jadwal_agenda='$jadwal_agenda', waktu='$waktu', deskripsi='$deskripsi' where id ='$id'") or die(mysqli_error($koneksi));

					//redirect ke halaman index.php
					echo "<script>alert('data berhasil diupdate.');window.location='jadwal.php';</script>";
				}



				?>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<footer>  
    <p align="center">Teknik Komputer dan Jaringan (2023) © Nur Adila Puspita Arsyad</p>  
    </footer>  
</body>
</html>