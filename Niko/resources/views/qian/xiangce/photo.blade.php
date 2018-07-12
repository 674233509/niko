@extends('muban.qiantai.ban')
 @section('qian.index')
<link href="/yangshi/wenzhang/css/base.css" rel="stylesheet">
<link href="/yangshi/wenzhang/css/index.css" rel="stylesheet">
<script src="/yangshi/wenzhang/js/scrollReveal.js"></script>
<style type="text/css">
  body{
    /*background-color: #509;*/
    background-image: url(/uploads/wen/20180710/5aVkWjRSBkBXJJWjCUiQ.JPG);

  }
  html{width:100%;
     height:100%}
body{width:100%; 
    height:100%;
    background-image: url(/uploads/wen/20180710/5aVkWjRSBkBXJJWjCUiQ.JPG);
    background-attachment:fixed ;/* 设置背景图片不动 */
    background-size:cover;     /*这里设置了背景图片为覆盖，以填满整个容器*/
    margin-right: ;
    padding: 

   }
</style>
<!-- 样式 -->
<link rel="stylesheet" type="text/css" href="\yangshi\xiangpian/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="\yangshi\xiangpian/plugins/prettyphoto/css/prettyPhoto.css" media="screen">

 <!-- JavaScript Plugins -->
    <script src="\yangshi\xiangpian/js/libs/jquery-1.8.3.min.js"></script>
    <script src="\yangshi\xiangpian/js/libs/jquery.mousewheel.min.js"></script>
    <script src="\yangshi\xiangpian/js/libs/jquery.placeholder.min.js"></script>
    <script src="\yangshi\xiangpian/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="\yangshi\xiangpian/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="\yangshi\xiangpian/jui/jquery-ui.custom.min.js"></script>
    <script src="\yangshi\xiangpian/jui/js/jquery.ui.touch-punch.js"></script>

    <!-- Plugin Scripts -->
    <script src="\yangshi\xiangpian/plugins/prettyphoto/js/jquery.prettyPhoto.min.js"></script>
    <script src="\yangshi\xiangpian/plugins/colorpicker/colorpicker-min.js"></script>

    <!-- Core Script -->
    <script src="\yangshi\xiangpian/bootstrap/js/bootstrap.min.js"></script>
    <script src="\yangshi\xiangpian/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="\yangshi\xiangpian/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="\yangshi\xiangpian/js/demo/demo.gallery.js"></script>
<!-- 样式 -->
<article>
  <div class="container">
    <div class="blog" data-scroll-reveal="enter top" >
      @foreach ($data->cepian as $k => $v)
      @if ($k%3 == 0)
      </div>
      <div class="blog" data-scroll-reveal="enter top" >
      @endif
      <figure>
        <ul>
          <a href="{{ $v->pic }}"  rel="prettyPhoto[gallery1]" class="mws-gallery-btn"><img src="{{ $v->pic }}">
          <span>{{ $v->content }}
  <i class="icon-search"></i>
          </span></a>
        </ul>
        <p><a href="/sn/pic/xiang/{{ $v->id }}">{{ $v->name }}</a></p>
        <figcaption>作者栏</figcaption>
      </figure>
      @endforeach
    </div>
    <div style="margin-left:30%">
    </div>

  </div>
</article>
<footer>
脚步写的东西<a href="/">a连接，版本</a>
</footer>
<script>
  if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
    (function(){
      window.scrollReveal = new scrollReveal({reset: true});
    })();
  };
</script> 
@endsection