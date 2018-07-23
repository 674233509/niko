@extends('muban.qiantai.ban')
 @section('qian.index')

<link href="/yangshi/about/css/base.css" rel="stylesheet">
<link href="/yangshi/about/css/about.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
<script src="/yangshi/about/js/scrollReveal.js"></script>
</head>
<body>


  
    <div class="banner">
      <p data-scroll-reveal="enter top over 2s">我们不停的翻弄着回忆，却再也找不回那时的自己</p>
      <p data-scroll-reveal="enter left over 2s after 1s">人生，是一场盛大的遇见。若你懂得，就请珍惜。</p>
      <p data-scroll-reveal="enter bottom over 2s after 2s">无论下多久的雨，最后都会有彩虹；无论你多么悲伤，要相信幸福在前方等候.</p>
    </div>
    <div class="memorial_day">
      <div class="time_axis"></div>
      <ul>
        <li class="n1"><a href="/">前端入行</a>
          <div class="dateview">2018</div>
        </li>
        <li class="n2"><a href="/">创建个人博客</a>
          <div class="dateview">2018-07-12</div>
        </li>
        <li class="n3"><a href="/">分享第一个博客模板</a>
          <div class="dateview">2018-07-25</div>
        </li>
        <li class="n4"><a href="/">制作第一个html5模板</a>
          <div class="dateview">2018-03-15</div>
        </li>
        <li class="n5"><a href="/">模板更换为时间轴</a>
          <div class="dateview">2018-07-19</div>
        </li>
      </ul>
    </div>
    <div class="about left">
  <h2>关于我</h2>
    <ul> 
  {!! $data['content'] !!}
    </ul>
    <h2>About my blog</h2>
    <p>域  名：www.niko.com 创建于2018年07月19日 </p>
    <p>关键字：{{$gg_peizhi->title}} </p>
    <p>服务器：阿里云服务器<a href="https://promotion.aliyun.com/ntms/act/ambassador/sharetouser.html?userCode=8smrzoqa&amp;productCode=vm" target="_blank" class="blog_link">购买空间</a><a href="/jstt/web/2014-01-18/644.html" target="_blank" class="blog_link">参考我的空间配置</a></p>
    <p>程  序：PHP {{$gg_peizhi->hand}}</p>


</div>



<script>
	if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
		(function(){
			window.scrollReveal = new scrollReveal({reset: true});
		})();
	};
</script>
@endsection
