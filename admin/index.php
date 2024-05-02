<?php 
session_start();
if(!isset($_SESSION['uname'])){
    header("location:login.php");
}
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aplikasi Web Kelas BD-B :: Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="./themes/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="./themes/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="./themes/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <style>
        .bg_mou{
            background-color:#e0ba75;
        }

        .btn-custom{
            background-color:#e0ba75; 
            border-color:#e0ba75;
            color: white;
        }

        .btn-custom:hover{
            background-color:#cda253; 
            border-color:#cda253;
            color:white;
        }

        .page-item.active .page-link {
            background-color: #e0ba75 !important;
            border-color: #e0ba75 !important;
        }

        .text-custom{
            color:#e0ba75;
        }

    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "menu.php";?>

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include "menu_top.php";?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <?php 
                $menu=isset($_GET['menu'])?$_GET['menu']:"";
                if($menu == "") { include "dashboard.php"; }
                else if($menu == "user") { include "user.php"; }
                else if($menu == "produk") { include "produk.php"; }
                else if($menu == "persediaan") { include "persediaan.php"; }
                else { include "blank_page.php"; }
                ?>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Mou 2021</span>
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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="./themes/vendor/jquery/jquery.min.js"></script>
    <script src="./themes/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="./themes/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="./themes/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="./themes/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="./themes/js/demo/chart-area-demo.js"></script>
    <script src="./themes/js/demo/chart-pie-demo.js"></script>

    <!-- Page level plugins -->
    <script src="./themes/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="./themes/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="./themes/js/demo/datatables-demo.js"></script>
</body>

</html>