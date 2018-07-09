<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Fris;
use DB;
class FriController extends Controller
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
        $data = DB::table('sn_fris as f')
        //->where('username','like','%'.$search.'%')
        ->select('f.id','f.title','f.content','f.url','f.pic')
        ->paginate(3);
        return  view('admin.fri.index',['title'=>'用户管理','data'=>$data,'search'=>$search]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        //
        return view('admin.fri.create',['title'=>'添加用户']);
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
        //dump($request -> all());
        //检测字段有没有填
          //  $this->validate($request, [
            //'title' => 'required|unique:fris',
            //'url' => 'required',
        //],[
          //  'title.required' => '标题必填',
            //'title.unique' => '该标题已存在',
            //'url.required' => '地址必填',

        //]);
        //数据库
         //开启事物
        DB::beginTransaction();
        //接收提交的数据
        $data = $request -> except('_token');
        //dump($data);
        
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
       $uid = DB::table('sn_fris')->insertGetId(['title'=>$data['title'],'content'=>$data['content'],'url'=>$data['url'],'pic'=>$data['pic']]);
       
       
       
        if($uid){
            DB::commit();
           return redirect('/admin/fri/index')->with('success','添加成功');
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
        $data = DB::table('sn_fris as f')
        ->where('f.id','=',$id)
        ->select('f.id','f.title','f.content','f.url','f.pic')
       ->first();
        //修改显示页面
        return view('admin.fri.edit',['title'=>'用户修改','data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


     public function getDel(Request $request)
    {
        //获取数据
        $data = $request -> input('id');
        dump($data);
    }


    public function postUpdate(Request $request, $id)
    {
        //
        //开启事物
        DB::beginTransaction();
        //接收提交的数据
        $data = $request -> except('_token');
        //dump($data);
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
       $uid = DB::table('sn_fris')->where('id','=',$id)->update(['title'=>$data['title'],'content'=>$data['content'],'url'=>$data['url'],'pic'=>$data['pic']]);
       
       
        if($uid){
            DB::commit();
           return redirect('/admin/fri/index')->with('success','修改成功');
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
       $res1 = DB::table('sn_fris')->where('id','=',$id)->delete();
       if($res1){
            DB::commit();
           return redirect('/admin/fri/index')->with('success','删除成功');
       }else{
            DB::rollBack();
            return back()->with('error','删除失败');
       }
    }
    
}
