$(function(){
	var Nazar = $('section.content-article a.nazar'),
	BtnCensus = $('div.census div.icon-census'),
	flagCensus = false,
		CloseNazar = $('section.comment-article div.close-nazar');
	$('ul#main-menu').live("hover",function(){
	var ListMenu = $('section#button  ul#main-menu  > li '),
		ContentList = $('section#button  ul#main-menu  div.content'),
		
		//BtnKanon = $('section.main div.buttonkanon'),
		//BtnKanon = $('li#menu-item-56');
		BtnEkbatan = $('section.main div.buttonekbatan'),
		// ListSetGallery = $('div.banner ul li'),
		LinkSpecialMarke = $('section.marketing a'),
		BtnClose = $('div.sp-marketing a#fancy-close'),
		
		flag = false,
		flagK = false,
		flagE =false,
		flagSpMarket = false,
		
		current = -1;


//  AJAX


$('ul.menu li.ekbatan div.buttonekbatan a').click(function(){
	$res2 = $(this).attr('href');
	// if (!flagE) {	
	// 	$('html, body').animate({
	// 		 	scrollTop: $("div.location-main-btn").offset().top
	// 		}, 1500);	
	// 		flagE = !flagE;
	// 	}else{
	// 		$('html, body').animate({
	// 			scrollTop: $(".main").offset().top
	// 		}, 1000);
	// 	$res2 = 'wp-content/themes/ekbatan/generalbutton.php';
	// 	flagE = !flagE;
	// };
		$.ajax({
		url : $res2,
		success : function(data){
			$("ul#main-menu").html(data);
			 $("ul#main-menu").fadeIn(3000) ;//kar nemikonad	
			}
		});
	return false;
	});

$('ul.menu li.kanoon div.buttonekbatan a').click(function(){
	$res2 = $(this).attr('href');
	// if (!flagK) {
	 	$('html, body').animate({
	 	 	scrollTop: $("div.location-main-btn").offset().top
	 	 }, 1500);	
	// 	flagK = !flagK;
	// }else{
	// 	$('html, body').animate({
	// 		scrollTop: $(".main").offset().top
	// 	}, 1000);
	// 	$res2 = 'wp-content/themes/ekbatan/generalbutton.php';
	// 	flagK = !flagK;
	// };
	
	$.ajax({
		url : $res2,
		success : function(data){
			$("ul#main-menu").html(data);	
			 $("ul#main-menu").fadeIn(800) ;//kar nemikone!	
		}
	});
	return false;
	});

	// $('ul#main-menu li').click(function(){
	// 	alert(1245);
	// });
	// var loadpage = function(url){
	// 	url = url.length > 2 ? url.substr(1) : 'index.php';
	// 	$('.ajax-content').load(url+' .ajax-content');
	// }

	// var pageUrl = window.location.href;
	// sharPos = pageUrl.indexOf('#');
	// if(sharPos){
	// 	loadpage(pageUrl.substr(sharPos));
	// 	pageUrl = pageUrl.substr(0,sharPos);
	// }

	// $('ul.menu li#menu-item-56 div.buttonekbatan a').click(function(){
	// 	 var url = $(this).attr('href');
	// 	 window.location.href = pageUrl + '#' + url;
	// 	return false;
	// });

	// $('ul.menu li#menu-item-57 div.buttonekbatan a').click(function(){
	// 	 var url = $(this).attr('href');
	// 	 window.location.href = pageUrl + '#' + url;
	// 	return false;
	// });

	// window.onhashchange = function(){
	// 	loadpage(window.location.hash);

	// }in code true!
	// //end ajax

	$('section.container-article article  p a').attr('target','_blank');
	$('a.more-link').attr('target','_blank');
	function OpenMenu(){
		openli=indexList/2;
		hmenu = 470;
		if (flagSpMarket) {
			$('div.sp-marketing').css({
				'display' : 'none',
			});
		};
		ContentList.eq(openli).css({
			'display': 'block',
		}).animate({
				opacity : 1,
				height:hmenu,
			},800);
		flag = true;
		current = indexList;
	}; 

	function CloseMenu(choos){
		ContentList.eq(choos).animate({
			opacity : 0,
			height:0,
		},800,'',function(){
			$(this).css({
				'display' : 'none',
			});
		});
	};

	ListMenu.click(function(){
		indexList = ($(this).index());
		if (current != -1) {
			CloseMenu(openli);	
			if (current == indexList) {
				flag = true;
				current = -1;
			}else{
				flag = false;
			}
		};
		if (!flag) {
			OpenMenu();	
		}else{
			CloseMenu(openli);
		 	flag = false;
		 	current = -1;
		 }
	});
});
	/********** SEND IDEA IN PAGE SPECIAL ARTICLE***********/
	Nazar.click(function(){
		$('section.comment-article').css({
			'display':'block',
		}).animate({
			opacity : 1,
		},1000);
		$('html, body').animate({
	 	 	scrollTop: $("section.comment-article").offset().top
	 	 }, 1500);
	});

	CloseNazar.click(function(){
		$('html, body').animate({
	 	 	scrollTop: $("body").offset().top
	 	 }, 1000);
		 $('section.comment-article').animate({
		 	opacity : 0,
		 },1000,'',function(){
		 	$(this).css({
		 		'display':'none',
		 	});
		 });
		
	});
	
	/******************** MAIN MENU **************/
	// BtnKanon.click(function(){
		
	// 	flagKanon = !flagKanon;
	// 	$(this).removeClass('buttonkanon').addClass('change-icon');
	// 	BtnEkbatan.removeClass('change-icon').addClass('buttonekbatan');
	// 	if (flagKanon) {
	// 		$('section#button').css({
	// 			'display': 'block',
	// 		});
	// 		$('section#end').css({
	// 			'display': 'block',
	// 		});
	// 	}else{
	// 		$('html, body').animate({
	// 			// scrollTop: $(".main").offset().top
	// 		}, 10 ,'',function(){
	// 			$('section#button').css({
	// 				'display': 'none',
	// 			});
	// 			$('section#end').css({
	// 				'display': 'none',
	// 			});
	// 			BtnKanon.removeClass('change-icon').addClass('buttonkanon');
	// 		});
	// 	};
	// 	 $('html, body').animate({
	// 	 	scrollTop: $("div.location-main-btn").offset().top
	// 	 }, 2000);
	// });

	// BtnEkbatan.click(function(){
	// 	flagEkbatan = !flagEkbatan;
	// 	$(this).removeClass('buttonekbatan').addClass('change-icon');
	// 	BtnKanon.removeClass('change-icon').addClass('buttonkanon');
	// 	if (flagEkbatan) {
	// 		$('section#button').css({
	// 			'display': 'block',
	// 		});
	// 		$('section#end').css({
	// 			'display': 'block',
	// 		});
	// 	}else{
	// 		$('html, body').animate({
	// 			//scrollTop: $(".main").offset().top
	// 		}, 1000 ,'',function(){
	// 			$('section#button').css({
	// 				'display': 'none',
	// 			});
	// 			$('section#end').css({
	// 				'display': 'none',
	// 			});
	// 			BtnEkbatan.removeClass('change-icon').addClass('buttonekbatan');
	// 		});
	// 	}
		// $('html, body').animate({
		// 	scrollTop: $("div.location-main-btn").offset().top
		// }, 2000);
	// });
	/************ CLICK ON SET GALLERY *************/
	// ListSetGallery.click(function(){
	// 	window.open("gallery.php");
	// });
	/**************** FANCY  ****************/
	// LinkSpecialMarke.click(function(){
	// 	flagSpMarket = true;
	// 	$('div.sp-marketing').css({
	// 		'display' : 'block',
	// 	}).animate({
	// 		top : 60,
	// 		right : 90
	// 	},400);
	// 	$('iframe#if-sp-marketing').animate({
	// 		width :630,
	// 		height : 430,
	// 	},400);

	// });

	// BtnClose.click(function(){
	// 	$('div.sp-marketing').animate({
	// 		width : 0,
	// 		height : 0 ,
	// 		top : 320 ,
	// 		right :250
	// 	},500,'',function(){
	// 		$('div.sp-marketing').css({
	// 			'display' : 'none',
	// 			width :630,
	// 			height : 430,
	// 			top : 220 ,
	// 			right:290
	// 		});	
	// 		$('iframe#if-sp-marketing').css({
	// 			width :0,
	// 			height : 0,
	// 		});
	// 	});
	// });
	/****************** BtnCensus *************/
	BtnCensus.click(function(){
		flagCensus = !flagCensus;
		if (flagCensus) {
			$('div.census').animate({
				top : 0,
			},400);
		}else{
			$('div.census').animate({
				top : -60,
			},400);
		};
	});
});