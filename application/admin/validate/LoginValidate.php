<?php

namespace app\admin\validate;

use think\Validate;

class LoginValidate extends Validate
{
    protected $rule = [
        'user_code' => 'require',
        'password' => 'require'
    ];

    protected $message  =   [
        'user_code.require' => '用户名不能为空',
        'password.require'     => '密码不能为空'
    ];
}
