<?php

namespace App\Http\Controllers\hou;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Peizhi;
use DB;
class PeizhiController extends Controller
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
        //接收数据
        $data = DB::table('sn_peizhis as p')
        ->where('title','like','%'.$search.'%')
        ->select('p.id','p.hand','p.title','p.kami','p.open','p.logo')
        ->paginate(3);
        return view('hou.peizhi.index',['title'=>'管理网站配置','data'=>$data,'search'=>$search]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        //
        return view('hou.peizhi.create',['title'=>'添加网站配置']);
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
         //开启事物
        DB::beginTransaction();
        //接收提交的数据
        $data = $request -> except('_token');
        // dump($data);
        
        //上传头像
        if($request -> hasFile('logo')){

            // 使用request 创建文件上传对象
            $profile = $request -> file('logo');
            $ext = $profile->getClientOriginalExtension();
            // 处理文件名称
            $temp_name = str_random(10);
            // dump($temp_name);
            $name =  $temp_name.'.'.$ext;
            $dirname = date('Y-m-d',time());
            $res = $profile -> move('uploads/peizhi/logo/'.$dirname,$name);
            // dd($name);
            // dump($dirname);
            $data['logo'] = $res;
            // dump($res);
            // dd($res);
            
        }else{
            // echo '失败';
            return back()->with('error','没有图片添加失败');
        }
        // dump($data);
        //dd(date('Y-m-d H:s:i',time()));
        //获取表单提交到sn_peizhis表里的信息，并返回id
       $pid = DB::table('sn_peizhis')->insertGetId(['hand'=>$data['hand'],'title'=>$data['title'],'kami'=>$data['kami'],'open'=>$data['open'],'logo'=>$data['logo']]);
       
       // dump($uid);
       
        if($pid){
            DB::commit();
           return redirect('/admin/sn/peizhi/index')->with('success','添加成功');
       }else{
            DB::rollBack();
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
         //接收数据
        $data = DB::table('sn_peizhis as p')
        ->where('p.id','=',$id)
        ->select('p.id','p.hand','p.title','p.kami','p.open','p.logo')
       ->first();
        //修改显示页面
        return view('hou.peizhi.edit',['title'=>'网站配置修改','data'=>$data]);

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
        //开启事物
        DB::beginTransaction();
        //接收提交的数据
        $data = $request -> except('_token');
        //dump($data);
        //上传头像
        if($request -> hasFile('logo')){

            // 使用request 创建文件上传对象
            $profile = $request -> file('logo');
            $ext = $profile->getClientOriginalExtension();
            // 处理文件名称
            $temp_name = str_random(10);
            $name =  $temp_name.'.'.$ext;
            $dirname = date('Y-m-d',time());
            $res = $profile -> move('./uploads/'.$dirname,$name);
            $data['logo'] = $res;
            //dump($res);
        }else{
            return back();
        }

        //dd(date('Y-m-d H:s:i',time()));
        //获取表单提交到sn_peizhis表里的信息，并返回id
       $uid = DB::table('sn_peizhis')->where('id','=',$id)->update(['hand'=>$data['hand'],'title'=>$data['title'],'kami'=>$data['kami'],'open'=>$data['open'], 'logo'=>$data['logo']]);
       
       
        if($uid){
            DB::commit();
           return redirect('/admin/sn/peizhi/index')->with('success','修改成功');
       }else{
            DB::rollBack();
            return back()->with('error','修改失败');
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
          //开启事物
       DB::beginTransaction();
       $res = DB::table('sn_peizhis')->where('id','=',$id)->delete();
       if($res){
            DB::commit();
           return redirect('/admin/sn/peizhi/index')->with('success','删除成功');
       }else{
            DB::rollBack();
            return back()->with('error','删除失败');
       }
    }
}
