<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Hash;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        //
        return view('admin.houtai.login.login',['title'=>'管理员登录']);
    }

    /**
     * 登录
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreate(Request $request)
    {
        //开启事物
        DB::beginTransaction();
        //获取用户名和密码
        $username = $request->input('username');
        $password = $request->input('password');
        
        
        //解密
        //Hash::check($password,$pass);
        //dump($password);
        $data1 = DB::table('sn_users as u')->where('username','=',$username)->select('u.username','u.qx','u.forbidden','u.id','u.pic')->first();
        $data2 = DB::table('sn_users as u')->where('password','=',$password)->select('u.password')->first();



        $data3 = DB::table('sn_users as u')
        ->where('username','=',$username)
        ->join('sn_userxiangs as ux','u.id','=','ux.uid')
        ->select('u.id','u.username','u.qx','ux.tel','ux.mail','ux.sex')
        ->first();
        
        //$res = $data1['username'];
        
        if($data1 == null){
           DB::rollBack();
            return back()->with('error','用户不存在')->withInput();
        }else if(($data1 -> qx) !=1 ){
            DB::rollBack();
            return back()->with('error','请登录管理员用户');
        }else if($data1->forbidden =='y'){
            DB::rollBack();
            return back()->with('error','用户已被禁用');
        }else if($data1 && $data2){
            DB::commit();
            //登录存值
            $request->session()->put('user',$username);
            $request->session()->put('pic',$data1->pic);
            $request->session()->put('sex',$data3->sex);
            $request->session()->put('tel',$data3->tel);
            $request->session()->put('mail',$data3->mail);
            $request->session()->put('qx',$data3->qx);
            $request->session()->put('id',$data3->id);
            //dd($data1->pic);
            return redirect('/admin/houtai/shouye/index');
            
        }else{
            DB::rollBack();
            return back()->with('error','密码错误')->withInput();
        }
        
      
    }

    /**
     * 修改密码 将新密码存入数据库
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postStore(Request $request)
    {
        //开启事物
        DB::beginTransaction();
        // 开启QueryLog
        DB::connection()->enableQueryLog();
        //获取username  tel password repass
        $data = $request->except('_token');
        $tel = $data['tel'];
        $username = $data['username'];
        $password = $data['password'];
        $repass = $data['repass'];
        
        
        $data1 = DB::table('sn_users as u')
        ->where('username','=',$username)
        ->join('sn_userxiangs as ux','u.id','=','ux.uid')
        ->where('tel','=',$tel)
        ->select('u.id','u.username','u.qx','ux.tel')
        ->first();
        
        //判断用户是否存在，是否有权限
         if($data1 == null){
           DB::rollBack();
            return back()->with('error','用户名或手机号错误')->withInput(); 
        }

        if($password != $repass){
          return back()->with('error','密码不一致')->withInput();
          //return back()->withErrors(['此激活码已与该用户绑定过！'])->withInput(); 
        }

        if(($data1 -> qx) !=1){
            DB::rollBack();
            return back()->with('error','您不是管理员')->withInput();
        }

        if($data1){
            DB::commit();
            //更改密码
            DB::table('sn_users')->where('username','=',$username)->update(['password'=>$data['password']]);
            //dump(DB::getQueryLog());
            return redirect('/admin/houtai/login/index');
        }else{
            DB::rollBack();
            return back()->with('error','密码修改失败')->withInput();
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getShow(Request $request)
    {
        //修改密码页面
        return view('admin.houtai.login.repass',['title'=>'修改密码']);
        
    }

    /**
     *退出登录
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getLogout(Request $request)
    {
        
         //判断session里面是否有值(用户是否登陆)
        if($request->session()->has('user')){
            //移除session
            $request->session()->pull('user',session('user'));
            $request->session()->pull('pic',session('pic'));
            $request->session()->pull('sex',session('sex'));
            $request->session()->pull('tel',session('tel'));
            $request->session()->pull('mail',session('mail'));
            $request->session()->pull('qx',session('qx'));
            $request->session()->pull('id',session('id'));
            
        }
        return redirect('/admin/houtai/login/index');
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
