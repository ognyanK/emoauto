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
                <div class="offer">
                    <h2>Какво предлагаме?</h2>
    
                    <div class="head">
                        <div class="image_2">
                            <img src="images/keys.jpg" alt="keys">
                        </div>
    
                        <div class="links">
                            <a href="#">Автомобили</a>
                        </div>
                    </div>
    
                    <div class="our-offers">
                        <h2>Вижте нашите оферти в :</h2>
    
                        <div class="external-sites">
                            <a href="http://emoauto.mobile.bg/">
                                <img src="images/logo_mobilebg.jpg" alt="logo_mobilebg">
                            </a>
    
                            <a href="http://emoauto.cars.bg/">
                                <img src="images/logo_carsbg.jpg" alt="logo_carsbg">
                            </a>
                        </div>
                    </div>
                </div>
    
                <div class="feed">
                    <h1>Най-новите обяви</h1>
    
                    <div class="news-feed">
                        <div class="item">
                            <div class="image">
                                <img src="images/example-car.png" alt="example">
                            </div>
            
                            <div class="news-content">
                                <h2>Tesla Model S</h2>
                                
                                <h3 class="price">100 000€</h3>
                                <p class="miles">11 931</p>
                                <p class="city">Varna</p>
                    
                                <span class="date">01/01/17</span>
                            </div>
                        </div>
        
                        <div class="item">
                            <div class="image">
                                <img src="images/example-car.png" alt="example">
                            </div>
            
                            <div class="news-content">
                                <h2>Tesla Model S</h2>
                                
                                <h3 class="price">100 000€</h3>
                                <p class="miles">11 931</p>
                                <p class="city">Varna</p>
                    
                                <span class="date">01/01/17</span>
                            </div>
                        </div>
        
                        <div class="item">
                            <div class="image">
                                <img src="images/example-car.png" alt="example">
                            </div>
            
                            <div class="news-content">
                                <h2>Tesla Model S</h2>
                                
                                <h3 class="price">100 000€</h3>
                                <p class="miles">11 931</p>
                                <p class="city">Varna</p>
                    
                                <span class="date">01/01/17</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="other"></div>
            </div>
        </div>
    </div>
    
@endsection

    