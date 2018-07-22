@extends('muban.houtai.ban')
 @section('hou.index')
<!-- 配置文件 -->
    <script type="text/javascript" src="/chajian\baidubianji\utf8-php/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/chajian\baidubianji\utf8-php/ueditor.all.js"></script>
     
<form role="form" action="/admin/sn/time/update/{{$data->id}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="col-xs-12">
<div class="box-header">
    <h3 class="box-title">修改时间轴</h3>                                    
</div>

    <div class="box-body">
        
        <div class="form-group">
            <label for="exampleInputPassword1"></label>
            
            <!-- 加载编辑器的容器 -->
            <script id="container" name="content"  type="text/plain" style="height:300px">
        {!! $data->content !!}
            </script>
            <!-- 实例化编辑器 -->
            <script type="text/javascript">
                var ue = UE.getEditor('container');
            </script>
        </div>
        
    </div><!-- /.box-body -->

    <div class="box-footer">
        <button type="submit" class="btn btn-primary">提交</button>
    </div>
</form>
</div> 
 @endsection