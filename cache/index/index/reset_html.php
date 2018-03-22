<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>登录</title>  
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>pintuer.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>admin.css">
    <script src="<?php echo JS_PATH;?>jquery.js"></script>
    <script src="<?php echo JS_PATH;?>pintuer.js"></script>  
	<script type="text/javascript">  
        function reImg(){  
            var img = document.getElementById("Img");  
            img.src = "index.php?a=ver&rnd=" + Math.random();  
        }  
    </script>
</head>
<body>
<div class="bg"></div>
<div class="container">
    <div class="line bouncein">
        <div class="xs6 xm4 xs3-move xm4-move">
            <div style="height:150px;"></div>
            <div class="media media-y margin-big-bottom">           
            </div>         
            <form action="index.php?m=index&c=index&a=reset" method="post">
            <div class="panel loginbox">
                <div class="text-center margin-big padding-big-top"><h1>后台管理中心</h1></div>
                <div class="panel-body" style="padding:30px; padding-bottom:10px; padding-top:10px;">
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="text" class="input input-big" name="username" placeholder="账号" data-validate="required:请填写账号" />
                            <span class="icon icon-user margin-small"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="email" class="input input-big" name="email" placeholder="邮箱" data-validate="required:请填写邮箱" />
                            <span class="icon icon-key margin-small"></span>
                        </div>
                    </div>
					<div class="form-group">
                        <div class="field field-icon-right">
                            <input type="password" class="input input-big" name="opwd" placeholder="密码" data-validate="required:请填写原密码" />
                            <span class="icon icon-key margin-small"></span>
                        </div>
                    </div>
					<div class="form-group">
                        <div class="field field-icon-right">
                            <input type="password" class="input input-big" name="password" placeholder="新密码" data-validate="required:请填写密码" />
                            <span class="icon icon-key margin-small"></span>
                        </div>
                    </div>
					<div class="form-group">
                        <div class="field field-icon-right">
                            <input type="password" class="input input-big" name="repassword" placeholder="再次输入密码" data-validate="required:请再次确认密码" />
                            <span class="icon icon-key margin-small"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="field">
                            <input type="text" class="input input-big" name="code" placeholder="填写右侧的验证码" data-validate="required:请填写右侧的验证码" />
                           <img src="index.php?m=admin&c=index&a=verify" alt="" width="100" height="32" class="passcode" style="height:43px;cursor:pointer;" id="Img" onclick="this.src='index.php?c=index&a=verify'"/>  
                                                   
                        </div>
                    </div>
                </div>
                <div style="padding:30px;"><input type="submit" class="button button-block bg-main text-big input-big" name="tj" value="登录"></div>
            </div>
            </form>          
        </div>
    </div>
</div>

</body>
</html>