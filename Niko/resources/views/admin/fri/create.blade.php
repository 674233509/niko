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
        <form role="form" action="{{ url('/admin/fri/store') }}" method="post" enctype="multipart/form-data" >
          {{ csrf_field() }}
            <div class="box-body">
                <div class="form-group">
                    <label for="title">标题</label>
                    <input type="text" class="form-control"  name="title" id="title" placeholder="title">
                </div>
                

                <div class="form-group">
                    <label for="content">内容</label>
                    <input type="text" name="content" class="form-control" id="content" placeholder="content">
                </div> 
                <div class="form-group">
                    <label for="url">地址</label>
                    <input type="text" name="url" class="form-control" id="url" placeholder="url">
                </div>
				
				
                <div class="form-group">
                    <label for="pic">头像上传</label>
                    <input type="file"  id="pic" name="pic">
                    <p class="help-block">一个美丽的心情从头像开始.</p>
                </div>
                

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">提交</button>
            </div>
        </form>
    </div>
</div><!-- /.box -->

                           
@endsection