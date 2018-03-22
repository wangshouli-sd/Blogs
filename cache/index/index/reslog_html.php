<!DOCTYPE html>
<html>

<!-- Head -->
<head>

	<title>用户中心</title>

	<!-- Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" href="<?php echo IMG_PATH;?>ico.png" type="image/x-icon"/>
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //Meta-Tags -->
	<script src="http://libs.baidu.com/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">  
        function reImg(){  
            var img = document.getElementById("Img");  
            img.src = "index.php?a=ver&rnd=" + Math.random();  
        }  
    </script>
	<!-- Style --> <link rel="stylesheet" href="<?php echo CSS_PATH;?>reslog.css" type="text/css" media="all">



</head>
<!-- //Head -->

<!-- Body -->
<body>

	<h1>用户中心</h1>
	<div class="container w3layouts agileits">

		<div class="login w3layouts agileits">
			<h2>登 录</h2>
			<form action="index.php?c=index&a=check" method="post">
				<input type="text" Name="username" placeholder="用户名" required="">
				<input type="password" Name="password" placeholder="密码" required="">
			<ul class="tick w3layouts agileits">
				<li>
					<input type="checkbox" id="brand1" value="remember">
					<label for="brand1"><span></span>记住我</label>
				</li>
			</ul>
			<div class="send-button w3layouts agileits">
					<input type="submit" name="login" value="登 录">
				</form>
			</div>
			<div class="clear"></div>
		</div><div class="copyrights">Collect from <a href="#" ><?php echo WEB_SIGN;?></a></div>
		<div class="register w3layouts agileits">
			<h2>注 册</h2>
			<form action="index.php?c=index&a=check" method="post">
				<input type="text" Name="username" placeholder="用户名" required="">
				<select name="sex" style="margin:0px 0px 4px 6px">
					<option value="0" selected>保密</option>
					<option value="1">男</option>
					<option value="2">女</option>
				</select>
				<hr style="border-top-width:0px"/>
				<input type="text" Name="phone" placeholder="手机号" id="phone" required="">
				<input type="password" Name="password" placeholder="密码" required=""/>
				<input type="password" Name="repassword" placeholder="再次输入密码" required=""/>
				<input type="text" Name="yzm" placeholder="验证码" required=""/>
				
				<input type="text" Name="email" placeholder="邮箱" required="" />
				<!-- <img src="index.php?c=index&a=verify" onclick="this.src='index.php?c=index&a=verify'" id="Img" style="cursor:pointer;margin:0px 0px 25px 130px"/> -->
				<div class="send-button w3layouts agileits">
				<input type="submit" name="register" value="免费注册" />
			</form>
			
			<br />
			</div>
			<div class="clear"></div><button id="get" style="margin-bottom:20px;cursor:pointer;">获取验证码</button>
		</div>

		<div class="clear"></div>
	</div>

	<div class="footer w3layouts agileits">
		<p>Copyright &copy; 1997-2017 <a href="#" target="_blank" title="随风就是我">WEB_TITLE</a> | <?php echo WEB_ICP;?></p>
	</div>
				<script>
					$("#get").click(function(){
						var phone = $("#phone").val();
						$.post('ucpaas.php',{phone:phone},
							function(obj){
							alert(obj.send);
							},'json');
						});
				</script>
</body>
<!-- //Body -->

</html>
