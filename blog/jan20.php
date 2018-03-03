<?php
	$active_page = "home";
	$subtitle = "Blog";
	include "assets/inc/header.inc.php";

	include "/home/ixs1022/db_conn.php";
	$table = "blog2";

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
		<h1 id='blog-title'>Lost and Found</h1><br/>
		<div id='blog-date'>January 20, 2017</div>
		<?php include 'assets/js/jan20-carousel.php';?><br/><br/>
		<p>I made it to Dubrovnik yesterday afternoon around 1600 (about 10:00AM
			Eastern time). However my luggage did not; after a long day of flying, 
			it was a little upsetting but luckily I had an extra outfit for the next day in 
			my carry-on for exactly that reason - lost luggage.</p><br/>
		<p>Speaking of luggage and carry-on, when I was packing I made it my mission to 
			fit everything into one suitcase and the only carry-on item would be my backpack.
			Determined as I was, I succeeded!</p><br/><br/>
		<p>Here is a break down of the last few days for me:</p><br/>
		<p>Wednesday (January 18) my dad drove me to the Toronto Airport for my 
			flight to Amsterdam at 6:40pm - it was about an 8 hour flight. BUT International Travel
			 Airlines have surprisingly good food so that's a plus! After Amsterdam, I had a 2 hour
			  flight to Zagreb (the capital of Croatia) and then a flight that was less than an hour
			   to Dubrovnik. When I landed, I found out that my luggage did not make it there with me, 
			   so I talked to the people at the Lost and Found desk and gave them my information and 
			   they could find it and get in touch with me.</p><br/>
		<p>Although it was a little stressful that my luggage was lost (probably in Amsterdam) 
			   	it was SO great that Mel, a grad assistant from RIT Croatia, was there to pick me up. We 
			   	went to the apartment that was arranged for me - it is a very lovely place with 4 bedrooms,
			   	2 full bathrooms, a half bathroom, and a common area (plus being the first one there I picked 
			   	a bedroom with a balcony and a view of the sea). In total, there are now 8 of us in this apartment,
			   	 but it is still really nice and so far there hasn't been any trouble!</p>
	    <p> After I dropped off what little I had, Mel, the one and only boy in our apartment,
			   	and two other girls studying abroad (one from France, one from Poland) met up with the students 
			   	studying abroad over intersession for dinner. Then, we went back home, and a few hours later the other
			   	6 girls showed up from Rochester.</p><br/>
		<p>Today (January 20) we had orientation at 10:00 (which is about 4:00AM) 
			   	in America. It was mostly just filling out paperwork to get out Temporary Stay Visas. 
			   	Then we went all around town to get a stamp and our pictures taken for our Visas before 
			   	finally getting to the Police Station to drop off our applications.</p><br/>
		<p>When we finished all of that, we walked into Old Town. Something that is really cool for us - 
			   	we will be in Dubrovnik the same time Leonardo DiCaprio starts directing his movie, Robin Hood. 
			   	When we were walking around, we saw men building the set for the movie and the hotel where they are 
			   	casting for extras. As cool as it would be, I never got the chance to go in and ask about it. 
			   	Either way, it's pretty cool; Mel said it's a small town so there is a chance we might run into Leo.</p><br/><br/>
		<p>I wish I could say finally, but the day isn't over yet! After Old Town, we went home, went
			 grocery shopping for a few things, not too much stuff, and went home again. While at the store
			  I got a call from the airport, and my luggage arrived. Fifteen minutes later, a man 
			  from the airport dropped it off and I unpacked in 10 minutes! It was such a relief!</p><br/>
		<p>Finally, my roommates and I went to dinner down the street, then went out with the other
			 study abroad students (there are the 2 girls and then also 2 guys from France) to a club 
			 and just hung out there for a little. We left, I FINALLY got a chance to shower (the last 
			 shower I had was the Tuesday before I left so, it was long overdue).</p><br/><br/>
		<p>Now, past midnight here, and only dinner time back home, I am waiting for a phone call 
			from my parents. Tomorrow and Sunday are pretty much free days for us, then classes start 
			Monday. I am pretty excited!</p><br/>
		<p>I am curious to see how many people are in my classes. All I know is that all the girls studying abroad
			other than me are Hospitality majors. I will find out in a couple of days for sure!</p><br/>





		<hr/><br/>
		<?php
			//include 'assets/inc/comment.inc.php';
		?>
	</div>

<?php
	include 'assets/inc/footer.inc.php';
?>