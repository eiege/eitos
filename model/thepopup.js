function eie_pop(o){
	var mZ=Math.max.apply(null,$.map($('*'), function(e){
		if($(e).css('z-index') != 'auto')
		{
			//alert($(e).css('z-index'));
			return parseInt($(e).css('z-index'));
		}else{
			return 1;
		};
	}));

	var popz=1+mZ;
	//alert('the popz:'+popz);
	var pid=o.attr("href");
	//window.alert(pid);
	var epg=o.attr('epg');
	//window.alert(epg);
	var seepop=$(pid).css("display");
	if(seepop ==='none')
	{
		$(pid).css('display','block');
		$(pid).css('z-index',popz);
		o.css('background-color','#ffffff');
		settl(o,pid,epg);
		$(pid).css('visibility','visible');
	}else{
		$(pid).css('display','none');
		o.css('background-color','#f5f5f5');
	}
	function settl(o,pid,epg){
		var m=3;
		var t=o.offset().top;
		var l=o.offset().left;
		var w=o.outerWidth();
		var h=o.outerHeight();
		var p=$(pid);
		var W=p.outerWidth();
		var H=p.outerHeight();
		var T=1;
		var L=1;
		switch(epg){
			case 'dl':
				T=t+h+m;
				L=l;
			break;
			case 'dr':
				T=t+h+m;
				L=l-(W-w);
			break;
			case 'ul':
				T=t-H-m;
				L=l;
			break;
			case 'ur':
				T=t-H-m;
				L=l-(W-w);
			break;
			case 'ru':
				T=t;
				L=l+w+m;
			break;
			case 'rd':
				T=t-(H-h);
				L=l+w+m;
			break;
			case 'lu':
				T=t;
				L=l-W-m;
			break;
			case 'ld':
				T=t-(H-h);
				L=l-W-m;
			break;
			default:
				T=t+h+m;
				L=l;
		}
		$(pid).css('top',T);
		$(pid).css('left',L);
		//window.alert("t:"+t+",l:"+l+"\nw:"+w+",h:"+h+"\nT:"+T+",L:"+L+"\nW:"+W+",H:"+H);
	}
}