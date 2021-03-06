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
        
        <div class="input-group">
          <input type="text" name="search" class="form-control input-sm" placeholder="文章标题">
            <div class="input-group-btn">
                <button type="submit" name="q" class="btn btn-sm btn-primary"><i class="fa fa-search"></i></button>

                
            </div>
        </div>                      
    </form>
</div>
{{-- 搜索框 --}}
<div class="box-header">
    <h3 class="box-title">查看文章</h3>                                    
</div>

 <div class="box-body table-responsive">
<form action="/admin/sn/wen/alldelete" method="post">
<table id="example2" class="table table-bordered table-hover">
{{ csrf_field() }}

    <thead>
        <tr>
            <th >全选</th>
            <th>ID</th>
            <th>文章标题</th>
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
                <td> {{ $v->title }} </td>
                <td> {{ $v->created_at }} </td>
                <td> {{ $v->updated_at }} </td>
                <td>
                    <a href="/admin/sn/wen/edit/{{ $v->id }} " class="btn btn-success btn-sm">修改</a>
                    <a href="/admin/sn/wen/delete/{{ $v->id }}/delone " class="btn btn-danger btn-sm">删除</a>
                    <a href="/admin/sn/wen/delete/{{$v->id}}/delall" onclick="return confirm('确认要永久删除吗')" class="btn btn-danger">永久删除</a>
                    
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