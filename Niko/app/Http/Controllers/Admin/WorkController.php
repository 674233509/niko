<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Edu;
use App\Models\Work;
use App\Models\Userxiang;
class WorkController extends Controller
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
            $id = session('idd');
            //获取数据库内容
            $w = Work::where('uid','=',$id)->first();
            $data = Edu::where('uid','=',$id)->first();
            //dd($data->edut1);
            //个人简历页面
            return view('admin.houtai.gerenjianli.gerenjianli',['w'=>$w,'data'=>$data]);
        }else{
            return redirect("/admin/houtai/user/index")->with('error','登录信息获取失败')->withInput();
        }
        //dd($id);
        
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
            $data = Work::where('uid','=',$id)->first();
            if($data['uid']==$id){
                return redirect("/admin/houtai/work/edit/{{session('idd')}}")->with('error','工作信息已存在已进入修改页面')->withInput();
            }
           
            //添加教育信息页面
            return view('admin.houtai.gerenjianli.work',['title'=>'添加工作信息']);
            
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
            $work = new Work;
            $work -> uid   = $uid;
            $work -> worktime1 = $data['worktime1'];
            $work -> workzhiwei1  = $data['workzhiwei1'];
            $work -> workcontent1  = $data['workcontent1'];
            $work -> worktime2 = $data['worktime2'];
            $work -> workzhiwei2  = $data['workzhiwei2'];
            $work -> workcontent2  = $data['workcontent2'];
            $work -> worktime3 = $data['worktime3'];
            $work -> workzhiwei3  = $data['workzhiwei3'];
            $work -> workcontent3  = $data['workcontent3'];
            $work -> save();
            return redirect('/admin/houtai/work/index');
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
    public function getEdit(Request $request,$id)
    {
        if($request->session()->has('user')){
            //获取登录用户的id
            $id = session('idd');
            $data = Work::where('uid','=',$id)->first();
            $uid = $data['uid'];
            if($uid==null){
                return redirect("/admin/houtai/work/create")->with('error','工作信息为空已进入添加页面')->withInput();
            }
            if($id == $uid){
              
                //修改教育信息页面
                return view('admin.houtai.gerenjianli.editwork',['title'=>'修改教育信息','data'=>$data]);
                }else{
                    return back()->with('error','用户信息不匹配或数据库内容为空')->withInput();
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
            $work =Work::where('uid','=',$id)->first();
            //dd($id);
            $uid = $work -> uid;
            //dd($uid);
            if($id==$uid){
                $work -> worktime1 = $data['worktime1'];
                $work -> workzhiwei1  = $data['workzhiwei1'];
                $work -> workcontent1  = $data['workcontent1'];
                $work -> worktime2 = $data['worktime2'];
                $work -> workzhiwei2  = $data['workzhiwei2'];
                $work -> workcontent2  = $data['workcontent2'];
                $work -> worktime3 = $data['worktime3'];
                $work -> workzhiwei3  = $data['workzhiwei3'];
                $work -> workcontent3  = $data['workcontent3'];
                $work -> save();
                return redirect('/admin/houtai/work/index');
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
