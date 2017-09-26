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
                    <table>
                        <tr>
                            <th>Month</th>
                            <th>Savings</th>
                        </tr>
                        <tr>
                            <td>January</td>
                            <td>$100</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="the--gallery">
                <span class="close-gallery">
                    <img src="images/menuCloseBtn.png" alt="menuCloseBtn.png">
                </span>

                <div class="gallery-container">
                    <ul id="imageGallery">
                        <li data-thumb="images/example-car.png" data-src="images/example-car.png">
                            <img src="images/example-car.png" />
                        </li>
    
                        <li data-thumb="images/example-car.png" data-src="images/example-car.png">
                            <img src="images/example-car.png" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

    