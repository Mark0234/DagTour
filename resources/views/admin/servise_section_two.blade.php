@extends('admin.layout')
@section('content')
    <section class="main-block pb-4 pt-2">
        <div class="d-flex justify-content-center mt-5">
            <div class="mt-4">
                <div class="container">
                    <div class="row row-cols-1 row-cols-lg-12 mt-3">
                        <h1 class="mt-3 text-center">Сервис/вторая секция</h1>
                        <div class="col bg-light rounded-3" id="main_home">
                            <div class="main bg-light p-2 p-lg-4">
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
                                                    колонки
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/servise_section_two_add" method="POST">
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

                                <!-- ======= Why Us Section ======= -->
                                <section id="why-us" class="why-us">
                                    <div class="container">

                                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-md-5">
                                            @foreach ($servise_section_two as $item)
                                                <div class="col-lg-4 col-md-6 mt-4">
                                                    <div class="box">
                                                        <h4>{{ $item->name }}</h4>
                                                        <p>{{ $item->description }}</p>
                                                        <div
                                                            class="d-flex justify-content-center px-lg-5 px-xl-5 mt-3 gap-4">
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
                                                    tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">
                                                                    Редактирование
                                                                    колонки
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="/servise_section_two_edit/{{ $item->id }}"
                                                                    method="POST">
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
                                                    tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <form action="/servise_section_two_delete/{{ $item->id }}"
                                                                method="get">
                                                                @csrf
                                                                <div class="modal-header">
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body bg-light">
                                                                    <h3>Вы действительно хотите удалить?</h3>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button class="btn btn-danger">Удалить</button>
                                                            </form>
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">назад</button>
                                                        </div>
                                                    </div>
                                                </div>

                                        </div>
                                        <!-- Modal delete end-->
                                        @endforeach
                                    </div>

                            </div>
    </section><!-- End Why Us Section -->



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
