@extends('muban.houtai.ban')
 @section('hou.index')
 <script>
;!function(){
  //无需再执行layui.use()方法加载模块，直接使用即可
  var form = layui.form
  ,layer = layui.layer;
  //layer.msg('Hello World');
  //…
}();
</script> 
  <!-- left column -->
<div class="text-info" style="width:400px;margin:110px auto;">
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="text-info" > &nbsp;&nbsp;{{ $title }}</h3>
        </div><!-- /.box-header -->

       
        <!-- form start -->
        
            <div class="box-body">
                <div class="form-group">
                     <label for="picc">
                     <img id="profile" src="\{{ session('pic') }}" width="80" height="80" style="margin:-40px 150px;" for="picc" class="img-circle">
                     </label>
                   
                </div>
                {{ csrf_field() }}
                <button type="button"  class="layui-btn" id="picc" style="display:none">
                <i class="layui-icon">&#xe67c;</i>上传图片
                </button>
                 
                <script src="/static/build/layui.js"></script>
                <script>
                layui.use('upload', function(){
                  var upload = layui.upload;
                   
                  //执行实例
                  var uploadInst = upload.render({
                    elem: '#picc' //绑定元素
                    ,url: '/admin/houtai/jianjie/uploads' //上传接口
                    ,data:{'_token':$('input[type=hidden]').val()}
                    ,field:'picc'
                    ,done: function(res){
                      //上传完毕回调
                      if(res.code == 0){
                         //layer.msg(res.msg, {icon: 6});
                         $('#profile').attr('src',res.data.src);
                      }else{
                         layer.msg(res.msg, {icon: 5});
                      }
                    }
                    ,error: function(){
                      //请求异常回调
                    }
                  });
                });

              
                </script>
                    
                   
                
                <br><br>
                <a style="float:right" href="/admin/houtai/user/edit/{{session('idd')}}" class="btn btn-success">编辑资料</a>
                <br><br><br>
                <div class="form-group">
                    <label for="username">账　号　：{{ session('user') }}</label>
                   
                   
                </div> 
                <div class="form-group">
                    <label for="tel">电　话　：{{ session('tel') }}</label>
                   
                </div>
                <div class="form-group">
                    <label for="username">权　限　：
                    @if(session('qx')=='1')
                        管理员
                        @else if(session('qx')=='2')
                        会员用户
                        @endif
                    </label>
                   
                </div>
                

                <div class="form-group">
                    <label for="mail">邮　箱　：{{ session('mail') }}</label>
                   
                </div> 
                
                
                <div class="form-group">
                    <tr>
                        <label for="sex">性　别　：
                        @if(session('sex')=='m')
                        男
                        @else if(session('sex')=='w')
                        女
                        @endif
                       
                        </label>
                       
                    </tr>
                </div>

                
                
            </div><!-- /.box-body -->

            <div class="box-footer">
               
            </div>
       
    </div>
</div><!-- /.box -->

                           
@endsection