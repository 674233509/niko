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
                                    <form action="#" class="text-right">
                                        <div class="input-group">
                                            <input type="text" name="search" class="form-control input-sm" placeholder="关键字">
                                            <div class="input-group-btn">
                                                <button type="submit" name="content" class="btn btn-sm btn-primary"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>                      
                                    </form>
                                </div>
                            </div>
                               
                            </div><!-- /.row -->
                                
                                
                            <div class="container" style="float:right;width:100%;margin-top:30px">
                                <!-- THE MESSAGES -->
                                <table class="table table-bordered table-striped  table-hover">
                                <tr class="unread text-center">
                                <td class="small-col"><input type="checkbox" /></td>
                                    <td>ID</td>
                                    <td>广告名称</td>
                                    <td>广告内容</td>
                                    <td>广告地址</td>
                                    <td>广告图片</td>
                                    <td>操作</td>
                                </tr>
                                @foreach($data as $k=>$v)
                                    <tr class="text-center">
                                        <td class="small-col"><input type="checkbox" /></td>
                                        <td >{{ $v->id }}</td>
                                        <td >{{ $v->name }}</td>
                                        <td >{{ $v->content }}</td>
                                        <td >{{ $v->url }}</td>
                                        <td > <img src="/{{ $v->pic }}" alt="" height="50px"> </td>
                                        <td >
                                            
                                            <a href="/admin/guang/destroy/{{$v->id}}" class="btn btn-danger">删除</a>
                                            <a href="/admin/guang/edit/{{$v->id}}" class="btn btn-warning">修改</a>
                                        </td>
                                    </tr> 
                                @endforeach
                                </table>
                                
                            </div><!-- /.table-responsive -->
                        </div><!-- /.col (RIGHT) -->
                    </div><!-- /.row -->
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                    <div class="pages pull-right">
                        {!! $data->appends(['search'=>$search])->render() !!}
                    </div>
                </div><!-- box-footer -->
            </div><!-- /.box -->
        </div><!-- /.col (MAIN) -->
    </div>
    <!-- MAILBOX END -->

</section><!-- /.content -->



@endsection








