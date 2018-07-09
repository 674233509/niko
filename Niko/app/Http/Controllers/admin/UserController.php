<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use DB;
class UserController extends Controller
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
        //接收数据
        $data = DB::table('sn_users as u')
        ->where('username','like','%'.$search.'%')
        ->join('sn_userxiangs as ux','u.id','=','ux.uid')
        ->select('u.id','u.username','u.qx','ux.mail','ux.zip','ux.rtime','ux.tel','ux.sex')
        ->paginate(3);
        //用户管理页面显示
        return view('admin.houtai.user.index',['title'=>'用户管理','data'=>$data,'search'=>$search]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        //添加用户
        return view('admin.houtai.user.add',['title'=>'添加用户']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postStore(Request $request)
    {
        
        //开启事物
        DB::beginTransaction();
        //接收提交的数据
        $data = $request -> except('_token');
        //dump($data);
        //获取IP
        $ip = $request ->ip();
        //上传头像
        if($request -> hasFile('pic')){

            // 使用request 创建文件上传对象
            $profile = $request -> file('pic');
            $ext = $profile->getClientOriginalExtension();
            // 处理文件名称
            $temp_name = str_random(10);
            $name =  $temp_name.'.'.$ext;
            $dirname = date('Y-m-d',time());
            $res = $profile -> move('./uploads/'.$dirname,$name);
            $data['pic'] = $res;
            //dump($res);
        }else{
            return back();
        }

        //dd(date('Y-m-d H:s:i',time()));
        //获取表单提交到sn_users表里的信息，并返回id
       $uid = DB::table('sn_users')->insertGetId(['username'=>$data['username'],'password'=>$data['password'],'qx'=>$data['qx'],'pic'=>$data['pic']]);
       $res = DB::table('sn_userxiangs')->insert(['uid'=>$uid,'sex'=>$data['sex'],'tel'=>$data['tel'],'mail'=>$data['mail'],'rtime'=>date('Y-m-d H:i:s',time()),'zip'=>$ip]);
       
       
        if($uid && $res){
            DB::commit();
           return redirect('/admin/houtai/user/index')->with('success','添加成功');
       }else{
            DB::rollBack();
            return back()->with('error','添加失败');
       }

    }

    /**
     * 批量删除
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getDel(Request $request)
    {
        //获取数据
        echo '批量删除待写';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getEdit($id)
    {
        //接收数据
        $data = DB::table('sn_users as u')
        ->where('u.id','=',$id)
        ->join('sn_userxiangs as ux','u.id','=','ux.uid')
        ->select('u.id','u.username','u.pic','u.qx','ux.mail','ux.zip','ux.rtime','ux.tel','ux.sex')
       ->first();
        //修改显示页面
        return view('admin.houtai.user.edit',['title'=>'用户修改','data'=>$data]);
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
        //开启事物
        DB::beginTransaction();
        //接收提交的数据
        $data = $request -> except('_token');
        //dump($data);
        //获取IP
        $ip = $request ->ip();
        //上传头像
        if($request -> hasFile('pic')){

            // 使用request 创建文件上传对象
            $profile = $request -> file('pic');
            $ext = $profile->getClientOriginalExtension();
            // 处理文件名称
            $temp_name = str_random(10);
            $name =  $temp_name.'.'.$ext;
            $dirname = date('Y-m-d',time());
            $res = $profile -> move('./uploads/'.$dirname,$name);
            $data['pic'] = $res;
            //dump($res);
        }else{
            return back();
        }

        //dd(date('Y-m-d H:s:i',time()));
        //获取表单提交到sn_users表里的信息，并返回id
       $uid = DB::table('sn_users')->where('id','=',$id)->update(['username'=>$data['username'],'password'=>$data['password'],'qx'=>$data['qx'],'pic'=>$data['pic']]);
       $res = DB::table('sn_userxiangs')->where('id','=',$id)->update(['sex'=>$data['sex'],'tel'=>$data['tel'],'mail'=>$data['mail'],'rtime'=>date('Y-m-d H:i:s',time()),'zip'=>$ip]);
       
       
        if($uid && $res){
            DB::commit();
           return redirect('/admin/houtai/user/index')->with('success','添加成功');
       }else{
            DB::rollBack();
            return back()->with('error','添加失败');
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
        //开启事物
       DB::beginTransaction();
       $res1 = DB::table('sn_users')->where('id','=',$id)->delete();
       $res2 = DB::table('sn_userxiangs')->where('uid','=',$id)->delete();
       if($res1 && $res2){
            DB::commit();
           return redirect('/admin/houtai/user/index')->with('success','删除成功');
       }else{
            DB::rollBack();
            return back()->with('error','删除失败');
       }
    }
}
