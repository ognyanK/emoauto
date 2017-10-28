@extends('main')

@section('title', 'Home')

@section('content')
    <div class="slider-container">
        <div class="wrap-slider">
            <span class="slider-logo">
                <img src="images/logo.png" alt="">
            </span>

            <ul class="bxslider">
                <li class="slides">
                    <img src="images/example-car.png" alt="car">
                </li>
    
                <li class="slides">
                    <img src="images/example-car.png" alt="car">
                </li>
    
                <li class="slides">
                    <img src="images/example-car.png" alt="car">
                </li>
            </ul>
        </div>
    </div>

    <div class="home-feed">
        <div class="wrapper wrapper-1000">
            <div class="flex-layout">
                <div class="offer" style="width:25%; border-radius:10px">
                    <h3>Какво предлагаме?</h3>
    
                    <div class="head">
                        <div class="image_2">
                            <img src="images/keys.jpg" alt="keys">
                        </div>
    
                        <div class="links">
                            <a href="#">Автомобили : 21</a>
                            <a href="#">Джипове : 1</a>
                        </div>
                    </div>
    
                    <div class="our-offers">
                        <h4 style="margin-top:10px">Вижте нашите оферти в :</h4>
    
                        <div class="external-sites">
                            <a href="http://emoauto.mobile.bg/">
                                <img src="images/logo_mobilebg.jpg" alt="logo_mobilebg">
                            </a>
    
                            <a href="http://emoauto.cars.bg/">
                                <img src="images/logo_carsbg.jpg" alt="logo_carsbg">
                            </a>
                        </div>
                        <h4 style="margin-top:10px">Кандидатствайте за лизинг:</h4>
    
                        <div class="external-sites">
                            <a href="https://www.mogo.bg/">
                                <img src="images/mogo_logo.png" alt="logo_mobilebg" width="35%">
                            </a>
    
                            <a href="http://www.bnpparibas-pf.bg/">
                                <img src="images/pariba.png" alt="logo_carsbg" width="35%">
                            </a>
                        </div>
                    </div>
                </div>
    
                <div class="feed" style="width:33%; border-radius:10px">
                    <h3>Най-новите обяви:</h3>
    
                    <div class="news-feed">
                    <?php 
                        foreach ($info as $i) {
                            echo "<div class=\"item\">
                                    <div class=\"image\">";
                            echo "<img src=\"/uploads/".$i['pictures']."\" alt=\"example\">";
                            echo "</div>"; 
                            echo "<div class=\"news-content\">
                                    <h2>".$i['brand']." ".$i['model']."</h2>
                                    
                                    <h3 class=\"price\">".$i['price']." ".$i['currency']."</h3>
                                    <span class=\"date\">01/01/17</span>
                                </div>";
                            echo "</div>";
                        }
                        ?>
                    </div>
                </div>

                <div class="other" style="width:40%; border-radius:10px">
                    <iframe style="width:100%; border-radius:10px 10px 0 0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2073.2185403970993!2d23.22879762936387!3d42.70427600391737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40aa856e3cd80c23%3A0x9c25942e7766ab86!2z0JXQnNCeINCQ0KPQotCe!5e0!3m2!1sbg!2sbg!4v1509175666069" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    
@endsection

    