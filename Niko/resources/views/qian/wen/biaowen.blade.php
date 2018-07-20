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
          <a href="/sn/wen/xiang/{{ $v->id }}"><img src="{{ $v->pic }}"><span>{!! $v->content !!}</span></a>
        </ul>
        <p><a href="/sn/wen/xiang/{{ $v->id }}">{{ $v->title }}</a></p>
        <figcaption>作者栏
        <br>
        @foreach ($v->wenbiao as $vv => $kk)
        <a style="color:#509" href="/sn/sou/sou/{{ $kk->id }}"><i class="glyphicon glyphicon-tag"></i>{{$kk->name}}</a><br>
        @endforeach
        </figcaption>
      </figure>
      @endforeach
    </div>
    <div style="margin-left:30%">
    </div>
   <ul class="cbp_tmtimeline">
          <li>
            <time class="cbp_tmtime"><span>08sss-08</span> <span>2017</span></time>
            <div class="cbp_tmicon"></div>
            <div class="cbp_tmlabel" data-scroll-reveal="enter right over 1s" >
              <h2>三步实现滚动条触动css动画效果</h2>
               <p><span class="blogpic"><a href="/"><img src="images/t03.jpg"></a></span>现在很多网站都有这种效果，我就整理了一下，分享出来。利用滚动条来实现动画效果，ScrollReveal.js 用于创建和管理元素进入可视区域时的动画效果，帮助你的网站增加吸引力...</p>
                             <a href="/" target="_blank" class="readmore">阅读全文&gt;&gt;</a>
            </div>
          </li>
          
          
    </ul>
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