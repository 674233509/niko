<!DOCTYPE html>
<html>
<head>
<title>SN-音乐坊</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="/yangshi/yin/css/style.css" rel="stylesheet" type="text/css" media="all" />

<script src="/yangshi/yin/js/jquery-1.11.1.min.js"></script>

</head>
<body><script src="/demos/googlegg.js"></script>
<!-- 代码 开始 -->
<div class="audio-main w3ls">
  <div class="audio-record-list">
  <div class="profile">
       <div class="profile-top wthree">
         <div class="pic-sec">
           <div class="pic">
             <img src="/yangshi/yin/images/t3.jpg" alt=""/>
           </div>
           <div class="pic_info">
             <h2>Sn-帝左</h2>
             <h3><a href="http://www.kugou.com/">好音质，用酷狗</a></h3>
           </div>
           <div class="clear"></div>
         </div>
         <div class="media">
           <div class="tweet">
            
             <h4 ><span id="xxx"> {{ $res -> xihuan}} </span></h4>
              <a  onclick="fun()"><img src="/yangshi/yin/images/E09T8tf.png" alt=""/></a>
           </div>
           <script type="text/javascript">

           function fun(){
             
             
             $.get('/qian/sn/yin/index',function (msg){
              var a = document.getElementById('xxx');
              a.innerHTML = msg;
             });

          }

           </script>
           <div class="follow">
             <h4>158</h4>
             <h5>访问量</h5>
           </div>
           <div class="follow2">
              <h4>{{ $res->dianjiliang }}</h4>
             <h5>点击量</h5>
           </div>
           <div class="clear"></div>
         </div>
       </div>
     </div>
    <div id="jquery_jplayer_1" class="jp-jplayer"></div>
      <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
        <div class="jp-type-playlist">
          <div class="jp-gui jp-interface">
            <div class="jp-controls"> 
              <button class="jp-play" role="button" tabindex="0">play</button>
            </div>
            <div class="jp-progress">
              <div class="jp-seek-bar">
                <div class="jp-play-bar"></div>
              </div>
            </div>
            <div class="jp-volume-controls">
              <button class="jp-mute" role="button" tabindex="0">mute</button>
              <button class="jp-volume-max" role="button" tabindex="0">max volume</button>
              <div class="jp-volume-bar">
                <div class="jp-volume-bar-value"></div>
              </div>
            </div>
            <div class="jp-time-holder">
              <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
              <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
            </div>
            
          </div>
          <div class="jp-playlist">
            <ul>
              <li>&nbsp;</li>
            </ul>
          </div>
          <div class="jp-no-solution">
            <span>Update Required</span>
            To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
          </div>
        </div>
      </div>
  </div>
</div>

<link href="/yangshi/yin/css/jplayer.blue.monday.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/yangshi/yin/js/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="/yangshi/yin/js/jplayer.playlist.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

  new jPlayerPlaylist({
    jPlayer: "#jquery_jplayer_1",
    cssSelectorAncestor: "#jp_container_1"
  }, [
    @foreach ($data as $k => $v)
    {
      title:"{{$v->name}}",
      mp3:"{{$v->mp3}}",
      oga:""
    },
    @endforeach
    
  ], {
    swfPath: "../../dist/jplayer",
    supplied: "oga, mp3",
    wmode: "window",
    useStateClassSkin: true,
    autoBlur: false,
    smoothPlayBar: true,
    keyEnabled: true
  });
});
</script>
<!-- 代码 结束 -->

</body>
</html>