$(document).ready(function() {
				
	/*$("select option:selected div").css("display:block");*/
	/*$("select #formulario option:selected [value='Proyecto digital'] div #form-proyectos").css("display:block");*/
	/*$("#formulario option:selected").each(function () {
        if($(this).val() == "Proyecto digital") {
            $('#form-proyectos').css('display','block');
        } else if($(this).val() == "Investigadores") {
            $('#form-investigadores').css('display','block');
        }
    });*/
	$('#formulario').on("change",function(){
		//alert($(this).val());
		
		$('#form-proyectos').css("display","none");
		$('#form-centros').css("display","none");
		$('#form-investigadores').css("display","none");
		$('#form-otros').css("display","none");
		
		if($(this).val()== "proyectos"){
			
			$('#form-proyectos').css("display","block");
		}
		if($(this).val()=="centros"){
			$('#form-centros').css("display","block");
		}
		if($(this).val()=="investigadores"){
			$('#form-investigadores').css("display","block");
			
		}
		if($(this).val()=="otros"){
			$('#form-otros').css("display","block");
		}
		
	});
	

});