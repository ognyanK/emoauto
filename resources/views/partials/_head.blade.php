<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<title>@yield('title')</title>

{!! Html::style('css/libs.min.css') !!}
{!! Html::style('css/main.css') !!}

@yield('stylesheets')

<style type="text/css">
	/*details*/

	.gallery-redo{
		background-color: #e6e8ed;
		width: 300px;
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

	#spec_table td{
		padding: 3px;
	}
	.contacts {
		border:0;
	}
	.contacts .flex-layout{
		border:0;
	}
	.contacts .flex-layout .info{
		padding: 0;
	}
	.car--details {
		border-top:4px solid #8e0f0f;
		border-radius:8px;
	}

	.contacts .flex-layout .info .contactsI{
		border-top:4px solid #8e0f0f;
		border-radius:8px;
		background-color: #e6e8ed;
		width: 100%;
		padding: 10px;
	}
	.contacts .flex-layout .info .contactsI p, .contacts .flex-layout .info .timeI p{
		font-size: 14px;
	}
	.contacts .flex-layout .info .timeI{
		border-top:4px solid #8e0f0f;
		border-radius:8px;
		background-color: #e6e8ed;
		width: 100%;
		padding: 10px;
		margin-top:5px;
	}

	.contacts .more-info{
		width: 100%;
		padding: 10px;
		border-top:4px solid #8e0f0f;
		border-radius:8px;
	}

	.contacts .more-info p{
		padding-top:5px;
		font-size: 14px;
	}

	.contacts .flex-layout .form{
		border:1px solid #8e0f0f;
		border-top:4px solid #8e0f0f;
		border-radius:8px;
		background-color: #e6e8ed;
		font-size: 13px;
	}
	.contacts .flex-layout .form input,textarea{
		background-color: white;
	}

	.more-spec{
		width: 100%;
		float: left;
		box-sizing: border-box;
		padding: 0;
	}
	.more-spec .item{
		width: 100%;
		padding: 10px;
		border-top:4px solid #8e0f0f;
		border-radius:8px;
	}
	/*feed*/
	.feed-item{
		margin:0;
		padding: 10px;
		border-top:4px solid #8e0f0f;
		border-radius: 5px;
		border-bottom: 0px;
		margin-top:5px;
		box-sizing: border-box;
		width: 100%;
	}
	.feed-item .image{
		width: 100px;
		height: 100px;
		background-color: black;
		position: relative;
	}

	.feed-item .image img{
		position: absolute;
        margin: auto;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: none;
	}

	.feed-item .content{
		float: left;
	}
	.feed-item .content .head{
		padding: 0;
		margin:0;
	}
	.feed-item .content .head a{
		color:black;
	}
	.feed-item .content .head a:hover{
		color:#8e0f0f;
	}
	.feed-item .content .desc{
		padding: 0;
		margin:0;
	}
	.feed-item .content .desc p {
		font-size: 14px;
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
	});
</script>
</head>