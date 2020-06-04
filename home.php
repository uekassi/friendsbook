<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<title>FriendsBooks</title>
</head>
<body style="background-color: ">
	<div class="topbar">
		<span class="fa fa-chevron-down btn fa-lg"></span> <span class="fa fa-chevron-up btn fa-lg"></span> 
		<form class="form-inline hidden-xs pull-right">
			<input type="text" name="search" class="form-control" placeholder="Friends" style="width: 50%; margin-top: 0%;">
			<button class="btn" style="background-color: black; color: white;"><span class="fa fa-search"></span></button>
		</form>
		<span class="topbar-title pull-right">FriendsBook</span>
		<button class="btn visible-xs pull-right" style="background-color: transparent;"><span class="fa fa-search fa-lg"></span></button>
		<button class="btn visible-xs pull-right" style="background-color: transparent;"><span class="fa fa-pencil fa-lg"></span></button>
	</div>
	<div class="menu">
		<ul>
			<li><a href="descriptions.php">Our descriptions</a></li>
			<hr/>
			<li><a href="funny.php">Funny Pic</a></li>
			<hr/>
			<li><a href="queens.php">Beauty Queens</a></li>
			<hr/>
			<li><a href="nopic.php">No comments Pic</a></li>
			<hr/>
			<li><a href="addpic.php">Créer un nouveau coin Individuelle</a></li>
			<!--<hr/>
			<li><a href=""><span class="fa fa-search"></span> Find a friend</a></li>-->
		</ul>
	</div>
<div class="diaporama">
	<div id="carousel" class="carousel slide">
		<!--
		<ol class="carousel-indicators">
			<li data-target="#carousel" data-slide-to="0" class="active"></li>
			<li data-target="#carousel" data-slide-to="1"></li>
			<li data-target="#carousel" data-slide-to="2"></li>
			<li data-target="#carousel" data-slide-to="3"></li>
			<li data-target="#carousel" data-slide-to="4"></li>
			<li data-target="#carousel" data-slide-to="5"></li>
			<li data-target="#carousel" data-slide-to="6"></li>
			<li data-target="#carousel" data-slide-to="7"></li>
			<li data-target="#carousel" data-slide-to="8"></li>
		</ol>-->
		<div class="carousel-inner">
			<div class="item active">
				<img src="photos/main-img2.jpg" alt="première image">
				<h1 class="carousel-caption" style="font-size: 40px;">Our own private galery</h1>
			</div>
			<div class="item">
				<img src="photos/essambil.jpg" alt="première image">
				<h1 class="carousel-caption">Essambil Touck Pierre Dany</h1>
			</div>
			<div class="item">
				<img src="photos/angouand4.jpg" alt="image 2">
				<h1 class="carousel-caption">Angouand Bikag Junior</h1>
			</div>
			<div class="item">
				<img src="photos/nelson3.jpg" alt="image 3">
				<h1 class="carousel-caption">Gnidjeo seigneu kraig Nelson</h1>
			</div>
			<div class="item">
				<img src="photos/ngoune2.jpg" alt="image 4">
				<h1 class="carousel-caption">Ngoune Tsaka Wilfried Baudoin</h1>
			</div>
			<div class="item">
				<img src="photos/nlend.jpg" alt="image 5">
				<h1 class="carousel-caption">Nlend Jeanne Marceline</h1>
			</div>
			<div class="item">
				<img src="photos/samantha2.jpg" alt="image 6">
				<h1 class="carousel-caption">Ngoundaka A'atok Samantha Laure</h1>
			</div>
			<div class="item">
				<img src="photos/madifo1.jpg" alt="image 7">
				<h1 class="carousel-caption">Madifo Dzayen Hermann Viannelle</h1>
			</div>
			<div class="item">
				<img src="photos/souley1.jpg" alt="image 8">
				<h1 class="carousel-caption">Souley Gambo</h1>
			</div>
			<div class="item">
				<img src="photos/ulrich-ekassi.jpg" alt="image 8">
				<h1 class="carousel-caption">Ekassi Ongolo Simon Ulrich</h1>
			</div>
			<div class="item">
				<img src="photos/main-img.jpg" alt="image 9">
				<h1 class="carousel-caption" style="font-family: 'ananda'; text-align: left;top: 70px; font-size: 30px;">La distance ne peut point faire oublier une amitié qui demeure dans le coeur</h1>
			</div>
		</div>
		<a class="left carousel-control" href="#carousel" data-slide="prev"><span class="icon-prev"></span></a>
		<a class="right carousel-control" href="#carousel" data-slide="next"><span class="icon-next"></span></a>		
	</div>
</div>
<div class="couche"></div>

<div>
	Bonjour
</div>

<footer style="font-size: 10px;">
	Développé par <em><b>Ycon</b></em>
</footer>

	<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>