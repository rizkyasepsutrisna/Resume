<?php
class Home extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Portofolio / Resume';
        $this->load->view('templates/header', $data);
        $this->load->view('Home/index');
        $this->load->view('templates/footer');
    }
}
