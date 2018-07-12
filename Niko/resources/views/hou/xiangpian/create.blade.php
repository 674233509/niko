@extends('muban.houtai.ban')
 @section('hou.index')
<!-- 配置文件 -->
    <script type="text/javascript" src="/chajian\baidubianji\utf8-php/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/chajian\baidubianji\utf8-php/ueditor.all.js"></script>
<form role="form" action="/admin/sn/xiang/cunpian" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="col-xs-12">
<div class="box-header">
    <h3 class="box-title">添加相片</h3>                                    
</div>
<div class="form-group">
            <label for="lunpic">上传相片</label>
            <input type="file" id="pic" name="pic[]" multiple>
            <p class="help-block">请选择需要上传的相片</p>
        </div>
        <div class="form-group">
            <label>所属相册</label>
            <select class="form-control" name="xid">
                @foreach ($data as $k => $v)
                    <option  value="{{ $v->id }}">{{ $v->name }}</option>
                @endforeach
            </select>
        </div>
    <div class="box-body">
        <div class="form-group">
            <label for="exampleInputEmail1">相片名字</label>
            <input type="test" class="form-control" name="name" id="exampleInputEmail1" placeholder="请输入相册名字">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">相片描述</label>
            <input type="test" class="form-control" name="content" id="exampleInputEmail1" placeholder="请输入相册详情">        </div>
         </div><!-- /.box-body -->

    <div class="box-footer">
        <button type="submit" class="btn btn-primary">点击上传</button>
    </div>
</form>
</div> 
 @endsection