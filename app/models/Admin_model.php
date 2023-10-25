<?php
class Admin_model
{

    private $table = "blog";
    private $db;

    public function __construct()
    {
        $this->db = new database;
    }

    public function getAlltraveldata()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getUsersById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getblogById($id_blog)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_blog = :id_blog');
        $this->db->bind('id_blog', $id_blog);
        return $this->db->single();
    }

    public function tambahkanblog($data)
    {

        $query = "INSERT INTO blog VALUES ('', :judul, :author, :konten)";
        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('author', $data['author']);
        $this->db->bind('konten', $data['konten']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusblog($id_blog)
    {
        $query = "DELETE FROM blog WHERE id_blog = :id_blog";
        $this->db->query($query);
        $this->db->bind(':id_blog', $id_blog);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapususer($id)
    {
        $query = "DELETE FROM user WHERE id = :id";
        $this->db->query($query);
        $this->db->bind(':id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function promoteUser($id)
    {
        $query = "UPDATE user SET level = 'admin' WHERE id = :id";
        $this->db->query($query);
        $this->db->bind(':id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function demoteUser($id)
    {
        $query = "UPDATE user SET level = 'user' WHERE id = :id";
        $this->db->query($query);
        $this->db->bind(':id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

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
}
