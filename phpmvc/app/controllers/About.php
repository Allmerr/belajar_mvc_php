<?php

class About extends Controller 
{
    public function index()
    {
        $data['judul'] = 'About-Index';
        $this->view("templates/header", $data);
        $this->view("about/index", $data);
        $this->view("templates/footer", $data);
    }

    public function tampil($nama = 'user' , $pekerjaan = 'Developer' , $umur = 16)        
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About-Tampil';
        $this->view("templates/header", $data);
        $this->view("about/tampil",$data);
        $this->view("templates/footer", $data);
    }
}