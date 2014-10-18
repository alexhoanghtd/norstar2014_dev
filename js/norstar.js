//empty whishlist slot
		var empty_item = '<li class="clearfix product-item"><div class="product-thumb"></div><div class="product-info"><a href="#"><h4>Intet ønske</h4><p>Ingen kommentar</p></a></div></li>'
$(document).ready(function(){
	$(function(){
		$('.ah-popup-link').click(function(){
			var target = $(this).attr('popup-target');
			$('.ah-popup[popup-data="'+target+'"]').fadeIn();
		});
		$('.ah-close-popup').click(function(){
			$(this).parent().parent().fadeOut();
		});
	});
	$(function(){

		
		//initiate the wishlist slider content
		var wishlist_pages = $('.wishlist-products > li');
		var page_number = wishlist_pages.length;
		// alert(wishlist_pages.length);
		if(page_number == 0){
			$('.wishlist-products').append('<li class="wishlist-page-content page-empty"><ul></ul></li>');
			fill_up_last_page(5);
			$('.slide-pointer').css('display','none');
			$('.marker > .current').html('0');
			$('.marker > .total').html('0');
		}else{
			fill_up_last_page(5);
			if(page_number == 1){
				$('.slide-pointer').css('display','none');
			}
			$('.marker > .current').html('1');
			$('.marker > .total').html(page_number);
			adjust_navigator();
		}

		//initiate the wishlist slider control
		wishlist_slider_control();
	});

});	


function wishlist_slider_control(){
	$('.slide-pointer').click(function(){

		//current slide state
		var nav = $(this).attr('nav');
		var current_page_num = parseInt($('.marker > .current').html());
		var page_count = $('.wishlist-products > li').length;


		current_page = $('.wishlist-products > li:nth-child('+current_page_num+')');
		if(nav === 'left'){
			// alert('    moving left    ');

			if(current_page_num > 1){
				current_page_num --;
				$('.marker > .current').html(current_page_num);
				current_page.prev().fadeIn();
				current_page.fadeOut();
				adjust_navigator();
			}

		}
		if(nav === 'right'){
			if(current_page_num < page_count){
				current_page_num ++;
				$('.marker > .current').html(current_page_num);
				current_page.next().fadeIn();
				current_page.fadeOut();
				adjust_navigator();
			}		
		}
	});
}

function adjust_navigator(){
	var current_page_num = parseInt($('.marker > .current').html());
	var page_count = $('.wishlist-products > li').length;

	if(current_page_num == 1){
		$('.slide-pointer[nav="left"]').addClass('unavail');
		$('.slide-pointer[nav="right"').removeClass('unavail');
	}else{
		
		if(current_page_num == page_count){
			$('.slide-pointer[nav="left"]').removeClass('unavail');
			$('.slide-pointer[nav="right"]').addClass('unavail');
		}else{
			$('.slide-pointer').removeClass('unavail');
		}
	}
	
}

function fill_up_last_page(page_length){
	var last_page = $('.wishlist-products > li:last-child > ul > li');
	curent_length = last_page.length;
	for(i = 0 ; i < (page_length - curent_length); i++){
		var last_page = $('.wishlist-products > li:last-child > ul').append(empty_item);
	}
}				
