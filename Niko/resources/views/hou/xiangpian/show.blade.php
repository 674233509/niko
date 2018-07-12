@extends('muban.houtai.ban')
 @section('hou.index')
 @if(session('success'))
        <div class="alert alert-success alert-dismissible fade in" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span></button>
            {{ session('success') }}
        </div>
@endif
<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="\yangshi\xiangpian/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="\yangshi\xiangpian/plugins/prettyphoto/css/prettyPhoto.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="\yangshi\xiangpian/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="\yangshi\xiangpian/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="\yangshi\xiangpian/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="\yangshi\xiangpian/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="\yangshi\xiangpian/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="\yangshi\xiangpian/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="\yangshi\xiangpian/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="\yangshi\xiangpian/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="\yangshi\xiangpian/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="\yangshi\xiangpian/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="\yangshi\xiangpian/css/themer.css" media="screen">
<!-- 样式 -->
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
<div class="col-xs-12">
<div class="box-header">
    <h3 class="box-title">查看相片</h3>                                    
</div>

<!-- 相册显示 -->
    <!-- Panels Start -->
                
    <div class="mws-panel grid_8">
        <div class="mws-panel-header" style="height:45px">
            <span><i class="icon-pictures"></i>{{ $data->name }}</span>
        </div>
        <div class="mws-panel-body">
            <ul class="thumbnails mws-gallery">
                @foreach ($data->cepian as $k => $v)
                <li>
                    <span class="thumbnail"><img src="{{ $v->pic }}" alt=""></span>
                    <span class="mws-gallery-overlay">
                        <a href="{{ $v->pic }}" rel="prettyPhoto[gallery1]" class="mws-gallery-btn"><i class="icon-search"></i></a>
                        <a href="/admin/sn/xiang/photoedit/{{ $v->id }}" class="mws-gallery-btn"><i class="icon-pencil"></i></a>
                        <a href="/admin/sn/xiang/photodelete/{{ $v->id }}" class="mws-gallery-btn"><i class="icon-trash"></i></a>
                    </span>
                    <span>{{ $v->name }}</span>

                </li>   
                @endforeach

            </ul>
        </div>
    </div>
                
                <!-- Panels End -->
<!-- 相册显示 -->


 <div class="box-body table-responsive">

</table>
    

</div>
</div>

 @endsection