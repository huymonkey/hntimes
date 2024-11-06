
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from polygons.space/neptune/source/templates/admin1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Sep 2024 14:25:45 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Neptune</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="/admin/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/admin/assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="/admin/assets/plugins/pace/pace.css" rel="stylesheet">
    @stack('css_library')

    <!-- Theme Styles -->
    <link href="/admin/assets/css/main.min.css" rel="stylesheet">
    <link href="/admin/assets/css/custom.css" rel="stylesheet">
    @stack('css')

    <link rel="icon" type="image/png" sizes="32x32" href="/admin/assets/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/admin/assets/images/neptune.png" />


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="app align-content-stretch d-flex flex-wrap">
        <div class="app-sidebar">
            @include('admin.layouts.components.slidebar')
        </div>
        <div class="app-container">
            <div class="app-header">
                @include('admin.layouts.components.header')
            </div>
            <div class="app-content">
                <div class="content-wrapper">
                    <!-- CONTENT -->
                    @yield('content')

                </div>
            </div>
        </div>
    </div>

    <!-- Javascripts Library -->
    <script src="/admin/assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="/admin/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="/admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/admin/assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="/admin/assets/plugins/pace/pace.min.js"></script>
    <script src="/admin/assets/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @stack('js_library')

    <!-- Javascripts -->
    <script src="/admin/assets/js/main.min.js"></script>
    <script src="/admin/assets/js/custom.js"></script>
    <script>
        @if (session('alert') && session('alert') == 'login-success')
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: 'Login successfully !',
            });
        @endif

        $('#btn-logout').on('click', function () {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: "btn btn-success",
                    cancelButton: "btn btn-danger"
                },
                buttonsStyling: 'me-2'
            });
            swalWithBootstrapButtons.fire({
                title: "Do you want logout?",
                icon: "question",
                showCancelButton: true,
                confirmButtonText: "Yes",
                cancelButtonText: "No, cancel!",
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#form-logout').submit();
                }
            });
        })
    </script>
    @stack('js')

</body>

<!-- Mirrored from polygons.space/neptune/source/templates/admin1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Sep 2024 14:25:45 GMT -->
</html>
