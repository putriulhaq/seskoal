<?php

class Beranda extends CI_Controller {
    
    public function index() {
        $data['beranda'] = "Beranda";

        $this->load->view('beranda/index');
    }
}
?>