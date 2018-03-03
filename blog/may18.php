<?php
	$active_page = "home";
	$subtitle = "Blog";
	include "assets/inc/header.inc.php";

	include "/home/ixs1022/db_conn.php";
	$table = "blog13";

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
		<h1 id='blog-title'>Final Count Down</h1><br/>
		<div id='blog-date'>May 18, 2017</div>
		<?php include 'assets/js/may18-carousel.php'; ?>
		<br/>

		<p>After four months in Croatia, my time here is winding down. The month of May has flown by as I had expected and today my mom will be arriving (literally just a couple more hours) and we will be finishing up my experience in Croatia, and Europe, together.</p><br/><br/>

		<p>Once May hit, my stress levels spiked. With projects upon projects to complete and deadlines creeping up, I could not wait for finals week to hurry up and my mom to be here. I was super stressed about my projects and worried I wouldn’t complete them. I was not proud of the final products I submitted, but my grades reflected better than I had expected. Nothing like finishing off your study abroad experience like straight A’s.</p><br/>
		<p>As for the finals themselves – they were a piece of cake. The first final I had was short answer and I was suspecting to be my hardest one, but I only lost a few points. Then, I had a practical for Foundations of Mobile Design; but if you know how to follow directions, it wasn’t designed to be very hard – the project was much worse. My third final was another short answer, but we were allowed one cheat sheet and review questions to help guide us. Lastly, I had a take home final for Wines of the World, so once again, it was easy.</p><br/><br/>

		<p>Now, I am all packed up and waiting to go pick up my mom at the airport. We are going to check in then go out to eat. Today was also the day a couple of the other study abroad students left, so yesterday we went out to eat one last time together. I am super excited for all my mom and I have planned! And I cannot wait to be home and see everyone (especially my brothers because they miss me ;) ).</p><br/>


		<hr/><br/>
		<?php
			//include 'assets/inc/comment.inc.php';
		?>
	</div>

<?php
	include 'assets/inc/footer.inc.php';
?>