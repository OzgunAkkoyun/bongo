$(function(){

	let videoContainer = $('.videoContainer')[0];
	let video = videoContainer.children[0];
	console.log(videoContainer.children)
	$(window).on('load',function(){

		$('.loadingBar').fadeOut('slow');

	})

	$('.link').click(function() { 

		var li = $(this);
		var target = li.data('target');

		var ScrollTo = $(target)[0].offsetTop;
		var ul = $(li)[0].parentElement.parentElement.children;

		$(ul).map((key,item)=>{

			$($(item)[0].firstChild).removeClass('active');
			
		})

		li.addClass('active');

     	$('html,body').animate({ scrollTop: ScrollTo },900);

	});

		window.sr = ScrollReveal();
		// Customizing a reveal set 
		sr.reveal('.each-service', { origin: 'bottom', distance: '100px', duration: 1000, delay: 0, easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)' });
		// sript for fixed header on scroll

	$('.seminarImg').on('click',function(e){

		let target = $(e)[0].currentTarget;
		videolink = $(e)[0].currentTarget.dataset['videolink'];

		$(videoContainer).addClass('openVideo');
		video.src=videolink;
		video.play();

	});


	$('.closeVideo').on('click',function(){

		video.pause();

		$(videoContainer).removeClass('openVideo');



	});

	$('.menuOpen').on('click',function(){

        if ($('.mobileHeader')[0].style.display == "none"){
            $('.mobileHeader').addClass('ac');
         
            $('.mobileHeader').css('display','block');
            $('.menuOpen').removeClass('fa-bars');
            $('.menuOpen').addClass('fa-times');
	        
        } else {
            $('.mobileHeader').removeClass('ac');
            setTimeout(()=>{

            	$('.mobileHeader').css('display','none');
	            $('.menuOpen').removeClass('fa-times');
	            $('.menuOpen').addClass('fa-bars');

            },200)
            
        }

    });

    $('.mobileHeader li').on('click', function(){

    	$('.mobileHeader').css('display','none');
        $('.menuOpen').removeClass('fa-times');
        $('.menuOpen').addClass('fa-bars');
    	
    })

});