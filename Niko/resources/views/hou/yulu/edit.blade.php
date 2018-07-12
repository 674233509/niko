@extends('muban.houtai.ban')
 @section('hou.index')
 <!-- 配置文件 -->
    <script type="text/javascript" src="/chajian\baidubianji\utf8-php/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/chajian\baidubianji\utf8-php/ueditor.all.js"></script>
     
<form role="form" action="/admin/sn/yulu/update/{{ $data->id }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="col-xs-12">
<div class="box-header">
    <h3 class="box-title">更改经典语录</h3>                                    
</div>

    <div class="box-body">
        <div class="form-group">
            <label for="exampleInputEmail1">语录出自</label>
            <input type="test" class="form-control" name="name" id="exampleInputEmail1" value="{{ $data->name }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">语录内容</label>
            <input type="test" class="form-control" name="content" id="exampleInputEmail1" value="{{ $data->content }}">        </div>
         </div><!-- /.box-body -->

    <div class="box-footer">
        <button type="submit" class="btn btn-primary">点击修改</button>
    </div>
</form>
</div> 
 @endsection