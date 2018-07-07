<!DOCTYPE html>
<html class="no-js" lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>login</title>
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
</head>
<body>
		<div class="container demo-1">
			<div class="content">
				<div id="large-header" class="large-header" style="height: 610px;">
					<canvas id="demo-canvas" width="1344" height="610"></canvas>
					<div class="logo_box">
						<h3>登录后进入</h3>
						<form action="/sn/login/yan" name="f" method="post">
						{{ csrf_field() }}
							<div class="input_outer">
								<span class="u_user"></span>
								<input id="ID" name="uaername" class="text" style="color: #000000 !important" placeholder="请输入账户" type="text">
							</div>
							<div class="input_outer">
								<span class="us_uer"></span>
								<input id="PASSWORD" name="pass" class="text" style="color: #000000 !important; position:absolute; z-index:100;" value="" placeholder="请输入密码" type="password">
							</div>
							
							<div id="LOGIN" class="mb2">
							<input type="submit"class="act-but submit"  onclick="login()" style="color: #FFFFFF;width:333px">
							</div>
							
						</form>
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
		<div style="text-align:center;">
</div>
	
</body></html>