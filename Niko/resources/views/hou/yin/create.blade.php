
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
        <form role="form" action="/admin/sn/yin/store" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
            <div class="box-body">
                <div class="form-group">
                    <label for="name">歌名</label>
                    <input type="text" class="form-control"  name="name" id="name" placeholder="请输入歌名">
                </div>
                

                <div class="form-group">
                    <label for="zuozhe">作者</label>
                    <input type="text" name="zuozhe" class="form-control" id="zuozhe" placeholder="请输入作者">
                </div> 
                <div class="form-group">
                    <label for="zhuanji">专辑</label>
                    <input type="text" name="zhuanji" class="form-control" id="zhuanji" placeholder="请输入专辑">
                </div>
				 
				<label>上传mp3文件：.mp3</label> 
				<input type="file" name="mp3" id="file"><br><!--type="file"表示输入作为文件-->

            <div class="box-footer">
            
                <button type="submit" class="btn btn-primary">提交</button>
            
            </div>
        </form>
    </div>
</div><!-- /.box -->





 @endsection