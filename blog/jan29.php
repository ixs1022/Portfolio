<?php
	$active_page = "home";
	$subtitle = "Blog";
	$function = "next()";
	include "assets/inc/header.inc.php";

	include "/home/ixs1022/db_conn.php";
	$table = "blog3";

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

	include "assets/js/jan29-gallery.js";

?>
	<div id='content'>
		<h1 id='blog-title'>Easy, Breezy, Freebies</h1><br/>
		<div id='blog-date'>January 29, 2017</div>
		<?php include 'assets/js/jan29-carousel.php'; ?>
		<br/><br/>

		<p>One week of classes down, fifteen weeks to go! <p><br/>

		<p>Week 1 went pretty well. It’s kind of an adjustment for me to 
			have so much free time during the week. Every class is 75 minutes 
			long and I have each class twice a week. I’m taking five classes, 
			but one of those classes is held only once a week.</p><br/>

		<p>I have class every day at 8:30am (yep, classes start 30 minutes 
			later than in Rochester). On Mondays and Wednesdays, my 8:30am 
			classes are the only classes I have; on Mondays, I have Foundations 
			of Mobile Design (the second class is held Friday at 8:30am) and on 
			Wednesdays, I have Design Principles and Patterns (the second class 
			is held Friday at 12:00pm). My Tuesdays consist of Database Connectivity 
			and Access in the morning (we meet again Thursday at the same time), 
			with a five hour break before I have History of Premodern Japan 
			(meeting again Thursday at the same time), followed by Wines of the 
			World (which is only on Tuesdays).</p><br/>

		<p>Originally, I was also taking Client Programming Mondays and Wednesdays, 
			but after the first class I knew I had to get out of that class. Because 
			the class was held via Polycom since the professor is teaching at the campus 
			in Zagreb and because I didn’t get a good vibe from the professor, the class 
			immediately created unnecessary stress so I dropped it on day 1 and added Wines 
			of the World to my schedule .</p><br/>

		<p>Polycom is something to be aware of; I had no idea until I got to my 
			class that I was going to have my class virtually with the students 
			in Zagreb. However, it’s not all bad. Database Connectivity is also a 
			Polycom course for me, but the professor seems a lot more chill and I 
			think it will be a good class.</p><br/><br/>

		<strong>Easy</strong><br/>

		<p>Considering 8:30am is pretty early and I am living on the opposite side 
			of Dubrovnik from the campus, it is nice that after classes on the first 
			day, we were able to go and get our bus passes. It costs 20 Kuna to get the 
			card made and 50 Kuna per month (paid at the beginning of each month) to ride. 
			Before the bus passes, we either paid 30 Kuna for a 24-hour pass, 12 Kuna for 
			a 1-hour pass if the booth is open, or 15 Kuna if you have to pay for the 1-hour 
			pass when you get on the bus. So, it is very nice to now for each of us to have 
			our own bus pass.</p><br/>

		<p>On the other hand, during the day, the weather has been so beautiful. Early in 
			the morning when I go to classes, it is a little chilly; but I wear a light 
			jacket and once I start walking up the hill to get to the bus stop, I warm up 
			very quickly. The sun is very warm during the day and the skies so far have been 
			blue all day. After classes, the flat isn’t too far away that I wouldn’t walk home. 
			And it’s a very beautiful walk along the water.</p><br/>

		<strong>Breezy</strong><br/>

		<p>During the day, the sun keeps you warm, but a light breeze keeps you cool. 
			At night, however, it gets quite chilly. When the sun goes down, the wind comes 
			out howling. Even so, I have never walked outside at night where the wind is unbearable, 
			but when I am inside, it appears to intensify. </p><br/>

		<p>Speaking of walking at night, just as everyone has told me, it is very safe to walk alone at 
			night. I have only had to walk from the bus stop to home at night, but it is a long enough 
			walk (I would say over a quarter mile). For comparison, during the whole clown situation in 
			America, I didn’t particularly enjoy walking from my academic side to my apartment just off 
			campus alone when it started getting dark because of a 100-foot swampy/woodsy area from the 
			edge of K-Lot to the start of the Perkins Greens parking lot. There weren’t even confirmed 
			clown sightings in Rochester (as far as I knew… and know) but I was paranoid enough to be 
			hyper-alert walking that small stretch.<p><br/>

		<p>So far, the only thing that has spooked me walking at night is seeing a medium-sized 
			dog at night and thinking it is a large cat until I see the owner and realize the dog 
			is being walked. There are a lot of cats around Dubrovnik, so when I see a dog pop out 
			at my feet from nowhere*, its startling for the slightest moment you don’t recognize 
			that it’s just a dog.</p><br/><br/>

		<strong>Freebies</strong><br/>

		<p>After one week, it is a good feeling to know how to get around a foreign country a 
			little bit and get a feel for what it will be like for the next few months. But, 
			that’s not to say there is not a lot more to figure out when it comes to navigating 
			around town.</p><br/>

		<p>Friday night was Free Museum Night (I’m sure that can be put more eloquently, 
			but not by me :D ). I went along with two other girls studying abroad around 
			the Old Town trying to find museums; we successfully* found three.</p><br/>

		<p>The first museum was up the number of stairs I would have imagine could 
			take us out of Earth’s atmosphere. It was pretty funny actually because 
			we climbed all of those stairs just to be taken on a tour around some 
			abstract-looking, ancient architecture that was explained in Croatian. 
			The second museum was a very small art museum with some oil-on-canvas 
			paintings. The third one we found, from what I gathered, had something 
			to do with glass and the “firsts” of glass. But after talking to my boyfriend 
			about what I saw at that museum, the devil may have been hanging from the staircase; 
			needless to say, I’m a little confused about what I saw there.</p><br/>

		<p>Nonetheless, I wouldn’t have wanted to do anything else that night. It was 
			beautiful out, we got to walk around the Old Town, and even if I didn’t quite 
			understand what I saw (or anything I heard during the tour), it was an experience. 
			Also, that night has opened my eyes up to my apparent fear of stairs because of the 
			perpetual feeling I had walking up and down the stairs that I was going to fall down 
			them either direction, either forwards or backward – it’s kind of funny when I say it 
			out loud.</p><br/>

		<p>But, that’s one week down. <p><br/>

		<p>* nowhere = the sidewalk leading to the street</p>
		<p>* successfully… success is relative</p><br/>
		<p>Side note: I don't have as many pictures of this week as perhaps I would have
			due to the fact that between Tuesday and Friday afternoon, I didn't have 
			my phone while the screen was getting fixed. It was broken all fall semester -
			 I just didn't do anything about it until now.<p><br/>


		<hr/><br/>
		<?php
			//include 'assets/inc/comment.inc.php';
		?>
	</div>

<?php
	include 'assets/inc/footer.inc.php';
?>