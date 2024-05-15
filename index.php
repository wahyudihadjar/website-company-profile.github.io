<?php
include_once("inc/inc_koneksi.php");
include_once("inc/inc_fungsi.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programming di RumahWahyu</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href="">RumahWahyu</a></div>
            <div class="menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#courses">Courses</a></li>
                    <li><a href="#tutors">Tutors</a></li>
                    <li><a href="#partners">Partners</a></li>
                    <li><a href="#contacs">Contact</a></li>
                    <li><a href="" class="tbl-biru">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
<!-- untuk home -->
<section id="home">
    <img src="https://img.freepik.com/free-vector/hand-coding-concept-illustration_114360-8413.jpg?t=st=1715422651~exp=1715426251~hmac=ea04379af3717dfbc9dfba9bf7e8b8e3c51bce56a1857059e3984997d551f720&w=740" alt="">
    <div class="kolom">
        <p class="deskripsi"><?php echo ambil_kutipan('12') ?></p>
        <h2><?php echo ambil_judul('12') ?></h2>
        <?php echo ambil_isi('12') ?>
        <p><a href="<?php echo buat_link_halaman('12') ?>" class="tbl-pink">Pelajari lebih lanjut</a></p>
    </div>
</section>

<!-- untuk courses -->
<section id="courses">
    <div class="kolom">
        <p class="deskripsi"><?php echo ambil_kutipan('14') ?></p>
        <h2><?php echo ambil_judul('14') ?></h2>
        <?php echo ambil_isi('14') ?>
        <p><a href="<?php echo buat_link_halaman('14') ?>" class="tbl-biru">Pelajari lebih lanjut</a></p>
    </div>
    <img src="https://img.freepik.com/free-vector/course-app-concept-illustration_114360-6219.jpg?t=st=1715441773~exp=1715445373~hmac=573dfeec45206e71b9cb22e27dfa1da13490acedb8667eb4c16029831235009a&w=740" alt="">
</section>

<!-- untuk tutors -->
<section id="tutors">
    <div class="tengah">
        <div class="kolom">
            <p class="deskripsi">Our top tutors</p>
            <h2>Tutors</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, accusantium.</p>
        </div>
        <div class="tutor-list">
            <div class="kartu-tutor">
                <img src="https://marcsandersfoundation.org/wp-content/uploads/2022/01/303_Berggruen_Institute-Nils_Gilmani-e1542734040382-400x400-1.jpeg" alt="">
                <p>Gerard David</p>
            </div>
            <div class="kartu-tutor">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjqxC4BHwxdPFwZTZASGZxyRxUKt2IfAFziaQWFP5XWM2vkyx5vCKs_OxCJncIWwqB-R4&usqp=CAU" alt="">
                <p>Ruud Van Der Gark</p>
            </div>
            <div class="kartu-tutor">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1tKqTyT__Z4T0Ua5xx3BSfBz2084QaAi8NOmNXQ3Kag&s" alt="">
                <p>Lee Bouyer</p>
            </div>
            <div class="kartu-tutor">
                <img src="https://pulitzercenter.org/sites/default/files/pictures/picture-242290-1570122651.jpg" alt="">
                <p>Stevenson Muyon</p>
            </div>
        </div>
    </div>
</section>

<!-- untuk partners -->
<section id="partners">
    <div class="tengah">
        <div class="kolom">
            <p class="deskripsi">Our Top Partners</p>
            <h2>Partners</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex beatae molestiae dolorum vel, atque dolorem expedita fugit optio aliquid dolore!</p>
        </div>

        <div class="partner-list">
            <div class="kartu-partner">
                <img src="https://static.vecteezy.com/system/resources/thumbnails/006/788/494/small_2x/university-college-logo-open-book-symbol-of-knowledge-and-education-university-library-and-school-logotype-template-illustration-vector.jpg" alt="">
            </div>
            <div class="kartu-partner">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjFr52lwVxrij16PLo0thts9_V2VNvcN5lBiSVt9FY8w&s" alt="">
            </div>
            <div class="kartu-partner">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQ45toVAjXIJtdxQ_EfLerZHFj5ADBIYeL6CiYzK1jVQ&s" alt="">
            </div>
            <div class="kartu-partner">
                <img src="https://img.myloview.com/stickers/university-logo-template-400-142310567.jpg" alt="">
            </div>
            <div class="kartu-partner">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuGnnf0SBQG6KfyZelUIom_RCg7JGTaXN8i7n6iUvxuA&s" alt="">
            </div>
        </div>
    </div>
</section>
</div>

    <!-- <section id="contact"> -->
    <div id="contact">
        <div class="wrapper">
            <div class="footer">
                <div class="footer-section">
                    <h3>RumahWahyu</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui, commodi?</p>
                </div>
                <div class="footer-section">
                    <h3>About</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui, commodi?</p>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p>Jl KDT Alihanafiah Desa Mekar Sari Kecamatan Rabtau Alai</p>
                    <p>Kode Pos : 30160</p>
                </div>
                <div class="footer-section">
                    <h3>Social</h3>
                    <p><b>YouTube: </b>Programming di RumahWahyu</p>
                </div>
            </div>
        </div>
    </div>
    <!-- </section> -->

    <div id="copyright">
        <div class="wrapper">
            &copy; 2024 <b>RumahWahyu</b> All Right Reserved.
        </div>
    </div>

</body>

</html>