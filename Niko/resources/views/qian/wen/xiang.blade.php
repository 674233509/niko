@extends('muban.qiantai.ban')
 @section('qian.index')
 <style>
    .content{
      
      margin-left: 60px;
    }
 </style>
<!-- 个人名片 -->
<style>
  .card{
    position: absolute;
    right: 35px;
    background-color: rgba(255,255,255,0.2);
  }
</style>
<!-- 个人名片开始 -->
<div class="card" >
@foreach ($data->wenbiao as $k => $v)
      <a href="/sn/sou/sou/{{ $v->id }}"><p><i class="glyphicon glyphicon-tag"></i>{{$v->name}}</p></a>
@endforeach

    </div>
<!-- 个人名片结束 -->
 <div class="content">
<br>
<h1>
  {{ $data->title }}
</h1>
<br>
<h4>{{ $data->created_at }}||作者{{ $data->uid }}|| {{ $data->dianji }} 人读过</h4>
<hr>
<div>
  {!! $data->content !!}
</div>
<!-- 评论 -->
<form role="form" action="/admin/sn/ping/wen/{{ $data->id }}" method="post" enctype="multipart/form-data" >
          {{ csrf_field() }}
            <div class="box-body">
                <div class="form-group">
                    <label for="content">评论内容</label>
                    <input type="text" name="content" class="form-control" id="content" placeholder="content">
                </div> 
                
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">点击评论</button>
            </div>
        </form>
<!-- 评论 -->
<!-- 显示评论 -->
<div class="visitors">

 
@foreach ($data->ping as $k => $v)
<dl>
  <dt><img src="/{{$v->qweqwe['pic']}}" height="45px">
  <dt>
 
  <dd>{{$v->qweqwe['username']}}
    
  
  <time>{{$v->created_at}}</time></dd>
  <dd>{{$v->content}}</dd>
</dl>
@endforeach
</div>
<!-- 显示评论 -->

</div>
@endsection