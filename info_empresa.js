$(document).ready(function() {
	// funcion peticion rest
    var get_info= function(){		
		$.ajax({
//({ content: '<img src="' + data[i].foto +'"' + ' alt="Smiley face" height="100" width="100">' })
  url:  'page/marks.php',
  dataType:  'json',
  success : function(data){

		if(data.success){
			document.write("<h3>"+data.data["universidad"]+"</h3><hr>");
			document.write("<h3>"+data.data["Facultad"]+"</h3><hr>");
			for (var i=0; i<data.data.participantes.length; i++){
				document.write("<h4>"+data.data.participantes[i]+"</h4><hr>");
			}
			document.write("<h4>"+data.data["telefono"]+"</h4><hr>");
			document.write("<h4>"+data.data["grupo"]+"</h4><hr>");
		}
  }


});
	}
	get_info();

});