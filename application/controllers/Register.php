<?php
/**
 * Created by: Somprasong Intorruk.
 * Facebook: Facebook.com/mooos.os
 * Date: 20/9/2559
 * Time: 7:40
 * Somprasong © 2016
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    public function __construct(){
       parent::__construct();
    }

    public function index()
    {
      $this->load->model('userModel');
      $this->load->view('header');
      $this->load->view('register');
      $this->load->view('footer');
    }

    public function register(){
        $data = json_decode(file_get_contents('php://input'));
        $this->load->model('userModel');
        //echo $this->userModel->login($data->username, $data->password);
    }
}
