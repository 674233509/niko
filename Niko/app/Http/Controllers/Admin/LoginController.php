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
        $data1 = DB::table('sn_users as u')->where('username','=',$username)->select('u.username','u.qx','u.forbidden','u.id')->first();
        $data2 = DB::table('sn_users as u')->where('password','=',$password)->select('u.password')->first();
        
        //$res = $data1['username'];
        
        if($data1 == null){
           DB::rollBack();
            return back(); 
        }else if(($data1 -> qx) !=1 ){
            DB::rollBack();
            return back();
        }else if($data1->forbidden =='y'){
            DB::rollBack();
            return back();
        }else if($data1 && $data2){
            DB::commit();
            $id = $data1 -> id;

            session('adminFlag',true);
            return redirect('/admin/houtai/user/index')->with('denglu',$id);
        }else{
            DB::rollBack();
            return back()->withInput();
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
        if($password != $repass){
          //return back()->withInput('密码不一致');
          return back()->withErrors(['此激活码已与该用户绑定过！'])->withInput(); 
        }
        
        $data1 = DB::table('sn_users as u')
        ->where('username','=',$username)
        ->join('sn_userxiangs as ux','u.id','=','ux.uid')
        ->where('tel','=',$tel)
        ->select('u.id','u.username','u.qx','ux.tel')
        ->first();

        //判断用户是否存在，是否有权限
         if($data1 == null){
           DB::rollBack();
            return back(); 
        }else if(($data1 -> qx) !=1){
            DB::rollBack();
            return back();
        }else if($data1){
            DB::commit();
            //更改密码
            DB::table('sn_users')->where('username','=',$username)->update(['password'=>$data['password']]);
            //dump(DB::getQueryLog());
            return redirect('/admin/houtai/login/index');
        }else{
            DB::rollBack();
            return back()->withInput();
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
    public function getLogout()
    {
        
        session('adminFlag',false);
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
