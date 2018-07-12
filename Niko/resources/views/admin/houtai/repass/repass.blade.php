@extends('muban.houtai.ban')
 @section('hou.index')
  <!-- left column -->
<div class="" style="width:800px;margin:0px auto">
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="text-center text-info" style="text-align:center">{{ $title }}</h3>
        </div><!-- /.box-header -->

		@if(session('error'))
		<div class="alert alert-danger alert-dismissible fade in" role="alert">
	      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	      <span aria-hidden="true">×</span></button>
	    {{ session('error') }}
		</div>
	    @endif
        <!-- form start -->
        <form role="form" action="{{ url('/admin/houtai/repass/store') }}" method="post" enctype="multipart/form-data" id="myform" >
          {{ csrf_field() }}
            <div class="box-body">
                <div class="form-group">
                    <label for="username">用户账号</label>
                    <input type="text" class="form-control"  name="username" id="username" placeholder="username" value="{{ old('username') }}"><span></span>
                </div>
                <div class="form-group">
                    <label for="tel">手机号</label><span></span>
                    <input type="phone" name="tel" class="form-control" id="tel" placeholder="phone" value="{{ old('tel') }}">
                </div>
                <div class="form-group">
                    <label for="password">原密码</label>
                    <input type="password" name="oldpass" class="form-control" id="oldpass" placeholder="oldpassword"><span></span>
                </div>

                <div class="form-group">
                    <label for="password">新密码</label>
                    <input type="password" name="newpass" class="form-control" id="newpass" placeholder="newpassword"><span></span>
                </div>

                <div class="form-group">
                    <label for="password">确认密码</label><span></span>
                    <input type="password" name="repass" class="form-control" id="repass" placeholder="repass">
                </div>

            </div><!-- /.box-body -->

            <div class="box-footer ">
                <button type="submit" class="btn btn-primary form-control">提交</button>
            </div>
        </form>
       
    </div>
</div><!-- /.box -->

                           
@endsection