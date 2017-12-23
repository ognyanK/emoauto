      <!doctype html>
      <html lang="{{ app()->getLocale() }}">
      <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>emoauto insert/update car</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="icon" href="../images/logo.png">
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
            float: left;
          }

          #content .under_header #seo{
            width: 60%;
            height: 120px; 
            float: left;
          }

          #content .under_header #additional_info{
            width: 60%;
            height: 120px; 
            float: center;
            margin: 0 auto;
          }

          #content #uh,#uh-seo{
            float: left;
            padding: 0 15px 15px 15px;
          }

          #content #uh-seo{
            margin-top: 25px;
          }

          #content .under_header #metadata{
            height: 120px;
            width: 38%;
            float: right;
          }

          #content .under_header #metadata .rowTit {

            float: left;
            margin-top: 2px;
          }
          #content .under_header #metadata .rowTit .tit{
            width: 100px;
            float: left;
          }
          #content .under_header #metadata .rowTit input{
            width: 250px;
          }

          #content .under_header #additional_info textarea,#content .under_header #seo textarea  {
            width: 100%;
            height: 100px;
            resize: none;
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
          #adder{
            color:#EF3B3A;
            float: right;
          }
          #adder:hover{
            text-decoration: underline;
            cursor: pointer;
            color:#EF3B3A;;
          }
        </style>
      </head>
      <body>
        <div id="content">
          <!--content open-->
          <!--{!! Form::open(array('route' => 'panelInsert.store')) !!}-->
          <form method="POST" action="/panelInsert/store" id="form" accept-charset="UTF-8" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div id="header">
            <!--header open-->
            <div id="label">
              <b>Основна категория</b>
            </div>
            <div id="input">
              <select id="base_category" name="base_category" style="width:220px;">
                <?php 
                  $base_cats = array("Автомобили","Джипове","Бусове","Камиони","Мотоциклети","Селскостопански","Индустриални");
                  if(isset($base_category)){
                    for($i=0;$i<count($base_cats);$i++){
                      $add = "";
                      if($base_category == $base_cats[$i]){
                        $add = " selected=\"selected\"";
                      }
                      echo "<option value=\"".$base_cats[$i]."\"".$add.">".$base_cats[$i]."</option>";
                    }
                  }else{
                    for($i = 0;$i<count($base_cats);$i++){
                      echo "<option value=\"".$base_cats[$i]."\">".$base_cats[$i]."</option>";
                    }
                  }
                ?>
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
                    <?php
                      if(isset($brandValue)){
                        for($i=0;$i<count($brands);$i++){
                          $add = "";
                          if($brandValue == $brands[$i]->name){
                            $add = " selected=\"selected\"";
                          }
                          echo "<option value=\"".$brands[$i]->name."\"".$add.">".$brands[$i]->name."</option>";
                        }
                      }else{
                        for($i=0;$i<count($brands);$i++){
                          echo "<option value=\"".$brands[$i]->name."\">".$brands[$i]->name."</option>";
                        }
                      }
                    ?>
                  </select>
                </div>
              </div>
              <div class="under_header_comp50" id="model">
                <div class="label">
                  Модел 
                  <span id="adder">add<span>
                </div>
                <select class="models_" name="models_">
                    <option selected="" value=""></option>
                </select> 
                <div class="input_value">
                  <?php 
                  if(isset($model)){
                    echo "<input class=\"models\" type=\"text\" name=\"model\" value=\"".$model."\" hidden></input>";
                  }else{
                    echo "<input class=\"models\" type=\"text\" name=\"model\" hidden></input>";
                  }
                ?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="under_header_comp50" id="modification">
                <div class="label">
                  Модификация
                </div>
                <div class="input_value">
                <?php 
                  if(isset($modification)){
                    echo "<input type=\"text\" name=\"modification\" value=\"".$modification."\"></input>";
                  }else{
                    echo "<input type=\"text\" name=\"modification\"></input>";
                  }
                ?>
                </div>
              </div>
              <div class="under_header_comp50" id="engine_type">
                <div class="label">
                  Тип двигател
                </div>
                <div class="input_value">
                  <select class="engine_types" name="engine_type">
                    <option value=""> </option>
                      <?php
                        $engine_types = array("Бензинов","Дизелов","Електрически","Хибриден");
                        if(isset($engine_type)){
                          for($i=0;$i<count($engine_types);$i++){
                            $add = "";
                            if($engine_type == $engine_types[$i]){
                              $add = " selected=\"selected\"";
                            }
                            echo "<option value=\"".$engine_types[$i]."\"".$add.">".$engine_types[$i]."</option>";
                          }
                        }else{
                          for($i=0;$i<count($engine_types);$i++){
                            echo "<option value=\"".$engine_types[$i]."\">".$engine_types[$i]."</option>";
                          }
                        }
                      ?>
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
                      <?php
                        $stateTypes = array("Нов","Употребяван","За части");
                        if(isset($state)){
                          for($i=0;$i<count($stateTypes);$i++){
                            $add = "";
                            if($state == $stateTypes[$i]){
                              $add = " checked=\"\"";
                            }
                            echo "<input type=\"radio\" name=\"state\" value=\"".$stateTypes[$i]."\"".$add.">".$stateTypes[$i]."</input>";
                          }
                        }else{
                          for($i=0;$i<count($stateTypes);$i++){
                            if($i == 1){
                               echo "<input type=\"radio\" name=\"state\" value=\"".$stateTypes[$i]."\" checked=\"\">".$stateTypes[$i]."</input>";
                               continue;
                            }
                            echo "<input type=\"radio\" name=\"state\" value=\"".$stateTypes[$i]."\">".$stateTypes[$i]."</input>";
                          }
                        }
                      ?>
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
                  <?php 
                  if(isset($power)){
                    echo "<input class=\"power\" type=\"text\" name=\"power\" value=\"".$power."\"></input>";
                  }else{
                    echo "<input class=\"power\" type=\"text\" name=\"power\"></input>";
                  }
                ?>
                </div>
              </div>
              <div class="under_header_comp50" id="brand">
                <div class="label">
                  Евростандарт
                </div>
                <div class="input_value">
                  <select class="euro_standard" name="euro_standard">
                    <option value=""> </option>
                    <?php
                        if(isset($euro_standard)){
                          for($i=1;$i<=6;$i++){
                            $add = "";
                            if($euro_standard == $i){
                              $add = " selected=\"selected\"";
                            }
                            echo "<option value=\"".$i."\"".$add.">Евро ".$i."</option>";
                          }
                        }else{
                          for($i=1;$i<=6;$i++){
                            echo "<option value=\"".$i."\">Евро ".$i."</option>";
                          }
                        }
                      ?>
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
                    <?php
                      $transmissionValues = array("Ръчна","Автоматична","Полуавтоматична");
                        if(isset($transmission)){
                          for($i=0;$i<count($transmissionValues);$i++){
                            $add = "";
                            if($transmission == $transmissionValues[$i]){
                              $add = " selected=\"selected\"";
                            }
                            echo "<option value=\"".$transmissionValues[$i]."\"".$add.">".$transmissionValues[$i]."</option>";
                          }
                        }else{
                          for($i=0;$i<count($transmissionValues);$i++){
                            echo "<option value=\"".$transmissionValues[$i]."\">".$transmissionValues[$i]."</option>";
                          }
                        }
                      ?>
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
                    <?php
                      $categoryValues = array("Ван","Кабрио","Катафалка","Комби","Купе","Линейка","Миниван","Пикап","Седан",
                        "Стреч лимузина","Хечбек");
                        if(isset($category)){
                          for($i=0;$i<count($categoryValues);$i++){
                            $add = "";
                            if($category == $categoryValues[$i]){
                              $add = " selected=\"selected\"";
                            }
                            echo "<option value=\"".$categoryValues[$i]."\"".$add.">".$categoryValues[$i]."</option>";
                          }
                        }else{
                          for($i=0;$i<count($categoryValues);$i++){
                            echo "<option value=\"".$categoryValues[$i]."\">".$categoryValues[$i]."</option>";
                          }
                        }
                      ?>
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
                  <?php 
                  if(isset($price)){
                    echo "<input class=\"price\" type=\"text\" name=\"price\" value=\"".$price."\"></input>";
                  }else{
                    echo "<input class=\"price\" type=\"text\" name=\"price\"></input>";
                  }
                ?>
                </div>
              </div>
              <div class="under_header_comp50" id="model">
                <div class="label">
                  Валута
                </div>
                <div class="input_value">
                  <select class="currency" name="currency">
                    <?php
                      $currencyValues = array("лв.","USD","EUR");
                        if(isset($currency)){
                          for($i=0;$i<count($currencyValues);$i++){
                            $add = "";
                            if($currency == $currencyValues[$i]){
                              $add = " selected=\"selected\"";
                            }
                            echo "<option value=\"".$currencyValues[$i]."\"".$add.">".$currencyValues[$i]."</option>";
                          }
                        }else{
                          for($i=0;$i<count($currencyValues);$i++){
                            echo "<option value=\"".$currencyValues[$i]."\">".$currencyValues[$i]."</option>";
                          }
                        }
                      ?>
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
                    <?php
                    if(isset($year_of_manufacture)){
                      for($i = 2017;$i>=1930;$i--){
                        $add = "";
                        if($year_of_manufacture == $i){
                        $add = " selected=\"selected\"";
                        }
                        echo "<option value=\"".$i."\"".$add."> ".$i." </option>";
                      }
                    }else{
                      for($i = 2017;$i>=1930;$i--){
                        echo "<option value=\"".$i."\"> ".$i." </option>";
                      }
                    }
                    ?>
                  </select>
                </div>
              </div>
              <div class="under_header_comp50" id="engine_type">
                <div class="label">
                  Месец на производство
                </div>
                <div class="input_value">
                  <select class="date_of_manufacture" name="date_of_manufacture">
                    <option value=""> </option>
                    <?php
                    $months = array("януари","февруари","март","април","май","юни","юли","август","септември","октомври","ноември","декември");
                    if(isset($date_of_manufacture)){
                      #echo "<option value=\"asdads\">adsasddsa</option>";
                      for($i = 0;$i<count($months);$i++){
                        $add = "";
                        if($date_of_manufacture == $i){
                          $add = " selected=\"selected\"";
                        }
                        echo "<option value=\"".$months[$i]."\"".$add."> ".$months[$i]." </option>";
                      }
                    }else{
                      for($i = 0;$i<count($months);$i++){
                        echo "<option value=\"".$months[$i]."\"> ".$months[$i]." </option>";
                      }
                    }
                    ?>
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
                  <?php 
                  if(isset($mileage)){
                    echo "<input class=\"mileage\" type=\"text\" name=\"mileage\" value=\"".$mileage."\"> </input>";
                  }else{
                    echo "<input class=\"mileage\" type=\"text\" name=\"mileage\"> </input>";
                  }
                ?>
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
                    <?php
                      $colorValues = array("Tъмно син","Банан","Беата","Бежов","Бордо","Бронз","Бял","Винен","Виолетов","Вишнев","Графит","Жълт","Зелен","Златист","Кафяв","Керемиден","Кремав","Лилав","Металик","Оранжев","Охра","Пепеляв","Перла","Пясъчен","Резидав","Розов","Сахара","Светло сив","Светло син","Сив","Син","Слонова кост","Сребърен","Т.зелен","Тъмно сив","Тъмно син мет.","Тъмно червен","Тютюн","Хамелеон","Червен","Черен");

                        if(isset($color)){
                          for($i=0;$i<count($colorValues);$i++){
                            $add = "";
                            if($color == $colorValues[$i]){
                              $add = " selected=\"selected\"";
                            }
                            echo "<option value=\"".$colorValues[$i]."\"".$add.">".$colorValues[$i]."</option>";
                          }
                        }else{
                          for($i=0;$i<count($colorValues);$i++){
                            echo "<option value=\"".$colorValues[$i]."\">".$colorValues[$i]."</option>";
                          }
                        }
                      ?>
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
                     <?php
                      $regionValues = array("Благоевград","Бургас","Варна","Велико Търново","Видин","Враца","Габрово","Добрич","Дупница","Кърджали","Кюстендил","Ловеч","Монтана","Пазарджик","Перник","Плевен","Пловдив","Разград","Русе","Силистра","Сливен","Смолян","София","Стара Загора","Търговище","Хасково","Шумен","Ямбол","Извън страната");
                        if(isset($region)){
                          for($i=0;$i<count($regionValues);$i++){
                            $add = "";
                            if($region == $regionValues[$i]){
                              $add = " selected=\"selected\"";
                            }
                            echo "<option value=\"".$regionValues[$i]."\"".$add.">".$regionValues[$i]."</option>";
                          }
                        }else{
                          for($i=0;$i<count($regionValues);$i++){
                            if($regionValues[$i] == "София"){
                              echo "<option value=\"".$regionValues[$i]."\" selected=\"selected\">".$regionValues[$i]."</option>";
                              continue;
                            }
                            echo "<option value=\"".$regionValues[$i]."\">".$regionValues[$i]."</option>";
                          }
                        }
                      ?>
                  </select>
                </div>
              </div>
              <div class="under_header_comp50" id="engine_type">
              </div>
            </div>
            <div class="row">
              <div class="under_header_comp50" id="modification">
                <div class="label">
                  Мобилен телефон
                </div>
                <div class="input_value">
                  <?php
                    if(isset($phone)){
                      echo "<input type=\"text\" class=\"phone\" name=\"phone\" value=\"".$phone."\"> </input>";
                    }else{
                      echo "<input type=\"text\" class=\"phone\" name=\"phone\" value=\"0878503102\"> </input>";
                    }
                  ?>
                </div>
              </div>
              <div class="under_header_comp50" id="engine_type">
                <div class="label">
                  E-mail
                </div>
                <div class="input_value">
                <?php
                    if(isset($email)){
                      echo "<input type=\"text\" class=\"e-mail\" name=\"e-mail\" value=\"".$email."\"> </input>";
                    }else{
                      echo "<input type=\"text\" class=\"e-mail\" name=\"e-mail\" value=\"emoa4@abv.bg\"> </input>";
                    }
                  ?>
                </div>
              </div>
            </div>
          </div>
          <!--start2-->
          <hr>
              <div class="under_header" id="uh">
                <div id="additional_info">
                <b>Допълнителна информация</b>
                <?php
                    if(isset($additional_info)){
                      echo "<textarea id=\"additional_infoTA\" name=\"additional_info\">".$additional_info."</textarea>";
                    }else{
                      echo "<textarea id=\"additional_infoTA\" name=\"additional_info\"></textarea>";
                    }
                  ?>
                </div>
              </div>
    <hr style="margin-top:15px">
          <div class="under_header">
            <div class="row2">
              <div class="under_header_comp100_long" id="brand">
                <div class="label">
                  <b>Безопасност</b>
                </div>
                <div class="input_value">
                  <?php 
                    $values = array("GPS система за проследяване","Автоматичен контрол на стабилността","Адаптивни предни светлини","Антиблокираща система","Въздушни възглавници - Задни","Въздушни възглавници - Предни","Въздушни възглавници - Странични","Ел. разпределяне на спирачното усилие","Електронна програма за стабилизиране","Контрол на налягането на гумите","Парктроник","Система ISOFIX","Система за динамична устойчивост","Система за защита от пробуксуване","Система за изсушаване на накладките","Система за контрол на дистанцията","Система за подпомагане на спирането");
                    
                    if(isset($safety)){
                      $checked = explode(" ", $safety);
                      for($i = 0;$i<count($values);$i++){
                        $add = "";
                        if(in_array ((string)$i, $checked)){
                          $add = " checked=\"\"";
                        }
                        echo "<input type=\"checkbox\" value=\"".$values[$i]."\"".$add." name=\"safety".$i."\">".$values[$i]."<br>";
                      }
                    }else{
                      for($i = 0;$i<count($values);$i++){
                        echo "<input type=\"checkbox\" value=\"".$values[$i]."\" name=\"safety".$i."\">".$values[$i]."<br>";
                      }
                    }
                  ?>
                </div>
              </div>
            </div>
            <div class="row2">
              <div class="under_header_comp100_long" id="modification">
                <div class="label">
                  <b>Комфорт</b>
                </div>
                <div class="input_value">
                <?php
                  $values = array("Auto Start Stop function","Bluetooth \ handsfree система","DVD, TV","Steptronic, Tiptronic","USB, audio\video, IN\AUX изводи","Адаптивно въздушно окачване","Безключово палене ","Блокаж на диференциала","Бордкомпютър","Датчик за светлина","Ел. Огледала","Ел. Стъкла","Ел. регулиране на окачването","Ел. регулиране на седалките","Ел. усилвател на волана","Климатик","Климатроник","Мултифункционален волан","Навигация","Отопление на волана","Печка","Подгряване на предното стъкло","Подгряване на седалките","Регулиране на волана","Сензор за дъжд","Серво усилвател на волана","Система за измиване на фаровете","Система за контрол на скоростта (автопилот)","Стерео уредба","Филтър за твърди частици","Хладилна жабка");

                  if(isset($comfort)){
                      $checked = explode(" ", $comfort);
                      for($i = 0;$i<count($values);$i++){
                        $add = "";
                        if(in_array ((string)$i, $checked)){
                          $add = " checked=\"\"";
                        }
                        echo "<input type=\"checkbox\" value=\"".$values[$i]."\"".$add." name=\"comfort".$i."\">".$values[$i]."<br>";
                      }
                    }else{
                      for($i = 0;$i<count($values);$i++){
                        echo "<input type=\"checkbox\" value=\"".$values[$i]."\" name=\"comfort".$i."\">".$values[$i]."<br>";
                      }
                    }
                ?>
                </div>
              </div>
            </div>
            <div class="row2">
              <div class="under_header_comp100_long" id="state">
                <div class="label">
                  <b>Други</b>
                </div>
                <div class="input_value">
                <?php
                  $values = array("4x4","7 места","Buy back","Бартер","Газова уредба","Капариран\Продаден","Катастрофирал","Лизинг","Метанова уредба","На части","Напълно обслужен","Нов внос","С право на дан.к-т","С регистрация","Сервизна книжка","Тунинг");

                  if(isset($other)){
                      $checked = explode(" ", $other);
                      for($i = 0;$i<count($values);$i++){
                        $add = "";
                        if(in_array ((string)$i, $checked)){
                          $add = " checked=\"\"";
                        }
                        echo "<input type=\"checkbox\" value=\"".$values[$i]."\"".$add." name=\"other".$i."\">".$values[$i]."<br>";
                      }
                    }else{
                      for($i = 0;$i<count($values);$i++){
                        echo "<input type=\"checkbox\" value=\"".$values[$i]."\" name=\"other".$i."\">".$values[$i]."<br>";
                      }
                    }
                ?>
                </div>
              </div>
              <div class="under_header_comp100_long" id="state">
                <div class="label">
                  <b>Екстериор</b>
                </div>
                <div class="input_value">
                <?php
                  $values = array("2(3) Врати","4(5) Врати","LED фарове","Ксенонови фарове","Лети джанти","Металик","Отопляеми чистачки","Панорамен люк","Рейлинг на покрива","Ролбари","Спойлери","Теглич","Халогенни фарове","Шибедах");

                  if(isset($exterior)){
                      $checked = explode(" ", $exterior);
                      for($i = 0;$i<count($values);$i++){
                        $add = "";
                        if(in_array ((string)$i, $checked)){
                          $add = " checked=\"\"";
                        }
                        echo "<input type=\"checkbox\" value=\"".$values[$i]."\"".$add." name=\"exterior".$i."\">".$values[$i]."<br>";
                      }
                    }else{
                      for($i = 0;$i<count($values);$i++){
                        echo "<input type=\"checkbox\" value=\"".$values[$i]."\" name=\"exterior".$i."\">".$values[$i]."<br>";
                      }
                    }
                ?>
                </div>
              </div>
            </div>
            <div class="row2">
              <div class="under_header_comp100_long" id="state">
                <div class="label">
                  <b>Защита</b>
                </div>
                <div class="input_value">
                <?php
                  $values = array("OFFROAD пакет","Аларма","Брониран","Имобилайзер","Каско","Лебедка","Подсилени стъкла","Централно заключване");

                  if(isset($protection)){
                      $checked = explode(" ", $protection);
                      for($i = 0;$i<count($values);$i++){
                        $add = "";
                        if(in_array ((string)$i, $checked)){
                          $add = " checked=\"\"";
                        }
                        echo "<input type=\"checkbox\" value=\"".$values[$i]."\"".$add." name=\"protection".$i."\">".$values[$i]."<br>";
                      }
                    }else{
                      for($i = 0;$i<count($values);$i++){
                        echo "<input type=\"checkbox\" value=\"".$values[$i]."\" name=\"protection".$i."\">".$values[$i]."<br>";
                      }
                    }
                ?>
                </div>
              </div>
              <div class="under_header_comp100_long" id="state">
                <div class="label">
                  <b>Интериор</b>
                </div>
                <div class="input_value">
                <?php
                  $values = array("Велурен салон","Десен волан","Кожен салон");

                  if(isset($interior)){
                      $checked = explode(" ", $interior);
                      for($i = 0;$i<count($values);$i++){
                        $add = "";
                        if(in_array ((string)$i, $checked)){
                          $add = " checked=\"\"";
                        }
                        echo "<input type=\"checkbox\" value=\"".$values[$i]."\"".$add." name=\"interior".$i."\">".$values[$i]."<br>";
                      }
                    }else{
                      for($i = 0;$i<count($values);$i++){
                        echo "<input type=\"checkbox\" value=\"".$values[$i]."\" name=\"interior".$i."\">".$values[$i]."<br>";
                      }
                    }
                ?>
                </div>
              </div>
              <div class="under_header_comp100_long" id="state">
                <div class="label">
                  <b>Специализирани</b>
                </div>
                <div class="input_value">
                <?php
                  $values = array("TAXI","За хора с увреждания","Учебен");

                  if(isset($specialized)){
                      $checked = explode(" ", $specialized);
                      for($i = 0;$i<count($values);$i++){
                        $add = "";
                        if(in_array ((string)$i, $checked)){
                          $add = " checked=\"\"";
                        }
                        echo "<input type=\"checkbox\" value=\"".$values[$i]."\"".$add." name=\"specialized".$i."\">".$values[$i]."<br>";
                      }
                    }else{
                      for($i = 0;$i<count($values);$i++){
                        echo "<input type=\"checkbox\" value=\"".$values[$i]."\" name=\"specialized".$i."\">".$values[$i]."<br>";
                      }
                    }
                ?>
                </div>
              </div>
          </div>
    </div>
    <hr>
    <div class="under_header">
      <div id="containerImg">
            <div id="result">
              <?php 
                if(isset($pictures)){
                  $pics = explode(",", $pictures);
                  $pics = array_filter($pics);
                  $i = 0;
                  foreach ($pics as $pic) {
                    $style = "";
                    if($i == 0){
                      $style = " style=\"border:3px solid orange\"";
                    }
                    echo "<div class=\"picture\" id=\"".$pic."\"".$style."><img style=\"display:none;\" class='image' src='/uploads/".$pic."' title=\"".$pic."\"/><div class=\"remImg\" id=\"".$i."\">X</div></div>";
                    $i++;
                  }
                }
              ?>
            </div>
            <input id="files" type="file" name="files[]" multiple>
            <input id="filenames" name="filenames" type="text" style="display:none;">
            <input id="main_pic" name="main_pic" type="text" style="display:none;">
            <?php 
            if(isset($id)){
              echo "<input id=\"id\" name=\"id\" type=\"text\" style=\"display:none;\" value=\"".$id."\">";
              echo "<input type=\"submit\" name=\"subm\" style=\"width:230px; height:40px; font-weight:bold;\" value=\"ЗАПИШИ ПРОМЕНИТЕ\">";
            }else{
              echo "<input id=\"id\" name=\"id\" type=\"text\" style=\"display:none;\" value=\"-1\">";
              echo "<input type=\"submit\" name=\"subm\" style=\"width:230px; height:40px; font-weight:bold;\" value=\"ПУБЛИКУВАЙ ОБЯВАТА\">";
            }
            ?>
      </div>
    </div>
              <div class="under_header" id="uh-seo">
              SEO
              <hr>
                <div id="seo">
                <b>Microdata</b>
                <?php
                    if(isset($seo)){
                      echo "<textarea id=\"seo\" name=\"seo\">".$seo."</textarea>";
                    }else{
                      echo "<textarea id=\"seo\" name=\"seo\"></textarea>";
                    }
                  ?>
                </div>
                <div id="metadata">
                <b>Мета информация</b><br>
                <div class="rowTit">
                <div class="tit"> Title: </div>
                <?php
                if(isset($meta_title)){
                  echo "<input type=\"text\" id=\"meta_title\" name=\"meta_title\" value=\"".$meta_title."\">";
                }else{
                  echo "<input type=\"text\" id=\"meta_title\" name=\"meta_title\">";
                }
                ?><br>
                </div>
                <div class="rowTit">
                <div class="tit">Description: </div>
                <?php 
                if(isset($meta_description)){
                  echo "<input type=\"text\" id=\"meta_description\" name=\"meta_description\" value=\"".$meta_description."\">";
                }else{
                  echo "<input type=\"text\" id=\"meta_description\" name=\"meta_description\">";
                }?>
                <br>
                </div>
                <div class="rowTit">
                <div class="tit">Keywords: </div>
                <?php 
                if(isset($meta_keywords)){
                  echo "<input type=\"text\" id=\"meta_keywords\" name=\"meta_keywords\" value=\"".$meta_keywords."\">";
                }else{
                  echo "<input type=\"text\" id=\"meta_keywords\" name=\"meta_keywords\">";
                }?><br>
                </div>
                </div>
              </div>
    <hr>
</div>

<script>
window.onload = function(){
  ajax_call();
  var at = 0;
  var allFiles = new Array();
  var maxImages = 16;

  var images = new Array();

  $('#result').on('click', '.picture', function(){
      $('.picture').css("border","1px solid gray")
      $(this).css("border","3px solid orange");
      $('#main_pic').val($(this).attr("id"));
  });
  $('.image').each(function(){
    images.push($(this).attr('title'));

    var width = $(this).width();
    var height = $(this).height();

    if(width > height) {
       $(this).width('100%');
    }else if(height > width){
      $(this).height('100%');
    }else{
      $(this).width('100%');
      $(this).height('100%');
    };
    $(this).css("display","block");
  });

  //Check File API support
  if(window.File && window.FileList && window.FileReader)
  {
    var filesInput = document.getElementById("files");
    filesInput.addEventListener("change", function(event){

    var files = event.target.files; //FileList object
    var output = document.getElementById("result");

      for(var i = 0; i< files.length; i++)
      {

        $("#result").html("");
        var file = files[i];
          //Only pics
          if(!file.type.match('image'))
            continue;

          if(allFiles.length >= maxImages){
            alert("You can't post more than "+maxImages+" images!");
            break;
          }
          allFiles.push(file.name);

          var picReader = new FileReader();
          picReader.fileName = file.name;
          picReader.addEventListener("load",function(event){
            var picFile = event.target;
            var imgclass = "image"+at;
            var remImgId = at;
            at = at + 1;
            $("#result").append("<div class=\"picture\" id=\""+event.target.fileName+"\"><img style=\"display:none;\" class='"+imgclass+"' src='" + picFile.result +"'/><div class=\"remImg\" id=\""+remImgId+"\">X</div></div>");

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
      images = allFiles;
      allFiles = new Array();
      at = 0;
    });
  }
  else
  {
    console.log("Your browser does not support File API");
  }
  $("#adder").on("click", function(){
    var models = prompt("Enter new models, separated by comma.");
    if(models == null || models == "" || models == " ")
      return
    models = ","+models;

    var URL = "/something/add";
    $.ajax({
      type: "POST",
      url: URL,
      data: {
        'id':$(".brands").val(),
        'models': models,
        '_token': $('input[name=_token]').val()
      }
    }).done(function( msg ) {
      ajax_call();
    })
  });

  $("#result").on("click",".remImg", function(){
    images[parseInt($(this).attr('id'))] = "";
    $(this).parent().remove();
  });

  $(".brands").change(function(){
    ajax_call();
  });

  function ajax_call(){
    var models_val = $(".models").val();
    var URL = "/something/"+$(".brands").val();
    $.ajax({
      type: "GET",
      url: URL
    }).done(function( msg ) {
      var res = msg.split(",");
      $(".models_").html("");
      $(".models_").append("<option value=\"\"></option>");
      res.forEach(function(element) {
          if(element == models_val){
            $(".models_").append("<option selected=\"selected\" value=\""+element+"\">"+element+"</option>");
          }else{
            $(".models_").append("<option value=\""+element+"\">"+element+"</option>");
          }
      });
    });
  }
  $(".models_").on("change", function(){
    $(".models").val($(".models_").val());
  });

  $("form").submit(function() {
    if(validate()){
      var pics_final = new Array();
      var main_pic = new Array();
      for(var i=0;i<images.length;i++){
        if(images[i] == $('#main_pic').val()){
          main_pic.push(images[i]);
        }
        else if(images[i]!=""){
          pics_final.push(images[i]);
        }
      }
      $('#filenames').val(main_pic.concat(pics_final));

      //check metadata
      if($("#meta_title").val() == ""){
        $("#meta_title").val($(".brands").val() + " " + $(".models").val());
      }
      if($("#meta_description").val() == ""){
        $("#meta_description").val($("#additional_infoTA").val());
      }
      //end of check



      return true;
    }else{
      showMissed();
      $('html, body').animate({ scrollTop: 0 }, 'fast');
      setTimeout(function(){ alert("all blue fields must not be empty!"); }, 400);
      return false;
    }
  });

  var for_validation = ['.brands','.engine_types','.transmission','.category','.price','.date_of_manufacture','.year_of_manufacture','.mileage','.region','.phone','.e-mail','.power','.models'];

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
