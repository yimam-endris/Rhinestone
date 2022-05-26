<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inventious Disclosure Tools</title>
    <!-- base:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Icons -->
    <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../assets/css/horizontal-layout-light/style.css">
    <link rel="stylesheet" href="../../../../css/bs_fix.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">    
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="https://code.jquery.com/jquery-3.5.1.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js">
    <!-- base:css -->
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="../../../../assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
</head>

<body>
    <div class="container-scroller">
        @include('portal.layouts.horizontal-menu')

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                @include('portal.layouts.footer')
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- base:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="../../assets/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/template.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="../../assets/js/jquery.cookie.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="../../assets/js/dashboard.js"></script>
    <script src="../../assets/js/todolist.js"></script>

    <!-- plugin js for this page -->
    <script src="../../../../assets/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="../../../../assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="../../../../assets/js/data-table.js"></script>
    <!-- End custom js for this page-->

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
            $('#Devroinvestor').DataTable();
            $('#Devroapplicant').DataTable();
            $('#Devrolicensor').DataTable();
            $('#Devrolicensee').DataTable();
            $('#Devroagent').DataTable();
            $('#Devropatent').DataTable();
            $('#Devrodesign').DataTable();
        } );
    </script>

</body>


<!-- Mirrored from www.bootstrapdash.com/demo/spica/template/demo/horizontal-default-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Jan 2022 21:57:28 GMT -->

</html>
