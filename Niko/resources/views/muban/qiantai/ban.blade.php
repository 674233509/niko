<!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>上帝用左手Sn</title>

<!--搜索按钮css-->
<link href="/yangshi/css/bootstrap2.css" rel="stylesheet" type="text/css" media="all"/>
<link href="/yangshi/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="/yangshi/css/font-awesome2.css" rel="stylesheet">
<!--搜索按钮css-->

<!-- 个人名片样式 -->
<link href="/yangshi/css/styles.css" rel="stylesheet">
<!-- 个人名片样式结束 -->
<meta name="Keywords" content="" >
<meta name="Description" content="" >
<link href="/yangshi/css/index.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
{{-- 固定元素 --}}
  <link rel="stylesheet" href="/yangshi/guding/css/foundation.min.css">
  <link href="/yangshi/guding/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/yangshi/guding/css/htmleaf-demo.css"><!--演示页面样式，使用时可以不引用-->

{{-- 固定元素结束 --}}
<!-- 搜索按钮头部 -->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="/yangshi/js/jquery.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>

<!--search jQuery-->
  <script src="/yangshi/js/main.js"></script>
<!--search jQuery-->
<script src="/yangshi/js/responsiveslides.min.js"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
        auto: true,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
 </script>
 <!--mycart-->
<script type="text/javascript" src="/yangshi/js/bootstrap-3.1.1.min.js"></script>
 <!-- cart -->
<script src="/yangshi/js/simpleCart.min.js"></script>
<!-- cart -->
  <!--start-rate-->
<script src="/yangshi/js/jstarbox.js"></script>
  <link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
    <script type="text/javascript">
      jQuery(function() {
      jQuery('.starbox').each(function() {
        var starbox = jQuery(this);
          starbox.starbox({
          average: starbox.attr('data-start-value'),
          changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
          ghosting: starbox.hasClass('ghosting'),
          autoUpdateAverage: starbox.hasClass('autoupdate'),
          buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
          stars: starbox.attr('data-star-count') || 5
          }).bind('starbox-value-changed', function(event, value) {
          if(starbox.hasClass('random')) {
          var val = Math.random();
          starbox.next().text(' '+val);
          return val;
          } 
        })
      });
    });
    </script>
<!-- 搜索按钮头部结束 -->
<!-- 轮播图样式 -->
<link rel="stylesheet" type="text/css" href="/yangshi/css/lunbo/style.css">

<script type="text/javascript" src="/yangshi/js/lunbo/koala.min.1.5.js"></script>
<script type="text/javascript">
Qfast.add('widgets', { path: "/yangshi/js/lunbo/terminator2.2.min.js", type: "js", requires: ['fx'] });  
Qfast(false, 'widgets', function () {
  K.tabs({
    id: 'decoroll2',//焦点图包裹id  
    conId: "decoimg_a2",//大图域包裹id  
    tabId:"deconum2",//小圆点数字提示id
    tabTn:"a",
    conCn: '.decoimg_b2',//大图域配置class       
    auto: 1,//自动播放 1或0
    effect: 'fade',//效果配置
    eType: 'mouseover',// 鼠标事件
    pageBt:true,//是否有按钮切换页码
    bns: ['.prev', '.next'],//前后按钮配置class                          
    interval: 3000// 停顿时间  
  }) 
}) 
</script>
<!-- 轮播图样式结束 -->
</head>
<body>
<script type="text/javascript" color='50, 205, 50' zIndex='-1' opacity='1' count='99' src="/yangshi/beijing/1.js"></script>

<div class="note-bottom">
<header>
  <h1><a href="/">God Only Knows</a></h1>
  <p>这夏天里流动的风情，是停不住的舞步和唱不完的情歌，当玫瑰花瓣飘飞的那一刻，风会带走所有的想念.......</p>
</header>
<div id="nav">
     <ul>
       <li><a href="/admin">网站首页</a></li>
       <li><a href="javascript:;">关于我</a></li>
       <li><a href="moodlist.html">碎言碎语</a></li>
       <li><a href="/sn/wen">技术探讨</a></li>
       <li><a href="newlist.html">慢生活</a></li>
       <li><a href="/sn/pic">我的相册</a></li>
       <li><a href="/sn/liu">留言版</a></li>
       <li><a href="/qian/sn/ping/index">最新评论</a></li>

       <li><a href="/qian/sn/yin/create">音乐房</a></li>

     </ul>
     <script src="/yangshi/js/silder.js"></script><!--获取当前页导航 高亮显示标题-->
</div>
<!-- 搜索按钮开始 -->
 
  <!--header-->
     
      
        <div class="container">
          <div class="logo-nav">
            <div class="logo-nav-right">
              <ul class="cd-header-buttons">
                <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
              </ul> <!-- cd-header-buttons -->
              <div id="cd-search" class="cd-search">
                <form action="#" method="post">
                  <input name="Search" type="search" placeholder="Search...">
                </form>
              </div>  
<!-- 搜索按钮结束 -->
{{-- 固定 --}}
<style>
  .guding{
    position: fixed;
    left: 20px;
    top:100px;
  }
</style>
          <section class="container">
        <div class="row" data-sticky-container>
          <div class="medium-3 columns show-for-medium">
          
           <span class="float-left" alt="Sticky" data-sticky data-margin-top="20">
           <div class="guding">
      @if(session('denglu'))
      <p>欢迎</p>
      <p>{{ session('denglu')['username'] }}</p>
      <p><a href="/sn/login/tui">退出</a></p>
      @else
         <h1>游客</h1>
      <p><a href="/sn/login">登录</a></p>
      @endif
      
      </div>
      </span>

          </div>
          <div class="small-12 medium-9 large-7 columns">




 @section('qian.index')

  @show


  </div>
          <div class="large-2 columns show-for-large" style="padding-top: 10rem;">
         
          </div>
        </div>
      </section>

      <section class="container">
        <div class="row column medium-text-center">
          <h3>Browser compatibility</h3>
          <p>Library is using ECMAScript 5 features. Full support available on <a href="http://caniuse.com/#search=ECMAScript%205" title="Can i use ECMAScript 5?">caniuse</a>.</p>
          <br>
          <ul class="no-bullet">
            <li>IE 9+</li>
            <li>Chrome 23+</li>
            <li>页脚</li>
            <li>Firefox 21+</li>
            <li>Safari 6+</li>
            <li>Opera 15+</li>
          </ul>
          <p>If you need this library working with older browsers you should use ECMAScript 5 polyfill.</p>
        </div>
      </section>

    </main>
        <footer class="text-center">
          <div class="htmleaf-header">
      <h1>js固定元素插件 <span>Library for sticky elements written in vanilla javascript</span></h1>
     
    </div>
      <p>页脚</p>
      <p>页脚</p>
      <p>页脚</p>
    </footer>
  
   <script src="/yangshi/guding/dist/sticky.compile.js"></script>
   <script type="text/javascript">
    var sticky = new Sticky('[data-sticky]');
   </script>
{{-- 固定 --}}

</div>
</body>
</html>
