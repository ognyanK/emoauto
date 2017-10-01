@extends('main')

@section('title', 'Home')

@section('content')
    <div class="details-cotainer">
        <div class="wrapper wrapper-1000">
            <h1>{{ $title }}</h1>
            <hr style="height:4px;border:0px;background-color:red;border-radius:5px">
            <div class="car--details">
                <div class="gallery">
                    <div class="current-img">
                    <?php 
                        $pics = explode(",", $pictures);
                        echo "<img src='/uploads/".$pics[0]."' >";
                    ?>
                        
                    </div>

                    <div class="tumbnails">
                    <?php 
                        foreach ($pics as $key) {
                            echo "<div class=\"image\" style=\"background-image: url('/uploads/".$key."');\"></div>";
                        }
                    ?>
                    </div>
                </div>
                <div class="spec">
                        <?php
                        $keys = array('modif'=>'Модификация','engine_type'=>'Тип двигател','state'=>'Състояние','power'=>'Мощност','euro_standard'=>'Евро стандарт','transmission'=>'Скоростна кутия','category'=>'Категория','year_of_manufacture'=>'Година на производство','date_of_manufacture'=>'Дата на производство','mileage'=>'Пробег','color'=>'Цвят','region'=>'Регион','populated_place'=>'Населено място');

                        echo "<h1>Цена ".$price."</h1><hr style=\"height:2px;border:0px;background-color:red;border-radius:5px\">";

                        foreach ($mainInfo as $key => $value){
                            echo $keys[$key] . " : <b>".$value. "</b><br>";
                        }

                        echo "<hr style=\"height:2px;border:0px;background-color:red;border-radius:5px\">";
                        ?>

                </div>
            </div>

            <div class="the--gallery">
                <span class="close-gallery">
                    <img src="/images/menuCloseBtn.png" alt="menuCloseBtn.png">
                </span>

                <div class="gallery-container">
                    <ul id="imageGallery">
                    <?php 
                        foreach ($pics as $key) {
                            echo "<li data-thumb='/uploads/".$key."' data-src='/uploads/".$key."'>
                                        <img src='/uploads/".$key."' />
                                    </li>";
                        }
                    ?>
                    </ul>
                </div>
            </div>

            <div class="more-spec">
                <div class="item">
                    <h2>Безопасност</h2>

                    <ul>
                        <li>Антиблокираща система</li>
                        <li>Въздушни възглавници - Предни</li>
                        <li>Въздушни възглавници - Странични</li>
                        <li>Система за защита от пробуксуване</li>
                    </ul>
                </div>

                <div class="item">
                    <h2>Безопасност</h2>
                    
                    <ul>
                        <li>Антиблокираща система</li>
                        <li>Въздушни възглавници - Предни</li>
                        <li>Въздушни възглавници - Странични</li>
                        <li>Система за защита от пробуксуване</li>
                    </ul>
                </div>

                <div class="item">
                    <h2>Безопасност</h2>
                    
                    <ul>
                        <li>Антиблокираща система</li>
                        <li>Въздушни възглавници - Предни</li>
                        <li>Въздушни възглавници - Странични</li>
                        <li>Система за защита от пробуксуване</li>
                    </ul>
                </div>

                <div class="item">
                    <h2>Безопасност</h2>
                    
                    <ul>
                        <li>Антиблокираща система</li>
                        <li>Въздушни възглавници - Предни</li>
                        <li>Въздушни възглавници - Странични</li>
                        <li>Система за защита от пробуксуване</li>
                    </ul>
                </div>

                <div class="item">
                    <h2>Безопасност</h2>
                    
                    <ul>
                        <li>Антиблокираща система</li>
                        <li>Въздушни възглавници - Предни</li>
                        <li>Въздушни възглавници - Странични</li>
                        <li>Система за защита от пробуксуване</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

    