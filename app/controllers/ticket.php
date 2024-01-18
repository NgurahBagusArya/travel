<?php
class ticket extends Controller
{
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

    public function payment($booking)
    {
        $data['book'] = $this->model('transaction_model')->getbookingById($booking);

        $data['judul'] = 'Payment';
        $this->view('templates/header', $data);
        $this->view('payment/index', $data);
        $this->view('templates/admin-footer');
    }

    public function userData($trip_id)
    {
        // Mendapatkan data trip berdasarkan trip_id dari model Trip_model
        $data['trip'] = $this->model('Trip_model')->getTripById($trip_id);


        // Cek apakah data trip ditemukan
        if (!$data['trip']) {
            die('Tiket tidak ditemukan.');
        }

        // Mendapatkan user_id dari sesi yang sedang aktif
        session_start();
        $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

        // Menampilkan halaman input data user
        $data['judul'] = 'Input User Data';
        $this->view('templates/header', $data);
        $this->view('payment/userData', $data);
        $this->view('templates/admin-footer');
    }


    public function addTransaction()
    {
        session_start();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
            $trip_id = isset($_POST['trip_id']) ? $_POST['trip_id'] : null;
            
            var_dump($trip_id);
            if ($user_id && $trip_id) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $passager = $_POST['passager'];
                $tanggal_pemesanan = $_POST['tanggal_pemesanan'];
                $telp = $_POST['telp'];
                $priceTax = mt_rand(100, 999);
                $price = $_POST['price'] + $priceTax;

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
                    header('Location: ' . BASEURL . '/ticket/payment/' .$trip_id);
                    exit;
                }
            } else {
                // Handle jika $user_id atau $trip_id tidak ada
                die('User ID atau Trip ID tidak valid.');
                
            }
        }
    }
}
