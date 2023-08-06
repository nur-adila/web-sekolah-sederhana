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
				Edit Informasi
			</div>
			<div class="card-body">
				<?php
				include('koneksi.php');

				$id = $_GET['id']; //mengambil id tagihan yang ingin diubah

				//menampilkan tagihan berdasarkan id
				$data = mysqli_query($koneksi, "select * from kegiatan where id = '$id'");
				$row = mysqli_fetch_assoc($data);

				?>
				<form action="" method="post" role="form" enctype="multipart/form-data">

					<!-- ini digunakan untuk menampung id yang ingin diubah -->
					<input type="hidden" name="id" required="" value="<?= $row['id']; ?>">

					<div class = "mt-2 col"> 
						<label>Informasi Kegiatan</label>
						<input type="text" name="isi" required="" class="form-control" value="<?= $row['isi']; ?>">
					</div>


					<div class = "col  col-4"> 
						<label>Tanggal</label>
						<input type="date" name="tanggal" required="" class="form-control" value="<?= $row['tanggal']; ?>">
					</div>
					
					<div class = "mt-2 col"> 
						<label>Foto Sebelumnya</label>
						<br>
						<img src="gambar/<?= $row['gambar']; ?>" class="col-3">
						 <input type="hidden" name="foto_sebelumnya" value="<?= $row['gambar']; ?>" />
					</div>


					<div class = "mt-2 col"> 
						<label>Foto Baru (abaikan jika tidak ingin ganti foto)</label>
						 <input type="file" name="gambar" class="form-control"/>
					</div>


					<button type="submit" class="btn btn-primary mt-3" name="submit" value="simpan">update data</button>
				</form>

				<?php

				//jika klik tombol submit maka akan melakukan perubahan
				if (isset($_POST['submit'])) {
					$id = $_POST['id'];
					$isi = $_POST['isi'];
					$tanggal = $_POST['tanggal'];

					$nama_foto1   = $_FILES['gambar']['name'];
			        $file_tmp1    = $_FILES['gambar']['tmp_name'];   
			        $acak1      = rand(1,99999);

			        	//cek jika foto baru tidak ada
			          if($nama_foto1 != "") {
			            $nama_unik1     = $acak1.$nama_foto1;
			            move_uploaded_file($file_tmp1,'gambar/'.$nama_unik1);
			          } else {
			          	//maka tetap pakai foto lama
			            $nama_unik1 = $_POST['foto_sebelumnya'];
			          }
			      
			        $gambar = $nama_unik1;

					//query mengubah tagihan
					mysqli_query($koneksi, "update kegiatan set isi='$isi', tanggal='$tanggal', gambar='$gambar' where id ='$id'") or die(mysqli_error($koneksi));

					//redirect ke halaman index.php
					echo "<script>alert('data berhasil diupdate.');window.location='kegiatan.php';</script>";
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

