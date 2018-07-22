<?php

namespace App\Http\Controllers\hou;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Time;
class TimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex(Request $request)
    {
        //
        $search = $request -> input('search','');
         $data = Time::where('content','like','%'.$search.'%')->paginate(8);
        return view('hou.time.index',['data'=>$data,'search'=>$search,'title'=>'查看时间轴']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        //
        return view('hou.time.create',['title'=>'添加时间轴']);
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
         //接受提交过来的数据
        $data = $request->except(['_token']);
        $time = new Time;
        $time -> content = $data['content'];
        $res = $time->save();
        // dd($res);
         if ($res) {
            return redirect('/admin/sn/time/index')->with('success','添加成功');
        } else {
            return back()->with('success','添加失败');
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
         $data = Time::find($id);
        return view('hou.time.edit',['data'=>$data]);
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
         //接受修改的数据
        $data = $request->except(['_token']);

        $time = Time::find($id);
        $time -> content = $data['content'];
        $res = $time->save();
        // dd($res);
        if ($res) {
            return redirect('/admin/sn/time/index')->with('success','修改成功');
        } else {
            return back()->with('success','修改失败');
        }
    }

     /**
    *多个删除
    */
    public function postAlldelete(Request $request)
    {
        // echo 'asd';
         $data = $request->except(['_token']);
         // dump($data);
        $res = Time::destroy($data['del']);

        if ($res) {
            return redirect('/admin/sn/time/index')->with('success','删除成功');
        } else {
            return back()->with('success','删除失败');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getDestroy($id)
    {
        //
          $res = Time::destroy($id);
        if ($res) {
            return redirect('/admin/sn/time/index')->with('success','删除成功');
        } else {
            return back()->with('success','删除失败');
        }
    }
}
