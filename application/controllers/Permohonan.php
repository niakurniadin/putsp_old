<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permohonan extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        // Load Dependencies
        $this->load->model('model_permohonan');
    }

    public function index()
    {
        $data= array(
            'judul' => 'PUT Survey dan Pemetaan',
            'content' => 'home'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function ajukan()
    {
        $this->load->helper('string');
        
        $data= array(
            'judul' => 'PUT Survey dan Pemetaan',
            'content' => 'permohonan/ajukan',
            'random' => 'PUT-'.random_string('alnum',6)
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function status()
    {
        $data= array(
            'judul' => 'PUT Survey dan Pemetaan',
            'content' => 'permohonan/status'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function database()
    {
        $data=array(
            'judul' => 'Data Permohonan Pengolahan',
            'permohonan' => $this->model_permohonan->get_all_data(),
            'content'   =>'permohonan/viewdata'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function add()
    {
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'zip|rar';
        $config['max_size'] = 0;

        $this->load->library('upload', $config);

        if (! $this->upload->do_upload('rawdata')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('permohonan/ajukan', $error);
        } else {
            $upload_data = $this->upload->data();
            print_r($upload_data);
        }


    }
}