<?php
/**
 * Created by: Somprasong Intorruk.
 * Facebook: Facebook.com/mooos.os
 * Date: 20/9/2559
 * Time: 7:40
 * Somprasong © 2016
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class userController extends CI_Controller {
    public function index()
    {

        $this->load->model('userModel');
        $this->userModel->isLogin();

    }
}
