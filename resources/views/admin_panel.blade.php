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
    </style>
    </head>
    <body>
    <a href="/panelInsert">new car</a>
        <?php 
            for($i = 0;$i<count($cars);$i++){
                echo "<div class=\"car\">".$cars[$i]['brand']."<a href=\"/panelInsert/edit/".$cars[$i]['id']."\">edit</a></div>";
            }
        ?>
    </body>
 </html>