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
        <form role="form" action="{{ url('/admin/houtai/user/store') }}" method="post" enctype="multipart/form-data" id="myform" >
          {{ csrf_field() }}
            <div class="box-body">
                <div class="form-group">
                    <label for="username">用户账号</label>
                    <input type="text" class="form-control"  name="username" id="username" placeholder="username">
                </div>
                <div class="form-group">
                    <label for="password">密码</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="password">
                </div>

                <div class="form-group">
                    <label for="password">确认密码</label>
                    <input type="password" name="repass" class="form-control" id="repass" placeholder="repass">
                </div>

                <div class="form-group">
                    <label for="mail">邮箱</label>
                    <input type="email" name="mail" class="form-control" id="mail" placeholder="email">
                </div> 
                <div class="form-group">
                    <label for="tel">手机号</label>
                    <input type="tel" name="tel" class="form-control" id="tel" placeholder="phone">
                </div>
				
				<div class="form-group">
					<tr>
                        <label for="sex">性别:&nbsp;</label>
                        <td>
                            <input class="common-text required" id="title" name="sex" size="50" value="w" type="radio" checked>&nbsp;女
                            <input class="common-text required" id="title" name="sex" size="50" value="m" type="radio">&nbsp;男
                        </td>
                    </tr>
				</div>

                <div class="form-group">
                    <label for="pic">头像上传</label>
                    <input type="file"  id="pic" name="pic">
                    <p class="help-block">一个美丽的心情从头像开始.</p>
                </div>
                <div class="form-group text-center" style="margin-top:-60px">
                <tr class="text-center" >
                    <th width="120"><i class="require-red"><font color="red" size="3">*&nbsp;</i>权限：</font></th>
                    <td>
                        <select  name="qx" id="qx" class="required">
                        	<option value="2">普通用户</option>
                            <option value="1">管理员</option>
                            
                        </select>
                    </td>
                </tr>
               </div>
            </div><!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">提交</button>
            </div>
        </form>
        
    </div>
</div><!-- /.box -->

                           
@endsection