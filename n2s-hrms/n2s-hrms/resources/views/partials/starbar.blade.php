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
        <div class="startbar-menu" >
            <div class="startbar-collapse" id="startbarCollapse" data-simplebar>
                <div class="d-flex align-items-start flex-column w-100">
                    <!-- Navigation -->
                    <ul class="navbar-nav mb-auto w-100">
                        <li class="menu-label mt-2">
                            <span>Main</span>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">
                                <i class="iconoir-report-columns menu-icon"></i>
                                <span>Dashboard</span>
                                <span class="badge text-bg-info ms-auto">New</span>
                            </a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('payment') }}">
                                <i class="iconoir-hand-cash menu-icon"></i>
                                <span>Payment</span>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#sidebarTransactions" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarTransactions">
                                <i class="iconoir-task-list menu-icon"></i>
                                <span>Transactions</span>
                            </a>
                            <div class="collapse " id="sidebarTransactions">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="transactions.html">Overview</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="new-transaction.html">Add Transactions</a>
                                    </li>
                                </ul>
                            </div>
                        </li> --}}
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="cards.html">
                                <i class="iconoir-credit-cards menu-icon"></i>
                                <span>Cards</span>
                                <span class="badge text-bg-pink ms-auto">03</span>
                            </a>
                        </li><!--end nav-item--> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('texes') }}">
                                <i class="iconoir-plug-type-l menu-icon"></i>
                                <span>Texes</span>
                            </a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('user') }}">
                                <i class="iconoir-group menu-icon"></i>
                                <span>Users</span>
                            </a>
                        </li><!--end nav-item-->

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('chat') }}">
                                <i class="iconoir-chat-bubble menu-icon"></i>
                                <span>Chat</span>
                            </a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('contact') }}">
                                <i class="iconoir-community menu-icon"></i>
                                <span>Contact List</span>
                            </a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('calender') }}">
                                <i class="iconoir-calendar menu-icon"></i>
                                <span>Calendar</span>
                            </a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('invonce') }}">
                                <i class="iconoir-paste-clipboard menu-icon"></i>
                                <span>Invoice</span>
                            </a>
                        </li><!--end nav-item-->

                        <li class="menu-label mt-2">
                            <small class="label-border">
                                <div class="border_left hidden-xs"></div>
                                <div class="border_right"></div>
                            </small>
                            <span>Components</span>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarForms" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarForms">
                                <i class="iconoir-cube-hole menu-icon"></i>
                                <span>Forms</span>
                            </a>
                            <div class="collapse " id="sidebarForms">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('basic-form') }}">Basic Elements</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="forms-advanced.html">Advance Elements</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('form-validation') }}">Validation</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('wizard') }}">Wizard</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('editor') }}">Editors</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('form-upload') }}">File Upload</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('image-crop') }}">Image Crop</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end startbarForms-->
                        </li><!--end nav-item-->


                        <!-- authentication -->

                       <li class="nav-item">
                        <a class="nav-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarAuth">
                            <i class="iconoir-cube-hole menu-icon"></i>
                            <span>Authentication</span>
                        </a>
                        <div class="collapse" id="sidebarAuth">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('authenticate-users') }}">Login Details</a>
                                </li><!--end nav-item-->
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="{{ url('register-users') }}">Register Details</a>
                                </li><!--end nav-item--> --}}
                            </ul><!--end nav-->
                        </div><!--end sidebarAuth-->
                    </li>


                    </ul><!--end navbar-nav--->
                    {{-- <div class="update-msg text-center">
                        <div class="d-flex justify-content-center align-items-center thumb-lg update-icon-box  rounded-circle mx-auto">
                            <!-- <i class="iconoir-peace-hand h3 align-self-center mb-0 text-primary"></i> -->
                             <img src="assets/images/extra/gold.png" alt="" class="" height="45">
                        </div>
                        <h5 class="mt-3">Today's <span class="text-white">$2450.00</span></h5>
                        <p class="mb-3 text-muted">Today's best Investment for you.</p>
                        <a href="javascript: void(0);" class="btn text-primary shadow-sm rounded-pill px-3">Invest Now</a>
                    </div> --}}
                </div>
            </div><!--end startbar-collapse-->
        </div><!--end startbar-menu-->
    </div><!--end startbar-->
