<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Molle:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,800i" rel="stylesheet">
    <link rel='stylesheet' href="assets/css/style.css">
    <link rel='icon' href='tiger.png'>

    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
        margin: auto;
  }
  </style>

 

    <title><?= $subtitle ?> | The Traveling Tiger</title>

  </head>
<body <?= $function == "next()" ? "onload=next();" : ''?>>
	<div id='header-div'>
		<header>
			<a href='home.php'><h1 id='title'>The Traveling Tiger</h1></a>
			<h3 id='subtitle'><?= $subtitle ?></h3>
			<nav id='navbar'>
				<ul id='navlist'>
					<li <?= $active_page == "home" ? "class='active'" : "class='navitem'" ?>><a href="home.php">Home</a></li>
				</ul>
		    </nav>
		</header>
	</div>