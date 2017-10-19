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

                        echo " <img class=\"pic\" src=\"/uploads/".$pics[0]."\">";
                        ?>
                    </a>
                </div>
                <div class="content">
                    <div class="head">
                        <?php
                        $pics = explode(",", $i['pictures']);
                        $title = $i['brand']." ".$i['model']." ".$i['modification']; 
                        echo "<a href=\"/details/".$i['id']."\" id=\"car_link\"><b>".$title."</b></a>";
                        echo "<p>".$i['price']." ".$i['currency']."</p>"
                        ?>
                    </div>
                    <div class="desc">
                    <?php
                        echo "<p> дата на произв. - ".$i['date_of_manufacture']." ".$i['year_of_manufacture']." г.,
                        пробег - ".$i['mileage'].", цвят - ".$i['color']."</p>";
                    ?>
                    </div>
                    <div class="desc">
                    <?php
                        echo "<p>".$i['additional_info']."</p>";
                    ?>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    {{ $info->links() }}
    </div>
    <script>
    $(".pic").each(function(){
        $(this).on('load', function(){
            var width = $(this).width();
            var height = $(this).height();

            if(width > height) {
               $(this).width('100%');
            }else if(height > width){
              $(this).height('100%');
            }else{
              $(this).width('100%');
              $(this).height('100%');
            };
            $(this).css("display","block");
            });
        });
    </script>
@endsection
