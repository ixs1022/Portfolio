<?php
	$active_page = "home";
	$subtitle = "Blog";
	include "assets/inc/header.inc.php";

	include "/home/ixs1022/db_conn.php";
	$table = "blog8";

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
		<h1 id='blog-title'>Andiamo a Roma!</h1><br/>
		<div id='blog-date'>March 22, 2017</div>
		<?php include 'assets/js/march22-carousel.php'; ?>
		<br/>

		<p>A week ago today – Wednesday, March 15 – my dad and I arrived at Roma Termini from Venice. The train ride there was not bad at all. Traveling by train is much less of a hassle than traveling by plane.</p><br/>
		<p>We walked from the station to our room at the Sunshine Rooms, which was just a few blocks away from where we arrived. I’m not going to lie, we got a little lost (or thought we did) because we couldn’t find where we were staying but then I thought to look at the building number instead of for a sign directing us; it turns out we walked past our destination twice – once on each side of the street.</p><br/>
		<p>After quickly settling in, we headed down the street for dinner. I had looked up the restaurant we were going to go to but once again we walked past it. We ended up eating across the street from the restaurant I thought we were going to go to. It all worked out though! My dad and I both has homemade lasagna, but I have to admit I am still longing to my mom’s lasagna. Not even in Italy can they even meet the satisfaction of my mom’s lasagna. For dessert, my dad and I each got something and then split them – I got this hazelnut crumb cake with coconut ice cream and he got tartufo (ball of hazelnut ice cream with a chocolate center).</p><br/><br/>

		<p>The next morning we got up early to get to the Vatican on the other side of Rome by 8:00. At 8:30, we had a tour of the Vatican, Sistine Chapel and St. Peter’s Basilica. Although I would say I love Venice more than Rome, I enjoyed the information about our destinations in Rome better than in Venice. Michelangelo did a lot of work for Pope Julius II and it was fascinating to learn about him. While it is said that Michelangelo was a hard person to deal with, I think I would’ve gotten along with him just fine. </p><br/>
		<p>In the early 1500s, Pope Julius II asked Michelangelo to paint the ceiling of the Sistine Chapel, but Michelangelo refused to because he wasn’t a painter; he was a sculptor. However, the pope threatened Michelangelo into doing it. The ceiling was painted in <em>fresco</em>, which is when you paint on wet plaster. Although there is a lot that could be said about this fresco, there is one thing I wanted to mention, to perhaps spread the love and joy of the man Michelangelo was. To get back at the pope for forcing him into painting the ceiling of the chapel, Michelangelo incorporated his, at the time, illegal observation of autopsies. In the fourth panel where the creation of Adam is depicted, Michelangelo put God inside the brain – like if you took a brain and cut it in half, that’s what I mean. Now, the pope wouldn’t have known that because it was illegal, but I’m sure that provided Michelangelo with a sense of satisfaction.</p><br/>
		<p>I guess that was kind of a little side story but anyways – like I said, we started at the Vatican. Like in Venice, every wall and ceiling in these buildings were covered in beautiful paintings, except of course in the Tapestry Museum. Speaking of tapestries, they were quite remarkable. The artwork is not painted on the tapestry; it is woven into the tapestry. A couple of the pieces were dynamic. For instance, there is one of Jesus after he resurrected, and as you walk past it, his eyes follow you.</p><br/><br/>

		<p>After the Vatican City, my dad and I started towards the Colosseum then decided to get lunch. I had misread the time for our next tour and thought we had three hours to get to the Colosseum, but it started at 2:00pm not 3:00pm so we rushed lunch and took a cab to our next destination.</p></br>
		<p>Our Colosseum tour actually included a lot. Not only did we get to see the Colosseum – which I have always wanted to see since like third grade when I did an Italy culture box for class – we also walked through the Roman Forum ruins, walked past the beautiful “wedding cake memorial” (I can never remember the real name), threw a coin in the Trevi Fountain, said our prayers in the Pantheon, and did laps around Piazza Navona. Unfortunately, that’s not all completely true. I didn’t get to throw a coin in the fountain (though if I did, I would of thrown it with my right hand over my left shoulder so I can come back to Rome). We also didn’t say our prayers in the Pantheon; but if it weren’t a church today, it would be just another layer of the lasagna that is Rome. AND we didn’t do laps around Piazza Navona, just walked through it; but when it was first built it was used as a stadium for the games of the day, such as chariot races.</p><br/>
		<p>By the end of our second tour, it was about 5:30pm and my dad and I have been walking for like 10 hours. You think that would be the end of it, but we were (or at least I was) hangry and we disagreed about whether to take the metro or a taxi. Well, being the strong, independent woman I am, I made the executive decision to… walk. Yeah, we walked another 30-40 minutes back to our room. We can laugh about it now, but let me tell you – we weren’t laughing then.</p><br/> <br/>

		<p>Our trip to Rome was amazing! There was so much interesting information and so much to see. I’m sure Rome is probably better to see in more than one day, but I don’t care. We had one day to see everything we could and that’s what we did.</p><br/>
		<p>Oh yeah, you’re probably wondering about “Andiamo a Roma”. Our tour guide for the second tour (the Colosseum and all the others) would say, “Andiamo!" It means ‘let’s go’. So, I say, “Andiamo e Roma! Let’s go to Rome!” But we can’t stay in Rome forever...</p><br/>


		<hr/><br/>
		<?php
			//include 'assets/inc/comment.inc.php';
		?>
	</div>

<?php
	include 'assets/inc/footer.inc.php';
?>