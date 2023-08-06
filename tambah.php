<!DOCTYPE html>
<html>

<head>
	<title>tambah</title>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<body>
	 <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button onclick="goBack()"id="sidebarToggle">Kembali</button>
                        <script>
						    function goBack() {
						        window.history.back();
						    }
						</script>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    </div>
                </nav>
	<div class="container col-md-6 mt-4">
		<h1>Jadwal Agenda Kegiatan</h1>
		<div class="card">
			<div class="card-header bg-success text-white">
				Tambah Jadwal
			</div>
			<div class="card-body">
				<form action="" method="post" role="form">
					<div class="form-group">
						<label>Jadwal Kegiatan</label>
						<input type="text" name="jadwal_agenda" required="" class="form-control">
					</div>
					<div class="form-group">
						<label>Waktu</label>
						<input type="datetime-local" name="waktu" class="form-control">
					</div>

					<div class="form-group">
						<label>Deskripsi</label>
						<textarea class="form-control" name="deskripsi"></textarea>
					</div>

					<button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan data</button>
				</form>

				<?php
				include('koneksi.php');
				
				//melakukan pengecekan jika button submit diklik maka akan menjalankan perintah simpan dibawah ini
				if (isset($_POST['submit'])) {
					//menampung data dari inputan
					$jadwal_agenda = $_POST['jadwal_agenda'];
					$waktu = $_POST['waktu'];
					$deskripsi = $_POST['deskripsi'];

					//query untuk menambahkan barang ke database, pastikan urutan nya sama dengan di database
					$datas = mysqli_query($koneksi, "insert into jadwal (jadwal_agenda,waktu,deskripsi)values('$jadwal_agenda', '$waktu', '$deskripsi')") or die(mysqli_error($koneksi));
					//id barang tidak dimasukkan, karena sudah menggunakan AUTO_INCREMENT, id akan otomatis

					//ini untuk menampilkan alert berhasil dan redirect ke halaman index
					echo "<script>alert('data berhasil disimpan.');window.location='jadwal.php';</script>";
				}
				?>
			</div>
		</div>
	</div>


	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>