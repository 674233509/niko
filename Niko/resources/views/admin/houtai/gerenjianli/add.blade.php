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
        <form role="form" action="{{ url('/admin/houtai/user/store') }}" method="post" enctype="multipart/form-data" id="myform" >
          {{ csrf_field() }}
            <div class="box-body">
                <div class="form-group">
                    <label for="username">用户账号</label>
                    <input type="text" class="form-control"  name="username" id="username" placeholder="username" value="{{ old('username') }}" ><span></span>
                </div>
               
                <div class="form-group">
                    <label for="mail">邮箱</label><span></span>
                    <input type="email" name="mail" class="form-control" id="mail" placeholder="email" value="{{ old('mail') }}">
                </div> 
                <div class="form-group">
                    <label for="tel">手机号</label><span></span>
                    <input type="phone" name="tel" class="form-control" id="tel" placeholder="phone" value="{{ old('tel') }}" >
                </div>

                <div class="form-group">
                    <label for="tel">QQ</label><span></span>
                    <input type="text" name="qq" class="form-control" id="qq" placeholder="qq" value="{{ old('qq') }}" >
                </div>
				
                <div class="form-group">
                    <label for="dizhi">地址</label>
                    <input type="text" class="form-control"  name="dizhi" id="dizhi" placeholder="address" value="{{ old('dizhi') }}" ><span></span>
                </div>

                <div class="form-group">
                    <label for="jieshao">介绍</label>
                    <textarea type="text" class="form-control"  name="jieshao" id="jieshao" placeholder="introduce" value="{{ old('jieshao') }}" ></textarea><span></span>
                </div>
                <label for="">教育经历</label>
                <div class="form-group">
                    <label for="edu1">计算机科学理学硕士</label>
                    <textarea type="text" class="form-control"  name="edu1" id="edu1" placeholder="education" value="{{ old('edu1') }}" ></textarea><span></span>

                </div>
                <div class="form-group">
                    <label for="edu2">计算机工程研究生</label>
                    <textarea type="text" class="form-control"  name="edu2" id="edu2" placeholder="education" value="{{ old('edu2') }}" ></textarea><span></span>

                </div>
                <div class="form-group">
                    <label for="edu3">大学</label>
                    <textarea type="text" class="form-control"  name="edu3" id="edu3" placeholder="education" value="{{ old('edu3') }}" ></textarea><span></span>

                </div>

                <div class="form-group">
                    <label for="edu4">学院</label>
                    <textarea type="text" class="form-control"  name="edu4" id="edu4" placeholder="education" value="{{ old('edu4') }}" ></textarea><span></span>

                </div>
                
                <label for="">工作经历</label>
                <div class="form-group">
                    <label for="zhiwei">职位</label>
                    <input type="text" class="form-control"  name="zhiwei" id="zhiwei" placeholder="zhiwei" value="{{ old('zhiwei') }}" >
                    <label for="gztime">时间</label>
                    <input type="text" class="form-control"  name="gztime" id="gztime" placeholder="gztime" value="{{ old('gztime') }}" >
                    <label for="works1">工作经历01</label>
                    <textarea type="text" class="form-control"  name="works1" id="works1" placeholder="works" value="{{ old('works1') }}" ></textarea><span></span>

                </div>
                <div class="form-group">
                    <label for="zhiwei">职位</label>
                    <input type="text" class="form-control"  name="zhiwei" id="zhiwei" placeholder="zhiwei" value="{{ old('zhiwei') }}" >
                    <label for="gztime">时间</label>
                    <input type="text" class="form-control"  name="gztime" id="gztime" placeholder="gztime" value="{{ old('gztime') }}" >
                    <label for="works2">工作经历02</label>
                    <textarea type="text" class="form-control"  name="works2" id="works2" placeholder="works" value="{{ old('works2') }}" ></textarea><span></span>

                </div>

                <div class="form-group">
                    <label for="zhiwei">职位</label>
                    <input type="text" class="form-control"  name="zhiwei" id="zhiwei" placeholder="zhiwei" value="{{ old('zhiwei') }}" >
                    <label for="gztime">时间</label>
                    <input type="text" class="form-control"  name="gztime" id="gztime" placeholder="gztime" value="{{ old('gztime') }}" >
                    <label for="works3">工作经历03</label>
                    <textarea type="text" class="form-control"  name="works3" id="works3" placeholder="works" value="{{ old('works3') }}" ></textarea><span></span>

                </div>
                
                <div class="form-group">
                    <label for="zuopin">作品上传</label>
                    <input type="file"  id="pic" name="zuopin" >
                    
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
                    <label for="pic"><font color="red"> *头像上传</font></label>
                    <input type="file"  id="pic" name="pic" >
                    <p class="help-block">一个美丽的心情从头像开始.请选择头像</p>
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
                <button type="submit" onclick="zhuce()" class="btn btn-primary">提交</button>
            </div>
        </form>
       <script src="/yangshi/js/houtaiyanzheng.js"></script>
    </div>
</div><!-- /.box -->

                           
@endsection