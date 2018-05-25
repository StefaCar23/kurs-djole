$(document).ready(function(){
	
	$("#saberi").click(function(){
		test("jedan");
	});
	
	$("#oduzmi").click(function(){
		test("dva");
	});
	
	$("#pomnozi").click(function(){
		test("tri");
	});
	
	$("#podeli").click(function(){
		test("cetiri");
	});
	
	
});

function test(bre){
	$.ajax({
			url: "probanje.php",
			method: "GET",
			data:{
				"dug" : bre
			},
			dataType: "text",
			success: function(result){
				$("#rez").html(result);
			}
		});
}