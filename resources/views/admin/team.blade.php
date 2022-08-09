@extends('admin.layout')
@section('content')
    <section class="section_backgrond pb-4 main-block pb-4 pt-2">
        <div class="d-flex justify-content-center mt-5">
            <div class="mt-4">
                <div class="container">
                    <div class="row row-cols-1 row-cols-lg-12 mt-3">
                        <div class="d-flex justify-content-center gap-2">
                            <h1 class="mt-3 text-center rounded-3 bg-light py-2">Сотрудники/основное</h1>
                            <button data-bs-toggle="modal" data-bs-target="#exampleModaleditname"
                                class="btn btn-warning px-4"><i class="bi bi-pencil"></i></button>
                        </div>
                        <div class="col bg-light rounded-3" id="main_home">
                            <div class="main bg-light p-2 p-lg-4">
                                {{-- алерт для вывода инфы об успешном изменении --}}
                                @if (session('success'))
                                    <div class="alert alert-success text-success  alert-dismissible fade show" role="alert">
                                        <div class="fs-1 text-center"><i class="bi bi-check2-circle"></i></div>
                                        <div class="text-center">{{ session('success') }}</div>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-primary w-100" data-bs-toggle="modal"
                                        data-bs-target="#exampleModaladd">
                                        <i class="text-light bi bi-plus-circle"></i> Добавить
                                    </button>
                                </div>

                                <div class="container">
                                    <section id="team" class="team">
                                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 gap-lg-3 g-md-5">
                                            @foreach ($team as $item)
                                                <div class="col-lg-5 col-md-6 mt-4" data-wow-delay="0.2s">
                                                    <div class="member">
                                                        <img src="public/storage/team/{{ $item->img }}"
                                                            style="height: 250px; object-fit:cover;" class="img-fluid"
                                                            alt="">
                                                        <div class="member-info">
                                                            <div class="member-info-content">
                                                                <h4>{{ $item->name }}</h4>
                                                                <span>{{ $item->opisanie }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex gap-1">
                                                        <button data-bs-toggle="modal"
                                                            data-bs-target="#exampleModaledit{{ $item->id }}"
                                                            class="btn btn-warning w-50">Изменить</button>
                                                        <button data-bs-toggle="modal"
                                                            data-bs-target="#exampleModaldelete{{ $item->id }}"
                                                            class="btn btn-danger ms-auto w-50">Удалить</button>
                                                    </div>
                                                </div>

                                                <!-- Modal edit team card start -->
                                                <div class="modal fade" id="exampleModaledit{{ $item->id }}"
                                                    tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">
                                                                    Редактирование контента
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="/team_edit/{{ $item->id }}" method="POST"
                                                                    enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="lead mb-2 mt-2">Карточка</div>
                                                                    <div class="d-flex justify-content-center mt-1">
                                                                        <input type="file" id="floatingInput" name="img"
                                                                            class="form-control">
                                                                    </div>
                                                                    <div
                                                                        class="d-flex justify-content-center mt-1 form-floating">
                                                                        <input type="text" id="floatingInput" name="name"
                                                                            value="{{ $item->name }}"
                                                                            class="form-control">
                                                                        <label for="floatingInput">Имя</label>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex justify-content-center mt-1 form-floating">
                                                                        <input type="text" id="floatingInput"
                                                                            value="{{ $item->opisanie }}" name="opisanie"
                                                                            class="form-control">
                                                                        <label for="floatingInput">специализация</label>
                                                                    </div>
                                                                    <div class="mt-3">
                                                                        <button
                                                                            class="btn btn-warning w-100">Изменить</button>
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
                                                <!-- Modal edit team card  end-->

                                                <!-- Modal delete team card start -->
                                                <div class="modal fade" id="exampleModaldelete{{ $item->id }}"
                                                    tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="/team_delete/{{ $item->id }}"
                                                                    method="get">
                                                                    @csrf
                                                                    <div class="modal-body bg-light">
                                                                        <h3>Вы действительно хотите удалить?</h3>
                                                                    </div>
                                                                    <div>
                                                                        <button
                                                                            class="btn btn-danger w-100">Удалить</button>
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
                                                <!-- Modal delete team card  end-->
                                            @endforeach
                                        </div>
                                    </section>
                                </div>

                            </div>
                            <!-- Modal add team card start -->
                            <div class="modal fade" id="exampleModaladd" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">
                                                Добавление контента
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/team_add" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="lead mb-2 mt-2">Карточка</div>
                                                <div class="d-flex justify-content-center mt-1">
                                                    <input type="file" id="floatingInput" name="img" class="form-control">
                                                </div>
                                                <div class="d-flex justify-content-center mt-1 form-floating">
                                                    <input type="text" id="floatingInput" name="name"
                                                        class="form-control">
                                                    <label for="floatingInput">Имя</label>
                                                </div>
                                                <div class="d-flex justify-content-center mt-1 form-floating">
                                                    <input type="text" id="floatingInput" name="opisanie"
                                                        class="form-control">
                                                    <label for="floatingInput">специализация</label>
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
                            <!-- Modal add team card  end-->

                            <!-- Modal edit team name start -->
                            <div class="modal fade" id="exampleModaleditname" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">
                                                Редактирование основное
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/team_name_edit" method="POST">
                                                @csrf
                                                <div class="d-flex justify-content-center mt-1 form-floating">
                                                    <input type="text" id="floatingInput" name="worker"
                                                        value="{{ $team_name->worker }}" class="form-control">
                                                    <label for="floatingInput">Название</label>
                                                </div>
                                                <div class="d-flex justify-content-center mt-1 form-floating">
                                                    <input type="text" id="floatingInput"
                                                        value="{{ $team_name->description }}" name="description"
                                                        class="form-control">
                                                    <label for="floatingInput">Описание</label>
                                                </div>
                                                <div class="mt-3">
                                                    <button class="btn btn-warning w-100">Изменить</button>
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
                            <!-- Modal edit team name  end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
