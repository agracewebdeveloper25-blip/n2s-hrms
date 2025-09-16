<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="dark" data-bs-theme="light">
<head>
  <meta charset="utf-8" />
  <title>Dashboard | N2S-HRMS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta content="N2S-HRMS - Employee Management & Human Resource Dashboard" name="description" />
  <meta content="N2S Agrace IT Solutions" name="author" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <!-- App favicon -->
  <link rel="shortcut icon" href="{{ asset('assets/images/n2slogo.jpg') }}">

  <!-- App css -->
  @include('partials.css-links')
</head>

<body>

    <!-- Top Bar Start -->
 @include('partials.topbar')
    <!-- Top Bar End -->
    <!-- leftbar-tab-menu -->
    @include('partials.starbar')
    <div class="startbar-overlay d-print-none"></div>
    <!-- end leftbar-tab-menu-->

  @include('partials.pagewrapper')
    <!-- end page-wrapper -->

    <!-- Javascript  -->
    <!-- vendor js -->

    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>

    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
    <script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>
    <script src="assets/js/pages/index.init.js"></script>
    <script src="assets/js/DynamicSelect.js"></script>
    <script src="assets/js/app.js"></script>
</body>
<!--end body-->

</html>
