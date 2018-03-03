<?php
	$active_page = "home";
	$subtitle = "Blog";
	include "assets/inc/header.inc.php";

	include "/home/ixs1022/db_conn.php";
	$table = "blog7";

	/*$mysqli = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

	if( !$mysqli ){
		echo "connection error: " . mysqli_connect_error();
		die();
	}

	if(!empty($_POST)){
		$name =$mysqli->real_escape_string(htmlentities(strip_tags(trim($_POST['name']))));
		$comment =$mysqli->real_escape_string(htmlentities(strip_tags(trim($_POST['comment']))));
		$query = "INSERT INTO " . $table . "
				  SET name=' " . $name . "',
				  		comment='" . $comment  . " ' ";
		$result = mysqli_query($mysqli, $query);
		$num_rows = mysqli_affected_rows($mysqli);
	}*/

?>
	<div id='content'>
		<h1 id='blog-title'>Buongiorno Venezia!</h1><br/>
		<div id='blog-date'>March 20, 2017</div>
		<?php include 'assets/js/march20-carousel.php'; ?>
		<br/>
		<p>Ciao! I just got back from a wonderful week traveling to Italy with my dad. We had a busy week so I will be breaking it up into a few blog posts.</p><br/><br/>

		<p>Today is Monday; a week ago today, my dad and I were on our way to Venice from Dubrovnik. Our flight left early in the afternoon, but we didn’t arrive in Venice until around 8pm (our local time). Then, I had arranged for us to take a bus from Marco Polo Airport on the mainland of Italy to Venice. Then from there, we were basically lost. BUT, we took a boat to the port by St. Mark’s Square and then I somewhat blindly led us to the place where we were staying.</p></br>
		<p>I arranged for us to stay at this place called Locanda SS Giovanni e Paolo – anyone going to Venice, I would highly recommend this place, just saying. We planned for a late arrival/ self check-in, but luckily the guy working that night was caught up late and was nice enough to check us in to our room. He gave us a map of Venice and recommended a few places to eat as well as a few museums (though we didn’t get around to those).</p><br/>
		<p>My dad and I dropped our stuff off in our room (which would be around 9:15-9:30pm) and went to eat at this restaurant right around the corner – literally, right around the corner. It was DELICOUS! I am not a fan of seafood, but my dad and I decided to just ‘go with it’ and got whatever the waitor recommended which was a first course of pasta with mixed seafood (mussels, clams, prawns, and shrimp) and a second course of bass filet of sorts. It was amazing!</p><br/><br/>

		<p>The next morning, I set us up for a tour of the Doge’s Palace and St. Mark’s Basilica. It was remarkable! Every wall in the palace (which is really true for many of the places we visited) was completely covered with paintings. I wish I could remember more information about everything from the trip; but we were told so much information, it’s hard to remember it all. But, I do remember some things. For instance, in the Doge’s Palace, there are three rooms that are used for courts and their justice system. Each of those three rooms are independent of each other, but have secret doors that connect them.</p><br/>
		<p>One of the most interesting things I learned while in Venice was that Venice is basically built and has been surviving for centuries on business – money and power. I mean pretty much everything in Doge’s Palace and St. Mark’s Basilica, if it’s not a painting, is made out of 24 karat gold.  I can’t say that when I play word association games, Venice and Gold/ Money/ Power are paired.</p><br/>
		<p>Also, in the Doge’s Palace, one of the largest rooms in the palace has an interesting story to it – a couple short ones actually. There are a small paintings telling a story of one of the Doges around the entire room. One of the sections has a painting of the Doge with a black square reserved for what would have been a picture of Marino Faliero before he became a traitor and was punished for his crimes. Another interesting thing about this room is a painting (by some painter who was the student of some other famous painter) with a funny mistake on it. Can you find it (even with the poor quality photo)?</p>
			<p style='font-size:.75em;'>Hint: if one of the men put on a shoe, he would probably put the left shoe on his right foot.</p>
		<img id='blog-img' src='assets/img/venice/spot-mistake.jpg' alt=''/><br/>
		<br/>
		<p>By the time we finished walking through the Doge’s Palace and St. Mark’s Basilica, we had about two hours or so to get lunch. I had planned for us to get pizza from this place called <em>Crazy Pizza</em> but we couldn’t find it so we stopped at another restaurant for pizza. Then at 3:00pm, we went on a gondola ride around Venice because come on – did you really go to Venice if you didn’t go on a gondola ride? It was really nice, peaceful and beautiful. To answer the question I am sure you are thinking – sadly, no. There was no serenade or commentary, but it was still wonderful.</p><br/>
		<p>I bet my parents and my boyfriend will roll their eyes for what I am about to tell you because it’s really not that funny or grand but <em>I</em> think it’s funny. When the gondola ride was over, there was a man at the drop-off dock to help us get out. First he helped my dad out and said, “Good job signore.” Then, he helped me out and said, “Good job bella.” I went over to my dad and jokingly whispered, “OMG he probably doesn’t know it, but he just called me by my name *insert pretentious emoji here*.” </p><br/><br/>
		<p>The gondola ride was about 30 minutes; and after it was over, my dad and I had the rest of the day to do whatever we wanted. We went back to our room, rested, then decided to go out towards Rialto (the bridge in one of the pictures) and walk around. There’s a lot of little shops and what not there, and it was a nice cool night. Funny enough, we found the Crazy Pizza, so we grabbed a slice and walked around for a couple of hours. As we headed back to our room, we stopped at Boutique del Gelato for, obviously, gelato; I read on the interwebernet that it was really good (I had also planned for us to go there at lunch time, but you know).</p><br/><br/>
		<p>The next morning (Wednesday), we checked out and headed back towards Rialto to go to the train station. On the way, we stopped at this nice, hip café for a pastry, some freshly squeezed orange juice (and a cappuccino or two for my dad), and a couple of sandwiches for our journey. We arrived at the station around 10:30 or 11am for a train leaving at 1:45pm, but we had a nice time outside people watching. A few hours of waiting, a slice of pizza, a cappuccino, a cup of fruit, and probably another snack later… we finally boarded the train and left.</p><br/>
		<p>Next stop: Rome.</p><br/>

		<hr/><br/>
		<?php
			//include 'assets/inc/comment.inc.php';
		?>
	</div>

<?php
	include 'assets/inc/footer.inc.php';
?>