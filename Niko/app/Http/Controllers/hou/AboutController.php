<?php

namespace App\Http\Controllers\hou;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\About;
class AboutController extends Controller
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
         $data = About::where('content','like','%'.$search.'%')->paginate(8);
        return view('hou.about.index',['data'=>$data,'search'=>$search]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        //
        // echo 'safwa';
        return view('hou.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postStore(Request $request)
    {
        //接受提交过来的数据
        $data = $request->except(['_token']);
        $about = new About;
        $about -> content = $data['content'];
        $res = $about->save();
        // dd($res);
         if ($res) {
            return redirect('/admin/sn/about/index')->with('success','添加成功');
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
        $data = About::find($id);
        return view('hou.about.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //执行修改
    public function postUpdate(Request $request, $id)
    {
        //接受修改的数据
        $data = $request->except(['_token']);

        $about = About::find($id);
        $about -> content = $data['content'];
        $res = $about->save();
        // dd($res);
        if ($res) {
            return redirect('/admin/sn/about/index')->with('success','修改成功');
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
        $res = About::destroy($data['del']);

        if ($res) {
            return redirect('/admin/sn/about/index')->with('success','删除成功');
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
          $res = About::destroy($id);
        if ($res) {
            return redirect('/admin/sn/about/index')->with('success','删除成功');
        } else {
            return back()->with('success','删除失败');
        }
    }
}
