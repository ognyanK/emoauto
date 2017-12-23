<!DOCTYPE html>
<html lang="en">
<head>
<?php 
if(isset($MODE) && $MODE == "DETAILS"){
	if(isset($pictures) && isset($brandValue) && isset($model) && isset($modification) && isset($price)){
		$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$pic_link = "http://$_SERVER[HTTP_HOST]";
		$pic = explode(",", $pictures)[0];
		echo '<script type="application/ld+json">
			{
			  "@context": "http://schema.org",
			  "@type": "ItemList",
			  "url": "'.$actual_link.'",
			  "numberOfItems": "1",
			  "itemListElement": [{
			      "@type": "Product",
			      "image": "'.$pic_link.'/'.$pic.'",
			      "url": "'.$actual_link.'",
			      "name": "'.$brandValue.' '.$model.' '.$modification.'"
			    }
			  ],
			    "offers": {
			      "@type": "Offer",
			      "price": "'.$price.'"
			    }
			}
			</script>';
	}
	if(isset($meta_title)){
		echo "<title>".$meta_title."</title>";
	}
	if(isset($meta_description)){
		echo "<meta name=\"description\" content=\"".$meta_description."\">";
	}
	if(isset($meta_keywords)){
		echo "<meta name=\"keywords\" content=\"".$meta_keywords."\">";
	}
}else{
	echo "<title>emoauto</title>";
}?>
<meta property="og:title" content="Title Here" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.example.com/" />
<meta property="og:image" content="http://example.com/image.jpg" />
<meta property="og:description" content="Description Here" /> 
<meta property="og:site_name" content="Site Name, i.e. Moz" />
<meta property="fb:admins" content="Facebook numeric ID" />
<link rel="icon" href="../images/logo.png">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

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
	.item .image{
		margin-top: 10px;
	}
	.item .news-content{
		word-wrap: break-word;
	}

</style>
</head>