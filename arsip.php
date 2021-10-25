<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>ARSIP SURAT</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php 
        if(isset($_GET['pesan'])){
            $pesan = $_GET['pesan'];
            if($pesan == "input"){
                echo '<script>alert("Data berhasil di input")</script>';
            }else if($pesan == "update"){
                echo '<script>alert("Data berhasil di update")</script>';
            }else if($pesan == "hapus"){
                echo '<script>alert("Data berhasil di hapus")</script>';
            }else if($pesan == "bukanPDF"){
                echo '<script>alert("File Harus PDF")</script>';
            }
        }
        ?>

        <?php include 'menu.php'; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php include "topbar.php" ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <p><a href="arsip.php">Arsip Surat</a> </p>
                    <h1 class="h3 mb-2 text-gray-800">ARSIP SURAT</h1>
                    <p class="mb-4">Berikut ini adalah surat-surat yang telah terbit dan diarsipkan.<br>
                                    Klik <a href="#">"Lihat"</a> pada kolom aksi untuk menampilkan surat.</p>

                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nomor Surat</th>
                                            <th>Kategori</th>
                                            <th>Judul</th>
                                            <th>Waktu Pengarsipan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nomor Surat</th>
                                            <th>Kategori</th>
                                            <th>Judul</th>
                                            <th>Waktu Pengarsipan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>

                                    <?php 
                                    include "koneksi.php";
                                    $query_mysql = mysqli_query($conn,"SELECT * FROM arsip_surat") or die (mysqli_error());
                                    $nomor = 1;
                                    while($data = mysqli_fetch_array($query_mysql)){
                                    ?>
                                        <tbody>           
                                            <tr>
                                                <td> <?php echo $nomor++; ?></td>
                                                <td> <?php echo $data['Nomor_surat']; ?></td>
                                                <td> <?php echo $data['Kategori']; ?></td>
                                                <td> <?php echo $data['Judul_surat']; ?></td>
                                                <td> <?php echo $data['Tanggal_arsip']; ?></td>
                                                <input type="hidden" class="form-control" name="file_surat" id="file_surat" value="<?php echo $data['file_surat']; ?>">
                                                <td>
                                                    <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-circle " onclick="return confirm('Apakah Anda yakin ingin menghapus arsip surat ini?')">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                    <a href="download.php?file=<?php echo $data['file_surat']; ?>"  class="btn btn-warning btn-circle ">
                                                        <i class="fas fa-download"></i>
                                                    </a>
                                                    <a href="view.php?id=<?php echo $data['id']; ?>" class="btn btn-primary btn-circle ">
                                                        <i class="fas fa-eye"></i>
                                                    </a>              
                                                </td>
                                            </tr>                                       
                                        </tbody>
                                    <?php } ?>
                                </table>
                            </div>
                            <a href="add.php" class="btn btn-primary btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <span class="text">Arsipkan Surat</span>
                            </a>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Silvia Nur Mahmudah - <?php echo date('Y') ?></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>
</html>