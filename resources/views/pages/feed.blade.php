@extends('main')

@section('title', 'Home')

@section('content')
    <div class="feed-container">
        <div class="feed-items">
        @foreach($info as $i)
            <div class="feed-item">
                <div class="image">
                    <a href="#">
                        <?php
                        $pics = explode(",", $i['pictures']);

                        echo " <img src=\"/uploads/".$pics[0]."\">";
                        ?>
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
        @endforeach
        </div>
    {{ $info->links() }}
    </div>
@endsection
