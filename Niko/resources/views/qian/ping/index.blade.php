@extends('muban.qiantai.ban')
@section('qian.index')

	<div class="visitors">
      <h2>最新评论</h2>
      @foreach ($data as $k => $v)
      <dl>
        <dt><img src="/{{$v->qweqwe['pic']}}" height="50px">
        <dt>
        <dd>{{$v->qweqwe['username']}}
          <time>{{$v->created_at }}</time>
        
        </dd>
        <dd>在 <a href="/sn/wen/xiang/{{$v->qwe['id']}}" class="title">{{$v->qwe['title']}} </a>中评论：</dd>
        <dd>{{$v->content}}</dd>
      </dl>
      @endforeach
    </div>
@endsection