<?php

namespace App\Http\Controllers\qian;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Liuyan;

class LiuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        //
        // echo 'liuyan';
        $data = Liuyan::all();
        return view ('qian.liuyan.index',['data'=>$data]);
    }

    /*
    前台保存留言
    */

    public function postSave(Request $request)
    {
        // echo 'asd';
        $data = $request->except(['_token']);
        $id = session('denglu')['id'];
        $liuyan = new Liuyan;
        $liuyan -> uid = $id;
        $liuyan -> content = $data['content'];
        $res = $liuyan -> save();
        // dump($liuyan->liuren);

        // dump($id);
        // dd($data);
        if($res){
            return back()->with('success','修改成功');
        }else{
            return back()->with('error','修改失败');
        }
    }

    /*
    后台管理留言
    */
    public function getShow () 
    {
        // echo '后台留言';
        $data = Liuyan::paginate(10);
        return view('hou.liuyan.index',['data'=>$data]);
    }
    /*
    后台修改留言
    */
    public function getEdit($id)
    {
        // echo $id;
        $data = Liuyan::find($id);
        return view('hou.liuyan.edit',['data'=>$data]);
    }


    /*
    后台上传修改的留言
    */

    public function postUpdate(Request $request ,$id)
    {
        // echo $id;
        $data = $request->except(['_token']);
        // dump($data);
        $liu = Liuyan::find($id);
        $liu -> content = $data['content'];
        $res = $liu -> save();
         if ($res) {
            return redirect('/admin/sn/liu/show')->with('success','修改成功');
        } else {
            return back()->with('success','修改失败');
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
