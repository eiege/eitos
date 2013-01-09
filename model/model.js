$(document).ready(function(){
	$('.nlist td').mouseover(function(){
		$(this).css('background-color','#ffffff');
		$(this).css('border-top-color','#d5d5d5');
		$(this).css('border-bottom-color','#d5d5d5');
	});
	$('.nlist td').mouseout(function(){
		var c=$('.nlist').css('background-color');
		$(this).css('background-color',c);
		$(this).css('border-top-color',c);
		$(this).css('border-bottom-color',c);
	});
	$('#dialog1').live('click',function(){
		//window.alert(w+"/"+h);
		eie_dia('test_dia','测试dia/test_dia',"测试内容<br />test<a href='#' onclick='return false' class='abs' id='dialog2'>弹出窗口</a><br />测试内容<br />测试内容<br />");
	});
	$('#dialog2').live('click',function(){
		//window.alert(w+"/"+h);
		eie_dia('test_dia2','测试dia/test_dia2',"测试内容<br />test<br />测试内容<br />测试内容<br />");
		//id,标题，内容
	});

	$('.pop_in').live('click',function(){
		eie_pop($(this));
	});
});
