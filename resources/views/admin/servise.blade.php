@extends('admin.layout')
@section('content')
    <section class="section_backgrond pb-4 pt-2 main-block">
        <div class="d-flex justify-content-center mt-5">
            <div class="mt-4">
                <div class="container">
                    <div class="row row-cols-1 row-cols-lg-12 mt-3">
                        <h1 class="mt-3 text-center rounded-3 bg-light py-2">Сервис/основное</h1>
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

                                <form action="/servise_edit" method="POST">
                                    @csrf
                                    <section>
                                        <div class="d-flex justify-content-center mb-2 fs-3 fw-bold">Главная
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput" value="{{ $servise->slogan }}"
                                                name="slogan" class="form-control">
                                            <label for="floatingInput">Слоган</label>
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput" value="{{ $servise->description }}"
                                                name="description" class="form-control">
                                            <label for="floatingInput">Описание</label>
                                        </div>
                                    </section>

                                    <section>
                                        <div class="d-flex justify-content-center mb-2 fs-6 fw-bold">Первый столбец
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput" value="{{ $servise->icon1 }}"
                                                name="icon1" class="form-control">
                                            <label for="floatingInput">Иконка</label>
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput" value="{{ $servise->text1 }}"
                                                name="text1" class="form-control">
                                            <label for="floatingInput">Текст</label>
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput" value="{{ $servise->opisanie1 }}"
                                                name="opisanie1" class="form-control">
                                            <label for="floatingInput">Описание</label>
                                        </div>
                                    </section>

                                    <section>
                                        <div class="d-flex justify-content-center  mb-2 fs-6 fw-bold">Второй столбец
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput" value="{{ $servise->icon2 }}"
                                                name="icon2" class="form-control">
                                            <label for="floatingInput">Иконка</label>
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput" value="{{ $servise->text2 }}"
                                                name="text2" class="form-control">
                                            <label for="floatingInput">Текст</label>
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput" value="{{ $servise->opisanie2 }}"
                                                name="opisanie2" class="form-control">
                                            <label for="floatingInput">Описание</label>
                                        </div>
                                    </section>

                                    <section>
                                        <div class="d-flex justify-content-center  mb-2 fs-6 fw-bold">Третий столбец
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput" value="{{ $servise->icon3 }}"
                                                name="icon3" class="form-control">
                                            <label for="floatingInput">Иконка</label>
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput" value="{{ $servise->text3 }}"
                                                name="text3" class="form-control">
                                            <label for="floatingInput">Текст</label>
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput" value="{{ $servise->opisanie3 }}"
                                                name="opisanie3" class="form-control">
                                            <label for="floatingInput">Описание</label>
                                        </div>
                                    </section>

                                    <section>
                                        <div class="d-flex justify-content-center  mb-2 fs-6 fw-bold">Четвертый столбец
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput" value="{{ $servise->icon4 }}"
                                                name="icon4" class="form-control">
                                            <label for="floatingInput">Иконка</label>
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput" value="{{ $servise->text4 }}"
                                                name="text4" class="form-control">
                                            <label for="floatingInput">Текст</label>
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput" value="{{ $servise->opisanie4 }}"
                                                name="opisanie4" class="form-control">
                                            <label for="floatingInput">Описание</label>
                                        </div>
                                    </section>

                                    <section>
                                        <div class="d-flex justify-content-center  mb-2 fs-6 fw-bold">Пятый столбец
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput" value="{{ $servise->icon5 }}"
                                                name="icon5" class="form-control">
                                            <label for="floatingInput">Иконка</label>
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput" value="{{ $servise->text5 }}"
                                                name="text5" class="form-control">
                                            <label for="floatingInput">Текст</label>
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput" value="{{ $servise->opisanie5 }}"
                                                name="opisanie5" class="form-control">
                                            <label for="floatingInput">Описание</label>
                                        </div>
                                    </section>

                                    <section>
                                        <div class="d-flex justify-content-center  mb-2 fs-6 fw-bold">Шестой столбец
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput" value="{{ $servise->icon6 }}"
                                                name="icon6" class="form-control">
                                            <label for="floatingInput">Иконка</label>
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput" value="{{ $servise->text6 }}"
                                                name="text6" class="form-control">
                                            <label for="floatingInput">Текст</label>
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput" value="{{ $servise->opisanie6 }}"
                                                name="opisanie6" class="form-control">
                                            <label for="floatingInput">Описание</label>
                                        </div>
                                    </section>
                                    <div class="d-flex justify-content-center  mb-5">
                                        <button class="btn btn-warning w-100">Редактировать</button>
                                    </div>
                                </form>

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

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
