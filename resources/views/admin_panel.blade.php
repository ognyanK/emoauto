<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
    <style>
        .car {
            border:1px solid black;
            width: 100%;
            height: 100px;
        }

    .feed-item{
        margin:0;
        padding: 10px;
        border-top:4px solid #8e0f0f;
        border-radius: 5px;
        border-bottom: 0px;
        margin-top:5px;
        box-sizing: border-box;
        height: 120px;
        width: 820px;
        float: left;
    }

    .feed-item .left{
        height: 100%;
        float: left;
    }
    .feed-item .left .image{
        width: 100px;
        height: 100px;
        background-color: black;
        position: relative;
        float: left;
    }

    .feed-item .left .image img{
        position: absolute;
        margin: auto;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: none;
    }

    .feed-item .content{
        height: 100px;
        width: 700px;
        float: right;
        float: left;
    }
    .feed-item .content .desc{
        float: left;
        width: 70%;
        box-sizing: border-box;
    }

    .feed-item .content .options{
        float: right;
        width: 30%;
    }
    </style>
    </head>
    <body>
    <a href="/panelInsert">new car</a>
    <div class="feed-container">
        <div class="feed-items">
        @foreach($cars as $i)
            <div class="feed-item" id="<?php 
                echo $i['id'];
            ?>">
                <div class="left">
                    <div class="image">
                        <a href="#">
                            <?php
                            $pics = explode(",", $i['pictures']);

                            echo " <img class=\"pic\" src=\"/uploads/".$pics[0]."\">";
                            ?>
                        </a>
                    </div>
                </div>
                <div class="content">
                    <div class="desc">
                    <?php
                        $pics = explode(",", $i['pictures']);
                        $title = $i['brand']." ".$i['model'];
                        echo $title.", ";
                        echo $i['price']." ".$i['currency'].", ";
                        echo $i['additional_info'];
                    ?>
                    </div>
                    <div class="options">
                    <?php
                        echo "<a href=\"/panelInsert/edit/".$i['id']."\">edit</a>, ";
                        echo "<a id=\"delete\" href=\"/panelInsert/destroy/".$i['id']."\">delete</a>, ";
                        echo "<a href=\"/panelInsert/edit/".$i['id']."\">view messeges(0)</a>";
                    ?>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
        <?php 
            /*for($i = 0;$i<count($cars);$i++){
                echo "<div class=\"car\">".$cars[$i]['brand']."<a href=\"/panelInsert/edit/".$cars[$i]['id']."\">edit</a></div>";
            }*/
        ?>
    </body>

    <script type="text/javascript">
    $(document).ready(function(){
        $(".options").on('click', '#delete',function(){
            if(!confirm("Are you sure you want to delete this car?")){
                return false;
            }
        });
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
    });
</script>
 </html>