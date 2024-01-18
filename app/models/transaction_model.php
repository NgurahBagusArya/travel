<?php
class transaction_model
{

    private $table = "booking";
    private $db;

    public function __construct()
    {
        $this->db = new database;
    }

    public function getAllbookingdata()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getbookingById($id_book)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id = :id');
        $this->db->bind('id', $id_book);
        return $this->db->single();
    }


    public function ambilDataBooking()
    {
        $query = "SELECT booking.id, user.username AS username, trip.nama_trip AS trip_name, booking.price, booking.name, booking.email, booking.telp, booking.passager, booking.tanggal_pemesanan, booking.status_pemesanan
                FROM booking
                JOIN user ON booking.user_id = user.id
                JOIN trip ON booking.trip_id = trip.trip_id";

        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function bookingPaymentSuccess($id_book) // MEMVERIVIKASI PEMBAYARAN
    {
        $query = "UPDATE booking SET status_pemesanan = 'Sudah DIBAYAR' WHERE id = :id";
        $this->db->query($query);
        $this->db->bind(':id', $id_book);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function akhiriTransaksi($id_book) // MEMVERIVIKASI PEMBAYARAN
    {
        $query = "UPDATE booking SET status_pemesanan = 'Transaksi Berakhir' WHERE id = :id";
        $this->db->query($query);
        $this->db->bind(':id', $id_book);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function bookingPaymentCancel($id_book) // MEMVERIVIKASI PEMBAYARAN
    {
        $query = "UPDATE booking SET status_pemesanan = 'Sedang Diverivikasi' WHERE id = :id";
        $this->db->query($query);
        $this->db->bind(':id', $id_book);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function tambahkanTransaction($data)
    {
        $query = "INSERT INTO booking (user_id, trip_id, name, email, passager, tanggal_pemesanan, telp, price, status_pemesanan) 
                  VALUES (:user_id, :trip_id, :name, :email, :passager, :tanggal_pemesanan, :telp, :price, :status_pemesanan)";
        
        $this->db->query($query);
        $this->db->bind('user_id', $data['user_id']);
        $this->db->bind('trip_id', $data['trip_id']);
        $this->db->bind('name', $data['name']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('passager', $data['passager']);
        $this->db->bind('tanggal_pemesanan', $data['tanggal_pemesanan']);
        $this->db->bind('telp', $data['telp']);
        $this->db->bind('price', $data['price']);
        $this->db->bind('status_pemesanan', $data['status_pemesanan']);
    
        $this->db->execute();
    
        return $this->db->rowCount();
    }
    
}
