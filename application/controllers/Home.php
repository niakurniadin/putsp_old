<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    public function index()
    {
        $data= array(
            'judul' => 'PUT Survey dan Pemetaan',
            'content' => 'home'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }
}
/* End of file Home.php */