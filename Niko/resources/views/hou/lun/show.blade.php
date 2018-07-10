@extends('muban.houtai.ban')
 @section('hou.index')
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
                    <a href="/admin/sn/lun/edit/{{$v->id}}" class="btn btn-danger">修改</a>
                    <a href="/admin/sn/lun/destroy/{{$v->id}}" class="btn btn-warning">删除</a>
                    
                </td>
            </tr>
        @endforeach
</tbody>
</table>
</div>
 @endsection