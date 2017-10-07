@extends('main')

@section('title', 'Home')

@section('content')
    <div class="details-cotainer">
        <div class="wrapper wrapper-1000">
            <h1><?php echo $brandValue." ".$model ?></h1>
            <hr style="height:3px;border:0px;background-color:#8e0f0f;border-radius:5px">
            <div class="car--details">
                <div class="gallery-redo">
                    <?php 
                        $pics = explode(",", $pictures);
                        $i = 0;
                        foreach ($pics as $key) {
                            if($i==0){
                                echo "<div class=\"current-img-redo\">";
                                echo "<img class=\"pic\" src='/uploads/".$pics[0]."' >";
                                echo "</div><div class=\"tumbnails-redo\">";
                            }else{
                                echo "<div class=\"image-redo\"><img class=\"pic\" src='/uploads/".$key."' ></div>";
                            }
                        $i++;
                        }
                        echo "</div>";
                    ?>
                </div>
                <div class="spec">
                        <?php
                        $keys = array('Тип двигател','Мощност','Eвростандарт','Модификация','Състояние','Скоростна кутия','Категория','Пробег','Регион','Населено място','Цвят');
                        $values = array($engine_type,$power,$euro_standard,$modification,$state,$transmission,$category,$mileage,$region,$populated_place,$color);

                        

                        echo "<table id=\"spec_table\" style=\"width:100%\">";
                        echo "<tr><td><h2>Цена:</h2></td><td><b><h2>".$price." ".$currency."</h2></b></td></tr>";
                        echo "<tr><td>Дата на производство:</td><td><b>".$date_of_manufacture." ".$year_of_manufacture."г.</b></td></tr>";

                        for($i = 0;$i<count($keys);$i++){
                            if(isset($values[$i]) && $values[$i] != ""){
                                if($keys[$i] == 'Пробег'){
                                    echo "<tr><td>".$keys[$i].":</td><td><b>".$values[$i]." км.</b></td></tr>";
                                    continue;
                                }
                                echo "<tr><td>".$keys[$i].":</td><td><b>".$values[$i]."</b></td></tr>";
                            }
                        }
                        echo "<tr><td></td><td></td><tr>";

                        echo "</table>";


                        ?>
                    
                    <div class="contacts">
                        <div class="flex-layout">
                            <div class="form">
                                <table>
                                    <tr>
                                        <td>Отправете запитване</td>
                                    </tr>
                                    <tr colspan="3">
                                        <td colspan="2"><textarea></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>Вашето име:</td><td></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="contacts_name"></td><td>captcha</td>
                                    </tr>
                                    <tr>
                                        <td>Вашия E-mail:</td><td>Въведете кода:</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="contacts_email"></td><td><input type="text" name="contacts_captcha"></td>
                                    </tr>
                                    <tr>
                                        <td>Вашия телефон:</td><td></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="contacts_phone"></td><td><input type="submit" value="Изпрати"></td>
                                    </tr>
                                </table>
                            </div>
                                
                            <div class="info">
                                <p>За контакти: Принти нещо...</p>
                                <p>Е-майл: Принти нещо...</p>
                            </div>
                        </div>

                        <div class="more-info">
                            <h2>Heading...</h2>

                            <p>Description....</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="more-spec">
                <?php
                    $values = array("GPS система за проследяване","Автоматичен контрол на стабилността","Адаптивни предни светлини","Антиблокираща система","Въздушни възглавници - Задни","Въздушни възглавници - Предни","Въздушни възглавници - Странични","Ел. разпределяне на спирачното усилие","Електронна програма за стабилизиране","Контрол на налягането на гумите","Парктроник","Система ISOFIX","Система за динамична устойчивост","Система за защита от пробуксуване","Система за изсушаване на накладките","Система за контрол на дистанцията","Система за подпомагане на спирането");

                    echoList($safety, "Безопасност", $values);


                   $values = array("Auto Start Stop function","Bluetooth \ handsfree система","DVD, TV","Steptronic, Tiptronic","USB, audio\video, IN\AUX изводи","Адаптивно въздушно окачване","Безключово палене ","Блокаж на диференциала","Бордкомпютър","Датчик за светлина","Ел. Огледала","Ел. Стъкла","Ел. регулиране на окачването","Ел. регулиране на седалките","Ел. усилвател на волана","Климатик","Климатроник","Мултифункционален волан","Навигация","Отопление на волана","Печка","Подгряване на предното стъкло","Подгряване на седалките","Регулиране на волана","Сензор за дъжд","Серво усилвател на волана","Система за измиване на фаровете","Система за контрол на скоростта (автопилот)","Стерео уредба","Филтър за твърди частици","Хладилна жабка");

                   echoList($comfort, "Комфорт", $values);

                  $values = array("4x4","7 места","Buy back","Бартер","Газова уредба","Капариран\Продаден","Катастрофирал","Лизинг","Метанова уредба","На части","Напълно обслужен","Нов внос","С право на дан.к-т","С регистрация","Сервизна книжка","Тунинг");

                  echoList($other, "Други", $values);

                  $values = array("2(3) Врати","4(5) Врати","LED фарове","Ксенонови фарове","Лети джанти","Металик","Отопляеми чистачки","Панорамен люк","Рейлинг на покрива","Ролбари","Спойлери","Теглич","Халогенни фарове","Шибедах");

                  echoList($exterior, "Екстериор", $values);

                  $values = array("OFFROAD пакет","Аларма","Брониран","Имобилайзер","Каско","Лебедка","Подсилени стъкла","Централно заключване");

                  echoList($protection, "Защита", $values);

                  $values = array("Велурен салон","Десен волан","Кожен салон");

                  echoList($interior, "Интериор", $values);

                  $values = array("TAXI","За хора с увреждания","Учебен");

                  echoList($specialized, "Специализирани", $values);

                  function echoList($var, $header, $values){
                    if(isset($var) && $var != ""){
                      $checked = explode(" ", $var);
                      if(count($checked)>0){
                        echo "<div class=\"item\"><h2>".$header."</h2><ul>";
                        for($i = 0;$i<count($checked);$i++){
                            echo "<li>".$values[$checked[$i]]."</li>"; 
                        }
                        echo "</ul></div>";
                      } 
                    }
                  }
                ?>
            </div>
        </div>
    </div>
@endsection

    