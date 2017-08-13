<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>用户注册 | 登录</title>
    <link rel="stylesheet" href="/wwwroot/Public/static/bootstrap/css/style.css">
    <!--[if lt IE 9]>
    <script src="/wwwroot/Public/static/bootstrap/js/html5shiv.js"></script>
    <![endif]-->
    
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/wwwroot/Public/static/jquery-1.10.2.min.js"></script>
    <![endif]-->
    <!--[if gte IE 9]><!-->
    <script type="text/javascript" src="/wwwroot/Public/static/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="/wwwroot/Public/static/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>

<div class="cotn_principal">
    <div class="cont_centrar">
        <div class="cont_login">
            <div class="cont_info_log_sign_up">
                <div class="col_md_login">
                    <div class="cont_ba_opcitiy">
                        <h2>登录</h2>
                        <p>单击登录按钮登录</p>
                        <button class="btn_login" onClick="cambiar_login()">登录</button>
                    </div>
                </div>
                <div class="col_md_sign_up">
                    <div class="cont_ba_opcitiy">
                        <h2>注册</h2>
                        <p>点击注册按钮注册</p>
                        <button class="btn_sign_up" onClick="cambiar_sign_up()">注册</button>
                    </div>
                </div>
            </div>
            <div class="cont_back_info">
                <div class="cont_img_back_grey"> <img src="/wwwroot/Public/static/bootstrap/img/po.jpg" alt="" /> </div>
            </div>
            <div class="cont_forms"  >
                <div class="cont_img_back_"> <img src="po.jpg" alt="" /> </div>

                <form class="login-form" action="<?php echo U('User/login');?>" method="post">
                <div class="cont_form_login" style="height: auto;" > <a href="#" onClick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
                    <h2>登录</h2>
                    <input type="text" name="username" placeholder="请输入用户名" />
                    <input type="password" name="password" placeholder="请输入密码" />
                    <div class="control-group">
                        <!--<label class="control-label" for="inputPassword">验证码</label>-->
                        <div class="controls">
                            <input type="text" id="inputPassword" class="span3" placeholder="请输入验证码"  errormsg="请填写5位验证码" nullmsg="请填写验证码" datatype="*5-5" name="verify">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"></label>
                        <div class="controls">
                            <img class="verifyimg reloadverify" alt="点击切换" src="<?php echo U('verify');?>" style="cursor:pointer;">
                        </div>
                        <div class="controls Validform_checktip text-warning"></div>
                    </div>
                    <button class="btn_login" onClick="cambiar_login()">登录</button>
                </div>
                </form>
                <form class="login-form" action="<?php echo U('User/register');?>" method="post">
                <div class="cont_form_sign_up" > <a href="#" onClick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
                    <h2>注册</h2>
                    <input type="text" placeholder="请填写你的邮箱"  ajaxurl="/member/checkUserEmailUnique.html" errormsg="请填写正确格式的邮箱" nullmsg="请填写邮箱" datatype="e" value="" name="email"/>
                    <input type="text" placeholder="请填写1-16位用户名"  ajaxurl="/member/checkUserNameUnique.html" errormsg="请填写1-16位用户名" nullmsg="请填写用户名" datatype="*1-16" value="" name="username"/>
                    <input type="password" placeholder="密码为6-20位" errormsg="密码为6-20位" nullmsg="请填写密码" datatype="*6-20" name="password" />
                    <input type="password" placeholder="请再次输入密码" recheck="password" errormsg="您两次输入的密码不一致" nullmsg="请填确认密码" datatype="*" name="repassword" />
                <!--<div class="control-group">-->
                    <!--&lt;!&ndash;<label class="control-label" for="inputPassword">验证码</label>&ndash;&gt;-->
                    <!--<div class="controls">-->
                        <!--<input type="text" id="inputPassword" class="span3" placeholder="请输入验证码"  errormsg="请填写5位验证码" nullmsg="请填写验证码" datatype="*5-5" name="verify">-->
                    <!--</div>-->
                <!--</div>-->
                    <!--<div class="control-group">-->
                        <!--<label class="control-label"></label>-->
                        <!--<div class="controls">-->
                            <!--<img class="verifyimg reloadverify" alt="点击切换" src="<?php echo U('verify');?>" style="cursor:pointer;">-->
                        <!--</div>-->
                        <!--<div class="controls Validform_checktip text-warning"></div>-->
                    <!--</div>-->
                    <button class="btn_sign_up" onClick="cambiar_sign_up()">注册</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="/wwwroot/Public/static/bootstrap/js/index.js"></script>
<script type="text/javascript">

    $(document)
        .ajaxStart(function(){
            $("button:submit").addClass("log-in").attr("disabled", true);
        })
        .ajaxStop(function(){
            $("button:submit").removeClass("log-in").attr("disabled", false);
        });


    $("form").submit(function(){
        var self = $(this);
        $.post(self.attr("action"), self.serialize(), success, "json");
        return false;

        function success(data){
            if(data.status){
                window.location.href = data.url;
            } else {
                self.find(".Validform_checktip").text(data.info);
                //刷新验证码
                $(".reloadverify").click();
            }
        }
    });

    $(function(){
        var verifyimg = $(".verifyimg").attr("src");
        $(".reloadverify").click(function(){
            if( verifyimg.indexOf('?')>0){
                $(".verifyimg").attr("src", verifyimg+'&random='+Math.random());
            }else{
                $(".verifyimg").attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());
            }
        });
    });
</script>
<div style="text-align:center;">
    <p>来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
</div>
</body>
</html>