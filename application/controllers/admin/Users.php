<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Users extends MY_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }
    public function index()
    {
        $data=array();
        $data['content']='admin/Users/index';
        $this->load->view('admin/master',$data);
    }
    public function add()
    {
        $data=array();
        $data['content']='admin/Users/add';
        $this->load->view('admin/master',$data);
    }
    function create()
    {
        $data = array();
        $data['username'] = 'admin1';
        $data['password'] = 'admin';
        $data['fullname'] = 'tientom';
        if($this->User_model->create($data))
        {
            echo 'done';
        }else{
            echo 'false';
        }

    }

}
