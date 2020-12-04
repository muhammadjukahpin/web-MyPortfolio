<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />

    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="/fancybox/dist/jquery.fancybox.min.css" />

    <!-- My CSS  -->
    <link rel="stylesheet" href="/css/style.css" />

    <title>My Portfolio</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" aria-label="">
        <div class="container">
            <a class="navbar-brand scroll-page" href="#banner">{ Muhamad Jukahpin }</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link scroll-page" href="#banner">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link scroll-page" href="#tentang">Tentang Saya</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll-page" href="#project">Project Saya</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll-page" href="#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll-page" href="#kontak">Kontak Saya</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Banner -->
    <section class="banner" id="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-banner">
                    <h3 class="text-white font-weight-bold">
                        Hai, Selamat Datang di Website Saya.</h3>
                    <h3 class="text-white font-weight-bold">Nama Saya Muhamad Jukahpin.</h3>
                    <a href="#kontak" class="btn btn-kontak mt-3">Kontak Saya</a>
                </div>
                <div class="col-md-6" style="margin-top: 120px">
                    <img src="/img/undraw_code_thinking_1jeh.svg" class="img-fluid" alt="programming" />
                </div>
            </div>
        </div>
        <div>
            <img src="/img/wave-d.svg" alt="gelombang" width="100%" class="img-fluid" />
        </div>
    </section>
    <!-- End Banner -->

    <!-- Tentang Saya -->
    <section class="tentang" id="tentang">
        <div class="container">
            <h2><strong>Tentang Saya</strong></h2>
            <div class="row">
                <div class="col-md-4 mt-4">
                    <a href="img/myProfile.jpg" data-fancybox="profile">
                        <img src="/img/myProfile.jpg" class="img-fluid img-thumbnail preview" alt="Profile Saya" />
                    </a>
                </div>
                <div class="col mt-3">
                    <p style="text-align: justify">
                        Nama saya Muhamad Jukahpin. Saya lahir di Tangerang 10 Februari
                        2000. Sekarang saya mahasiswa di universitas pamulang. Jurusan
                        saya adalah Teknologi Informasi (TI). Saya suka Pemrograman,
                        karena saya akan menjadi programmer dan tujuan saya adalah
                        membangun sebuah startup.
                    </p>
                    <p><strong>Keahlian Saya : </strong></p>
                    <p style="text-align: justify">
                        Membuat website dengan PHP native maupun menggunakan framework PHP
                        yaitu Codeigniter dan Laravel.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Tentang Saya -->

    <!-- Project Saya -->
    <section class="project" id="project">
        <div class="container">
            <h2><strong>Project Saya</strong></h2>
            <div class="row mt-4">
                <div class="col mt-2">
                    <div class="card" style="width: 20rem">
                        <a href="/img/PortfilioJasaWeb.png" data-fancybox="images">
                            <img src="/img/PortfilioJasaWeb.png" class="card-img-top img-fluid img-thumbnail" alt="webPortfolio" />
                        </a>
                    </div>
                </div>
                <div class="col mt-2">
                    <div class="card" style="width: 20rem">
                        <a href="/img/olshop.png" data-fancybox="images">
                            <img src="/img/olshop.png" class="card-img-top img-fluid img-thumbnail" alt="webPortfolio" />
                        </a>
                    </div>
                </div>
                <div class="col mt-2">
                    <div class="card" style="width: 20rem">
                        <a href="/img/listBook.png" data-fancybox="images">
                            <img src="/img/listBook.png" class="card-img-top img-fluid img-thumbnail" alt="webPortfolio" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Project Saya -->

    <!-- Skills -->
    <section class="skills" id="skills">
        <div class="container">
            <h2><strong>Skills</strong></h2>
            <div class="row mt-4">
                <div class="col-md-4 mt-2">
                    <div class="card" style="width: 18rem">
                        <img src="" class="card-img-top" alt="" />
                        <div class="card-body">
                            <h5 class="card-title">HTML 5</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-2">
                    <div class="card" style="width: 18rem">
                        <img src="" class="card-img-top" alt="" />
                        <div class="card-body">
                            <h5 class="card-title">CSS 3</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-2">
                    <div class="card" style="width: 18rem">
                        <img src="" class="card-img-top" alt="" />
                        <div class="card-body">
                            <h5 class="card-title">JAVASCRIPT</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-2">
                    <div class="card" style="width: 18rem">
                        <img src="" class="card-img-top" alt="" />
                        <div class="card-body">
                            <h5 class="card-title">BOOTSTRAP</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-2">
                    <div class="card" style="width: 18rem">
                        <img src="" class="card-img-top" alt="" />
                        <div class="card-body">
                            <h5 class="card-title">PHP</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-2">
                    <div class="card" style="width: 18rem">
                        <img src="" class="card-img-top" alt="" />
                        <div class="card-body">
                            <h5 class="card-title">CODEIGNITER</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-2">
                    <div class="card" style="width: 18rem">
                        <img src="" class="card-img-top" alt="" />
                        <div class="card-body">
                            <h5 class="card-title">LARAVEL</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-2">
                    <div class="card" style="width: 18rem">
                        <img src="" class="card-img-top" alt="" />
                        <div class="card-body">
                            <h5 class="card-title">MYSQL</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Skills -->

    <!-- Kontak -->
    <section class="kontak" id="kontak">
        <div class="container">
            <h2><strong>Kontak Saya</strong></h2>
            <div class="flashdata" data-flashdata="<?= session()->getFlashdata('message'); ?>"></div>
            <div class="row mt-4">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <form class="mt-3" method="POST" action="/home/save">
                                <?= csrf_field(); ?>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 col-form-label">Nama</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control <?= ($validation->hasError('name')) ? 'is-invalid' : ''; ?>" id="name" name="name" value="<?= old('name'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('name'); ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" name="email" value="<?= old('email'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('email'); ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="message" class="col-sm-3 col-form-label">Pesan
                                        Anda</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control <?= ($validation->hasError('message')) ? 'is-invalid' : ''; ?>" name="message" id="message" rows="3"><?= old('message'); ?></textarea>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('message'); ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-8">
                                        <button type="submit" class="btn btn-primary btn-send">KIRIM</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Kontak -->

    <!-- Footer -->
    <section class="footer">
        <div class="container d-flex flex-column justify-content-center align-items-center">
            <div class="sosial-media">
                <a href="https://www.instagram.com/penghunii_goaa/?hl=ids" target="_blank" rel="noopener noreferrer"><img src="/img/ig.png" width="30px" height="30px" alt="instagram" /></a>
                <a href="https://web.facebook.com/muhamad.jukahpin" target="_blank" rel="noopener noreferrer"><img src="/img/fb.png" width="30px" height="30px" alt="facebook" /></a>
            </div>
            <div class="footer-text">
                <p>© 2020 Muhamad Jukahpin Portfolio</p>
            </div>
        </div>
    </section>
    <!-- End Footer -->

    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- Fancybox JS -->
    <script src="/fancybox/dist/jquery.fancybox.min.js"></script>

    <!-- My Script -->
    <script src="/js/script.js"></script>
</body>

</html>