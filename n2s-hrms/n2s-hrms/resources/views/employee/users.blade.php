<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="dark" data-bs-theme="light">

<head>


    <meta charset="utf-8" />
            <title>Users | Approx - Admin & Dashboard Template</title>
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
            <meta content="" name="author" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />

            <!-- App favicon -->
            <link rel="shortcut icon" href="assets/images/favicon.ico">


    <link href="assets/libs/simple-datatables/style.css" rel="stylesheet" type="text/css" />
     <!-- App css -->
     <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
     <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
     <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

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
        @include('partials.starbar')<!--end startbar-menu-->
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
                            <h4 class="page-title">Users</h4>
                            <div class="">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="#">Approx</a>
                                    </li><!--end nav-item-->
                                    <li class="breadcrumb-item active">Users</li>
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
                                        <h4 class="card-title">Users Details</h4>
                                    </div><!--end col-->
                                    <div class="col-auto">
                                        <button class="btn bg-primary text-white"  data-bs-toggle="modal" data-bs-target="#addUser"><i class="fas fa-plus me-1"></i> Add User</button>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <table class="table mb-0" id="datatable_1">
                                        <thead class="table-light">
                                          <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile No</th>
                                            <th>Registered On</th>
                                            <th>Status</th>
                                            <th class="text-end">Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="d-flex align-items-center">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/users/avatar-1.jpg" class="me-2 thumb-md align-self-center rounded" alt="...">
                                                        <div class="flex-grow-1 text-truncate">
                                                            <h6 class="m-0">Unity Pugh</h6>
                                                            <p class="fs-12 text-muted mb-0">USA</p>
                                                        </div><!--end media body-->
                                                    </div>
                                                </td>
                                                <td><a href="#" class="text-body text-decoration-underline">dummy@gmail.com</a></td>
                                                <td>+1 234 567 890</td>
                                                <td>22 August 2024</td>
                                                <td><span class="badge rounded text-success bg-success-subtle">Active</span></td>
                                                <td class="text-end">
                                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-flex align-items-center">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/users/avatar-1.jpg" class="me-2 thumb-md align-self-center rounded" alt="...">
                                                        <div class="flex-grow-1 text-truncate">
                                                            <h6 class="m-0">Scott Holland</h6>
                                                            <p class="fs-12 text-muted mb-0">USA</p>
                                                        </div><!--end media body-->
                                                    </div>
                                                </td>
                                                <td><a href="#" class="text-body text-decoration-underline">extradummy@gmail.com</a></td>
                                                <td>+1 234 567 890</td>
                                                <td>20 August 2024</td>
                                                <td><span class="badge rounded text-success bg-success-subtle">Active</span></td>
                                                <td class="text-end">
                                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-flex align-items-center">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/users/avatar-2.jpg" class="me-2 thumb-md align-self-center rounded" alt="...">
                                                        <div class="flex-grow-1 text-truncate">
                                                            <h6 class="m-0">Karen Savage</h6>
                                                             <p class="fs-12 text-muted mb-0">Canada</p>
                                                        </div><!--end media body-->
                                                    </div>
                                                </td>
                                                <td><a href="#" class="text-body text-decoration-underline">dummy@gmail.com</a></td>
                                                <td>+1 234 567 890</td>
                                                <td>15 August 2024</td>
                                                <td><span class="badge rounded text-success bg-success-subtle">Active</span></td>
                                                <td class="text-end">
                                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-flex align-items-center">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/users/avatar-3.jpg" class="me-2 thumb-md align-self-center rounded" alt="...">
                                                        <div class="flex-grow-1 text-truncate">
                                                            <h6 class="m-0">Steven Sharp</h6>
                                                            <p class="fs-12 text-muted mb-0">France</p>
                                                        </div><!--end media body-->
                                                    </div>
                                                </td>
                                                <td><a href="#" class="text-body text-decoration-underline">extradummy@gmail.com</a></td>
                                                <td>+1 234 567 890</td>
                                                <td>08 August 2024</td>
                                                <td><span class="badge rounded text-secondary bg-secondary-subtle">Inactive</span></td>
                                                <td class="text-end">
                                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-flex align-items-center">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/users/avatar-4.jpg" class="me-2 thumb-md align-self-center rounded" alt="...">
                                                        <div class="flex-grow-1 text-truncate">
                                                            <h6 class="m-0">Teresa Himes</h6>
                                                            <p class="fs-12 text-muted mb-0">India</p>
                                                        </div><!--end media body-->
                                                    </div>
                                                </td>
                                                <td><a href="#" class="text-body text-decoration-underline">extradummy@gmail.com</a></td>
                                                <td>+1 234 567 890</td>
                                                <td>02 August 2024</td>
                                                <td><span class="badge rounded text-success bg-success-subtle">Active</span></td>
                                                <td class="text-end">
                                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-flex align-items-center">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/users/avatar-5.jpg" class="me-2 thumb-md align-self-center rounded" alt="...">
                                                        <div class="flex-grow-1 text-truncate">
                                                            <h6 class="m-0">Ralph Denton</h6>
                                                            <p class="fs-12 text-muted mb-0">UK</p>
                                                        </div><!--end media body-->
                                                    </div>
                                                </td>
                                                <td><a href="#" class="text-body text-decoration-underline">dummy@gmail.com</a></td>
                                                <td>+1 234 567 890</td>
                                                <td>28 July 2024</td>
                                                <td><span class="badge rounded text-secondary bg-secondary-subtle">Inactive</span></td>
                                                <td class="text-end">
                                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-flex align-items-center">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/users/avatar-1.jpg" class="me-2 thumb-md align-self-center rounded" alt="...">
                                                        <div class="flex-grow-1 text-truncate">
                                                            <h6 class="m-0">Unity Pugh</h6>
                                                            <p class="fs-12 text-muted mb-0">Germany</p>
                                                        </div><!--end media body-->
                                                    </div>
                                                </td>
                                                <td><a href="#" class="text-body text-decoration-underline">extradummy@gmail.com</a></td>
                                                <td>+1 234 567 890</td>
                                                <td>19 July 2024</td>
                                                <td><span class="badge rounded text-success bg-success-subtle">Active</span></td>
                                                <td class="text-end">
                                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-flex align-items-center">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/users/avatar-1.jpg" class="me-2 thumb-md align-self-center rounded" alt="...">
                                                        <div class="flex-grow-1 text-truncate">
                                                            <h6 class="m-0">Scott Holland</h6>
                                                            <p class="fs-12 text-muted mb-0">USA</p>
                                                        </div><!--end media body-->
                                                    </div>
                                                </td>
                                                <td><a href="#" class="text-body text-decoration-underline">dummy@gmail.com</a></td>
                                                <td>+1 234 567 890</td>
                                                <td>14 July 2024</td>
                                                <td><span class="badge rounded text-success bg-success-subtle">Active</span></td>
                                                <td class="text-end">
                                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-flex align-items-center">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/users/avatar-2.jpg" class="me-2 thumb-md align-self-center rounded" alt="...">
                                                        <div class="flex-grow-1 text-truncate">
                                                            <h6 class="m-0">Karen Savage</h6>
                                                            <p class="fs-12 text-muted mb-0">USA</p>
                                                        </div><!--end media body-->
                                                    </div>
                                                </td>
                                                <td><a href="#" class="text-body text-decoration-underline">extradummy@gmail.com</a></td>
                                                <td>+1 234 567 890</td>
                                                <td>10 July 2024</td>
                                                <td><span class="badge rounded text-success bg-success-subtle">Active</span></td>
                                                <td class="text-end">
                                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-flex align-items-center">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/users/avatar-3.jpg" class="me-2 thumb-md align-self-center rounded" alt="...">
                                                        <div class="flex-grow-1 text-truncate">
                                                            <h6 class="m-0">Steven Sharp</h6>
                                                            <p class="fs-12 text-muted mb-0">Russia</p>
                                                        </div><!--end media body-->
                                                    </div>
                                                </td>
                                                <td><a href="#" class="text-body text-decoration-underline">dummy@gmail.com</a></td>
                                                <td>+1 234 567 890</td>
                                                <td>21 June 2024</td>
                                                <td><span class="badge rounded text-secondary bg-secondary-subtle">Inactive</span></td>
                                                <td class="text-end">
                                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-flex align-items-center">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/users/avatar-4.jpg" class="me-2 thumb-md align-self-center rounded" alt="...">
                                                        <div class="flex-grow-1 text-truncate">
                                                            <h6 class="m-0">Teresa Himes</h6>
                                                            <p class="fs-12 text-muted mb-0">USA</p>
                                                        </div><!--end media body-->
                                                    </div>
                                                </td>
                                                <td><a href="#" class="text-body text-decoration-underline">extradummy@gmail.com</a></td>
                                                <td>+1 234 567 890</td>
                                                <td>12 June 2024</td>
                                                <td><span class="badge rounded text-success bg-success-subtle">Active</span></td>
                                                <td class="text-end">
                                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-flex align-items-center">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/users/avatar-5.jpg" class="me-2 thumb-md align-self-center rounded" alt="...">
                                                        <div class="flex-grow-1 text-truncate">
                                                            <h6 class="m-0">Ralph Denton</h6>
                                                            <p class="fs-12 text-muted mb-0">ShriSri Lanka</p>
                                                        </div><!--end media body-->
                                                    </div>
                                                </td>
                                                <td><a href="#" class="text-body text-decoration-underline">dummy@gmail.com</a></td>
                                                <td>+1 234 567 890</td>
                                                <td>17 May 2024</td>
                                                <td><span class="badge rounded text-secondary bg-secondary-subtle">Inactive</span></td>
                                                <td class="text-end">
                                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-flex align-items-center">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/users/avatar-2.jpg" class="me-2 thumb-md align-self-center rounded" alt="...">
                                                        <div class="flex-grow-1 text-truncate">
                                                            <h6 class="m-0">Karen Savage</h6>
                                                             <p class="fs-12 text-muted mb-0">USA</p>
                                                        </div><!--end media body-->
                                                    </div>
                                                </td>
                                                <td><a href="#" class="text-body text-decoration-underline">extradummy@gmail.com</a></td>
                                                <td>+1 234 567 890</td>
                                                <td>07 May 2024</td>
                                                <td><span class="badge rounded text-success bg-success-subtle">Active</span></td>
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
    <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="addUserLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="addUserLabel">Add User Detail</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group mb-2">
                    <div class="d-flex align-items-center">
                         <i class="fas fa-user text-muted thumb-xl rounded me-2 border-dashed"></i>
                        <div class="flex-grow-1 text-truncate">
                            <label class="btn btn-primary text-light">
                                Add Avatar <input type="file" hidden="">
                            </label>
                        </div><!--end media body-->
                    </div>
                </div>
                <div class=" mb-2">
                    <label for="fullName">Full Name</label>
                    <div class="input-group">
                        <span class="input-group-text" id="fullName"><i class="far fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Name" aria-label="FullName">
                    </div>
                </div>
                <div class=" mb-2">
                    <label for="email">Email</label>
                    <div class="input-group">
                        <span class="input-group-text" id="email"><i class="far fa-envelope"></i></span>
                        <input type="email" class="form-control" placeholder="Email address" aria-label="email">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-2">
                            <label for="ragisterDate">Register Date</label>
                            <div class="input-group">
                                <span class="input-group-text" id="ragisterDate"><i class="far fa-calendar"></i></span>
                                <input type="text" class="form-control" placeholder="00/2024" aria-label="ragisterDate">
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-md-6">
                        <div class="mb-2">
                            <label for="mobilleNo">Mobille No</label>
                            <div class="input-group">
                                <span class="input-group-text" id="mobilleNo"><i class="fas fa-phone"></i></span>
                                <input type="text" class="form-control" placeholder="+1 234 567 890" aria-label="mobilleNo">
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary w-100">Add User</button>
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
