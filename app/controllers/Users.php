<?php

class Users extends Controller{
    public function index()
    {
        $data['judul'] = 'Daftar Users';
        $data['mhs'] = $this->model('Users_model')->getAllUsers();
        $this->view('templates/header', $data);
        $this->view('users/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Users';
        $data['user'] = $this->model('Users_model')->getUsersById($id);
        $this->view('templates/header', $data);
        $this->view('users/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {

        if( $this->model('Users_model')->tambahDataUser($_POST) >0){
            HEADER('Location:' . BASEURL .'/Users');
            exit;
        }
    
    }

}




?>