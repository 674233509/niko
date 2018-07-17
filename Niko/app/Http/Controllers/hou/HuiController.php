<?php

namespace App\Http\Controllers\hou;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Ping;
use App\Models\Wen;

class HuiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex(Request $request)
    {
         // 获取搜索关键字
        $search = $request -> input('search','');
        $data = Ping::all();//获取评论所有的值
         // $del =Wen::onlyTrashed()->where('title','like','%'.$search.'%')->paginate(10);
        $del_data = Ping::onlyTrashed()->where('content','like','%'.$search.'%')->paginate(10); //获取评论删除的值
        // dd($data);
        // dd($del_data);
        return view('hou.hui.index',['title'=>'评论回收站','del_data'=>$del_data,'search'=>$search]);
    }
    //评论恢复
    public function getReset($id)
    {
        // echo $id;  恢复指定的值
       $res =  Ping::withTrashed()->where('id','=', $id)->restore();
        // dump($res);
       if($res){
            return redirect('/admin/sn/hui/index')->with('success','恢复成功');

       }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
        
    //文章回收站
    public function getWenzhang(Request $request)
    {
        //
         // 获取搜索关键字
        $search = $request -> input('search','');
        $data = Wen::all();//获取评论所有的值
         $del =Wen::onlyTrashed()->where('title','like','%'.$search.'%')->paginate(10); //搜索
         // $del = Wen::onlyTrashed()->paginate(10); //获取评论删除的值
         // dd($del_data);
        return view('hou.hui.wenzhang',['data'=>$data,'title'=>'文章回收站','del'=>$del,'search'=>$search]);
    }

    //文章恢复
    public function getZhang($id)
    {
        // echo $id;  恢复指定的值
       $hui =  Wen::withTrashed()->where('id','=', $id)->restore();
        // dump($res);
       if($hui){
            return redirect('/admin/sn/hui/wenzhang')->with('success','恢复成功');

       }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
