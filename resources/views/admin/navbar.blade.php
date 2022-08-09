@extends('admin.layout')
@section('content')
    <section class="main-block pb-4 pt-2">
        <div class="d-flex justify-content-center mt-5">
            <div class="mt-4">
                <div class="container">
                    <div class="row row-cols-1 row-cols-lg-12 mt-3">
                        <h1 class="mt-3 text-center">Навбар/переходы</h1>
                        <div class="col bg-light rounded-3" id="main_home">
                            <div class="main bg-light p-2 p-lg-4 ">
                                {{-- алерт для вывода инфы об успешном изменении --}}
                                @if (session('success'))
                                    <div class="alert alert-success text-success  alert-dismissible fade show" role="alert">
                                        <div class="fs-1 text-center"><i class="bi bi-check2-circle"></i></div>
                                        <div class="text-center">{{ session('success') }}</div>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif

                                <form action="/navbar_edit" method="POST">
                                    @csrf

                                    <div class="d-flex justify-content-center mt-1 form-floating">
                                        <input type="text" id="floatingInput" value="{{ $navbar->name }}" name="name"
                                            class="form-control" placeholder="Название компании">
                                        <label for="floatingInput">Название компании</label>
                                    </div>
                                    <div class="d-flex justify-content-center mt-3 form-floating">
                                        <input type="text" id="floatingInput" value="{{ $navbar->perexod1 }}"
                                            name="perexod1" class="form-control" placeholder="Переход 1">
                                        <label for="floatingInput">Переход 1</label>
                                    </div>
                                    <div class="d-flex justify-content-center mt-1 form-floating">
                                        <input type="text" id="floatingInput" value="{{ $navbar->perexod2 }}"
                                            name="perexod2" class="form-control" placeholder="Переход 2">
                                        <label for="floatingInput">Переход 2</label>
                                    </div>
                                    <div class="d-flex justify-content-center mt-1 form-floating">
                                        <input type="text" id="floatingInput" value="{{ $navbar->perexod3 }}"
                                            name="perexod3" value="" class="form-control" placeholder="Переход 3">
                                        <label for="floatingInput">Переход 3</label>
                                    </div>
                                    <div class="d-flex justify-content-center mt-1 form-floating">
                                        <input type="text" id="floatingInput" value="{{ $navbar->perexod4 }}"
                                            name="perexod4" value="" class="form-control" placeholder="Переход 4">
                                        <label for="floatingInput">Переход 4</label>
                                    </div>
                                    <div class="d-flex justify-content-center mt-1 form-floating">
                                        <input type="text" id="floatingInput" value="{{ $navbar->perexod5 }}"
                                            name="perexod5" class="form-control" placeholder="Переход 5">
                                        <label for="floatingInput">Переход 5</label>
                                    </div>
                                    <div class="d-flex justify-content-center mt-1 mb-3 form-floating">
                                        <input type="text" id="floatingInput" value="{{ $navbar->perexod6 }}"
                                            name="perexod6" class="form-control" placeholder="Переход 6">
                                        <label for="floatingInput">Переход 6</label>
                                    </div>
                                    <div class="d-flex justify-content-center mt-1 form-floating">
                                        <input type="text" id="floatingInput" value="{{ $navbar->namebtn }}"
                                            name="namebtn" class="form-control" placeholder="Название кнопки">
                                        <label for="floatingInput">Название кнопки</label>
                                    </div>
                                    <div class="d-flex justify-content-center mt-3 mb-5">
                                        <button class="btn btn-warning w-100">Редактировать</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
