@extends('admin.layout')
@section('content')
    <section class="main-block pb-4 pt-2">
        <div class="d-flex justify-content-center mt-5">
            <div class="mt-4">
                <div class="container">
                    <div class="row row-cols-1 row-cols-lg-12 mt-3">
                        <h1 class="mt-3 text-center">Соц.сети/основное</h1>
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

                                <form action="/network_edit" method="POST">
                                    @csrf

                                    <div class="d-flex justify-content-center mt-1 form-floating">
                                        <input type="text" id="floatingInput" value="{{ $network->whatsapp }}"
                                            name="whatsapp" class="form-control" placeholder="Название компании">
                                        <label for="floatingInput">Whatsapp (вписать с +7)</label>
                                    </div>
                                    <div class="d-flex justify-content-center mt-1 form-floating">
                                        <input type="text" id="floatingInput" value="{{ $network->telegram }}"
                                            name="telegram" class="form-control" placeholder="Переход 1">
                                        <label for="floatingInput">Telegram (вписать с +7)</label>
                                    </div>
                                    <div class="d-flex justify-content-center mt-1 form-floating">
                                        <input type="text" id="floatingInput" value="{{ $network->instagram }}"
                                            name="instagram" class="form-control" placeholder="Переход 2">
                                        <label for="floatingInput">Instagram (ссылка)</label>
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
