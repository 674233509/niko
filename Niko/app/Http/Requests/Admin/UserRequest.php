<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;

class UserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|regex:/^[a-zA-Z]{1}[\w]{1,6}[a-zA-Z]{1}$/',
            'password' => 'required|regex:/[^ ]{6,16}/' ,
            'mail' => 'required|regex:/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/',
            'tel' => 'required|regex:/^1[3-9]{1}[0-9]{9}$/',
             


        ];
    }

    public function messages()
    {
        return [
            'username.required' => '用户必填',
            'username.regex' => '请输入3~8位字母数字下划线并以字母开头和结尾',
            'password.required' => '密码必填不能为空和空白',
            'password.regex' => '请输入6~16位密码且不能有空格',
            'mail.required' => '邮箱必填',
            'mail.regex' => '请输入正确的邮箱规则',
            'tel.required' => '手机号必填',
            'tel.regex' => '请输入11位手机号',
        ];
    }
}
