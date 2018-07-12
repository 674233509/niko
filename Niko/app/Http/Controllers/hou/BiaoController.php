<?php

namespace App\Http\Controllers\hou;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Biao;

class BiaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex(Request $Request)
    {
        //
        // echo 'index';
        // $search = $request -> input('search','');
        $data = Biao::paginate(10) ;
        return view('hou.biao.show',['data'=>$data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        //
        // echo 'create';
        return view('hou.biao.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postStore(Request $request)
    {
        //
        $data = $request->except(['_token']);
        // 打印测试接值
        // dump($data['name']);
        $order = new Biao;
        $order -> name = $data['name'];
        $res = $order -> save();
        // dump($res);
         if($res){
           return redirect('/admin/sn/biao/index')->with('success','添加成功');
       }else{
            return back()->with('error','添加失败');
       }
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
    public function getEdit($id)
    {
        //
        // echo $id;
        $data = Biao::find($id);
        // dump($data);
        return view('hou.biao.edit',['data'=>$data]);

        // $data -> name = 

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postUpdate(Request $request, $id)
    {
        //
        // echo $id;
        $data = $request->except(['_token']);
        // dump($data['name']);
        $biao = Biao::find($id);
        $biao -> name = $data['name'];
        $res = $biao -> save();
        // dump($res);
        if ($res) {
            return redirect('/admin/sn/biao/index')->with('success','修改成功');

        } else {
            return back()->with('success','修改失败');
        }
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
