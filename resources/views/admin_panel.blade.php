<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>emoauto admin panel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="../images/logo.png">
        <!-- Styles -->
    <style>

    .whole_content{
        width: 1200px;
        margin:0 auto;
    }
    .ap_nav{
        width: 100%;
        float: left;
    }
    .feed-container{
        width: 65%;
        float: left;
    }

    .rhs {
        width: 34%;
        float: right;
    }
    .right_side_container{
        width: 100%;
        height: 300px;
        background-color: white;
        float: right;
        border:1px solid #8e0f0f;
        border-top:4px solid #8e0f0f;
        border-radius: 8px;
        box-sizing: border-box;
        margin-left: 1%;
        padding: 10px 15px 15px 15px;
        overflow-y: scroll;
    }
    .right_side_container .question{
        width: 100%;
        float: left;
        border-radius: 5px;
        overflow: hidden;
        margin-top: 5px;
    }
    .right_side_container .question .q_header{
        width: 100%;
        float: left;
        background-color: #EF3B3A;
        color: white;
        padding:5px;
        box-sizing: border-box;
        font-size: 12px;
    }
    .right_side_container .question .q_cont{
        width: 100%;
        float: left;
        background-color: lightgray;
        padding:5px;
        box-sizing: border-box;
    }

    .slider_images{
        width: 100%;
        background-color: white;
        float: right;
        border:1px solid #8e0f0f;
        border-top:4px solid #8e0f0f;
        border-radius: 8px;
        box-sizing: border-box;
        margin-left: 1%;
        margin-top: 10px;
        padding: 15px;
    }
    .slider_images .pict{
        width: 115px;
        background-color: red;
        float: left;
        height: 115px;
        margin:5px;
        background-size: 100%;
        background-color: lightgray;
    }
    .feed-item{
        margin:0;
        padding: 10px;
        border-top:4px solid #8e0f0f;
        border-radius: 8px;
        border-bottom: 0px;
        margin-top:5px;
        box-sizing: border-box;
        height: 120px;
        width: 100%;
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
    .feed-item .desc{
        float: left;
        padding: 15px;
        box-sizing: border-box;
    }

    .feed-item .options{
        float: right;
    }
    .message {
        color:#EF3B3A;
        cursor: pointer;
    }
    .message:hover{
        text-decoration: underline;   
    }
    </style>
    </head>
    <body>
    <div class="whole_content">
        <div class="ap_nav">
            <a href="/panelInsert">new car</a>, 
            <a href="/logout">logout</a>
        </div>
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
                    <div class="desc">
                        <?php
                            $pics = explode(",", $i['pictures']);
                            $title = $i['brand']." ".$i['model'];
                            echo $title.", ";
                            echo $i['price']." ".$i['currency'];
                        ?>
                    </div>
                    <div class="options">
                        <?php
                            echo "<a href=\"/panelInsert/edit/".$i['id']."\">edit</a>, ";
                            echo "<a id=\"delete\" href=\"/panelInsert/destroy/".$i['id']."\">delete</a>, ";
                            echo "<span class=\"message\" id=\"".$i['id']."\">messages(".$questions_array[$i['id']].")</span>";
                        ?>
                    </div>
                </div>
            @endforeach
            </div>
            {{ $cars->links() }}
        </div>
        <div class="rhs">
            <div class="right_side_container">
            </div>
            <div class="slider_images">
            <?php
             $i = 1;
                foreach ($slider_pics as $sp) {
                    $img;
                    if($sp == ""){
                        $img = "images/up_back.ico";
                    }else{
                        $img = "uploads/".$sp;
                    }
                    echo "<div class=\"pict\" id=\"a".$i++."\">
                            <img src=\"".$img."\" width=\"100%\" height=\"100%\">
                        </div>";
                }
            ?>
                 <form method="POST" action="/admin_panel/slider_store" id="form" accept-charset="UTF-8" enctype="multipart/form-data">
                  {{ csrf_field() }}
                    <input class="a1" type="file" name="pic1" style="display:none">
                    <input class="a2" type="file" name="pic2" style="display:none">
                    <input class="a3" type="file" name="pic3" style="display:none">
                    <input class="a4" type="file" name="pic4" style="display:none">
                    <input class="a5" type="file" name="pic5" style="display:none">
                    <input type="submit" name="submit" value="save">
                </form>
            </div>
        </div>
    </div>
</body>

    <script type="text/javascript">
    $(document).ready(function(){
        $('input').change(function(){
            readURL(this, $(this).attr("class"));
        });
        function readURL(input, cls) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
              $('#'+cls).find('img').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
          }
        }

        $(".pict").click(function(){
            $id = $(this).attr('id');
            $("."+$id).click();
        });

        $(".options").on('click', '.message',function(){

            var URL = "/admin_panel/loadQuestions/"+$(this).attr('id');
            $.ajax({
              type: "GET",
              url: URL
            }).done(function( msg ) {
                cont = ""
                for(var i=0;i<msg.length;i++){ 
                    cont+="<div class=\"question\">\
                            <div class=\"q_header\">\
                                "+msg[i]['created_at']+","+msg[i]['contacts_name']+","+msg[i]['contacts_email']+","
                                +msg[i]['contacts_phone']+"\
                            </div>\
                            <div class=\"q_cont\">\
                                "+msg[i]['contacts_question']+"\
                            </div>\
                        </div>";
                    }
                $('.right_side_container').html(cont);
            });
        });

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