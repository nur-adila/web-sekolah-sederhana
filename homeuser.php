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
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="homeuser.php">Dashboard</a>
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
                <div class="container-fluid">
                    <h1 class="mt-4">School Profile</h1>
                    <p>Informasi seputar kegiatan di sekolah serta komponen-komponennya akan kami sajikan dalam website ini guna memberikan informasi yang luas bagi masyarakat..</p>
                    <div class="container">
                       <div class="content-video">
                       <!-- Tempatkan Video Youtube Disini -->
                       <iframe width="560" height="315" src="https://youtube.com/embed/Hg6r3TSonIo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                       </div>
                    </div>
                </div>
            </div>
            <tbody>
                <div class="container-fluid">
                    <u><h2 class="mt-4">Informasi Kegiatan</h2></u>
                    <p>Informasi seputar kegiatan di sekolah.</p>
                    <div class="container">
                       <h3> Data barang </h3>

<table border="1">
    <tr>
        <th>No</th>
        <th>Isi</th>
        <th>Tanggal </th>
        <th>Gambar</th>
    </tr>

    <?php
    include "koneksi.php";

    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from kegiatan");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[Isi]</td>
            <td>$tampil[tanggal]</td>
            <td>$tampil[berang]</td>
        <tr>";
        $no++;
    }
    ?>
    </table>
                    </div>
                </div>

                <div class="container-fluid">
                    <u><h2 class="mt-4">Jadwal</h2></u>
                    <p>Jadwal seputar kegiatan di sekolah.</p>
                    <div class="container">
                       
                    </div>
                </div>

                <div class="container-fluid">
                    <u><h2 class="mt-4">About Me</h2></u>
                    <h6>Hi, I'm Dila</h6>
                    <p>
                        I am a web developer with a passion for creating clean and user-friendly websites. I have experience in HTML, CSS, JavaScript, and PHP, and I enjoy turning ideas into reality through coding. In my free time, I love to explore new technologies and work on personal projects.
                    </p>
            
                    </div>
                </div>

            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <footer>  
        <p align="center">Teknik Komputer dan Jaringan (2023) © Nur Adila Puspita Arsyad</p>  
        </footer>  
    </body>
</html>
