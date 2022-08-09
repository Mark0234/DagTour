@extends('admin.layout')
@section('content')
    <section class="main-block pb-4 pt-2">
        <div class="d-flex justify-content-center mt-5">
            <div class="mt-4">
                <div class="container">
                    <div class="row row-cols-1 row-cols-lg-12 mt-3">
                        <h1 class="mt-3 text-center rounded-3 bg-light py-2">О нас/вторая секция</h1>
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

                                <form action="/about_section_two_edit" method="POST">
                                    @csrf
                                    <section>
                                        <div class="d-flex justify-content-center mb-2 fs-6 fw-bold">Первый столбец
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput" value="{{ $about_section_two->icon1 }}"
                                                name="icon1" class="form-control">
                                            <label for="floatingInput">Иконка</label>
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput" value="{{ $about_section_two->text1 }}"
                                                name="text1" class="form-control">
                                            <label for="floatingInput">Текст</label>
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput"
                                                value="{{ $about_section_two->opisanie1 }}" name="opisanie1"
                                                class="form-control">
                                            <label for="floatingInput">Описание</label>
                                        </div>
                                    </section>

                                    <section>
                                        <div class="d-flex justify-content-center  mb-2 fs-6 fw-bold">Второй столбец
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput" value="{{ $about_section_two->icon2 }}"
                                                name="icon2" class="form-control">
                                            <label for="floatingInput">Иконка</label>
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput" value="{{ $about_section_two->text2 }}"
                                                name="text2" class="form-control">
                                            <label for="floatingInput">Текст</label>
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput"
                                                value="{{ $about_section_two->opisanie2 }}" name="opisanie2"
                                                class="form-control">
                                            <label for="floatingInput">Описание</label>
                                        </div>
                                    </section>

                                    <section>
                                        <div class="d-flex justify-content-center  mb-2 fs-6 fw-bold">Третий столбец
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput" value="{{ $about_section_two->icon3 }}"
                                                name="icon3" class="form-control">
                                            <label for="floatingInput">Иконка</label>
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput" value="{{ $about_section_two->text3 }}"
                                                name="text3" class="form-control">
                                            <label for="floatingInput">Текст</label>
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput"
                                                value="{{ $about_section_two->opisanie3 }}" name="opisanie3"
                                                class="form-control">
                                            <label for="floatingInput">Описание</label>
                                        </div>
                                    </section>

                                    <section>
                                        <div class="d-flex justify-content-center  mb-2 fs-6 fw-bold">Четвертый столбец
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput" value="{{ $about_section_two->icon4 }}"
                                                name="icon4" class="form-control">
                                            <label for="floatingInput">Иконка</label>
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput" value="{{ $about_section_two->text4 }}"
                                                name="text4" class="form-control">
                                            <label for="floatingInput">Текст</label>
                                        </div>
                                        <div class="d-flex justify-content-center mt-1 form-floating">
                                            <input type="text" id="floatingInput"
                                                value="{{ $about_section_two->opisanie4 }}" name="opisanie4"
                                                class="form-control">
                                            <label for="floatingInput">Описание</label>
                                        </div>
                                    </section>
                                    <div class="d-flex justify-content-center mt-3 mb-5">
                                        <button class="btn btn-warning w-100">Редактировать</button>
                                    </div>
                                </form>

                                <!-- ======= Counts Section ======= -->
                                <section id="counts" class="counts">
                                    <div class="container">

                                        <div class="row no-gutters">

                                            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                                                <div class="count-box">
                                                    <i class="{{ $about_section_two->icon1 }}"></i>
                                                    <span data-purecounter-start="0"
                                                        data-purecounter-end="{{ $about_section_two->text1 }}"
                                                        data-purecounter-duration="1" class="purecounter"></span>
                                                    <p><strong>{{ $about_section_two->opisanie1 }}</strong></p>
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                                                <div class="count-box">
                                                    <i class="{{ $about_section_two->icon2 }}"></i>
                                                    <span data-purecounter-start="0"
                                                        data-purecounter-end="{{ $about_section_two->text2 }}"
                                                        data-purecounter-duration="1" class="purecounter"></span>
                                                    <p><strong>{{ $about_section_two->opisanie2 }}</strong></p>
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                                                <div class="count-box">
                                                    <i class="{{ $about_section_two->icon3 }}"></i>
                                                    <span data-purecounter-start="0"
                                                        data-purecounter-end="{{ $about_section_two->text3 }}"
                                                        data-purecounter-duration="1" class="purecounter"></span>
                                                    <p><strong>{{ $about_section_two->opisanie3 }}</strong></p>
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                                                <div class="count-box">
                                                    <i class="{{ $about_section_two->icon4 }}"></i>
                                                    <span data-purecounter-start="0"
                                                        data-purecounter-end="{{ $about_section_two->text4 }}"
                                                        data-purecounter-duration="1" class="purecounter"></span>
                                                    <p><strong>{{ $about_section_two->opisanie4 }}</strong></p>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </section><!-- End Counts Section -->


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
