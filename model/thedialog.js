/**
 *弹出对话框
 * @param string dia_id 窗口id
 * @param string dia_title 窗口标题
 * @param string dia_c 窗口的内容
 */
function eie_dia(dia_id,dia_title,dia_c){
	//添加遮盖层
	var dw=$('body').width();
	var dh=$(document).height();
	//获取当前文档中最大的z-index
	var mZ=Math.max.apply(null,$.map($('*'), function(e,n){
		if ($(e).css('position') == 'absolute') {
			return parseInt($(e).css('z-index'));
		}else{
			return 1;
		};
	}));
	var fcz=mZ+1;
	//window.alert(mZ+"__"+fcz);
	$('body').append("<div id='"+dia_id+"fc' style='width:"+dw+"px;height:"+dh+"px;z-index:"+fcz+";' class='eie_fcov'></div>");
	//添加对话框
	var thedia="<div id='"+dia_id+"' class='eie_dia' style='z-index:"+(fcz+1)+";'>"+
		"<div class='eie_dia_topbar'>"+
			"<a class='eie_dia_title'>"+dia_title+"</a>"+
			"<a href='#' onclick='return false' id='"+dia_id+"_ctrl' class='eie_dia_ctrl' title='关闭/close'>×</a>"+
			"<div class='clear_b'></div>"+			
		"</div>"+
		"<div class='eie_dia_cent'>"+dia_c+"</div>"+
		"<div class='eie_dia_bottom'></div>"+
		"</div>";
	$('body').append(thedia);
	//设置对话框
	rsdia(dia_id);
	$("#"+dia_id).css('visibility','visible');
	//绑定事件
	$(window).resize(function(){
		rsdia(dia_id);
	});
	$('#'+dia_id+'_ctrl').live('click',function(){
		$('#'+dia_id).remove();
		$('#'+dia_id+'fc').remove();
	});
	//**********************************************
	//重置函数
	function rsdia(dia_id)
	{
		var dw=$(document).width();
		var dh=$(document).height();
		$('#'+dia_id+'fc').css({width:dw,height:dh});
		var ww=$(window).width();
		var wh=$(window).height();
		var diaw=$("#"+dia_id).width();
		var diah=$("#"+dia_id).height();
		var minw=500;//最大宽度
		var minh=1100;//最大高度
		var borw=30;//边框距离
		if(ww>minw)
		{
			$("#"+dia_id).width(500);
		}else{
			$("#"+dia_id).width(ww-(2*borw));
		}
		var dleft=(ww-diaw)/2;
		var dtop=(wh-diah)/2;
		if(dleft<0)
		{
			dleft=0;
		}
		if(dtop<0)
		{
			dtop=0;
		}
		$("#"+dia_id).css({top:dtop+"px",left:dleft+"px"});
	}
}