<?php
/**
 * Created by: Somprasong Intorruk.
 * Facebook: Facebook.com/mooos.os
 * Date: 20/9/2559
 * Time: 7:38
 * Somprasong © 2016
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class userModel extends CI_Model {


    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return bool
     */
    public  function isLogin(){
        if($this->session->isLogin){
            return true;
        }else{
            return false;
        }
    }

    /**
     * @return string
     */
    public function login(){
        $username = $this->input->post('Username');
        $password = $this->input->post('Password');

        if(true){
            return json_encode();
        }else{
            return json_encode();
        }
    }

    public function get_last_ten_entries()
    {
        return json_encode();
    }
}
