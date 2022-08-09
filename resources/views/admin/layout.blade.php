<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Amin Panel</title>

    <!-- Favicons -->
    {{-- <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/assets_layout/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets_layout/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets_layout/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets_layout/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="/assets_layout/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="/assets_layout/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/assets_layout/vendor/simple-datatables/style.css" rel="stylesheet">


    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    {{-- google icon --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/assets/css/style.css" rel="stylesheet">

    {{-- AOS js animation --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/assets_layout/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/main.css">
</head>

<body>
    <!-- ======= Header ======= -->
    <header style="background-color: rgb(255, 255, 255)" id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="/admin" class="logo d-flex align-items-center">
                <img src="assets_layout/img/mark2.png" alt="">
                <span class="d-none d-lg-block">Admin Panel</span>
            </a>
            <i id="menu" class="bi bi-list toggle-sidebar-btn d-laptop-none"></i>
        </div><!-- End Logo -->

    </header><!-- End Header -->


    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Навбар</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/navbar">
                            <i class="bi bi-circle"></i><span>Переходы</span>
                        </a>
                    </li>
                    <li>
                        <a href="/carusel_navbar">
                            <i class="bi bi-circle"></i><span>Карусель</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Components Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>О нас</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/about_section_one">
                            <i class="bi bi-circle"></i><span>Первая Секция</span>
                        </a>
                    </li>
                    <li>
                        <a href="/about_section_two">
                            <i class="bi bi-circle"></i><span>Вторая Секция</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Forms Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Сервис</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/servise">
                            <i class="bi bi-circle"></i><span>Основное</span>
                        </a>
                    </li>
                    <li>
                        <a href="/servise_section_one">
                            <i class="bi bi-circle"></i><span>Первая секция</span>
                        </a>
                    </li>
                    <li>
                        <a href="/servise_section_two">
                            <i class="bi bi-circle"></i><span>Вторая секция</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Tables Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-images"></i><span>Галерея</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/gallery">
                            <i class="bi bi-circle"></i><span>Основное</span>
                        </a>
                    </li>
                    {{-- <li>
                        <a href="charts-apexcharts.html">
                            <i class="bi bi-circle"></i><span>ApexCharts</span>
                        </a>
                    </li> --}}
                    {{-- <li>
                        <a href="charts-echarts.html">
                            <i class="bi bi-circle"></i><span>ECharts</span>
                        </a>
                    </li> --}}
                </ul>
            </li><!-- End Charts Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-person"></i><span>Сотрудники</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/team">
                            <i class="bi bi-circle"></i><span>Основное</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Icons Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#price-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-collection"></i><span>Тариф</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="price-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/price">
                            <i class="bi bi-circle"></i><span>Основное</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Icons Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#connection-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-telephone"></i><span>Связь</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="connection-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/connection">
                            <i class="bi bi-circle"></i><span>Основное</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Icons Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#network-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-messenger"></i><span>Соц.сети</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="network-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/network">
                            <i class="bi bi-circle"></i><span>Основное</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Icons Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#number-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-door-closed"></i><span>Номер</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="number-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/number">
                            <i class="bi bi-circle"></i><span>Основное</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Icons Nav -->

        </ul>

    </aside><!-- End Sidebar-->

    @yield('content')


    <script>
        menu.click()
    </script>


    <!-- Vendor JS Files -->
    <script src="/assets_layout/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="/assets_layout/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets_layout/vendor/chart.js/chart.min.js"></script>
    <script src="/assets_layout/vendor/echarts/echarts.min.js"></script>
    <script src="/assets_layout/vendor/quill/quill.min.js"></script>
    <script src="/assets_layout/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="/assets_layout/vendor/tinymce/tinymce.min.js"></script>
    <script src="/assets_layout/vendor/php-email-form/validate.js"></script>


    {{-- AOS js animation --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="/assets_layout/js/main.js"></script>
</body>

</html>
