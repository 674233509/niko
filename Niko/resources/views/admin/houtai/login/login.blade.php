<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Log in</title>
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
            <form action="/admin/houtai/login/create" method="post">
            	{{ csrf_field() }}
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="username" id="username" class="form-control" placeholder="用户名" value="{{ old('username') }}"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control" placeholder="密码"/>
                    </div>          
                    <div class="form-group">
                        <input type="checkbox" name="remember_me"/> 记住我
                    </div>
                     <p class="text-center text-warning">{{session('error')}}</p>
                </div>
                <div class="footer">                                                               
                    <button type="submit" class="btn bg-olive btn-block">登录</button>  
                    
                    <p><a href="/admin/houtai/login/show">忘记密码？</a></p>
                    
                   
                </div>
            </form>

            <div class="margin text-center">
                <span>Sign in using social networks</span>
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