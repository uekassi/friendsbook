<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<title>FriendsBook | LogIn</title>

	<style type="text/css">
		.couche{
			position: fixed;
			opacity: 0.85;
		}
		.diaporama{
			/*background-image: url(photos/main0.jpg);
			background-size: 100% 100%;*/
			position: fixed;
			top: 0px;
		}
		.carousel-inner {
			height: 500px;
		}
		.carousel-inner .item img{
			height: 500px;
		}
		.log{
			width: 100%;
			position: absolute;
			z-index: 2;
		}
		.log form{
			margin-top: 25%;
		}
		.log .log_type_btn{
			color: white;
			font-family: 'calibri light';
			font-size: 15px;
			background-color: transparent;
		}
		.log form legend{
			color: white;
			font-family: ananda;
			font-size: 30px;
			text-align: center;
		}
		.log form input{
			color: white;
			font-family: 'calibri light';
			font-size: 20px;
			background-color: transparent;
			width: 80%;
			margin-top: 2%;
			margin-bottom: 2%;
		}
		.log form .submit{
			background-color: black;
			color: white;
			box-shadow: 2px 2px 2px white;
		}
		@media screen and (min-width: 500px){
			.log{
				opacity: 0.6;
				overflow: auto;
				top: 10%;
				left: 10%;
				background-color: black;
				border-radius: 10px 10px 10px 10px;
				height: 400px;
				width: 400px;
			}
			.log form{
				margin-top: 10%;
			}
			.log form .submit{
				background-color: white;
				color: black;
				box-shadow: none;
			}
		}
		@media screen and (min-width: 700px){
			.log{
				left: 20%;
			}
		}
		@media screen and (min-width: 1000px){
			.log{
				opacity: 0.6;
				overflow: auto;
				top: 10%;
				left: 30%;
				background-color: black;
				border-radius: 10px 10px 10px 10px;
				height: 450px;
				width: 500px;
			}
			.log form{
				margin-top: 10%;
			}
			.log form .submit{
				background-color: white;
				color: black;
				box-shadow: none;
			}
		}
	</style>
</head>
<body>
	<div class="diaporama">
		<div id="carousel" class="carousel slide">
			<div class="carousel-inner">
				<div class="item active">
					<img src="photos/angouand5.jpg">
				</div>
				<div class="item">
					<img src="photos/essambil4.jpg">
				</div>	
				<div class="item">
					<img src="photos/main-img1.jpg">
				</div>		
			</div>
		</div>
	</div>
	<div class="couche"></div>
	<div class="log">
		<center>
			<button class="btn log_type_btn" id="sign_in_btn">S'inscrire</button>
			<button class="btn log_type_btn" id="log_in_btn">Se connecter</button>			
		</center>

		<form  id="log_in_form" method="post" action="verify_login.php" class="form-group">
			<fieldset>
				<legend>FriendsBook</legend>
				<div>
					<center>
						<input type="text" name="nom" class="form-control" placeholder="Votre nom" autofocus="autofocus" required="required">
						<input type="password" name="log_password" class="form-control" placeholder="Clef de sécurité" required="required">
						<input type="submit" name="submit_log" class="btn submit" value="Se connecter">
						<input type="reset" name="reset_log" class="btn submit" value="Rafraichir">
					</center>
				</div>
			</fieldset>
		</form>

		<form id="sign_in_form" class="form-group" method="post" action="verify_login.php">
			<fieldset>
				<legend>FriendsBook</legend>
				<div>
					<center>
						<input type="email" name="mail" class="form-control" placeholder="Votre mail" required="required">
						<div class="form-inline">
							<input type="password" name="sign_in_password" class="form-control" placeholder="Clef de sécurité" required="required" style="width: 30%;">
							<button class="btn" style="background-color: transparent; border: solid white; color: white;">Obtenir la clef</button>
						</div>
						<input type="submit" name="submit_sign_in" class="btn form-control submit" value="Valider">
						<button type="reset" name="reset_sign_in" class="btn form-control submit" style="width: 20%;">
							<span class="fa fa-refresh"></span>
						</button>
					</center>
				</div>
			</fieldset>
		</form>
		<!--
		<footer style="text-align: center; color: white;">
			Développé par <b>YCon</b><br/>
			Copyright <strong>YouConnect-2020</strong>
		</footer>-->
	</div>

<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript">
	$(function(){
		$("#sign_in_form").hide();
		$("#log_in_btn").css('font-size', '40px');

		$("#log_in_btn").click(function(){
			$("#sign_in_form").hide();
			$("#log_in_form").show();
			$("#log_in_btn").css('font-size', '40px');
			$("#sign_in_btn").css('font-size', '15px');
		})

		$("#sign_in_btn").click(function(){
			$("#sign_in_btn").css('font-size', '40px');
			$("#log_in_btn").css('font-size', '15px');
			$("#log_in_form").hide();
			$("#sign_in_form").show();
		})
	})
</script>
</body>
</html>