<?php
class Login extends Controller {
    public function index() {
        if (isset($_POST['login'])) {
            $this->prosesLogin();
        } else {
            $data['judul'] = 'Login';
            $this->view('templates/header', $data);
            $this->view('login/login');
            $this->view('templates/footer');
        }
    }

    public function registrasi()
    {
        $data['judul'] = 'Registrasi';
        $this->view('templates/header', $data);
        $this->view('login/registrasi');
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Users_Model')->tambahDataUser($_POST) > 0) {
            header('Location:' . BASEURL . '/login');
            exit;
        }
    }

    private function prosesLogin() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $userModel = $this->model('Users_Model');
        $user = $userModel->getUserByemail($email);

        if ($user) {
            // Verifikasi kata sandi
            if (password_verify($password, $user['password'])) {
                // Berhasil login
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['email'] = $user['email'];
                header('Location: ' . BASEURL . '/home');
                exit;
            } else {
                // Password salah
                $pesan = 'Password salah.';
                $this->tampilkanPesanError($pesan);
            }
        } else {
            // email tidak ditemukan
            $pesan = 'email tidak ditemukan.';
            $this->tampilkanPesanError($pesan);
        }
    }
    }

    private function tampilkanPesanError($pesan) {
        $data['pesan'] = $pesan;
        $data['judul'] = 'Login';
        $this->view('templates/header', $data);
        $this->view('login/login', $data);
        $this->view('templates/footer');
    }

}
