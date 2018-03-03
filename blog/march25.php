<?php
	$active_page = "home";
	$subtitle = "Blog";
	include "assets/inc/header.inc.php";

	include "/home/ixs1022/db_conn.php";
	$table = "blog9";

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
		<h1 id='blog-title'>Dear Dad</h1><br/>
		<div id='blog-date'>March 25, 2017</div>
		<?php include 'assets/js/march25-carousel.php'; ?>
		<br/>

		<p>As the part three to my posts about Spring Break 2017, I thought I would tribute it to my dad because if it weren’t for him, none of it would have been possible.</p><br/>
		<p>Two weeks ago today, after a long week of not knowing and rushing to make sure he could come – literally a week before my dad was supposed to leave, he was told they didn’t have his original birth certificate for his passport and it didn’t come in until like the Wednesday before leaving – and after working that day, my dad drove to Toronto just to catch a 22-hour plane so he could see his baby girl. And if you think it was only the week leading up to our trip was stressful, that’s not even the half of it.</p><br/><br/>

		<p>My dad arrived in Dubrovnik Sunday night, and the very least I could do was walk a mile to get on a bus that would take me to meet him at the airport. When he arrived, we first stopped at my apartment, and he unpacked some goodies he brought me (Valentine’s Day chocolates, St. Patrick’s Day Lucky Charms, Easter candy such as Peeps and bunny Kit-Kats, AND peanut butter and jelly packets because I wanted peanut butter). Then we headed to our room at Dino and Jele apartments for the night.</p><br/>
		<p>We had an afternoon flight to Venice so in the morning we walked into the Old Town, ate outside at a restaurant in Old Town, enjoyed a delicious glass of freshly squeezed orange juice (and a taste of some mint-cherry liquor on the house I think), and walked around the town. Then, we grabbed a snack for the plane from one of the bakeries and we were on our way to Venice. </p><br/><br/>

		<p>On Friday of last week, we arrived back in Dubrovnik. We didn’t do much that night – got all his stuff together, checked into our room again, ate dinner, and played some cards before bed. For dinner, my dad and I ate the Taj Mahal; after eating there the week before, I knew I had to take my dad there. We got this one dish for two, but I looked and felt like a meal for four. It had čevapi, Bosnian burgers, chicken, shish kababs, sausages, and rump steaks as well as a potato for each of us. Needless to say, it was A LOT of meat and VERY filling.</p><br/>
		<p>The next morning we got up and got breakfast. Well, it was kind of breakfast – it was like having cake for breakfast but without the cake and double on the sugar. Then, we got our tickets and took a walk on the Walls of Dubrovnik. It was a beautiful morning, so we had a very nice time enjoying our walk and taking in all of the wonderful views.</p><br/><br/>

		<p>It might not really sound like we did a lot in Dubrovnik, but it was perfect. A week ago my dad left. After a week of a lot of walking, beautiful weather and amazing food, I walked him to the bus stop and watched him leave. It was the most incredible week though because I know I could never have gone alone and I wouldn’t have wanted to trade my time to be with anyone else.</p><br/>
		<p>So, dear Dad,</p>
		<p>Thank you for enduring all the stress and for taking a week out of your schedule to come all this way to see me and take me to Venice and Rome. I know it was just as much of a dream as yours as it was mine to go to Italy, but I am forever grateful. I am grateful for you for this trip and for everything else you do for me.</p>
		<p>I love you, papa.</p><br/>

		<hr/><br/>
		<?php
			//include 'assets/inc/comment.inc.php';
		?>
	</div>

<?php
	include 'assets/inc/footer.inc.php';
?>