<!-- edit_blog.php -->
<div class="home_content">
    <div class="container mt-3">
        <h3 class="mt-3 ">Edit Posts</h3>
        <hr>
       


    </div>
    <div class="col-sm-10">
            <div class="form-group">
                <form method="POST" action="">
                    
                    <input type="hidden" name="id_blog" value="<?php echo $data['blog']['id_blog']; ?>">
                    <div class="form-group">
                    <label for="judul">Judul:</label>
                    <input type="text" name="judul" class="form-control" value="<?php echo $data['blog']['judul']; ?>" required>
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="author">Author:</label>
                    <input type="text" name="author" class="form-control" value="<?php echo $data['blog']['author']; ?>" required>
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="konten">Konten:</label>
                    <textarea name="konten" class="form-control" required><?php echo $data['blog']['konten']; ?></textarea>
                    </div>
                    <br>

                    <button type="submit" class="btn btn-primary float-right ml-2">Ubah</button>
                    <a href="http://localhost/travel/public/admin/blog" class="btn btn-secondary float-right"> Batal</a>
                </form>
            </div>
        </div>
</div>