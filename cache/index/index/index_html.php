<!DOCTYPE HTML>
<html>
<head>
<title>随风就是我的个人博客</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css' />
<link rel="icon" href="<?php echo IMG_PATH;?>ico.png" type="image/x-icon"/>
<link href="<?php echo CSS_PATH;?>style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
	 	<!---strat-slider---->
	    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>slider.css" />
		<script type="text/javascript" src="<?php echo JS_PATH;?>modernizr.custom.28468.js"></script>
		<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.cslider.js"></script>
			<script type="text/javascript">
				$(function() {
				
					$('#da-slider').cslider({
						autoplay	: true,
						bgincrement	: 450
					});
				
				});
			</script>
		<!---//strat-slider---->
<!-- start top_js_button -->
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
			<a href="/index.php?m=index&c=index&a=me"><img src="<?php echo IMG_PATH;?>logo.png" alt=""/> </a>
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
			<a href="#">个人中心</a>
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
				<li class="active"><a href="index.php?c=index&a=index">首页</a></li>
				<li><a href="index.php?c=index&a=look">随便看看</a></li>
				<li><a href="index.php?c=index&a=me">个人听歌历程</a></li>
				<li><a href="index.php?c=index&a=show">精彩分享</a></li>
				<li><a href="index.php?c=index&a=announce">分享一刻</a></li>
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
<!-- start slider -->
<div class="slider_bg">
<div class="wrap">
	<div class="slider">
				<!---start-da-slider----->
				<div id="da-slider" class="da-slider">
				<div class="da-slide">
					<h2>世间再无林肯公园！</h2>
					<p>没人知道查斯特到底为什么离开。 我们以为告别的只是查斯特-贝宁顿，其实还送走了林肯公园所创造的一个温柔摇滚的时代。 摇滚不只是愤怒，不只反抗，不只是如同飞鸟一般永不回头，而是呈现对这个复杂世界最丰富的理解。 而这个男人忽然从起身说“Good Goodbye”，世间再无林肯公园。​</p>
				</div>
				<div class="da-slide">
					<h2>如何评价赵雷的《南方姑娘》?</h2>
					<p>一首《南方姑娘》让我感受到了南方女人的细腻如水，勤快，坚韧的性格</p>
				</div>
				<div class="da-slide">
					<h2>李荣浩翻唱《小芳》惊爆全场！</h2>
					<p>《小芳》是李荣浩翻唱的一首歌，在《我是歌手第三季 突围赛》上演唱，李荣浩在我是歌手第三季突围赛唱这首歌虽然未能成功突围，但是让这首老歌一夜爆红。​</p>
				</div>
				<div class="da-slide">
					<h2>一代情怀-动画《宝莲灯》</h2>
					<p>《爱就一个字》是一首“哲式”佳作，作为主题歌可谓声情并茂，无可挑剔。深情款款，洋溢着一片殷殷真情。该首歌曲情绪饱满、诚挚动人，曾治愈过无数人的心。张信哲以其清澈而明亮的独特嗓音演绎，唱功纯熟，歌声高亢、清亮，温暖感动了无数观众</p>
				</div>			
				<nav class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</nav>
			</div>
 			<!---//End-da-slider----->
 	</div>
</div>
</div>
<!-- start main -->
<div class="wrap">
	<div class="main">
		<div class="main_text">
			<h2>Life is a pure flame, and we live by an invisible sun within us. </h2>
			<h2>生命如纯洁的火焰，而维系这火焰的是我们内心的太阳。</h2>
			<p class="para">无论你遇见谁，他都是你生命该出现的人，绝非偶然，他一定会教会你一些什么”。</p>
			<p class="para">所以我也相信：“无论我走到哪里，那都是我该去的地方，经历一些我该经历的事，遇见我该遇见的人”</p>
		</div>	
	</div>
</div>
<!-- start main_bg -->
<div class="main_bg">
<div class="wrap">
	<div class="main content_top">
		<!--  -->
		<div class="span_of_3">
			<div class="span1_of_3">
				<a href="index.php?c=index&a=details"><img src="<?php echo IMG_PATH;?>pic1.jpg" alt="图片加载失败" title="Colby O'Donis 与Akon合作的第一首单曲what you got发表与2008年2月26日，从排行榜的位置来看。大家对What You Got反应不错。Akon演唱的部分很少。"/></a>
				<div class="span1_of_3_text">
					<h3><a href="index.php?c=index&a=details ">What You Got</a></h3>
					<p>《What You Got》是Colby O'Donis 与Akon演唱的一首歌曲，于2008年2月26日发行。</p>
				</div>
			</div>
			<div class="span1_of_3">
				<a href="index.php?c=index&a=details"><img src="<?php echo IMG_PATH;?>pic2.jpg" alt="图片加载失败" title="Valder Fields 是Tamas Wells最有名的歌曲，在该曲目中，弦、钢琴、软和的人声，营造出温暖的气氛。其中，Valder是一个地名，这首歌曲收录于专辑A Plea En Vendredi 中。该曲目是Tamas Wells在缅甸北部进行一个社会卫生艾滋病毒/艾滋病的教育项目写成的。"/></a>
				<div class="span1_of_3_text">
					<h3><a href="index.php?c=index&a=details">Valder Fields</a></h3>
					<p>Valder Fields 是Tamas Wells最有名的歌曲,发行于2006年3月21日。</p>
				</div>
			</div>
			<div class="span1_of_3">
				<a href="index.php?c=index&a=details"><img src="<?php echo IMG_PATH;?>pic3.jpg" alt="图片加载失败" title="《Breathless》是英格兰歌手Shayne Ward的一首歌曲，英式R&B曲风，由Rami，Savan Kotecha和Arnthor Birgisson联手打造，收录在2007年11月19日发行的专辑《Breathless》中，该专辑主打歌，列于专辑第二位。"/></a>
				<div class="span1_of_3_text">
					<h3><a href="index.php?c=index&a=details">Breathless</a></h3>
					<p>《Breathless》是英格兰歌手Shayne Ward的一首歌曲,收录在专辑《Breathless》中。</p>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<!--  -->
		<div class="span_of_3">
			<div class="span1_of_3">
				<a href="index.php?c=index&a=details"><img src="<?php echo IMG_PATH;?>pic4.jpg" alt="图片加载失败" title="《young for you》是北京的英伦风格摇滚乐队GALA演唱的一首歌曲。该歌曲为国语版本，2004年3月发行英文专辑《Young For You》。"/></a>
				<div class="span1_of_3_text">
					<h3><a href="index.php?c=index&a=details">Young For You</a></h3>
					<p>《young for you》是北京的英伦风格摇滚乐队GALA演唱的一首歌曲。发行于2004年3月</p>
				</div>
			</div>
			<div class="span1_of_3">
				<a href="index.php?c=index&a=details"><img src="<?php echo IMG_PATH;?>pic5.jpg" alt="图片加载失败" title="《带你去旅行》是来自校长演唱的一首歌，由朱贺作词作曲。是博主非常喜欢的其中一首歌，每次听到这首歌的时候都特别想带着女朋友去旅行全世界。" /></a>
				<div class="span1_of_3_text">
					<h3><a href="index.php?c=index&a=details">带你去旅行</a></h3>
					<p>《带你去旅行》是来自校长演唱的一首歌，由朱贺作词作曲。发行于2017年8月10日</p>
				</div>
			</div>
			<div class="span1_of_3">
				<a href="index.php?c=index&a=details"><img src="<?php echo IMG_PATH;?>pic6.jpg" alt="图片加载失败" title="黑夜虽长，只道寻常，一路北上，踏寻梦想！"/></a>
				<div class="span1_of_3_text">
					<h3><a href="index.php?c=index&a=details">黑夜虽长，请别用来遗忘</a></h3>
					<p>《黑夜虽长，请别用来遗忘》是谢春花于8月18日发行专辑《一棵会开花的树》中的一首歌</p>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<!-- end grids_of_3 -->
	</div>
</div>
</div>
<div class="wrap">
		<ul id="flexiselDemo3">
			<li><img src="<?php echo IMG_PATH;?>client1.jpg" /></li>
			<li><img src="<?php echo IMG_PATH;?>client6.jpg" /></li>
			<li><img src="<?php echo IMG_PATH;?>client2.jpg" /></li>
			<li><img src="<?php echo IMG_PATH;?>client5.jpg" /></li>
			<li><img src="<?php echo IMG_PATH;?>client4.jpg" /></li>
			<li><img src="<?php echo IMG_PATH;?>client3.jpg" /></li>
			<li><img src="<?php echo IMG_PATH;?>client4.jpg" /></li>
		</ul>
	<script type="text/javascript">
$(window).load(function() {
	$("#flexiselDemo1").flexisel();
	$("#flexiselDemo2").flexisel({
		enableResponsiveBreakpoints: true,
    	responsiveBreakpoints: { 
    		portrait: { 
    			changePoint:480,
    			visibleItems: 1
    		}, 
    		landscape: { 
    			changePoint:640,
    			visibleItems: 2
    		},
    		tablet: { 
    			changePoint:768,
    			visibleItems: 3
    		}
    	}
    });

	$("#flexiselDemo3").flexisel({
		visibleItems: 5,
		animationSpeed: 1000,
		autoPlay: true,
		autoPlaySpeed: 3000,    		
		pauseOnHover: true,
		enableResponsiveBreakpoints: true,
    	responsiveBreakpoints: { 
    		portrait: { 
    			changePoint:480,
    			visibleItems: 1
    		}, 
    		landscape: { 
    			changePoint:640,
    			visibleItems: 2
    		},
    		tablet: { 
    			changePoint:768,
    			visibleItems: 3
    		}
    	}
    });
    
});
</script>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.flexisel.js"></script>
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