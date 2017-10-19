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
	.site-header {
		background-image: url("http://localhost:8000/images/gradient2.jpg");
		background-size: 100% 100%;
	}
	.home-feed {
		background-image: url("http://localhost:8000/images/white.jpg");
		background-size: 100% 100%;
	}
	.feed-item {
		border-radius: 8px;
		padding: 5px;
		box-sizing: border-box;
		background-image: url("http://localhost:8000/images/feed-back-2.png");
	}

</style>
</head>