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
</head>
<body>
<header>
  <h1><a href="/">God Only Knows</a></h1>
  <p>这夏天里流动的风情，是停不住的舞步和唱不完的情歌，当玫瑰花瓣飘飞的那一刻，风会带走所有的想念.......</p>
</header>
<div id="nav">
     <ul>
       <li><a href="/admin">网站首页</a></li>
       <li><a href="javascript:;">关于我</a></li>
       <li><a href="moodlist.html">碎言碎语</a></li>
       <li><a href="newlist.html">技术探讨</a></li>
       <li><a href="newlist.html">慢生活</a></li>
       <li><a href="ablumlist.html">我的相册</a></li>
       <li><a href="book.html">留言版</a></li>
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
<!-- 个人名片开始 -->
<div class="card">
      <h1>我的名片</h1>
      <p>网名：DanceSmile | 即步非烟</p>
      <p>职业：Web前端设计师、网页设计</p>
      <p>电话：13662012345</p>
      <p>Email：dancesmiling@qq.com</p>
      <ul class="linkmore">
        <li><a href="/" class="talk" title="给我留言"></a></li>
        <li><a href="/" class="address" title="联系地址"></a></li>
        <li><a href="/" class="email" title="给我写信"></a></li>
        <li><a href="/" class="photos" title="生活照片"></a></li>
        <li><a href="/" class="heart" title="关注我"></a></li>
      </ul>
    </div>
<!-- 个人名片结束 -->
</body>
</html>
