@extends('admin.layout')
@section('content')
    <section class="section_backgrond pb-4 main-block pb-4 pt-2">
        <div class="d-flex justify-content-center mt-5">
            <div class="mt-4">
                <div class="container">
                    <div class="row row-cols-1 row-cols-lg-12 mt-3">
                        <h1 class="mt-3 text-center rounded-3 bg-light py-2">О нас/первая секция</h1>
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

                                <form action="/about_section_one_edit" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <section>
                                        <div class="d-flex justify-content-center mb-2 fs-3 fw-bold">Главная
                                        </div>
                                        <label for="floatingInput">Выбрать фото</label>
                                        <div class="d-flex justify-content-center mt-1">
                                            <input type="file" id="floatingInput" name="img" class="form-control">
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput" value="{{ $about_section_one->slogan }}"
                                                name="slogan" class="form-control">
                                            <label for="floatingInput">Слоган</label>
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput"
                                                value="{{ $about_section_one->description }}" name="description"
                                                class="form-control">
                                            <label for="floatingInput">Описание</label>
                                        </div>
                                    </section>

                                    <section>
                                        <div class="d-flex justify-content-center mb-2 fs-6 fw-bold">Первый столбец
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput" value="{{ $about_section_one->icon1 }}"
                                                name="icon1" class="form-control">
                                            <label for="floatingInput">Иконка</label>
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput" value="{{ $about_section_one->text1 }}"
                                                name="text1" class="form-control">
                                            <label for="floatingInput">Текст</label>
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput"
                                                value="{{ $about_section_one->opisanie1 }}" name="opisanie1"
                                                class="form-control">
                                            <label for="floatingInput">Описание</label>
                                        </div>
                                    </section>

                                    <section>
                                        <div class="d-flex justify-content-center  mb-2 fs-6 fw-bold">Второй столбец
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput" value="{{ $about_section_one->icon2 }}"
                                                name="icon2" class="form-control">
                                            <label for="floatingInput">Иконка</label>
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput" value="{{ $about_section_one->text2 }}"
                                                name="text2" class="form-control">
                                            <label for="floatingInput">Текст</label>
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput"
                                                value="{{ $about_section_one->opisanie2 }}" name="opisanie2"
                                                class="form-control">
                                            <label for="floatingInput">Описание</label>
                                        </div>
                                    </section>

                                    <section>
                                        <div class="d-flex justify-content-center  mb-2 fs-6 fw-bold">Третий столбец
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput" value="{{ $about_section_one->icon3 }}"
                                                name="icon3" class="form-control">
                                            <label for="floatingInput">Иконка</label>
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput" value="{{ $about_section_one->text3 }}"
                                                name="text3" class="form-control">
                                            <label for="floatingInput">Текст</label>
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput"
                                                value="{{ $about_section_one->opisanie3 }}" name="opisanie3"
                                                class="form-control">
                                            <label for="floatingInput">Описание</label>
                                        </div>
                                    </section>

                                    <section>
                                        <div class="d-flex justify-content-center  mb-2 fs-6 fw-bold">Четвертый столбец
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput" value="{{ $about_section_one->icon4 }}"
                                                name="icon4" class="form-control">
                                            <label for="floatingInput">Иконка</label>
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput" value="{{ $about_section_one->text4 }}"
                                                name="text4" class="form-control">
                                            <label for="floatingInput">Текст</label>
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput"
                                                value="{{ $about_section_one->opisanie4 }}" name="opisanie4"
                                                class="form-control">
                                            <label for="floatingInput">Описание</label>
                                        </div>
                                    </section>
                                    <div class="d-flex justify-content-center  mb-5">
                                        <button class="btn btn-warning w-100">Редактировать</button>
                                    </div>
                                </form>


                                <!-- ======= About Section ======= -->
                                <section id="about" class="about bg-light">
                                    <div class="container">

                                        <div class="row no-gutters">
                                            <div style="background: url(' /public/storage/about/{{ $about_section_one->img }}') center center no-repeat;"
                                                class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start">
                                            </div>
                                            <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
                                                <div class="content d-flex flex-column justify-content-center">
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

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
