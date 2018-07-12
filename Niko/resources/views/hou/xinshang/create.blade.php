@extends('muban.houtai.ban')
 @section('hou.index')
<!-- 配置文件 -->
    <script type="text/javascript" src="/chajian\baidubianji\utf8-php/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/chajian\baidubianji\utf8-php/ueditor.all.js"></script>
     
<form role="form" action="/admin/sn/xin/store" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="col-xs-12">
<div class="box-header">
    <h3 class="box-title">添加欣赏</h3>                                    
</div>
<div class="form-group">
            <label for="lunpic">上传图片</label>
            <input type="file" id="lunpic" name="pic">
            <p class="help-block">请选择需要上传欣赏的图片</p>
        </div>
    <div class="box-body">
        <div class="form-group">
            <label for="exampleInputEmail1">欣赏题目</label>
            <input type="test" class="form-control" name="title" id="exampleInputEmail1" placeholder="请输入欣赏标题">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">欣赏内容</label>
            
            <!-- 加载编辑器的容器 -->
            <script id="container" name="content"  type="text/plain" style="height:300px">这里填写欣赏内容</script>
            <!-- 实例化编辑器 -->
            <script type="text/javascript">
                var ue = UE.getEditor('container');
            </script>
        </div>
        
        
    </div><!-- /.box-body -->

    <div class="box-footer">
        <button type="submit" class="btn btn-primary">点击上传</button>
    </div>
</form>
</div> 
 @endsection