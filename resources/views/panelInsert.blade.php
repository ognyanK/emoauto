      <!doctype html>
      <html lang="{{ app()->getLocale() }}">
      <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
          html, body {
            background-color: #fff;
            color: #636b6f;
            /*font-family: 'Raleway', sans-serif;*/
            font-weight: 100;
          }

          #content {
            width: 1200px;
            height:1500px;
            margin: 0 auto;
            box-sizing: border-box;
            background-color: lightgray;
            border: 2px solid gray;
          }
          #content #header{
            width: 100%;
            float: left;
            padding: 10px;
            box-sizing: border-box;
          }
          #content .under_header{
            width: 100%;
            float: center;
            box-sizing: border-box;
          }
          #content .under_header .row{
            width: 33.3%;
            float: left;
            padding-left: 10px;
            box-sizing: border-box;
          }
          #content .under_header .row2{
            width: 25%;
            float: left;
            padding-left: 10px;
            box-sizing: border-box;
            height: 660px;
          }

          #content .under_header .row .under_header_comp50{
            width: 50%;
            height: 50px;
            float: left;
            padding: 5px;
            box-sizing: border-box;
          }
          #content .under_header .row .under_header_comp100{
            width: 100%;
            height: 50px;
            float: left;
            padding: 5px;
            box-sizing: border-box;
          }
          #content .under_header .row .under_header_comp100_long{
            float: center;
            margin-left: 60px;
            box-sizing: border-box;
          }

          #content .under_header .row .under_header_comp50 input[type=text],
          #content .under_header .row .under_header_comp100 input[type=text]{
            width: 100%;
            height: 19px;
          }

          #content .under_header .row .under_header_comp50 select,
          #content .under_header .row .under_header_comp100 select{
            width: 100%;
            height: 25px;
          }

          #content .under_header #containerImg{
            width: 500px;
            float: center;
            margin: 0 auto;
          }
          #content .under_header #containerImg #result {
            width: 100%;
            float: left;
            height: 500px;
            background-color: white;
            border:1px solid gray;
          }
          #content .under_header #containerImg #result .picture{
            width: 25%;
            height: 25%;
            float: left;
            background-color: black;
            box-sizing: border-box;
            border:1px solid gray;
            position: relative;
          }
          #content .under_header #containerImg #result .picture img {
            position: absolute;
            margin: auto;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
          }
          #content .under_header #containerImg #result .picture .remImg{
            width: 20px;
            height: 20px;
            color: white;
            background-color: lightblue;
            text-align: center;
            box-sizing: border-box;
            border:1px solid white;
            border-radius: 2px;
            cursor: pointer;
            position: absolute;
            z-index: 1;
            top:0;
            right: 0;
          }
          #content .under_header #containerImg #result .picture .remImg:hover{
            background-color: orange;
          }
        </style>
      </head>
      <body>
        <div id="content">
          <!--content open-->
          {!! Form::open(array('route' => 'panelInsert.store')) !!}
          <div id="header">
            <!--header open-->
            <div id="label">
              <b>Основна категория</b>
            </div>
            <div id="input">
              <select id="base_category" name="base_category" style="width:220px;">
                <option value="Автомобили">Автомобили</option>
                <option value="Джипове">Джипове</option>
                <option value="Бусове">Бусове</option>
                <option value="Камиони">Камиони</option>
                <option value="Мотоциклети">Мотоциклети</option>
                <option value="Селскостопански">Селскостопански</option>
                <option value="Индустриални">Индустриални</option>
                <option value="Кари">Кари</option>
                <option value="Каравани">Каравани</option>
                <option value="Яхти и Лодки">Яхти и Лодки</option>
                <option value="Ремаркета">Ремаркета</option>
                <option value="Велосипеди">Велосипеди</option>
                <option value="Части">Части</option>
                <option value="Аксесоари">Аксесоари</option>
                <option value="Гуми и джанти">Гуми и джанти</option>
                <option value="Купува">Купува</option>
                <option value="Услуги">Услуги</option>
              </select>
            </div>
          </div><!--header close-->
          <div class="under_header">
            <div class="row">
              <div class="under_header_comp50" id="brand">
                <div class="label">
                  Марка
                </div>
                <div class="input_value">
                  <select class="brands" name="brand">
                    <option selected="" value=""></option>
                    @foreach ($brands as $brand)
                    <option value="{{$brand->name}}"> {{$brand->name}} </option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="under_header_comp50" id="model">
                <div class="label">
                  Модел
                </div>
                <div class="input_value">
                  <select class="models" name="model">
                    <option value=""></option>

                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="under_header_comp50" id="modification">
                <div class="label">
                  Модификация
                </div>
                <div class="input_value">
                  <input type="text" name="modif"></input>
                </div>
              </div>
              <div class="under_header_comp50" id="engine_type">
                <div class="label">
                  Тип двигател
                </div>
                <div class="input_value">
                  <select class="engine_types" name="engine_type">
                    <option value=""> </option>
                    <option value="Бензинов">Бензинов</option>
                    <option value="Дизелов">Дизелов</option>
                    <option value="Електрически">Електрически</option>
                    <option value="Хибриден">Хибриден</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="under_header_comp100" id="state">
                <div class="label">
                  Състояние
                </div>
                <div class="input_value">
                  <input type="radio" name="state" value="1">Нов</input>
                  <input type="radio" name="state" value="0" checked="">Употребяван</input>
                  <input type="radio" name="state" value="2">За части</input>
                </div>
              </div>
            </div>
          </div>
          <!--asdddddddddddddddddddddasasd-->
          <div class="under_header">
            <div class="row">
              <div class="under_header_comp50" id="brand">
                <div class="label">
                  Мощност [к.с.]
                </div>
                <div class="input_value">
                  <input type="text" name="power"></input>
                </div>
              </div>
              <div class="under_header_comp50" id="brand">
                <div class="label">
                  Евростандарт
                </div>
                <div class="input_value">
                  <select class="euro_standard" name="euro_standard">
                    <option value=""> </option>
                    <option value="1">Евро 1</option>
                    <option value="2">Евро 2</option>
                    <option value="3">Евро 3</option>
                    <option value="4">Евро 4</option>
                    <option value="5">Евро 5</option>
                    <option value="6">Евро 6</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="under_header_comp100" id="brand">
                <div class="label">
                  Скоростна кутия
                </div>
                <div class="input_value">
                  <select class="transmission" name="transmission">
                    <option value=""> </option>
                    <option value="Ръчна">Ръчна</option>
                    <option value="Автоматична">Автоматична</option>
                    <option value="Полуавтоматична">Полуавтоматична</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="under_header_comp100" id="brand">
                <div class="label">
                  Категория
                </div>
                <div class="input_value">
                  <select class="category" name="category">
                    <option value=""> </option>
                    <option value="Ван">Ван</option>
                    <option value="Кабрио">Кабрио</option>
                    <option value="Катафалка">Катафалка</option>
                    <option value="Комби">Комби</option>
                    <option value="Купе">Купе</option>
                    <option value="Линейка">Линейка</option>
                    <option value="Миниван">Миниван</option>
                    <option value="Пикап">Пикап</option>
                    <option value="Седан">Седан</option>
                    <option value="Стреч лимузина">Стреч лимузина</option>
                    <option value="Хечбек">Хечбек</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="under_header">
            <div class="row">
              <div class="under_header_comp50" id="brand">
                <div class="label">
                  Цена
                </div>
                <div class="input_value">
                  <input class="price" type="text" name="price"> </input>
                </div>
              </div>
              <div class="under_header_comp50" id="model">
                <div class="label">
                  Валута
                </div>
                <div class="input_value">
                  <select class="currency" name="currency">
                    <option value="лв.">
                      лв.
                    </option>
                    <option value="USD">USD</option>
                    <option value="EUR">EUR</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="under_header_comp50" id="modification">
                <div class="label">
                  Година на производство
                </div>
                <div class="input_value">
                  <select class="year_of_manufacture" name="year_of_manufacture">
                    <option value=""></option>
                    <option value="януари">
                      януари
                    </option>
                    <option value="февруари">
                      февруари
                    </option>
                    <option value="март">
                      март
                    </option>
                    <option value="април">
                      април
                    </option>
                    <option value="май">
                      май
                    </option>
                    <option value="юни">
                      юни
                    </option>
                    <option value="юли">
                      юли
                    </option>
                    <option value="август">
                      август
                    </option>
                    <option value="септември">
                      септември
                    </option>
                    <option value="октомври">
                      октомври
                    </option>
                    <option value="ноември">
                      ноември
                    </option>
                    <option value="декември">декември</option>
                  </select>
                </div>
              </div>
              <div class="under_header_comp50" id="engine_type">
                <div class="label">
                  Дата на производство
                </div>
                <div class="input_value">
                  <select class="date_of_manufacture" name="date_of_manufacture">
                    <option value=""> </option>
                    @for ($i = 2017; $i >= 1930; $i--)
                    <option value="{{$i}}"> {{$i}} </option>
                    @endfor
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="under_header_comp100" id="state">
                <div class="label">
                  Пробег в километри
                </div>
                <div class="input_value">
                  <input class="mileage" type="text" name="mileage"> </input>
                </div>
              </div>
            </div>
          </div>
          <div class="under_header">
            <!-- start -->
            <div class="row">
              <div class="under_header_comp100" id="brand">
                <div class="label">
                  Цвят
                </div>
                <div class="input_value">
                  <select class="color" name="color">
                    <option value=""> </option>
                    <option value="Tъмно син">Tъмно син</option>
                    <option value="Банан">Банан</option>
                    <option value="Беата">Беата</option>
                    <option value="Бежов">Бежов</option>
                    <option value="Бордо">Бордо</option>
                    <option value="Бронз">Бронз</option>
                    <option value="Бял">Бял</option>
                    <option value="Винен">Винен</option>
                    <option value="Виолетов">Виолетов</option>
                    <option value="Вишнев">Вишнев</option>
                    <option value="Графит">Графит</option>
                    <option value="Жълт">Жълт</option>
                    <option value="Зелен">Зелен</option>
                    <option value="Златист">Златист</option>
                    <option value="Кафяв">Кафяв</option>
                    <option value="Керемиден">Керемиден</option>
                    <option value="Кремав">Кремав</option>
                    <option value="Лилав">Лилав</option>
                    <option value="Металик">Металик</option>
                    <option value="Оранжев">Оранжев</option>
                    <option value="Охра">Охра</option>
                    <option value="Пепеляв">Пепеляв</option>
                    <option value="Перла">Перла</option>
                    <option value="Пясъчен">Пясъчен</option>
                    <option value="Резидав">Резидав</option>
                    <option value="Розов">Розов</option>
                    <option value="Сахара">Сахара</option>
                    <option value="Светло сив">Светло сив</option>
                    <option value="Светло син">Светло син</option>
                    <option value="Сив">Сив</option>
                    <option value="Син">Син</option>
                    <option value="Слонова кост">Слонова кост</option>
                    <option value="Сребърен">Сребърен</option>
                    <option value="Т.зелен">Т.зелен</option>
                    <option value="Тъмно сив">Тъмно сив</option>
                    <option value="Тъмно син мет.">Тъмно син мет.</option>
                    <option value="Тъмно червен">Тъмно червен</option>
                    <option value="Тютюн">Тютюн</option>
                    <option value="Хамелеон">Хамелеон</option>
                    <option value="Червен">Червен</option>
                    <option value="Черен">Черен</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="under_header_comp50" id="modification">
                <div class="label">
                  Регион
                </div>
                <div class="input_value">
                  <select class="region" name="region">
                    <option value=""> </option>
                    <option value="Благоевград">Благоевград</option>
                    <option value="Бургас">Бургас</option>
                    <option value="Варна">Варна</option>
                    <option value="Велико Търново">Велико Търново</option>
                    <option value="Видин">Видин</option>
                    <option value="Враца">Враца</option>
                    <option value="Габрово">Габрово</option>
                    <option value="Добрич">Добрич</option>
                    <option value="Дупница">Дупница</option>
                    <option value="Кърджали">Кърджали</option>
                    <option value="Кюстендил">Кюстендил</option>
                    <option value="Ловеч">Ловеч</option>
                    <option value="Монтана">Монтана</option>
                    <option value="Пазарджик">Пазарджик</option>
                    <option value="Перник">Перник</option>
                    <option value="Плевен">Плевен</option>
                    <option value="Пловдив">Пловдив</option>
                    <option value="Разград">Разград</option>
                    <option value="Русе">Русе</option>
                    <option value="Силистра">Силистра</option>
                    <option value="Сливен">Сливен</option>
                    <option value="Смолян">Смолян</option>
                    <option value="София">София</option>
                    <option value="Стара Загора">Стара Загора</option>
                    <option value="Търговище">Търговище</option>
                    <option value="Хасково">Хасково</option>
                    <option value="Шумен">Шумен</option>
                    <option value="Ямбол">Ямбол</option>
                    <option value="Извън страната">Извън страната</option>
                  </select>
                </div>
              </div>
              <div class="under_header_comp50" id="engine_type">
                <div class="label">
                  Населено място
                </div>
                <div class="input_value">
                  <input class="populated_place" type="text" name="populated_place"></input>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="under_header_comp100" id="state">
                <div class="label">
                </div>
                <div class="input_value">
                </div>
              </div>
            </div>
          </div>
          <!--start2-->
          <hr>
          <div class="under_header">
            <div class="row2">
              <div class="under_header_comp100_long" id="brand">
                <div class="label">
                  Безопасност
                </div>
                <div class="input_value">
                  <input type="checkbox" value="GPS система за проследяване" name="safety1">
                  GPS система за проследяване
                </input>
                <br>
                <input type="checkbox" value="Автоматичен контрол на стабилността" name="safety2">
                Автоматичен контрол на стабилността
              </input>
              <br>
              <input type="checkbox" value="Адаптивни предни светлини" name="safety3">
              Адаптивни предни светлини
            </input>
            <br>
            <input type="checkbox" value="Антиблокираща система" name="safety4">
            Антиблокираща система
          </input>
          <br>
          <input type="checkbox" value="Въздушни възглавници - Задни" name="safety5">
          Въздушни възглавници - Задни
        </input>
        <br>
        <input type="checkbox" value="Въздушни възглавници - Предни" name="safety6">
        Въздушни възглавници - Предни
      </input>
      <br>
      <input type="checkbox" value="Въздушни възглавници - Странични" name="safety7">
      Въздушни възглавници - Странични
    </input>
    <br>
    <input type="checkbox" value="Ел. разпределяне на спирачното усилие" name="safety8">
    Ел. разпределяне на спирачното усилие
  </input>
  <br>
  <input type="checkbox" value="Електронна програма за стабилизиране" name="safety9">
  Електронна програма за стабилизиране
</input>
<br>
<input type="checkbox" value="Контрол на налягането на гумите" name="safety10">
Контрол на налягането на гумите
</input>
<br>
<input type="checkbox" value="Парктроник" name="safety11">
Парктроник
</input>
<br>
<input type="checkbox" value="Система ISOFIX" name="safety12">
Система ISOFIX
</input>
<br>
<input type="checkbox" value="Система за динамична устойчивост" name="safety13">
Система за динамична устойчивост
</input>
<br>
<input type="checkbox" value="Система за защита от пробуксуване" name="safety14">
Система за защита от пробуксуване
</input>
<br>
<input type="checkbox" value="Система за изсушаване на накладките" name="safety15">
Система за изсушаване на накладките
</input>
<br>
<input type="checkbox" value="Система за контрол на дистанцията" name="safety16">
Система за контрол на дистанцията
</input>
<br>
<input type="checkbox" value="Система за подпомагане на спирането" name="safety17">
Система за подпомагане на спирането
</input>
<br>
</div>
</div>
</div>
            <div class="row2">
              <div class="under_header_comp100_long" id="modification">
                <div class="label">
                  Комфорт
                </div>
                <div class="input_value">
                  <input type="checkbox" value="Auto Start Stop function" name="comfort1">
                  Auto Start Stop function<br>
                  <input type="checkbox" value="Bluetooth \ handsfree система" name="comfort2">
                  Bluetooth \ handsfree система<br>
                  <input type="checkbox" value="DVD, TV" name="comfort3">
                  DVD, TV<br>
                  <input type="checkbox" value="Steptronic, Tiptronic" name="comfort4">
                  Steptronic, Tiptronic<br>
                  <input type="checkbox" value="USB, audio\video, IN\AUX изводи" name="comfort5">
                  USB, audio\video, IN\AUX изводи<br>
                  <input type="checkbox" value="Адаптивно въздушно окачване" name="comfort6">
                  Адаптивно въздушно окачване<br>
                  <input type="checkbox" value="Безключово палене " name="comfort7">
                  Безключово палене<br>
                  <input type="checkbox" value="Блокаж на диференциала" name="comfort8">
                  Блокаж на диференциала<br>
                  <input type="checkbox" value="Бордкомпютър" name="comfort9">
                  Бордкомпютър<br>
                  <input type="checkbox" value="Датчик за светлина" name="comfort10">
                  Датчик за светлина<br>
                  <input type="checkbox" value="Ел. Огледала" name="comfort11">
                  Ел. Огледала<br>
                  <input type="checkbox" value="Ел. Стъкла" name="comfort12">
                  Ел. Стъкла<br>
                  <input type="checkbox" value="Ел. регулиране на окачването" name="comfort13">
                  Ел. регулиране на окачването<br>
                  <input type="checkbox" value="Ел. регулиране на седалките" name="comfort14">
                  Ел. регулиране на седалките<br>
                  <input type="checkbox" value="Ел. усилвател на волана" name="comfort15">
                  Ел. усилвател на волана<br>
                  <input type="checkbox" value="Климатик" name="comfort16" id='klimatik'">Климатик<br>
                  <input type="checkbox" value="Климатроник" name="comfort17" id='klimatronik'">Климатроник<br>
                  <input type="checkbox" value="Мултифункционален волан" name="comfort18">
                  Мултифункционален волан<br>
                  <input type="checkbox" value="Навигация" name="comfort19">
                  Навигация<br>
                  <input type="checkbox" value="Отопление на волана" name="comfort20">
                  Отопление на волана<br>
                  <input type="checkbox" value="Печка" name="comfort21">
                  Печка<br>
                  <input type="checkbox" value="Подгряване на предното стъкло" name="comfort22">
                  Подгряване на предното стъкло<br>
                  <input type="checkbox" value="Подгряване на седалките" name="comfort23">
                  Подгряване на седалките<br>
                  <input type="checkbox" value="Регулиране на волана" name="comfort24">
                  Регулиране на волана<br>
                  <input type="checkbox" value="Сензор за дъжд" name="comfort25">
                  Сензор за дъжд<br>
                  <input type="checkbox" value="Серво усилвател на волана" name="comfort26">
                  Серво усилвател на волана<br>
                  <input type="checkbox" value="Система за измиване на фаровете" name="comfort27">
                  Система за измиване на фаровете<br>
                  <input type="checkbox" value="Система за контрол на скоростта (автопилот)" name="comfort28">
                  Система за контрол на скоростта (автопилот)<br>
                  <input type="checkbox" value="Стерео уредба" name="comfort29">
                  Стерео уредба<br>
                  <input type="checkbox" value="Филтър за твърди частици" name="comfort30">
                  Филтър за твърди частици<br>
                  <input type="checkbox" value="Хладилна жабка" name="comfort31">
                  Хладилна жабка<br>
                </div>
              </div>
            </div>
            <div class="row2">
              <div class="under_header_comp100_long" id="state">
                <div class="label">
                  Други
                </div>
                <div class="input_value">
                  <input type="checkbox" value="4x4" name="others1">
                  4x4<br>
                  <input type="checkbox" value="7 места" name="others2">
                  7 места<br>
                  <input type="checkbox" value="Buy back" name="others3">
                  Buy back<br>
                  <input type="checkbox" value="Бартер" name="others4">
                  Бартер<br>
                  <input type="checkbox" value="Газова уредба" name="others5">
                  Газова уредба<br>
                  <input type="checkbox" value="Капариран\Продаден" name="others6">
                  Капариран\Продаден<br>
                  <input type="checkbox" value="Катастрофирал" name="others7">
                  Катастрофирал<br>
                  <input type="checkbox" value="Лизинг" name="others8">
                  Лизинг<br>
                  <input type="checkbox" value="Метанова уредба" name="others9">
                  Метанова уредба<br>
                  <input type="checkbox" value="На части" name="others10">
                  На части<br>
                  <input type="checkbox" value="Напълно обслужен" name="others11">
                  Напълно обслужен<br>
                  <input type="checkbox" value="Нов внос" name="others12">
                  Нов внос<br>
                  <input type="checkbox" value="С право на дан.к-т" name="others13">
                  С право на дан.к-т<br>
                  <input type="checkbox" value="С регистрация" name="others14">
                  С регистрация<br>
                  <input type="checkbox" value="Сервизна книжка" name="others15">
                  Сервизна книжка<br>
                  <input type="checkbox" value="Тунинг" name="others16">
                  Тунинг<br>
                </div>
              </div>
              <div class="under_header_comp100_long" id="state">
                <div class="label">
                  Екстериор
                </div>
                <div class="input_value">
                  <input type="checkbox" value="2(3) Врати" name="exterior1">
                  2(3) Врати<br>
                  <input type="checkbox" value="4(5) Врати" name="exterior2">
                  4(5) Врати<br>
                  <input type="checkbox" value="LED фарове" name="exterior3">
                  LED фарове<br>
                  <input type="checkbox" value="Ксенонови фарове" name="exterior4">
                  Ксенонови фарове<br>
                  <input type="checkbox" value="Лети джанти" name="exterior5">
                  Лети джанти<br>
                  <input type="checkbox" value="Металик" name="exterior6">
                  Металик<br>
                  <input type="checkbox" value="Отопляеми чистачки" name="exterior7">
                  Отопляеми чистачки<br>
                  <input type="checkbox" value="Панорамен люк" name="exterior8">
                  Панорамен люк<br>
                  <input type="checkbox" value="Рейлинг на покрива" name="exterior9">
                  Рейлинг на покрива<br>
                  <input type="checkbox" value="Ролбари" name="exterior10">
                  Ролбари<br>
                  <input type="checkbox" value="Спойлери" name="exterior11">
                  Спойлери<br>
                  <input type="checkbox" value="Теглич" name="exterior12">
                  Теглич<br>
                  <input type="checkbox" value="Халогенни фарове" name="exterior13">
                  Халогенни фарове<br>
                  <input type="checkbox" value="Шибедах" name="exterior14">
                  Шибедах<br>
                </div>
              </div>
            </div>
            <div class="row2">
              <div class="under_header_comp100_long" id="state">
                <div class="label">
                  Защита
                </div>
                <div class="input_value">
                  <input type="checkbox" value="Аларма" name="protection1">
                  OFFROAD пакет<br>
                  <input type="checkbox" value="Аларма" name="protection2">
                  Аларма<br>
                  <input type="checkbox" value="Брониран" name="protection3">
                  Брониран<br>
                  <input type="checkbox" value="Имобилайзер" name="protection4">
                  Имобилайзер<br>
                  <input type="checkbox" value="Каско" name="protection5">
                  Каско<br>
                  <input type="checkbox" value="Лебедка" name="protection6">
                  Лебедка<br>
                  <input type="checkbox" value="Подсилени стъкла" name="protection7">
                  Подсилени стъкла<br>
                  <input type="checkbox" value="Централно заключване" name="protection8">
                  Централно заключване<br>
                </div>
              </div>
              <div class="under_header_comp100_long" id="state">
                <div class="label">
                  Интериор
                </div>
                <div class="input_value">
                  <input type="checkbox" value="Велурен салон" name="interior1">
                  Велурен салон<br>
                  <input type="checkbox" value="Десен волан" name="interior2">
                  Десен волан<br>
                  <input type="checkbox" value="Кожен салон" name="interior3">
                  Кожен салон<br>
                </div>
              </div>
              <div class="under_header_comp100_long" id="state">
                <div class="label">
                  Специализирани
                </div>
                <div class="input_value">
                  <input type="checkbox" value="TAXI" name="specialized1">
                  TAXI<br>
                  <input type="checkbox" value="За хора с увреждания" name="specialized2">
                  За хора с увреждания<br>
                  <input type="checkbox" value="Учебен" name="specialized3">
                  Учебен<br>
                </div>
              </div>
          </div>
    </div>
    <hr>
    <div class="under_header">
      <div id="containerImg">
            <div id="result">
            </div>
            <input id="files" type="file" multiple=""/>
            <input type="submit" name="subm" style="width:230px; height:40px; font-weight:bold;" value="ПУБЛИКУВАЙ ОБЯВАТА">
      </div>
    </div>
</div>

<script>
window.onload = function(){
  var at = 0;
  var allFiles = new Array();
  var maxImages = 16;

  //Check File API support
  if(window.File && window.FileList && window.FileReader)
  {
    var filesInput = document.getElementById("files");
    filesInput.addEventListener("change", function(event){

    var files = event.target.files; //FileList object
    var output = document.getElementById("result");

      for(var i = 0; i< files.length; i++)
      {

        var file = files[i];
          //Only pics
          if(!file.type.match('image'))
            continue;

          if(allFiles.length >= maxImages){
            alert("You can't post more than "+maxImages+" images!");
            break;
          }
          allFiles.push(file);
      
       var picReader = new FileReader();
          picReader.addEventListener("load",function(event){
            var picFile = event.target;
            var imgclass = "image"+at;
            var remImgId = at;
            at = at + 1;
            $("#result").append("<div class=\"picture\"><div id=\""+remImgId+"\" class=\"remImg\">X</div><img style=\"display:none;\" class='"+imgclass+"' src='" + picFile.result + "'title='" + picFile.name + "'/></div>");
            var $img = $("."+imgclass+"");

            $img.on('load',function(){
              var width = $img.width();
              var height = $img.height();

              if(width > height) {
                $img.width('100%');
              }else if(height > width){
                $img.height('100%');
              }else{
                $img.width('100%');
                $img.height('100%');
              };

              $img.css("display","block");
            });
  
            output.insertBefore(div,null);
          });
        //Read the image
        picReader.readAsDataURL(file);
      }
    });
  }
  else
  {
    console.log("Your browser does not support File API");
  }

  $("#result").on("click",".remImg", function(){
    allFiles.splice(parseInt($(this).attr('id')), 1);
    $(this).parent().remove();
  });

  $(".brands").change(function(){
    var URL = "/something/"+$(".brands").val();
    $.ajax({
      type: "GET",
      url: URL
    }).done(function( msg ) {
      alert( msg );
    });
  });

  $("form").submit(function() {
    if(validate()){
      return true;
    }else{
      showMissed();
      $('html, body').animate({ scrollTop: 0 }, 'fast');
      setTimeout(function(){ alert("all blue fields must not be empty!"); }, 400);
      return false;
    }
  });

  var for_validation = ['.brands','.engine_types','.transmission','.category','.price','.date_of_manufacture','.year_of_manufacture','.mileage','.region'];

  function validate(){
    for(var i=0;i<for_validation.length;i++){
      if($(for_validation[i]).val() == "")
        return false;
    }
    return true;
  }

  function showMissed(){
    for(var i=0;i<for_validation.length;i++){
      $(for_validation[i]).css("background-color", "lightblue");
    }
  }
}

        </script>

        {!! Form::close() !!}
      </body>
      </html>
