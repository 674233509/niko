@extends('muban.houtai.ban')
 @section('hou.index')
<!-- 配置文件 -->
    <script type="text/javascript" src="/chajian\baidubianji\utf8-php/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/chajian\baidubianji\utf8-php/ueditor.all.js"></script>
     
<form role="form" action="/admin/sn/biao/store" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="col-xs-12">
<div class="box-header">
    <h3 class="box-title">添加标签</h3>                                    
</div>
    <div class="box-body">
        <div class="form-group">
            <label for="exampleInputEmail1">标签名字</label>
            <input type="test" class="form-control" name="name" id="exampleInputEmail1" placeholder="请输入标签名称" style="width:50%">
        </div>
        
        
        
    </div><!-- /.box-body -->

    <div class="box-footer">
        <button type="submit" class="btn btn-primary">点击上传</button>
    </div>
</form>
</div> 
 @endsection