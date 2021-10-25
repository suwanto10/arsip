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

        <?php include 'menu.php'; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php include "topbar.php" ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <p><a href="arsip.php">Arsip Surat </a> / <a href="view.php"> Lihat</a></p>
                    <h1 class="h3 mb-2 text-gray-800">ARSIP SURAT</h1>
                    <p class="mb-4">

                    </p>
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <?php 
                            include "koneksi.php";
                            $id = $_GET['id'];
                            $query_mysql = mysqli_query($conn, "SELECT * FROM arsip_surat WHERE id='$id'") or die(mysqli_error());
                            $nomor = 1;
                            while($data = mysqli_fetch_array($query_mysql)) { ?>
                                <div class="table-responsive">
                                <table class="table table-borderless" width="100%"  cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <th>Nomor</th>
                                            <th> : <?php echo $data['Nomor_surat']; ?></th>
                                        </tr>
                                        <tr>
                                            <th>Kategori</th>
                                            <th> : <?php echo $data['Kategori']; ?></th>
                                        </tr>
                                        <tr>
                                            <th>Judul</th>
                                            <th> : <?php echo $data['Judul_surat']; ?></th>
                                        </tr>
                                        <tr>
                                            <th>Waktu Unggah</th>
                                            <th> : <?php echo $data['Tanggal_arsip']; ?></th>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <th><embed type="application/pdf" src="file/<?php echo $data['file_surat']; ?>" width="800" height="800"></embed></th>                                        
                                        </tr>                    
                                    </tbody>
                                </table>
                                </div>
                                <div>
                                <a href="arsip.php" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-arrow-left"></i>
                                    </span>
                                    <span class="text">Kembali</span>
                                </a>
                                <a href="download.php?file=<?php echo $data['file_surat']; ?>" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-download"></i>
                                    </span>
                                    <span class="text">Unduh</span>
                                </a>
                                <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-edit"></i>
                                    </span>
                                    <span class="text">Edit/Ganti File</span>
                                </a>
                                </div>
                            <?php } ?>
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