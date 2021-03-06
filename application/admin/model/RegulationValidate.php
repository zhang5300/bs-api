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

class RegulationValidate extends Validate
{
    protected $rule=[
        ['title','require|max:100','标题必须'],
        ['type','require','文章类型必须'],
        ['status','require','状态必须'],
        ['create_time','require','发布时间必须'],
        ['update_time','require','修改时间必须'],
        ['description','require','摘要必须'],
        ['content','require','内容必须'],
        ['id','require','id必须'],
        ['page_num','require','page_num必须'],
        ['page_size','require','page_size必须'],
        ['key','require','key必须'],

    ];
    protected $scene = [
        'create' => ['title','type','status','create_time','description','content'],
        'update'  =>  ['id'],
        'delete'  =>  ['id'],
        'lists'  =>['page_num','page_size'],
        'detail'  =>['id'],
        'search' =>['key','page_num','page_size']
    ];
}