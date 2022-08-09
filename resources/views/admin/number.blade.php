@extends('admin.layout')
@section('content')
    <section class="main-block pb-4 pt-2">
        <div class="d-flex justify-content-center mt-5">
            <div class="mt-4">
                <div class="container">
                    <div class="row row-cols-1 row-cols-lg-12 mt-3">
                        <h1 class="mt-3 text-center">Номер/основное</h1>
                        <div class="col bg-light rounded-3" id="main_home">
                            <div class="main bg-light p-lg-4">
                                <div class="d-flex justify-content-center px-4">
                                    <button data-bs-toggle="modal" data-bs-target="#exampleModaladdnumber"
                                        class="btn btn-primary w-100 py-3"><i class="bi bi-plus-circle"></i> Добавить
                                        номер</button>
                                </div>
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
                                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 g-0 g-lg-5 g-md-4">
                                        @foreach ($number as $item_card)
                                            <div class="col-lg-6 col-md-6">
                                                <div class="card">
                                                    <img src="public/storage/number/{{ $item_card->img }}"
                                                        style="object-fit:cover" height="250px" class="card-img-top"
                                                        alt="...">
                                                    <div class="bg-dark">
                                                        <div
                                                            class="d-flex bg-secondary text-white  px-3 gap-4 card_overflow">
                                                            @foreach ($number_icon->where('list', $item_card->id) as $card_icon)
                                                                <div>
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                        title="{{ $card_icon->description }}">
                                                                        <span class="material-icons align-middle">
                                                                            {{ $card_icon->name }}
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ $item_card->name }}</h5>
                                                        <p class="card-text">{{ $item_card->description }}</p>
                                                        <p class="fw-bold text-success fs-4">от
                                                            {{ $item_card->price }}/{{ $item_card->date }}</p>
                                                    </div>
                                                    <div class="d-flex gap-2">
                                                        <button class="btn btn-warning w-50" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModaleditnumber{{ $item_card->id }}">Редактировать</button>
                                                        <button class="btn btn-danger ms-auto w-50" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModaldeletenumber{{ $item_card->id }}">Удалить</button>
                                                    </div>
                                                    <div class="d-flex justify-content-center mt-1"><a
                                                            href="/number_admin_about/{{ $item_card->id }}"
                                                            class="btn btn-primary w-100">Подробнее о номере</a></div>
                                                </div>
                                            </div>
                                            <!-- Modal edit number card start -->
                                            <div class="modal fade" id="exampleModaleditnumber{{ $item_card->id }}"
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
                                                            <form action="/number_edit/{{ $item_card->id }}"
                                                                method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="d-flex justify-content-center mt-1">
                                                                    <input type="file" id="floatingInput" name="img"
                                                                        class="form-control">
                                                                </div>
                                                                <div
                                                                    class="d-flex justify-content-center mt-1 form-floating">
                                                                    <input type="text" id="floatingInput"
                                                                        value="{{ $item_card->name }}" name="name"
                                                                        class="form-control">
                                                                    <label for="floatingInput">Название</label>
                                                                </div>
                                                                <div
                                                                    class="d-flex justify-content-center mt-1 form-floating">
                                                                    <input type="text" id="floatingInput"
                                                                        value="{{ $item_card->description }}"
                                                                        name="description" class="form-control">
                                                                    <label for="floatingInput">Описание</label>
                                                                </div>
                                                                <div
                                                                    class="d-flex justify-content-center mt-1 form-floating">
                                                                    <input type="text" id="floatingInput"
                                                                        value="{{ $item_card->price }}" name="price"
                                                                        class="form-control">
                                                                    <label for="floatingInput">Цена</label>
                                                                </div>
                                                                <div
                                                                    class="d-flex justify-content-center mt-1 form-floating">
                                                                    <input type="text" id="floatingInput"
                                                                        value="{{ $item_card->date }}" name="date"
                                                                        class="form-control">
                                                                    <label for="floatingInput">Сутки</label>
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
                                            <!-- Modal edit number card  end-->

                                            <!-- Modal delete team card start -->
                                            <div class="modal fade" id="exampleModaldeletenumber{{ $item_card->id }}"
                                                tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="/number_delete/{{ $item_card->id }}"
                                                                method="get">
                                                                @csrf
                                                                <div class="modal-body bg-light">
                                                                    <h3>Вы действительно хотите удалить?</h3>
                                                                </div>
                                                                <div>
                                                                    <button class="btn btn-danger w-100">Удалить</button>
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
                                </div>
                                <!-- Modal add number card start -->
                                <div class="modal fade" id="exampleModaladdnumber" tabindex="-1"
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
                                                <form action="/number_add" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="d-flex justify-content-center mt-1">
                                                        <input type="file" id="floatingInput" name="img"
                                                            class="form-control">
                                                    </div>
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
                                                    <div class="d-flex justify-content-center mt-1 form-floating">
                                                        <input type="text" id="floatingInput" name="price"
                                                            class="form-control">
                                                        <label for="floatingInput">Цена</label>
                                                    </div>
                                                    <div class="d-flex justify-content-center mt-1 form-floating">
                                                        <input type="text" id="floatingInput" name="date"
                                                            class="form-control">
                                                        <label for="floatingInput">Сутки</label>
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
                                <!-- Modal add number card  end-->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
