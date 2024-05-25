$(document).ready(function() {
	"use strict";

	$(function(){
	  $("#header").load("header.html");
	  $("#footer").load("footer.html");
	});

	$(function($) {
		  var window_location_href = window.location.href;
		  window_location_href = window_location_href.endsWith('/') ? window_location_href.substr(0, window_location_href.length - 1) : window_location_href;
		  var pgurl = window_location_href.substr(window_location_href.lastIndexOf("/") + 1);

		  $('.main-nav li a').each(function(){
			var thisPage = $(this).attr("href");

			if (thisPage == pgurl){
			  $(this).addClass("active");
			}
		  });

		});
	/*itemshow script code start here*/
	$('.itemshow1').owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        smartSpeed: 1500,
        dots: true,
        nav:false,
        // navText:['<i class="fa fa-angle-left fa1"></i>', '<i class="fa fa-angle-right fa2"></i>'],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            991: {
                items: 2
            },
            1180: {
                items: 3
            }
        }
    });






		$('.slideshow').owlCarousel({
				loop: true,
				margin: 0,
				autoplay: true,
				smartSpeed: 1500,
				dots: false,
				nav:true,
				navText:['<i class="fa fa-long-arrow-left fa1"></i>', '<i class="fa fa-long-arrow-right fa2"></i>'],
				responsiveClass: true,
				responsive: {
					0: {
						items: 1
					},
					991: {
						items: 1
					},
					1180: {
						items: 1
					}
				}
			});

			$('.slideshow2').owlCarousel({
				loop: true,
				margin: 0,
				autoplay: true,
				smartSpeed: 1500,
				dots: false,
				nav:false,
				navText:['<i class="fa fa-angle-left fa1"></i>', '<i class="fa fa-angle-right fa2"></i>'],
				responsiveClass: true,
				responsive: {
					0: {
						items: 1
					},
					991: {
						items: 1
					},
					1180: {
						items: 1
					}
				}
			});

	/*deal script code start here*/
			$('.deal').owlCarousel({
				loop: true,
				margin: 30,
				items: 2,
				autoplay: false,
				smartSpeed: 2500,
				dots: false,
				nav:true,
				navText:['<i class="fa fa-long-arrow-left fa1"></i>', '<i class="fa fa-long-arrow-right fa2"></i>'],
				responsiveClass: true,
				responsive: {
					0: {
						items: 1
					},
					768: {
						items: 1
					},
					991: {
						items: 2
					},
					1180: {
						items: 2
					}
				}
			});
	/*deal script code end here*/

	/*vegetables script code start here*/
			$('.vegetables').owlCarousel({
				loop: true,
				margin: 25,
				items: 2,
				autoplay: false,
				smartSpeed: 2500,
				dots: false,
				nav:true,
				navText:['<i class="fa fa-long-arrow-left fa1"></i>', '<i class="fa fa-long-arrow-right fa2"></i>'],
				responsiveClass: true,
				responsive: {
					0: {
						items: 1
					},
					768: {
						items: 1
					},
					991: {
						items: 2
					},
					1180: {
						items: 2
					}
				}
			});
	/*vegetables script code end here*/

	/*fruits script code start here*/
			$('.fruits').owlCarousel({
				loop: true,
				margin: 25,
				items: 2,
				autoplay: false,
				smartSpeed: 2500,
				dots: false,
				nav:true,
				navText:['<i class="fa fa-long-arrow-left fa1"></i>', '<i class="fa fa-long-arrow-right fa2"></i>'],
				responsiveClass: true,
				responsive: {
					0: {
						items: 1
					},
					768: {
						items: 1
					},
					991: {
						items: 2
					},
					1180: {
						items: 2
					}
				}
			});
	/*fruits script code end here*/

	/*testimonail script code start here*/
		$('.testimonail').owlCarousel({
				loop: true,
				margin: 30,
				items: 1,
				autoplay: true,
				smartSpeed: 2500,
				dots: false,
				nav:true,
				navText:['<i class="fa fa-long-arrow-left fa1"></i>', '<i class="fa fa-long-arrow-right fa2"></i>'],
				responsiveClass: true,
				responsive: {
					0: {
						items: 1
					},
					768: {
						items: 1
					},
					991: {
						items: 1
					},
					1180: {
						items: 1
					}
				}
			});

			$('.testimonail1').owlCarousel({
				loop: true,
				margin: 30,
				items: 2,
				autoplay: true,
				smartSpeed: 2500,
				dots: false,
				nav:true,
				navText:['<i class="fa fa-long-arrow-left fa1"></i>', '<i class="fa fa-long-arrow-right fa2"></i>'],
				responsiveClass: true,
				responsive: {
					0: {
						items: 1
					},
					768: {
						items: 1
					},
					991: {
						items: 2
					},
					1180: {
						items: 2
					}
				}
			});

			$('.testimonail3').owlCarousel({
				loop: true,
				margin: 30,
				items: 1,
				autoplay: true,
				smartSpeed: 2500,
				dots: false,
				nav:true,
				navText:['<i class="fa fa-angle-left fa1"></i>', '<i class="fa fa-angle-right fa2"></i>'],
				responsiveClass: true,
				responsive: {
					0: {
						items: 1
					},
					768: {
						items: 1
					},
					991: {
						items: 1
					},
					1180: {
						items: 1
					}
				}
			});

			$('.testimonail4').owlCarousel({
				loop: true,
				margin: 30,
				items: 2,
				autoplay: true,
				smartSpeed: 2500,
				dots: false,
				nav:false,
				navText:['<i class="fa fa-angle-left fa1"></i>', '<i class="fa fa-angle-right fa2"></i>'],
				responsiveClass: true,
				responsive: {
					0: {
						items: 1
					},
					768: {
						items: 1
					},
					991: {
						items: 2
					},
					1180: {
						items: 2
					}
				}
			});

			$('.abtestimonail').owlCarousel({
				loop: true,
				margin: 30,
				items: 2,
				autoplay: true,
				smartSpeed: 2500,
				dots: false,
				nav:false,
				navText:['<i class="fa fa-angle-left fa1"></i>', '<i class="fa fa-angle-right fa2"></i>'],
				responsiveClass: true,
				responsive: {
					0: {
						items: 1
					},
					768: {
						items: 1
					},
					991: {
						items: 2
					},
					1180: {
						items: 2
					}
				}
			});
	/*testimonail script code end here*/

	/*carousel10 script code start here*/
	$('#carousel10').owlCarousel({
				loop: true,
				margin: 0,
				items: 5,
				autoplay: true,
				smartSpeed: 1500,
				dots: true,
				nav:false,
				navText:['<i class="fa fa-angle-left fa1"></i>', '<i class="fa fa-angle-right fa2"></i>'],
				responsiveClass: true,
				responsive: {
					0: {
						items: 1
					},
					479: {
						items: 1
					},
					768: {
						items: 2
					},
					991: {
						items: 4
					},
					1180: {
						items: 4
					}
				}
			});
	/*carousel10 script code end here*/

	/*season script code start here*/
	$('#season').owlCarousel({
				loop: true,
				margin: 0,
				items: 1,
				autoplay: true,
				smartSpeed: 1500,
				dots: false,
				nav:true,
				navText:['<i class="fa fa-long-arrow-left fa1"></i>', '<i class="fa fa-long-arrow-right fa2"></i>'],
				responsiveClass: true,
				responsive: {
					0: {
						items: 1
					},
					479: {
						items: 1
					},
					768: {
						items: 1
					},
					991: {
						items: 1
					},
					1180: {
						items: 1
					}
				}
			});
	/*season script code end here*/

	/* plus minus  */
	$('.btn-number').click(function(e){
		e.preventDefault();

		var fieldName = $(this).attr('data-field');
		var type      = $(this).attr('data-type');
		var input = $("input[name='"+fieldName+"']");
		var currentVal = parseInt(input.val());
		if (!isNaN(currentVal)) {
			if(type == 'minus') {

				if(currentVal > input.attr('min')) {
					input.val(currentVal - 1).change();
				}
				if(parseInt(input.val()) == input.attr('min')) {
					$(this).attr('disabled', true);
				}

			} else if(type == 'plus') {

				if(currentVal < input.attr('max')) {
					input.val(currentVal + 1).change();
				}
				if(parseInt(input.val()) == input.attr('max')) {
					$(this).attr('disabled', true);
				}

			}
		} else {
			input.val(0);
		}
	});

	$('.input-number').change(function() {

		var minValue =  parseInt($(this).attr('min'));
		var maxValue =  parseInt($(this).attr('max'));
		var valueCurrent = parseInt($(this).val());

		var name = $(this).attr('name');
		if(valueCurrent >= minValue) {
			$(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
		} else {
			alert('Sorry, the minimum value was reached');
			$(this).val($(this).data('oldValue'));
		}
		if(valueCurrent <= maxValue) {
			$(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
		} else {
			alert('Sorry, the maximum value was reached');
			$(this).val($(this).data('oldValue'));
		}
	});

	// Product Grid
	$('#grid-view').on('click',function(){
		$('.product-list').attr('class', 'product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12');
		localStorage.setItem('display', 'grid');
	});
	$('#list-view').on('click',function(){
		$('.product-grid').attr('class', 'product-layout product-list col-xs-12');
		localStorage.setItem('display', 'list');
	});


	// Product Grid
	$('#grid-view1').on('click',function(){
		$('.product-list').attr('class', 'product-layout product-grid col-lg-3 col-md-3 col-sm-4 col-xs-12');
		localStorage.setItem('display', 'grid');
	});
	$('#list-view1').on('click',function(){
		$('.product-grid').attr('class', 'product-layout product-list col-xs-12');
		localStorage.setItem('display', 'list');
	});

});
