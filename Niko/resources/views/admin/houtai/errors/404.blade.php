@extends('muban.houtai.ban')
 @section('hou.index')
 
 <!-- Main content -->
<section class="content">
 
    <div class="error-page">
        <h2 class="headline text-info"> 404</h2>
        <div class="error-content">
            <h3><i class="fa fa-warning text-yellow"></i> 发生了一些小错误</h3>

            @if(session('error'))
            <p>
                <font color="red" size="5" style="font-family:华文行楷">{{ session('error') }}</font>，你可以换一下搜索条件再试一次，我们为你提供ID，用户名搜索条件。
            </p>
            @else
            <p>
                <font color="red" size="5" style="font-family:华文行楷">没有找到要查询的内容</font>，你可以换一下搜索条件再试一次，我们为你提供ID，用户名搜索条件。
            </p>
            @endif
            <form class='search-form' action="/admin/houtai/search/index" method="get">
                <div class='input-group'>
                    <input type="text" name="search" class='form-control' placeholder="Search"/>
                    <div class="input-group-btn">
                        <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    </div>
                </div><!-- /.input-group -->
            </form>
        </div><!-- /.error-content -->
    </div><!-- /.error-page -->

</section><!-- /.content -->
@endsection