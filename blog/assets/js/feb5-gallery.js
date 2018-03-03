<script>
	var images = new Array();
	images[0] = "assets/img/week2/tiger_city_walls.jpg";
	images[1] = "assets/img/week2/st_blaise.jpg";
	images[2] = "assets/img/week2/st_blaise_church.jpg";
	images[3] = "assets/img/week2/band.jpg";
	images[4] = "assets/img/week2/cannon_city_walls.jpg";
	images[5] = "assets/img/week2/old_town_walls.jpg";
	images[6] = "assets/img/week2/tiger_viewport.jpg";
	images[7] = "assets/img/week2/city_walls.jpg";
	images[8] = "assets/img/week2/me_and_tiger.JPG";

	var count = 0;

	function next(){
		console.log("in next() method");
		
		document.getElementById('blog-img').src = images[count];

		setTimeout(function(){
			next()
		}, 3000);

		if(count >= 8){
			count = 0;
		}
		else{
			count++;
		}

	}

</script>