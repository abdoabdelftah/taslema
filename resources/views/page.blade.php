<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/chartist/chartist.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/demo_1/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />



    <link rel="stylesheet" href="{{ asset('assets/vendors/dropzone/dropzone.css') }}">



    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

</head>

<body class="rtl">
    <div class="container-scroller">
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">

                <a class="navbar-brand brand-logo-mini" href="{{ url('/grades') }}"><img
                        src="{{ asset('assets/images/test.png') }}" alt="logo" /></a>
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center">

                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        <div class="container-fluid page-body-wrapper">
            <div id="settings-trigger"><i class="icon-settings"></i></div>
            <div id="theme-settings" class="settings-panel">
                <i class="settings-close icon-close"></i>
                <p class="settings-heading">جلود الشريط الجانبي</p>
                <div class="sidebar-bg-options selected" id="sidebar-default-theme">
                    <div class="img-ss rounded-circle bg-dark border mr-3"></div>الإفتراضي
                </div>
                <div class="sidebar-bg-options" id="sidebar-light-theme">
                    <div class="img-ss rounded-circle bg-light border mr-3"></div>ضوء
                </div>
                <p class="settings-heading mt-2">لون الرأس</p>
                <div class="color-tiles mx-0 px-4">
                    <div class="tiles dark"></div>
                    <div class="tiles default light"></div>
                </div>
            </div>
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item navbar-brand-mini-wrapper">
                    </li>
                    <li class="nav-item nav-profile">
                        <a href="#" class="nav-link">
                            <div class="profile-image">
                            </div>
                            <div class="text-wrapper">

                                <p class="designation"></p>
                            </div>
                            <div class="icon-container">

                            </div>
                        </a>
                    </li>
                    <li class="nav-item nav-category">
                        <span class="nav-link">لوحة القيادة</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('orders') }}">
                            <span class="menu-title">الطلبات</span>
                            <i class="icon-screen-desktop menu-icon"></i>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('page2') }}">
                            <span class="menu-title">صفحة 2</span>
                            <i class="icon-screen-desktop menu-icon"></i>
                        </a>
                    </li>

                </ul>
            </nav>





            <div class="main-panel">
                <div class="content-wrapper">
                    <!-- Quick Action Toolbar Starts-->

                    <!-- Quick Action Toolbar Ends-->

                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="card">
                                <div class="card-body">





                                    <form method="POST" action="#" class="pt-3">
                                        @csrf

                                        <div id="demo">

                                            <div class="form-group">
                                                <label>الارقام : </label>
                                                <input type="text" name="nums" id="nums"
                                                    class="form-control">
                                            </div>



                                            <div class="mt-3">
                                                <button
                                                    class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                                                    type="submit" id="ajaxform">
                                                    ارسال
                                                </button>

                                            </div>

                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>








                </div>
            </div>
        </div>


        <!-- content-wrapper ends -->
    </div>
    </div>
    </div>
    </div>








    </div>
    </div>
    </div>


    <!-- content-wrapper ends -->

    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- <script>
        function loadDoc() {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                document.getElementById("demo").innerHTML = this.responseText;
            }
            xhttp.open("POST", "/mathapi");
            xhttp.send();
        }
    </script> -->

    <script>
        $(document).ready(function() {
            $("form").submit(function(event) {
                var formData = {
                    nums: $("#nums").val(),


                };

                $.ajax({
                    type: "POST",
                    url: "http://localhost/taslema/public/api/mathapi",
                    data: formData,
                    dataType: "json",
                    encode: true,
                }).done(function(data) {

                    $("form").html(
                        '<div class="alert alert-success">' + data.MinPositive + "</div>"
                    );

                });

                event.preventDefault();
            });
        });
    </script>

    <!-- plugins:js -->
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/vendors/chartist/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/js/misc.js') }}"></script>
    <script src="{{ asset('assets/js/settings.js') }}"></script>
    <script src="{{ asset('assets/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/file-upload.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead.js') }}"></script>
    <script src="{{ asset('assets/js/select2.js') }}"></script>
    <!-- End custom js for this page -->




    <script src="{{ asset('assets/vendors/dropzone/dropzone.js') }}"></script>
    <script src="{{ asset('assets/js/dropzone.js') }}"></script>

</body>





</html>
