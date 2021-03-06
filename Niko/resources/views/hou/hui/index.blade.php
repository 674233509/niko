@extends('muban.houtai.ban')
@section('hou.index')
	

    
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade in" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span></button>
            {{ session('success') }}
        </div>
    @endif
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
                        	
                            <div style="margin-top: 15px;">
                                
                            </div>
                        <!--下拉框-->
                        


                        </div><!-- /.col (LEFT) -->
                        <div class="col-md-9 col-sm-8">
                            <div class="row pad">
                                <div class="col-sm-6" >
                                   
                                    <!-- Action button -->
                                </div>
                                


                                
                            </div>
                               
                            </div><!-- /.row -->
                                
                            <div class="container" style="float:right;width:100%;margin-top:30px">
                                <!-- THE MESSAGES -->
                                <div class="col-sm-6 search-form" style="float:right">
                                    <form action="#" class="text-right">
                                        <div class="input-group">
                                            <input type="text" name="search" class="form-control input-sm" placeholder="请输入内容">
                                            <div class="input-group-btn">
                                                <button type="submit" name="" class="btn btn-sm btn-primary"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>                      
                                    </form>
                                </div>
                                 {{ csrf_field() }}
                                <table class="table table-bordered table-striped  table-hover">
                                <tr class="unread text-center">
                                

                                    <td>ID</td>
                                    <td>文章ID</td>
                                    <td>评论内容</td>
                                    <td>用户ID</td>
                                    <td>用户头像</td>
                                    <td>评论时间</td>
                                    <td>评论IP</td>
                                    <td>操作</td>
                                </tr>
                                @foreach ($del_data as $k => $v)
                                    <tr class="text-center">
                                      	<td >{{ $v->id }}</td>
                                        <td >{{ $v->wid }}</td>
                                        <td >{{ $v->content }}</td>
                                        <td >{{ $v->qweqwe['username'] }}</td>
                                        <td ><img src="/{{$v->qweqwe['pic']}}" height="50px"></td>
                                        <td >{{ $v->ptime }}</td>
                                        <td >{{ $v->pip }}</td>
                                        <td>
                                            <a href="/admin/sn/hui/reset/{{ $v->id }}" class="btn btn-danger">恢复</a>
                               
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
                       {!! $del_data->appends(['search'=>$search])->render() !!}
                       
                    </div>
                </div><!-- box-footer -->
            </div><!-- /.box -->
        </div><!-- /.col (MAIN) -->
    </div>



@endsection
