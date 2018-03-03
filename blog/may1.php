<?php
	$active_page = "home";
	$subtitle = "Blog";
	include "assets/inc/header.inc.php";

	include "/home/ixs1022/db_conn.php";
	$table = "blog12";

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
		<h1 id='blog-title'>#0.0</h1><br/>
		<div id='blog-date'>May 1, 2017</div>
		<?php include 'assets/js/may1-carousel.php'; ?>
		<br/>

		<p>In my last post, I mentioned I ran a 5K yesterday.  It was the annual Du Motion Runners’ Days Dubrovnik; it is a charity event for a boy in Croatia who the only one is the country with a rare form or dwarfism. Thursday through Saturday there was an expo, where runners pick up their runners’ packets and visitors as well as community members can purchase Du Motion and running-related gear. To kick off the races, Saturday was Run the Wall and Kid’s Day. If it weren’t for the field trip I probably would have wanted to do the Run the Wall race.</p></br>
		<p>Run the Wall started at 10am, and the course is 2.5K (about 1.5 miles) around the walls, but along with the same package items as the 5K, runners also got free entrance to the Walls, free entrance to the museums, Lokrum Island excursion, free cable car ride, pasta party coupon and a few more items. Following the Run the Wall, the Kid’s Day race is a 250m run down the main street of Old Town, and it took place at 11am.</p><br/><br/>
		<p>Sunday morning, there was the Half Marathon and the 5K. The half-marathon runners started at 9:30, and the 5K runners began 5 minutes after. I was really hoping it would rain at least during the run because in my head, it would have made it easier to rationalize how unprepared I thought I was for this uphill-both-ways race. Also, to me, 9:30 seems late to start a 5K, and especially a half marathon; and during the run, I was feeling it too.</p><br/>
		<p>There wasn’t much if any shade during the race and the sun was beating down hot. However, there were three spots where volunteers for the event were handing out little cups of water for the 5K runners (I don’t’ know how many more there were for the half-marathoners).</p></br>
		<p>Leading up to the race, I ran at least four or five times a week since the beginning of April, but I hadn’t run more than two miles a day in that time. Also I knew that there was going to be big hills in this run; and although I did prepare a little for hills, I surely didn’t prepare enough. On the hill coming back towards the finish, I was about ready to die. And, by the finish, even with the downhill into Pile, I just wanted to let my legs collapse under me.</p><br/>
		<p>I rested for about 30 minutes after I finished before walking back home. As I was walking back up the hill I had just imagined myself barrel-rolling down, the first half-marathoner was coming down. It gave me chills watching him run past me because I know there was no way that it took him more than an hour and a half. I checked later and found out he finished in one hour and sixteen minutes.</p><br/>
		<p>I didn’t do much else yesterday even though most of the day was still ahead of me, but today I didn’t have class because it is Labor Day here and in many parts of Europe. I stayed up 40 minutes later than usual last night and didn’t set myself alarm for this morning because I could finally sleep in and not feel guilty for not getting up to run. But, one of the first things I did when I woke up this morning was check the results of the 5K.</p><br/>
		<p>My race time was 33:50, but the chip read 33:06 (I was at the back of the pack). It’s good to note that it seems many the runners were younger kids, who like to run then stop then run then stop.  With that time, I was the 211 person to finish out of 632 people who ran; but I was the 81 female to finish out of the 404 females running.</p><br/><br/>
		<p>While the race was overall not bad and I really do enjoy running 5Ks, I will definitely not be running a half marathon or a marathon anytime soon… or ever.</p><br/>
		<p>#0.0</p><br/>



		<hr/><br/>
		<?php
			//include 'assets/inc/comment.inc.php';
		?>
	</div>

<?php
	include 'assets/inc/footer.inc.php';
?>