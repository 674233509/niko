@extends('muban.qiantai.ban')
 @section('qian.index')
<link href="/yangshi/wenzhang/css/base.css" rel="stylesheet">
<link href="/yangshi/wenzhang/css/index.css" rel="stylesheet">
<script src="/yangshi/wenzhang/js/scrollReveal.js"></script>
<style type="text/css">
  body{
    /*background-color: #509;*/
    background-image: url(/uploads/wen/20180710/5aVkWjRSBkBXJJWjCUiQ.JPG);

  }
  html{width:100%;
     height:100%}
body{width:100%; 
    height:100%;
    background-image: url(/uploads/wen/20180710/5aVkWjRSBkBXJJWjCUiQ.JPG);
    background-attachment:fixed ;/* 设置背景图片不动 */
    background-size:cover;     /*这里设置了背景图片为覆盖，以填满整个容器*/
    margin-right: ;
    padding: 

   }
</style>
<article>
  <div class="container">
    <div class="blog" data-scroll-reveal="enter top" >
      @foreach ($data as $k => $v)
      @if ($k%3 == 0)
      </div>
      <div class="blog" data-scroll-reveal="enter top" >
      @endif
      <figure>
        <ul>
          <a href="/sn/pic/xiang/{{ $v->id }}"><img src="{{ $v->pic }}"><span>{{ $v->content }}</span></a>
        </ul>
        <p><a href="/sn/pic/xiang/{{ $v->id }}">{{ $v->name }}</a></p>
        <figcaption>作者栏</figcaption>
      </figure>
      @endforeach
    </div>
    <div style="margin-left:30%">
    </div>

  </div>
</article>
<footer>
脚步写的东西<a href="/">a连接，版本</a>
</footer>
<script>
  if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
    (function(){
      window.scrollReveal = new scrollReveal({reset: true});
    })();
  };
</script> 
@endsection