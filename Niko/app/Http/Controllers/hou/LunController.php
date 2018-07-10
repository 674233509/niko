<?php

namespace App\Http\Controllers\hou;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Lun;
class LunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        //
        // 获取所有轮播图信息
        $data = Lun::all();
        
        // dump($data);//打印测试
        return view('hou.lun.show',['data'=>$data]);
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
        return view('hou.lun.create');
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
        
        // 文件上传
        // echo 'stoie';
        if($request -> hasFile('pic')){
            // 接受轮播图添加页面传过来的数据
            $data = $request->except(['_token']);
            // dump($data);//打印测试
            $lun = new Lun;
            $lun -> name = $data['name'];
            $lun -> content = $data['content'];
            $lun -> url = $data['url'];
            // echo 'ok';
            // 使用request 创建文件上传对象
            $profile = $request -> file('pic');
            $ext = $profile->getClientOriginalExtension();
            // 处理文件名称
            $temp_name = str_random(20);
            $name =  $temp_name.'.'.$ext;
            $dirname = date('Ymd',time());
            $res = $profile -> move('./uploads/'.$dirname,$name);
            // dump($res);
            $wename = '/uploads/'.$dirname.'/'.$name;
            $lun -> pic = $wename;
            $lun -> save();
            return redirect('/admin/sn/lun/index')->with('success','添加成功');
       } else {
                echo 'ヽ●*´∀`*●ﾉ终于可以光明正大的学习了';
            }
       
             
        // dump($lun);
        // echo $lun['pic'];
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
          //接收数据
        $data = DB::table('sn_luns as l')
        ->where('l.id','=',$id)
        ->select('l.id','l.name','l.content','l.url','l.pic')
       ->first();
        //修改显示页面
        return view('admin.sn.lun.edit',['data'=>$data]);
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
