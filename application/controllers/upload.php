<?php
/**
 * Created by: Somprasong Intorruk.
 * Facebook: Facebook.com/mooos.os
 * Date: 20/9/2559
 * Time: 7:40
 * Somprasong © 2016
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class upload extends CI_Controller {
    public function __construct(){
       parent::__construct();
    }

		public function do_upload()
					 {
									 $config['upload_path']          = './uploads/';
									 $config['allowed_types']        = 'gif|jpg|png';

									 $this->load->library('upload', $config);

									 if ( ! $this->upload->do_upload('userfile'))
									 {
													 $error = array('error' => $this->upload->display_errors());
													 echo json_encode($error);
													 //$this->load->view('upload_form', $error);
									 }
									 else
									 {
													 $data = array('upload_data' => $this->upload->data());
													 echo json_encode($data);
													 //$this->load->view('upload_success', $data);
									 }
					 }
}
