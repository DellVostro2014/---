$(document).ready( function($) {
	        $(window).scroll(function(){
	            if($(this).scrollTop()>90){
	                $('#navigation').addClass('scroll');
	            }
			  
	            else if ($(this).scrollTop()<90){
	                $('#navigation').removeClass('scroll');
	            }
			  console.log($(this).scrollTop());  
	        });
	    }
);