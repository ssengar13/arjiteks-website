<?php
session_start();
$page = "";
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}
$filename = basename($_SERVER['REQUEST_URI']);
if (strpos($filename, "?")) {
    $tmp_filename = explode("?", $filename);
    $filename = $tmp_filename[0];
}
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">

    <title>Voicebot Technologies Pvt. Ltd</title>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->
    <style>
        .mobileshow {
            display: none;
        }

        @media screen and (max-width: 500px) {
            .mobileshow {
                display: block;
            }
        }
    </style>
    <script>
        window.onload = () => {
            if (window.innerWidth < 500) {
                document.getElementById("mobile_only").innerHTML = `
                <nav class="header-navbar mobileshow navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
      </div>
    </nav>
                `;
                document.getElementById("mobile_only").removeAttribute("style");

            } else {
                document.querySelector(".header-navbar-shadow").remove();
                document.querySelector(".content-overlay").remove();
                document.querySelector(".content-wrapper").setAttribute("style", "margin-top:-80px;");
                document.getElementById("mobile_only").remove();
            }
            // alert(window.innerWidth);
        }
    </script>
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <header id="mobile_only" style="display:none;">

    </header>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="../../../starter-kit/ltr/vertical-menu-template/"><span class="brand-logo">
                            <h2 class="brand-text">Blogs</h2>
                    </a>
                </li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">


                <li class="<?php if ($filename == "dashboard.php") {
                                echo "active";
                            } ?> nav-item"><a class="d-flex align-items-center" href="dash.php"><i data-feather="dashboard"></i><span class="menu-title text-truncate" data-i18n="leads">Dashboard</span></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->