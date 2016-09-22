<?php
/**
 * Created by: Somprasong Intorruk.
 * Facebook: Facebook.com/mooos.os
 * Date: 20/9/2559
 * Time: 7:38
 * Somprasong © 2016
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class upload extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function logout(){
      $this->session->unset_userdata('isLogin');
    }

    public function saveUpload($filename = null){
			$code = sha1(uniqid(mt_rand(), true));


      if(($username == null) or ( $password == null ) or ( $repassword == null ) or ( $email == null )){
        return json_encode(array('responseCode' => 1, 'responseMsg' => 'กรุณากรอกข้อมูลให้ครบถ้วน'));
      }else{
        if($password === $repassword){
          if(empty($this->db->where('Username', $username)->get('accounts')->result())){
            if(empty($this->db->where('email', $email)->get('accounts')->result())){
              $data = array('Username' => $username, 'Password' => $password, 'email' => $email);
              $this->db->insert('accounts', $data);
              $this->login($username, $password);
              return json_encode(array('responseCode' => 0));
            }else{
              return json_encode(array('responseCode' => 4, 'responseMsg' => 'Email ถูกใช้งานไปแล้ว'));
            }
          }else{
            return json_encode(array('responseCode' => 3, 'responseMsg' => 'Username ถูกใช้งานไปแล้ว'));
          }
        }else{
          return json_encode(array('responseCode' => 2, 'responseMsg' => 'Password และ RePassword ไม่ตรงกัน'));
        }
      }
    }
}
