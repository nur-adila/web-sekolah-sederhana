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
	                <div class="card mt-3">
				<div class="card-body">
				<form action="" method="post" role="form" enctype="multipart/form-data" >
					<div class="container col-md-6 mt-4">
					<h1>Jadwal Agenda Kegiatan</h1>
					<div class="card">
						<div class="card-header bg-success text-white">
							Tambah Jadwal
						</div>
						<div class="card-body">
					<form action="" method="post" role="form">
					<div class="form-group">
						<label>Informasi Kegiatan</label>
						<input type="text" name="isi" class="form-control">
					</div>
					<div class="form-group">
						<label>Waktu</label>
						<input type="date" name="tanggal" class="form-control">
					</div>

					<div class="form-group">
						<p>Pilih File Gambar : <br/>
						<input type="file" name="gambar" required="" class="form-control"/>
					</p></div>
					<button type="submit" class="btn btn-primary" name="submit" value="Add">Simpan data</button>
				</form>

				<?php
				include('koneksi.php');
				
				//melakukan pengecekan jika button submit diklik maka akan menjalankan perintah simpan dibawah ini
				if (isset($_POST['submit'])) {
					//menampung data dari inputan
					$isi = $_POST['isi'];
					$tanggal = $_POST['tanggal'];

					$nama_foto1   = $_FILES['gambar']['name'];
			        $file_tmp1    = $_FILES['gambar']['tmp_name'];   
			        //untuk acak nama file jadi sebagai angka unik, agar nama file tidak sama
			        $acak1      = rand(1,99999);


			          if($nama_foto1 != "") {
			          	//memberi nama baru pada foto yang diupload
			            $nama_unik1     = $acak1.$nama_foto1;
			            //upload ke folder foto
			            move_uploaded_file($file_tmp1,'gambar/'.$nama_unik1);
			          } else {
			            $nama_unik1 = NULL;
			          }
			          
			        $gambar = $nama_unik1;

					//query untuk menambahkan tagihan ke database, pastikan urutan nya sama dengan di database
					$datas = mysqli_query($koneksi, "insert into kegiatan (isi,tanggal,gambar)values('$isi', '$tanggal', '$gambar')") or die(mysqli_error($koneksi));
					//id tagihan tidak dimasukkan, karena sudah menggunakan AUTO_INCREMENT, id akan otomatis

					//ini untuk menampilkan alert berhasil dan redirect ke halaman index
					echo "<script>alert('data berhasil disimpan.');window.location='kegiatan.php';</script>";
				}
				?>
			</div>
		</div>
	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>

