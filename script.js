/*
 * Function to mark the 'active page'
 * @param itm -- item clicked to become active page
 * Removes active class from previously active page 
 * and adds active class to new active page
 */
function makeActive(itm){
	console.log(itm);
	$.each($('.navitem'), function(i,item){
		if(item.hasClass('active')){
			item.removeClass('active');
		}
	});
	$(itm).addClass('active');
}



