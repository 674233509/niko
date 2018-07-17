<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Registration Page</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
       <!-- bootstrap 3.0.2 -->
        <link href="/yangshi/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="/yangshi/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="/yangshi/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="/yangshi/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header">{{ $title }}</div>
            <form action="/admin/houtai/login/store" method="post">
            	{{ csrf_field() }}
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="username" id="username" class="form-control" value="{{ old('username') }}" placeholder="用户名"/>
                    </div>
                    <div class="form-group">
                        <input type="phone" name="tel" id="tel" class="form-control" value="{{ old('tel') }}" placeholder="手机号"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control" placeholder="新密码"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="repass" id="repass" class="form-control" placeholder="确认密码"/>
                    </div>
                    <p class="text-center text-warning">{{session('error')}}</p>
                </div>
                <div class="footer">                    

                    <button type="submit" class="btn bg-olive btn-block">确认修改</button>

                    <a href="/admin/houtai/login/index" class="text-center">我已经有账号</a>
                </div>
            </form>

            <div class="margin text-center">
                <span>Register using social networks</span>
                <br/>
                <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
                <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
                <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>

            </div>
        </div>


        
        <!-- jQuery 2.0.2 -->
        <script src="/yangshi/js/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="/yangshi/js/bootstrap.min.js" type="text/javascript"></script> 

    </body>
</html>