<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="/uploads/ico/bitbug_favicon.ico" /> 

        <title>{{$gg_peizhi->hand}}</title>
        
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
                                <span class="label label-success">(消息数量)</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">你有（数量）条信息</li>
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
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-warning"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-people info"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning danger"></i> Very long description here that may not fit into the page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users warning"></i> 5 new members joined
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-cart success"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-person danger"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Create a nice theme
                                                    <small class="pull-right">40%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Some task I need to do
                                                    <small class="pull-right">60%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class="pull-right">80%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                @if(session('denglu'))
                                <span> {{ session('denglu') }}<i class="caret"></i></span>
                                @endif
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="/yangshi/img/avatar3.png" class="img-circle" alt="User Image" />博主头像
                                    <p>
                                        博主名 - 的个人微博
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">简介</a>
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
                            <img src="/yangshi/img/avatar3.png" class="img-circle" alt="User Image" />
                            博主头像
                        </div>
                        <div class="pull-left info">
                            <p>Hello, 博主名</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> 在线状态</a>
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
                            <a href="index.html">
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
                                <i class="fa fa-edit"></i> <span>用户管理</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/admin/houtai/user/index"><i class="fa fa-angle-double-right"></i> 查看用户</a></li>
                                <li><a href="/admin/houtai/user/create"><i class="fa fa-angle-double-right"></i> 添加用户</a></li>
                                <li><a href="/admin/houtai/forbidden/index"><i class="fa fa-angle-double-right"></i> 禁用用户</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>文章管理</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <li class="treeview">
                                        <a href="#">
                                            <i class="fa fa-edit"></i> <span>标签管理</span>
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="/admin/sn/biao/index"><i class="fa fa-angle-double-right"></i> 查看标签</a></li>
                                            <li><a href="/admin/sn/biao/create"><i class="fa fa-angle-double-right"></i> 添加标签</a></li>

                                        </ul>
                                    </li>
                    
                                </li>
                                <li><li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>文章管理</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/admin/sn/wen/index"><i class="fa fa-angle-double-right"></i> 查看文章</a></li>
                                <li><a href="/admin/sn/wen/create"><i class="fa fa-angle-double-right"></i> 添加文章</a></li>
                            </ul>
                        </li></li>

                            </ul>
                        </li>
                         <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>评论管理</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/admin/sn/ping/create"><i class="fa fa-angle-double-right"></i> 添加评论</a></li>
                                <li><a href="/admin/sn/ping/index"><i class="fa fa-angle-double-right"></i> 查看评论</a></li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>密码管理</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/admin/houtai/repass/index"><i class="fa fa-angle-double-right"></i> 修改密码</a></li>
                            </ul>
                        </li>


                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>关于我</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/charts/morris.html"><i class="fa fa-angle-double-right"></i> 个人信息</a></li>
                                <li><li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i>
                                <span>我的相册</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/admin/sn/xiang/index"><i class="fa fa-angle-double-right"></i> 查看相册</a></li>
                                <li><a href="/admin/sn/xiang/create"><i class="fa fa-angle-double-right"></i> 添加相册</a></li>
                                <li><a href="/admin/sn/xiang/jiazhao"><i class="fa fa-angle-double-right"></i> 添加相片</a></li>
                            </ul>
                        </li></li>
                                <li><a href="pages/charts/inline.html"><i class="fa fa-angle-double-right"></i> 我的日记</a></li>
                                <li><a href="pages/charts/inline.html"><i class="fa fa-angle-double-right"></i> 我的作品</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>慢生活</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                
                                <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>欣赏</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/admin/sn/xin/index"><i class="fa fa-angle-double-right"></i> 查看欣赏</a></li>
                                <li><a href="/admin/sn/xin/create"><i class="fa fa-angle-double-right"></i> 添加欣赏</a></li>
                                
                            </ul>
                        </li>
                                <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>经典语录</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/admin/sn/yulu/index"><i class="fa fa-angle-double-right"></i> 查看语录</a></li>
                                <li><a href="/admin/sn/yulu/create"><i class="fa fa-angle-double-right"></i> 添加语录</a></li>
                                
                            </ul>
                        </li>
                                
                            </ul>
                        </li>




                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>网站配置</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <li class="treeview">
                                        <a href="#">
                                            <i class="fa fa-edit"></i> <span>网站配置管理</span>
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="/admin/sn/peizhi/create"><i class="fa fa-angle-double-right"></i>添加配置</a></li>
                                            <li><a href="/admin/sn/peizhi/index"><i class="fa fa-angle-double-right"></i>管理配置</a></li>

                                        </ul>
                                    </li>
                    
                                </li>
                                <li><li class="treeview">
                                        <a href="#">
                                            <i class="fa fa-edit"></i> <span>轮播图</span>
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="/admin/sn/lun/index"><i class="fa fa-angle-double-right"></i> 查看图片</a></li>
                                            <li><a href="/admin/sn/lun/create"><i class="fa fa-angle-double-right"></i> 添加图片</a></li>

                                        </ul>
                                    </li>
                                </li>
                                <li><li class="treeview">
                                        <a href="#">
                                            <i class="fa fa-edit"></i> <span>友情链接</span>
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="/admin/fri/create"><i class="fa fa-angle-double-right"></i> 查看友情</a></li>
                                            <li><a href="/admin/fri/index"><i class="fa fa-angle-double-right"></i> 管理友情</a></li>

                                        </ul>
                                    </li>
                                </li>
                                <li><li class="treeview">
                                        <a href="#">
                                            <i class="fa fa-edit"></i> <span>广告管理</span>
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="/admin/guang/create"><i class="fa fa-angle-double-right"></i> 查看广告</a></li>
                                            <li><a href="/admin/guang/index"><i class="fa fa-angle-double-right"></i> 管理广告</a></li>

                                        </ul>
                                    </li>
                                </li>

                            </ul>
                        </li>

                       
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        日程表
                        <small>控制面板</small>
                    </h1>
                    
                </section>

                <!-- Main content -->
                <section class="content">


                    <div class="row">
                        <div class="col-md-3">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h4 class="box-title">拖曳事件</h4>
                                </div>
                                <div class="box-body">
                                    <!-- the events -->
                                    <div id='external-events'>                                 
                                        <div class='external-event bg-green'>午饭</div>
                                        <div class='external-event bg-red'>回家</div>
                                        <div class='external-event bg-aqua'>开会</div>
                                        <div class='external-event bg-yellow'>工作</div>
                                        <div class='external-event bg-navy'>睡觉</div>
                                        <p>
                                            <input type='checkbox' id='drop-remove' /> <label for='drop-remove'>移除选中项</label>
                                        </p>
                                    </div>
                                </div><!-- /.box-body -->
                            </div><!-- /. box -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">添加事件</h3>
                                </div>
                                <div class="box-body">
                                    <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                                        <button type="button" id="color-chooser-btn" class="btn btn-danger btn-block btn-sm dropdown-toggle" data-toggle="dropdown">颜色 <span class="caret"></span></button>
                                        <ul class="dropdown-menu" id="color-chooser">
                                            <li><a class="text-green" href="#"><i class="fa fa-square"></i> 绿色</a></li>
                                            <li><a class="text-blue" href="#"><i class="fa fa-square"></i> 蓝色</a></li>                                            
                                            <li><a class="text-navy" href="#"><i class="fa fa-square"></i> 海军蓝</a></li>                                            
                                            <li><a class="text-yellow" href="#"><i class="fa fa-square"></i> 黄色</a></li>
                                            <li><a class="text-orange" href="#"><i class="fa fa-square"></i> 桔色</a></li>
                                            <li><a class="text-aqua" href="#"><i class="fa fa-square"></i> 浅蓝色</a></li>
                                            <li><a class="text-red" href="#"><i class="fa fa-square"></i> 红色</a></li>
                                            <li><a class="text-fuchsia" href="#"><i class="fa fa-square"></i> 紫红色</a></li>
                                            <li><a class="text-purple" href="#"><i class="fa fa-square"></i> 紫色</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                     <form action="/admin/houtai/search/index" method="get" class="sidebar-form">
                                    <div class="input-group">     

                                        <input id="new-event" type="text" name="label" class="form-control" placeholder="事件标题">
                                        <div class="input-group-btn">
                                            <button id="add-new-event" type="submit" class="btn btn-default btn-flat">添加</button>
                                        </div><!-- /btn-group -->
                                    
                                    </div><!-- /input-group -->
                                    </form>
                                </div>
                            </div>

                        </div><!-- /.col -->
                        <div class="col-md-9">
                            <div class="box box-primary">                             
                                <div class="box-body no-padding">
                                    <!-- THE CALENDAR -->
                                    <div id="calendar"></div>
                                </div><!-- /.box-body -->
                            </div><!-- /. box -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->  


                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


        <!-- jQuery 2.0.2 -->
        <script src="/yangshi/js/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="/yangshi/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="/yangshi/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="/yangshi/js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="/yangshi/js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- Page specific script -->
        <script type="text/javascript">
            $(function() {

                /* initialize the external events
                 -----------------------------------------------------------------*/
                function ini_events(ele) {
                    ele.each(function() {

                        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                        // it doesn't need to have a start or end
                        var eventObject = {
                            title: $.trim($(this).text()) // use the element's text as the event title
                        };

                        // store the Event Object in the DOM element so we can get to it later
                        $(this).data('eventObject', eventObject);

                        // make the event draggable using jQuery UI
                        $(this).draggable({
                            zIndex: 1070,
                            revert: true, // will cause the event to go back to its
                            revertDuration: 0  //  original position after the drag
                        });

                    });
                }
                ini_events($('#external-events div.external-event'));

                /* initialize the calendar
                 -----------------------------------------------------------------*/
                //Date for the calendar events (dummy data)
                var date = new Date();
                var d = date.getDate(),
                        m = date.getMonth(),
                        y = date.getFullYear();
                $('#calendar').fullCalendar({
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay'
                    },
                    buttonText: {//This is to add icons to the visible buttons
                        prev: "<span class='fa fa-caret-left'></span>",
                        next: "<span class='fa fa-caret-right'></span>",
                        today: 'today',
                        month: 'month',
                        week: 'week',
                        day: 'day'
                    },
                    //Random default events
                    events: [
                        {
                            title: 'All Day Event',
                            start: new Date(y, m, 1),
                            backgroundColor: "#f56954", //red 
                            borderColor: "#f56954" //red
                        },
                        {
                            title: 'Long Event',
                            start: new Date(y, m, d - 5),
                            end: new Date(y, m, d - 2),
                            backgroundColor: "#f39c12", //yellow
                            borderColor: "#f39c12" //yellow
                        },
                        {
                            title: 'Meeting',
                            start: new Date(y, m, d, 10, 30),
                            allDay: false,
                            backgroundColor: "#0073b7", //Blue
                            borderColor: "#0073b7" //Blue
                        },
                        {
                            title: 'Lunch',
                            start: new Date(y, m, d, 12, 0),
                            end: new Date(y, m, d, 14, 0),
                            allDay: false,
                            backgroundColor: "#00c0ef", //Info (aqua)
                            borderColor: "#00c0ef" //Info (aqua)
                        },
                        {
                            title: 'Birthday Party',
                            start: new Date(y, m, d + 1, 19, 0),
                            end: new Date(y, m, d + 1, 22, 30),
                            allDay: false,
                            backgroundColor: "#00a65a", //Success (green)
                            borderColor: "#00a65a" //Success (green)
                        },
                        {
                            title: 'Click for Google',
                            start: new Date(y, m, 28),
                            end: new Date(y, m, 29),
                            url: 'http://google.com/',
                            backgroundColor: "#3c8dbc", //Primary (light-blue)
                            borderColor: "#3c8dbc" //Primary (light-blue)
                        }
                    ],
                    editable: true,
                    droppable: true, // this allows things to be dropped onto the calendar !!!
                    drop: function(date, allDay) { // this function is called when something is dropped

                        // retrieve the dropped element's stored Event Object
                        var originalEventObject = $(this).data('eventObject');

                        // we need to copy it, so that multiple events don't have a reference to the same object
                        var copiedEventObject = $.extend({}, originalEventObject);

                        // assign it the date that was reported
                        copiedEventObject.start = date;
                        copiedEventObject.allDay = allDay;
                        copiedEventObject.backgroundColor = $(this).css("background-color");
                        copiedEventObject.borderColor = $(this).css("border-color");

                        // render the event on the calendar
                        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

                        // is the "remove after drop" checkbox checked?
                        if ($('#drop-remove').is(':checked')) {
                            // if so, remove the element from the "Draggable Events" list
                            $(this).remove();
                        }

                    }
                });

                /* ADDING EVENTS */
                var currColor = "#f56954"; //Red by default
                //Color chooser button
                var colorChooser = $("#color-chooser-btn");
                $("#color-chooser > li > a").click(function(e) {
                    e.preventDefault();
                    //Save color
                    currColor = $(this).css("color");
                    //Add color effect to button
                    colorChooser
                            .css({"background-color": currColor, "border-color": currColor})
                            .html($(this).text()+' <span class="caret"></span>');
                });
                $("#add-new-event").click(function(e) {
                    e.preventDefault();
                    //Get value and make sure it is not null
                    var val = $("#new-event").val();
                    if (val.length == 0) {
                        return;
                    }

                    //Create event
                    var event = $("<div />");
                    event.css({"background-color": currColor, "border-color": currColor, "color": "#fff"}).addClass("external-event");
                    event.html(val);
                    $('#external-events').prepend(event);

                    //Add draggable funtionality
                    ini_events(event);

                    //Remove event from text input
                    $("#new-event").val("");
                });
            });
        </script>

    </body>
</html>