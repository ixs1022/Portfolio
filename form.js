function submitForm(){
	var human = document.getElementById('_check_');
	if(document.getElementById("firstname").length > 0){
		if(document.getElementById("lastname").length > 0){
			if(document.getElementById("email").length > 0){
				if(document.getElementById("message").length > 0){
					if(human.value == ''){
						return true;
					}
				}
			}
		}
	}
	else{
		return false;
	}
}
