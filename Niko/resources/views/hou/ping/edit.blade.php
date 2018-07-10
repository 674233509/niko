@extends('muban.houtai.ban')
@section('hou.index')


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
        <form role="form" action="/admin/sn/ping/update/{{ $data->id}}" method="post" enctype="multipart/form-data" >
          {{ csrf_field() }}
            <div class="box-body">
                <div class="form-group">
                    <label for="wid">文章ID</label>
                    <input type="text" class="form-control"  name="wid" id="wid" value="{{ $data->wid }}" placeholder="wid">
                </div>
                

                <div class="form-group">
                    <label for="content">内容</label>
                    <input type="text" name="content" class="form-control" id="content" value="{{ $data->content }}" placeholder="content">
                </div> 
                
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">提交</button>
            </div>
        </form>
    </div>
</div><!-- /.box -->

@endsection