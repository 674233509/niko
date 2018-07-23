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
        <form role="form" action="/admin/houtai/gerenjianli/update/{{session('idd')}}" enctype="multipart/form-data" method="post">
          {{ csrf_field() }}
            <div class="box-body">
                
                <div class="form-group">
                    <label for="username">用户</label>
                    <input type="text" class="form-control"  name="username" id="username" value="{{session('user')}}" placeholder="username" readonly>
                </div>
                
                 <div class="form-group">
                    <label for="edutime1">教育时间 1</label>
                    <input type="text" class="form-control"  name="edutime1" id="edutime1" value="{{$data->edutime1}}" placeholder="edutime">
                   
                </div>
                <div class="form-group">
                    <label for="edut1">教育阶段 1</label>
                    <input type="text" class="form-control"  name="edut1" id="edut1" value="{{$data->edut1}}" placeholder="edutitle">
                    <label for="edu1">教育历程 1</label>
                    <textarea type="text" class="form-control"  name="edu1" id="edu1" value="" placeholder="education">{{$data->edu1}}</textarea>
                </div>
                
                <div class="form-group">
                    <label for="edutime2">教育时间 2</label>
                    <input type="text" class="form-control"  name="edutime2" id="edutime2" value="{{$data->edutime2}}" placeholder="edutime">
                   
                </div>
                <div class="form-group">
                    <label for="edut2">教育阶段 2</label>
                    <input type="text" class="form-control"  name="edut2" id="edut2" value="{{$data->edut2}}" placeholder="edutitle">
                    <label for="edu2">教育历程 2</label>
                    <textarea type="text" class="form-control"  name="edu2" id="edu2" value="" placeholder="education">{{$data->edu2}}</textarea>
                </div>

                <div class="form-group">
                    <label for="edutime3">教育时间 3</label>
                    <input type="text" class="form-control"  name="edutime3" id="edutime3" value="{{$data->edutime3}}" placeholder="edutime">
                   
                </div>
                <div class="form-group">
                    <label for="edut3">教育阶段 3</label>
                    <input type="text" class="form-control"  name="edut3" id="edut3" value="{{$data->edut3}}" placeholder="edutitle">
                    <label for="edu3">教育历程 3</label>
                    <textarea type="text" class="form-control"  name="edu3" id="edu3" value="" placeholder="education">{{$data->edu3}}</textarea>
                </div>
              
            </div><!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary form-control">提交</button>
            </div>
        </form>
    </div>
</div><!-- /.box -->

                           
@endsection