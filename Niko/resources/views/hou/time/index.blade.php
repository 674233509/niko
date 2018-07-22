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
{{-- 搜索框 --}}
<div class="col-sm-6 search-form" style="position: absolute;right:5px">
    <br>
    <form action="#" class="text-right" >
{{ csrf_field() }}
        
                    
    </form>
</div>
{{-- 搜索框 --}}
<div class="box-header">
    <h3 class="box-title">{{$title}}</h3>                                    
</div>

 <div class="box-body tablponsive" style="display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:2;overflow:hidden; texte-res-indent:2em;">
<form action="/admin/sn/time/alldelete" method="post">
<table id="example2" class="table table-bordered table-hover">
{{ csrf_field() }}

    <thead>
        <tr>
            <th >全选</th>
            <th>ID</th>
            <th>内容</th>
            <th>创建时间</th>
            <th>修改时间</th>
            <th>操作</th>
        </tr>
    </thead>
    
    <tbody >
        @foreach ($data as $k => $v)
            <tr>
                <td><input type="checkbox" name="del[]"  value="{{ $v->id }}" /></td>
                <td> {{ $v->id }} </td>
                <td> {!! $v->content !!} </td>
                <td> {{ $v->created_at }} </td>
                <td> {{ $v->updated_at }} </td>
                <td>
                    <a href="/admin/sn/time/edit/{{ $v->id }} " class="btn btn-success btn-sm">修改</a>
                    <a href="/admin/sn/time/destroy/{{ $v->id }} " class="btn btn-danger btn-sm">删除</a>
                </td>
            </tr>
        @endforeach
        
</tbody>
</table>
<input type="submit" value="全部删除" class="btn btn-danger btn-sm">
</form>
{!! $data->appends(['search'=>$search])->render() !!}
    

</div>
</div>

 @endsection