@extends('muban.houtai.ban')
 @section('hou.index')
<form role="form" action="/admin/sn/lun/store" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
    <div class="box-body">
        <div class="form-group">
            <label for="exampleInputEmail1">图片名称</label>
            <input type="test" class="form-control" name="name" id="exampleInputEmail1" placeholder="请输入图片名称">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">图片描述</label>
            <input type="text" class="form-control" name="content"  id="exampleInputPassword1" placeholder="请输入图片描述">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">图片链接</label>
            <input type="text" class="form-control" name="url"  id="exampleInputPassword1" placeholder="请输入图片链接">
        </div>
        <div class="form-group">
            <label for="lunpic">上传文件</label>
            <input type="file" id="lunpic" name="pic">
            <p class="help-block">请选择需要上传的图片</p>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox"> 检查无误，确认上传
            </label>
        </div>
    </div><!-- /.box-body -->

    <div class="box-footer">
        <button type="submit" class="btn btn-primary">点击上传</button>
    </div>
</form>
 @endsection