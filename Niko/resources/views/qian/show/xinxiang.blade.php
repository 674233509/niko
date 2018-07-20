@extends('muban.qiantai.ban')
 @section('qian.index')
 <style>
    .content{
      
      margin-left: 60px;
    }
 </style>
<!-- 个人名片 -->
<style>

</style>
<!-- 个人名片开始 -->

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


</div>
@endsection