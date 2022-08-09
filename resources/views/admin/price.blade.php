@extends('admin.layout')
@section('content')
    <section class="section_backgrond pb-4 main-block pb-4 pt-2">
        <div class="d-flex justify-content-center mt-5">
            <div class="mt-4">
                <div class="container">
                    <div class="row row-cols-1 row-cols-lg-12 mt-3">
                        <div class="d-flex justify-content-center gap-2">
                            <h1 class="mt-3 text-center rounded-3 bg-light py-2">Тариф/основное</h1>
                            <button data-bs-toggle="modal" data-bs-target="#exampleModaleditname"
                                class="btn btn-warning px-4"><i class="bi bi-pencil"></i></button>
                        </div>
                        <div class="col bg-light rounded-3" id="main_home">
                            <div class="main bg-light p-2 p-lg-4">
                                <div class="d-flex justify-content-center px-4">
                                    <button data-bs-toggle="modal" data-bs-target="#exampleModaladdcard"
                                        class="btn btn-primary w-100 py-3"><i class="bi bi-plus-circle"></i> Добавить
                                        карточку</button>
                                </div>
                                {{-- алерт для вывода инфы об успешном изменении --}}
                                @if (session('success'))
                                    <div class="alert alert-success text-success mt-4 alert-dismissible fade show"
                                        role="alert">
                                        <div class="fs-1 text-center"><i class="bi bi-check2-circle"></i></div>
                                        <div class="text-center">{{ session('success') }}</div>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                                <div class="container">
                                    <section id="pricing" class="pricing">
                                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 g-5">
                                            @foreach ($price_card as $item_card)
                                                <div class="col-lg-6 col-md-6">
                                                    <div style="background-color: #c9cec5e5" class="box">
                                                        <h3>{{ $item_card->rate }}</h3>
                                                        <h4>
                                                            <sup>₽</sup>{{ $item_card->rubl }}<span style="color: black">
                                                                /
                                                                {{ $item_card->date }}</span>
                                                        </h4>
                                                        <h5>{{ $item_card->investment }}</h5>
                                                        <button data-bs-toggle="modal"
                                                            data-bs-target="#exampleModaladdprice_one{{ $item_card->id }}"
                                                            class="btn btn-primary"><i
                                                                class="text-light bi bi-plus-circle"></i>
                                                            Добавить</button>
                                                        <ul class="mt-4">
                                                            @foreach ($price_one->where('tab', $item_card->id) as $card)
                                                                <div class="d-flex justify-content-center gap-2 mt-2">
                                                                    <li class="mt-3">
                                                                        {{ $card->name }}
                                                                    </li>
                                                                    <button data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModaleditprice_one{{ $card->id }}"
                                                                        class="btn btn-warning px-3"><i
                                                                            class="bi bi-pencil"></i></button>
                                                                    <button data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModaldeleteprice_one{{ $card->id }}"
                                                                        class="btn btn-danger  px-3"><i
                                                                            class="bi bi-basket"></i></button>
                                                                </div>

                                                                <!-- Modal edit price_one start -->
                                                                <div class="modal fade"
                                                                    id="exampleModaleditprice_one{{ $card->id }}"
                                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">
                                                                                    Редактирование услуги
                                                                                </h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form
                                                                                    action="/price_for_edit_one/{{ $card->id }}"
                                                                                    method="POST">
                                                                                    @csrf
                                                                                    <div
                                                                                        class="d-flex justify-content-center mt-1 form-floating">
                                                                                        <input type="text"
                                                                                            value="{{ $card->name }}"
                                                                                            id="floatingInput" name="name"
                                                                                            class="form-control">
                                                                                        <label
                                                                                            for="floatingInput">Услуга</label>
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
                                                                <!-- Modal edit price_one  end-->

                                                                <!-- Modal delete price card start -->
                                                                <div class="modal fade"
                                                                    id="exampleModaldeleteprice_one{{ $card->id }}"
                                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form
                                                                                    action="/price_for_delete_one/{{ $card->id }}"
                                                                                    method="get">
                                                                                    @csrf
                                                                                    <div class="modal-body bg-light">
                                                                                        <h3>Вы действительно хотите удалить?
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
                                                                <!-- Modal delete price_one  end-->
                                                            @endforeach
                                                            <!-- Modal add card price_one start -->
                                                            <div class="modal fade"
                                                                id="exampleModaladdprice_one{{ $item_card->id }}"
                                                                tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="exampleModalLabel">
                                                                                Добавление услуги
                                                                            </h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form
                                                                                action="/price_for_add_one/{{ $item_card->id }}"
                                                                                method="POST">
                                                                                @csrf
                                                                                <div
                                                                                    class="d-flex justify-content-center mt-1 form-floating">
                                                                                    <input type="text" id="floatingInput"
                                                                                        name="name" class="form-control">
                                                                                    <label
                                                                                        for="floatingInput">Услуга</label>
                                                                                </div>
                                                                                <div class="mt-3">
                                                                                    <button
                                                                                        class="btn btn-primary w-100">Добавить</button>
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
                                                            <!-- Modal add price_one  end-->
                                                        </ul>
                                                        <div class="btn-wrap">
                                                            <a href="#contact"
                                                                class="btn-buy">{{ $item_card->booking }}</a>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-1 gap-2">
                                                        <button data-bs-toggle="modal"
                                                            data-bs-target="#exampleModalcardedit{{ $item_card->id }}"
                                                            class="btn btn-warning w-50">Изменить</button>
                                                        <button data-bs-toggle="modal"
                                                            data-bs-target="#exampleModalcarddelete{{ $item_card->id }}"
                                                            class="btn btn-danger ms-auto w-50">Удалить</button>
                                                    </div>
                                                </div>


                                                <!-- Modal edit price_card start -->
                                                <div class="modal fade" id="exampleModalcardedit{{ $item_card->id }}"
                                                    tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">
                                                                    Редактирование карточки
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="/price_card_edit/{{ $item_card->id }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    <div
                                                                        class="d-flex justify-content-center mt-1 form-floating">
                                                                        <input type="text" value="{{ $item_card->rate }}"
                                                                            id="floatingInput" name="rate"
                                                                            class="form-control">
                                                                        <label for="floatingInput">Тариф</label>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex justify-content-center mt-1 form-floating">
                                                                        <input type="text" value="{{ $item_card->rubl }}"
                                                                            id="floatingInput" name="rubl"
                                                                            class="form-control">
                                                                        <label for="floatingInput">Цена</label>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex justify-content-center mt-1 form-floating">
                                                                        <input type="text" value="{{ $item_card->date }}"
                                                                            id="floatingInput" name="date"
                                                                            class="form-control">
                                                                        <label for="floatingInput">День/Месяц/Год</label>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex justify-content-center mt-1 form-floating">
                                                                        <input type="text"
                                                                            value="{{ $item_card->investment }}"
                                                                            id="floatingInput" name="investment"
                                                                            class="form-control">
                                                                        <label for="floatingInput">Что входит?</label>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex justify-content-center mt-1 form-floating">
                                                                        <input type="text"
                                                                            value="{{ $item_card->booking }}"
                                                                            id="floatingInput" name="booking"
                                                                            class="form-control">
                                                                        <label for="floatingInput">Бронирование</label>
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
                                                <!-- Modal edit price_card  end-->

                                                <!-- Modal delete price card start -->
                                                <div class="modal fade"
                                                    id="exampleModalcarddelete{{ $item_card->id }}" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="/price_card_delete/{{ $item_card->id }}"
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
                                                <!-- Modal delete price card  end-->
                                            @endforeach
                                        </div>
                                    </section>
                                </div>

                            </div>

                            <!-- Modal add card price_card start -->
                            <div class="modal fade" id="exampleModaladdcard" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">
                                                Добавление карточки
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/price_card_add" method="POST">
                                                @csrf
                                                <div class="d-flex justify-content-center mt-1 form-floating">
                                                    <input type="text" id="floatingInput" name="rate"
                                                        class="form-control">
                                                    <label for="floatingInput">Тариф</label>
                                                </div>
                                                <div class="d-flex justify-content-center mt-1 form-floating">
                                                    <input type="text" id="floatingInput" name="rubl"
                                                        class="form-control">
                                                    <label for="floatingInput">Цена</label>
                                                </div>
                                                <div class="d-flex justify-content-center mt-1 form-floating">
                                                    <input type="text" id="floatingInput" name="date"
                                                        class="form-control">
                                                    <label for="floatingInput">День/Месяц/Год</label>
                                                </div>
                                                <div class="d-flex justify-content-center mt-1 form-floating">
                                                    <input type="text" id="floatingInput" name="investment"
                                                        class="form-control">
                                                    <label for="floatingInput">Что входит?</label>
                                                </div>
                                                <div class="d-flex justify-content-center mt-1 form-floating">
                                                    <input type="text" id="floatingInput" name="booking"
                                                        class="form-control">
                                                    <label for="floatingInput">Бронирование</label>
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
                            <!-- Modal add price_card  end-->

                            <!-- Modal edit price_name start -->
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
                                            <form action="/price_edit" method="POST">
                                                @csrf
                                                <div class="d-flex justify-content-center mt-1 form-floating">
                                                    <input type="text" id="floatingInput" name="price"
                                                        value="{{ $price->price }}" class="form-control">
                                                    <label for="floatingInput">Название</label>
                                                </div>
                                                <div class="d-flex justify-content-center mt-1 form-floating">
                                                    <input type="text" id="floatingInput"
                                                        value="{{ $price->description }}" name="description"
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
                            <!-- Modal edit price_name  end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
