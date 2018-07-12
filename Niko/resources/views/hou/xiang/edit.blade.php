@extends('muban.houtai.ban')
 @section('hou.index')
 <!-- 配置文件 -->
    <script type="text/javascript" src="/chajian\baidubianji\utf8-php/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/chajian\baidubianji\utf8-php/ueditor.all.js"></script>
     
<form role="form" action="/admin/sn/xiang/update/{{ $data->id }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="col-xs-12">

<div class="box-header">
    <h3 class="box-title">添加相册</h3>                                    
</div>
    <img src=" {{ $data->pic }} " alt="" width="200px">

<div class="form-group">

            <label for="lunpic">上传相册封面</label>
            <input type="file" id="pic" name="pic">
            <p class="help-block">请选择需要上传相册的封面</p>
        </div>
    <div class="box-body">
        <div class="form-group">
            <label for="exampleInputEmail1">相册名字</label>
            <input type="test" class="form-control" name="name" id="exampleInputEmail1" value="{{ $data->name }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">相册描述</label>
            <input type="test" class="form-control" name="content" id="exampleInputEmail1" value="{{ $data->content }}">        </div>
         </div><!-- /.box-body -->

    <div class="box-footer">
        <button type="submit" class="btn btn-primary">点击上传</button>
    </div>
</form>
</div> 
 @endsection