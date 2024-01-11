<?php
class Admin_model
{
    private $table = "blog";
    private $db;

    public function __construct()
    {
        $this->db = new database;
    }

    public function getAlltraveldata() //MENAMPILKAN DATA SELURUH DATABASE
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }


    //TRIP (TICKET)

        public function getTripById($trip_id) //MENAMPILKAN DATA TRIP 
        {
            $query = "SELECT * FROM trip WHERE trip_id = :trip_id";
            $this->db->query($query);
            $this->db->bind('trip_id', $trip_id);
            return $this->db->single(); // Misalkan Anda menggunakan PDO
        }
        public function tambahkanticket($data) //CREATE
        {
            $query = "INSERT INTO trip (nama_trip, deskripsi, tujuan, image, start_date, end_date, harga, slot_tiket)
                        VALUES (:nama_trip, :deskripsi, :tujuan, :image, :start_date, :end_date, :harga, :slot_tiket)";

            $this->db->query($query);
            $this->db->bind(':nama_trip', $data['nama_trip']);
            $this->db->bind(':deskripsi', $data['deskripsi']);
            $this->db->bind(':tujuan', $data['tujuan']);
            $this->db->bind(':image', $data['image']);
            $this->db->bind(':start_date', $data['start_date']);
            $this->db->bind(':end_date', $data['end_date']);
            $this->db->bind(':harga', $data['harga']);
            $this->db->bind(':slot_tiket', $data['slot_tiket']);

            $this->db->execute();

            return $this->db->rowCount();
        }

        public function updateTrip($trip_id, $nama_trip, $deskripsi, $tujuan, $image, $start_date, $end_date, $harga, $slot_ticket) //UPDATE
        {
            $this->db->query('UPDATE trip SET nama_trip = :nama_trip, deskripsi = :deskripsi, tujuan = :tujuan, image = :image, start_date = :start_date, end_date = :end_date, harga = :harga, slot_tiket = :slot_ticket WHERE trip_id = :trip_id');

            $this->db->bind(':trip_id', $trip_id);
            $this->db->bind(':nama_trip', $nama_trip);
            $this->db->bind(':deskripsi', $deskripsi);
            $this->db->bind(':tujuan', $tujuan);
            $this->db->bind(':image', $image);
            $this->db->bind(':start_date', $start_date);
            $this->db->bind(':end_date', $end_date);
            $this->db->bind(':harga', $harga);
            $this->db->bind(':slot_ticket', $slot_ticket);
            

            return $this->db->execute();
        }

        public function hapusTrip($trip_id) // DELETE TRIP
        {
            $query = " DELETE FROM trip WHERE trip_id = :trip_id";
            $this->db->query($query);
            $this->db->bind(':trip_id', $trip_id);
            $this->db->execute();
    
            return $this->db->rowCount();
        }
    

    // END OF TRIP (TICKET)    


    // USERS 

        public function getUsersById($id) //MENAMPILKAN DATA USERS
        {
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
            $this->db->bind('id', $id);
            return $this->db->single();
        }

        public function hapususer($id) // MENGHAPUS USERS
        {
            $query = "DELETE FROM user WHERE id = :id";
            $this->db->query($query);
            $this->db->bind(':id', $id);
            $this->db->execute();

            return $this->db->rowCount();
        }

        public function promoteUser($id) // MENGUBAH USERS MENJADI ADMIN
        {
            $query = "UPDATE user SET level = 'admin' WHERE id = :id";
            $this->db->query($query);
            $this->db->bind(':id', $id);
            $this->db->execute();
            return $this->db->rowCount();
        }

        public function demoteUser($id) // MENGUBAH ADMIN MENJADI USERS
        {
            $query = "UPDATE user SET level = 'user' WHERE id = :id";
            $this->db->query($query);
            $this->db->bind(':id', $id);
            $this->db->execute();
            return $this->db->rowCount();
        }

    // END OF USERS


    // BLOG
        public function getblogById($id_blog) //MENAMPILKAN DATA BLOG
        {
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_blog = :id_blog');
            $this->db->bind('id_blog', $id_blog);
            return $this->db->single();
        }

        public function tambahkanblog($data) // CREATE BLOG
        {

            $query = "INSERT INTO blog VALUES ('', :judul, :author, :konten)";
            $this->db->query($query);
            $this->db->bind('judul', $data['judul']);
            $this->db->bind('author', $data['author']);
            $this->db->bind('konten', $data['konten']);

            $this->db->execute();

            return $this->db->rowCount();
        }

        public function hapusblog($id_blog) //DELETE BLOG
        {
            $query = "DELETE FROM blog WHERE id_blog = :id_blog";
            $this->db->query($query);
            $this->db->bind(':id_blog', $id_blog);
            $this->db->execute();

            return $this->db->rowCount();
        }

        public function updateBlog($id_blog, $judul, $author, $konten)
        {
        $query = "UPDATE blog SET judul = :judul, author = :author, konten = :konten WHERE id_blog = :id_blog";
        $this->db->query($query);
        $this->db->bind(':id_blog', $id_blog);
        $this->db->bind(':judul', $judul);
        $this->db->bind(':author', $author);
        $this->db->bind(':konten', $konten);
    
        $this->db->execute();
    
        return $this->db->rowCount();
        }
    

    //END OF BLOG






    public function activityLog($userId, $activityType)
    {
        $description = 'User dengan ID ' . $userId . ' ' . $activityType . ' menjadi ' . ($activityType === 'promote' ? 'Admin' : 'User');

        $query = "INSERT INTO activity_log (user_id, activity_type, description) VALUES (:user_id, :activity_type, :description)";
        $this->db->query($query);
        $this->db->bind(':user_id', $userId);
        $this->db->bind(':activity_type', $activityType);
        $this->db->bind(':description', $description);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function getBookingById($book_id)
    {
        $query = "SELECT * FROM booking WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $book_id);
        return $this->db->single(); // Misalkan Anda menggunakan PDO
    }


    // ADD ADMIN
    public function updateAdmins($data)
    {
        $query = "UPDATE user SET username = :username, email = :email, no_telp = :no_telp,  password = :password WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('no_telp', $data['no_telp']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('id', $data['id']);
        
        $this->db->execute();
    
        return $this->db->rowCount();
    }   

    
}