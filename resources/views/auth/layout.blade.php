<!DOCTYPE html>
<html lang="en">

<head>
    <title>Material Able bootstrap admin template by Codedthemes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('theme')}}/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{asset('theme')}}/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('theme')}}/assets/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('theme')}}/assets/icon/themify-icons/themify-icons.css">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="{{asset('theme')}}/assets/css/font-awesome-n.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('theme')}}/assets/css/font-awesome.min.css">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('theme')}}/assets/css/jquery.mCustomScrollbar.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('theme')}}/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{asset('manual')}}/css/style.css">
</head>

<body>
    @include('dashboard.partials.preloader')
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            @yield('content')
        </div>
    </div>
   

    <!-- Required Jquery -->
    <script type="text/javascript" src="{{asset('theme')}}/assets/js/jquery/jquery.min.js "></script>
    <script type="text/javascript" src="{{asset('theme')}}/assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="{{asset('theme')}}/assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="{{asset('theme')}}/assets/js/bootstrap/js/bootstrap.min.js "></script>
    <!-- waves js -->
    <script src="{{asset('theme')}}/assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{asset('theme')}}/assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- slimscroll js -->
    <script src="{{asset('theme')}}/assets/js/jquery.mCustomScrollbar.concat.min.js "></script>

    <!-- menu js -->
    <script src="{{asset('theme')}}/assets/js/pcoded.min.js"></script>
    <script src="{{asset('theme')}}/assets/js/vertical/vertical-layout.min.js "></script>

    <script type="text/javascript" src="{{asset('theme')}}/assets/js/script.js "></script>
 

</body>

</html>
