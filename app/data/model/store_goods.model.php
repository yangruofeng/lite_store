<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2020/5/3
 * Time: 15:40
 */
class store_goodsModel extends tableModelBase
{
    public function __construct()
    {
        parent::__construct('store_goods');
    }

    public function getGoodsList()
    {
        $list = $this->orderBy('class_id asc')->select(array(
            'state' => 1
        ));
        return $list;
    }
}