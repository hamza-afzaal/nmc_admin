/*************************************************************/
		/**/
		/* Side Panel animation of border and arrow 
		/**/
		/*************************************************************/
		$('.rcontent--list-with-border li a').on('mouseenter',function(e){
			var parent = $(this).parent();
			if(parent.hasClass('off-focused')){
				parent.toggleClass('off-focused')
			}
			parent.toggleClass('focused');
		})

		$('.rcontent--list-with-border li a').on('mouseout',function(e){
			var parent = $(this).parent();
			if(parent.hasClass('focused')){
				parent.toggleClass('focused')
			}
			parent.toggleClass('off-focused');
		})

		$('.rcontent--list-with-arrow li a').on('mouseenter',function(e){
			var parent = $(this).parent();
			if(parent.hasClass('off-focused')){
				parent.toggleClass('off-focused')
			}
			parent.toggleClass('focused');
		})

		$('.rcontent--list-with-arrow li a').on('mouseout',function(e){
			var parent = $(this).parent();
			if(parent.hasClass('focused')){
				parent.toggleClass('focused')
			}
			parent.toggleClass('off-focused');
		})




		/*************************************************************/
		/**/
		/**/
		/**/
		/*************************************************************/





		/*************************************************************/
		/**/
		/* Side Panel animation of border and arrow 
		/**/
		/*************************************************************/

		scrollCheck('');
		$(window).on('scroll', function(e){
			scrollCheck(e);
		});

		function scrollCheck(e) {
			var scrollValue = $(window).scrollTop();
			if (scrollValue > 500) {
				$('.navbar').addClass('fixed-top');
			} else{
				$('.navbar').removeClass('fixed-top');
			}
			if(scrollValue > 70){
				$('#scrollToTop').css('opacity','1');
			}
			else{
				$('#scrollToTop').css('opacity','0');
			}
		}
		$('#scrollToTop').on('click',function(e){
			$('html,body').animate({ scrollTop: 0 }, 'slow');
			return false; 
		})

		/*************************************************************/
		/**/
		/**/
		/**/
		/*************************************************************/




		/*************************************************************/
		/**/
		/* Comment section form validations
		/**/
		/*************************************************************/

		$("#comment-form").validate({
			rules: {
			  'comment-name-text': "required",
			  'comment-text': "required",
			  'comment-email-text': {
				required: true,
				email: true
			  }
			},
			messages: {
			  'comment-name-text': "Please specify your name",
			  'comment-text': "Please specify your comment",
			  'comment-email-text': {
				required: "We need your email address to contact you",
				email: "Your email address must be in the format of name@domain.com"
			  }
			}
		  });
  
  
		  /*************************************************************/
		  /**/
		  /**/
		  /**/
		  /*************************************************************/