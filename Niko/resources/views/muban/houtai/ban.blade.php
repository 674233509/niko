<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="/yangshi/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="/yangshi/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="/yangshi/css/ionicons.min.css" rel="stylesheet" type="text/css" />
         <!-- fullCalendar -->
        <link href="/yangshi/css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <link href="/yangshi/css/fullcalendar/fullcalendar.print.css" rel="stylesheet" type="text/css" media='print' />
        <!-- Theme style -->
        <link href="/yangshi/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="/yangshi/js/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="/yangshi/ajax/ajax3.0-min.js"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="/admin/houtai/shouye/index" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                帝左Sn
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header"></li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="/yangshi/img/avatar3.png" class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                    留言人民GG
                                                    <small><i class="fa fa-clock-o"></i> 时间</small>
                                                </h4>
                                                <p>留言内容</p>
                                            </a>
                                        </li><!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="/yangshi/img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="/yangshi/img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="/yangshi/img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="/yangshi/img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                @if(session('user'))
                                <span> {{ session('user') }}<i class="caret"></i></span>
                                @endif
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                @if(session('pic'))
                                <img src="/{{ session('pic') }}" class="img-circle" alt="User Image" />
                                @else
                                <img src="/yangshi/img/avatar3.png" class="img-circle" alt="User Image" />
                                @endif
                                    
                                    @if(session('user'))
                                    <p>
                                        {{ session('user') }} - 的个人微博
                                        <small>Member since Nov. 2018</small>
                                    </p>
                                    @else
                                    <p>
                                        <a href="/admin/houtai/login/index">请登录</a>
                                        <small>Member since Nov. 2018</small>
                                    </p>
                                    @endif
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class=" ">
                                        <p >座右铭：年华一去不复返，事业放弃再难成。 —— 白郎宁</p>
                                    </div>
                                    
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="/admin/houtai/jianjie/index" class="btn btn-default btn-flat">简介</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="/admin/houtai/login/logout" class="btn btn-default btn-flat">退出</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                        @if(session('pic'))
                            <img src="/{{ session('pic') }}" class="img-circle" alt="User Image" />
                            @else
                            <img src="/yangshi/img/avatar3.png" class="img-circle" alt="User Image" /><br>
                            
                        @endif
                        </div>
                        <div class="pull-left info">
                        @if(session('user'))
                            <p>
                                Hello,{{ session('user') }}
                               
                            </p>
                            <a href="#"><i class="fa fa-circle text-success"></i> 在线状态</a>
                        @else
                            <p><a href="/admin/houtai/login/index">请登录</a></p>
                            <a href="#"><i class="fa fa-circle text-inverse"></i> 在线状态</a>
                        @endif
                            
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="/admin/houtai/search/index" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="search" id="search" class="form-control" placeholder="精确搜索..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="/admin/houtai/shouye/index">
                                <i class="fa fa-dashboard"></i> <span>主页</span>
                            </a>
                        </li>
                        <li>
                            <a href="pages/widgets.html">
                                <i class="fa fa-th"></i> <span>Widgets</span> <small class="badge pull-right bg-green">new</small>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="glyphicon glyphicon-user"></i> <span>用户管理</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/admin/houtai/user/index"><i class="fa fa-eye"></i> 查看用户</a></li>
                                <li><a href="/admin/houtai/user/create"><i class="fa fa-edit "></i> 添加用户</a></li>
                                <li><a href="/admin/houtai/forbidden/index"><i class="fa fa-ban"></i> 禁用用户</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-book"></i> <span>文章管理</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <li class="treeview">
                                        <a href="#">
                                            <i class="fa fa-bookmark"></i> <span>标签管理</span>
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="/admin/sn/biao/index"><i class="fa fa-eye"></i> 查看标签</a></li>
                                            <li><a href="/admin/sn/biao/create"><i class="fa fa-edit "></i> 添加标签</a></li>

                                        </ul>
                                    </li>
                    
                                </li>
                                <li><li class="treeview">
                            <a href="#">
                                <i class="fa fa-book"></i> <span>文章管理</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/admin/sn/wen/index"><i class="fa fa-eye"></i> 查看文章</a></li>
                                <li><a href="/admin/sn/wen/create"><i class="fa fa-edit "></i> 添加文章</a></li>
                            </ul>
                        </li></li>

                            </ul>
                        </li>
                         <li class="treeview">
                            <a href="#">
                                <i class="fa fa-comments"></i> <span>评论管理</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/admin/sn/ping/create"><i class="fa fa-edit "></i> 添加评论</a></li>
                                <li><a href="/admin/sn/ping/index"><i class="fa fa-eye"></i> 查看评论</a></li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa  fa-lock"></i> <span>密码管理</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/admin/houtai/repass/index"><i class="fa fa-unlock"></i> 修改密码</a></li>
                            </ul>
                        </li>


                        <li class="treeview">
                            <a href="#">
                                <i class="fa  fa-male"></i>
                                <span>关于我</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">

                                <li><a href="/admin/houtai/jianjie/index"><i class="fa fa-angle-double-right"></i> 个人信息</a></li>
                                <li><li class="treeview">
                            <a href="#">
                                <i class="fa fa-camera"></i>
                                <span>我的相册</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/admin/sn/xiang/index"><i class="fa  fa-picture-o"></i> 查看相册</a></li>
                                <li><a href="/admin/sn/xiang/create"><i class="fa fa-edit "></i> 添加相册</a></li>
                                <li><a href="/admin/sn/xiang/jiazhao"><i class="fa fa-angle-double-right"></i> 添加相片</a></li>
                            </ul>
                                      <li class="treeview">
                            <a href="#">
                                <i class="fa fa-male"></i>
                                <span>关于我</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/admin/sn/about/index"><i class="fa fa-eye"></i> 查看信息</a></li>
                                <li><a href="/admin/sn/about/create"><i class="fa fa-edit "></i> 添加信息</a></li>
                                
                            </ul>
                        </li>
                        </li></li>
                                <li><a href="pages/charts/inline.html"><i class="fa  fa-calendar-o"></i> 我的日记</a></li>
                                <li><a href="pages/charts/inline.html"><i class="fa fa-user-md"></i> 我的作品</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-coffee"></i>
                                <span>慢生活</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                
                                <li class="treeview">
                            <a href="#">
                                <i class="fa  fa-tint"></i>
                                <span>欣赏</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/admin/sn/xin/index"><i class="fa fa-eye"></i> 查看欣赏</a></li>
                                <li><a href="/admin/sn/xin/create"><i class="fa fa-edit "></i> 添加欣赏</a></li>
                                
                            </ul>
                        </li>
                                <li class="treeview">
                            <a href="#">
                                <i class="fa fa-umbrella"></i>
                                <span>经典语录</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/admin/sn/yulu/index"><i class="fa fa-eye"></i> 查看语录</a></li>
                                <li><a href="/admin/sn/yulu/create"><i class="fa fa-edit "></i> 添加语录</a></li>
                                
                            </ul>
                        </li>

                                    <li class="treeview">
                            <a href="#">
                                <i class="fa fa-music"></i>
                                <span>音乐</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/admin/sn/yin/index"><i class="fa fa-eye"></i> 查看音乐</a></li>
                                <li><a href="/admin/sn/yin/create"><i class="fa fa-edit "></i> 添加音乐</a></li>
                                
                            </ul>
                        </li>
                                
                            </ul>
                        </li>




                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-gear "></i> <span>网站配置</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <li class="treeview">
                                        <a href="#">
                                            <i class="fa  fa-gears (alias)"></i> <span>网站配置管理</span>
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="/admin/sn/peizhi/create"><i class="fa fa-edit "></i>添加配置</a></li>
                                            <li><a href="/admin/sn/peizhi/index"><i class="fa fa-angle-double-right"></i>管理配置</a></li>

                                        </ul>
                                    </li>
                    
                                </li>
                                <li><li class="treeview">
                                        <a href="#">
                                            <i class="fa fa-flag"></i> <span>轮播图</span>
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="/admin/sn/lun/index"><i class="fa fa-angle-double-right"></i> 查看图片</a></li>
                                            <li><a href="/admin/sn/lun/create"><i class="fa fa-edit "></i> 添加图片</a></li>

                                        </ul>
                                    </li>
                                </li>
                                <li><li class="treeview">
                                        <a href="#">
                                            <i class="fa fa-twitter"></i> <span>友情链接</span>
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="/admin/fri/create"><i class="fa fa-edit "></i> 添加友情</a></li>
                                            <li><a href="/admin/fri/index"><i class="fa fa-angle-double-right"></i> 管理友情</a></li>

                                        </ul>
                                    </li>
                                </li>
                                <li><li class="treeview">
                                        <a href="#">
                                            <i class="fa  fa-youtube"></i> <span>广告管理</span>
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="/admin/guang/create"><i class="fa fa-edit "></i> 添加广告</a></li>
                                            <li><a href="/admin/guang/index"><i class="fa fa-angle-double-right"></i> 管理广告</a></li>

                                        </ul>
                                    </li>
                                </li>


                            </ul>
                        </li>





                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bitbucket"></i> <span>回收站</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/admin/sn/hui/index"><i class="fa  fa-trash-o"></i> 评论回收站</a></li>
                               <li><a href="/admin/sn/hui/wenzhang"><i class="fa  fa-trash-o"></i> 文章回收站</a></li>
                               
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-table"></i> <span>Tables</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/tables/simple.html"><i class="fa fa-angle-double-right"></i> Simple tables</a></li>
                                <li><a href="pages/tables/data.html"><i class="fa fa-angle-double-right"></i> Data tables</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="pages/calendar.html">
                                <i class="fa fa-calendar"></i> <span>Calendar</span>
                                <small class="badge pull-right bg-red">3</small>
                            </a>
                        </li>
                        <li>
                            <a href="pages/mailbox.html">
                                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                                <small class="badge pull-right bg-yellow">12</small>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder"></i> <span>Examples</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/examples/invoice.html"><i class="fa fa-angle-double-right"></i> Invoice</a></li>
                                <li><a href="pages/examples/login.html"><i class="fa fa-angle-double-right"></i> Login</a></li>
                                <li><a href="pages/examples/register.html"><i class="fa fa-angle-double-right"></i> Register</a></li>
                                <li><a href="pages/examples/lockscreen.html"><i class="fa fa-angle-double-right"></i> Lockscreen</a></li>
                                <li><a href="pages/examples/404.html"><i class="fa fa-angle-double-right"></i> 404 Error</a></li>
                                <li><a href="pages/examples/500.html"><i class="fa fa-angle-double-right"></i> 500 Error</a></li>
                                <li><a href="pages/examples/blank.html"><i class="fa fa-angle-double-right"></i> Blank Page</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
            
        <!-- add new calendar event modal -->
<!-- 内容页面 -->
 <!-- Right side column. Contains the navbar and content of the page -->
 
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
@section('hou.index')
                <section class="content-header">
                    <h1>
                        Blank page
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Blank page</li>
                    </ol>
                </section>



                <!-- Main content -->
                <section class="content">


                </section><!-- /.content -->
@show
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

<!-- 内容页面结束 -->
        <!-- 后台登录验证js -->
        
        <!-- jQuery 2.0.2 -->
        <script src="/yangshi/js/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="/yangshi/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="/yangshi/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="/yangshi/js/raphael-min.js"></script>
        <script src="/yangshi/js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="/yangshi/js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="/yangshi/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="/yangshi/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="/yangshi/js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="/yangshi/js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="/yangshi/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="/yangshi/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="/yangshi/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="/yangshi/js/AdminLTE/app.js" type="text/javascript"></script>
        
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="/yangshi/js/AdminLTE/dashboard.js" type="text/javascript"></script>        

    </body>
</html>