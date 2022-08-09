@extends('admin.layout')
@section('content')
    <section class="main-block pb-4 pt-2">
        <div class="d-flex justify-content-center mt-5">
            <div class="mt-4">
                <div class="container">
                    <div class="row row-cols-1 row-cols-lg-12 mt-3">
                        <h1 class="mt-3 text-center">Навбар/карусель</h1>
                        <div class="col bg-light rounded-3" id="main_home">
                            <div class="main bg-light p-2 p-lg-4">

                                <section id="hero">
                                    <div class="hero-container">
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
                                                    <div
                                                        class="carousel-item @if ($count == 0) active @endif">
                                                        <img style="height:100%; object-fit:cover"
                                                            src="public/storage/carusel/{{ $item->img }}"
                                                            class="d-block w-100" alt="...">
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
                                </section>
                                <div class="text-center fw-bold fs-2 mt-3">Добавленые слайды</div>
                                <div class="text-center fw-bold fs-2 mt-1">
                                    <button class="btn btn-primary w-100 fw-bold" data-bs-toggle="modal"
                                        data-bs-target="#exampleModaladd"><i class="bi bi-plus-circle fs-4"></i>
                                        Добавить</button>
                                </div>



                                {{-- алерт для вывода инфы об успешном изменении --}}
                                @if (session('success'))
                                    <div class="mt-4 alert alert-success text-success  alert-dismissible fade show"
                                        role="alert">
                                        <div class="fs-1 text-center"><i class="bi bi-check2-circle"></i></div>
                                        <div class="text-center">{{ session('success') }}</div>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                                {{-- алерт для вывода инфы об успешном изменении конец --}}

                                <!-- Modal add -->
                                <div class="modal fade" id="exampleModaladd" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title bg-dark py-2 px-2 rounded-3 text-light"
                                                    id="exampleModalLabel">
                                                    Добавление
                                                    слайдера
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/carusel_navbar_add" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="d-flex justify-content-center mt-1 form-floating">
                                                        <input type="text" id="floatingInput" name="name"
                                                            class="form-control">
                                                        <label for="floatingInput">Название</label>
                                                    </div>
                                                    <div class="d-flex justify-content-center mt-1 form-floating">
                                                        <input type="text" id="floatingInput" name="description"
                                                            class="form-control">
                                                        <label for="floatingInput">Описание</label>
                                                    </div>
                                                    <div class="d-flex justify-content-center mt-2">
                                                        <input type="file" id="floatingInput" name="img"
                                                            class="form-control">
                                                    </div>
                                                    <div class="mt-2"><button
                                                            class="btn btn-primary w-100 py-2">Добавить</button></div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">назад</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal  add end-->

                                <div class="mt-3">
                                    <div class="container">
                                        <div class="row row-cols-lg-12 row-cols-xl-12">
                                            @foreach ($carusel as $item)
                                                <div class="col mt-3">
                                                    <div class="card" style="width: 18rem;">
                                                        <img src="public/storage/carusel/{{ $item->img }}"
                                                            class="card-img-top" alt="..."
                                                            style="height: 200px; object-fit:cover;">
                                                        <div class="card-body">
                                                            <h5 class="card-title text-dark fw-bold">{{ $item->name }}
                                                            </h5>
                                                            <p class="card-text">{{ $item->description }}</p>
                                                            <div class="d-flex gap-3">
                                                                <button data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModaledit{{ $item->id }}"
                                                                    class="btn btn-warning">Редактировать</button>
                                                                <button data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModaldelete{{ $item->id }}"
                                                                    class="btn btn-danger">Удалить</button>
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <!-- Modal edit -->
                                                    <div class="modal fade" id="exampleModaledit{{ $item->id }}"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                                        Редактирование
                                                                        слайдера
                                                                    </h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="/carusel_navbar_edit/{{ $item->id }}"
                                                                        method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div
                                                                            class="d-flex justify-content-center mt-1 form-floating">
                                                                            <input type="text" id="floatingInput"
                                                                                value="{{ $item->name }}" name="name"
                                                                                class="form-control">
                                                                            <label for="floatingInput">Название</label>
                                                                        </div>
                                                                        <div
                                                                            class="d-flex justify-content-center mt-1 form-floating">
                                                                            <input type="text" id="floatingInput"
                                                                                value="{{ $item->description }}"
                                                                                name="description" class="form-control">
                                                                            <label for="floatingInput">Описание</label>
                                                                        </div>
                                                                        <div class="d-flex justify-content-center mt-2">
                                                                            <input type="file" id="floatingInput" name="img"
                                                                                class="form-control">
                                                                        </div>
                                                                        <div class="mt-3">
                                                                            <button
                                                                                class="btn btn-warning w-100">Редактировать</button>
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
                                                    <!-- Modal edit end-->

                                                    <!-- Modal delete -->
                                                    <div class="modal fade" id="exampleModaldelete{{ $item->id }}"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <form action="/carusel_navbar_delete/{{ $item->id }}"
                                                                    method="get">
                                                                    @csrf
                                                                    <div class="modal-header">
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body bg-light">
                                                                        <h3>Вы действительно хотите удалить?</h3>
                                                                    </div>
                                                                    <div class="px-2">
                                                                        <button
                                                                            class="btn btn-danger w-100">Удалить</button>
                                                                    </div>
                                                                </form>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">назад</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Modal delete end-->
                                            @endforeach
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
