<?php

namespace App\Http\Controllers\hou;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Yin;
class YinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex(Request $request)
    {
        //
           // 获取搜索关键字
        $search = $request -> input('search','');
         $data = Yin::where('name','like','%'.$search.'%')->paginate(10);
        // $data = Ping::all();//获取评论所有的值
        return view('hou.yin.index',['title'=>'歌曲设置','data'=>$data,'search'=>$search]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        //
        return view('hou.yin.create',['title'=>'添加歌曲']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postStore(Request $request)
    {
    
        //接收提交的数据
       $data = $request->except(['_token']);
        // dd($data);
        $yin = new Yin;
        // dd($data);
        $yin -> name = $data['name'];
        $yin -> zuozhe = $data['zuozhe'];
        $yin -> zhuanji = $data['zhuanji'];        
        // dump($wen);
        //     // 使用request 创建文件上传对象
            $profile = $request -> file('mp3');
            $ext = $profile->getClientOriginalExtension();
            // 处理文件名称
            $temp_name = str_random(20);
            $name =  $temp_name.'.'.$ext;
            $dirname = date('Ymd',time());
            $res = $profile -> move('./uploads/gequ/'.$dirname,$name);
        //     // dump($res);
            $gename = '/uploads/gequ/'.$dirname.'/'.$name;
            $yin -> mp3 = $gename;
            
             $res = $yin ->save();
             // dd($res);
        if ($res) {
            return redirect('/admin/sn/yin/index')->with('success','添加成功');
        } else {
            return back()->with('success','添加失败');
        }
          
            // dd('aaaaaaa');
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
    public function getDestroy($id)
    {
        //
          $res = Yin::destroy($id);
        if ($res) {
            return redirect('/admin/sn/yin/index')->with('success','删除成功');
        } else {
            return back()->with('success','删除失败');
        }
    }
}
