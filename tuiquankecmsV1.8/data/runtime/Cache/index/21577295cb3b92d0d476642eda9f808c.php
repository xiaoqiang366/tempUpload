<?php if (!defined('THINK_PATH')) exit();?><!doctype html><html><head><title>淘宝、天猫最新优惠券头条,内部优惠券播报_<?php echo C('yh_site_name');?></title><meta name="keywords" content="淘宝内部优惠券播报,优惠券直播" /><meta name="description" content="<?php echo C('yh_site_name');?>是免费淘宝、天猫内部优惠券直播平台，提供最新天猫优惠券，淘宝网优惠券，天猫、淘宝红包免费领取。" /><?php echo (yh($yh)); ?><meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=Edge"><title><?php echo ($page_seo["title"]); ?></title><meta name="keywords" content="<?php echo ($page_seo["keywords"]); ?>" /><meta name="description" content="<?php echo ($page_seo["description"]); ?>" /><link rel="icon" href="/favicon.ico" type="image/x-icon" /><link rel="stylesheet" type="text/css" href="/static/tuiquanke/css/all.css" /><script type="text/javascript">	var system ={win : false,mac : false,xll : false};
	var p = navigator.platform;
	system.win = p.indexOf("Win") == 0;
	system.mac = p.indexOf("Mac") == 0;
	system.x11 = (p == "X11") || (p.indexOf("Linux") == 0);
	var wapurl=window.location.pathname.replace(/index.php\//, "");
	 wapurl=wapurl.replace(/item/, "detail");
	if(system.win||system.mac||system.xll){}else{
	window.location.href="<?php echo C('yh_headerm_html');?>" + wapurl}
</script><?php echo C('yh_taojindian_html');?><link rel="stylesheet" type="text/css" href="__STATIC__/tuiquanke/css/article.css" /><style type="text/css">
.mains,td,th {
	font-family: Tahoma, Helvetica, Arial, "宋体", sans-serif;
}

.content_text h2 {
	padding: 10px 0;
	font-size: 14px;
}

.content_text table td {
	text-indent: 12px;
}
</style></head><body><div id="navTop"><div id="top"><div id="topleft" style="margin: 0;line-height: 25px;"><?php echo C('yh_app_key');?></div><ul id="topright" style="line-height: 25px;"><li style=" margin-right: 8px;"><a  href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo C('yh_qq');?>&site=qq&menu=yes" style="color: #757575">联系客服</a></li><li style="margin-right: 8px;"><a  href="javascript:;" id="btn_baoming" msg="请不要修改“卖家报名”否则将无法享受推券客免费产品服务">卖家报名</a></li></ul><div class="clear"></div></div></div><div id="headNav"><div id="header" style="padding-bottom: 10px;"><a href="<?php echo C('yh_site_url');?>"  title="<?php echo C('yh_site_name');?>"  style="height: 80px;display: inline-block;float: left;" class="cnzzCounter" ><img src="<?php echo C('yh_site_logo');?>" width="250" height="70" alt="<?php echo C('yh_site_name');?>淘宝优惠券网站"></a><div id="showList"><div id="search"><form id="query_form" method="get" action="__ROOT__/index.php"><input type="hidden" name="m" value="index"><input type="hidden" name="a" value="so"><input type="text" value="<?php echo ($key); ?>" name="k" id="k" autocomplete="off" placeholder="请输入您要查找的商品名称"/><button type="button" class="cnzzCounter" onclick="document.getElementById('query_form').submit()" data-cnzz-type="54" data-cnzz="1">搜索</button></form></div><dl><dt class="rg"></dt></dl><dl><dt class="zy"></dt></dl><dl><dt class="qc"></dt></dl></div><div class="clear"></div></div></div><div id="baner"><div id="nav" style="font-size: 15px;"><a href="/" class="cnzzCounter iconM <?php if(strlen($request_url) <= 1 || stripos($request_url,'item') || stripos($request_url,'article') || stripos($request_url,'cate')): ?>active<?php endif; ?>" style="padding:8px 0px;width:240px; text-align: left;" data-cnzz-type="50" data-cnzz="0"><i class="iconfont">&#xe60d;</i><span style="padding-left: 80px; text-align: left;">今日新品</span></a><?php $tag_nav_class = new navTag;$data = $tag_nav_class->lists(array('type'=>'lists','style'=>'main','cache'=>'0','return'=>'data',)); if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><a class="cnzzCounter<?php if($nav_curr == $val['alias']): ?>iconM active<?php endif; ?> "  href="<?php echo ($val["link"]); ?>" style="padding:8px 15px;"  data-cnzz-type="51" data-cnzz="0"><?php echo ($val["name"]); if($val["target"] == 1): ?><div style="position:absolute; width:24px; height:32px; background:#FFCC00;margin-left: 107px; margin-top: -25px; background:url(__STATIC__/tuiquanke/images/HOTT_qeu.gif)"></div><?php endif; ?></a><?php endforeach; endif; else: echo "" ;endif; ?></div></div><div style="clear: both;"></div><div id="dtk_mian"><div style="padding-top:1px; clear: both;"></div><style>
.article_left{ width:860px ; float: left; border-top: 1px solid #e5e5e5;   padding-bottom: 30px;}
.article_right{ width:325px; float: left; border-left: 1px solid #e5e5e5; overflow: hidden; padding-left: 10px;}
.article_left ul{ padding: 20px;}
.ad_300{ width: 100%; height: 250px;}
.guide-nav,.guide a,.hotPet .pet-list dt i,.ol-txt li i{}
.guide-nav{height:32px;padding-left:17px;line-height:32px;background-position:-490px 11px;color:#888; margin-top: 15px;padding-top: 10px;}
.guide-nav a{color:#888; font-size: 14px;}
.article_list{ padding-top: 30px; padding-left: 20px;clear: both;height: 160px;}
.article_list dd{width: 160px;height: 160px;float: left;overflow: hidden;}
.article_list dt{overflow: hidden; padding: 0 20px;  }
.article_list dt a{color:#333;height: 32px; line-height: 32px; font-family: simsun; font-size: 16px; font-weight: bold; white-space:nowrap; text-overflow:ellipsis; }
.article_list dt p{font-size: 12px;line-height: 24px;color: #888;}
.article_list dt a:hover{color:#FF472B;}
.tab-txt .control{margin-bottom:10px;border-bottom:1px solid #B5B5B5;}
.tab-txt .control .item{margin-bottom:-2px;font-size:20px;}
.tab-txt .control .item.current{border:0;border-bottom:3px solid #1F1F1F;font-weight:normal;font-size:26px;}	
.modBoxB{margin-top: 20px;}
.hot-tags{padding:0px 0;}
.hot-tags h5{font-size:14px; line-height: 22px; height: 22px;}
.hot-tags .box{white-space: nowrap;padding-top: 10px;}
.hot-tags .box a{display: block; float: left; line-height: 28px; padding:0 8px; color:#313131; background: #f1f1f1; margin-right:8px; margin-top:5px; }
</style><div style="width:1200px;margin:0 auto; background: #ffffff;"><div class="guide-nav"><a href="/"><?php echo C('yh_site_name');?>首页</a> &gt; <a href="javascript:;">优惠券头条</a></div><div class="mains"><div class="article_left"><?php if(is_array($items_list)): $i = 0; $__LIST__ = $items_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><dl class="article_list"><dd><a href="<?php if(C('URL_MODEL') == 2): ?>/article/view_<?php echo ($list["id"]); else: echo U('/article/read/',array('id'=>$list['id'])); endif; ?>" title="<?php echo ($list["title"]); ?>"><img src="<?php echo ($list["pic"]); ?>" alt="" height="140"></a></dd><dt><a href="<?php if(C('URL_MODEL') == 2): ?>/article/view_<?php echo ($list["id"]); else: echo U('/article/read/',array('id'=>$list['id'])); endif; ?>" title="<?php echo ($list["title"]); ?>"><?php echo ($list["title"]); ?></a><p style="height: 120px; overflow: hidden;"><?php echo cut_html_str($list['info'],356,'...');?></p></dt></dl><?php endforeach; endif; else: echo "" ;endif; ?><div style="padding-top: 30px; clear: both;"></div><div id="yw0" class="pager"><?php echo ($page); ?></div></div><div class="article_right"><div class="side_item tj_hot"><div class="side_item_tit"><i></i>热门推荐
    </div><div class="side_item_content tj_hot_cot clearfix"><ul><?php if(is_array($sellers)): $i = 0; $__LIST__ = $sellers;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li><a target="_blank" class="tj_hot_img" href="<?php echo U('/item/',array('id'=>$val['id']));?>"><img src="<?php echo ($val['pic_url']); ?>_400x400" height="100" width="100" alt=""></a><div class="hot_info"><div class="hot_info_tit"><a target="_blank" href="<?php echo U('/item/',array('id'=>$val['id']));?>"><?php echo ($val["title"]); ?></a><div style="font-size: 14px;"> 券后价：<label style="color: #E73121;"><?php echo ($val["coupon_price"]); ?></label>元<br/> 已有<span class="num" style="color: #E73121;"><?php echo ($val["volume"]); ?></span>人购买</div></div></div></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div></div></div></div></div><div id="footer" style="background-color: #444;height: 190px;width: 100%;border-top: 3px solid #FF472B;"><div class="footer-wrapper " style="width: 1200px;margin: 0 auto;position: relative;text-align: center"><img src="__STATIC__/tuiquanke/images/bottom_text.png" alt="" style="border: 0;margin-top: 50px;"><div class="author" style="    position: absolute;
    top: 67px;
    left: 990px;
    color: #FFFFFF;
    font-size: 18px;">by &nbsp;&nbsp;<?php echo C('yh_site_name');?></div><div class="text" style="color: #ffffff; font-size: 16px;margin-top: 33px;"> CopyRight&nbsp;2017 &nbsp;<?php echo C('yh_site_name');?>@ 天猫、<a href="<?php echo C('yh_site_url');?>" style="color: #ffffff;">淘宝优惠券</a> &nbsp;&nbsp;&nbsp;<?php echo C('yh_site_icp');?> &nbsp;&nbsp;
		<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo C('yh_qq');?>&site=qq&menu=yes" style="color: #8da7cb" title="联系我帮你解答">^_^亲遇到问题，联系我帮你处理哈</a></div></div><div class="foot" style="display: none;"><?php echo C('yh_statistics_code');?></div></div><div id="back_top" class="back_top"><?php if(strlen($request_url) <= 1): ?><img id="wechat" src="<?php echo C('yh_site_flogo');?>" /><?php endif; ?><a href="javascript:;" class="call-top" title="返回顶部"></a><a id="checkTrap" class="checkTrap" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo C('yh_qq');?>&site=qq&menu=yes"><span class="call-check" title="联系客服"></span></a><div class="hide"></div></div><a id="checkTrap" class="checkTrap" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo C('yh_qq');?>&site=qq&menu=yes"></a><?php if(C('yh_site_secret') == '1'): $tag_load_class = new loadTag;$data = $tag_load_class->js(array('type'=>'js','href'=>'__STATIC__/tuiquanke/js/jquery.js,__STATIC__/tuiquanke/js/slider.js,__STATIC__/tuiquanke/js/layer/layer.js,__STATIC__/tuiquanke/js/clipboard.min.js,__STATIC__/tuiquanke/js/base.js,__STATIC__/tuiquanke/js/jquery.scrollLoading.js','cache'=>'0','return'=>'data',));?><script type="text/javascript">		$(".scrollLoading").scrollLoading(); 
</script><?php else: $tag_load_class = new loadTag;$data = $tag_load_class->js(array('type'=>'js','href'=>'__STATIC__/tuiquanke/js/jquery.js,__STATIC__/tuiquanke/js/slider.js,__STATIC__/tuiquanke/js/layer/layer.js,__STATIC__/tuiquanke/js/clipboard.min.js,__STATIC__/tuiquanke/js/base.js','cache'=>'0','return'=>'data',)); endif; ?></div></body></html>