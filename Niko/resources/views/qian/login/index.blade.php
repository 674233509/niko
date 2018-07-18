<!DOCTYPE html>
<html class="no-js" lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>login</title>
{{-- 注册滑动样式 --}}
<link rel="stylesheet" type="text/css" href="/yangshi/denglu/zhuce/1.css">
{{-- 注册样式结束 --}}
<link rel="stylesheet" type="text/css" href="/yangshi/denglu/index_data/normalize.css">
<link rel="stylesheet" type="text/css" href="/yangshi/denglu/index_data/demo.css">
<link rel="stylesheet" href="/yangshi/denglu/index_data/jquery.css">
<!--必要样式-->
<link rel="stylesheet" type="text/css" href="/yangshi/denglu/index_data/component.css">

<!--[if IE]>
<script src="js/html5.js"></script>
<![endif]-->
<style>
	input::-webkit-input-placeholder{
		color:rgba(0, 0, 0, 0.726);
	}
	input::-moz-placeholder{   /* Mozilla Firefox 19+ */
		color:rgba(0, 0, 0, 0.726);
	}
	input:-moz-placeholder{    /* Mozilla Firefox 4 to 18 */
		color:rgba(0, 0, 0, 0.726);
	}
	input:-ms-input-placeholder{  /* Internet Explorer 10-11 */ 
		color:rgba(0, 0, 0, 0.726);
	}

	
</style>
<link rel="stylesheet" type="text/css" href="/yangshi/tanchu/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="/yangshi/tanchu/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="/yangshi/tanchu/css/ns-default.css" />
		<link rel="stylesheet" type="text/css" href="/yangshi/tanchu/css/ns-style-growl.css" />
		<script src="/yangshi/tanchu/js/modernizr.custom.js"></script>

</head>
<body>


<button id="notification-trigger" class="progress-button" style="display:none; width:0px;height:0px">
						<span class="content" id='clickMe'>显示提示框</span>
					</button>
<script type="text/javascript">
// 两秒后模拟点击
setTimeout(function() {
	// IE
	if(document.all) {
		document.getElementById("clickMe").click();
	}
	// 其它浏览器
	else {
		var e = document.createEvent("MouseEvents");
		e.initEvent("click", true, true);
		document.getElementById("clickMe").dispatchEvent(e);
	}
}, 1);
</script>

		<div class="container demo-1">
			<div class="content">
				<div id="large-header" class="large-header" style="height: 610px;">
					<canvas id="demo-canvas" width="1344" height="610"></canvas>
					<div class="logo_box">
					<div id="wrapper" class="login-page">
		  <div id="login_form" class="form">
					{{-- 登录 --}}
						<form action="/sn/login/yan" name="f" method="post">
						{{ csrf_field() }}
						<h3 style="color:#509" id="hh">登录后进入</h3>
							<div class="input_outer ">
								<span class="u_user"></span>
								<input id="ID" name="username" class="text" style="color: #000000 !important" placeholder="请输入账户" type="text">
							</div>
							<div class="input_outer">
								<span class="us_uer"></span>
								<input id="PASSWORD" name="pass" class="text" style="color: #000000 !important; position:absolute; z-index:100;" value="" placeholder="请输入密码" type="password">
							</div>
							
							<div id="LOGIN" class="mb2">

							<input type="submit"class="act-but submit" value="登录"  onclick="login()" style="color: #FFFFFF;width:333px">
		      			 <p class="message">还没有账户? <a href="#">立刻创建</a></p>
							</div>
						</form>
						{{-- 登录结束 --}}
						{{-- 注册 --}}
						<form  action="/sn/zhu/create" class="register-form" method="post">
						
						{{ csrf_field() }}
						<h3 style="color:#509">注册</h3>
						<div class="input_outer ">
					      <input type="text" id="zhuid" placeholder="请输入用户名" style="color: #000000 !important" name="uaername" class="text" />
					     </div>

							<div class="input_outer">
								<span class="us_uer"></span>
					      <input type="password"  id="zhupassword"  name="pass" class="text" style="color: #000000 !important; position:absolute; z-index:100;" placeholder="请输入密码" id="r_password" />
					      </div>
					      	<div class="input_outer">
								<span class="us_uer"></span>
					      <input type="password"  id="chongpassword"  name="pass" class="text" style="color: #000000 !important; position:absolute; z-index:100;" placeholder="请确认密码" id="r_password" />
					      </div>
					      <div class="input_outer">
								<span class="us_uer"></span>
					      <input type="text" id="zhuphone" name='tel' placeholder="请输入手机号" id="r_emial" class="text"/>
					      </div>	
					      <input type="submit"class="act-but submit" value="注册"  onclick="zhuce()" style="color: #FFFFFF;width:333px">
					      <p class="message">已经有了一个账户? <a href="#">登录</a></p>
					      </div>
					    </form>
						{{-- 注册结束 --}}

				
					</div>
					</div>
					</div>
				</div>
			</div>
		</div><!-- /container -->
		<script src="/yangshi/denglu/index_data/TweenLite.js"></script>
		<script src="/yangshi/denglu/index_data/EasePack.js"></script>
		<script src="/yangshi/denglu/index_data/jquery.js"></script>
		<script src="/yangshi/denglu/index_data/rAF.js"></script>
		<script src="/yangshi/denglu/index_data/demo-1.js"></script>
		<script src="/yangshi/denglu/index_data/jquery_002.js"></script>
		<script src="/yangshi/denglu/index_data/Longin.js"></script>
		<script src="/yangshi/denglu/index_data/zhuce.js"></script>
		<script src="/yangshi/denglu/zhuce/1.js"></script>
</div>

	<script src="/yangshi/tanchu/js/classie.js"></script>
<script src="/yangshi/tanchu/js/notificationFx.js"></script>
		<script>
			(function() {
				var bttn = document.getElementById( 'notification-trigger' );

				// make sure..
				bttn.disabled = false;

				bttn.addEventListener( 'click', function() {
					// simulate loading (for demo purposes only)
					classie.add( bttn, 'active' );
					setTimeout( function() {

						classie.remove( bttn, 'active' );
						
						// create the notification
						var notification = new NotificationFx({
						@if(session('error'))
							message : '<p>用户名或密码<span style="color:red">错误</span></p><p>请检查后登录</p><p>如果没有账号</p><p>请注册后进入</p>',
						@elseif (session('zhu'))
							message : '<p>注册成功</p><p>请登录</p>',
						@endif
							layout : 'growl',
							effect : 'jelly',
							type : 'notice', // notice, warning, error or success
							onClose : function() {
								bttn.disabled = false;
							}
						});

						// show the notification
						notification.show();

					}, 1 );
					
					// disable the button (for demo purposes only)
					this.disabled = true;
				} );
			})();
		</script>
</body></html>