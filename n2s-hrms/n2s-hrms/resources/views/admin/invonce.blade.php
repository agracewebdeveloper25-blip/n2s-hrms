<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="dark" data-bs-theme="light">

    <head>


        <meta charset="utf-8" />
                <title>Invoice | Approx - Admin & Dashboard Template</title>
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
                <meta content="" name="author" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />

                <!-- App favicon -->
                <link rel="shortcut icon" href="assets/images/favicon.ico">


         <!-- App css -->
         <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
         <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
         <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>


    <!-- Top Bar Start -->
    <body>
        <!-- Top Bar Start -->
       @include('partials.topbar')
        <!-- Top Bar End -->
        <!-- leftbar-tab-menu -->
        <div class="startbar d-print-none">
            <!--start brand-->
            <div class="brand">
                <a href="index.html" class="logo">
                    <span>
                        <img src="assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
                    </span>
                    <span class="">
                        <img src="assets/images/logo-light.png" alt="logo-large" class="logo-lg logo-light">
                        <img src="assets/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">
                    </span>
                </a>
            </div>
            <!--end brand-->
            <!--start startbar-menu-->
           @include('partials.starbar')
            <!--end startbar-menu-->
        </div><!--end startbar-->
        <div class="startbar-overlay d-print-none"></div>
        <!-- end leftbar-tab-menu-->


        <div class="page-wrapper">

            <!-- Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                                <h4 class="page-title">Invoice</h4>
                                <div class="">
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="#">Approx</a>
                                        </li><!--end nav-item-->
                                        <li class="breadcrumb-item"><a href="#">Apps</a>
                                        </li><!--end nav-item-->
                                        <li class="breadcrumb-item active">Invoice</li>
                                    </ol>
                                </div>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body bg-black rounded-top">
                                    <div class="row">
                                        <div class="col-4 align-self-center">
                                            <img src="assets/images/logo-sm.png" alt="logo-small" class="logo-sm me-1" height="70" >
                                        </div><!--end col-->
                                        <div class="col-8 text-end align-self-center">
                                            <h5 class="mb-1 fw-semibold text-white"><span class="text-muted">Invoice:</span> #BBN2351D458</h5>
                                            <h5 class="mb-0 fw-semibold text-white"><span class="text-muted">Issue Date:</span> 20/07/2024</h5>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->
                                <div class="card-body">
                                    <div class="row row-cols-3 d-flex justify-content-md-between">
                                        <div class="col-md-3 d-print-flex align-self-center">
                                            <div class="">
                                                <span class="badge rounded text-dark bg-light">Invoice to</span>
                                                <h5 class="my-1 fw-semibold fs-18">Michael Reyes</h5>
                                                <p class="text-muted ">@Michael_Reyes|+1 123 456 789</p>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-md-3 d-print-flex align-self-center">
                                            <div class="">
                                                <address class="fs-13">
                                                    <strong class="fs-14">Billed To :</strong><br>
                                                    854 Ave Folsom <br>
                                                    San Francisco, CA 36925<br>
                                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                                </address>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-md-3 d-print-flex align-self-center">
                                            <div class="">
                                                <address class="fs-13">
                                                    <strong class="fs-14">Shipped To:</strong><br>
                                                    795 Folsom Ave<br>
                                                    San Francisco, CA 94107<br>
                                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                                </address>
                                            </div>
                                        </div> <!--end col-->
                                    </div><!--end row-->

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="table-responsive project-invoice">
                                                <table class="table table-bordered mb-0">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th>Project Breakdown</th>
                                                            <th>Hours</th>
                                                            <th>Rate</th>
                                                            <th>Subtotal</th>
                                                        </tr><!--end tr-->
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <h5 class="mt-0 mb-1 fs-14">Project Design</h5>
                                                                <p class="mb-0 text-muted">It is a long established fact that a reader will be distracted.</p>
                                                            </td>
                                                            <td>60</td>
                                                            <td>$50</td>
                                                            <td>$3000.00</td>
                                                        </tr><!--end tr-->
                                                        <tr>
                                                            <td>
                                                                <h5 class="mt-0 mb-1 fs-14">Development</h5>
                                                                <p class="mb-0 text-muted">It is a long established fact that a reader will be distracted.</p>
                                                            </td>
                                                            <td>100</td>
                                                            <td>$50</td>
                                                            <td>$5000.00</td>
                                                        </tr><!--end tr-->
                                                        <tr>
                                                            <td>
                                                                <h5 class="mt-0 mb-1 fs-14">Testing & Bug Fixing</h5>
                                                                <p class="mb-0 text-muted">It is a long established fact that a reader will be distracted.</p>
                                                            </td>
                                                            <td>10</td>
                                                            <td>$20</td>
                                                            <td>$200.00</td>
                                                        </tr><!--end tr-->

                                                        <tr>
                                                            <td colspan="1" class="border-0"></td>
                                                            <td colspan="2" class="border-0 fs-14 text-dark"><b>Sub Total</b></td>
                                                            <td class="border-0 fs-14 text-dark"><b>$82,000.00</b></td>
                                                        </tr><!--end tr-->
                                                        <tr>
                                                            <th colspan="1" class="border-0"></th>
                                                            <td colspan="2" class="border-0 fs-14 text-dark"><b>Tax Rate</b></td>
                                                            <td class="border-0 fs-14 text-dark"><b>$0.00%</b></td>
                                                        </tr><!--end tr-->
                                                        <tr class="">
                                                            <th colspan="1" class="border-0"></th>
                                                            <td colspan="2" class="border-0 fs-14"><b>Total</b></td>
                                                            <td class="border-0 fs-14"><b>$82,000.00</b></td>
                                                        </tr><!--end tr-->
                                                    </tbody>
                                                </table><!--end table-->
                                            </div>  <!--end /div-->
                                        </div>  <!--end col-->
                                    </div><!--end row-->

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h5 class="mt-4">Terms And Condition :</h5>
                                            <ul class="ps-3">
                                                <li><small class="fs-12">All accounts are to be paid within 7 days from receipt of invoice. </small></li>
                                                <li><small class="fs-12">To be paid by cheque or credit card or direct payment online.</small ></li>
                                                <li><small class="fs-12"> If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.</small></li>
                                            </ul>
                                        </div> <!--end col-->
                                        <div class="col-lg-6 align-self-center">
                                            <div class="float-none float-md-end" style="width: 30%;">
                                                <small>Account Manager</small>
                                                <img src="assets/images/extra/signature.png" alt="" class="mt-2 mb-1" height="24">
                                                <p class="border-top">Signature</p>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                    <hr>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-lg-12 col-xl-4 ms-auto align-self-center">
                                            <div class="text-center"><small class="fs-12">Thank you very much for doing business with us.</small></div>
                                        </div><!--end col-->
                                        <div class="col-lg-12 col-xl-4">
                                            <div class="float-end d-print-none mt-2 mt-md-0">
                                                <a href="javascript:window.print()" class="btn btn-info">Print</a>
                                                <a href="#" class="btn btn-primary">Submit</a>
                                                <a href="#" class="btn btn-danger">Cancel</a>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                </div><!-- container -->

                <!--Start Rightbar-->
                <!--Start Rightbar/offcanvas-->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
                    <div class="offcanvas-header border-bottom justify-content-between">
                      <h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
                      <button type="button" class="btn-close text-reset p-0 m-0 align-self-center" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <h6>Account Settings</h6>
                        <div class="p-2 text-start mt-3">
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch1">
                                <label class="form-check-label" for="settings-switch1">Auto updates</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch2" checked>
                                <label class="form-check-label" for="settings-switch2">Location Permission</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="settings-switch3">
                                <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
                            </div><!--end form-switch-->
                        </div><!--end /div-->
                        <h6>General Settings</h6>
                        <div class="p-2 text-start mt-3">
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch4">
                                <label class="form-check-label" for="settings-switch4">Show me Online</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch5" checked>
                                <label class="form-check-label" for="settings-switch5">Status visible to all</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="settings-switch6">
                                <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
                            </div><!--end form-switch-->
                        </div><!--end /div-->
                    </div><!--end offcanvas-body-->
                </div>
                <!--end Rightbar/offcanvas-->
                <!--end Rightbar-->
                <!--Start Footer-->

                <footer class="footer text-center text-sm-start d-print-none">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card mb-0 rounded-bottom-0">
                                    <div class="card-body">
                                        <p class="text-muted mb-0">
                                            ©
                                            <script> document.write(new Date().getFullYear()) </script>
                                            Approx
                                            <span
                                                class="text-muted d-none d-sm-inline-block float-end">
                                                Design with
                                                <i class="iconoir-heart-solid text-danger align-middle"></i>
                                                by Mannatthemes</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>

                <!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        <!-- Javascript  -->
        <!-- vendor js -->

        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/js/app.js"></script>
    </body>
    <!--end body-->
</html>
