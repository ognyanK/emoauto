@extends('main')

@section('title', 'Home')

@section('content')
    <div class="feed-container">
        <div class="feed-items">
        @foreach($info as $i)
            <div class="feed-item" id="<?php 
                echo $i['id'];
            ?>">
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
                        <?php
                        $pics = explode(",", $i['pictures']);
                        $title = $i['brand']." ".$i['model'];
                        echo "<h3>".$title."</h3>";
                        echo "<p>".$i['price']." ".$i['currency']."</p>"
                        ?>
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
    <script>
     $(document).ready(function(){
        $(".feed-items").on("click",".feed-item",function(){
            window.location.href = '/details/'+$(this).attr('id');
        });
     });
    </script>
@endsection
