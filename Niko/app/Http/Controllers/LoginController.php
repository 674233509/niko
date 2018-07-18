<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Session; 
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
        // echo '登录';
        return view('qian.login.index');
    }

    /*
    *登录验证
    *
    */
    public function postYan(Request $request)
    {
        // echo '验证';
        // 接收传输过来的用户名和密码
        $data = $request->except(['_token']);
        $username = $data['username'];
        $password = $data['pass'];
        // dump($username);
        // dump($password);
        $res = User::where('username','=',$username)->where('password','=',$password)->first(['username','password','id']);
        if($res){
            // echo '有';
            $user = User::find($res['id']);
            // dump($user);
            Session::put('denglu',$user);
            Session::save();
              return redirect('/')->with('login',$res['id']);
        } else {
            // echo '没有';
             return redirect('/sn/login')->with('error', '用户名或密码错误');
        }
        // dump($res);

        // dump($data);//打印测试
    }


    /*
    退出登录
    */
    public function getTui(Request $request)
    {
        // unset($_SESSION['denglu']);

        //判断session里面是否有值(用户是否登陆)
        if($request->session()->has('denglu')){
            //移除session
            $request->session()->pull('denglu',session('denglu'));
        }
    


        // $request->session()->flush('denglu');
        return back();

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
