@extends('admin.layout')
@section('content')
    <section class="main-block pb-4 pt-2">
        <div class="d-flex justify-content-center mt-5">
            <div class="mt-4">
                <div class="container">
                    <div class="row row-cols-1 row-cols-lg-12 mt-3">
                        <div class="d-flex justify-content-center gap-2">
                            <h1 class="mt-3 text-center rounded-3 bg-light py-2">Связь/основное</h1>
                            <button data-bs-toggle="modal" data-bs-target="#exampleModaledit" class="btn btn-warning px-4"><i
                                    class="bi bi-pencil"></i></button>
                        </div>
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

                                <form action="/connection_name_edit" method="POST">
                                    @csrf
                                    <div class="d-flex justify-content-center mt-1 form-floating">
                                        <input type="text" id="floatingInput" value="{{ $connection->address }}"
                                            name="address" class="form-control" placeholder="Переход 1">
                                        <label for="floatingInput">Адресс</label>
                                    </div>
                                    <div class="d-flex justify-content-center mt-1 form-floating">
                                        <input type="text" id="floatingInput" value="{{ $connection->phone }}"
                                            name="phone" class="form-control" placeholder="Переход 2">
                                        <label for="floatingInput">Телефон</label>
                                    </div>
                                    <div class="d-flex justify-content-center mt-1 form-floating">
                                        <input type="text" id="floatingInput" value="{{ $connection->email }}"
                                            name="email" class="form-control" placeholder="Переход 2">
                                        <label for="floatingInput">Email</label>
                                    </div>
                                    <div class="d-flex justify-content-center mt-3 mb-5">
                                        <button class="btn btn-warning w-100">Редактировать</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Modal edit price_name start -->
                        <div class="modal fade" id="exampleModaledit" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
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
                                        <form action="/connection_edit" method="POST">
                                            @csrf
                                            <div class="d-flex justify-content-center mt-1 form-floating">
                                                <input type="text" id="floatingInput" name="connection"
                                                    value="{{ $connection->connection }}" class="form-control">
                                                <label for="floatingInput">Название</label>
                                            </div>
                                            <div class="d-flex justify-content-center mt-1 form-floating">
                                                <input type="text" id="floatingInput"
                                                    value="{{ $connection->description }}" name="description"
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
    </section>
@endsection
