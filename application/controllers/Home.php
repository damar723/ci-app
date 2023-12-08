<?php

class Home extends CI_Controller {
    public function index($nama = 'kosong')
    {
        $data['judul'] = 'Halaman Home';
        $data['nama'] = $nama;
        $this->load->view('templates/header.php', $data);
        $this->load->view('home/index', $nama);
        $this->load->view('templates/footer.php');
    }
}