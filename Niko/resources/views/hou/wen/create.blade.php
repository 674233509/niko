@extends('muban.houtai.ban')
 @section('hou.index')
  @if(session('success'))
        <div class="alert alert-success alert-dismissible fade in" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span></button>
            {{ session('success') }}
        </div>
@endif
@if(session('error'))
        <div class="alert alert-danger alert-dismissible fade in" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span></button>
        {{ session('error') }}
        </div>
@endif
<!-- 配置文件 -->
    <script type="text/javascript" src="/chajian\baidubianji\utf8-php/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/chajian\baidubianji\utf8-php/ueditor.all.js"></script>
     
<form role="form" action="/admin/sn/wen/store" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="col-xs-12">
<div class="box-header">
    <h3 class="box-title">添加文章</h3>                                    
</div>
<div class="form-group">
            <label for="lunpic">上传图片</label>
            <input type="file" id="lunpic" name="pic">
            <p class="help-block">请选择需要上传文章的封面</p>
        </div>
    <div class="box-body">
        <div class="form-group">
            <label for="exampleInputEmail1">文章题目</label>
            <input type="test" class="form-control" name="title" id="exampleInputEmail1" placeholder="请输入文章标题">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">文章内容</label>
            
            <!-- 加载编辑器的容器 -->
            <script id="container" name="content"  type="text/plain" style="height:300px">
这里填写文章内容
            </script>
            <!-- 实例化编辑器 -->
            <script type="text/javascript">
                var ue = UE.getEditor('container');
            </script>
        </div>
         <div class="form-group">
            <label for="exampleInputEmail1">请选择标签</label>
            @foreach ($biao as $k => $v)
            <input type="checkbox" name="biao[]" value="{{ $v->id }}"> {{ $v->name }}

            @endforeach
        </div>
        
    </div><!-- /.box-body -->

    <div class="box-footer">
        <button type="submit" class="btn btn-primary">点击上传</button>
    </div>
</form>
</div> 
 @endsection