@extends('muban.qiantai.ban')
 @section('qian.index')


<link href="/yangshi/time/css/base.css" rel="stylesheet">
<link href="/yangshi/time/css/learn.css" rel="stylesheet">

<script src="/yangshi/time/js/scrollReveal.js"></script>
<article>
  
    <h2 class="ctitle"><b>学无止境</b> <span>不要轻易放弃。学习成长的路上，我们长路漫漫，只因学无止境。</span></h2>

    <ul class="cbp_tmtimeline">
    @foreach ($data as $k => $v)
      <li>
        <time class="cbp_tmtime" ><span style="font-size:12px">{{ $v->created_at }}</span></time>
        <div class="cbp_tmlabel" data-scroll-reveal="enter right over 1s" >
                   {!! $v->content !!}
          <a href="/" target="_blank" class="readmore">阅读全文&gt;&gt;</a> 
          </div>
      </li>
      @endforeach
     
    </ul>
    
 
 
</article>


 @endsection