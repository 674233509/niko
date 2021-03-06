@extends('muban.houtai.ban')
 @section('hou.index')

 @if (count($errors) > 0)
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span></button>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
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
        <form role="form" action="/admin/houtai/user/update/{{ $data->id}}" enctype="multipart/form-data" method="post">
          {{ csrf_field() }}
            <div class="box-body">
                <div class="form-group">
                    <label for="username">用户账号</label>
                    <input type="text" class="form-control"  name="username" id="username" value="{{$data->username}}" placeholder="username">
                </div>
                <div class="form-group">
                    <label for="password">修改密码</label>
                    <input type="password" name="password" class="form-control" id="password" value="{{$data->password}}" placeholder="password">
                </div>

                <div class="form-group">
                    <label for="password">确认密码</label>
                    <input type="password" name="repass" class="form-control" id="repass" value="{{$data->password}}" placeholder="repass">
                </div>

                <div class="form-group">
                    <label for="mail">邮箱</label>
                    <input type="email" name="mail" class="form-control" id="mail" value="{{$data->mail}}" placeholder="email">
                </div> 
                <div class="form-group">
                    <label for="tel">手机号</label>
                    <input type="tel" name="tel" class="form-control" id="mail" value="{{$data->tel}}" placeholder="phone">
                </div>

                <div class="form-group">
                    <label for="qq">QQ</label>
                    <input type="text" name="qq" class="form-control" id="qq" value="{{$data->qq}}" placeholder="qq">
                </div>
				
                <div class="form-group">
                    <label for="dizhi">地址</label>
                    <input type="text" class="form-control"  name="dizhi" id="dizhi" value="{{$data->dizhi}}" placeholder="address">
                </div>

				<div class="form-group">
					<tr>
                        <label for="sex">性别:&nbsp;</label>
                        <td>
                            <input class="common-text required" id="title" name="sex" size="50" value="w" type="radio" @if($data ->sex == 'w') checked @endif>&nbsp;女
                            <input class="common-text required" id="title" name="sex" size="50" value="m" type="radio" @if($data ->sex == 'm')checked @endif>&nbsp;男
                        </td>
                    </tr>
				</div>

                <div class="form-group">
                    <label for="pic">修改头像</label>
                    <input type="file" id="pic" value="/{{ $data->pic }}" name="pic"><img name="img" width="70px" src="/{{ $data->pic }}">
                    <p class="help-block">一个美丽的心情从头像开始.</p>
                </div>
                <div class="form-group text-center" style="margin-top:-60px">
                <tr class="text-center" >
                    <th width="120"><i class="require-red"><font color="red" size="3">*&nbsp;</i>权限：</font></th>
                    <td>
                        <select  name="qx" id="qx" class="required">
                        	<option value="2" @if($data->qx == '2')selected @endif>会员用户</option>
                            <option value="1" @if($data->qx == '1')selected @endif>管理员</option>
                            
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