<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bill extends CI_Controller {


    public function index()
    {
        $data=array();
        $data['content']='admin/Bill/index';
        $this->load->view('admin/master',$data);
    }
    public function add()
    {
        $data=array();
        $data['content']='admin/Bill/add';
        $this->load->view('admin/master',$data);
    }
}
