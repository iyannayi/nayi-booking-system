<!DOCTYPE html>
<html lang="en">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Multi-purpose admin dashboard template that especially build for programmers.">
    <title>Booking System | {{ $tittle }}</title>
    <link rel="shortcut icon" href="/images/favicon.png">
    <link rel="stylesheet" href="/assets/css/style.css?v1.1.2">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet"/>

</head>

<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg">
    <!-- Root -->
    <div class="nk-app-root">
        <!-- main  -->
        <div class="nk-main">
            @include('partial.navbar')
            
            
            <!-- .nki-sidebar -->
            <!-- sidebar @e -->
            <!-- wrap -->
            <div class="nk-wrap">
                <!-- include Header  -->
                @include('partial.header')
                <!-- header -->
                <!-- content -->
                <div class="nk-content">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                @yield('container')
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .nk-content -->
                <!-- include Footer -->
                @include('partial.footer')
                <!-- .nk-footer -->
            </div> <!-- .nk-wrap -->
        </div> <!-- .nk-main -->
    </div> <!-- .nk-app-root -->
</body>
<!-- JavaScript -->
@include('partial.javascript')
@include('list-user.javascript')


</html>
