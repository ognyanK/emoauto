@extends('main')

@section('title', 'Home')

@section('content')
    <div class="details-cotainer">
        <div class="wrapper wrapper-1000">
            <h1>Car title: </h1>
            <div class="car--details">
                <div class="gallery">
                    <div class="current-img">
                        <img src="images/example-car.png" alt="">
                    </div>

                    <div class="tumbnails">
                        <div class="image" style="background-image: url('images/example-car.png');"></div>
                        <div class="image" style="background-image: url('images/example-car.png');"></div>
                        <div class="image" style="background-image: url('images/example-car.png');"></div>
                        <div class="image" style="background-image: url('images/example-car.png');"></div>
                    </div>
                </div>

                <div class="spec">

                </div>
            </div>
        </div>
    </div>
@endsection

    