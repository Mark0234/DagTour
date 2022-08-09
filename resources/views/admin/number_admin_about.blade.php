@extends('admin.layout')
@section('content')
    <section class="main-block pb-4 pt-2">
        <div class="d-flex justify-content-center mt-5">
            <div class="mt-4">
                <div class="container">
                    <div class="row row-cols-1 row-cols-lg-12 mt-3">
                        <a href="/number" class="btn text-dark fs-4"><i class="bi bi-arrow-left-circle"></i> Назад</a>
                        <h1 class="mt-3 text-center">Номер/подробнее о номере</h1>
                        <div class="col bg-light rounded-3" id="main_home">
                            <div class="main bg-light p-lg-4">
                                {{-- алерт для вывода инфы об успешном изменении --}}
                                @if (session('success'))
                                    <div class="alert alert-success text-success mt-2 alert-dismissible fade show"
                                        role="alert">
                                        <div class="fs-1 text-center"><i class="bi bi-check2-circle"></i></div>
                                        <div class="text-center">{{ session('success') }}</div>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                                <div class="container mt-4">
                                    <div class="row row-cols-1">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header bg-primary px-3 rounded-bottom"
                                                            id="flush-heading{{ $number->id }}">
                                                            <button class="accordion-button collapsed d-flex" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#flush-collapse{{ $number->id }}"
                                                                aria-expanded="false"
                                                                aria-controls="flush-collapse{{ $number->id }}">
                                                                <span
                                                                    class="ms-auto  py-lg-2 py-md-2 px-2 rounded-3 text-white fs-5 fw-bold">Фотогалерея</span>
                                                            </button>
                                                        </h2>
                                                        <div id="flush-collapse{{ $number->id }}"
                                                            class="accordion-collapse collapse"
                                                            aria-labelledby="flush-heading{{ $number->id }}"
                                                            data-bs-parent="#accordionFlushExample">
                                                            <div class="accordion-body">
                                                                {{-- Начало карусели --}}
                                                                <div class="hero-container">
                                                                    <div id="carouselExampleCaptions" class="carousel slide"
                                                                        data-bs-ride="false">
                                                                        <div class="carousel-inner">
                                                                            <?php
                                                                            $count = 0;
                                                                            ?>
                                                                            @foreach ($number_img->where('tab', $number->id) as $card_img)
                                                                                <div
                                                                                    class="carousel-item @if ($count == 0) active @endif">
                                                                                    <img style="height:300px; object-fit:cover"
                                                                                        src="/public/storage/number_img/{{ $card_img->img }}"
                                                                                        class="d-block w-100" alt="...">
                                                                                </div>
                                                                                <?php
                                                                                $count = 1;
                                                                                ?>
                                                                            @endforeach
                                                                        </div>
                                                                        <button class="carousel-control-prev" type="button"
                                                                            data-bs-target="#carouselExampleCaptions"
                                                                            data-bs-slide="prev">
                                                                            <span class="carousel-control-prev-icon"
                                                                                aria-hidden="true"></span>
                                                                            <span class="visually-hidden">Previous</span>
                                                                        </button>
                                                                        <button class="carousel-control-next" type="button"
                                                                            data-bs-target="#carouselExampleCaptions"
                                                                            data-bs-slide="next">
                                                                            <span class="carousel-control-next-icon"
                                                                                aria-hidden="true"></span>
                                                                            <span class="visually-hidden">Next</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                {{-- конец карусели --}}
                                                                <div class="bg-light">
                                                                    <div class="d-flex justify-content-center">
                                                                        <button class="btn btn-success w-100 text-white"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#exampleModaladdimg{{ $number->id }}"><i
                                                                                class="bi bi-plus-circle me-2"></i>
                                                                            Добавить</button>
                                                                    </div>
                                                                    <div class="container bg-primary">
                                                                        <div
                                                                            class="row row-cols-1 row-cols-md-3 row-cols-lg-3">
                                                                            @foreach ($number_img->where('tab', $number->id) as $card_img)
                                                                                <div class="col-lg-4 col-md-6 mt-3">
                                                                                    <div class="card" style="">
                                                                                        <img style="height: 200px"
                                                                                            src="/public/storage/number_img/{{ $card_img->img }}"
                                                                                            class="card-img-top"
                                                                                            alt="...">
                                                                                        <div
                                                                                            class="d-flex justify-content-center gap-1">
                                                                                            <button data-bs-toggle="modal"
                                                                                                data-bs-target="#exampleModaleditimg{{ $card_img->id }}"
                                                                                                class="btn btn-warning w-50">Изменить</button>
                                                                                            <button data-bs-toggle="modal"
                                                                                                data-bs-target="#exampleModaldeleteimg{{ $card_img->id }}"
                                                                                                class="btn btn-danger w-50 ms-auto">Удалить</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <!-- Modal delete number_img start -->
                                                                                <div class="modal fade"
                                                                                    id="exampleModaldeleteimg{{ $card_img->id }}"
                                                                                    tabindex="-1"
                                                                                    aria-labelledby="exampleModalLabel"
                                                                                    aria-hidden="true">
                                                                                    <div
                                                                                        class="modal-dialog modal-dialog-centered">
                                                                                        <div class="modal-content">
                                                                                            <form
                                                                                                action="/number_admin_about_delete_img/{{ $card_img->id }}"
                                                                                                method="get">
                                                                                                @csrf
                                                                                                <div class="modal-header">
                                                                                                    <button type="button"
                                                                                                        class="btn-close"
                                                                                                        data-bs-dismiss="modal"
                                                                                                        aria-label="Close"></button>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="modal-body bg-light">
                                                                                                    <h3>Вы действительно
                                                                                                        хотите
                                                                                                        удалить?</h3>
                                                                                                </div>
                                                                                                <div class="modal-footer">
                                                                                                    <button
                                                                                                        class="btn btn-danger w-100">Удалить</button>
                                                                                                </div>
                                                                                            </form>
                                                                                            <div class="modal-footer">
                                                                                                <button type="button"
                                                                                                    class="btn btn-secondary"
                                                                                                    data-bs-dismiss="modal">назад</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- Modal delete number_img end-->

                                                                                <!-- Modal edit number_img start -->
                                                                                <div class="modal fade"
                                                                                    id="exampleModaleditimg{{ $card_img->id }}"
                                                                                    tabindex="-1"
                                                                                    aria-labelledby="exampleModalLabel"
                                                                                    aria-hidden="true">
                                                                                    <div
                                                                                        class="modal-dialog modal-dialog-centered">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h5 class="modal-title"
                                                                                                    id="exampleModalLabel">
                                                                                                    Редактирование фото
                                                                                                </h5>
                                                                                                <button type="button"
                                                                                                    class="btn-close"
                                                                                                    data-bs-dismiss="modal"
                                                                                                    aria-label="Close"></button>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <form
                                                                                                    action="/number_admin_about_edit_img/{{ $card_img->id }}"
                                                                                                    method="POST"
                                                                                                    enctype="multipart/form-data">
                                                                                                    @csrf
                                                                                                    <div
                                                                                                        class="d-flex justify-content-center mt-1">
                                                                                                        <input type="file"
                                                                                                            id="floatingInput"
                                                                                                            name="img"
                                                                                                            class="form-control">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="mt-3">
                                                                                                        <button
                                                                                                            class="btn btn-warning w-100">Редактировать</button>
                                                                                                    </div>
                                                                                                </form>
                                                                                            </div>
                                                                                            <div class="modal-footer">
                                                                                                <button type="button"
                                                                                                    class="btn btn-secondary"
                                                                                                    data-bs-dismiss="modal">назад</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- Modal edit number_img  end-->
                                                                            @endforeach
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Modal add number carusel start -->
                                                            <div class="modal fade"
                                                                id="exampleModaladdimg{{ $number->id }}" tabindex="-1"
                                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title bg-dark py-2 px-2 rounded-3 text-light"
                                                                                id="exampleModalLabel">
                                                                                Добавление
                                                                                фото
                                                                            </h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form
                                                                                action="/number_admin_about_add_img/{{ $number->id }}"
                                                                                method="POST" enctype="multipart/form-data">
                                                                                @csrf
                                                                                <div
                                                                                    class="d-flex justify-content-center mt-2">
                                                                                    <input type="file" id="floatingInput"
                                                                                        name="img" class="form-control">
                                                                                </div>
                                                                                <div class="mt-2"><button
                                                                                        class="btn btn-primary w-100 py-2">Добавить</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">назад</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Modal  add number carusel end-->

                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- начало второго аккардиона --}}
                                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header bg-secondary px-3 rounded-bottom"
                                                            id="flush-headingtwo">
                                                            <button class="accordion-button collapsed d-flex" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#flush-collapsetwo" aria-expanded="false"
                                                                aria-controls="flush-collapsetwo">
                                                                <span
                                                                    class="ms-auto  py-lg-2 py-md-2 px-2 rounded-3 text-white fs-5 fw-bold">Иконки</span>
                                                            </button>
                                                        </h2>
                                                        <div id="flush-collapsetwo" class="accordion-collapse collapse "
                                                            aria-labelledby="flush-headingtwo"
                                                            data-bs-parent="#accordionFlushExample">
                                                            <div class="accordion-body">
                                                                <div
                                                                    class="d-flex bg-dark text-white py-4 px-3 gap-4 card_overflow">
                                                                    @foreach ($number_icon->where('list', $number->id) as $card_icon)
                                                                        <div>
                                                                            <button type="button" class="btn btn-secondary"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-placement="bottom"
                                                                                title="{{ $card_icon->description }}">
                                                                                <span class="material-icons align-middle">
                                                                                    {{ $card_icon->name }}
                                                                                </span>
                                                                            </button>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                                <div class="d-flex justify-content-center">
                                                                    <button class="btn btn-success w-100 text-white"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModaladdicon"><i
                                                                            class="bi bi-plus-circle me-2"></i>
                                                                        Добавить</button>
                                                                </div>
                                                                <div class="d-flex flex-column bg-dark card_overflow2">

                                                                    @foreach ($number_icon->where('list', $number->id) as $card_icon)
                                                                        <div
                                                                            class="py-1 mt-3 d-flex justify-content-center gap-3 gap-lg-1">
                                                                            <button type="button" class="btn btn-secondary"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-placement="bottom"
                                                                                title="{{ $card_icon->description }}">
                                                                                <span class="material-icons align-middle">
                                                                                    {{ $card_icon->name }}
                                                                                </span>
                                                                            </button>
                                                                            <button class="btn btn-warning"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#exampleModalediticon{{ $card_icon->id }}"><i
                                                                                    class="bi bi-pencil"></i></button>
                                                                            <button class="btn btn-danger"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#exampleModaldeleteicon{{ $card_icon->id }}"><i
                                                                                    class="bi bi-basket"></i></button>
                                                                        </div>

                                                                        <!-- Modal delete price card start -->
                                                                        <div class="modal fade"
                                                                            id="exampleModaldeleteicon{{ $card_icon->id }}"
                                                                            tabindex="-1"
                                                                            aria-labelledby="exampleModalLabel"
                                                                            aria-hidden="true">
                                                                            <div
                                                                                class="modal-dialog modal-dialog-centered">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <button type="button"
                                                                                            class="btn-close"
                                                                                            data-bs-dismiss="modal"
                                                                                            aria-label="Close"></button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <form
                                                                                            action="/number_admin_about_delete_icon/{{ $card_icon->id }}"
                                                                                            method="get">
                                                                                            @csrf
                                                                                            <div
                                                                                                class="modal-body bg-light">
                                                                                                <h3>Вы действительно хотите
                                                                                                    удалить?
                                                                                                </h3>
                                                                                            </div>
                                                                                            <div>
                                                                                                <button
                                                                                                    class="btn btn-danger w-100">Удалить</button>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button"
                                                                                            class="btn btn-secondary"
                                                                                            data-bs-dismiss="modal">назад</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- Modal delete number icon  end-->

                                                                        <!-- Modal edit number icon start -->
                                                                        <div class="modal fade"
                                                                            id="exampleModalediticon{{ $card_icon->id }}"
                                                                            tabindex="-1"
                                                                            aria-labelledby="exampleModalLabel"
                                                                            aria-hidden="true">
                                                                            <div
                                                                                class="modal-dialog modal-dialog-centered">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title"
                                                                                            id="exampleModalLabel">
                                                                                            Редактирование услуги
                                                                                        </h5>
                                                                                        <button type="button"
                                                                                            class="btn-close"
                                                                                            data-bs-dismiss="modal"
                                                                                            aria-label="Close"></button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <form
                                                                                            action="/number_admin_about_edit_icon/{{ $card_icon->id }}"
                                                                                            method="POST">
                                                                                            @csrf
                                                                                            <div
                                                                                                class="d-flex justify-content-center mt-1 form-floating">
                                                                                                <input type="text"
                                                                                                    value="{{ $card_icon->name }}"
                                                                                                    id="floatingInput"
                                                                                                    name="name"
                                                                                                    class="form-control">
                                                                                                <label
                                                                                                    for="floatingInput">Название
                                                                                                    иконки</label>
                                                                                            </div>
                                                                                            <div
                                                                                                class="d-flex justify-content-center mt-1 form-floating">
                                                                                                <input type="text"
                                                                                                    value="{{ $card_icon->description }}"
                                                                                                    id="floatingInput"
                                                                                                    name="description"
                                                                                                    class="form-control">
                                                                                                <label
                                                                                                    for="floatingInput">Описание
                                                                                                    иконки</label>
                                                                                            </div>
                                                                                            <div class="mt-3">
                                                                                                <button
                                                                                                    class="btn btn-warning w-100">Изменить</button>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button"
                                                                                            class="btn btn-secondary"
                                                                                            data-bs-dismiss="modal">назад</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- Modal edit number icon  end-->
                                                                    @endforeach
                                                                    <!-- Modal add number icon start -->
                                                                    <div class="modal fade" id="exampleModaladdicon"
                                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                        aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title bg-dark py-2 px-2 rounded-3 text-light"
                                                                                        id="exampleModalLabel">
                                                                                        Добавление
                                                                                        иконки и его описания
                                                                                    </h5>
                                                                                    <button type="button"
                                                                                        class="btn-close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"></button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <form
                                                                                        action="/number_admin_about_add_icon/{{ $number->id }}"
                                                                                        method="POST">
                                                                                        @csrf
                                                                                        <div class="form-floating mb-3">
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                name="name"
                                                                                                id="floatingInput"
                                                                                                placeholder="name@example.com">
                                                                                            <label
                                                                                                for="floatingInput">Иконка</label>
                                                                                        </div>
                                                                                        <div class="form-floating mb-3">
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                name="description"
                                                                                                id="floatingInput"
                                                                                                placeholder="name@example.com">
                                                                                            <label
                                                                                                for="floatingInput">Описание</label>
                                                                                        </div>
                                                                                        <div class="mt-2"><button
                                                                                                class="btn btn-primary w-100 py-2">Добавить</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button"
                                                                                        class="btn btn-secondary"
                                                                                        data-bs-dismiss="modal">назад</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Modal  add number icon end-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <h5 class="card-title fs-3">{{ $number->name }}</h5>
                                                        <p class="card-text fs-5">{{ $number->description }}</p>
                                                        <a class="btn btn-primary" data-bs-toggle="collapse"
                                                            href="#multiCollapseExample1" role="button"
                                                            aria-expanded="false" aria-controls="multiCollapseExample1">Что
                                                            входит</a>
                                                        <div class="row mt-2">
                                                            <div class="col">
                                                                <div class="collapse multi-collapse"
                                                                    id="multiCollapseExample1">
                                                                    <div class="card d-flex flex-column">
                                                                        <div class="d-flex justify-content-center">
                                                                            <button
                                                                                class="btn btn-success w-100 py-2 text-white"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#exampleModaladd_addition"><i
                                                                                    class="bi bi-plus-circle me-2"></i>
                                                                                Добавить</button>
                                                                        </div>
                                                                        <ul>
                                                                            @foreach ($addition_one->where('addition', $number->id) as $card_addition)
                                                                                <div class="d-flex gap-2 mt-3">
                                                                                    <li class="pt-2">
                                                                                        {{ $card_addition->name }}</li>
                                                                                    <button data-bs-toggle="modal"
                                                                                        data-bs-target="#exampleModaledit_addition{{ $card_addition->id }}"
                                                                                        class="btn btn-warning"><i
                                                                                            class="bi bi-pencil"></i></button>
                                                                                    <button data-bs-toggle="modal"
                                                                                        data-bs-target="#exampleModaldelete_addition{{ $card_addition->id }}"
                                                                                        class="btn btn-danger"><i
                                                                                            class="bi bi-basket"></i></button>
                                                                                </div>
                                                                                <!-- Modal delete addition_one start -->
                                                                                <div class="modal fade"
                                                                                    id="exampleModaldelete_addition{{ $card_addition->id }}"
                                                                                    tabindex="-1"
                                                                                    aria-labelledby="exampleModalLabel"
                                                                                    aria-hidden="true">
                                                                                    <div
                                                                                        class="modal-dialog modal-dialog-centered">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <button type="button"
                                                                                                    class="btn-close"
                                                                                                    data-bs-dismiss="modal"
                                                                                                    aria-label="Close"></button>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <form
                                                                                                    action="/addition_one_delete/{{ $card_addition->id }}"
                                                                                                    method="get">
                                                                                                    @csrf
                                                                                                    <div
                                                                                                        class="modal-body bg-light">
                                                                                                        <h3>Вы действительно
                                                                                                            хотите
                                                                                                            удалить?
                                                                                                        </h3>
                                                                                                    </div>
                                                                                                    <div>
                                                                                                        <button
                                                                                                            class="btn btn-danger w-100">Удалить</button>
                                                                                                    </div>
                                                                                                </form>
                                                                                            </div>
                                                                                            <div class="modal-footer">
                                                                                                <button type="button"
                                                                                                    class="btn btn-secondary"
                                                                                                    data-bs-dismiss="modal">назад</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- Modal delete addition_one  end-->

                                                                                <!-- Modal edit addition_one start -->
                                                                                <div class="modal fade"
                                                                                    id="exampleModaledit_addition{{ $card_addition->id }}"
                                                                                    tabindex="-1"
                                                                                    aria-labelledby="exampleModalLabel"
                                                                                    aria-hidden="true">
                                                                                    <div
                                                                                        class="modal-dialog modal-dialog-centered">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h5 class="modal-title"
                                                                                                    id="exampleModalLabel">
                                                                                                    Редактирование описания
                                                                                                </h5>
                                                                                                <button type="button"
                                                                                                    class="btn-close"
                                                                                                    data-bs-dismiss="modal"
                                                                                                    aria-label="Close"></button>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <form
                                                                                                    action="/addition_one_edit/{{ $card_addition->id }}"
                                                                                                    method="POST">
                                                                                                    @csrf
                                                                                                    <div
                                                                                                        class="d-flex justify-content-center mt-1 form-floating">
                                                                                                        <input type="text"
                                                                                                            value="{{ $card_addition->name }}"
                                                                                                            id="floatingInput"
                                                                                                            name="name"
                                                                                                            class="form-control">
                                                                                                        <label
                                                                                                            for="floatingInput">Описание</label>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="mt-3">
                                                                                                        <button
                                                                                                            class="btn btn-warning w-100">Изменить</button>
                                                                                                    </div>
                                                                                                </form>
                                                                                            </div>
                                                                                            <div class="modal-footer">
                                                                                                <button type="button"
                                                                                                    class="btn btn-secondary"
                                                                                                    data-bs-dismiss="modal">назад</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- Modal edit addition_one  end-->
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Modal add addition_one start -->
                                                            <div class="modal fade" id="exampleModaladd_addition"
                                                                tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title bg-dark py-2 px-2 rounded-3 text-light"
                                                                                id="exampleModalLabel">
                                                                                Добавление
                                                                                описания
                                                                            </h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form
                                                                                action="/addition_one_add/{{ $number->id }}"
                                                                                method="POST">
                                                                                @csrf
                                                                                <div class="form-floating mb-3">
                                                                                    <input type="text"
                                                                                        class="form-control" name="name"
                                                                                        id="floatingInput"
                                                                                        placeholder="name@example.com">
                                                                                    <label
                                                                                        for="floatingInput">Описание</label>
                                                                                </div>
                                                                                <div class="mt-2"><button
                                                                                        class="btn btn-primary w-100 py-2">Добавить</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">назад</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Modal  add addition_one end-->
                                                        </div>
                                                        <a class="btn btn-primary" data-bs-toggle="collapse"
                                                            href="#multiCollapseExample2" role="button"
                                                            aria-expanded="false"
                                                            aria-controls="multiCollapseExample2">Питание</a>
                                                        <div class="row mt-2">
                                                            <div class="col">
                                                                <div class="collapse multi-collapse"
                                                                    id="multiCollapseExample2">
                                                                    <div class="card d-flex flex-column">
                                                                        <div class="d-flex justify-content-center">
                                                                            <button
                                                                                class="btn btn-success w-100 py-2 text-white"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#exampleModaladd_addition_two"><i
                                                                                    class="bi bi-plus-circle me-2"></i>
                                                                                Добавить</button>
                                                                        </div>
                                                                        <ul>
                                                                            @foreach ($addition_two->where('addition_two', $number->id) as $card_addition_two)
                                                                                <div class="d-flex gap-2 mt-3">
                                                                                    <li class="pt-2">
                                                                                        {{ $card_addition_two->name }}
                                                                                    </li>
                                                                                    <button data-bs-toggle="modal"
                                                                                        data-bs-target="#exampleModaledit_addition_two{{ $card_addition_two->id }}"
                                                                                        class="btn btn-warning"><i
                                                                                            class="bi bi-pencil"></i></button>
                                                                                    <button data-bs-toggle="modal"
                                                                                        data-bs-target="#exampleModaldelete_addition_two{{ $card_addition_two->id }}"
                                                                                        class="btn btn-danger"><i
                                                                                            class="bi bi-basket"></i></button>
                                                                                </div>
                                                                                <!-- Modal delete addition_two start -->
                                                                                <div class="modal fade"
                                                                                    id="exampleModaldelete_addition_two{{ $card_addition_two->id }}"
                                                                                    tabindex="-1"
                                                                                    aria-labelledby="exampleModalLabel"
                                                                                    aria-hidden="true">
                                                                                    <div
                                                                                        class="modal-dialog modal-dialog-centered">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <button type="button"
                                                                                                    class="btn-close"
                                                                                                    data-bs-dismiss="modal"
                                                                                                    aria-label="Close"></button>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <form
                                                                                                    action="/addition_two_delete/{{ $card_addition_two->id }}"
                                                                                                    method="get">
                                                                                                    @csrf
                                                                                                    <div
                                                                                                        class="modal-body bg-light">
                                                                                                        <h3>Вы действительно
                                                                                                            хотите
                                                                                                            удалить?
                                                                                                        </h3>
                                                                                                    </div>
                                                                                                    <div>
                                                                                                        <button
                                                                                                            class="btn btn-danger w-100">Удалить</button>
                                                                                                    </div>
                                                                                                </form>
                                                                                            </div>
                                                                                            <div class="modal-footer">
                                                                                                <button type="button"
                                                                                                    class="btn btn-secondary"
                                                                                                    data-bs-dismiss="modal">назад</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- Modal delete addition_two  end-->

                                                                                <!-- Modal edit addition_two start -->
                                                                                <div class="modal fade"
                                                                                    id="exampleModaledit_addition_two{{ $card_addition_two->id }}"
                                                                                    tabindex="-1"
                                                                                    aria-labelledby="exampleModalLabel"
                                                                                    aria-hidden="true">
                                                                                    <div
                                                                                        class="modal-dialog modal-dialog-centered">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h5 class="modal-title"
                                                                                                    id="exampleModalLabel">
                                                                                                    Редактирование описания
                                                                                                </h5>
                                                                                                <button type="button"
                                                                                                    class="btn-close"
                                                                                                    data-bs-dismiss="modal"
                                                                                                    aria-label="Close"></button>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <form
                                                                                                    action="/addition_two_edit/{{ $card_addition_two->id }}"
                                                                                                    method="POST">
                                                                                                    @csrf
                                                                                                    <div
                                                                                                        class="d-flex justify-content-center mt-1 form-floating">
                                                                                                        <input type="text"
                                                                                                            value="{{ $card_addition_two->name }}"
                                                                                                            id="floatingInput"
                                                                                                            name="name"
                                                                                                            class="form-control">
                                                                                                        <label
                                                                                                            for="floatingInput">Описание</label>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="mt-3">
                                                                                                        <button
                                                                                                            class="btn btn-warning w-100">Изменить</button>
                                                                                                    </div>
                                                                                                </form>
                                                                                            </div>
                                                                                            <div class="modal-footer">
                                                                                                <button type="button"
                                                                                                    class="btn btn-secondary"
                                                                                                    data-bs-dismiss="modal">назад</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- Modal edit addition_two  end-->
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Modal add addition_two start -->
                                                            <div class="modal fade" id="exampleModaladd_addition_two"
                                                                tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title bg-dark py-2 px-2 rounded-3 text-light"
                                                                                id="exampleModalLabel">
                                                                                Добавление
                                                                                описания
                                                                            </h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form
                                                                                action="/addition_two_add/{{ $number->id }}"
                                                                                method="POST">
                                                                                @csrf
                                                                                <div class="form-floating mb-3">
                                                                                    <input type="text"
                                                                                        class="form-control" name="name"
                                                                                        id="floatingInput"
                                                                                        placeholder="name@example.com">
                                                                                    <label
                                                                                        for="floatingInput">Описание</label>
                                                                                </div>
                                                                                <div class="mt-2"><button
                                                                                        class="btn btn-primary w-100 py-2">Добавить</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">назад</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Modal  add addition_two end-->
                                                        </div>
                                                        <a class="btn btn-primary" data-bs-toggle="collapse"
                                                            href="#multiCollapseExample3" role="button"
                                                            aria-expanded="false"
                                                            aria-controls="multiCollapseExample3">Доп.Услуги</a>
                                                        <div class="row mt-2">
                                                            <div class="col">
                                                                <div class="collapse multi-collapse"
                                                                    id="multiCollapseExample3">
                                                                    <div class="card d-flex flex-column">
                                                                        <div class="d-flex justify-content-center">
                                                                            <button
                                                                                class="btn btn-success w-100 py-2 text-white"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#exampleModaladd_addition_three"><i
                                                                                    class="bi bi-plus-circle me-2"></i>
                                                                                Добавить</button>
                                                                        </div>
                                                                        <ul>
                                                                            @foreach ($addition_three->where('addition_three', $number->id) as $card_addition_three)
                                                                                <div class="d-flex gap-2 mt-3">
                                                                                    <li class="pt-2">
                                                                                        {{ $card_addition_three->name }}
                                                                                    </li>
                                                                                    <button data-bs-toggle="modal"
                                                                                        data-bs-target="#exampleModaledit_addition_three{{ $card_addition_three->id }}"
                                                                                        class="btn btn-warning"><i
                                                                                            class="bi bi-pencil"></i></button>
                                                                                    <button data-bs-toggle="modal"
                                                                                        data-bs-target="#exampleModaldelete_addition_three{{ $card_addition_three->id }}"
                                                                                        class="btn btn-danger"><i
                                                                                            class="bi bi-basket"></i></button>
                                                                                </div>
                                                                                <!-- Modal delete addition_three start -->
                                                                                <div class="modal fade"
                                                                                    id="exampleModaldelete_addition_three{{ $card_addition_three->id }}"
                                                                                    tabindex="-1"
                                                                                    aria-labelledby="exampleModalLabel"
                                                                                    aria-hidden="true">
                                                                                    <div
                                                                                        class="modal-dialog modal-dialog-centered">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <button type="button"
                                                                                                    class="btn-close"
                                                                                                    data-bs-dismiss="modal"
                                                                                                    aria-label="Close"></button>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <form
                                                                                                    action="/addition_three_delete/{{ $card_addition_three->id }}"
                                                                                                    method="get">
                                                                                                    @csrf
                                                                                                    <div
                                                                                                        class="modal-body bg-light">
                                                                                                        <h3>Вы действительно
                                                                                                            хотите
                                                                                                            удалить?
                                                                                                        </h3>
                                                                                                    </div>
                                                                                                    <div>
                                                                                                        <button
                                                                                                            class="btn btn-danger w-100">Удалить</button>
                                                                                                    </div>
                                                                                                </form>
                                                                                            </div>
                                                                                            <div class="modal-footer">
                                                                                                <button type="button"
                                                                                                    class="btn btn-secondary"
                                                                                                    data-bs-dismiss="modal">назад</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- Modal delete addition_three  end-->

                                                                                <!-- Modal edit addition_three start -->
                                                                                <div class="modal fade"
                                                                                    id="exampleModaledit_addition_three{{ $card_addition_three->id }}"
                                                                                    tabindex="-1"
                                                                                    aria-labelledby="exampleModalLabel"
                                                                                    aria-hidden="true">
                                                                                    <div
                                                                                        class="modal-dialog modal-dialog-centered">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h5 class="modal-title"
                                                                                                    id="exampleModalLabel">
                                                                                                    Редактирование описания
                                                                                                </h5>
                                                                                                <button type="button"
                                                                                                    class="btn-close"
                                                                                                    data-bs-dismiss="modal"
                                                                                                    aria-label="Close"></button>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <form
                                                                                                    action="/addition_three_edit/{{ $card_addition_three->id }}"
                                                                                                    method="POST">
                                                                                                    @csrf
                                                                                                    <div
                                                                                                        class="d-flex justify-content-center mt-1 form-floating">
                                                                                                        <input type="text"
                                                                                                            value="{{ $card_addition_three->name }}"
                                                                                                            id="floatingInput"
                                                                                                            name="name"
                                                                                                            class="form-control">
                                                                                                        <label
                                                                                                            for="floatingInput">Описание</label>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="mt-3">
                                                                                                        <button
                                                                                                            class="btn btn-warning w-100">Изменить</button>
                                                                                                    </div>
                                                                                                </form>
                                                                                            </div>
                                                                                            <div class="modal-footer">
                                                                                                <button type="button"
                                                                                                    class="btn btn-secondary"
                                                                                                    data-bs-dismiss="modal">назад</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- Modal edit addition_three  end-->
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Modal add addition_three start -->
                                                            <div class="modal fade" id="exampleModaladd_addition_three"
                                                                tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title bg-dark py-2 px-2 rounded-3 text-light"
                                                                                id="exampleModalLabel">
                                                                                Добавление
                                                                                описания
                                                                            </h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form
                                                                                action="/addition_three_add/{{ $number->id }}"
                                                                                method="POST">
                                                                                @csrf
                                                                                <div class="form-floating mb-3">
                                                                                    <input type="text"
                                                                                        class="form-control" name="name"
                                                                                        id="floatingInput"
                                                                                        placeholder="name@example.com">
                                                                                    <label
                                                                                        for="floatingInput">Описание</label>
                                                                                </div>
                                                                                <div class="mt-2"><button
                                                                                        class="btn btn-primary w-100 py-2">Добавить</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">назад</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Modal  add addition_three end-->
                                                        </div>
                                                        <p class="fw-bold text-success fs-2 mt-2">от
                                                            {{ $number->price }}/{{ $number->date }}</p>
                                                    </div>
                                                </div>
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
@endsection
