<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
	<!--[if IE]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<![endif]-->
	<meta name="robots" content="noodp, noydir" />
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
	<meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta content="" name="keywords" />
	<meta content="" name="description" />
	<title>后台系统登录</title>
	<link rel="shortcut icon" href="/Public/images/Home/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="/Public/css/Admin/dpl.css"/>
	<link rel="stylesheet" href="/Public/css/Admin/account_common.css"> 	
	<link rel="stylesheet" href="/Public/css/Admin/login.css">
	<link rel="stylesheet" href="/Public/css/Admin/login_mini_form_aliyun.css">
	<link rel="stylesheet" href="/Public/css/Admin/mini-login-form-min.css">
	<script src="/Public/js/Admin/jquery.js"></script>
	<script>
		$(function(){
			$('#fm-login-submit').click(function(){
				if($("input[name=name]").val()=="" || $("input[name=pwd]").val()==""){
					alert('登录名或密码不能为空!');
					return false;
				}
			})
		})
		if (window != top) 
		top.location.href = location.href;
	</script>
</head>
<body>

	<div id="header" data-spm="1">
		<div class="header-layout y-row">
	   		<h1 class="logo" id="logo"><a href=""></a></h1>
	       	<h2 class="logo-title">欢迎登录后台管理系统</h2>
	   </div>
	</div>
	<div class="content y-row" data-spm="2">
		<div id="login-banner">
	        <img style="width:450px;height:350px" src="/Public/images/Admin/gqer1.png">
	    </div>
		
		<div id="login-module">
			<div id="alibaba-login-iframe" class="iframe-loaded iframe-show">
				<div id="alibaba-login-iframe-loading"></div>
		        <div id="login-wrap">
		            <form action="/Admin/Index/login" class="form clr style-type-vertical lang- vertical-" method="post" name="login-form" id="login-form">
				        <div style="font-size:12px;font-weight:normal;" id="login-title">
				    		请输入管理员账号密码
						</div>
					    <div class="loading-mask" id="login-loading">
					        <div class="loading-icon"></div>
					        <div class="loading-mask-body"></div>
					    </div>
				
					    <div class="form-error notice notice-error" id="login-error">
					        <span class="icon-notice icon-error"></span>
					        <span class="notice-descript"></span>
					    </div>
		
					    <div class="form clr" id="login-content">
							<dl>
						        <dt class="fm-label">
						            <div class="fm-label-wrap clr">
						                <!--<span class="fm-label-extra" id="login-id-label-extra"><a data-spm-protocol="i" href="javascript:void(0);" target="_blank" onclick="alert('找M兄');">忘记登录名？</a></span>-->
						                <label for="fm-login-id">登录名:</label>
						            </div>
						        </dt>
						        <dd class="fm-field" id="fm-login-id-wrap" style="position: relative;">
						            <div class="fm-field-wrap">
						                <div class="loading-mask" id="account-check-loading">
						                    <div class="loading-icon"></div>
						                    <div class="loading-mask-body"></div>
						                </div>
						                <input autocapitalize="off" autocorrect="off" autocomplete="off" value="" placeholder="" tabindex="1" name="name" class="fm-text" id="fm-login-id" />
						            </div>
						        </dd>
							</dl>
							<dl>
						        <dt class="fm-label">
						            <div class="fm-label-wrap clr">
										<span class="fm-label-extra">
						               		<!--<a data-spm-protocol="i" target="_blank" href="javascript:void(0);" id="forgot-password-link" onclick="alert('找M兄');">忘记登录密码？</a>-->
										</span>									
						                <label for="fm-login-password">登录密码:</label>
						            </div>
						        </dt>
					        	<dd class="fm-field" id="fm-login-password-wrap">
						            <div class="fm-field-wrap">
						                <input type="password" autocapitalize="off" autocorrect="off" placeholder="" autocomplete="off" tabindex="2" name="pwd" class="fm-text" id="fm-login-password">
						            </div>
					        	</dd>
					        </dl>
					    </div>
		
					    <div id="login-submit">
					        <input type="submit" name="submit-btn" tabindex="4" class="fm-button fm-submit" value="登录" id="fm-login-submit">
					    </div>
		
					    <div id="login-other">
					       <div class="login-login-links"></div>		       		
						</div>
					</form>
		    	</div>
			</div>
		</div>
	</div>
	
	<div class="copyright-100">
		<div class="y-row copyright">
	   		<p></p>
	  	</div>
	</div>

</body>
</html>