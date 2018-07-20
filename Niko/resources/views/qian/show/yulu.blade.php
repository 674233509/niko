@extends('muban.qiantai.ban')
@section('qian.index')
<style type="text/css">
  .dada{
    /*border:solid 1px #509;*/
    background: rgba(255, 255, 255,0.3);
    margin-left: 30px;
    margin-top: 30px;
    border-radius: 25px;

  }
  .wai{
    width: 60%;
  }
  .hh{
    margin-left: 30px;
    margin-top: 30px;
    margin-bottom: 30px;

  }
  .nei{
    font-size: 30px;
  }
  .chu{
    margin-left: 50%;
    width: 50%;
    font-size: 20px;
    /*border:solid 1px #444;*/

  }
</style>
	<div class="wai">
      <h2 class="hh">经典语录</h2>
      @foreach ($data as $k => $v)
      <div class="dada">
      <dl>
        <dt>
        <br>
        <dd class="nei" >　　{{$v->content}}</dd>
        <br>
        <dd class="chu">—— {{ $v->name }}</dd>
      </div>

      @endforeach
    </div>
@endsection