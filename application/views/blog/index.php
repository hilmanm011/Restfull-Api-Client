<!-- Navigation-->
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="text-center">
        <?= $this->session->flashdata('message'); ?></div>
    <div class="container">

        <!-- <a href="admin/index">Admin</a> -->

        <i class="fas fa-book-open fa-2x mr-1" style="color: white; "></i>
        <!-- <img class="p-1" src="<?= base_url('assets/'); ?>assets_m/img/icon-desa.png" width="50px" alt=""> -->

        <a class="navbar-brand js-scroll-trigger" href="<?= base_url('admin/blog'); ?>">Informasi Desa</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Sejarah</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Penduduk</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a></li>
            </ul>
            <div class="nav-item dropdown no-arrow">
                <a class="nav-link py-3 px-0 px-lg-3 dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle" width="50px" src="<?= base_url('assets/'); ?>img/profile/default.jpg">
                </a>
                <!-- Dropdown - User Information  -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <div class="profile-item mx-auto" data-toggle="modal" data-target="#profileModal1">
                        <div class="profile-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <a href="#" class="text-center font-weight-normal text-gray-400"><i class="fas fa-user"></i> My Akun</a>
                        </div>
                    </div>
                    <div class="dropdown-item d-flex align-items-center justify-content-center">
                        <a href="#" data-toggle="modal" data-target="#logoutModal" class="text-center font-weight-normal text-gray-400"><i class="fas fa-sign-out-alt"></i> Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</nav>

<!-- Masthead-->
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        <img class="masthead-avatar mb-5" src="<?= base_url('assets/'); ?>assets_m/img/icon-desa.png" alt="" />
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">Desa Bojongkeding</h1>
        <!-- Icon Divider-->

        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0">Berani (Bersih, Energik, Ramah, Aman, Nyaman, Indah)</p>
    </div>
</header>
<!-- Portfolio Section-->
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-subheading  text-secondary mb-0">SEJARAH</h2>
        <div class="mt-4">
            <h5>A. KONDISI DESA BOJONGKEDING</h5>
            <p>Desa Bojongkeding merupakan salah satu jajaran sembilan desa agrari yang ada di Kecamatan Tambakdahan Kabupaten Subang, yang terletak disebelah Timur sebelum desa bojonegara dengan luas 491.566 Ha yang dikelilingi oleh hamparan lahan pertanian dan terbentang sungai yang melilinginya.</p>
            <h5>B. SEJARAH DESA BOJONGKEDING</h5>
            <p>Bukti adanya kelompok masyarakat pada masa prasejarah di wilayah Kabupaten Subang adalah ditemukannya kapak batu di daerah Bojongkeding (Tambakdahan), Pagaden, Kalijati dan Dayeuhkolot (Sagalaherang). Temuan benda-benda prasejarah bercorak neolitikum ini menandakan bahwa saat itu di wilayah Kabupaten Subang sekarang sudah ada kelompok masyarakat yang hidup dari sektor pertanian dengan pola sangat sederhana.
                Selain itu, dalam periode prasejarah juga berkembang pula pola kebudayaan perunggu yang ditandai dengan penemuan situs di Kampung Engkel, Sagalaherang.

            </p>
            <p>
                Desa Bojongkeding berada di sebelah timur kota kecamatan tambakdahan, Menurut sumber yang kami dapatkan Desa Bojongkeding dibentuk pada tahun 1920 itu dibuktikan dengan ditemukannya kapak batu jaman prasejarah di desa bojongkeding, artinya bahwa diDesa bojongkeding sudah ada kelompok masyarakat pada masa itu.
                Menurut sumber yang dapat kami uraikan BOJONGKEDING berasal dari dua kata yaitu “BOJO” Artinya istri dan “KEDING” merupakan nama sebuah kali yang kecil yang terletak ditengah-tengah desa,konon katanya kali itu sebagai sumber mata air yang dapat digunakan oleh masyarakat untuk kehidupan sehari-hari baik untuk keperluan keluarga juga untuk keperluan pertanian. Hamparan sawah yang luas merupakan salah satu asset kekayaan yang dimiliki oleh desa bojongkeding sebagai modal untuk membangun desa.
            </p>
            <p>
                Mayoritas mata pencaharian masyarakat desa bojongkeding adalah petani banyak ritual yang dilakukan masyarakat dalam bercocok tanam padi, mulai dari ritual turun kesawah dinamakan sedekah bumi yang tujuan nya agar selama penanaman padi hingga panen hasil yang diharapkan meningkat dan tidak ada kendala seperti serangan hama, penyemaian benih padi sampai pemotongan pun ritual itu dilakukan dengan cara sedekah bumi yang lebih dikenal oleh masyarakat desa bojongkeding adalah “ mapag sri” (menyambut kedatangan sang dei padi,red), yang tujuannya adalah rasa syukur kepada sang pencipta karna hasil panen petani meningkat kata lain tidak ada kegagalan dalam bercocok tanam padi didesa bojongkeding ritual-ritual tersebut sudah menjadi budaya yang sangat kental dilakukan oleh masyarakat sampai saat ini yang tak mungkin bias dihilangkan dengan iringan kesenian tradisional wayang kulit yang isi ceritanya tentang sejarah dewi sri sang dewi padi.
            </p>
        </div>
        <!-- Portfolio Grid Items-->
        <div class="row">
            <!-- Portfolio Item 1-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-dark"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="assets/img/portfolio/cabin.png" alt="" />
                </div>
            </div>
            <!-- Portfolio Item 2-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-dark"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="assets/img/portfolio/cake.png" alt="" />
                </div>
            </div>
            <!-- Portfolio Item 3-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="assets/img/portfolio/circus.png" alt="" />
                </div>
            </div>
</section>
<!-- About Section-->
<section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">Informasi Kependudukan</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row">
            <div class="col-lg-4 ml-auto">
                <p class="lead">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional SASS stylesheets for easy customization.</p>
            </div>
            <div class="col-lg-4 mr-auto">
                <p class="lead">You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to the contact form to make it fully functional!</p>
            </div>
        </div>
        <!-- About Section Button-->
        <div class="text-center mt-4">
            <a class="btn btn-xl btn-outline-light" href="https://startbootstrap.com/themes/freelancer/">
                <i class="fas fa-download mr-2"></i>
                Free Download!
            </a>
        </div>
    </div>
</section>
<!-- Contact Section-->
<section class="page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Desa</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
        </div>
        <!-- Contact Section Form-->
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <!-- <label>Nama Lengkap</label> -->
                            <input class="form-control" id="name" type="text" placeholder="Nama Lengkap" required="required" data-validation-required-message="Please enter your name." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <!-- <label>Email</label> -->
                            <input class="form-control" id="email" type="email" placeholder="Email" required="required" data-validation-required-message="Please enter your email address." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <!-- <label>Nomor Telp/HP</label> -->
                            <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <!-- <label>Pesan</label> -->
                            <textarea class="form-control" id="message" rows="5" placeholder="Tulis Pesan..." required="required" data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br />
                    <div id="success"></div>
                    <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Kirim</button></div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Footer-->
<footer class="footer text-center">
    <div class="container">
        <div class="row">
            <!-- Footer Lokasi-->
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Lokasi</h4>
                <p class="lead mb-0">
                    Jl. Sudirman No 107 Bojongkeding, Tambakdahan Kabupaten Subang
                    <br />
                    Jawa Barat - 41253
                </p>
            </div>
            <!-- Footer Social Icons-->
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Follow</h4>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
            </div>

        </div>
    </div>
</footer>
<!-- Copyright Section-->
<div class="copyright py-4 text-center text-white">
    <div class="container"><small>Copyright &copy; Kependudukan Desa Bojongkeding <?= date('Y'); ?></small></div>
</div>
<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
<div class="scroll-to-top d-lg-none position-fixed">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
</div>
<!-- Portfolio Modals-->


<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Kembali ke halaman admin?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <a class="btn btn-primary" href="<?= base_url('admin') ?>">Ya</a>
            </div>
        </div>
    </div>
</div>



<!-- Profile Modal 1 -->
<div class="profile-modal modal fade" id="profileModal1" tabindex="-1" role="dialog" aria-labelledby="profileModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <button class="text-right px-3 py-3 close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="fas fa-times"></i></span>
            </button>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- profile Modal - Title-->
                            <div>
                                <h2>Profile</h2>
                            </div>
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                            </div>
                            <div id="profileModal1Label"><img class="img-thumbnail" width="300px" src="<?= base_url('assets/img/profile/') . $user['image']; ?>"></div>
                            <table width="100%">
                                <td class="col-md-8 justify-content-center">
                                    <table width="100%" style="padding-left: 2px; padding-right: 13px;" class="table my-5">
                                        <tbody>
                                            <tr class="font-weight-bold text-right">
                                                <td width="50%">Username</td>
                                                <td width="2%">:</td>
                                                <td class="font-weight-bold text-left"><?= $user['username']; ?></td>
                                            </tr>
                                            <tr class="font-weight-bold text-right">
                                                <td width="50%">Nama Lengkap</td>
                                                <td width="2%">:</td>
                                                <td class="font-weight-bold text-left"><?= $user['nama']; ?></td>
                                            </tr>
                                            <tr class="font-weight-bold text-right">
                                                <td width="50%">Alamat</td>
                                                <td width="2%">:</td>
                                                <td class="font-weight-bold text-left"><?= $user['alamat']; ?></td>
                                            </tr>
                                            <tr class="font-weight-bold text-right">
                                                <td width="50%">No HP</td>
                                                <td width="2%">:</td>
                                                <td class="font-weight-bold text-left"><?= $user['no_telp']; ?></td>
                                            </tr>
                                            <tr class="font-weight-bold text-right">
                                                <td width="50%">Akun dibuat</td>
                                                <td width="2%">:</td>
                                                <td class="font-weight-bold text-left"><?= date('d F Y', $user['date_created']); ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </table>
                            <button class="btn btn-primary" data-dismiss="modal">
                                <i class="fas fa-times fa-fw"></i>
                                Tutup
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>