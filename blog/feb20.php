<?php
	$active_page = "home";
	$subtitle = "Blog";
	include "assets/inc/header.inc.php";

	/*include "/home/ixs1022/db_conn.php";
	$table = "blog5";

	$mysqli = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

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
		<h1 id='blog-title'>Split &amp; Krka Falls</h1><br/>
		<div id='blog-date'>February 20, 2017</div>
		<?php include 'assets/js/feb20-carousel.php'; ?>
		<br/>
		<p>Last week was a slow week; there wasn’t much going on. The most exciting part of last week was that I had an interview for a summer co-op via Skype, but it wasn’t something worth writing a whole blog post. Don’t get me wrong; it was good. I think it went well; at least it went better than my nerves made me think it would go. But, whether it was good or bad and whether I get it or not, it was really just nice to get an interview under my belt for future job interviews.</p><br/><br/>

		<p>This weekend was the first of three field trips we get to go on as study abroad students from RIT. We had a private bus ride from Dubrovnik to Split, which is about 3 hours north up the coast of Croatia. We had to pass through Bosnia (it was literally like 20 minutes through Bosnia); and compared to crossing the Canadian border, it was a breeze. No one checked our passports until we were crossing back into Croatia coming back from Split.</p><br/>

		<p>When we arrived in Split, we went to our hotel - the 4-star Hotel Globo. We didn’t stay long because within the next 15 minutes, we went outside to meet our tour guide. He walked us through the town of Split and told us all about the history of the Old Town. It was fascinating to both hear about and be able to see the different foreign influences on the town.</p><br/>

		<p>One part of the town was influenced by the French. It was full of beautiful colors and classic architecture. Then the Roma influences include a lot of the white stones and the Venetians used brick. So, while walking through the town, you could tell when you were leaving the French sector and moving into the Roma or Venetian ones. There may have been another foreign influence that still remains, but I can’t remember.</p><br/>

		<p>Another piece of the Split history I enjoyed hearing about and walking through was about the Roman Emperor, Diocletian.  He ruled and even deemed himself as a god. He ruled in Split for many years – longer than most other one man had. We were able to walk through his palace and see the building where he is buried. However, most of his influences, including the Egyptian influence of the Sphinx have been destroyed. There is only one Sphinx left that does not have its head removed. Also, sometime after his death, someone destroyed nearly all the writings and any artwork depicting Diocletian, so it is rare to see what he looked like. It is said these things were likely destroyed because he tried to make himself a god. However, as you go into the Old Town, there is a painting of Diocletian on the side of a building (pictured in one of the images above). Also, his half of the palace is nearly untouched, whereas the other side that was for the army has changed drastically over the years.</p><br/><br/>

		<p>The next morning, we head off to Krka National Park to walk around and see the falls. It was a beautiful day. The sun was out, the skies were blue, and it was perfect temperature to walk along the water of the falls. We took our time to walk along one of the open paths around the park; it took us about two hours. After we finished, we had a planned lunch at this nice restaurant about 30 minutes from the park.</p><br/>

		<p>When we arrived, we were greeted by a cute young cat. Ever since my brother got a cat, I’ve had a soft spot for them, so I crouched down to see if she would let me pet her. She came right up to me and as I started petting her she climbed onto my lap. After a couple minutes, I picked her up and put her down and went in for lunch. For lunch, we had meat – turkey filet, pork filet, sausage link (probably the best hotdog I’ve had), and beef steak kabab with French fries. Then we had a delicious chocolate cake with dark chocolate syrup. It was a perfect meal after a perfect day at Krka Falls.</p><br/><br/>

		<p>Now, the next high point of my study abroad experience will probably be Spring Break, which is in a couple of weeks. Also, the next planned field trip is the first of April (and that’s not a joke… I hope).</p>
				
		<hr/><br/>
		<?php
			//include 'assets/inc/comment.inc.php';
		?>
	</div>

<?php
	include 'assets/inc/footer.inc.php';
?>