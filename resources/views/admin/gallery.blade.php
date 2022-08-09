@extends('admin.layout')
@section('content')
    <section class="main-block pb-4 pt-2">
        <div class="d-flex justify-content-center mt-5">
            <div class="mt-4">
                <div class="container">
                    <div class="row row-cols-1 row-cols-lg-12">
                        <h1 class="mt-3 text-center">Галерея/Основное</h1>
                        <div class="col bg-light rounded-3" id="main_home">
                            <div class="main bg-light p-2 p-lg-4">
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
                                <div class="d-flex mb-3">
                                    <h3 class="fw-bold">Название категории</h3>
                                    <button class="ms-auto w-25 btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#exampleModaladdcategory"><i
                                            class="text-light bi bi-plus-lg"></i></button>
                                </div>
                                <div class="row row-cols-1 row-cols-lg-12">
                                    @foreach ($gallery as $item)
                                        <div class="col mt-2">
                                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header d-flex gap-2"
                                                        id="flush-heading{{ $item->id }}">
                                                        <div class="accordion-button collapsed fs-5" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#flush-collapse{{ $item->id }}"
                                                            aria-expanded="false"
                                                            aria-controls="flush-collapse{{ $item->id }}">
                                                            {{ $item->name }}
                                                        </div>
                                                        <button class="btn btn-warning ms-auto px-3" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModaleditcategory{{ $item->id }}"><i
                                                                class="bi bi-pencil"></i></button>
                                                        <button class="btn btn-danger px-3" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModaldeletecategory{{ $item->id }}"><i
                                                                class="bi bi-basket"></i></button>
                                                    </h2>
                                                    <div id="flush-collapse{{ $item->id }}"
                                                        class="accordion-collapse collapse"
                                                        aria-labelledby="flush-heading{{ $item->id }}"
                                                        data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body mt-3">
                                                            <div class="bg-light">
                                                                <div class="d-flex">
                                                                    <button
                                                                        class="btn btn-success ms-auto w-100 text-white d-flex justify-content-center"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModaladdcard{{ $item->id }}"><i
                                                                            class="bi bi-plus-circle me-2"></i>
                                                                        Добавить</button>
                                                                </div>
                                                            </div>
                                                            <section id="portfolio" class="portfolio">
                                                                <div class="container">
                                                                    <div class="row row-cols-1 row-cols-lg-12">
                                                                        {{-- вывод сарточки конкретной категории --}}
                                                                        @foreach ($gallery_card->where('tab', $item->id) as $card)
                                                                            <div class="col-lg-4 col-md-6 portfolio-item">
                                                                                <div class="portfolio-wrap">
                                                                                    <img src="/public/storage/card/{{ $card->img }}"
                                                                                        class="img-fluid"
                                                                                        style="height: 250px; object-fit:cover"
                                                                                        alt="">
                                                                                    <div class="portfolio-info">
                                                                                        <h4>{{ $card->name }}</h4>
                                                                                        <div class="portfolio-links">
                                                                                            <a href="/public/storage/card/{{ $card->img }}"
                                                                                                data-gallery="portfolioGallery"
                                                                                                class="portfolio-lightbox"
                                                                                                title=""><i
                                                                                                    class="bx bx-plus"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="d-flex mt-1 gap-2">
                                                                                    <button data-bs-toggle="modal"
                                                                                        data-bs-target="#exampleModaleditcard{{ $card->id }}"
                                                                                        class="btn btn-warning w-50">Редактировать</button>
                                                                                    <button data-bs-toggle="modal"
                                                                                        data-bs-target="#exampleModaldeletecard{{ $card->id }}"
                                                                                        class="btn btn-danger w-50 ms-auto">Удалить</button>
                                                                                </div>
                                                                            </div>
                                                                            <!-- Modal delete card start -->
                                                                            <div class="modal fade"
                                                                                id="exampleModaldeletecard{{ $card->id }}"
                                                                                tabindex="-1"
                                                                                aria-labelledby="exampleModalLabel"
                                                                                aria-hidden="true">
                                                                                <div
                                                                                    class="modal-dialog modal-dialog-centered">
                                                                                    <div class="modal-content">
                                                                                        <form
                                                                                            action="/gallery_card_delete/{{ $card->id }}"
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
                                                                                                <h3>Вы действительно хотите
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
                                                                            <!-- Modal delete card end-->

                                                                            <!-- Modal edit card start -->
                                                                            <div class="modal fade"
                                                                                id="exampleModaleditcard{{ $card->id }}"
                                                                                tabindex="-1"
                                                                                aria-labelledby="exampleModalLabel"
                                                                                aria-hidden="true">
                                                                                <div
                                                                                    class="modal-dialog modal-dialog-centered">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title"
                                                                                                id="exampleModalLabel">
                                                                                                Редактирование карточки
                                                                                            </h5>
                                                                                            <button type="button"
                                                                                                class="btn-close"
                                                                                                data-bs-dismiss="modal"
                                                                                                aria-label="Close"></button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <form
                                                                                                action="/gallery_card_edit/{{ $card->id }}"
                                                                                                method="POST"
                                                                                                enctype="multipart/form-data">
                                                                                                @csrf
                                                                                                <div
                                                                                                    class="d-flex justify-content-center mt-1 form-floating">
                                                                                                    <input type="text"
                                                                                                        id="floatingInput"
                                                                                                        name="name"
                                                                                                        value="{{ $card->name }}"
                                                                                                        class="form-control">
                                                                                                    <label
                                                                                                        for="floatingInput">Название</label>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="d-flex justify-content-center mt-1">
                                                                                                    <input type="file"
                                                                                                        id="floatingInput"
                                                                                                        name="img"
                                                                                                        class="form-control">
                                                                                                </div>
                                                                                                <div class="mt-3">
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
                                                                            <!-- Modal edit card  end-->
                                                                        @endforeach
                                                                        <!-- Modal add category start -->
                                                                        <div class="modal fade"
                                                                            id="exampleModaladdcard{{ $item->id }}"
                                                                            tabindex="-1"
                                                                            aria-labelledby="exampleModalLabel"
                                                                            aria-hidden="true">
                                                                            <div class="modal-dialog modal-dialog-centered">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title"
                                                                                            id="exampleModalLabel">
                                                                                            Добавление категории
                                                                                        </h5>
                                                                                        <button type="button"
                                                                                            class="btn-close"
                                                                                            data-bs-dismiss="modal"
                                                                                            aria-label="Close"></button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <form
                                                                                            action="/gallery_card_add/{{ $item->id }}"
                                                                                            method="POST"
                                                                                            enctype="multipart/form-data">
                                                                                            @csrf
                                                                                            <div
                                                                                                class="d-flex justify-content-center mt-1 form-floating">
                                                                                                <input type="text"
                                                                                                    id="floatingInput"
                                                                                                    name="name"
                                                                                                    class="form-control">
                                                                                                <label
                                                                                                    for="floatingInput">Название</label>
                                                                                            </div>
                                                                                            <div
                                                                                                class="d-flex justify-content-center mt-1">
                                                                                                <input type="file"
                                                                                                    id="floatingInput"
                                                                                                    name="img"
                                                                                                    class="form-control">
                                                                                            </div>
                                                                                            <div class="mt-3">
                                                                                                <button
                                                                                                    class="btn btn-primary w-100">Добавить</button>
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
                                                                        <!-- Modal add card  end-->
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal delete category start -->
                                        <div class="modal fade" id="exampleModaldeletecategory{{ $item->id }}"
                                            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <form action="/gallery_delete/{{ $item->id }}" method="get">
                                                        @csrf
                                                        <div class="modal-header">
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body bg-light">
                                                            <h3>Вы действительно хотите
                                                                удалить?</h3>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-danger w-100">Удалить</button>
                                                        </div>
                                                    </form>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">назад</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal delete category end-->

                                        <!-- Modal edit category start -->
                                        <div class="modal fade" id="exampleModaleditcategory{{ $item->id }}"
                                            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                            Редактирование категории
                                                        </h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="/gallery_edit/{{ $item->id }}" method="POST">
                                                            @csrf
                                                            <div class="d-flex justify-content-center mt-1 form-floating">
                                                                <input type="text" id="floatingInput" name="name"
                                                                    value="{{ $item->name }}" class="form-control">
                                                                <label for="floatingInput">Название</label>
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
                                        <!-- Modal edit category  end-->
                                    @endforeach
                                    <!-- Modal add category start -->
                                    <div class="modal fade" id="exampleModaladdcategory" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                        Добавление категории
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/gallery_add" method="POST">
                                                        @csrf
                                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                                            <input type="text" id="floatingInput" name="name"
                                                                class="form-control">
                                                            <label for="floatingInput">Название</label>
                                                        </div>
                                                        <div class="mt-3">
                                                            <button class="btn btn-primary w-100">Добавить</button>
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
                                    <!-- Modal add category  end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
