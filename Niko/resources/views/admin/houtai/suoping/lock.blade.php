<!DOCTYPE html>
<html class="lockscreen">
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Lockscreen</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="/yangshi/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="/yangshi/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="/yangshi/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- Automatic element centering using js -->
        <div class="center">            
            <div class="headline text-center" id="time">
                <!-- Time auto generated by js -->
            </div><!-- /.headline -->
            
            <!-- User name -->
            @if(session('user'))
            <div class="lockscreen-name">{{session('user')}}</div>
            @else
            <div class="lockscreen-name"><a href="/admin/houtai/login/index">请登录</a></div>
            @endif
            
            
            <!-- START LOCK SCREEN ITEM -->
            <div class="lockscreen-item">
                <!-- lockscreen image -->
                <div class="lockscreen-image">
                    @if(session('pic'))
                    <img src="/{{session('pic')}}" alt="user image"/>
                    @else
                    <img src="/yangshi/img/avatar5.png" alt="user image"/>
                    @endif
                    
                </div>
                <!-- /.lockscreen-image -->

                <!-- lockscreen credentials (contains the form) -->
                <div class="lockscreen-credentials">   
                <form action="/admin/houtai/suoping/create" method="post">
                    <div class="input-group">
                        
                        {{ csrf_field() }} 
                        <input type="password" name="password" id="password" class="form-control" placeholder="password" />
                        <div class="input-group-btn">
                            <button class="btn btn-flat" type="submit" href=""><i class="fa fa-arrow-right text-muted"></i></button>
                        </div>
                        
                    </div>
                </form>
                    
                </div><!-- /.lockscreen credentials -->
                
            </div><!-- /.lockscreen-item -->
               <p class="text-center text-warning">{{session('error')}}</p>
            <div class="lockscreen-link">
                <a href="/admin/houtai/login/index">其他用户</a>
            </div>            
        </div><!-- /.center -->

        <!-- jQuery 2.0.2 -->
        <script src="/yangshi/js/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="/yangshi/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- page script -->
        <script type="text/javascript">
            $(function() {
                startTime();
                $(".center").center();
                $(window).resize(function() {
                    $(".center").center();
                });
            });

            /*  */
            function startTime()
            {
                var today = new Date();
                var h = today.getHours();
                var m = today.getMinutes();
                var s = today.getSeconds();

                // add a zero in front of numbers<10
                m = checkTime(m);
                s = checkTime(s);

                //Check for PM and AM
                var day_or_night = (h > 11) ? "PM" : "AM";

                //Convert to 12 hours system
                if (h > 12)
                    h -= 12;

                //Add time to the headline and update every 500 milliseconds
                $('#time').html(h + ":" + m + ":" + s + " " + day_or_night);
                setTimeout(function() {
                    startTime()
                }, 500);
            }

            function checkTime(i)
            {
                if (i < 10)
                {
                    i = "0" + i;
                }
                return i;
            }

            /* CENTER ELEMENTS IN THE SCREEN */
            jQuery.fn.center = function() {
                this.css("position", "absolute");
                this.css("top", Math.max(0, (($(window).height() - $(this).outerHeight()) / 2) +
                        $(window).scrollTop()) - 30 + "px");
                this.css("left", Math.max(0, (($(window).width() - $(this).outerWidth()) / 2) +
                        $(window).scrollLeft()) + "px");
                return this;
            }
        </script>
    </body>
</html>