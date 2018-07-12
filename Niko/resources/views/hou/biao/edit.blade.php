@extends('muban.houtai.ban')
 @section('hou.index')
<form role="form" action="/admin/sn/biao/update/{{ $data->id }} " method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="col-xs-12">
<div class="box-header">
    <h3 class="box-title">修改标签名</h3>                                    
</div>
    <div class="box-body">
        <div class="form-group">
            <label for="exampleInputEmail1">标签名字</label>
            <input type="test" class="form-control" name="name" id="exampleInputEmail1" value="{{ $data->name }}" style="width:50%">
        </div>
        
    </div><!-- /.box-body -->

    <div class="box-footer">
        <button type="submit" class="btn btn-primary">点击修改</button>
    </div>
    <img src=" {{ $data->pic }} " alt="" width="200px">
</form>
</div>
 @endsection