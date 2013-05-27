    (function($) {  
        $.get = function(key)   {  
            key = key.replace(/[\[]/, '\\[');  
            key = key.replace(/[\]]/, '\\]');  
            var pattern = "[\\?&]" + key + "=([^&#]*)";  
            var regex = new RegExp(pattern);  
            var url = unescape(window.location.href);  
            var results = regex.exec(url);  
            if (results === null) {  
                return null;  
            } else {  
                return results[1];  
            }  
        }  
    })(jQuery);  

function PlegarJumbo(element){
	//$(".jumbotron").toggleClass("jumbo-fold");
			
			$(".masthead > .container").fadeOut();
			$(".masthead p").fadeOut();
			$(".masthead a.btn").fadeOut();
			$(".masthead").animate({
				height: '96px',
				paddingTop: '40px',
				paddingBottom: '40px',
				
			},500,function(){
				$(".jumbo-subtitle").fadeIn();
				$(".masthead > .container").fadeIn();
				$(this).addClass("jumbo-fold");
				$(element).removeClass("up-icon");
				$(element).addClass("down-icon");
				$(this).css('height','auto');//recuperamos el responsive tras la animación
			});
			
}

function DesplegarJumbo(element){
		$(".jumbo-subtitle").fadeOut();
		
		$(".jumbotron").animate({height:'0px',paddingTop: '0px',paddingBottom: '0px'},300,function(){$(".jumbotron ").removeClass("jumbo-fold");
				$(".jumbotron  > .container").hide();}).animate({
				height: '395px',
				paddingTop: '50px',
				paddingBottom: '70px',
				
			},800,function(){
				$(".masthead a.btn").fadeIn();
				$(".jumbotron  > .container,.jumbotron p").fadeIn();
				$(element).removeClass("down-icon");
				$(element).addClass("up-icon");
				$(this).css('height','auto');//recuperamos el responsive tras la animación
			});
		
		
			
}



$(document).ready(function() {
				
	
	//codigo para el JumboTron
	
		/*setTimeout(
		   function(){			
				$(".jumbotron").slideDown(500);
		   }, 100);*/
			
			//PlegarJumbo();	
			/*$(".masthead").css('height','150px');
			$(".masthead").css('paddingTop','20px');
			$(".masthead").css('paddingBottom', '30px');*/
				
		   
		/*setTimeout(
		   function(){			
			  PlegarJumbo();
		   }, 3000);*/
		
		
		$(".up-icon").live('click',function(){
			PlegarJumbo(this);
			
			
		});
		$(".down-icon").live('click',function(){
			
			DesplegarJumbo(this);
			
			//$(this).removeClass("down-icon");
			//$(this).addClass("up-icon");
		});
	//codigo para el JumboTron



	
	
	//Hack para mailchimp
	
	$('.suscribir-newsletter').click(function(){
		
		if($('#option-privacidad').is(':checked')){
		
				//alert("MAILCHIMP");
				$('#mc_mv_EMAIL').val($('.email-newsletter').val());
				
				
				
				
				$('#mc_signup_submit').trigger('click');
			
			
				
				
			
		}else{
			$('html, body').animate({scrollTop:550}, 'slow');
			$('.error-privacidad').fadeIn();
		}
		

		
	});
	
	
	//Hack para jetpack
	
	$('.suscribir-novedades').click(function(){
		
		if($('#option-privacidad').is(':checked')){
		
			
				//alert("JETPACK");
				$('#subscribe-field').val($('.email-newsletter').val());
				$('input[name="jetpack_subscriptions_widget"]').trigger('click');
				
				
			
		}else{
			$('html, body').animate({scrollTop:550}, 'slow');
			$('.error-privacidad').fadeIn();
		}
		

		
	});
	
	
	
	
 
	if($.get("subscribe")=="success"){
		//alert("Se acaba de enviar un e-mail para confirmar tu suscripción a newsletter. Por favor, revísalo y confirma tu suscripción.");
		$('html, body').animate({scrollTop:550}, 'slow');
		$('.success-jetpack').fadeIn();
	}else if($.get("subscribe")=="already"){
		$('html, body').animate({scrollTop:550}, 'slow');
		$('.error-jetpack').fadeIn();
	}
	if($('#mc_message').find('[class="mc_error_msg"]').text()!=""){
		$('html, body').animate({scrollTop:550}, 'slow');
		$('.error-mailchimp').fadeIn();
	}else if($('#mc_message').find('[class="mc_success_msg"]').text()!=""){
		$('html, body').animate({scrollTop:550}, 'slow');
		$('.success-mailchimp').fadeIn();
	}
	
		
		

});