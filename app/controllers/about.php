<?php


class about{
    public function index($nama = 'Namamu', $pekerjaan = 'Pekerjaanmu'){
        echo "Saya $nama, Sedang $pekerjaan ";
        echo '<br>';
        echo 'about/index';
    }

    public function  page(){
        echo 'about/page';
    }
}

?>