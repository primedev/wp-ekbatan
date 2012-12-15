$(function(){
	var Nazar = $('section.content-article a.nazar'),
	BtnCensus = $('div.census div.icon-census'),
	flagCensus = false,
	flageMainmune = false,
	CloseNazar = $('section.comment-article div.close-nazar');

	//  AJAX

animatteflag = false;
$('ul#main-menu ').live("click",runmenu);
$('ul.menu li.ekbatan  a').click(function(){
	$res2 = $(this).attr('href');
	if(flageMainmune){
		$('ul.menu li.kanoon div').removeClass('change-icon').addClass('buttonekbatan');	
	}
	$('ul.menu li.ekbatan div').removeClass('buttonekbatan').addClass('change-icon');
	$('body').animate({
	 	 	scrollTop: $("div.location-main-btn").offset().top
	 	 }, 1500);
		$.ajax({
		url : $res2,
		success : function(data){
			$("ul#main-menu").html(data);
			 //$("ul#main-menu").fadeIn(3000) ;//kar nemikonad	
			}
		});
		$('ul#main-menu ').live("click",runmenu);
	flageMainmune = true;
	return false;
	
	});

$('ul.menu li.kanoon  a').click(function(){
	$res2 = $(this).attr('href');
	if (flageMainmune) {
		$('ul.menu li.ekbatan div').removeClass('change-icon').addClass('buttonekbatan');		
	};
	$('ul.menu li.kanoon div').removeClass('buttonekbatan').addClass('change-icon');
 	$('body').animate({
 	 	scrollTop: $("div.location-main-btn").offset().top
 	 }, 1500);	
	
	$.ajax({
		url : $res2,
		success : function(data){
			$("ul#main-menu").html(data);		
		}
	});
	$('ul#main-menu ').live("click",runmenu);
	flageMainmune = true;
	return false;
	});
	// //end ajax
	
		function  runmenu(){
	var ListMenu = $('section#button  ul#main-menu  > li '),
		ContentList = $('section#button  ul#main-menu  div.content'),
		BtnEkbatan = $('section.main div.buttonekbatan'),
		LinkSpecialMarke = $('section.marketing a'),
		BtnClose = $('div.sp-marketing a#fancy-close'),
		
		flag = false,
		flagK = false,
		flagE =false,
		flagSpMarket = false,
			current = -1;
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

 ListMenu.click(function (){
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
		if (!flag ) {
			OpenMenu();	
		}else{
			CloseMenu(openli);
		 	flag = false;
		 	current = -1;
		 }
		 $("ul#main-menu ").die();
})	;
};
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
