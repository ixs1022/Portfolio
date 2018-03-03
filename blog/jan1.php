<?php
	$active_page = "home";
	$subtitle = "Blog";
	include "assets/inc/header.inc.php";

	include "/home/ixs1022/db_conn.php";
	$table = "blog1";

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
		<h1 id='blog-title'>Preparing for Take Off</h1><br/>
		<div id='blog-date'>January 1, 2017</div>
		<figure id='blog-post-figure'>
			<?php include 'assets/js/jan1-carousel.php';?>
		</figure><br/>
		<p>Happy New Year and welcome to my blog! I am so excited for what
			the new year will bring, and I am especially excited to study 
			abroad in Dubrovnik, Croatia.  I have always wanted to study abroad,
			 and I have been planning to do so since Spring of last year.
		</p><br/>
		<p>
			Throughout the fall semester, I did a few things here and there to start 
			preparing for Croatia. The first thing I did was schedule my 
			meeting with my study abroad advisor; I met with her at the end of 
			the Spring semester last year and then again at the beginning of 
			the Fall semester to make sure I was doing everything I needed to be
			doing.
		</p><br/>
		<p>
			In September, I went to the passport drive on campus. I was planning
			 on getting my passport over the summer at home, but I'm glad I waited to do it at school. The 
			process of doing it on campus was quick and easy, and there were 
			study abroad advisors and student ambassadors present and willing 
			to talk and answer questions. (Not to mention a cheaper processing fee
			and shorter processing time for the passport.)
		</p><br/>
		<p>
			Once I finished filling out my application and getting my passport, the majority 
			of the fall semester was spent waiting - 
			waiting for my passport, waiting to be accepted, and waiting for shopping 
			carts to open and enrollment to start.  When shopping carts opened, all there 
			was left to do was turn in my pre-approval form for classes and make sure everything 
			needed for my Visa was turned in to my study abroad advisor.
		</p><br/>
		<p>
			Bank statement - check.<br/>
			Proof of International Coverage by my insurance - check.
		</p><br/><br/>
		<p>
			After I got my acceptance email, I went online and booked my flight 
			to and from Croatia. I leave January 18, and I come back home May 20.
		</p>
		<p>
			I've got to admit, this was the most stressful part for me so far. I didn't 
			want to pick the wrong flight by accident or pick a flight with horrible layovers 
			(12 hours - NO THANK YOU!) or pick a flight that didn't get me there on time (I 
			have orientation the 20th, so I wouldn't want to arrive the 20th). In the end, I 
			think I picked perfectly! I have an overnight flight the 18th to the 19th, and then
			on the way home, I'll leave the Saturday after finals week. AND I got a really good 
			price on tickets.
		</p><br/>
		<p>
			Tip for buying tickets: consider flying out of Canada, and don't forget to check the 
			layover times.
		</p><br/><br/>
		<p> Now that I have my passport and my flight booked, all I really have left to do is pack. 
			My mom got me a few things for my trip - an outlet adapter, a bag she found that was 
			recommended for traveling, and Tiles (bluetooth trackers). My goal for packing is one
			luggage bag and my backpack as my personal carry-on. I'm going to use vacuum storage bags to maximize the 
			amount of space I have for everything I need.
		</p><br/>
		<p>
			In the mean time, when I'm not packing, I will be spending time with my friends and family 
			applying to more co-ops for the Summer, and knitting my 
			third scarf of the winter break while I watch Bob's Burgers.
		</p><br/>

		<hr/><br/>
		<?php
			//include 'assets/inc/comment.inc.php';
		?>
	</div>

<?php
	include 'assets/inc/footer.inc.php';
?>