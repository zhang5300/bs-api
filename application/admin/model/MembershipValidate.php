<?php
/**
 * Created by PhpStorm.
 * User:  barry
 * Email: 530027054@qq.com
 * Date:  2019/3/20
 * Time:  15:31
 */

namespace app\admin\model;


use think\Validate;

class MembershipValidate extends Validate
{
    protected $rule=[
        ['id','require','id必须'],
        ['name','require','姓名必须'],
        ['nickname','require','昵称必须'],
        ['phone','require','手机号必须'],
        ['balance','require','余额必须'],
        ['expense','require','消费额必须'],
        ['create_time','require','创建时间必须'],
        ['password','require','密码必须'],
        ['referrer','require','推荐人必须'],

        ['page_num','require','page_num必须'],
        ['page_size','require','page_size必须'],
    ];
    protected $scene = [
        'updateMembership'=>['id'],
        'resetPassword'=>['id'],
        'deleteMembership'=>['id'],
        'getMembership'=>['id'],
        'allMembership' =>['page_num','page_size'],
        'newMembership' =>['name','nickname','phone','balance','expense','password'
        ,'referrer',],
    ];
}