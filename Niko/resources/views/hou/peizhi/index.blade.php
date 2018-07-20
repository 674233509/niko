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
                                
                                 {{ csrf_field() }}
                    <table class="table table-bordered table-striped  table-hover">
                                <tr class="unread text-center">

                                    <td>ID</td>
                                    <td>网站名称</td>
                                    <td>网站关键字</td>
                                    <td>网站版权</td>
                                    <td>网站logo</td>
                                    <td>网站开关</td>
                                    <td>操作</td>
                                </tr>
                                @foreach($data as $k=>$v)
                                    <tr class="text-center">
                                        
                                        <td >{{ $v->id }}</td>
                                        <td >{{ $v->hand }}</td>
                                        <td >{{ $v->title }}</td>
                                        <td >{{ $v->kami }}</td>
                                        <td > <img src="/{{ $v->logo }}" alt="" height="50px"> </td>
                                        <td >
                                             @if (($v->open) === '1')
                                             {{'打开'}}
                                        @elseif (($v->open) === '2')
                                                {{'关闭'}}
                                        @endif
                                        </td>
                                        
                                        <td >
                                            
                                            <a href="/admin/sn/peizhi/destroy/{{ $v->id }}" class="btn btn-danger">删除</a>
                                            <a href="/admin/sn/peizhi/edit/{{$v->id}}" class="btn btn-warning">修改</a>
                                            <a href="/admin/sn/peizhi/enable/{{$v->id}} " class="btn btn-success btn-sm">启用</a>
                                        </td>
                                    </tr> 
                                @endforeach
                                </table>
                            </form>
                                
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








