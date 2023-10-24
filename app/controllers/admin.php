<?php 
class admin extends Controller{
    public function index()
    { 
            $data['judul'] = 'Dashboard - Admin';
            $this->view('Templates/admin-header', $data);
            $this->view('Templates/admin-navbar', $data);
            $this->view('admin/index', $data);
            $this->view('Templates/admin-footer');

    }

    public function user() {
        $data['judul'] = 'User - Admin';
        $data['users'] = $this->model('users_model')->getAllUsers();
        $this->view('Templates/admin-header', $data);
        $this->view('Templates/admin-navbar', $data);
        $this->view('admin/user', $data);
        $this->view('Templates/admin-footer');
}

    public function blog() {
            $data['judul'] = 'Blog - Admin';
            $data['blog'] = $this->model('Blog_model')->getAlltraveldata();
            $this->view('Templates/admin-header', $data);
            $this->view('Templates/admin-navbar', $data);
            $this->view('admin/blog', $data);
            $this->view('Templates/admin-footer');
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
                 header('Location: ' . BASEURL . '/admin/blog');
                 exit;
            }
        }
    }
    
    public function delete($id)
    {
        if ($this->model('Admin_model')->hapusblog($id) > 0) {
            header('Location: ' . BASEURL . '/admin/blog');
            exit;
        }
    }

    public function deleteuser($id)
    {
        if ($this->model('Admin_model')->hapususer($id) > 0) {
            header('Location: ' . BASEURL . '/admin/user');
            exit;
        }
    }
    

}

?>