<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sekolah</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">Sekolah</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="home.php">Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="berita.php">Berita</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="kegiatan.php">Kegiatan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="jadwal.php">Jadwal</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="about.php">About</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#!">Action</a>
                                        <a class="dropdown-item" href="#!">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="logout.php">Logout</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="container col-md-6 mt-4">
                    <h1>Jadwal Kegiatan</h1>
                    <div class="card">
                        <div class="card-header bg-success text-white ">
                            DATA JADWAL <a href="tambah.php" class="btn btn-sm btn-primary float-right">Tambah</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Agenda Kegiatan</th>
                                        <th>Waktu</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                            <?php
                            include('koneksi.php'); //memanggil file koneksi
                            $datas = mysqli_query($koneksi, "select * from jadwal") or die(mysqli_error($koneksi));
                            //script untuk menampilkan data barang

                            $no = 1;//untuk pengurutan nomor

                            //melakukan perulangan
                            while($row = mysqli_fetch_assoc($datas)) {
                        ?>  

                         <tr>
                        <td><?= $no; ?></td>
                        <td><?= $row['jadwal_agenda']; //untuk menampilkan nama ?></td>
                        <td><?= $row['waktu']; ?></td>
                        <td><?= $row['deskripsi']; ?></td>
                        <td>
                                <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('anda yakin ingin hapus?');">Hapus</a>
                        </td>
                            </tr>

                            <?php $no++; } ?>
                        </body>
                    </table>
                </div>
            </div>
        </div>
    <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <footer>  
        <p align="center">Teknik Komputer dan Jaringan (2023) © Nur Adila Puspita Arsyad</p>  
        </footer>  
    </body>
</html>