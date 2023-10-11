<?php
class Users_Model{
    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllUsers(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultset();
     }

     public function getUsersById($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
     }

     public function tambahDataUser($data)
     {
        $query =  "INSERT INTO travel
                    VALUES
                    ('', :nama, :email, :no_telp, :password)";

                    $this->db->query($query);
                    $this->db->bind('nama', $data['nama']);
                    $this->db->bind('email', $data['email']);
                    $this->db->bind('no_telp', $data['no_telp']);
                    $this->db->bind('password', $data['password']);

                    $this->db->execute();
     }






}

?>