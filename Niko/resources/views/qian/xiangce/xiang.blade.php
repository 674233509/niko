@extends('muban.qiantai.ban')
 @section('qian.index')
 <style>
    .content{
      
      margin-left: 60px;
    }
 </style>
<!-- 个人名片 -->
<style>
  .card{
    position: absolute;
    right: 35px;
    background-color: rgba(50,50,50,0.9);
  }
</style>
<!-- 个人名片开始 -->
<div class="card" >
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
 <div class="content">
<br>
<h1>
  {{ $data->title }}
</h1>
<br>
<h4>{{ $data->created_at }}||作者{{ $data->uid }}|| {{ $data->dianji }} 人读过</h4>
<hr>
<div>
  {!! $data->content !!}
</div>
<!-- 评论 -->
<form action="">
  评论<input type="text">
</form>
<!-- 评论 -->

</div>
@endsection