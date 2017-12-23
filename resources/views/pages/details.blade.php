@extends('main')

@section('title', 'Home')

@section('content')
    <div class="details-cotainer">
        <div class="gallerySlideShow">
            <span class="close-btn">
                <img src="http://localhost:8000/images/Close-Icon_White.png" alt="">
            </span>

            <div class="navigation">
            </div>

            <?php 
                $pics = explode(",", $pictures);
                $i = 0;
                foreach ($pics as $key) {
                    if($i==0){
                        echo "<div class=\"current-img\">";
                        echo "<img class=\"pic\" src='/uploads/".$key."' >";
                        echo "</div><div class=\"tumbnails\">";
                    }
                    echo "<div data-imageUrl='/uploads/".$key."' class=\"image\" style=\"background-image: url('/uploads/".$key."');\"></div>";
                $i++;
                }
                echo "</div>";
            ?>
        </div>

        <div class="wrapper wrapper-1000">
            <h1><?php echo $brandValue." ".$model." ".$modification ?></h1>
            <div class="car--details">
                <div class="gallery">
                    <?php 
                        $pics = explode(",", $pictures);
                        $i = 0;
                        foreach ($pics as $key) {
                            if($i==0){
                                echo "<div class=\"current-img\">";
                                echo "<img class=\"pic\" src='/uploads/".$pics[0]."' >";
                                echo "</div><div class=\"tumbnails\">";
                            }
                            echo "<div data-imageUrl='/uploads/".$key."' class=\"image\" style=\"background-image: url('/uploads/".$key."');\"></div>";
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
                        echo "<tr><td><h2>Цена:</h2></td><td><b><h2 class=\"txt-red\">".$price." ".$currency."</h2></b></td></tr>";
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
                        <div class="more-info">
                            <b>Допълнителна информация:</b>

                            <p><?php echo $additional_info?></p>
                        </div>
                        <div class="flex-layout">
                            <div class="info">
                                <div class="contactsI">
                                    <b> За контакти: </b>
                                    <p>Телефон:<br /> <?php echo $phone?><br />
                                    Е-майл:<br /><?php echo $email?></p>
                                </div>
                                <div class="timeI">
                                    <p>Дата на публикуване:<br /> <?php echo $created_at?><br />
                                    Последна промяна:<br /><?php echo $updated_at?></p>
                                </div>
                            </div>
                            <div class="form" id="sub">
                                <form method="POST" id="form_contacts" action="/storeQuestion" id="form" accept-charset="UTF-8" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <?php
                                echo "<input type=\"text\" name=\"post_id\" style=\"display:none\" value=\"".$id."\">";
                                ?>
                                <table>
                                    <tr>
                                        <td>Отправете запитване</td>
                                    </tr>
                                    <tr colspan="3">
                                        <td colspan="2"><textarea name="contacts_question" required></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>Вашето име:</td><td></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="contacts_name" required></td><td><input id="captcha" type="text" name="captcha" disabled style="-webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none; 
  text-align: center;
  background-image: url('http://4.bp.blogspot.com/-EEMSa_GTgIo/UpAgBQaE6-I/AAAAAAAACUE/jdcxZVXelzA/s1600/ca.png');"></td>
                                    </tr>
                                    <tr>
                                        <td>Вашия E-mail:</td><td>Въведете кода:</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="contacts_email" required></td><td><input id="contacts_captcha" type="text" name="contacts_captcha"></td>
                                    </tr>
                                    <tr>
                                        <td>Вашия телефон:</td><td></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="contacts_phone"></td><td><input type="submit" value="Изпрати"></td>
                                    </tr>
                                </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="more-spec">
                <?php
                echo "<div class=\"item\"><b>Особености:</b><br>";
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

                   echo "</div>";

                  function echoList($var, $header, $values){
                    if(isset($var) && $var != ""){
                      $checked = explode(" ", $var);
                      if(count($checked)>0){
                        echo "<b style=\"font-size:15px\">".$header.": </b>";
                        $comma =",";
                        for($i = 0;$i<count($checked);$i++){
                            if($i == count($checked)-1){
                                $comma ="";
                            }
                            echo "<span style=\"font-size:14px\">".$values[$checked[$i]]."".$comma." </span>"; 
                        }
                      } 
                    }
                  }
                ?>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
           var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
            var string_length = 6;
            var ChangeCaptcha = '';
            for (var i=0; i<string_length; i++) {
                var rnum = Math.floor(Math.random() * chars.length);
                ChangeCaptcha += chars.substring(rnum,rnum+1);
            }
            document.getElementById('captcha').value = ChangeCaptcha;

            $("#sub").submit(function(){
                if(document.getElementById('contacts_captcha').value == document.getElementById('captcha').value ) {
                    return true;
                }
                else {
                alert('Please re-check the captcha');
                    return false;
                }
            });
        });

    </script>
@endsection

    