function animate(){
	var red="barred";
	var yellow="baryellow";
	var blue="barblue";	
	

	
	$(".charts").each(function(i,item){
		var addStyle="";
		var divindex=$(item).attr("divindex");
		if(divindex=='red'){
			addStyle=red;
		}else if(divindex=='blue'){
			addStyle=blue;
		}else{
			addStyle=yellow;
		}
	
		$(item).addClass(addStyle);
		var a=$(item).attr("w");
		$(item).animate({
			width: a+"%"
		},1000);
	});
	
}
animate();