@extends('muban.qiantai.ban')
 @section('qian.index')




<link href="/yangshi/time/css/base.css" rel="stylesheet">
<link href="/yangshi/time/css/learn.css" rel="stylesheet">

<script src="/yangshi/time/js/scrollReveal.js"></script>
<article>
  <style type="text/css">
	.note-bottom{
		background:url('/yangshi/time/images/bg.jpg');
	}
	.container {
	    
	    overflow: hidden;
	    margin: 20px;
	    box-shadow: #509 0px 0px 0px;
	}
	.cbp_tmlabel {
		width:800px;
		height:80px;
		overflow: hidden;
		display: -webkit-box;
	    -webkit-box-orient:vertical;
	    -webkit-line-clamp:2;
		
	}

</style>
    <h2 class="ctitle"><b>学无止境</b> <span>不要轻易放弃。学习成长的路上，我们长路漫漫，只因学无止境。</span></h2>

    <ul class="cbp_tmtimeline">
    @foreach ($data as $k => $v)
      <li>
        <time class="cbp_tmtime" ><span style="font-size:12px">{{ $v->created_at }}</span></time>
        <div class="cbp_tmlabel" data-scroll-reveal="enter right over 1s" >
                  {!! $v->content !!}
         
          </div>
      </li>
      @endforeach
     
    </ul>
    
 
 
</article>


 @endsection