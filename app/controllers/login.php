<?php

class Login extends Controller{
    public function index()
    {
        $data['judul'] = 'Daftar Users';
        $data['mhs'] = $this->model('Users_model')->getAllUsers();
        $this->view('templates/header', $data);
        $this->view('login/login');
        $this->view('templates/footer');
    }

    public function registrasi()
    {
        $data['judul'] = 'Detail Users';
        $this->view('templates/header', $data);
        $this->view('login/registrasi');
        $this->view('templates/footer');
    }
}

?>