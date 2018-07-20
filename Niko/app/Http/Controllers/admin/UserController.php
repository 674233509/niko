<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use DB;
use App\Models\Forbiddens;
use Hash;
use Validator;
use App\Http\Requests\Admin\UserRequest;
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
    public function postStore(UserRequest $request)
    {
        
        //开启事物
        DB::beginTransaction();
        //将除了指定的所有数据存在闪存中
        //$request->flashExcept('_token','password','repass');
        //返回上一步并将数据存在闪存中
        //return back()->withInput();


       
        //获取表单的值
        $data = $request -> except('_token');
        $users = DB::table('sn_users')->where('username',$data['username'])->first();
        if($users){
             return back()->with('error','用户名已存在')->withInput();
        }
        
        if($data['password'] != $data['repass']){
            return back()->with('error','密码不一致')->withInput();
        }
        
       //hash 加密  密码
        //$pass = Hash::make($password);
        //用户登录验证密码   使用  Hash::check('用户输入的密码',$pass);
        //接收提交的数据
        
        //dump($data);
        //获取IP
        $ip = $request ->ip();
        //上传头像
        if($request -> hasFile('pic')){

            // 使用request 创建文件上传对象
            $profile = $request -> file('pic');
            $ext = $profile->getClientOriginalExtension();
            // 处理文件名称
            $temp_name = str_random(20);
            $name =  $temp_name.'.'.$ext;
            $dirname = date('Y-m-d',time());
            $res = $profile -> move('uploads/'.$dirname,$name);
            $data['pic'] = $res;
            //dump($res);
        }else{
            return back();
        }

        //dd(date('Y-m-d H:s:i',time()));
        //获取表单提交到sn_users表里的信息，并返回id
       $uid = DB::table('sn_users')->insertGetId(['username'=>$data['username'],'password'=>$data['password'],'qx'=>$data['qx'],'pic'=>$data['pic']]);
       $res = DB::table('sn_userxiangs')->insert(['uid'=>$uid,'sex'=>$data['sex'],'tel'=>$data['tel'],'mail'=>$data['mail'],'rtime'=>date('Y-m-d H:i:s',time()),'zip'=>$ip,'qq'=>$data['qq'],'dizhi'=>$data['dizhi']]);
       
       
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
    public function getDel(Request $request){

       //接收数据
        $d = $request->input('name');
        dd($d);
       //数据库信息
        $data = DB::table('sn_users as u')
        
        ->join('sn_userxiangs as ux','u.id','=','ux.uid')
        ->select('u.id','u.username','u.qx','ux.mail','ux.zip','ux.rtime','ux.tel','ux.sex')
        ->first();
        //dump($data);

    
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getEdit(Request $request,$id)
    {


        //接收数据
        $data = DB::table('sn_users as u')
        ->where('u.id','=',$id)
        ->join('sn_userxiangs as ux','u.id','=','ux.uid')
        ->select('u.id','u.password','u.username','u.pic','u.qx','ux.mail','ux.zip','ux.rtime','ux.tel','ux.sex','ux.qq','ux.dizhi')
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
    public function postUpdate(UserRequest $request, $id)
    {
        //开启事物
        //DB::beginTransaction();
        // //接收提交的数据
        //'username' => 'alpha_num'
        //'name' => 'size:10'
        $data = $request -> except('_token');

        if($data['password'] != $data['repass']){
            return back()->with('error','密码不一致')->withInput();
        } 

        //获取数据库照片
        $photo = DB::table('sn_users')->where('id','=',$id)->first();
        if($photo == null ){
            return back()->with('error','头像不能为空');
        }
       //获取数据库原图片地址
       $pic = $photo->pic;
      
        //获取IP
        $ip = $request ->ip();
        //上传头像
        if($request -> hasFile('pic')){
            // 使用request 创建文件上传对象
            $profile = $request -> file('pic');
            $ext = $profile->getClientOriginalExtension();
            // 处理文件名称
            $temp_name = str_random(20);
            $name =  $temp_name.'.'.$ext;
            $dirname = date('Y-m-d',time());
            $res = $profile -> move('uploads/'.$dirname,$name);
            $data['pic'] = $res;
            //dump($res);
            //修改数据
            $res2 = DB::table('sn_users')->where('id','=',$id)->update(['username'=>$data['username'],'password'=>$data['password'],'qx'=>$data['qx'],'pic'=>$data['pic']]);
            $res1 = DB::table('sn_userxiangs')->where('id','=',$id)->update(['sex'=>$data['sex'],'tel'=>$data['tel'],'mail'=>$data['mail'],'rtime'=>date('Y-m-d H:i:s',time()),'zip'=>$ip,'qq'=>$data['qq'],'dizhi'=>$data['dizhi']]);
               
               
                if($res2 && $res1){
                    //DB::commit();
                   return redirect('/admin/houtai/user/index')->with('success','修改成功，用户请重新登录');
               }else{
                    //DB::rollBack();
                    return back()->with('error','修改失败');
               }
        }else{

               //修改数据
               $res2 = DB::table('sn_users')->where('id','=',$id)->update(['username'=>$data['username'],'password'=>$data['password'],'qx'=>$data['qx'],'pic'=>$pic]);
               $res1 = DB::table('sn_userxiangs')->where('id','=',$id)->update(['sex'=>$data['sex'],'tel'=>$data['tel'],'mail'=>$data['mail'],'rtime'=>date('Y-m-d H:i:s',time()),'zip'=>$ip,'qq'=>$data['qq'],'dizhi'=>$data['dizhi']]);
               
                $res2=true;
                if($res2 && $res1){
                    //DB::commit();
                   return redirect('/admin/houtai/user/index')->with('success','修改成功，用户请重新登录');
               }else{
                    //DB::rollBack();
                    return back()->with('error','修改失败');
               }

            
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
