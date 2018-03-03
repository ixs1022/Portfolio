<?php
	$active_page = "home";
	$subtitle = "Blog";
	$function = "next()";
	include "assets/inc/header.inc.php";

	include "/home/ixs1022/db_conn.php";
	$table = "blog4";

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

	//include "assets/js/feb5-gallery.js";


?>
	<div id='content'>
		<h1 id='blog-title'>St. Blaise</h1><br/>
		<div id='blog-date'>February 5, 2017</div>
		<!--<figure id='blog-post-figure'>
			<img id='blog-img' src='assets/img/week2/tiger_city_walls.jpg' alt='Traveling Tiger on City Walls'/>
		</figure>-->
		<?php include 'assets/js/feb5-carousel.php'; ?>
		<br/>

		<p>This school week was cut short due to the celebration of 
			St. Blaise, which occurs February 2 and February 3, 
			however the main celebration is on February 3. St. Blaise 
			is the Protector of Dubrovnik. I don’t know much about 
			the festivities that goes on even though I tried to 
			emerge myself in the festivities. But, 
			<a id='link' href='https://www.dubrovnikcity.com/dubrovnik/attractions/st_blaise_church.htm' target='_blank'>
			the City of Dubrovnik website</a> has more information about St. Blaise. </p><br/>

		<p>On Friday, during the St. Blaise celebrations, the Old 
			Town was crowded with people. There were many people 
			dressed in traditional clothing, as well as crowds of 
			people singing and the priest of the church giving a 
			speech. I’ve been told that you can get your throat 
			blessed on this day, but I unfortunately did not even 
			though I wish I had. </p><br/><br/>

		<p>The highlight of my week did, however, occur on St. 
			Blaise Day. The city allows free access to the City 
			Walls on February 3 (I believe it usually costs 150 
			Kuna, which is just under 22 USD). It was such an 
			incredible experience! There is no view of the town 
			quite like the one from the walls. I went up with two 
			of my friends, and it took us about one hour to travel 
			around the entire perimeter. It is something I plan to 
			do again at least one more time. </p><br/>

		<p>Next time I do it, though, I want to knowingly pass by HBO famous 
			landmarks. For the Game of Throne fans out there, I realized 
			afterwards just how many landmarks I walked passed and saw from the City 
			Walls. Just this morning, I was looking up things to do because I don’t 
			have class Monday, Wednesday, or Friday this week because my professor 
			will be gone (but don’t worry – we already had make up classes for those 
			days). I knew there were filming locations in Dubrovnik, but I didn’t 
			realize how many I had already passed. </p><br/>

		<p>I am excited to seek out the filming locations, because between 
			my binge-watching of the series and being in one of the cities Game 
			of Thrones was filmed, it would be a waste to not see all of which I 
			can see. </p><br/><br/>

		<p>This is a shorter blog post, but there no words to 
			describe how I felt on the walls. And as we know, a 
			picture is worth a thousand words. <p><br/>

		<p>PS: I'm working on a photo gallery, so you can see my 
			pictures at your own pace.</p><br/>

		<hr/><br/>
		<?php
			//include 'assets/inc/comment.inc.php';
		?>
	</div>

<?php
	include 'assets/inc/footer.inc.php';
?>