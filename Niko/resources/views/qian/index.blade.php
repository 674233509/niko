@extends('muban.qiantai.ban')
 @section('qian.index')

<!-- 轮播图开始 -->
<div id="decoroll2" class="imgfocus">

  <div id="decoimg_a2" class="imgbox">
    <!-- <div class="decoimg_b2"><a href="http://sc.chinaz.com/"><img src="/yangshi/lunboimg/1.jpg"></a></div>
    <div class="decoimg_b2"><a href="http://sc.chinaz.com/"><img src="/yangshi/lunboimg/2.jpg"></a></div>
    <div class="decoimg_b2"><a href="http://sc.chinaz.com/"><img src="/yangshi/lunboimg/3.jpg"></a></div>
    <div class="decoimg_b2"><a href="http://sc.chinaz.com/"><img src="/yangshi/lunboimg/4.jpg"></a></div> -->
    @foreach ($data as $k => $v)
    <div class="decoimg_b2"><a href="{{ $v->url }}"><img src="{{ $v->pic }}"></a></div>

    @endforeach
  </div>
  
  <ul id="deconum2" class="num_a2">
    <!-- <li><a href="javascript:void(0)" hidefocus="true" target="_self">名字1</a></li>
    <li><a href="javascript:void(0)" hidefocus="true" target="_self">名字2</a></li>
    <li><a href="javascript:void(0)" hidefocus="true" target="_self">名字3</a></li>
    <li><a href="javascript:void(0)" hidefocus="true" target="_self">名字4</a></li> -->
    @foreach ($data as $k => $v)
    <li><a href="javascript:void(0)" hidefocus="true" target="_self"> {{ $v->name }} </a></li>

    @endforeach
  </ul>
  
</div>


<!-- 轮播图结束 -->
{{-- 内容 --}}

<div class="article">
  <div class="content">
<div class="bloglist">
  <!--article begin-->
    <ul>
    <h2><a title="Web之路，经历了心酸之后" href="/"  target="_blank">Web之路，经历了心酸之后</a></h2>
    <p>清理电脑里的时候，看到以前专业课的作业。看修改日期最早的一个压缩包还是06年的，7年的时间就这样过去了，这3年的学习成果就是这电脑里面的7个压缩包。</p>
    <p>“什么是母校？母校就是那个你一天骂他八遍却不许别人骂一遍的地方”当听到不少学弟学妹在抱怨学校差的时候，至今我也没后悔过，因为我经历了我认为最苦的那一段时期。</p>
    <figure><img src="images/01.jpg"></figure>
    <p class="dateview"><span>2013-05-11</span><span>作者：杨青</span><span>分类：<a href="/" target="_blank">心得笔记</a></span><span>阅读(229)</span><span>评论(124)</span></p>
    </ul>
  <!--article end-->
<!--article begin-->
    <ul>
    <h2><a title="Web之路，经历了心酸之后" href="/"  target="_blank">Web之路，经历了心酸之后</a></h2>
    <p>清理电脑里的时候，看到以前专业课的作业。看修改日期最早的一个压缩包还是06年的，7年的时间就这样过去了，这3年的学习成果就是这电脑里面的7个压缩包。</p>
    <p>“什么是母校？母校就是那个你一天骂他八遍却不许别人骂一遍的地方”当听到不少学弟学妹在抱怨学校差的时候，至今我也没后悔过，因为我经历了我认为最苦的那一段时期。</p>
    <figure><img src="images/02.jpg"></figure>
    <p class="dateview"><span>2013-05-11</span><span>作者：杨青</span><span>分类：<a href="/" target="_blank">心得笔记</a></span><span>阅读(229)</span><span>评论(124)</span></p>
    </ul>
  <!--article end-->  
    </div> 
  </div>  
<aside class="navsidebar">
   <nav>
      <ul>
       <li class="ab"><a href="#" >关于我</a></li>
       <li class="sy"><a href="/sn/show/yulu">经典语录</a></li>
       <li class="js"><a href="/sn/wen">技术探讨</a></li>
       <li class="msh"><a href="/sn/show/xin">欣赏</a></li>
       <li class="xc"><a href="/sn/pic">我的相册</a></li>
       <li class="ly"><a href="/sn/liu">留言版</a></li>
     </ul>      
    </nav>
    <div class="slide">
  
<style type="text/css">
  .linkmore { margin: 15px 0 0 15px }
.linkmore li a { height: 50px; width: 50px; display: block; overflow: hidden; box-shadow: 0px 1px 0px rgba(255,255,255,.1), inset 0px 1px 1px rgba(0,0,0,.7); border-radius: 50%; float: left; margin: 0 6px; }
.linkmore li a:hover { opacity: 0.5; -webkit-transform: rotate(30deg); -ms-transform: rotate(30deg); -moz-transform: rotate(30deg); -o-transform: rotate(30deg); transform: rotate(30deg); }
.talk, .address, .email, .photos, .heart { background: url(/yangshi/images/icons.png) no-repeat; }
.talk { background-position: 13px 18px }
.address { background-position: 12px -22px }
.email { background-position: 12px -60px }
.photos { background-position: 12px -137px }
.heart { background-position: 13px -99px }
</style>
<script type="text/javascript">
  // 添加收藏
  function addFavorite2() {
var url = window.location;
var title = document.title;
var ua = navigator.userAgent.toLowerCase();
if (ua.indexOf("360se") > -1) {
alert("由于360浏览器功能限制，请按 Ctrl+D 手动收藏！");
}
else if (ua.indexOf("msie 8") > -1) {
window.external.AddToFavoritesBar(url, title); //IE8
}
else if (document.all) {
try{
window.external.addFavorite(url, title);
}catch(e){
alert('您的浏览器不支持,请按 Ctrl+D 手动收藏!');
}
}
else if (window.sidebar) {
window.sidebar.addPanel(title, url, "");
}
else {
alert('您的浏览器不支持,请按 Ctrl+D 手动收藏!');
}
}
</script>

</script>
    </div>
    <h2><p>个人档案</p></h2>
   <div class="vcard">
      <p class="fn">姓名：杨青</p>
      <p class="nickname">网名：DanceSmile | 即步非烟</p>
      <p class="url">主页：<a href="http://www.yangqq.com" target="_blank">www.nikoni.com</a></p>
      <p class="address">现居：天津市—滨海新区</p>
      <p class="role">职业：网站设计、网站制作</p>
       <ul class="linkmore">
        <li><a href="/sn/liu" class="talk" title="给我留言"></a></li>
        <!-- <li><a href="/" class="address"  onclick="copyUrl()"  title="联系地址"></a></li>
        <li><a href="#" class="email" title="给我写信"></a></li> -->
        <li><a href="/sn/pic" class="photos" title="生活照片"></a></li>
        <li><a href="#" class="heart" onclick="javascript:addFavorite2()" title="关注我"></a></li>
      </ul>
    </div>   <script type="text/javascript">
  // 点击复制当前网址
 function copyUrl()            
     {
        var url = 'www.nikoni.com';
        window.clipboardData.setData("Text",url);
        alert("已复制链接");
      }                
</script>
   <h2><p>博客分类</p></h2>
<ul class="news">
  <li><a href="/">慢生活(3)</a></li>
  <li><a href="/">程序人生(25)</a></li>
  <li><a href="/">经典美文(39)</a></li>
</ul>
<h2><p>近期文章</p></h2>
<ul class="news">
  <li><a href="/">女孩都有浪漫的小情怀</a></li>
  <li><a href="/">也许下个路口就会遇见希望</a></li>
  <li><a href="/">6月毕业季，祝福送给你</a></li>
  <li><a href="/">生活常有缺席的-可搞笑从来不缺席</a></li>
  <li><a href="/">为了一个不存在的梦，执念了那么多年</a></li>
  <li><a href="/">妹妹，明天你就要嫁人啦</a></li>
</ul>
<h2><p>文章归档</p></h2>
<ul class="news">
  <li><a href="/">2008 年三月</a></li>
  <li><a href="/">2008 年四月</a></li>
  <li><a href="/">2008 年六月</a></li>
</ul>
<h2><p>友情链接</p></h2>
<ul class="news">
  @foreach ($gg_fris as $k => $v)
          <ul>
            <a href="{{ $v->url }}" target=_blank>
            <li>{{ $v->title }}</li>
            </a>
            <li><img src="/{{ $v->pic }}" height="30px"></li>
          </ul>
          @endforeach
</ul>

<h2><p>广告区域</p></h2>
<ul class="news">
 
            @foreach ($gg_guangs as $k => $v)
            <ul style=" margin:10px">
              <a target="_blank" href="{{ $v->url }}" class="tb-footer-mod"  target=_blank>
               <li><img src="{{ $v->pic }}" height="30px";width="30px"></li>
            </ul>      
    
           @endforeach
</ul>

<div class="share">
    <h2></h2>
      <p><!-- Baidu Button BEGIN -->
<div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare">
<a class="bds_tsina"></a>
<a class="bds_qzone"></a>
<a class="bds_tqq"></a>
<a class="bds_renren"></a>
<span class="bds_more"></span>
<a class="shareCount"></a>
</div>
<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6574585" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script>
<!-- Baidu Button END --></p>
    </div>
</aside>
{{-- 内容结束 --}}






@endsection