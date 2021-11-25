<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permohonan extends CI_Controller {
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
        $data= array(
            'judul' => 'PUT Survey dan Pemetaan',
            'content' => 'permohonan/ajukan'
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
}
/* End of file Home.php */