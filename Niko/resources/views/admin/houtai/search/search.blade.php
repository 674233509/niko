@extends('muban.houtai.ban')
 @section('hou.index')

@if(session('success'))
        <div class="alert alert-success alert-dismissible fade in" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span></button>
            {{ session('success') }}
        </div>
@endif

<!-- Main content -->
<section class="content">
    <!-- MAILBOX BEGIN -->
    <div class="mailbox row">
        <div class="col-xs-12">
            <div class="box box-solid">
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-3 col-sm-4">
                            <!-- BOXES are complex enough to move the .box-header around.
                                 This is an example of having the box header within the box body -->
                            <div class="box-header">
                                <i class="glyphicon glyphicon-user"></i>
                                <h3 class="box-title text-info"> &nbsp;&nbsp;{{ $title }}</h3>
                            </div>
                        
                           
                            <!-- Navigation - folders-->
                            <div style="margin-top: 15px;">
                                
                            </div>
                        </div><!-- /.col (LEFT) -->
                        <div class="col-md-9 col-sm-8">
                            <div class="row pad">
                                <div class="col-sm-6" >
                                   
                                    <!-- Action button -->
                                </div>
                                <div class="col-sm-6 search-form">
                                    <form action="/admin/houtai/search/index" method="get" class="text-right">
                                        <div class="input-group">
                                            <input type="text" name="search" class="form-control input-sm" placeholder="精确搜索...">
                                            <div class="input-group-btn">
                                                <button type="submit" name="q" class="btn btn-sm btn-primary" style="height:30px"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>                      
                                    </form>
                                </div>
                            </div><!-- /.row -->
                                
                            
                        </div><!-- /.col (RIGHT) -->
                        <div class="container" style="float:right;width:100%;margin-top:10px">
                                <!-- THE MESSAGES -->
                                <table class="table table-bordered table-striped  table-hover" >
                               
                                <tr class="unread text-center">
                                
                                    <td>ID</td>
                                    <td>用户账号</td>
                                    <td>文章标题</td>
                                    <td>最新评论时间</td>
                                    <td>点击数量</td>
                                    <td>创建用户时间</td>
                                    <td>用户IP</td>
                                    <td>操作</td>
                                </tr>
                                @foreach($res as $k=>$v)
                                    <tr class="text-center">
                                       <td>{{ $v -> id }} </td>
                                       <td>{{ $v -> username }} </td>
                                       <td>{{ $v -> wen -> title }} </td>
                                       <td>{{ $v -> ping -> ptime }} </td>
                                       <td>{{ $v -> wen -> dianji }} </td>
                                       <td>{{ $v -> userxiang -> rtime }} </td>
                                       <td>{{ $v -> userxiang -> zip }} </td>
                                       
                                        <td >
                                            
                                            <a style="display: inline;" href="/sn/wen/index">欣赏美文</a>
                                           
                                        </td>
                                    </tr> 
                                @endforeach
                                </table>
                                
                            </div><!-- /.table-responsive -->
                    </div><!-- /.row -->
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                    <div class="pages pull-right">
                        {!! $res->appends(['search'=>$search])->render() !!}
                    </div>
                </div><!-- box-footer -->
            </div><!-- /.box -->
        </div><!-- /.col (MAIN) -->
    </div>
    <!-- MAILBOX END -->

</section><!-- /.content -->


@endsection