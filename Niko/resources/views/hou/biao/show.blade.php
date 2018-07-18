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
    <h3 class="box-title">查看标签</h3>                                    
</div>
 <div class="box-body table-responsive">
<table id="example2" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>标签名字</th>
            <th>创建时间</th>
            <th>修改时间</th>
            <th>操作</th>
        </tr>
    </thead>
    
    <tbody >
        @foreach ($data as $k => $v)
            <tr>
                <td> {{ $v->id }} </td>
                <td> {{ $v->name }} </td>
                <td> {{ $v->created_at }} </td>
                <td> {{ $v->updated_at }} </td>
                <td>
                    <a href="/admin/sn/biao/edit/{{ $v->id }} " class="btn btn-success btn-sm">修改</a>
         
                    
                </td>
            </tr>
        @endforeach

</tbody>
</table>
        <div class="container">
        {!! $data->render() !!}

        </div>

</div>

</div>

 @endsection