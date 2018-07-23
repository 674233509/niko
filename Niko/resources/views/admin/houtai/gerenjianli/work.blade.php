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
        <form role="form" action="/admin/houtai/work/store" enctype="multipart/form-data" method="post">
          {{ csrf_field() }}
            <div class="box-body">
                <div class="form-group">
                    <label for="username">用户</label>
                    <input type="text" class="form-control"  name="username" id="username" value="{{session('user')}}" placeholder="username" readonly>
                </div>
                <div class="form-group">
                    <label for="worktime1">工作时间 1</label>
                    <input type="text" class="form-control"  name="worktime1" id="worktime1" value="" placeholder="工作时间">
                   
                </div>
                <div class="form-group">
                    <label for="workzhiwei1">工作职位 1</label>
                    <input type="text" class="form-control"  name="workzhiwei1" id="workzhiwei1" value="" placeholder="工作职位">
                    <label for="edu1">工作职责 1</label>
                    <textarea type="text" class="form-control"  name="workcontent1" id="workcontent1" value="" placeholder="工作职责"></textarea>
                </div>
                <div class="form-group">
                    <label for="worktime2">工作时间 2</label>
                    <input type="text" class="form-control"  name="worktime2" id="worktime2" value="" placeholder="工作时间">
                   
                </div>
                <div class="form-group">
                    <label for="workzhiwei2">工作职位 2</label>
                    <input type="text" class="form-control"  name="workzhiwei2" id="workzhiwei2" value="" placeholder="工作职位">
                    <label for="workcontent2">工作职责 2</label>
                    <textarea type="text" class="form-control"  name="workcontent2" id="workcontent2" value="" placeholder="工作职责"></textarea>
                </div>

                <div class="form-group">
                    <label for="worktime3">工作时间 3</label>
                    <input type="text" class="form-control"  name="worktime3" id="worktime3" value="" placeholder="工作时间">
                   
                </div>
                <div class="form-group">
                    <label for="workzhiwei3">工作职位 3</label>
                    <input type="text" class="form-control"  name="workzhiwei3" id="workzhiwei3" value="" placeholder="工作职位">
                    <label for="workcontent3">工作职责 3</label>
                    <textarea type="text" class="form-control"  name="workcontent3" id="workcontent3" value="" placeholder="工作职责"></textarea>
                </div>                

                
            </div><!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary form-control">提交</button>
            </div>
        </form>
    </div>
</div><!-- /.box -->

                           
@endsection