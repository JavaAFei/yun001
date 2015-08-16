<?php if (!defined('THINK_PATH')) exit();?><!doctype html><html><head><meta charset="utf-8"><meta name="robots" content="index, follow" /><meta name="keywords" content="<?php echo ($seo_keywords); ?>" /><meta name="description" content="<?php echo ($seo_description); ?>" /><title><?php echo ($seo_title); ?>-<?php echo ($site_name); ?></title><link href="__ROOT__/index.php?m=Format&a=rss" rel="alternate" type="application/rss+xml" title="RSS 2.0" /><link rel="stylesheet" href="/static/style/style.css" /><script type="text/javascript" src="/static/js/jquery1.42.min.js"></script><script type="text/javascript" src="/static/js/jquery.SuperSlide.2.1.1.js"></script><script type="text/javascript" src="/static/js/jquery.easing.1.3.js"></script><LINK rel=stylesheet type=text/css href="/static/style/main_qq.css"><SCRIPT type=text/javascript src="/static/js/jquery.scrollfollow.js"></SCRIPT></head><body><div class="header" <?php  $slide_pic=$slide_link=$slide_title=array(); $_result=M('Slide_data')->where(" status=1 and  fid=2  and lang=1")->order(" listorder ASC ,id DESC ")->limit("1")->select();;if ($_result): $i=0;foreach($_result as $key=>$r):$i++;$mod = ($i % 2 );parse_str($r['data'],$r['param']); $slide_pic[] =$r[pic];$slide_link[]=urlencode($r[link]);$slide_title[]=$r[title]; endforeach; endif;?>
style="background:url(<?php echo ($slide_pic['0']); ?>) center center no-repeat;"
 ><div class="top"><div class="warp clearfix" ><div class="top_con fl" id="DateInfo"></div><!--form  class="search_form fr" method="GET" action="index.php?"><input type="hidden" id="" name="m" value="Search"><input type="text" name="keyword" class="txt" placeholder="请输入搜索信息" value=""><input type="submit" class="sub" value="" /></form--><div class="top_con fr" style="text-align:right;"><a onclick="SetHome(this,window.location)">设为首页</a>|<a onclick="shoucang(document.title,window.location)">加入收藏</a>|<a href="<?php echo ($Categorys[15]['url']); ?>">联系我们</a></div></div></div><div class="warp head_bg clearfix"><a class="logo"></a></div></div><div class="nav"><ul class="warp clearfix"><li><a href="/">网站首页</a></li><li><a href="<?php echo ($Categorys[19]['url']); ?>"><?php echo ($Categorys[19]['catname']); ?></a></li><li><a href="javascript:void();"><?php echo ($Categorys[1]['catname']); ?></a><ul><?php $n=0;foreach($Categorys as $key=>$r):if( $r['ismenu']==1 && intval(1)==$r["parentid"] ) :++$n;?><li><a href="<?php echo ($r["url"]); ?>"><?php echo ($r["catname"]); ?></a></li><?php endif; endforeach;?></ul></li><li><a href="<?php echo ($Categorys[6]['url']); ?>"><?php echo ($Categorys[6]['catname']); ?></a><ul><?php $n=0;foreach($Categorys as $key=>$r):if( $r['ismenu']==1 && intval(6)==$r["parentid"] ) :++$n;?><li><a href="<?php echo ($r["url"]); ?>"><?php echo ($r["catname"]); ?></a></li><?php endif; endforeach;?></ul></li><li><a href="javascript:void();"><?php echo ($Categorys[7]['catname']); ?></a><ul><?php $n=0;foreach($Categorys as $key=>$r):if( $r['ismenu']==1 && intval(7)==$r["parentid"] ) :++$n;?><li><a href="<?php echo ($r["url"]); ?>"><?php echo ($r["catname"]); ?></a></li><?php endif; endforeach;?></ul></li><li><a href="javascript:void();"><?php echo ($Categorys[18]['catname']); ?></a><ul><?php $n=0;foreach($Categorys as $key=>$r):if( $r['ismenu']==1 && intval(18)==$r["parentid"] ) :++$n;?><li><a href="<?php echo ($r["url"]); ?>"><?php echo ($r["catname"]); ?></a></li><?php endif; endforeach;?></ul></li><li><a href="<?php echo ($Categorys[9]['url']); ?>"><?php echo ($Categorys[9]['catname']); ?></a><ul><?php $n=0;foreach($Categorys as $key=>$r):if( $r['ismenu']==1 && intval(9)==$r["parentid"] ) :++$n;?><li><a href="<?php echo ($r["url"]); ?>"><?php echo ($r["catname"]); ?></a></li><?php endif; endforeach;?></ul></li><li style="background:none;"><a target="_blank" href="<?php echo ($Categorys[10]['url']); ?>"><?php echo ($Categorys[10]['catname']); ?></a></li></ul></div><style>.nav ul li ul {display:none;}
.nav ul li ul li{height:0; overflow:hidden; float: none;}
</style><script>var btb=$(".nav>ul>li");
	var tempS;
	$(".nav>ul>li").hover(function(){
			var thisObj = $(this).find("ul");
			thisObj.show();
			tempS = setTimeout(function(){
			thisObj.find("li").each(function(i){
				var tA=$(this);
				setTimeout(function(){ tA.animate({height:"42px"},200);},50*i);
			});
		},200);
	},function(){
		var thisObj = $(this).find("ul");
			thisObj.hide();
		if(tempS){ clearTimeout(tempS); }
		$(this).find("li").each(function(i){
			var tA=$(this);
			setTimeout(function(){ tA.animate({height:"0"},200,function(){
			});},50*i);
		});
	});
</script><div class="banner"style="height:284px;"><div class="warp clearfix" style="width:1080px" ><!--div class="pics"><div class="box_skitter"><ul><?php  $_result=M('Slide_data')->where(" status=1 and  fid=1  and lang=1")->order(" listorder ASC ,id DESC ")->limit("10")->select();;if ($_result): $i=0;foreach($_result as $key=>$r):$i++;$mod = ($i % 2 );parse_str($r['data'],$r['param']);?><li><a href="<?php echo ($r[link]); ?>" title="<?php echo ($i); ?>"><img src="<?php echo ($r[pic]); ?>" <?php if($i==1) : ?>class="cube"<?php else :?>class="block"<?php endif;?>></a></li><?php endforeach; endif;?></ul></div></div--><?php  $slide_pic=$slide_link=$slide_title=array(); $_result=M('Slide_data')->where(" status=1 and  fid=1  and lang=1")->order(" listorder ASC ,id DESC ")->limit("10")->select();;if ($_result): $i=0;foreach($_result as $key=>$r):$i++;$mod = ($i % 2 );parse_str($r['data'],$r['param']); $slide_pic[] =$r[pic];$slide_link[]=urlencode($r[link]);$slide_title[]=$r[title]; endforeach; endif;?><script type="text/javascript" src="__PUBLIC__/Js/swfobject.js"></script><div id='flash_1'></div><script type="text/javascript">
var swfpath = '../Public/flash/flash01.swf';
var pics='<?php echo implode('|',$slide_pic);?>';
var links='<?php echo implode('|',$slide_link);?>';
var texts='<?php echo implode('|',$slide_title);?>';
var pic_width=1080;
var pic_height=284;
var text_height=0;
var flashvars={ },params={ },attributes={ };
params.allowScriptAccess = "sameDomain";
params.quality = "high";
params.menu = "false";
params.wmode = "opaque";
flashvars.pics = pics;
flashvars.links = links;
flashvars.texts = texts;
flashvars.borderwidth = pic_width;
flashvars.borderheight = pic_height;
flashvars.textheight = text_height;
swfobject.embedSWF(swfpath, "flash_1", "1080", "284", "6.0.0", "expressInstall.swf", flashvars, params, attributes);
</script></div></div><div class="clearfix warp main" ><div class="index_left fl"><object class id="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="380" height="205"><param name="movie" value="flvplayer.swf"><param name="quality" value="high"><param name="allowFullScreen" value="true"><param name="FlashVars" value="vcastr_file=1.flv&BufferTime=3&IsAutoPlay=1"><embed src="flvplayer.swf" allowfullscreen="true" flashvars="vcastr_file=1.flv&IsAutoPlay=1" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="380" height="205"></embed></object></div><!--div class="index_left fl"><a id="#vedio" href="/vedio.html"><img src="/static/images/move.jpg" width="380"></a></div><script type="text/javascript" src="/static/js/jquery.fancybox-1.3.4.js"></script><script type="text/javascript" src="static/js/jquery.mousewheel-3.0.4.js"></script><link rel="stylesheet" type="text/css" href="/static/style/jquery.fancybox-1.3.4.css" media="screen" /><script>	$("#vedio").fancybox({
			'width':'7',
			'height':'5',
			'autoScale':false,
			'transitionIn':'none',
			'transitionOut':'none',
			'type':'iframe'
		});
	</script--><div class="index_con fl"><h3 class="index_tit">招生快讯 <a href="<?php echo ($Categorys[12]['url']); ?>" class="fr"><img src="/static/images/more.jpg"></a></h3><ul class="index_list"><?php  $_result=M("Article")->field("*")->where(" 1  and lang=1 AND status=1  AND catid=12")->order("id desc")->limit("6")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><li class="clearfix"><A href="<?php echo ($r["url"]); ?>" style="<?php echo ($r["title_style"]); ?>"><?php echo (str_cut($r["title"],30)); ?></A><span class="fr"><?php echo (todate($r["createtime"],'Y-m-d')); ?></span></li><?php endforeach; endif;?></ul></div><div class="index_con fl mr0"><h3 class="index_tit1"><a href="<?php echo ($Categorys[15]['url']); ?>">联系我们</a></h3><p class="index_l">招生热线:<br><a style="font-size:14px;padding-left:5px;"><span style="padding-right:14px;">0531—87966101</span><span>87196580</span></a></p><p class="index_r"><a style="font-size:14px; padding-left:55px; font-weight:bold;"><span style="padding-right:50px;">87196666 </span><span>87196616</span></a></p><p class="index_r">山东劳动职业技术学院</p><p class="index_r">通讯地址：济南市经十路23266号</p><p class="index_r">长清校区：济南市长清大学科技园区海棠路800号</p><!--<p class="index_r">官方网址：http://www.sdlvtc.cn</p>--></div><div class="hr clear"></div><div class="index_left fl"><h3 class="index_tit">学院动态<a href="<?php echo ($Categorys[11]['url']); ?>" class="fr"><img src="/static/images/more.jpg"></a></h3><ul class="index_list"><?php  $_result=M("Article")->field("*")->where(" 1  and lang=1 AND status=1  AND catid=11")->order("id desc")->limit("6")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><li class="clearfix"><A href="<?php echo ($r["url"]); ?>" style="<?php echo ($r["title_style"]); ?>"><?php echo (str_cut($r["title"],30)); ?></A><span class="fr"><?php echo (todate($r["createtime"],'Y-m-d')); ?></span></li><?php endforeach; endif;?></ul></div><div class="index_con fl"><h3 class="index_tit">招生政策 <a href="<?php echo ($Categorys[4]['url']); ?>"  class="fr"><img src="/static/images/more.jpg"></a></h3><ul class="index_list"><?php  $_result=M("Article")->field("*")->where(" 1  and lang=1 AND status=1  AND catid=4")->order("id desc")->limit("6")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><li class="clearfix"><A href="<?php echo ($r["url"]); ?>" style="<?php echo ($r["title_style"]); ?>"><?php echo (str_cut($r["title"],30)); ?></A><span class="fr"><?php echo (todate($r["createtime"],'Y-m-d')); ?></span></li><?php endforeach; endif;?></ul></div><div class="index_con fl mr0"><h3 class="index_tit">报名查询 <a  href="<?php echo ($Categorys[17]['url']); ?>" class="fr"><img src="/static/images/more.jpg"></a></h3><ul class="index_list"><?php  $_result=M("Article")->field("*")->where(" 1  and lang=1 AND status=1  AND catid=17")->order("id desc")->limit("6")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><li class="clearfix"><A href="<?php echo ($r["url"]); ?>" style="<?php echo ($r["title_style"]); ?>"><?php echo (str_cut($r["title"],30)); ?></A><span class="fr"><?php echo (todate($r["createtime"],'Y-m-d')); ?></span></li><?php endforeach; endif;?></ul></div><div class="hr clear"></div><div class="index_left fl"><h3 class="index_tit">学院就业 <a  href="<?php echo ($Categorys[16]['url']); ?>" class="fr"><img src="/static/images/more.jpg"></a></h3><ul class="index_list"><?php  $_result=M("Article")->field("*")->where(" 1  and lang=1 AND status=1  AND catid=16")->order("id desc")->limit("6")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><li class="clearfix"><A href="<?php echo ($r["url"]); ?>" style="<?php echo ($r["title_style"]); ?>"><?php echo (str_cut($r["title"],30)); ?></A><span class="fr"><?php echo (todate($r["createtime"],'Y-m-d')); ?></span></li><?php endforeach; endif;?></ul></div><div class="index_con fl "><h3 class="index_tit">缤纷校园 <a  href="<?php echo ($Categorys[13]['url']); ?>" class="fr"><img src="/static/images/more.jpg"></a></h3><ul class="index_list"><?php  $_result=M("Article")->field("*")->where(" 1  and lang=1 AND status=1  AND catid=13")->order("id desc")->limit("6")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><li class="clearfix"><A href="<?php echo ($r["url"]); ?>" style="<?php echo ($r["title_style"]); ?>"><?php echo (str_cut($r["title"],30)); ?></A><span class="fr"><?php echo (todate($r["createtime"],'Y-m-d')); ?></span></li><?php endforeach; endif;?></ul></div><div class="index_con fl mr0"><h3 class="index_tit">考生问答 <a  href="<?php echo ($Categorys[9]['url']); ?>" class="fr"><img src="/static/images/more.jpg"></a></h3><ul class="index_list"><?php  $_result=M("Article")->field("*")->where(" 1  and lang=1 AND status=1  AND catid=9")->order("id desc")->limit("6")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><li class="clearfix"><A href="<?php echo ($r["url"]); ?>" style="<?php echo ($r["title_style"]); ?>"><?php echo (str_cut($r["title"],30)); ?></A><span class="fr"><?php echo (todate($r["createtime"],'Y-m-d')); ?></span></li><?php endforeach; endif;?></ul></div><div class="clear"></div><div class="index_pic clearfix"><div class="pictitle fl"><a  href="<?php echo ($Categorys[14]['url']); ?>"><img src="/static/images/pictitle.jpg"></a></div><div class="picMarquee-left"><div class="hd"><a class="next"></a><a class="prev"></a></div><div class="bd"><ul class="picList"><?php  $_result=M("Article")->field("id,catid,url,title,title_style,keywords,description,thumb,createtime")->where(" 1  and lang=1 AND status=1  AND catid=14")->order("id desc")->limit("60")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><li><div class="pic"><a href="<?php echo ($r["url"]); ?>"><img src="<?php echo ($r["thumb"]); ?>" /></a></div></li><?php endforeach; endif; $_result=M("Article")->field("id,catid,url,title,title_style,keywords,description,thumb,createtime")->where(" 1  and lang=1 AND status=1  AND catid=14")->order("id desc")->limit("60")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><li><div class="pic"><a href="<?php echo ($r["url"]); ?>"><img src="<?php echo ($r["thumb"]); ?>" /></a></div></li><?php endforeach; endif;?></ul></div></div></div><script> jQuery(".picMarquee-left").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:6,interTime:50,trigger:"click"});</script><div class="index_link"><a><b>推荐链接：</b></a><?php  $_result=M("Link")->field("*")->where(" status = 1  and lang=1 and typeid=2 and  linktype=1")->order("id asc")->limit("10")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><a href="<?php echo ($r['siteurl']); ?>" target="_blank" title="<?php echo ($r['name']); ?>"><?php echo ($r['name']); ?></a><?php endforeach; endif;?></div></div><div class="footer"><div class="warp"><br>    	版权所有：山东劳动职业技术学院

        &nbsp;&nbsp;地址：济南市经十路23266号（槐荫区），长清大学科技园区海棠路800号（长清校区）邮编：250022 &nbsp;&nbsp;鲁ICP备05018601号

    </div></div><div class="keifu"><div class="keifu_tab"><div class="icon_keifu"></div><div class="keifu_box"><div class="keifu_head"><a href="javascript:void(0)" class="keifu_close"></a></div><ul class="keifu_con"><li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1148346184&site=qq&menu=yes"><img src="/static/images/qq.png"/></a></li><li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=596543721&site=qq&menu=yes"><img src="/static/images/qq.png"/></a></li><li class="weixin"><img src="/static/images/qrcode.jpg" width="96" alt="扫一扫，访问手机端" /></li><li style="">&nbsp;&nbsp;微信二维码</li></ul><div class="keifu_bot"></div></div></div></div><script src="http://api.microyan.com/sdlvtc/sidebar/QAsidebar.js"></script><SCRIPT type=text/javascript>//设为首页

function SetHome(obj,vrl){ 

	try{ 

		obj.style.behavior='url(#default#homepage)';obj.setHomePage(vrl); 

	} 

	catch(e){ 

		if(window.netscape) { 

			try { 

					netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect"); 

				 } 

			catch (e) { 

						alert("此操作被浏览器拒绝！n请在浏览器地址栏输入“about:config”并回车n然后将 [signed.applets.codebase_principal_support]的值设置为'true',双击即可。"); 

				} 

			var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch); 

			prefs.setCharPref('browser.startup.homepage',vrl); 

		}else{ 

		alert("您的浏览器不支持，请按照下面步骤操作：1.打开浏览器设置。2.点击设置网页。3.输入："+vrl+"点击确定。"); 

		} 

	} 

} 

// 加入收藏 兼容360和IE6 

function shoucang(sTitle,sURL){ 

	try { 

		window.external.addFavorite(sURL, sTitle); 

	} 

	catch (e) { 

		try { 

			window.sidebar.addPanel(sTitle, sURL, ""); 

		} 

		catch (e) { 

			alert("加入收藏失败，请使用Ctrl+D进行添加"); 

		} 

	} 

} 

//日期

function getDateInfo() {         

	var day="";         

	var month="";        

	var ampm="";         

	var ampmhour="";        

	var myweekday="";         

	var year="";         

	mydate=new Date();         

	myweekday=mydate.getDay();         

	mymonth=mydate.getMonth()+1;         

	myday= mydate.getDate();         

	myyear= mydate.getYear();         

	year=(myyear > 200) ? myyear : 1900 + myyear;         

	if(myweekday == 0)

		weekday=" 星期日";

	else if(myweekday == 1) 

		weekday=" 星期一";         

	else if(myweekday == 2)  

	       weekday=" 星期二";         

	else if(myweekday == 3)         

			weekday=" 星期三";         

	else if(myweekday == 4)         

			weekday=" 星期四";         

	else if(myweekday == 5)         

			weekday=" 星期五";         

	else if(myweekday == 6)         

			weekday=" 星期六";         

	$('#DateInfo').html("今天是<a>"+year+"年"+mymonth+"月"+myday+"日  "+weekday+"</a>");

} 

	$(function(){

		getDateInfo();

	var KF = $(".keifu");

	var wkbox = $(".keifu_box");

	var kf_close = $(".keifu .keifu_close");

	var icon_keifu = $(".icon_keifu");

	var kH = wkbox.height();

	var kW = wkbox.width();

	var wH = $(window).height();

	KF.css({height:kH});

	icon_keifu.css("top",parseInt((kH-100)/2));

	var KF_top = (wH-kH)/2;

	if(KF_top<0) KF_top=0;

	KF.css("top",KF_top);

	$(kf_close).click(function(){

		KF.animate({width:"0"},200,function(){

			wkbox.hide();

			icon_keifu.show();

			KF.animate({width:26},300);		

		});	

	});

	$(icon_keifu).click(function(){

			$(this).hide();

			wkbox.show();

			KF.animate({width:kW},200);

	});
	$(kf_close).click();

});



</SCRIPT></body></html>