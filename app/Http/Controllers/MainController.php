<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage; //подключение storage

//модели навбар
use App\Models\NavbarModel;
use App\Models\CaruselModel;
//модели о нас
use App\Models\About_section_oneModel;
use App\Models\About_section_twoModel;
//модели servise
use App\Models\ServiseModel;
use App\Models\Servise_section_oneModel;
use App\Models\Servise_section_twoModel;
//модели gallery
use App\Models\GalleryModel;
use App\Models\Gallery_card_Model;
//модели сотрудники
use App\Models\TeamModel;
use App\Models\Team_name_Model;
//модели Тариф
use App\Models\Price_name_Model;
use App\Models\Price_card_Model;
use App\Models\Price_for_one_Model;
//модели связь
use App\Models\ConnectionModel;
//модели контакты
use App\Models\ContactModel;
//модели контакты
use App\Models\NetworkModel;
//модели номер
use App\Models\Number_add_Model;
use App\Models\Number_add_img_Model;
use App\Models\Number_add_icon_Model;
use App\Models\Addition_oneModel;
use App\Models\Addition_twoModel;
use App\Models\Addition_threeModel;
use Illuminate\Http\Request;

class MainController extends Controller
{   
    //ВЫВОД В ГЛАВНУЮ HOME (шаблон)
        public function welcome()
    {
        $navbar = NavbarModel::first();
        $carusel = CaruselModel::all();
        //
        $about_section_one = About_section_oneModel::first();
        $about_section_two = About_section_twoModel::first();
        //
        $servise = ServiseModel::first();
        $servise_section_one = Servise_section_oneModel::first();
        $servise_section_two = Servise_section_twoModel::all();
        //
        $gallery = GalleryModel::all();
        $gallery_card = Gallery_card_Model::all();
        //
        $team = TeamModel::all();
        $team_name = Team_name_Model::first();
        //
        $price = Price_name_Model::first();
        $price_one = Price_for_one_Model::all();
        $price_card = Price_card_Model::all();
        //
        $connection = ConnectionModel::first();
        //
        $network = NetworkModel::first();
        //
        $number = Number_add_Model::all();
        //
        $number_img = Number_add_img_Model::all();
        //
        $number_icon = Number_add_icon_Model::all();
        //
        $addition_one = Addition_oneModel::all();
        //
        $addition_two = Addition_twoModel::all();
        //
        $addition_three = Addition_threeModel::all();
        //
         return view('welcome',['navbar' => $navbar,'carusel' => $carusel,'about_section_one' => $about_section_one,'about_section_two' => $about_section_two,'servise' => $servise,'servise_section_one' => $servise_section_one,'servise_section_two' => $servise_section_two,'gallery' => $gallery,'gallery_card' => $gallery_card,'team' => $team,'team_name' => $team_name,'price' => $price,'price_one' => $price_one,'price_card' => $price_card,'connection' => $connection,'network' => $network,'number' => $number,'number_img' => $number_img,'addition_two' => $addition_two ,'addition_three' => $addition_three,'number_icon' => $number_icon,'addition_one' => $addition_one]);
    }
    //ВЫВОД В ГЛАВНУЮ HOME (шаблон) конец

    //ВЫВОДЫ В АДМИН ПАНЕЛЬ начало

    //вывод в админ навбар
    public function navbar()
    {
        $navbar = NavbarModel::first();
        return view('admin.navbar',['navbar' => $navbar]);
    }

    //вывод в админ навбар карусель
    public function carusel_navbar()
    {
       $carusel = CaruselModel::all();
       return view('admin.carusel_navbar',['carusel' => $carusel]);
    }

    //вывод в админ о нас первая секция
    public function about_section_one()
    {
        $about_section_one = About_section_oneModel::first();
        return view('admin.about_section_one',['about_section_one' => $about_section_one]);
    }

    //вывод в админ о нас вторая секция
    public function about_section_two()
    {
        $about_section_two = About_section_twoModel::first();
        return view('admin.about_section_two',['about_section_two' => $about_section_two]);
    }

    //вывод в админ servise
    public function servise()
    {
        $servise = ServiseModel::first();
        return view('admin.servise',['servise' => $servise]);
    }

    //вывод в админ servise первая секция
    public function servise_section_one()
    {
        $servise_section_one = Servise_section_oneModel::first();
        return view('admin.servise_section_one',['servise_section_one' => $servise_section_one]);
    }

    //вывод в админ навбар карусель
    public function servise_section_two()
    {
       $servise_section_two = Servise_section_twoModel::all();
       return view('admin.servise_section_two',['servise_section_two' => $servise_section_two]);
    }

    //вывод в админ навбар карусель
    public function gallery()
    {
       $gallery = GalleryModel::all();
       $gallery_card = Gallery_card_Model::all();
       return view('admin.gallery',['gallery' => $gallery,'gallery_card' => $gallery_card]);
    }

    //вывод в админ сотрудники
    public function team()
    {
       $team = TeamModel::all();
       $team_name = Team_name_Model::first();
       return view('admin.team',['team' => $team,'team_name' => $team_name]);
    }

    //вывод в админ сотрудники
    public function price()
    {
       $price = Price_name_Model::first();
       $price_one = Price_for_one_Model::all();
       $price_card = Price_card_Model::all();
       return view('admin.price',['price' => $price,'price_one' => $price_one,'price_card' => $price_card]);
    }

    //вывод в админ связь
    public function connection()
    {
       $connection = ConnectionModel::first();
       return view('admin.connection',['connection' => $connection]);
       
    }

    //вывод в админ соц.сети
    public function network()
    {
       $network = NetworkModel::first();
       return view('admin.network',['network' => $network]);
    }

    //вывод в админ гостиничеый номер
    public function number()
    { 
        $number = Number_add_Model::all();
        $number_icon = Number_add_icon_Model::all();
        return view('admin.number',['number' => $number , 'number_icon' => $number_icon ]);
    }

    //вывод в админ гостиничеый подробнее о номере
    public function number_admin_about($id)
    { 
        $number = Number_add_Model::find($id);
        $number_img = Number_add_img_Model::all();
        $number_icon = Number_add_icon_Model::all();
        $addition_one = Addition_oneModel::all();
        $addition_two = Addition_twoModel::all();
        $addition_three = Addition_threeModel::all();
        return view('admin.number_admin_about',['number' => $number,'number_img' => $number_img,'addition_two' => $addition_two ,'addition_three' => $addition_three,'number_icon' => $number_icon,'addition_one' => $addition_one]);
    }

    
    //вывод в админ гостиничеый подробнее о номере
    public function number_about($id)
    { 
        $number = Number_add_Model::find($id);
        $number_img = Number_add_img_Model::all();
        $number_icon = Number_add_icon_Model::all();
        $addition_one = Addition_oneModel::all();
        $addition_two = Addition_twoModel::all();
        $addition_three = Addition_threeModel::all();
        return view('number_about',['number' => $number,'number_img' => $number_img,'number_icon' => $number_icon,'addition_two' => $addition_two ,'addition_three' => $addition_three,'addition_one' => $addition_one]);
    }
    //ВЫВОДЫ В АДМИН ПАНЕЛЬ конец


    //РЕДАКТИРОВАНИЕ ДОБАВЛЕНОГО С ПОМОЩЬЮ УСЛОВИЯ
    //navbar
    public function navbar_edit(Request $data)
    {
        $navbar = NavbarModel::first();
        $navbar->name = $data->input('name');
        $navbar->perexod1 = $data->input('perexod1');
        $navbar->perexod2 = $data->input('perexod2');
        $navbar->perexod3 = $data->input('perexod3');
        $navbar->perexod4 = $data->input('perexod4');
        $navbar->perexod5 = $data->input('perexod5');
        $navbar->perexod6 = $data->input('perexod6');
        $navbar->namebtn = $data->input('namebtn');

        $navbar->save();

        return redirect()->route('navbar')->with('success', 'Успешно отредактировано!');
    }

    //редактирование о нас первая секция
    public function about_section_one_edit(Request $data)
    {
        $about_section_one = About_section_oneModel::first();
        $about_section_one->slogan = $data->input('slogan');
        $about_section_one->description = $data->input('description');
        //редактирование изображения
        if(!empty($data->img)){
            $file = $data->file('img');
            $upload_folder = 'public/about';
            $filename = $file->getClientOriginalName();
            //условие для того чтобы не удалялась дефолтная фотка
            if($about_section_one->img != 'people_bas.jpg'){

                Storage::delete($upload_folder .'/'. $about_section_one->img);
            }
            $about_section_one->img = $filename;
            Storage::putFileAs($upload_folder, $file, $filename);
        }
        //первая колонка
        $about_section_one->icon1 = $data->input('icon1');
        $about_section_one->text1 = $data->input('text1');
        $about_section_one->opisanie1 = $data->input('opisanie1');
        //вторая колонка
        $about_section_one->icon2 = $data->input('icon2');
        $about_section_one->text2 = $data->input('text2');
        $about_section_one->opisanie2 = $data->input('opisanie2');
        //третья колонка
        $about_section_one->icon3 = $data->input('icon3');
        $about_section_one->text3 = $data->input('text3');
        $about_section_one->opisanie3 = $data->input('opisanie3');
        //четвертая колонка
        $about_section_one->icon4 = $data->input('icon4');
        $about_section_one->text4 = $data->input('text4');
        $about_section_one->opisanie4 = $data->input('opisanie4');

        $about_section_one->save();

        return redirect()->route('about_section_one')->with('success', 'Успешно отредактировано!');
    }

    //редактирование карусели навбар
        public function carusel_navbar_edit($id, Request $data)
    {
        $carusel = CaruselModel::find($id);
        $carusel->name = $data->input('name');
        $carusel->description = $data->input('description');
        //редактирование изображения
        if(!empty($data->img)){
            $file = $data->file('img');
            $upload_folder = 'public/carusel';
            $filename = $file->getClientOriginalName();
            //условие для того чтобы не удалялась дефолтная фотка
            if($carusel->img != 'navbar3.jpg'){

                Storage::delete($upload_folder .'/'. $carusel->img);
            }
            $carusel->img = $filename;
            Storage::putFileAs($upload_folder, $file, $filename);
        }
        $carusel->save();

        return redirect()->route('carusel_navbar',$id)->with('success', 'Успешно отредактировано!');
        
    }

    //редактирование о нас вторая секция
    public function about_section_two_edit(Request $data)
    {
        $about_section_two = About_section_twoModel::first();

        //первая колонка
        $about_section_two->icon1 = $data->input('icon1');
        $about_section_two->text1 = $data->input('text1');
        $about_section_two->opisanie1 = $data->input('opisanie1');
        //вторая колонка
        $about_section_two->icon2 = $data->input('icon2');
        $about_section_two->text2 = $data->input('text2');
        $about_section_two->opisanie2 = $data->input('opisanie2');
        //третья колонка
        $about_section_two->icon3 = $data->input('icon3');
        $about_section_two->text3 = $data->input('text3');
        $about_section_two->opisanie3 = $data->input('opisanie3');
        //четвертая колонка
        $about_section_two->icon4 = $data->input('icon4');
        $about_section_two->text4 = $data->input('text4');
        $about_section_two->opisanie4 = $data->input('opisanie4');

        $about_section_two->save();

        return redirect()->route('about_section_two')->with('success', 'Успешно отредактировано!');
    }

    //редактирование сервис
    public function servise_edit(Request $data)
    {
        $servise = ServiseModel::first();
        //Основное
        $servise->slogan = $data->input('slogan');
        $servise->description = $data->input('description');
        //первая колонка
        $servise->icon1 = $data->input('icon1');
        $servise->text1 = $data->input('text1');
        $servise->opisanie1 = $data->input('opisanie1');
        //вторая колонка
        $servise->icon2 = $data->input('icon2');
        $servise->text2 = $data->input('text2');
        $servise->opisanie2 = $data->input('opisanie2');
        //третья колонка
        $servise->icon3 = $data->input('icon3');
        $servise->text3 = $data->input('text3');
        $servise->opisanie3 = $data->input('opisanie3');
        //четвертая колонка
        $servise->icon4 = $data->input('icon4');
        $servise->text4 = $data->input('text4');
        $servise->opisanie4 = $data->input('opisanie4');
        //пятая колонка
        $servise->icon5 = $data->input('icon5');
        $servise->text5 = $data->input('text5');
        $servise->opisanie5 = $data->input('opisanie5');
        //пятая колонка
        $servise->icon6 = $data->input('icon6');
        $servise->text6 = $data->input('text6');
        $servise->opisanie6 = $data->input('opisanie6');

        $servise->save();

        return redirect()->route('servise')->with('success', 'Успешно отредактировано!');
    }

    //редактирование servise первая секция
    public function servise_section_one_edit(Request $data)
    {
        $servise_section_one = Servise_section_oneModel::first();

        
        $servise_section_one->slogan = $data->input('slogan');
        $servise_section_one->description = $data->input('description');

        $servise_section_one->save();

        return redirect()->route('servise_section_one')->with('success', 'Успешно отредактировано!');
    }

    //редактирование servise вторая секция
        public function servise_section_two_edit($id, Request $data)
    {
        $servise_section_two = Servise_section_twoModel::find($id);

        $servise_section_two->name = $data->input('name');
        $servise_section_two->description = $data->input('description');

        $servise_section_two->save();

        return redirect()->route('servise_section_two',$id)->with('success', 'Успешно отредактировано!');
        
    }

    //редактирование галлерея/основное
        public function gallery_edit($id, Request $data)
    {
        $gallery = GalleryModel::find($id);
        $gallery->name = $data->input('name');
        $gallery->save();

        return redirect()->route('gallery',$id)->with('success', 'Успешно отредактировано!');
        
    }


    //редактирование Галерея/карточки
        public function gallery_card_edit($id, Request $data)
    {
        $gallery_card = Gallery_card_Model::find($id);
        $gallery_card->name = $data->input('name');
        //редактирование изображения
        if(!empty($data->img)){
            $file = $data->file('img');
            $upload_folder = 'public/card';
            $filename = $file->getClientOriginalName();
            $gallery_card->img = $filename;
            Storage::putFileAs($upload_folder, $file, $filename);
        }
        $gallery_card->save();

        return redirect()->route('gallery',$id)->with('success', 'Успешно отредактировано!');
        
    }

    //редактирование Сотрудники карточка
        public function team_edit($id, Request $data)
    {
        $team = TeamModel::find($id);
        $team->name = $data->input('name');
        $team->opisanie = $data->input('opisanie');
        //редактирование изображения
        if(!empty($data->img)){
            $file = $data->file('img');
            $upload_folder = 'public/team';
            $filename = $file->getClientOriginalName();
            $team->img = $filename;
            Storage::putFileAs($upload_folder, $file, $filename);
        }
        $team->save();

        return redirect()->route('team',$id)->with('success', 'Успешно отредактировано!');
        
    }

    //редактирование Сотрудники основное
    public function team_name_edit(Request $data)
    {
        $team_name = Team_name_Model::first();

        $team_name->worker = $data->input('worker');
        $team_name->description = $data->input('description');

        $team_name->save();

        return redirect()->route('team')->with('success', 'Успешно отредактировано!');
    }

    //редактирование Тарифы
    public function price_edit(Request $data)
    {
        $price = Price_name_Model::first();
        //Основное
        $price->price = $data->input('price');
        $price->description = $data->input('description');

        $price->save();

        return redirect()->route('price')->with('success', 'Успешно отредактировано!');
    }


    //редактирование Тариф добавление услуг
        public function price_for_edit_one($id, Request $data)
    {
        $price_one = Price_for_one_Model::find($id);
        $price_one->name = $data->input('name');
        $price_one->save();

        return redirect()->route('price',$id)->with('success', 'Успешно отредактировано!');
        
    }

    //редактирование Тариф добавление карточки
        public function price_card_edit($id, Request $data)
    {
        $price_card = Price_card_Model::find($id);
        $price_card->rate = $data->input('rate');
        $price_card->rubl = $data->input('rubl');
        $price_card->date = $data->input('date');
        $price_card->investment = $data->input('investment');
        $price_card->booking = $data->input('booking');

        $price_card->save();


        return redirect()->route('price',$id)->with('success', 'Успешно отредактировано!');
        
    }

    //редактирование связь основное
    public function connection_edit(Request $data)
    {
        $connection = ConnectionModel::first();

        $connection->connection = $data->input('connection');
        $connection->description = $data->input('description');

        $connection->save();

        return redirect()->route('connection')->with('success', 'Успешно отредактировано!');
    }

    //редактирование связь контент
    public function connection_name_edit(Request $data)
    {
        $connection = ConnectionModel::first();

        $connection->address = $data->input('address');
        $connection->phone = $data->input('phone');
        $connection->email = $data->input('email');

        $connection->save();

        return redirect()->route('connection')->with('success', 'Успешно отредактировано!');
    }

    //редактирование соц.сети
        public function network_edit(Request $data)
    {
        $network = NetworkModel::first();

        $network->whatsapp = $data->input('whatsapp');
        $network->telegram = $data->input('telegram');
        $network->instagram = $data->input('instagram');
        $network->save();

        return redirect()->route('network')->with('success', 'Успешно отредактировано!');

        
    }

    //редактирование Номер/редактирование карточки номера
        public function number_edit($id, Request $data)
    {
        $number = Number_add_Model::find($id);
        $number->name = $data->input('name');
        $number->description = $data->input('description');
        $number->price = $data->input('price');
        $number->date = $data->input('date');
        //редактирование изображения
        if(!empty($data->img)){
            $file = $data->file('img');
            $upload_folder = 'public/number';
            $filename = $file->getClientOriginalName();
            $number->img = $filename;
            Storage::putFileAs($upload_folder, $file, $filename);
        }
        $number->save();

        return redirect()->route('number',$id)->with('success', 'Успешно отредактировано!');
        
    }

    //редактирование Номер/редактирование карусели
        public function number_admin_about_edit_img($id, Request $data)
    {
        $number_img = Number_add_img_Model::find($id);
        //редактирование изображения
        if(!empty($data->img)){
            $file = $data->file('img');
            $upload_folder = 'public/number_img';
            $filename = $file->getClientOriginalName();
            $number_img->img = $filename;
            Storage::putFileAs($upload_folder, $file, $filename);
        }
        $number_img->save();

        return redirect()->route('number_admin_about',$number_img->tab)->with('success', 'Успешно отредактировано!');
        
    }

    //редактирование Номер/иконки
        public function number_admin_about_edit_icon($id, Request $data)
    {
        $number_icon = Number_add_icon_Model::find($id);
        $number_icon->name = $data->input('name');
        $number_icon->description = $data->input('description');

        $number_icon->save();

        return redirect()->route('number_admin_about',$number_icon->list)->with('success', 'Успешно отредактировано!');
        
    }

     //редактирование Номер/дополнение первая секция
        public function addition_one_edit($id, Request $data)
    {
        $addition_one = Addition_oneModel::find($id);
        $addition_one->name = $data->input('name');

        $addition_one->save();

        return redirect()->route('number_admin_about',$addition_one->addition)->with('success', 'Успешно отредактировано!');
        
    }

     //редактирование Номер/дополнение вторая секция
        public function addition_two_edit($id, Request $data)
    {
        $addition_two = Addition_twoModel::find($id);
        $addition_two->name = $data->input('name');

        $addition_two->save();

        return redirect()->route('number_admin_about',$addition_two->addition_two)->with('success', 'Успешно отредактировано!');
        
    }

     //редактирование Номер/дополнение третья секция
        public function addition_three_edit($id, Request $data)
    {
        $addition_three = Addition_threeModel::find($id);
        $addition_three->name = $data->input('name');

        $addition_three->save();

        return redirect()->route('number_admin_about',$addition_three->addition_three)->with('success', 'Успешно отредактировано!');
        
    }
    //РЕДАКТИРОВАНИЕ ДОБАВЛЕНОГО С ПОМОЩЬЮ УСЛОВИЯ конец

    //ДОБАВЛЕНИЕ ПО УСЛОВИЮ ЕСЛИ НИЧЕГО НЕТ ТО БУДЕТ ДОБАВЛЕНО ТО ЧТО УКАЗАНО
        public function admin()
    {
        //Навбар
        if(NavbarModel::count() == 0) {
            $navbar = new NavbarModel();
            $navbar->name = 'Zeroo';
            $navbar->perexod1 = 'Главная';
            $navbar->perexod2 = 'О нас';
            $navbar->perexod3 = 'Сервис';
            $navbar->perexod4 = 'Портфолио';
            $navbar->perexod5 = 'Сотрудники';
            $navbar->perexod6 = 'Контакты';
            $navbar->namebtn = 'Связаться';
            $navbar->save();
        }
        //о нас первая секция
        if(About_section_oneModel::count() == 0) {

            $about_section_one = new About_section_oneModel();
            $about_section_one->slogan = 'Вместе веселей';
            $about_section_one->description = 'Зовите своих друзей и вперед за новыми преключениями. Покорять просторы мира вместе это здорово!';
            $about_section_one->img = 'people_bas.jpg';
            //первая колонка
            $about_section_one->icon1 = 'bx bx-receipt';
            $about_section_one->text1 = 'Гид';
            $about_section_one->opisanie1 = 'Наш гид вам все покажет и расскажет';
            //вторая колонка
            $about_section_one->icon2 = 'bx bx-images';
            $about_section_one->text2 = 'Пейзаж';
            $about_section_one->opisanie2 = 'Фотографируйте чтоб не забыть такую красоту';
            //третья колонка
            $about_section_one->icon3 = 'bx bx-cube-alt';
            $about_section_one->text3 = 'Игры';
            $about_section_one->opisanie3 = 'Интересные маршруты, разгадки , игры ждут вас в наших путешествиях';
            //четвертая колонка
            $about_section_one->icon4 = 'bx bx-shield';
            $about_section_one->text4 = 'Безопастность';
            $about_section_one->opisanie4 = 'Вы всегда можете получить медицинскую помощь в любое время суток';
    
            $about_section_one->save();
        }

        //о нас вторая секция
        if(About_section_twoModel::count() == 0) {

            $about_section_two = new About_section_twoModel();
            //первая колонка
            $about_section_two->icon1 = 'bi bi-emoji-smile';
            $about_section_two->text1 = '1000';
            $about_section_two->opisanie1 = 'Довольных клиентов';
            //вторая колонка
            $about_section_two->icon2 = 'bi bi-journal-richtext';
            $about_section_two->text2 = '20';
            $about_section_two->opisanie2 = 'Более Туров';
            //третья колонка
            $about_section_two->icon3 = 'bi bi-headset';
            $about_section_two->text3 = '200';
            $about_section_two->opisanie3 = 'Звонков неделю';
            //четвертая колонка
            $about_section_two->icon4 = 'bi bi-people';
            $about_section_two->text4 = '15';
            $about_section_two->opisanie4 = 'Авто такси в ваших руках';
    
            $about_section_two->save();
        }


        //о нас первая секция
        if(ServiseModel::count() == 0) {

            $servise = new ServiseModel();
            $servise->slogan = 'Дагестан';
            $servise->description = 'Спрятанные в тёмных ущельях, сохранившие самобытность маленькие посёлки — каждый со своим укладом и ремесленными чудесами, будто сошедшие с книжных иллюстраций чабаны на удивительной красоты лошадях, живописные перевалы, бурлящие потоки горных речушек и грозный шум Терека, каньоны невиданной глубины и, конечно, горы.... Да, это наши экскурсии в Дагестан. «Это вам не Швейцария, это ещё круче», — говорят те, кто уже успел здесь побывать, проникнувшись красотой природы после просмотра фильма Сергея Бодрова «Кавказский пленник». Или начитавшись книг о древней культуре — ведь античному Дербенту не тысяча и даже не две, а целых пять тысяч лет. Сравнение со Швейцарией возникло в связи со схожестью климата, да и пейзажей тоже. Но дагестанская природа кажется более дикой, строгой, естественной.';
            //первая колонка
            $servise->icon1 = 'bi bi-briefcase';
            $servise->text1 = 'Не откладывай работу';
            $servise->opisanie1 = 'Если вы работаете удаленно то это для самый выгодный вариант, совместить работу с отдыхом';
            //вторая колонка
            $servise->icon2 = 'bi bi-card-checklist';
            $servise->text2 = 'Расписание';
            $servise->opisanie2 = 'Для вашего удобство мы подобрали вам рассписание по городам дагестана и ее достопримечательностям';
            //третья колонка
            $servise->icon3 = 'bi bi-bar-chart';
            $servise->text3 = 'Wi-fi';
            $servise->opisanie3 = 'Высоко скоростной интернет везде там где вы остановитесь и даже в наших автобусах';
            //четвертая колонка
            $servise->icon4 = 'bi bi-binoculars';
            $servise->text4 = 'Животные';
            $servise->opisanie4 = 'Можеете взять с собой вашего любимого питомца и вместе смотреть красоту Дагестана';

            //пятая колонка
            $servise->icon5 = 'bi bi-brightness-high';
            $servise->text5 = 'Солнце';
            $servise->opisanie5 = 'У нас теплый климат можете даже не переживать о резких перепадах тепературы';

            //шестая колонка
            $servise->icon6 = 'bi bi-calendar4-week';
            $servise->text6 = 'Вовремя';
            $servise->opisanie6 = 'Встретим с аэропорта и отвезем до места назначения';

            $servise->save();
        }

        //о нас вторая секция
        if(Servise_section_oneModel::count() == 0) {

            $servise_section_one = new Servise_section_oneModel();
            
            $servise_section_one->slogan = 'Почему мы?';
            $servise_section_one->description = 'Вот уже на протяжении многих лет мы обеспечиваем хороший отдых для наших клиентов что в свою очередь клиенты выбирают нас.';
    
            $servise_section_one->save();
        }

        //сотрудники
        if(Team_name_Model::count() == 0) {

            $team_name = new Team_name_Model();
            
            $team_name->worker = 'Сотрудники';
            $team_name->description = 'Наши сотрудники всегда готовы вам помочь';
    
            $team_name->save();
        }

        //о нас вторая секция
        if(Price_name_Model::count() == 0) {

            $price = new Price_name_Model();
            //Основное
            $price->price = 'Цены';
            $price->description = 'У нас всегда доступные цены на самые горячие туры';

            $price->save();
        }

        //о нас вторая секция
        if(ConnectionModel::count() == 0) {

            $connection = new ConnectionModel();
            
            $connection->connection = 'Связь с нами';
            $connection->description = 'Вы можете позвонить нам для уточнения или же написать нам на Email';
            $connection->address = 'Москва. ул Тверская';
            $connection->phone = '8 (800) 555 55 55';
            $connection->email = 'email.2022@mail.ru';
    
            $connection->save();
        }

        //соц.сети
        if(NetworkModel::count() == 0) {

            $network = new NetworkModel();
            
            $network->whatsapp = '#';
            $network->telegram = '#';
            $network->instagram = '#';
    
            $network->save();
        }


        return view('admin.index');
    }
    //ДОБАВЛЕНИЕ ПО УСЛОВИЮ ЕСЛИ НИЧЕГО НЕТ ТО БУДЕТ ДОБАВЛЕНО ТО ЧТО УКАЗАНО конец!


    //ДОБАВЛЕНИЕ обычное начало!
    //Карусель начало
    public function carusel_navbar_add(Request $data) {

        $valid = $data->validate([
        'name' => ['required', 'min:3', 'max:24',],
        'description' => ['required', 'min:1'],
        ]);


        $carusel = new CaruselModel();
        $carusel->name = $data->input('name');
        $carusel->description = $data->input('description');
            $file = $data->file('img');
            $upload_folder = 'public/carusel';
            $filename = $file->getClientOriginalName();
            $carusel->img = $filename;
            Storage::putFileAs($upload_folder, $file, $filename);   //редактирование фото
        $carusel->save();

        return redirect()->route('carusel_navbar')->with('success', 'Успешно добавлено!');
    }
    //Сервис/вторая секция
    public function servise_section_two_add(Request $data) {

        $valid = $data->validate([
        'name' => ['required', 'min:1'],
        'description' => ['required', 'min:1'],
        ]);
        $servise_section_two = new Servise_section_twoModel();

        $servise_section_two->name = $data->input('name');
        $servise_section_two->description = $data->input('description');

        $servise_section_two->save();

        return redirect()->route('servise_section_two')->with('success', 'Успешно добавлено!');
    }

    //Галлерея/основное
    public function gallery_add(Request $data) {

        $valid = $data->validate([
        'name' => ['required', 'min:1'],
        ]);

        $gallery = new GalleryModel();
        $gallery->name = $data->input('name');

        $gallery->save();

        return redirect()->route('gallery')->with('success', 'Успешно добавлено!');
    }

    //Галерея/добовление карточек
    public function gallery_card_add(Request $data, $id) {

        $valid = $data->validate([
        'name' => ['required', 'min:1', 'max:50',],
        'img' => ['required'],
        ]);


        $gallery_card = new Gallery_card_Model();
        $gallery_card->name = $data->input('name');
        $gallery_card->tab = $id;
            $file = $data->file('img');
            $upload_folder = 'public/card';
            $filename = $file->getClientOriginalName();
            $gallery_card->img = $filename;
            Storage::putFileAs($upload_folder, $file, $filename); 
        $gallery_card->save();

        return redirect()->route('gallery')->with('success', 'Успешно добавлено!');
    }
    //Галерея/добовление Сотрудников
    public function team_add (Request $data) {

        $valid = $data->validate([
        'img' => ['required'],
        'name' => ['required', 'min:1'],
        ]);

        $team = new TeamModel();
        $team->name = $data->input('name');
        $team->opisanie = $data->input('opisanie');
            $file = $data->file('img');
            $upload_folder = 'public/team';
            $filename = $file->getClientOriginalName();
            $team->img = $filename;
            Storage::putFileAs($upload_folder, $file, $filename);
        $team->save();

        return redirect()->route('team')->with('success', 'Успешно добавлено!');
    }
    //Тариф добавление услуг
    public function price_for_add_one(Request $data, $id) {

        $valid = $data->validate([
        'name' => ['required', 'min:1'],
        ]);

        $price_one = new Price_for_one_Model();
        $price_one->name = $data->input('name');
        $price_one->tab = $id;

        $price_one->save();

        return redirect()->route('price')->with('success', 'Успешно добавлено!');
    }

    //Тариф добавление карточки
    public function price_card_add(Request $data) {

        $valid = $data->validate([
        'rate' => ['required', 'min:1'],
        'rubl' => ['required', 'min:1'],
        'date' => ['required', 'min:1'],
        'investment' => ['required', 'min:1'],
        'booking' => ['required', 'min:1'],
        ]);

        $price_card = new Price_card_Model();
        $price_card->rate = $data->input('rate');
        $price_card->rubl = $data->input('rubl');
        $price_card->date = $data->input('date');
        $price_card->investment = $data->input('investment');
        $price_card->booking = $data->input('booking');

        $price_card->save();

        return redirect()->route('price')->with('success', 'Успешно добавлено!');
    }

    //Контакт отправка формы
    public function contact_add(Request $data) {

        $valid = $data->validate([
        'name' => ['required', 'min:1'],
        'email' => ['required', 'min:1'],
        'tel' => ['required', 'min:1', 'max:12'],
        'message' => ['required', 'min:1', 'max:256'],
        ]);

        $contact = new ContactModel();
        $contact->name = $data->input('name');
        $contact->email = $data->input('email');
        $contact->tel = $data->input('tel');
        $contact->message = $data->input('message');

        $contact->save();

        $token = "5487973132:AAEQlpaXzl6Q769v_b_W-RdgoMr1u-DK_Dw";
        $chat_id = "-721997309";
        $arr = array(

            'Время: ' => date('Y-m-d').' - '.date('h-m'),
            'Имя: ' => $data->input('name'),
            'Email: ' => $data->input('email'),
            'Телефон: ' => $data->input('tel'),
            'Сообщение: ' => $data->input('message'),
        );

        $txt = '';

        foreach($arr as $key => $value) {
            $txt .= "<b>".$key."</b> ".$value."%0A";
        };

        $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

        // return redirect()->route('home')->with('success', 'Ваша заявка принята!');
        return redirect('/#form_contact')->with('success', 'Ваша заявка принята!'); 
        //переход на блок по id
    }

     //Номер/добавление номера
    public function number_add (Request $data) {

        $valid = $data->validate([
        'img' => ['required'],
        'description' => ['required'],
        'price' => ['required'],
        'date' => ['required'],
        'name' => ['required'],
        ]);

        $number = new Number_add_Model();
        $number->name = $data->input('name');
        $number->description = $data->input('description');
        $number->price = $data->input('price');
        $number->date = $data->input('date');
            $file = $data->file('img');
            $upload_folder = 'public/number';
            $filename = $file->getClientOriginalName();
            $number->img = $filename;
            Storage::putFileAs($upload_folder, $file, $filename);
        $number->save();

        return redirect()->route('number')->with('success', 'Успешно добавлено!');
    }

    //Номер/добавление картинки номеру about
    public function number_admin_about_add_img (Request $data, $id) {

        $valid = $data->validate([
        'img' => ['required'],
        ]);

        $number_img = new Number_add_img_Model();
        $number_img->tab = $id;
            $file = $data->file('img');
            $upload_folder = 'public/number_img';
            $filename = $file->getClientOriginalName();
            $number_img->img = $filename;
            Storage::putFileAs($upload_folder, $file, $filename);

        $number_img->save();

        return redirect()->route('number_admin_about', $id)->with('success', 'Успешно добавлено!');
        
    }

    //Номер/добавление иконки номеру about
    public function number_admin_about_add_icon (Request $data, $id) {

        $valid = $data->validate([
        'name' => ['required'],
        'description' => ['required'],
        ]);

        $number_icon = new Number_add_icon_Model();
        $number_icon->list = $id;
        $number_icon->name = $data->input('name');
        $number_icon->description = $data->input('description');

        $number_icon->save();

        return redirect()->route('number_admin_about', $id)->with('success', 'Успешно добавлено!');
        
    }

    //Номер/ДОПОЛНЕНИЕ первая секция
    public function addition_one_add (Request $data, $id) {

        $valid = $data->validate([
        'name' => ['required'],
        ]);

        $addition_one = new Addition_oneModel();
        $addition_one->addition = $id;
        $addition_one->name = $data->input('name');

        $addition_one->save();

        return redirect()->route('number_admin_about', $id)->with('success', 'Успешно добавлено!');
        
    }

    //Номер/ДОПОЛНЕНИЕ вторая секция
    public function addition_two_add (Request $data, $id) {

        $valid = $data->validate([
        'name' => ['required'],
        ]);

        $addition_two = new Addition_twoModel();
        $addition_two->addition_two = $id;
        $addition_two->name = $data->input('name');

        $addition_two->save();

        return redirect()->route('number_admin_about', $id)->with('success', 'Успешно добавлено!');
        
    }

    //Номер/ДОПОЛНЕНИЕ трутья секция
    public function addition_three_add (Request $data, $id) {

        $valid = $data->validate([
        'name' => ['required'],
        ]);

        $addition_three = new Addition_threeModel();
        $addition_three->addition_three = $id;
        $addition_three->name = $data->input('name');

        $addition_three->save();

        return redirect()->route('number_admin_about', $id)->with('success', 'Успешно добавлено!');
        
    }
    //ДОБАВЛЕНИЕ обычное конец!

    // МЕТОД УДАЛЕНИЯ НАЧАЛО

        // карусель удаление
        public function carusel_navbar_delete($id)
    {
        CaruselModel::find($id)->delete();
        return redirect()->route('carusel_navbar');
    }

        //Сервис/вторая секция
        public function servise_section_two_delete($id)
    {
        Servise_section_twoModel::find($id)->delete();
        return redirect()->route('servise_section_two');
    }

       // галлерея/основное удаление
        public function gallery_delete($id)
    {
        Gallery_card_Model::where('tab', '=', $id)->delete();
        GalleryModel::find($id)->delete();
        return redirect()->route('gallery');
    }

       // галлерея/карточки удаление
        public function gallery_card_delete($id)
    {
        Gallery_card_Model::find($id)->delete();
        return redirect()->route('gallery');
    }

       // сотрудники карточка
        public function team_delete($id)
    {
        TeamModel::find($id)->delete();
        return redirect()->route('team');
    }

       // Тариф/удаление услуги
        public function price_for_delete_one($id)
    {
        Price_for_one_Model::find($id)->delete();
        return redirect()->route('price');
    }

       // Тариф/удаление карточка
        public function price_card_delete($id)
    {
        Price_for_one_Model::where('tab', '=', $id)->delete();
        Price_card_Model::find($id)->delete();
        return redirect()->route('price');
    }

      // Номер/удаление номера
        public function number_delete($id)
    {
        Number_add_Model::find($id)->delete();
        return redirect()->route('number');
    }

      // Номер/удаление карусели 
        public function number_admin_about_delete_img($id)
    {
        $id_card = Number_add_img_Model::find($id)->tab;
        Number_add_img_Model::find($id)->delete();

        return redirect()->route('number_admin_about', $id_card);
    }

      // Номер/удаление icon
        public function number_admin_about_delete_icon($id)
    {
        $id_list = Number_add_icon_Model::find($id)->list;
        Number_add_icon_Model::find($id)->delete();

        return redirect()->route('number_admin_about', $id_list);
    }

      // Номер/удаление дополнение первая секция
        public function addition_one_delete($id)
    {
        $id_addition_one = Addition_oneModel::find($id)->addition;
        Addition_oneModel::find($id)->delete();

        return redirect()->route('number_admin_about', $id_addition_one);
    }

      // Номер/удаление дополнение вторая секция
        public function addition_two_delete($id)
    {
        $id_addition_two = Addition_twoModel::find($id)->addition_two;
        Addition_twoModel::find($id)->delete();

        return redirect()->route('number_admin_about', $id_addition_two);
    }

      // Номер/удаление дополнение третья секция
        public function addition_three_delete($id)
    {
        $id_addition_three = Addition_threeModel::find($id)->addition_three;
        Addition_threeModel::find($id)->delete();

        return redirect()->route('number_admin_about', $id_addition_three);
    }

    //МЕТОД УДАЛЕНИЯ КОНЕЦ
}
