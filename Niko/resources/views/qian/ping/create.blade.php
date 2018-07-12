@extends('muban.qiantai.ban')
@section('qian.index')


<form class="form-horizontal" action="/qian/sn/ping/store" method="post">
{{ csrf_field() }}
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">评论</label>
    <div class="col-sm-10">
     <input name="content" type="text" id="content" >
    </div>
  </div>
  
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">发布评论</button>
    </div>
  </div>
</form>
@endsection