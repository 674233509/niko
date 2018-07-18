<?php

namespace App\Http\Controllers\hou;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Yulu;
class YuluController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex(Request $request)
    {
        //
        // echo '语录显示';
        $search = $request -> input('search','');
        $data = Yulu::where('content','like','%'.$search.'%')->orwhere('name','like','%'.$search.'%')->paginate(8);
        // $data = Yulu::paginate(10);
        return view('hou.yulu.show',['data'=>$data,'search'=>$search]);

    }

    /**
     * Show the form for creating a new resource.
     *经典语录添加界面
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        //
        // echo "string";
        return view('hou.yulu.create');

    }

    /**
     * Store a newly created resource in storage.
     *  经典语录保存
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postStore(Request $request)
    {
        //
        $data = $request->except(['_token']);
        // dd($data);
        // $dd = Yulu::all();
        // dd($dd);
        $yulu = new Yulu;
        $yulu -> name = $data['name'];
        $yulu -> content = $data['content'];
        $res = $yulu -> save();
        // dump($res);
        if ($res) {
            return redirect('/admin/sn/yulu/index')->with('success','添加成功');
        } else {
            return back()->with('success','修改失败');
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
        $data = Yulu::find($id);
        return view('hou.yulu.edit',['data'=>$data]);

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
        // echo 'updata';
        // echo $id;
        $data = $request->except(['_token']);
        $yulu = Yulu::find($id);
        // dd($yulu);
        $yulu -> name = $data['name'];
        $yulu -> content = $data['content'];
        $res = $yulu -> save();
        if ($res) {
            return redirect('/admin/sn/yulu/index')->with('success','添加成功');
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
    public function getShan($id)
    {
        //
        // echo $id;
        $res = Yulu::destroy($id);
        if ($res) {
            return redirect('/admin/sn/yulu/index')->with('success','添加成功');
        } else {
            return back()->with('success','修改失败');
        }

    }
}
