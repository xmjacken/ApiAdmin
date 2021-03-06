<?php
/**
 * @since   2016-11-05
 * @author  zhaoxiang <zhaoxiang051405@gmail.com>
 */

namespace app\admin\model;


use think\Model;

class UserData extends Model {

    protected $insert = ['lastLoginTime', 'lastLoginIp'];
    protected $update = ['lastLoginIp', 'lastLoginTime'];

    protected function setLastLoginIpAttr(){
        return request()->ip(1);
    }

    protected function getLastLoginIpAttr( $value ){
        return long2ip($value);
    }

    protected function setLastLoginTimeAttr(){
        return time();
    }
}