@extends('muban.qiantai.ban')
@section('qian.index')

	<div class="visitors">
      <h2>最新评论</h2>
      @foreach ($data as $k => $v)
      <dl>
        <dt><img src="/{{$v->qweqwe['pic']}}" height="50px">
        <dt>
        <dd>{{$v->qweqwe['username']}}
          <time>{{$v->ptime}}</time>
        
        </dd>
        <dd>在 <a href="http://www.yangqq.com/jstt/bj/2013-07-28/530.html" class="title">如果要学习web前端开发，需要学习什么？ </a>中评论：</dd>
        <dd>{{$v->content}}</dd>
      </dl>
      @endforeach
    </div>
@endsection