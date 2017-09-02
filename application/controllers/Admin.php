<?php
/**
 * Created by PhpStorm.
 * User: ezreal
 * Date: 17-8-27
 * Time: 上午10:59
 */
class Admin extends CI_Controller{
    public function index(){
        $redis = $this->init_nosql('redis');
        $redis->set("1","ssss");
        echo $redis->get("1");
    }
}