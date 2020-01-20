<?php
namespace app\admin\validate;
use think\Validate;
class Doctor extends Validate
{
    protected $rule =   [
        'name'  => 'require|unique:doctor',
        'ranks'  => 'require',

    ];

    protected $message  =   [
        'name.require' => '医生名必须',
        'name.unique'     => '医生名不能重复',
        'ranks.require'=>'职称不能为空',
    ];


}