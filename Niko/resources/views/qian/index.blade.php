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
<!-- 个人名片开始 -->
<style>
  .card{
    position: absolute;
    right: 110px;
    background-color: rgba(50,50,50,0.9);
  }
</style>
<br>
<div class="card">
      <h1>我的名片</h1>
      <p>网名：Dzuo | 博主中文名</p>
      <p>职业：博主职业</p>
      <p>电话：博主电话</p>
      <p>Email：博主邮箱</p>
      <ul class="linkmore">
        <li><a href="/" class="talk" title="给我留言"></a></li>
        <li><a href="/" class="address" title="联系地址"></a></li>
        <li><a href="/" class="email" title="给我写信"></a></li>
        <li><a href="/" class="photos" title="生活照片"></a></li>
        <li><a href="/" class="heart" title="关注我"></a></li>
      </ul>
    </div>
<!-- 个人名片结束 -->

<!--友情链接部分start-->			
	<div class="card" style=" position: absolute; top: 950px; width:600px;height:150px;background:#99CCCC">
      <center>
	  <h1 >友情链接</h1>
	 </center>
	  @foreach ($res as $k => $v)
	   <ul style="float:left; margin:5px">
	   <a href="{{ $v->url }}">
      <li>{{ $v->title }}</li>
	  </a>
      <li><img src="{{ $v->pic }}" height="50px"></li>
	</ul>
	@endforeach
    </div>	
<!--友情链接部分end-->

<!-- 广告开始 -->
	<div class="tb-footer-ft" style="position:absolute; bottom:-310px; width:500px; height:150px;right:3px">
	<center>
	<h1>广告</h1>
	</center>
	@foreach ($res2 as $k => $v)
	<ul style="float:right; margin:10px">
		<a target="_blank" href="{{ $v->url }}" class="tb-footer-mod">
		 <li><img src="{{ $v->pic }}" height="30px";width="30px"></li>
	</ul>		   
		
	@endforeach
	</div>
<!-- 广告结束 -->
            

@endsection