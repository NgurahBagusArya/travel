<?php 
class ticket extends Controller{
    public function index()
    { 
            $data['judul'] = 'Ticket - TravelKuy';
            $data['trip'] = $this->model('Trip_model')->getAlltripdata();
            $this->view('Templates/header', $data);
            $this->view('Templates/navbar', $data);
            $this->view('ticket/index', $data);
            $this->view('Templates/footer');

    }

    public function buy($trip_id)
    { 
        $data['trip'] = $this->model('Trip_model')->getTripById($trip_id);
        if (!$data['trip']) {
            die('Tiket tidak ditemukan.');
        }

            $data['judul'] = 'Buy Ticket';
            $this->view('Templates/header', $data);
            $this->view('Templates/navbar', $data);
            $this->view('ticket/buy', $data);
            $this->view('Templates/footer');

    }

    public function payment ()
    {
        $data ['judul'] = 'Payment';
        $this->view('templates/header', $data);
        $this->view('payment/index');
        $this->view('templates/admin-footer');
    }

    public function userData($trip_id)
    {
        $data['trip'] = $this->model('Trip_model')->getTripById($trip_id);
        if (!$data['trip']) {
            die('Tiket tidak ditemukan.');
        }
        $data['judul'] = 'Input User Data';
        $this->view('payment/userData', $data);
    }
    

    public function addTransaction()
    {
        session_start();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user_id = $_SESSION['user_id']; // Mendapatkan user_id dari sesi yang sedang aktif
            $trip_id = $_GET['userData']; // Mendapatkan trip_id dari URL
            $name = $_POST['name'];
            $email = $_POST['email'];
            $passager = $_POST['passager'];
            $tanggal_pemesanan = $_POST['tanggal_pemesanan'];
            $telp = $_POST['telp'];
            $price = $_POST['price'];

            $data = [
                'user_id' =>  $user_id,
                'trip_id' =>  $trip_id,
                'name' => $name,
                'email' => $email,
                'passager' => $passager,
                'tanggal_pemesanan' => $tanggal_pemesanan,
                'telp' => $telp,
                'price' => $price,
                'status_pemesanan' => "Sedang Diverivikasi"
            ];

            if ($this->model('transaction_model')->tambahkanTransaction($data) > 0) {
                header('Location: ' . BASEURL . '/ticket/index');
                exit;
            }
        }
    }
}