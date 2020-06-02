<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Funny Pictures</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">

	<style type="text/css">
		body{
			font-family: 'calibri light';
		}
		.img-box{
			height: 300px;
			width: 80%;
			margin-left: 10%;
		}
		.cover-img{
			position: absolute;
			background-size: 100% 100%;
			height: 100%;
			width: 100%;
		}
		.cover-text{
			color: white;
			font-size: 30px;
			margin-top: 200px;
			margin-left: 100px;
		}
		.cover-text > .btn{
			background-color: transparent;
		}
	</style>


</head>
<body>
	<div class="cover-img" style="background-image: url(photos/beauty-queens/hawa.jpg);" id="cover1">
		<p class="cover-text">
			Elles sont maintenant de grandes filles !
			<button class="btn fa fa-arrow-right" id="next-cover2"></button>
		</p>
	</div>
	<div class="cover-img" style="background-image: url(photos/beauty-queens/andrea2.jpg);" id="cover2">
		<p class="cover-text">
			Des filles extraordinaires et pleines de charmes !
			<button class="btn fa fa-arrow-right" id="next-cover3"></button>
		</p>
	</div>
	<div class="cover-img" style="background-image: url(photos/beauty-queens/dominique.jpg);" id="cover3">
		<p class="cover-text">
			Leur sourire radieux les rend resplendissante !
			<button class="btn fa fa-arrow-right" id="next-cover4"></button>
		</p>
	</div>
	<div class="cover-img" style="background-image: url(photos/beauty-queens/nlend.jpg);" id="cover4">
		<p class="cover-text">
			Elles sont devenues tout simplement belles !
			<button class="btn fa fa-refresh" id="next-cover1"></button>
		</p>
	</div>

<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript">
	$(function(){
		$("#cover2").hide();
		$("#cover3").hide();
		$("#cover4").hide();

		$("#next-cover1").click(function(){
			$("#cover4").hide();
			$("#cover3").hide();
			$("#cover2").hide();
			$("#cover1").fadeIn('slow');
		})
		$("#next-cover2").click(function(){
			$("#cover1").hide();
			$("#cover3").hide();
			$("#cover4").hide();
			$("#cover2").fadeIn('slow');
		});
		$("#next-cover3").click(function(){
			$("#cover1").hide();
			$("#cover2").hide();
			$("#cover4").hide();
			$("#cover3").fadeIn('slow');
		})
		$("#next-cover4").click(function(){
			$("#cover1").hide();
			$("#cover2").hide();
			$("#cover3").hide();
			$("#cover4").fadeIn('slow');
		})

		$(".cover-text .fa").addClass('fa-lg');
	})
</script>
</body>
</html>