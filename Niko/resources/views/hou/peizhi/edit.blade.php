@extends('muban.houtai.ban')
 @section('hou.index')
  <!-- left column -->
<div class="" style="width:800px;margin:0px auto">
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="text-center text-info" style="text-align:center">{{ $title }}</h3>
        </div><!-- /.box-header -->

		@if(session('error'))
		<div class="alert alert-danger alert-dismissible fade in" role="alert">
	      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	      <span aria-hidden="true">×</span></button>
	    {{ session('error') }}
		</div>
	    @endif
        <!-- form start -->
        <form role="form" action="/admin/sn/peizhi/update/{{ $data->id}}" enctype="multipart/form-data" method="post">
          {{ csrf_field() }}
            <div class="box-body">
                <div class="form-group">
                    <label for="hand">网站名称</label>
                    <input type="text" class="form-control"  name="hand" id="hand" value="{{ $data->hand }}" placeholder="请输入修改的名称">
                </div>
                

                <div class="form-group">
                    <label for="title">网站关键字</label>
                    <input type="text" name="title" class="form-control" id="title" value="{{ $data->title }}" placeholder="请输入修改的标题">
                </div> 
                <div class="form-group">
                    <label for="kami">网站版权</label>
                    <input type="text" name="kami" class="form-control" id="kami" value="{{ $data->kami }}" placeholder="请输入修改的版权">
                </div>
                

                <div class="form-group">
                    <label for="open">网站状态</label>
                     <select name="open" id="peizhiid" class="required" value="{{$data->open}}">
                                    <option value="1" selected>打开</option>
                                    <option value="2" >关闭</option>
                     </select>

                </div>

                </div>
                <div class="form-group">
                    <label for="logo">网站图片</label>
                    <input type="file" id="logo"  name="logo"><img  src="/{{ $data->logo }}" height="50px">
                
                </div>
            </div><!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">提交</button>
            </div>
        </form>
    </div>
</div><!-- /.box -->

                           
@endsection