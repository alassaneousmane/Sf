$(document).ready(function(){
	$('#display-results').css({
		'width':'256px','margin-left':'459px','margin-top':'48px','border-left':'1px solid #dedede','border-right':'1px solid #dedede','border-bottom':'1px solid #dedede','position':'fixed','display':'none'});
	$('.display-box-advert').css({'padding':'4px','border-top':'1px solid #dedede','hauteur':'70px','font-size':'14px','background-color':'white','position':'relative'});
	$('.display-box-advert').on('mouseenter',function(){
		$(this).css({'background-color':'#3b5998','color':'white','cursor':'pointer'})});
	$('.display-box-advert a').css({'color':'#333','text-decoration':'none'});
	$('.display-box-advert ').on('mouseenter',function(){$(this).css({'color':'white','text-decoration':'none'})});
	$('.display-box-advert ').on('mouseleave',function(){$(this).css({'color':'#333','text-decoration':'none'})});
	$('.display-box-advert').on('mouseleave',function(){$(this).css({'background-color':'#fff','color':'black'})})});