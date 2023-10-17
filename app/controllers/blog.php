<?php

class blog extends Controller{
    public function index()
    {
        $data['judul'] = 'Daftar Blog';
        $data['blog'] = $this->model('Blog_model')->getAlltraveldata();
        $this -> view ('Templates/header' ,$data);
        $this -> view ('blog/index', $data);
        $this -> view ('Templates/footer');
    }
    
    public function readmore($id_blog)
    {
        var_dump($id_blog);
        $data['judul'] = 'Read More';
        $data['blog'] = $this->model('Blog_model')->getblogById($id_blog);
        $this -> view ('Templates/header' ,$data);
        $this -> view ('blog/readmore', $data);
        $this -> view ('Templates/footer');
    }
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $judul = $_POST['judul'];
            $author = $_POST['author'];
            $konten = $_POST['konten'];
            
            $data = [
                'judul' => $judul,
                'author' => $author,
                'konten' => $konten
            ];
    
            if ($this->model('Blog_model')->tambahkanblog($data) > 0) {
                 header('Location: ' . BASEURL . '/blog');
                 exit;
            }
        }
    }
    
}

?>