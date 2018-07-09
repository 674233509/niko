模板，放文件夹里，之后
后台模板路径
	Niko\app\Http\Controllers\hou\LunController.php
后台网页放位置
	Niko\resources\views\hou\lun\show.blade.php

前台模板路径
	Niko\app\Http\Controllers\qian\ShouController.php
前网页放位置
	Niko\resources\views\qian\index.blade.php


后台模板样式，
@extends('muban.houtai.ban')
 @section('hou.index')
 放内容
  @endsection

前台模板样式
@extends('muban.qiantai.ban')
 @section('qian.index')
 放内容
  @endsection