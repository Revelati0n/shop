<?php
/**
 * Created by: Somprasong Intorruk.
 * Facebook: Facebook.com/mooos.os
 * Date: 20/9/2559
 * Time: 7:40
 * Somprasong © 2016
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct(){
       parent::__construct();
       $this->load->model('userModel');
    }

    public function index()
    {
        if(!$this->userModel->isLogin()){
          $this->load->view('header');
          $this->load->view('login');
          $this->load->view('footer');
        }else{
            redirect(base_url());
        }
    }

    public function Login(){
      if(!$this->userModel->isLogin()){
          $data = json_decode(file_get_contents('php://input'));
            if(!empty($data)){
              echo $this->userModel->login($data->username, $data->password);
            }
        }else{
            redirect(base_url());
        }
    }
}
