<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Подробнее о номере</title>
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">



    <!-- Template Main CSS File -->
    <link href="/assets/css/style.css" rel="stylesheet">

    {{-- AOS js animation --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/assets_layout/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/main.css">

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
</head>

<body>
    <div class="main number_about_img">
        <section class="d-flex justify-content-center number_about_img_shadow">
            <div class="container">
                <h1 class="text-center fw-bold text-light">Подробнее о номере</h1>
                <div class="d-flex">
                    <div></div>
                    <div></div>
                    <a href="/" class="ms-auto py-3 pe-4 px-4 text-decoration-none text-white fs-1"><i
                            class="bi bi-x-lg"></i></a>
                </div>
                <div class="row row-cols-1">
                    <div class="col-12">
                        <div style="-webkit-box-shadow: 0px 0px 38px 18px rgba(7, 202, 185, 0.2);
                            -moz-box-shadow: 0px 0px 38px 18px rgba(7, 202, 185, 0.2);
                            box-shadow: 0px 0px 38px 18px rgba(7, 202, 185, 0.2);"
                            class="card border-0 ">
                            {{-- Начало карусели --}}
                            <div class="hero-container ">
                                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                                    <div class="carousel-inner rounded-top">
                                        <?php
                                        $count = 0;
                                        ?>
                                        @foreach ($number_img->where('tab', $number->id) as $card_img)
                                            <div class="carousel-item @if ($count == 0) active @endif">
                                                <img style="object-fit:cover"
                                                    src="/public/storage/number_img/{{ $card_img->img }}"
                                                    class="d-block w-100 card_number_about" alt="...">
                                            </div>
                                            <?php
                                            $count = 1;
                                            ?>
                                        @endforeach
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            {{-- конец карусели --}}
                            <div class="rounded-bottom d-flex bg-secondary text-white px-3 gap-4 card_overflow">
                                @foreach ($number_icon->where('list', $number->id) as $card_icon)
                                    <div>
                                        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="{{ $card_icon->description }}">
                                            <span class="material-icons align-middle">
                                                {{ $card_icon->name }}
                                            </span>
                                        </button>
                                    </div>
                                @endforeach
                            </div>
                            <div class="card-body">
                                <h5 class="card-title fs-3">{{ $number->name }}</h5>
                                <p class="card-text fs-5">{{ $number->description }}</p>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1"
                                    role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Что
                                    входит</a>
                                <div class="row mt-2">
                                    <div class="col">
                                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                                            <div class="card d-flex flex-column">
                                                <ul>
                                                    @foreach ($addition_one->where('addition', $number->id) as $card_addition)
                                                        <div class="d-flex gap-2 mt-3">
                                                            <li class="pt-2">
                                                                {{ $card_addition->name }}</li>
                                                        </div>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample2"
                                    role="button" aria-expanded="false"
                                    aria-controls="multiCollapseExample2">Питание</a>
                                <div class="row mt-2">
                                    <div class="col">
                                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                                            <div class="card d-flex flex-column">
                                                <ul>
                                                    @foreach ($addition_two->where('addition_two', $number->id) as $card_addition_two)
                                                        <div class="d-flex gap-2 mt-3">
                                                            <li class="pt-2">
                                                                {{ $card_addition_two->name }}
                                                            </li>
                                                        </div>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample3"
                                    role="button" aria-expanded="false"
                                    aria-controls="multiCollapseExample3">Доп.Услуги</a>
                                <div class="row mt-2">
                                    <div class="col">
                                        <div class="collapse multi-collapse" id="multiCollapseExample3">
                                            <div class="card d-flex flex-column">

                                                <ul>
                                                    @foreach ($addition_three->where('addition_three', $number->id) as $card_addition_three)
                                                        <div class="d-flex gap-2 mt-3">
                                                            <li class="pt-2">
                                                                {{ $card_addition_three->name }}
                                                            </li>
                                                        </div>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


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
