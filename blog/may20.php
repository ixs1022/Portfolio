<?php
	$active_page = "home";
	$subtitle = "Blog";
	include "assets/inc/header.inc.php";

	include "/home/ixs1022/db_conn.php";
	$table = "blog14";

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
		<h1 id='blog-title'></h1><br/>
		<div id='blog-date'>May 20, 2017</div>
		<?php include 'assets/js/may20-carousel.php'; ?>
		<br/>

		<p>The bitter-mostly-sweet time has arrived to leave my home for the past four months. It is hard to be sad to leave when there is still so much happiness and excitement ahead.</p><br/>
		<p>The reunion with my mom was all I knew it would be and more. There is nothing quite like the hug from your mama, especially when that hug is accompanied by tears (hers, not mine). Since the moment of her arrival, all of our plans have been going perfectly (even if we were 45 minutes late to our dinner reservation on Thursday).</p><br/>
		<p>We had dinner at Pantrual – the same restaurant from the last dinner with my roommates. It is such a friendly place and the food is absolutely delicious! My mom ordered the vegetable risotto I had the evening before, and I ordered a delicious fresh fish dish. While we were late and lost our reservation, it did not take long for a table to become available, but we had a class of wine while we waited to celebrate our reunion. After dinner, we picked up my luggage and went to our room to relax for the rest of the night.</p><br/><br/>

		<p>Friday morning, we got up nice and early (but not too early) and went for breakfast at Dubravka. The service was fast, and the food was delicious. It allowed us to walk the city walls at a perfect timer before it was too busy and too hot. After walking the walls I had planned for us to make our way to Lokrum Island for lunch, but instead we walked around Old Town for a little while, rested by the fountain, and pushed up the rest of the plans a little bit.</p><br/>
		<p>Once we had a chance to rest our feet, we went to the “bridge” and placed our lock to leave our mark on Dubrovnik. On our way back down the hill towards Pile, we took a slight detour so I could show my mom the less-than-exciting-but-nevertheless-worth-the-see college. Then, we went back to Old Town and went to the D’Vino Wine Bar, where we shared a cheese platter and each had a taste of Croatian wines. By the time we finished up there, it was about three and we had a few more hours before our dinner reservation, so we went to our room to rest.</p><br/>
		<p>At 6:30, we went to Gusta Me for dinner – another homerun. The service was once again fast and friendly; the food was delicious; and we left with our bellies full. By the end of our dinner, the weather had cooled down and we decided to take one last tour around the town. Then, we went back home to shower, pack and sleep because our flight for Paris was at 6:50am, and we had to catch a 4:45 bus to the airport.</p><br/><br/>

		<p>I have a feeling Paris will steal a piece of my heart, But Dubrovnik, I will be back.</p><br/>
		<p>Until next time!</p><br/>



		<hr/><br/>
		<?php
			//include 'assets/inc/comment.inc.php';
		?>
	</div>

<?php
	include 'assets/inc/footer.inc.php';
?>