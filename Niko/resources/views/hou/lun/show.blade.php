@extends('muban.houtai.ban')
 @section('hou.index')
 @if(session('success'))
        <div class="alert alert-success alert-dismissible fade in" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span></button>
            {{ session('success') }}
        </div>
@endif

<div class="col-xs-12">
<div class="box-header">
    <h3 class="box-title">查看轮播图</h3>                                    
</div>
 <div class="box-body table-responsive">
<table id="example2" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>图片名字</th>
            <th>图片描述</th>
            <th>图片链接</th>
            <th>预览</th>
            <th>操作</th>
        </tr>
    </thead>
    
    <tbody >
        @foreach ($data as $k => $v)
            <tr>
                <td> {{ $v->id }} </td>
                <td> {{ $v->name }} </td>
                <td> {{ $v->content }} </td>
                <td> {{ $v->url }} </td>
                <td> <img src=" {{ $v->pic }} " alt="" height="100px"> </td>
                <td>
                    <a href="/admin/sn/lun/edit/{{ $v->id }} " class="btn btn-success btn-sm">修改</a>
                    <a href="/admin/sn/lun/delete/{{ $v->id }} " class="btn btn-danger btn-sm">删除</a>
                    
                </td>
            </tr>
        @endforeach
</tbody>
</table>
</div>
</div>

 @endsection