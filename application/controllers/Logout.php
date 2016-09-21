<?php
/**
 * Created by: Somprasong Intorruk.
 * Facebook: Facebook.com/mooos.os
 * Date: 20/9/2559
 * Time: 7:40
 * Somprasong © 2016
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

    public function __construct(){
       parent::__construct();
       $this->load->model('userModel');
    }

    public function index()
    {
        if($this->userModel->isLogin()){
            $this->userModel->Logout();
            redirect(base_url());
        }else{
            redirect(base_url());
        }
    }
}
