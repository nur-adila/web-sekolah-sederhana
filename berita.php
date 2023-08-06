<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

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
                <!-- Page content-->
                <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <h5>SMK KARTIKA MAKASSAR PUNYA SISWA BARU KEMBAR EMPAT</h5>
              <p>Ada yang menarik dan unik dalam penerimaan siswa baru di SMK Kartika Makassar tahun 2017.</p>
              <p>Ini terjadi karena di antara 301 siswa/siswi yang dinyatakan lulus seleksi penerimaan,</p>
              <p>terdapat kembar 4 (empat), Keisia Kalelean, Elia Landolalen,</p>
              <p> Putri Gibrella dan Abraham Sandalangi.Putra-putri dari Allo Lagi dan Tiku Madika</p>
            </div>
            <div class="col-sm-4">
              <h3>Berita 2</h3>
              <p>...</p>
              <p>...</p>
            </div>
            <div class="col-sm-4">
              <h3>Berita 3</h3>        
              <p>...</p>
              <p>...</p>
            </div>
          </div>
        </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <footer>
        <p align="center">Copyright @ 2018</p>
        <p align="center">Creator Of Doom</p>
        </footer>
    </body>
</html>


<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>