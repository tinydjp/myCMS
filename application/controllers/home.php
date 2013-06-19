<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by JetBrains PhpStorm.
 * User: Stone_Giant
 * Date: 13-6-8
 * Time: 下午8:06
 * To change this template use File | Settings | File Templates.
 */

class Home extends CI_Controller {
    /**
     * 重载的构造函数，可不写，在需要初始化时有用
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');  //与model的文件名相同，区分大小写
    }

    /**
     * 默认的index方法
     */
    public function index()
    {
        //echo 'Hello World!';
        var_dump($this->news_model); //与load时同名
    }

    /**
     * 重载CI_Controller中的方法，在最后被调用
     * @param $output
     */
    public function _output($output)
    {
        echo $output;//'This is a overrided method'.(is_null($output));
    }
}