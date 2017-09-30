@extends('main')

@section('title', 'Home')

@section('content')
    <div class="feed-container">
        <h1>Feed</h1>

        <div class="paginate">
            <span class="page"><a href="#">1</a></span>
            <span class="page"><a href="#">2</a></span>
            <span class="page"><a href="#">3</a></span>
        </div>

        <div class="feed-items">
            <div class="feed-item">
                <div class="image">
                    <a href="#">
                        <img src="images/example-car.png" alt="example">
                    </a>
                </div>
                
                <div class="content">
                    <div class="head">
                        <h3>Car title</h3>
                        <p>Price</p>
                    </div>

                    <div class="desc">
                        <p>Desc here...</p>
                    </div>
                </div>
            </div>

            <div class="feed-item">
                <div class="image">
                    <a href="#">
                        <img src="images/example-car.png" alt="example">
                    </a>
                </div>
                
                <div class="content">
                    <div class="head">
                        <h3>Car title</h3>
                        <p>Price</p>
                    </div>

                    <div class="desc">
                        <p>Desc here...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection