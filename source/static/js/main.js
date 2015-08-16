$(function(){
	$.ajaxSetup({cache:false});
	$('.pics .box_skitter').skitter({
		interval:4000,
		hideTools:true,
		stop_over:true,
		label:false,
		animation:"randomSmart",
		show_randomly:false,
		navigation:false,
		numbers_align:"rightBottom"
	});
	
	$("ul.topnav>li:has(a)").each(function(){
		var w=$(this).width();
		//$(">ul.subnav",this).width(w).find("li").width(w);
	}).hover(function() {
			$(this).addClass("topNavBg").find(">ul.subnav").slideDown('fast').show();
		},function(){
			$(this).removeClass("topNavBg").find(">ul.subnav").hide();
		}).find(">ul.subnav>li").hover(function(){
			if($(">a",this).next().hasClass("subnav")){
				$(">a",this).addClass("cur");
			}
			var _obj=$(">ul.subnav",this);
			_obj.show();
			var _w=_obj.width()
			var rpos=$(this).offset().left+$(this).width();
			if(document.documentElement.clientWidth-rpos<_w){
				rpos-=$(this).width()*2;
			}
			_obj.offset({left:rpos});
		},function(){
			$(this).find(">ul.subnav").hide().end().find(">a").removeClass("cur");
		});
		$("ul.topnav>li>ul.subnav>li>ul.subnav").prev().addClass("sub");
		$("#menu a,#linkdiv a").focus(function(){this.blur()});
	
	
	
	
	if(typeof(n)=='undefined'){
		$("#news").html("<ul><li>读取数据失败，请稍后再试</li></ul>");
	}else{
		var str="<ul>",maxNum=Math.min(6,n.length);
		for(var i=0;i<maxNum;i++){
		if(n[i][1].length>24){n[i][1]=n[i][1].substr(0,22)}
			if(n[i][2]){n[i][1]=n[i][1].slice(0,-1)+'...'};
			if(n[i][4]){n[i][1]+="<span style='color:#990000'>[图]</span>"};
			if(n[i][5]){n[i][1]+="<i><span style='color:#CC0000;font-family:Arial'>new</span></i>"};
			str+='<li><a href="http://news.sdp.edu.cn/show_news.php?id='+n[i][0]+'"class="as1" target="_blank">'+n[i][1]+'</a></li>';
		}
		str += "</ul>";
		$("#news").html(str);
	};
	var alink="",str="";
	if(typeof(a_l)=="undefined")
		$("#affiche").html("读取数据失败，请稍后再试");
	else{
		var title="",maxNum=Math.min(6,a_l.length);
		str="<ul>";
		for(var i=0;i<maxNum;i++){
			title=""
			if(a_l[i][0].substring(0,1)=="n"){
				alink="show_affiche.htm?table=1&id="+a_l[i][0].substring(1);
			}else{
				alink=a_l[i][0];
			}
			if(a_l[i][1].length>22){title=a_l[i][1];a_l[i][1]=a_l[i][1].substr(0,20)+"...";}
			if(a_l[i][1].indexOf("2012年我院面向")>=0){
				str+="<li><span style='color:red'>◇</span> <a href='../js/"+alink+"' class='as1' target='_blank' title='"+title+"' style='color:red'>"+a_l[i][1];
			}else{
				str+="<li><span style='color:#003366'>◇</span> <a href='"+alink+"' class='as1' target='_blank' title='"+title+"'>"+a_l[i][1];
			}
			if(a_l[i][2]){
				str+=" <i><span style='color:#CC0000 font-family:Arial'>new</span></i>";
			}
			str+="</li></a>";
		}
		str+="</ul>";
		$("#affiche").html(str);
	}
	
	$.getJSON("http://news.sdp.edu.cn/xbcz2014.php?flag="+Math.random()+"&callback=?",function(s){
		$("#depnews").empty();
		$(s).each(function(){
			$("#depnews").append("<div style='margin-left:5px;margin-top:5px;'>· <a href='http://news.sdp.edu.cn/show_news.php?id="+this.id+"' target='_blank'>"+(this.title.length>18?this.title.substr(0,16)+"...":this.title)+(this.haspic=='y'?'<span style=\'color:#990000\'>[图]</span>':'')+(this.isnew==1?'<i><span style=\'color:#CC0000;font-family:Arial\'>new</span></i>':'')+"</a></div>");
		})
	});
	
	var stop_time=6000; 
	var text_align= 'center';
	var swf_width=325;
	var pic_height=165;
	var show_text=1;
	var button_pos=4; 
	var swf_height=show_text==1?pic_height+20:pic_height;
	var pics=imgUrl.join("|");
	var Links=imgLink.join("|");
	var texts=imgtext.join("|");
	var targets=imgTarget.join("|");
	var vars={pics:pics,links:Links,texts:texts,ops:targets,show_text:show_text,pic_width:swf_width,pic_height:pic_height,stop_time:stop_time,button_pos:button_pos};
	//swfobject.embedSWF("focus.swf", "d_tnp", swf_width, swf_height, "6.0.0","",vars, {wmode:"opaque",menu:"false",salign:"m",scale:"noscale"});
	$("#focusnews").flash({src:'focus.swf',width: swf_width,height: swf_height,menu:false,wmode:"opaque",flashvars:vars},{version: "6"});
	
	
	
	$("#loginform").submit(function(){
		if($("#user").val()==""||$("#password").val()==""){return false;}
	});
	$("#btapp").click(function(){location.href='http://member.sdp.edu.cn/Request.asp'});
	$("#sjxx").click(function(){location.href="mailto:shuji@sdp.edu.cn";});//Shuji_mailbox.html
	$("#xzxx").click(function(){location.href="mailto:xiaozhang@sdp.edu.cn";});//president_mailbox.html
	$("#yjjy").click(function(){location.href="mailto:yijianxiang@sdp.edu.cn";});
	var showFloat=false;
	if(showFloat){
		var x=parseInt(Math.random()*(document.documentElement.clientWidth-10+1)+10,10); 
		var y=parseInt(Math.random()*(document.documentElement.clientHeight-10+1)+10,10); 
		var x1=parseInt(Math.random()*(document.documentElement.clientWidth-10+1)+10,10); 
		var y1=parseInt(Math.random()*(document.documentElement.clientHeight-10+1)+10,10);
		//$("<div id=\"flayer1\" style=\"z-index:400;position:absolute;left:"+x1+"px;top:"+y1+"px;\"><a href=\"http://zs.sdp.edu.cn/new/山东职业学院2014年地铁订单班合作情况.doc\" target=\"_blank\"><img src=\"http://zs.sdp.edu.cn/new/zzzzzzzzzz.jpg\" style=\"border:0px;\"></a></div>").prependTo($("body")).imgFloat({speed:16,xPos:x1,yPos:y1});

$("<div id=\"flayer2\" style=\"z-index:400;position:absolute;left:"+x1+"px;top:"+y1+"px;\"><a href=\"http://www.sdp.edu.cn/yp\" target=\"_blank\"><img src=\"http://www.sdp.edu.cn/yp.jpg\" style=\"border:0px;\"></a></div>").prependTo($("body")).imgFloat({speed:14,xPos:x1+300,yPos:y1+530});
	}
	
})
