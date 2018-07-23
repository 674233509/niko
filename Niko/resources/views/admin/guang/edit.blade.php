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
        <form role="form" action="/admin/guang/update/{{ $data->id}}" enctype="multipart/form-data" method="post">
          {{ csrf_field() }}
            <div class="box-body">
                <div class="form-group">
                    <label for="name">广告名称</label>
                    <input type="text" class="form-control"  name="name" id="name" value="{{ $data->name }}" placeholder="name">
                </div>
                

                <div class="form-group">
                    <label for="content">广告内容</label>
                    <input type="content" name="content" class="form-control" id="content" value="{{ $data->content }}" placeholder="content">
                </div> 
                <div class="form-group">
                    <label for="url">广告地址</label>
                    <input type="text" name="url" class="form-control" id="url" value="{{ $data->url }}" placeholder="url">
                </div>

                <div class="form-group">
                    <label for="pic">广告图片</label>
                    <input type="file" id="pic"  name="pic"><img  src="/{{ $data->pic }}" height="100px">
                  
                </div>
            </div><!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">提交</button>
            </div>
        </form>
    </div>
</div><!-- /.box -->

                           
@endsection