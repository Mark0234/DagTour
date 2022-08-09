<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

//ГОСТЕВОЙ ДОСТУП К РОУТАМ
Route::get('/', [MainController::class, 'welcome'])->name('home');
//регистарция начало
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/check_tel/{tel}', [AuthController::class, 'check_tel']);
Route::post('/login', [AuthController::class, 'login_process']);
Route::post('/register', [AuthController::class, 'register_process']);
//регистарция конец

//контакты начало
Route::post('/contact_add', [MainController::class, 'contact_add'])->name('contact_add');

//Соц.сети начало
Route::get('/network', [MainController::class, 'network'])->name('network');
Route::post('/network_edit', [MainController::class, 'network_edit']);

//подробнее о гостинечно номере
Route::get('/number_about{id}', [MainController::class, 'number_about'])->name('number_about');

//ТОЛЬКО АВТОРИЗИРОВАННЫЕ ИМЕЮТ ДОСТУП К ЭТИМ РОУТАМ
Route::middleware('auth')->group(function () {
    Route::get('/exit', [AuthController::class, 'exit']);
    Route::get('/admin', [MainController::class, 'admin'])->name('admin');
    //навбар начало
    Route::get('/navbar', [MainController::class, 'navbar'])->name('navbar');
    Route::post('/navbar_edit', [MainController::class, 'navbar_edit']);

    //карусель start
    Route::get('/carusel_navbar', [MainController::class, 'carusel_navbar'])->name('carusel_navbar');
    Route::post('/carusel_navbar_add', [MainController::class, 'carusel_navbar_add']);
    Route::post('/carusel_navbar_edit/{id}', [MainController::class, 'carusel_navbar_edit']);
    Route::get('/carusel_navbar_delete/{id}', [MainController::class, 'carusel_navbar_delete']);
    //карусель end
    
    //навбар конец

    //about начало
    Route::get('/about_section_one', [MainController::class, 'about_section_one'])->name('about_section_one');
    Route::post('/about_section_one_edit', [MainController::class, 'about_section_one_edit'])->name('about_section_one_edit');

    Route::get('/about_section_two', [MainController::class, 'about_section_two'])->name('about_section_two');
    Route::post('/about_section_two_edit', [MainController::class, 'about_section_two_edit'])->name('about_section_two_edit');
    //about конец

    //SERVISE начало
    Route::get('/servise', [MainController::class, 'servise'])->name('servise');
    Route::post('/servise_edit', [MainController::class, 'servise_edit'])->name('servise_edit');
    //servise перваая секция
    Route::get('/servise_section_one', [MainController::class, 'servise_section_one'])->name('servise_section_one');
    Route::post('/servise_section_one_edit', [MainController::class, 'servise_section_one_edit']);
    //servise вторая секция
    Route::get('/servise_section_two', [MainController::class, 'servise_section_two'])->name('servise_section_two');
    Route::post('/servise_section_two_add', [MainController::class, 'servise_section_two_add']);
    Route::post('/servise_section_two_edit/{id}', [MainController::class, 'servise_section_two_edit']);
    Route::get('/servise_section_two_delete/{id}', [MainController::class, 'servise_section_two_delete']);
    //SERVISE конец

    //GALLERY начало
    Route::get('/gallery', [MainController::class, 'gallery'])->name('gallery');
    Route::post('/gallery_add', [MainController::class, 'gallery_add']);
    Route::post('/gallery_edit/{id}', [MainController::class, 'gallery_edit']);
    Route::get('/gallery_delete/{id}', [MainController::class, 'gallery_delete']);

    Route::post('/gallery_card_add/{id}', [MainController::class, 'gallery_card_add']);
    Route::post('/gallery_card_edit/{id}', [MainController::class, 'gallery_card_edit']);
    Route::get('/gallery_card_delete/{id}', [MainController::class, 'gallery_card_delete']);
    //GALLERY конец

    //TEAM начало
    Route::get('/team', [MainController::class, 'team'])->name('team');
    Route::post('/team_add', [MainController::class, 'team_add']);
    Route::post('/team_edit/{id}', [MainController::class, 'team_edit']);
    Route::get('/team_delete/{id}', [MainController::class, 'team_delete']);

    Route::post('/team_name_edit', [MainController::class, 'team_name_edit']);
    //TEAM конец

    //Тариф начало
    Route::get('/price', [MainController::class, 'price'])->name('price');
    Route::post('/price_edit', [MainController::class, 'price_edit']);

    Route::post('/price_card_add', [MainController::class, 'price_card_add']);
    Route::post('/price_card_edit/{id}', [MainController::class, 'price_card_edit']);
    Route::get('/price_card_delete/{id}', [MainController::class, 'price_card_delete']);

    Route::post('/price_for_add_one/{id}', [MainController::class, 'price_for_add_one']);
    Route::post('/price_for_edit_one/{id}', [MainController::class, 'price_for_edit_one']);
    Route::get('/price_for_delete_one/{id}', [MainController::class, 'price_for_delete_one']);
    //Тариф конец

    //связь начало
    Route::get('/connection', [MainController::class, 'connection'])->name('connection');
    Route::post('/connection_edit', [MainController::class, 'connection_edit']);
    Route::post('/connection_name_edit', [MainController::class, 'connection_name_edit']);
    //связь конец

    //НОМЕР НАЧАЛО
    Route::get('/number', [MainController::class, 'number'])->name('number');
    Route::post('/number_add', [MainController::class, 'number_add']);
    Route::post('/number_edit/{id}', [MainController::class, 'number_edit']);
    Route::get('/number_delete/{id}', [MainController::class, 'number_delete']);
        //подробнее о номере. добавление карусели
    Route::get('/number_admin_about/{id}', [MainController::class, 'number_admin_about'])->name('number_admin_about');
    Route::post('/number_admin_about_add_img/{id}', [MainController::class, 'number_admin_about_add_img']);
    Route::post('/number_admin_about_edit_img/{id}', [MainController::class, 'number_admin_about_edit_img']);
    Route::get('/number_admin_about_delete_img/{id}', [MainController::class, 'number_admin_about_delete_img']);
        //подробнее о номере. добавление icon
    Route::post('/number_admin_about_add_icon/{id}', [MainController::class, 'number_admin_about_add_icon']);
    Route::post('/number_admin_about_edit_icon/{id}', [MainController::class, 'number_admin_about_edit_icon']);
    Route::get('/number_admin_about_delete_icon/{id}', [MainController::class, 'number_admin_about_delete_icon']);
    //Номер конец

    //Подробнее о номере Дополнение начало
        //первая секция
    Route::post('/addition_one_add/{id}', [MainController::class, 'addition_one_add']);
    Route::post('/addition_one_edit/{id}', [MainController::class, 'addition_one_edit']);
    Route::get('/addition_one_delete/{id}', [MainController::class, 'addition_one_delete']);
        //вторая секция
    Route::post('/addition_two_add/{id}', [MainController::class, 'addition_two_add']);
    Route::post('/addition_two_edit/{id}', [MainController::class, 'addition_two_edit']);
    Route::get('/addition_two_delete/{id}', [MainController::class, 'addition_two_delete']);
        //третья секция
    Route::post('/addition_three_add/{id}', [MainController::class, 'addition_three_add']);
    Route::post('/addition_three_edit/{id}', [MainController::class, 'addition_three_edit']);
    Route::get('/addition_three_delete/{id}', [MainController::class, 'addition_three_delete']);
    //Подробнее о номере Дополнение конец
    //НОМЕР КОНЕЦ
});
