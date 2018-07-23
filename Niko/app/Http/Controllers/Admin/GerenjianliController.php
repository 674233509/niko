<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Edu;
use App\Models\Work;
use App\Models\Userxiang;
class GerenjianliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex(Request $request)
    {
        if($request->session()->has('user')){
            //获取登录用户的id
            $user = session('user');
            $id = session('idd');
            //获取数据库内容
            $data = Edu::where('uid','=',$id)->first();
            $w = Work::where('uid','=',$id)->first();
            //dd($data->edut1);
            //个人简历页面
            return view('admin.houtai.gerenjianli.gerenjianli',['data'=>$data,'w'=>$w]);
            //$user = session('idd');
            //dd($user);
        }else{
            return redirect("/admin/houtai/user/index")->with('error','登录信息获取失败')->withInput();
        }
       
        
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate(Request $request)
    {
         if($request->session()->has('user')){
            //获取登录用户的id
            $id = session('idd');
            $user = session('user');
            //dd($id);
            $data = Edu::where('uid','=',$id)->first();
            //dd($data['uid']);
            if($data['uid']==$id){
                return redirect("/admin/houtai/gerenjianli/edit/{{session('idd')}}")->with('error','教育信息已存在已进入修改页面')->withInput();
            }
            //dump(isset($data['edu1']));
            //exit;
            // if($data['edu1']=="" ){
            //     return redirect("/admin/houtai/gerenjianli/edit/{{session('idd')}}")->with('error','教育信息一已存在已进入修改页面')->withInput();
            // }
            
           

            //添加教育信息页面
            return view('admin.houtai.gerenjianli.edu',['title'=>'添加教育信息']);
            
        }else{
                return back()->with('error','没有发现登录用户')->withInput();
            }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postStore(Request $request)
    {
        //保存教育信息
        if($request->session()->has('user')){
            //获取登录用户的id
            $uid = session('idd');
            //获取表单输入的信息
            $data = $request->except('_token');
            //dd($data);
            $edu = new Edu;
            $edu -> uid   = $uid;
            $edu -> edut1 = $data['edut1'];
            $edu -> edu1  = $data['edu1'];
            $edu -> edutime1  = $data['edutime1'];
            $edu -> edut2 = $data['edut2'];
            $edu -> edu2  = $data['edu2'];
            $edu -> edutime2  = $data['edutime2'];
            $edu -> edut3 = $data['edut3'];
            $edu -> edu3  = $data['edu3'];
            $edu -> edutime3  = $data['edutime3'];
            $edu -> save();
            return redirect('/admin/houtai/gerenjianli/index');
        }else{
            return back()->with('error','信息添加失败')->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getShow()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getEdit(Request $request,$id)
    {
        if($request->session()->has('user')){
            //获取登录用户的id
            $id = session('idd');
            $data = Edu::where('uid','=',$id)->first();
            $uid = $data['uid'];
            if($uid==null){
                return redirect("/admin/houtai/gerenjianli/create")->with('error','教育信息为空已进入添加页面')->withInput();
            }
            if($id == $uid){
              
                //修改教育信息页面
                return view('admin.houtai.gerenjianli.edit',['title'=>'修改教育信息','data'=>$data]);
                }else{
                    return back()->with('error','用户信息不匹配')->withInput();
                }
            //dd($id);
            
            
        }else{
                return back()->with('error','没有发现登录用户')->withInput();
            }
        
        
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
         //保存教育信息
        if($request->session()->has('user')){
            //获取登录用户的id
            $id = session('idd');
            //dd($id);
            //获取表单输入的信息
            $data = $request->except('_token');
            //dd($data);
            $edu =Edu::where('uid','=',$id)->first();
            //dd($id);
            $uid = $edu -> uid;
            //dd($uid);
            if($id==$uid){
                $edu -> edut1 = $data['edut1'];
                $edu -> edu1  = $data['edu1'];
                $edu -> edutime1  = $data['edutime1'];
                $edu -> edut2 = $data['edut2'];
                $edu -> edu2  = $data['edu2'];
                $edu -> edutime2  = $data['edutime2'];
                $edu -> edut3 = $data['edut3'];
                $edu -> edu3  = $data['edu3'];
                $edu -> edutime3  = $data['edutime3'];
                $edu -> save();
                return redirect('/admin/houtai/gerenjianli/index');
            }else{
                return back()->with('error','没有发现指定信息修改失败')->withInput();
            }
            
            
        }else{
            return back()->with('error','用户信息获取失败')->withInput();
        }
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
