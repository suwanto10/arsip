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
                    <p><a href="arsip.php">Arsip Surat </a> / <a href="add.php"> Unggah</a></p>
                    <h1 class="h3 mb-2 text-gray-800">ARSIP SURAT</h1>
                    <p class="mb-4">Unggah surat yang telah terbit pada form ini untuk diarsipkan.<br>
                                    Catatan : <br>
                                    - Gunakan file berformat PDF.
                    </p>

                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <form class="user" action="add-aksi.php" method="post" enctype="multipart/form-data">
                                <div class="table-responsive">
                                <table class="table table-borderless" width="100%"  cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <th>Nomor Surat</th>
                                            <th>
                                                <input type="text" class="form-control" name="Nomor_surat">
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Kategori</th>
                                            <th>                                                
                                                <select name="Kategori" class="form-control" name="Kategori">
                                                    <option value=""> </option>
                                                    <option value="Undangan">Undangan</option>
                                                    <option value="Pengumuman">Pengumuman</option>
                                                    <option value="NotaDinas">Nota Dinas</option>
                                                    <option value="Pengumuman">Pemberitahuan</option>
                                                </select>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Judul</th>
                                            <th>
                                                <input type="text" class="form-control" name="Judul_surat">
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>File Surat (PDF)</th>
                                            <th>
                                                <input type="file" class="form-control" name="file_surat">
                                            </th>
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
                                    <button class="btn btn-primary btn-icon-split" type="submit">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-save"></i>
                                        </span>
                                        <span class="text">Simpan</span>
                                    </button>
                                </div>
                            </form>
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
                        <span>Copyright &copy; Suwanto - <?php echo date('Y') ?></span>
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