@extends('main')

@section('title', 'Home')

@section('content')
    <div class="slider-container">
        <div class="wrap-slider">
            <span class="slider-logo">
                <img src="images/yourLogo_icon_red.png" alt="">
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

    <div class="feed">
        <div class="wrapper wrapper-1000">
            <h1>Най-новите обяви за Автомобили</h1>
            
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
    </div>
    
@endsection

    