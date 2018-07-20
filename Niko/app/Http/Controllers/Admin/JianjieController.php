<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
class JianjieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex(Request $request)
    {
        
        //简介首页
        return view('admin.houtai.user.jianjie',['title'=>'简介']);
    }

    /**
     * 头像上传
     *
     * @return \Illuminate\Http\Response
     */
    public function postUploads(Request $request)
    {
        //获取session里的id
        if($request->session()->has('idd')){
            $id = session('idd');
            $request->session()->pull('pic',session('pic'));
       
           
            //上传头像
            if($request -> hasFile('picc')){

                // 使用request 创建文件上传对象
                $profile = $request -> file('picc');
                $ext = $profile->getClientOriginalExtension();
                // 处理文件夹名称
                $file_dir = 'uploads/'.date('Y-m-d',time());
                //处理文件名称
                $file_name = str_random(20).'.'.$ext;
                //将文件移动到指定文件夹
                $res = $profile -> move($file_dir,$file_name);
                //通过session的id查找数据库
                $data = User::where('id','=',$id)->first();
                $data->pic = $file_dir.'/'.$file_name;
                $data->save();
                //将头像重新写入session
                   
                $request->session()->put('pic',$data->pic);
               
               
                if($res){
                    $arr =[
                              'code'=> 0,
                              'msg'=> '上传成功',
                              'data'=>[
                              'src'=> '/'.$file_dir.'/'.$file_name
                                    ]
                    ];
                }
                
            }else{
                 $arr =[
                          'code'=> 1,
                          'msg'=> '上传失败',
                          'data'=>[
                          'src'=>''
                              ]
                    ];
            }

            echo json_encode($arr);

        }else{
                return back();
            }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
