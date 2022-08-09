<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Zerro</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/assets/img/" rel="icon">
    <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- CSS only boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">


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

    <!-- =======================================================
  * Template Name: Groovin - v4.7.1
  * Template URL: https://bootstrapmade.com/groovin-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="/">{{ $navbar->name }}</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">{{ $navbar->perexod1 }}</a></li>
                    <li><a class="nav-link scrollto" href="#about">{{ $navbar->perexod2 }}</a></li>
                    <li><a class="nav-link scrollto" href="#services">{{ $navbar->perexod3 }}</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">{{ $navbar->perexod4 }}</a></li>
                    <li><a class="nav-link scrollto" href="#team">{{ $navbar->perexod5 }}</a></li>
                    <li><a class="nav-link scrollto" href="#contact">{{ $navbar->perexod6 }}</a></li>
                    <!--<li><a href="blog.html">Blog</a></li>-->

                    {{-- <!--Туры начало dropdown-->
                    <li class="dropdown"><a href="#"><span>Туры</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li class="dropdown"><a href="#"><span>Гамсутль</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">На одного</a></li>
                                    <li><a href="#">На двоих</a></li>
                                    <li><a href="#">На троих</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><span>Сулак.Каньон</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">На одного</a></li>
                                    <li><a href="#">На двоих</a></li>
                                    <li><a href="#">На троих</a></li>
                                </ul>
                            </li>

                            <li class="dropdown"><a href="#"><span>Ирганайской ГЭС</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">На одного</a></li>
                                    <li><a href="#">На двоих</a></li>
                                    <li><a href="#">На троих</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><span>Гуниб</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">На одного</a></li>
                                    <li><a href="#">На двоих</a></li>
                                    <li><a href="#">На троих</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><span>Чиркейское водохранилище</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">На одного</a></li>
                                    <li><a href="#">На двоих</a></li>
                                    <li><a href="#">На троих</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!--Туры начало dropdown--> --}}
                </ul>

                <button class="btn btn-outline-success ms-5 text-light py-2 px-4 fw-bold" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">{{ $navbar->namebtn }}</button>
            </nav><!-- .navbar -->



        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
                <div class="carousel-inner" role="listbox">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                        {{-- <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#carouselExampleCaptions"
                                                    data-bs-slide-to="0" class="active" aria-current="true"
                                                    aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#carouselExampleCaptions"
                                                    data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#carouselExampleCaptions"
                                                    data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            </div> --}}
                        <div class="carousel-inner">
                            <?php
                            $count = 0;
                            ?>
                            @foreach ($carusel as $item)
                                <div class="carousel-item @if ($count == 0) active @endif">
                                    <img style="height:100%; object-fit: cover;"
                                        src="public/storage/carusel/{{ $item->img }}" class="d-block w-100"
                                        alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>{{ $item->name }}</h5>
                                        <p>
                                            {{ $item->description }}
                                        </p>
                                    </div>
                                </div>
                                <?php
                                $count = 1;
                                ?>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row no-gutters">
                    <div style="background: url(' /public/storage/about/{{ $about_section_one->img }}') center center
                        no-repeat;"
                        class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start">
                    </div>
                    <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch ">
                        <div class="content d-flex flex-column justify-content-center px-3 px-lg-0">
                            <h3>{{ $about_section_one->slogan }}</h3>
                            <p>
                                {{ $about_section_one->description }}
                            </p>
                            <div class="row">
                                <div class="col-md-6 icon-box">
                                    <i class="{{ $about_section_one->icon1 }}"></i>
                                    <h4>{{ $about_section_one->text1 }}</h4>
                                    <p>{{ $about_section_one->opisanie1 }}</p>
                                </div>
                                <div class="col-md-6 icon-box">
                                    <i class="{{ $about_section_one->icon2 }}"></i>
                                    <h4>{{ $about_section_one->text2 }}</h4>
                                    <p>{{ $about_section_one->opisanie2 }}</p>
                                </div>
                                <div class="col-md-6 icon-box">
                                    <i class="{{ $about_section_one->icon3 }}"></i>
                                    <h4>{{ $about_section_one->text3 }}</h4>
                                    <p>{{ $about_section_one->opisanie3 }}</p>
                                </div>
                                <div class="col-md-6 icon-box">
                                    <i class="{{ $about_section_one->icon4 }}"></i>
                                    <h4>{{ $about_section_one->text4 }}</h4>
                                    <p>{{ $about_section_one->opisanie4 }}</p>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row no-gutters">

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="{{ $about_section_two->icon1 }}"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{ $about_section_two->text1 }}"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>{{ $about_section_two->opisanie1 }}</strong></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="{{ $about_section_two->icon2 }}"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{ $about_section_two->text2 }}"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>{{ $about_section_two->opisanie2 }}</strong></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="{{ $about_section_two->icon3 }}"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{ $about_section_two->text3 }}"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>{{ $about_section_two->opisanie3 }}</strong></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="{{ $about_section_two->icon4 }}"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{ $about_section_two->text4 }}"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>{{ $about_section_two->opisanie4 }}</strong></p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->


        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>{{ $servise->slogan }}</h2>
                    <p>{{ $servise->description }}</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 icon-box">
                        <div class="icon"><i class="{{ $servise->icon1 }}"></i></div>
                        <h4 class="title"><a href="">{{ $servise->text1 }}</a></h4>
                        <p class="description">{{ $servise->opisanie1 }}</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box">
                        <div class="icon"><i class="{{ $servise->icon2 }}"></i></div>
                        <h4 class="title"><a href="">{{ $servise->text2 }}</a></h4>
                        <p class="description">{{ $servise->opisanie2 }}</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box">
                        <div class="icon"><i class="{{ $servise->icon3 }}"></i></div>
                        <h4 class="title"><a href="">{{ $servise->text3 }}</a></h4>
                        <p class="description">{{ $servise->opisanie3 }}</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box">
                        <div class="icon"><i class="{{ $servise->icon4 }}"></i></div>
                        <h4 class="title"><a href="">{{ $servise->text4 }}</a></h4>
                        <p class="description">{{ $servise->opisanie4 }}</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box">
                        <div class="icon"><i class="{{ $servise->icon5 }}"></i></div>
                        <h4 class="title"><a href="">{{ $servise->text5 }}</a></h4>
                        <p class="description">{{ $servise->opisanie5 }}</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box">
                        <div class="icon"><i class="{{ $servise->icon6 }}"></i></div>
                        <h4 class="title"><a href="">{{ $servise->text6 }}</a></h4>
                        <p class="description">{{ $servise->opisanie6 }}</p>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">

                <div class="section-title">
                    <h2>{{ $servise_section_one->slogan }}</h2>
                    <p>{{ $servise_section_one->description }}</p>
                </div>

                <div class="row">
                    @foreach ($servise_section_two as $item)
                        <div class="col-lg-4 mt-4 mt-lg-0">
                            <div class="box">
                                <h4>{{ $item->name }}</h4>
                                <p>{{ $item->description }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title">
                    <h2>Галерея</h2>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">Все</li>
                            @foreach ($gallery as $item)
                                <li data-filter=".filter-{{ $item->id }}">{{ $item->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">

                    @foreach ($gallery_card as $card)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $card->tab }}">
                            <div class="portfolio-wrap">
                                <img src="/public/storage/card/{{ $card->img }}" class="img-fluid"
                                    style="height: 250px; object-fit:cover;" alt="">
                                <div class="portfolio-info">
                                    <h4>{{ $card->name }}</h4>
                                    <div class="portfolio-links">
                                        <a href="/public/storage/card/{{ $card->img }}"
                                            data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i
                                                class="bx bx-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section>
        <!-- End Portfolio Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title">
                    <h2>{{ $team_name->worker }}</h2>
                    <p>{{ $team_name->description }}</p>
                </div>

                <div class="row">
                    @foreach ($team as $item)
                        <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.2s">
                            <div class="member">
                                <img src="public/storage/team/{{ $item->img }}"
                                    style="height: 250px; object-fit:cover;" class="img-fluid" alt="">
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h4>{{ $item->name }}</h4>
                                        <span>{{ $item->opisanie }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= hotel Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title">
                    <h2>Гостиница</h2>
                    <p>Мы подготовили для вас собственный ночлег<br> "Парус" - это отель в котором вы можете остаться с
                        комфортом</p>
                </div>

                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-0 pt-lg-4 pt-md-3 g-md-4">
                    @foreach ($number as $item_card)
                        <div class="col-lg-4 col-md-6 mt-1" data-wow-delay="0.2s">
                            <div class="card border-0">
                                <img src="public/storage/number/{{ $item_card->img }}" style="object-fit:cover"
                                    height="250px" class="card-img-top rounded-top" alt="...">
                                <div class="rounded-bottom d-flex bg-secondary text-white px-3 gap-4 card_overflow">
                                    @foreach ($number_icon->where('list', $item_card->id) as $card_icon)
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
                                    <div class="d-flex">
                                        <h5 class="card-title">{{ $item_card->name }}</h5>
                                        <a href="/number_about{{ $item_card->id }}"
                                            class="btn btn-warning ms-auto">Подробнее</a>
                                    </div>
                                    <p class="card-text">{{ $item_card->description }}</p>
                                    <p class="fw-bold text-success fs-4">от
                                        {{ $item_card->price }}/{{ $item_card->date }}</p>
                                    <button class="btn btn-primary w-100">Забронировать</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End hotel Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing px-3">
            <div class="container">

                <div class="section-title">
                    <h2>{{ $price->price }}</h2>
                    <p>{{ $price->description }}</p>
                </div>

                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-5">
                    @foreach ($price_card as $item_card)
                        <div class="col-lg-4 col-md-6">
                            <div class="box">
                                <h3>{{ $item_card->rate }}</h3>
                                <h4><sup>₽</sup>{{ $item_card->rubl }}<span> / {{ $item_card->date }}</span></h4>
                                <h3>{{ $item_card->investment }}</h3>
                                <ul>
                                    @foreach ($price_one->where('tab', $item_card->id) as $card)
                                        <li>{{ $card->name }}</li>
                                    @endforeach
                                </ul>
                                <div class="btn-wrap">
                                    <a href="#contact" class="btn-buy">{{ $item_card->booking }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>{{ $connection->connection }}</h2>
                    <p>{{ $connection->description }}</p>
                </div>

                <div class="row contact-info">

                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Адресс</h3>
                            <address>{{ $connection->address }}</address>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="bi bi-phone"></i>
                            <h3>Наш телефон</h3>
                            <p><a href="tel:{{ $connection->phone }}">{{ $connection->phone }}</a></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="bi bi-envelope"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:{{ $connection->email }}">{{ $connection->email }}</a></p>
                        </div>
                    </div>

                </div>
                {{-- алерт для вывода инфы об успешном изменении --}}
                @if (session('success'))
                    <div class="alert alert-success text-success  alert-dismissible fade show" role="alert">
                        <div class="fs-1 text-center"><i class="bi bi-check2-circle"></i></div>
                        <div class="text-center">{{ session('success') }}</div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                @endif
                <div class="form" id="form_contact">
                    <form action="/contact_add" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" placeholder="Имя">
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="tel" class="form-control" name="tel" placeholder="Номер">
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" placeholder="Сообщение"></textarea>
                        </div>
                        <div class="text-center mt-2">
                            <button style="background-color: #5c9f24" class="btn text-white px-3 py-2">Оставить
                                заявку</button>
                        </div>
                    </form>
                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-6">
                        <div class="footer-info">
                            <h3>{{ $navbar->name }}</h3>
                            <p>
                                {{ $connection->address }} <br>
                                <br><br>
                                <strong>Тел:</strong> {{ $connection->phone }}<br>
                                <strong>Email:</strong> {{ $connection->email }}<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="https://wa.me/{{ $connection->whatsapp }}?text=Здравствуйте"
                                    class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
                                <a href="tg://msg?text=<?php echo urlencode('Здравствуйте'); ?>&to=<{{ $connection->telegram }}>"
                                    class="telegram"><i class="bx bxl-telegram"></i></a>
                                <a href="{{ $connection->instagram }}" class="instagram"><i
                                        class="bx bxl-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 footer-links">
                        <h4>Перейти</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#hero">{{ $navbar->perexod1 }}</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#about">{{ $navbar->perexod2 }}</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#services">{{ $navbar->perexod3 }}</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a
                                    href="#portfolio">{{ $navbar->perexod4 }}</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#team">{{ $navbar->perexod5 }}</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#contact">{{ $navbar->perexod6 }}</a>
                            </li>
                        </ul>
                    </div>



                    <div class="container">
                        <div class="copyright">
                            &copy; Optimus create <strong><span>{{ $navbar->name }}</span></strong>. by Mark
                        </div>
                        <div class="credits">
                            <!-- All the links in the footer should remain intact. -->
                            <!-- You can delete the links only if you purchased the pro version. -->
                            <!-- Licensing information: https://bootstrapmade.com/license/ -->
                            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/groovin-free-bootstrap-theme/ -->
                            <a href="#">site Optimus</a>
                        </div>
                    </div>
    </footer><!-- End Footer -->

    <div class="back-to-top d-flex">
        <button class="btn btn-danger fw-bold me-1 modal-call" data-bs-toggle="modal"
            data-bs-target="#exampleModal">Бронировать</button>
        <a class="btn modal-call" href="#"><i class="bi bi-arrow-up-square text-success"></i></a>
    </div>

    <!-- Modal Окно Связаться-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Как с нами Связаться</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex flex-column">
                        АДРЕС: Дагестан г.Дербент
                        ул.Ленина 23<br>
                        Тел: 8 (985) 887 75 34 <br>
                        Email: dagtrevel@example.com
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Ок</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Окно Связаться конец-->



    <!-- Vendor JS Files -->
    <script src="/assets/vendor/purecounter/purecounter.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/vendor/php-email-form/validate.js"></script>


    <!-- Template Main JS File -->
    <script src="/assets/js/main.js"></script>

</body>

</html>
