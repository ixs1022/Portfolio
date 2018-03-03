<?php
	$active = "portfolio";
	include "inc/header.inc.php";
?>
	<h1 class='title'>Projects</h1>
	<div id="blog-proj">
		<a href="#blog-desc" rel="modal:open">
			<div id="blog-img">
				<img src="img/blog.jpg" alt="The Traveling Tiger Blog">
			</div>
		</a>
	</div>
	<div  id ="blog-desc" class="modal">
		<h3 class="proj-title">The Traveling Tiger Blog</h3>
		<p>In Spring 2017, I studied abroad in Dubrovnik, Croatia. 
			This blog is both a place where I shared my experiences with friends and family,
			as well as a Peronal Project. Using HTML, CSS and some PHP and Javascript,
			I created this blog. While I can improve it (and probably will because I may
			continue on blogging), I had this ready in less than a month to take with me to Croatia.<br><br>
			<a href="blog/home.php" target ="_blank">View Blog</a>
		</p>
	</div>
	<div class="proj-div">
		<div class="proj-img">
			<a href="#proj1" rel="modal:open">

			</a>
		</div>
		<div id="proj1" class="modal">
			<h3 class="proj-title">Title</h3>
			<p>
				Descripiton
			</p>
		</div>

		<div class="proj-img">
			<a href="#proj2" rel="modal:open">

			</a>
		</div>
		<div id="proj2" class="modal">
			<h3 class="proj-title">Title</h3>
			<p>
				Descripiton
			</p>
		</div>

		<div class="proj-img">
			<a href="#proj3" rel="modal:open">

			</a>
		</div>
		<div id ="proj3" class="modal">
			<h3 class="proj-title">Title</h3>
			<p>
				Descripiton
			</p>
		</div>

		<div class="proj-img">
			<a href="proj4" rel="modal:open">

			</a>
		</div>
		<div class="modal">
			<h3 id="proj4" class="proj-title">Title</h3>
			<p>
				Descripiton
			</p>
		</div>
	</div>

<?php
	include "inc/footer.inc.php";
?>