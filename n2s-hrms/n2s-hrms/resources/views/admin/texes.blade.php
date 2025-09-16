<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="dark" data-bs-theme="light">
<head>
    <meta charset="utf-8" />
    <title>N2S-HRMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- cdn link -->
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS (with Popper.js included) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Vendor CSS -->
    @include('partials.css-links')

</head>

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
                            <h4 class="page-title">Taxes</h4>
                            <div class="">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="#">Approx</a>
                                    </li><!--end nav-item-->
                                    <li class="breadcrumb-item active">Taxes</li>
                                </ol>
                            </div>
                        </div><!--end page-title-box-->
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Taxes Details</h4>
                                    </div><!--end col-->
                                    <div class="col-auto">
                                        <button class="btn bg-primary text-white"  data-bs-toggle="modal" data-bs-target="#addRate"><i class="fas fa-plus me-1"></i> Add Rate</button>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <table class="table mb-0" id="datatable_1">
                                        <thead class="table-light">
                                          <tr>
                                            <th>Tax Rate (Band)</th>
                                            <th>Tax Rate</th>
                                            <th>Taxable Income 22/23</th>
                                            <th>Taxable Income23/24</th>
                                            <th class="text-end">Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tax-free Personal Allowance</td>
                                                <td>0%</td>
                                                <td>Up to $12500</td>
                                                <td>Up to $14000</td>
                                                <td class="text-end">
                                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Starter Rate</td>
                                                <td>15%</td>
                                                <td>$12500 to $14500</td>
                                                <td>$14500 to $16500</td>
                                                <td class="text-end">
                                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Basic Rate</td>
                                                <td>20%</td>
                                                <td>$13500 to $15500</td>
                                                <td>$16500 to $18500</td>
                                                <td class="text-end">
                                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Intermediate Rate</td>
                                                <td>24%</td>
                                                <td>$16500 to $18500</td>
                                                <td>$18500 to $20000</td>
                                                <td class="text-end">
                                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Higher Rate</td>
                                                <td>32%</td>
                                                <td>$18500 to $20000</td>
                                                <td>$20000 to $21000</td>
                                                <td class="text-end">
                                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Additional Rate</td>
                                                <td>45%</td>
                                                <td>Over $20000</td>
                                                <td>Over $21000</td>
                                                <td class="text-end">
                                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                      </table>
                                </div>
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

           @include('partials.footer')

            <!--end footer-->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->
    <div class="modal fade" id="addRate" tabindex="-1" aria-labelledby="addRateLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="addRateLabel">Add Rate Detail</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class=" mb-2">
                    <label for="rateTitle">Tax Rate</label>
                    <div class="input-group">
                        <span class="input-group-text" id="rateTitle"><i class="fas fa-heading"></i></span>
                        <input type="text" class="form-control" placeholder="Name" aria-label="rateTitle">
                    </div>
                </div>
                <div class=" mb-2">
                    <label for="rate">Rate %</label>
                    <div class="input-group">
                        <span class="input-group-text" id="rate"><i class="far fa-percent"></i></span>
                        <input type="text" class="form-control" placeholder="0%" aria-label="rate">
                    </div>
                </div>
                <div class=" mb-2">
                    <label for="incomeSince">Taxable Income Since</label>
                    <div class="input-group">
                        <span class="input-group-text" id="incomeSince"><i class="far fa-calendar"></i></span>
                        <input type="text" class="form-control" placeholder="$0000 24/25" aria-label="incomeSince">
                    </div>
                </div>
                <div class=" mb-2">
                    <label for="incomeSince2">Taxable Income Since 2</label>
                    <div class="input-group">
                        <span class="input-group-text" id="incomeSince2"><i class="far fa-calendar"></i></span>
                        <input type="text" class="form-control" placeholder="$0000 24/25" aria-label="incomeSince2">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary w-100">Add New Rate</button>
            </div>
          </div>
        </div>
      </div>
    <!-- Javascript  -->
    <!-- vendor js -->

    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/simple-datatables/umd/simple-datatables.js"></script>
    <script src="assets/js/pages/datatable.init.js"></script>
    <script src="assets/js/app.js"></script>
</body>
<!--end body-->

</html>
