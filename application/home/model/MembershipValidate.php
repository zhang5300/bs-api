<?php
/**
 * Created by PhpStorm.
 * User:  barry
 * Email: 530027054@qq.com
 * Date:  2019/3/20
 * Time:  15:31
 */

namespace app\home\model;


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
        ['password','require','新密码必须'],
        ['old_password','require','旧密码必须'],
        ['referrer_id','require','推荐人id必须'],
        ['status','require','status必须'],
        ['require_type','require','require_type必须'],
        ['require_expense','require','require_expense必须'],
        ['require_price','require','require_price必须'],
        ['membership_id','require','membership_id必须'],

        ['page_num','require','page_num必须'],
        ['page_size','require','page_size必须'],
    ];
    protected $scene = [
        'updateMembership'=>['id'],
        'updateStatus'=>['id','status','require_type','require_expense','require_price'],
        'getMyMembership'=>['membership_id'],
        'resetPassword'=>['id','password','old_password'],
        'deleteMembership'=>['id'],
        'getMembership'=>['id'],
        'allMembership' =>['page_num','page_size'],
        'newMembership' =>['name','nickname','phone','balance','expense','password'],
    ];
}