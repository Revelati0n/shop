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

    public  function isLogin(){
        if(!empty($this->session->isLogin)){
            return true;
        }else{
            return false;
        }
    }

    public function getUsername(){
        return $this->session->isLogin[0]->Username;
    }

    public function login($username = null, $password = null){
        $getLogin = $this->db->where(array('Username' => $username, 'Password' => $password))->get('accounts')->result();
        if(!empty($getLogin)){
            $this->session->set_userdata('isLogin', $getLogin);
            return json_encode(array('responseCode' => 1));
        }else{
            return json_encode(array('responseCode' => 0));
        }
    }

    public function register()
    {

    }
}
