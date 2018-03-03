<script>
	var images = new Array();
	images[0] = "assets/img/week1/tiger-at-port.jpg";
	images[1] = "assets/img/week1/pirate-ship.jpg";
	images[2] = "assets/img/week1/babin-kuk-bus-stop.jpg";
	images[3] = "assets/img/week1/old-town-cat.jpg";
	images[4] = "assets/img/week1/old-town-night.jpg";
	images[5] = "assets/img/week1/night-at-old-town.jpg";
	images[6] = "assets/img/week1/museum3-man.jpg";
	images[7] = "assets/img/week1/museum3-devil.jpg";

	var count = 0;

	function next(){
		console.log("in next() method");
		
		document.getElementById('blog-img').src = images[count];

		setTimeout(function(){
			next()
		}, 3000);

		if(count >= 7){
			count = 0;
		}
		else{
			count++;
		}

	}

</script>