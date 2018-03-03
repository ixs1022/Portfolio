<!DOCTYPE html>
<html lang='en'>
	<head>
		<meta charset='utf-8'/>
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   		 <meta name="viewport" content="width=device-width, initial-scale=1">
   		 <link rel="shortcut icon" href="logo.png" type="image/x-icon">
   		 <link type='text/css' rel='stylesheet' href='style.css'>
   		 <link href="https://fonts.googleapis.com/css?family=Molle:400i" rel="stylesheet">
   		 <link href="https://fonts.googleapis.com/css?family=Amatic+SC:700" rel="stylesheet">
   		 <link href="https://fonts.googleapis.com/css?family=Homemade+Apple" rel="stylesheet">
   		 <link href="https://fonts.googleapis.com/css?family=Neucha" rel="stylesheet">
   		 <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">
   		 <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
   		 <script src="https://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
   		 <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
   		 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
   		 <script src='form.js'></script>
		<title>Isabella Sturm Portfolio</title>
	</head> 
<body>
	<nav id='navbar'>
		<a href='index.php' id='logocon'><img src="logo.png" alt=''></a>
		<a href='index.php' <?= $active == "home" ? "class='active'" : "class='navitem'" ?>>Home</a>
		<a href='about.php' <?= $active == "about" ? "class='active'" : "class='navitem'" ?>>My Story</a>
		<a href='portfolio.php' <?= $active == "portfolio" ? "class='active'" : "class='navitem'" ?>>Projects</a>
		<a href='resume.php' <?= $active == "resume" ? "class='active'" : "class='navitem'" ?>>Skills</a>
		<a href='contact.php' <?= $active == "contact" ? "class='active'" : "class='navitem'" ?> id='contact-item'>Contact Me</a>
	</nav>
	<div class='container'>
		<div class='content'>