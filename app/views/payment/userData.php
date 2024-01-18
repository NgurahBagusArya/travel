<?php

if (!isset($_SESSION['user_id']) || $_SESSION['level'] !== 'user') {
    // Jika sesi user_id tidak ada atau level bukan admin, arahkan kembali ke halaman login
    header('Location: ' . BASEURL . '/login');
    exit;
}

?>


<link rel="stylesheet" href="<?= BASEURL ?>/css/style/payment.css">

<section>
    <div class="view">
        <div class="title">
            <h1>Pengisian Data</h1>
        </div>
        <div class="sample">
            <form action="<?= BASEURL ?>/ticket/addTransaction/<?= $data['trip']['trip_id']; ?>" method="post">
                <div class="data-kn">
                    <div class="bagian">
                        <span class="icon"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAZJJREFUSEu11L9L1WEUx/GXNAdKklHY0mCjU3+A2C+l0aSpv0AIDXSS2lSKGtpbU0eLRLPGVjdxaDH6JUahjYlx4DEu3+5zny/X7lmfcz7v8+s5XTpsXR3WVxdwCw9wKSX0AbN4VUqwDmAacxmh+3jcClICXMcqviJAa0nsGuZxDsPYyEFKgPUkMI6lishtLOI1RtoF/EA3TuNXReQM9vAZF9oFfMNZ9OJ7BhA+0aqmVmpR9Pwqoh3LmRbFjG62C2gccmxMzORUgi6g76RDjsQmEWIh3GiHCOjTk6zpcewAphDr+Rtv0/5v/4+PVtJo+d5qyLGekfUVDKZtahTbxSbep2oOmpFygNiK52mIdSqIv3AXb6rOzQCjeJkcV/AQcdx+VoKjwjh+8R4xYZFYrO1fqwJ6sJUyj1szUyd9PErt/ILL2D+OqwLu4QneYaimeLiFTnzKOHwTeJYDxEEbK32eDPhGOnwvcCcH2EE/olXVnpcKOo9P+IiLOcBReijdqBzsn/h2hUrVZLeodmBdx45X8Afl0EcZyvkojQAAAABJRU5ErkJggg==" /></span>
                        <input class="form" type="text" placeholder="Nama" name="name">
                    </div>
                    <div class="bagian">
                        <span class="icon"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAUFJREFUSEvd1T8ohWEUx/HPTTIYTAYpJQMGu8VmVAorZVMmZWCRTJQyKZti9WeRyWYxMzAJKYPJYJD86eh5dd3udf91l3uWp97zPud7fr/zPs+b0+DINbi+5gKMYx0Dddp2jUWcRp18ix7RXWfxbPst+goBXyk7iJsaQaE+FPzWzleQAV4xg6MqIRPYQ3s5QFZ3E0v4KANqSbML3/Pjp/liCmaxgzacYxLPJSCdOMQI3jCH3XIKAjqEE/TgCSH/ogAynGzswgPGcIXM6pIKMlUdOMAo3rGA7QSZxxZacYYpvKRcxYDMwlWspM37aZ1Oa+TW8rqOx1UBMldCRagJVRHRbXQd3RdGTYAo0otjfKaZ3JUYfM2ASo9FEwPu03dfqRX/vRfziZn9OclxXW+gv07CJZaLXdd11i2+vbl+mQ2x6BtqhEIZ+AjT5wAAAABJRU5ErkJggg==" /></span>
                        <input class="form" type="text" placeholder="Email Address" name="email">
                    </div>
                    <div class="harga">
                        <span class="detail">Harga Tiket :</span>
                        <p class="nominal">Rp.<?= $data['trip']['price']; ?></p>
                        <input class="form" type="hidden" placeholder="Email Address" name="price" value="<?= $data['trip']['price']; ?>">
                    </div>
                    <input type="hidden" name="trip_id" value="<?= $data['trip']['trip_id']; ?>">
                    <div class="button">
                        <a href="<?= BASEURL ?>/ticket/addTransaction/<?= $data['trip']['trip_id']; ?>">
                            <input class="tombol" type="submit" value="Next"> </a>
                    </div>
                </div>
                <div class="data-kr">
                    <div class="bagian">
                        <span class="icon"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAdJJREFUSEvt1EuoT2EUBfDfLYM7MFBE8igl7kQxIlEGclMYknKJSHlkIkwohsTgCuXNTSkjMRBRyuBeI6EUAzHwyKOEJIW29tGp/zn/469uGfjq1Ok7Z+/1rfWttbsM8+oa5v7+aYBdOIKP7VRoYrAVmzEZz3AQJ7EEV3AP8/C5DqQdwB7srSjckUCnsQZH8xCVGHUA0/EI39CHW1iEc/iOqXiP5xiJsfhQhVAHsAHH89lYKjyfgOtwJmUKuZblewtGHcB6nMApxHuxQpa1uRffbmAhluJqJwxCgscp0SrcxGKcxQ/04A2eYjSm4UknAPHvbuyrKNqJ/ehHuGwIc/7GRVETFo0mhU0PIGTagsPZ9BPCWcc6ZdAuPxOwAssxO3+8lHsh4e9VdcndCOdsw5QKlND9UJrgK1bn3USv7ZmRWoBJuJ6X2DQHH2Y2XiKMMIAviB7viuIygxG4i1l4kSwG8baENAZzMx/jcBsL8vs19KIwwa/tMsCmHF6vMROv2lCYiAcYhZW4mGG7jDuYX8XgPmYk3QtN+qBIe2QkwhaM4lCRjxgdLQxCv7jg8Q2nL2pD65hFMZMibJWrLFFhr6YRXm7UWNNJsz9QrfWX/wCNsv0EEDBcGRiY8GUAAAAASUVORK5CYII=" /></span>
                        <input class="form" type="number" placeholder="Jumlah Penumpang" max="5" name="passager">
                    </div>
                    <div class="bagian">
                        <span class="icon"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAALNJREFUSEvdlUEKgzAQRZ/nEATpot7Gy3TTG7QX6kHcuBMF79FSMBQi099Mq1izCzPz//yfSZKx8MoWxkcR3KcGrDwVX5+gBi5A5bSuBU7ALdTH0kcgd4KHsg44WATB0y85XtbHClYjUNNlKZxNlaVgPwSx5NT97KKlAqh8SZA6rts7ZGWBikuLFICKS4L/P4OfKxiAIhU1yu+B0nqunx/OFTg6SRrg/O7DceLaZd5X8+NGHks5NBnCpFrAAAAAAElFTkSuQmCC" /></span>
                        <input class="form" type="date" placeholder="Tanggal Keberangkatan" name="tanggal_pemesanan">
                    </div>
                    <div class="bagian">
                        <span class="icon"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAXpJREFUSEvF1DFIVXEUx/HP28SgQHTQwS0SQQcRB7fAjBCXJjfBRdGo0UB0SRKHxmqUlgLbGgJxUsTFQRAcosXA1cUQRBLlL/fBvz/v6rv3KR64y//e8/3d3/mfcyruOCp3zHcvAkH0LR7jDf424jJ18BCreJ5Bt/EUZ2VFUoE99CSwH3iJ8zIiqcBFDmQFE7chcILmHNAc3hcVSR3sozsH8hMjjQp8w1gNyC8M4bBRgSl8TiC7eIajovDwfVqiTvxJQF0IDkpFrUkObTka0RbwrhS9hoPA6cdOBDzNzkIDxNGOD1jDl7wfyNtFHzEdJR1gGL+zszZsIpQvxCLma4nkCTRhAwNRUpiRJXzPnt4E+Amv8N+wXrdNW7GFJwXq/xXj+FfNuWldP8r+NrRpvRGczNQrUG3l19mayFsjsfhytu6vzm5yECeGi51FGMYHOXbW8SLevEUEqswWTGIQfejIXoRhDE1xHIuXEaj3LgqXqBC4yCWXAleTLgETkTUZXHhRFwAAAABJRU5ErkJggg==" /></span>
                        <input class="form" type="number" placeholder="No.Telp" name="telp">
                    </div>

                </div>
            </form>
        </div>
    </div>
</section>