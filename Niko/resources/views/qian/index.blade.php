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
    <div class="decoimg_b2"><a href="http://sc.chinaz.com/"><img src="{{ $v->pic }}"></a></div>

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
@endsection