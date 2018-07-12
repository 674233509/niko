<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Models\User;
class RepassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        //获取密码管理页面
        return view('admin.houtai.repass.repass',['title'=>'密码管理']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        // 开启QueryLog
        DB::connection()->enableQueryLog();  
        //获取username  tel password repass
        $data = $request->except('_token');

        $tel = $data['tel'];
        $username = $data['username'];
        $oldpass = $data['oldpass'];
        $newpass = $data['newpass'];
        $repass = $data['repass'];
        
        //获取数据库中的username tel password 数据

        $data1 = DB::table('sn_users as u')
        ->where('username','=',$username)
        ->join('sn_userxiangs as ux','u.id','=','ux.uid')
        ->where('tel','=',$tel)
        ->select('u.id','u.username','u.qx','ux.tel','u.password')
        ->first();
       
        


        //判断 用户名 手机号 原密码  是否和数据库存储值一致
        if($data1 == null){
           DB::rollBack();
            return back(); 
        }else if($tel == ($data1->tel) && $oldpass == ($data1->password) && $newpass == $repass){
            //执行事务
            DB::commit();
            //获取id
            $id = $data1->id;
            //更改密码
            DB::table('sn_users')->where('id','=',$id)->update(['password'=>$newpass]);
           
            return redirect('/admin/houtai/user/index')->with('success','密码修改成功');
        }else{
            return back()->withInput()->with('error','输入信息有误'); 
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
    public function destroy($id)
    {
        //
    }
}
