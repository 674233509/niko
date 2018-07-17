@extends('muban.houtai.ban')
 @section('hou.index')
  <!-- left column -->
<div class="" style="width:400px;margin:110px auto">
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="text-info" > &nbsp;&nbsp;{{ $title }}</h3>
        </div><!-- /.box-header -->

       
        <!-- form start -->
        
            <div class="box-body">
                <div class="form-group">
                     <p for="pic"><img src="\{{ session('pic') }}" width="80" height="80" style="margin:-40px 150px;" class="img-circle"></p>
                   
                </div>
                
                    
                   
                
                <br><br>
                <a style="float:right" href="/admin/houtai/user/edit/{{session('id')}}" class="btn btn-success">编辑资料</a>
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