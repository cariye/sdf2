<?
include 'connection.php';

$select =  "SELECT * from envire";
$result = $con -> query($select);


$select1 =  "SELECT * from envire";
$result1 = $con -> query($select1);
?>





<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bukku</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/owl.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/et-icons.css">
	<link rel="stylesheet" type="text/css" href="css/tooltip.css">
	<link rel="stylesheet" type="text/css" href="css/lightbox.css">
	<link id="main" rel="stylesheet" type="text/css" href="css/publisher.css">
</head>
<body>
<div id="wrapper" class="behind">


<nav class="navbar navbar-default">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right main-nav">
				<? while($row =mysqli_fetch_assort($result)):?>
				<li> <?= $row['name'] ?></li>
				<?endwhile;?>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>

<section id="book">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="book-preview">
					<img src="img/kindle.png" class="background-device" alt="">
					<div class="owl-book">
						<div class="item">
							<img src="img/book_page.png" alt="">
							<div class="overlay">
								<a href="img/book_page.png" class="expand" data-lightbox="book-collection" data-title="Image Caption"><i class="fa fa-expand"></i></a>
							</div>
						</div>
						<div class="item">
							<img src="img/book_page.png" alt="">
							<div class="overlay">
								<a href="img/book_page.png" class="expand" data-lightbox="book-collection" data-title="Image Caption"><i class="fa fa-expand"></i></a>
							</div>
						</div>
						<div class="item">
							<img src="img/book_page.png" alt="">
							<div class="overlay">
								<a href="img/book_page.png" class="expand" data-lightbox="book-collection" data-title="Image Caption"><i class="fa fa-expand"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<ul >
				<? while($row1 =mysqli_fetch_assort($result1)):?>
				<li> <?= $row1['text'] ?></li>
				<li> <?= $row1['textt'] ?></li>
				<?endwhile;?>
			</ul>
		</div>
	</div>
</section>




<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/lightbox.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.onepagenav.js"></script>
<script src="js/core.js"></script>
<script src="js/tooltip.js"></script>
<script src="js/jquery.form-validator.js"></script>
<script src="js/preloader.js"></script>
<script src="js/main.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>