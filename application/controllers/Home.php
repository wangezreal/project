<?php
/**
 * Created by PhpStorm.
 * User: ezreal
 * Date: 17-8-24
 * Time: 下午11:34
 */
class Home extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {   $test = $this->init_nosql('memcache');
        $html = "<h2 style='text-align: center'>caicai is a beautiful girl</h2>";
        $testResult = $test->get("first");
        if($testResult ==''){
            $test->add("first",$html);

        }else{
            $test->delete('first');
            $test->add("first",$html);
        }
        $testResult = $test->get("first");
        echo $testResult;
    }
}