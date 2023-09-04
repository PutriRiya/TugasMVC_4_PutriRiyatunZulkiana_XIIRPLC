<?php
class User extends Controller{
    public function index(){
        $data['judul']="About";
        $this->view('templates/header', $data);
        $this->view('user/index');
        $this->view('templates/footer');
    }
    public function profile($nama = "Gena", $pekerjaan = "Pelajar"){
        $data['judul'] = "About";
        $data['nama']  = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $this->view("templates/header", $data);
        $this->view("user/profile", $data);
        $this->view('templates/footer');
    }
}
?>