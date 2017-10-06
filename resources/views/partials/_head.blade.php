<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<title>@yield('title')</title>

{!! Html::style('css/libs.min.css') !!}
{!! Html::style('css/main.css') !!}

@yield('stylesheets')

<style type="text/css">
	/*gallery*/

	.gallery-redo{
		width: 300px;
		height: 600px;
		float: left;
	}
	.gallery-redo .current-img-redo{
		width: 100%;
		height: 300px;
		float: left;
		border:1px solid white;
		box-sizing: border-box;
		position: relative;
		background-color: black;
	}

	.gallery-redo .current-img-redo img{
		position: absolute;
        margin: auto;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: none;
        cursor: pointer;
	}
	.gallery-redo .tumbnails-redo{
		width: 100%;
		height: 50%;
		float: left;
		background-color: gray;
	}
	.gallery-redo .tumbnails-redo .image-redo{
		width: 25%;
		height: 25%;
		float: left;
		position: relative;
		background-color: black;
		box-sizing: border-box;
		border:1px solid white;
	}

	.gallery-redo .tumbnails-redo .image-redo img{
		position: absolute;
        margin: auto;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: none;
        cursor: pointer;
	}

	td{
		padding: 3px;
	}
</style>
<script type="text/javascript">
	$(document).ready(function(){
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
		$(".pic").click(function(){
			alert("zdr");
		});
	});
</script>
</head>