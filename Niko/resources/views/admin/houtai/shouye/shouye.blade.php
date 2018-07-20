@extends('muban.houtai.ban')
@section('hou.index')

    <!-- Main content -->
    <section class="content">
        <h4 class="page-header">
            <font  size="6" >我的首页</font><br><br>
            <small>小草——绿色的天使，让大地更加生机盎然；小草——美丽的精灵，给世界增添了乐趣；小草——可爱的使者，让到处充满希望的色彩。—我如小草</small>
        </h4>
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>
                            article
                        </h3>
                        <p>
                            我的文章
                        </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-paste"></i>
                    </div>
                    <a href="/admin/sn/wen/index" class="small-box-footer">
                        更多信息 <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>
                            criticism
                        </h3>
                        <p>
                            评论
                        </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-file-text-o"></i>
                    </div>
                    <a href="/admin/sn/ping/index" class="small-box-footer">
                        更多信息 <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>
                            users
                        </h3>
                        <p>
                            用户
                        </p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="/admin/houtai/user/index" class="small-box-footer">
                        更多信息 <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>
                            lock
                        </h3>
                        <p>
                            锁屏
                        </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-lock"></i>
                    </div>
                    <a href="/admin/houtai/suoping/index" class="small-box-footer">
                        执行 <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div><!-- ./col -->
        </div><!-- /.row -->

        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-blue">
                    <div class="inner">
                        <h3>
                            event
                        </h3>
                        <p>
                            日程
                        </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <a href="/admin/houtai/richeng/index" class="small-box-footer">
                        更多信息 <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-purple">
                    <div class="inner">
                        <h3>
                            nice<sup style="font-size: 20px"></sup>
                        </h3>
                        <p>
                            关于我
                        </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user"></i>
                    </div>
                    <a href="/admin/houtai/jianjie/index" class="small-box-footer">
                        更多信息 <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-teal">
                    <div class="inner">
                        <h3>
                            life
                        </h3>
                        <p>
                            慢生活
                        </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-smile-o"></i>
                    </div>
                    <a href="/admin/sn/xin/index" class="small-box-footer">
                        更多信息 <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-maroon">
                    <div class="inner">
                        <h3>
                            config
                        </h3>
                        <p>
                            网站配置
                        </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-wrench"></i>
                    </div>
                    <a href="/admin/sn/peizhi/index" class="small-box-footer">
                        更多信息 <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div><!-- ./col -->
        </div><!-- /.row -->

        <!-- Widgets as boxes -->
        <h4 class="page-header">
           <font color="sky-blue" style="font-family:华文行楷" size="6"> 我的文章墙</font>
            <small><font color="orange" style="font-family:华文行楷" size="4">人言苏城好风光 文人墨客常到访 春来百花相争艳 夏至游人满苏塘 秋时听雨小楼上 冬寒不染绿如常 不及君之好文
            章。好棒！！！</font></small>
        </h4>
        @foreach($data1 as $k=>$v)
        <div class="row" >
         
            <div class="col-md-4" >
                <!-- Default box -->
                <div class="box box-solid box-success">
                    <div class="box-header">
                
                        <h3 class="box-title">标题:{{ $v->title }}</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-success btn-xs" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-success btn-xs" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <style type="text/css">
                        #yin img{
                            display: none;
                        }
                    </style>
                    <div id="yin"class="box-body"  style="height:110px;overflow: hidden;">
                       
                        <p style="display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 4;overflow: hidden;">
                            {!! $v->content !!}
                        </p>
                    </div><!-- /.box-body -->
                    <div class="box-footer" >
                        <code>{!! $v->created_at !!}</code>
                        <code style="margin-left:90px;">点击:{!! $v->dianji !!}</code>
                    </div><!-- /.box-footer-->
                </div><!-- /.box -->
            </div><!-- /.col -->
           
            <div class="col-md-4">
                <!-- Primary box -->
                <div class="box box-solid box-primary">
                    <div class="box-header">
                        <h3 class="box-title">文章插图</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-primary btn-xs" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-primary btn-xs" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body" style="height:110px;">
                       @if( $v->pic )
                       <img src="{{ $v->pic }}" title="{{ $v->title }}" style="height:90px">
                       @else
                       <img src="/yangshi/img/timg.gif" title="{{ $v->title }}" style="width:90px" >
                       <font class="text-warning">没有发现插图 !!! </font>  
                       @endif
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <code>{{ $v->created_at }}</code>
                    </div><!-- /.box-footer-->
                </div><!-- /.box -->
            </div><!-- /.col -->
             @foreach($v->ping as $kk=>$vv)
            <div class="col-md-4">
                <!-- Primary box -->
                <div class="box box-solid box-info" style="position:absolute">
                    <div class="box-header">
                        <h3 class="box-title">经典评论</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-info btn-xs" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-info btn-xs" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                       
                       <p style="height:80px;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 4;overflow: hidden;">
                            {{ $vv->content }}
                        </p>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <code>{{ $vv->ptime }}</code>
                    </div><!-- /.box-footer-->
                </div><!-- /.box -->
            </div><!-- /.col -->
            @endforeach
        </div><!-- /.row -->
        @endforeach
        
                                              

    </section><!-- /.content -->
@endsection