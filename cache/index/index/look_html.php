
<!DOCTYPE HTML>
<html>
<head>
<title>随风就是我的个人博客</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="<?php echo CSS_PATH;?>style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="icon" href="<?php echo IMG_PATH;?>ico.png" type="image/x-icon"/>
<!-- start top_js_button -->
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>move-top.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>easing.js"></script>
   <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
</head>
<body>
<!-- start header -->
<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<a href="index.php?c=index&a=me"><img src="<?php echo IMG_PATH;?>logo.png" alt=""/> </a>
		</div>
		<?php if (empty($data)): ?>
		<div class="social-icons">
				<a href="index.php?c=index&a=index">随风首页</a>
				<a href="index.php?c=index&a=reslog">登录</a>
				<a href="index.php?c=index&a=reslog">注册</a>
				<a href="index.php?c=index&a=forget">忘记密码？</a>
		</div>
		<?php else: ?>
		<div class="social-icons">
		    <a href="index.php?c=index&a=index">随风首页</a>
			<a href="index.php?c=index&a=self"><?=$data[0]['username']; ?></a>
			<a href="index.php?c=index&a=set">个人中心</a>
			<a href="index.php?c=index&a=announce">写心情</a>
			<a href="index.php?c=index&a=collects">收藏</a>
			<a href="index.php?c=index&a=reset">修改密码</a>
			<a href="index.php?c=index&a=jump">退出</a>
		</div>
		<?php endif; ?>
		<div class="clear"></div>
	</div>
</div>
</div>
<!-- start header -->
<div class="header_btm">
<div class="wrap">
	<div class="header_sub">
		<div class="h_menu">
			<ul>
				<li class="active"><a href="index.php?c=index&a=index">首页</a></li>
				<li><a href="index.php?c=index&a=look">随便看看</a></li>
				<li><a href="index.php?c=index&a=me">个人听歌历程</a></li>
				<li><a href="index.php?c=index&a=show">精彩分享</a></li>
				<li><a href="index.php?c=index&a=announce">分享一刻</a></li>
			</ul>
		</div>
		<div class="h_search">
    		<form>
    			<input type="text" value="" placeholder="搜索">
    			<input type="submit" value="">
    		</form>
		</div>
        <div class="menu">
        	<ul>
				<a href="index.php?c=index&a=index">随风首页</a>
			<a href="index.php?c=index&a=self"><?=$data[0]['username']; ?></a>
			<a href="#">个人中心</a>
			<a href="index.php?c=index&a=announce">写心情</a>
			<a href="#">消息</a>
			<a href="index.php?c=index&a=announce">修改密码</a>
			<a href="index.php?c=index&a=jump">退出</a>
            </ul>
        </div>
        <div class="search">
            <form action="/iphone/search.html">
                <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" class="text">
            </form>
        </div>
        <div class="sub-head">
        	<ul>
            	<li><a href="#" id="menu">Menu  <span></span></a></li>
            	<li><a href="#" id="search">Search <span></span></a></li>
            </ul>
            <div class="clear"></div>
        </div>
	   <script type="text/javascript">
		$(".menu,.search").hide();
		$("#menu").click(function(){
			$(".menu").toggle();
			$(".search").hide();
			$("#search").removeClass("active");
			$("#menu").toggleClass("active");
		});
		$("#search").click(function(){
			$(".search").toggle();
			$(".menu").hide();
			$("#menu").removeClass("active");
			$("#search").toggleClass("active");
			$(".text").focus();
		});
	</script>
	<script type="text/javascript" src="<?php echo JS_PATH;?>script.js"></script>
	<div class="clear"></div>

		<div class="clear"></div>
</div>
</div>
</div>
<!-- start top_bg -->
<div class="top_bg">
<div class="wrap">
	<div class="top">
		<h2>HEART</h2>
 	</div>
</div>
</div>
<!-- start main -->
<div class="wrap">
<div class="main">
		<!-- start span_of_3 -->
		<div class="span_of_3">
			<div class="span1_of_3">
				<a href="index.php?c=index&a=details"><img src="<?php echo IMG_PATH;?>/pic1.jpg" alt=""/></a>
				<div class="span1_of_3_text">
					<h3><a href="index.php?c=index&a=details ">What You Got</a></h3>
					<p>《What You Got》是Colby O'Donis 与Akon演唱的一首歌曲，于2008年2月26日发行。</p>
				</div>
				<div class="ser_btn">
					<a class="button  ser_btn1" href="index.php?c=index&a=details">read more</a>
				</div>
			</div>
			<div class="span1_of_3">
				<a href="index.php?c=index&a=details"><img src="<?php echo IMG_PATH;?>/pic2.jpg" alt=""/></a>
				<div class="span1_of_3_text">
					<h3><a href="index.php?c=index&a=details">Valder Fields</a></h3>
					<p>Valder Fields 是Tamas Wells最有名的歌曲,发行于2006年3月21日。</p>
				</div>
				<div class="ser_btn">
					<a class="button  ser_btn1" href="index.php?c=index&a=details">read more</a>
				</div>
			</div>
			<div class="span1_of_3">
				<a href="index.php?c=index&a=details"><img src="<?php echo IMG_PATH;?>/pic3.jpg" alt=""/></a>
				<div class="span1_of_3_text">
					<h3><a href="index.php?c=index&a=details">Breathless</a></h3>
					<p>《Breathless》是英格兰歌手Shayne Ward的一首歌曲,收录在专辑《Breathless》中。</p>
				</div>
				<div class="ser_btn">
					<a class="button  ser_btn1" href="index.php?c=index&a=details">read more</a>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<!--  -->
		<div class="span_of_3">
			<div class="span1_of_3">
				<a href="index.php?c=index&a=details"><img src="<?php echo IMG_PATH;?>/pic4.jpg" alt=""/></a>
				<div class="span1_of_3_text">
					<h3><a href="index.php?c=index&a=details">Young For You</a></h3>
					<p>《young for you》是北京的英伦风格摇滚乐队GALA演唱的一首歌曲。发行于2004年3月</p>
				</div>
				<div class="ser_btn">
					<a class="button  ser_btn1" href="index.php?c=index&a=details">read more</a>
				</div>
			</div>
			<div class="span1_of_3">
				<a href="index.php?c=index&a=details"><img src="<?php echo IMG_PATH;?>/pic5.jpg" alt=""/></a>
				<div class="span1_of_3_text">
					<h3><a href="index.php?c=index&a=details">带你去旅行</a></h3>
					<p>《带你去旅行》是来自校长演唱的一首歌，由朱贺作词作曲。发行于2017年8月10日</p>
				</div>
				<div class="ser_btn">
					<a class="button  ser_btn1" href="index.php?c=index&a=details">read more</a>
				</div>
			</div>
			<div class="span1_of_3">
				<a href="index.php?c=index&a=details"><img src="<?php echo IMG_PATH;?>/pic6.jpg" alt=""/></a>
				<div class="span1_of_3_text">
					<h3><a href="index.php?c=index&a=details">黑夜虽长，请别用来遗忘</a></h3>
					<p>《黑夜虽长，请别用来遗忘》是谢春花于8月18日发行专辑《一棵会开花的树》中的一首歌</p>
				</div>
				<div class="ser_btn">
					<a class="button  ser_btn1" href="index.php?c=index&a=details">read more</a>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<!-- end grids_of_3 -->
	</div>
</div>
<!-- start footer -->
<div class="footer_bg">
<div class="wrap">
	<div class="footer">
		<!-- start span_of_4 -->
		<div class="span_of_4">
			<div class="span1_of_4">
				<h4>网站信息</h4>
				<p><?php echo WEB_WEL;?></p>
				<ul class="f_nav1">
					<li class="timer"><a href="<?php echo WEB_URL;?>"><?php echo WEB_URL;?></a></li>
				</ul>
				<p class="top"><?php echo WEB_ICP;?></p>
				<ul class="f_nav1">
					<li class="timer"><a href="#"><?php echo date("Y-m-d H:i:s",time());?></a></li>
				</ul>
			</div>
			<div class="span1_of_4">
				<h4>标签</h4>
				<p><?php echo WEB_DESC;?></p>
			</div>
			<div class="span1_of_4">
				<h4>博主信息</h4>
				<p class="btm"><?php echo WEB_SIGN;?></p>

			</div>
			<div class="span1_of_4">
				<h4>博主联系方式</h4>
				<p class="btm"><?php echo WEB_TITLE;?></p>
				<p class="btm1 pin"><?php echo WEB_ADDR;?></p>
				<p class="btm1 mail"><a href="mailto:info@mycompany.com">邮箱:<?php echo WEB_EMAIL;?></a></p>
				<p class="call"><?php echo WEB_PHONE;?></p>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
</div>
<!-- start footer -->
<div class="footer_bg1">
<div class="wrap">
	<div class="footer1">
		<!-- scroll_top_btn -->
	    <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		 <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
		<!--end scroll_top_btn -->
		<div class="social-icons">
		    <ul>
		      <li><a href="#" target="_blank"></a></li>
			  <li><a href="#" target="_blank"></a></li>
		      <li><a href="#" target="_blank"></a></li>
			  <li><a href="#" target="_blank"></a></li>
			</ul>
		</div>
|
		<div class="clear"></div>
	</div>
</div>
</div>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>