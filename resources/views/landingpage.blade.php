<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <link rel="stylesheet" href="css/lightbox.min.css" />
    <link rel="stylesheet" href="css/utilities.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Satusks.id</title>
</head>
<body id="home">
    <!-- navbar / header secion (flex) -->
    <div id="navbar" class="navbar top">
        <!-- logo section (left side)-->
        <h3 class="logo">
            <span class="text-primary">
                <!-- <i class="fas fa-book-open"></i> -->
                <img src="./images/asset/Putih - Submark 2.png" alt="" style="width: 40px" />
            </span>
            satusks.id
        </h3>
        <!-- navigation (rightside)-->
        <nav>
            <ul>
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="#testimony">Testimony</a></li>
                <li><a href="#galery">Galery</a></li>
                <li><a href="{{route('scorecard')}}">Scorecard</a></li>
                <li><a href="#footer">Kontak</a></li>
            </ul>
        </nav>
    </div>
    <header class="hero">
        <!-- jumbtron -->
        <!-- todo: media queries 768 -->
        <div class="content flex-columns">
            <div class="row">
                <div class="column">
                    <div class="column-1">
                        <img src="images/asset/Master_Ilustration_with shadow.png" alt="" />
                    </div>
                </div>
                <div class="column">
                    <div class="column-2 bg-outline">
                        <h1>Cari tahu kesiapanmu memilih jurusan & kampus yang tepat</h1>
                        <p>
                            Scorecard ini menilai pengetahuan kamu mengenai minat & bakat,
                            kurikulum, prospek serta perkiraan biaya kuliah . Cukup dengan
                            90 detik waktu pengisian dan kamu akan tahu skornya.
                        </p>
                        <a href="{{route('scorecard')}}" class="btn btn-primary">
                            <i class="fas fa-chevron"></i> Isi Scorecard >
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <!-- podcast -->
        <section id="podcast" class="subsection flex-columns bg-light">
            <div class="column podcast-content">
                <h1>
                    <img src="./images/asset/Group 770.png" alt="" style="width: 40px; margin-right: 10px" />Podcast satusks.id
                </h1>
                <iframe id="player_iframe" src="https://www.buzzsprout.com/2274351?client_source=large_player&iframe=true&referrer=https%3A%2F%2Fwww.buzzsprout.com%2F2274351%2Fpodcast%2Fembed" loading="lazy" width="100%" height="375" frameborder="0" scrolling="no" title="Podcast SatuSKS"></iframe>
            </div>
        </section>
        <!-- testimony -->
        <section id="testimony" class="subsection bg-primary bg-half">
            <!-- about -->
            <div class="flex-items">
                <h1>
                    <img src="./images/asset/Putih - Submark 2.png" alt="" style="width: 40px; margin-right: 10px" />Kata mereka tentang satusks.id
                </h1>
            </div>
            <div class="flex-container">
                <div class="item testimony-item">
                    <!-- <h3>Item 1</h3> -->
                    <p>
                        “ Saat mengikuti kelas ini saya cukup senang karena menjadi tahu
                        lebih dalam mengenai kehidupan kampus dan mendapat wawasan
                        mengenai jurusan yang saya minati.“
                    </p>
                </div>
                <div class="item testimony-item">
                    <p>
                        “Saya mendapat banyak pengetahuan mengenai universitas dan
                        terutama jurusan. Karena awalnya saya clueless mengenai arah
                        tujuan jurusan, jika saya tidak mengikuti kelas ini, saya tidak
                        akan memiliki persiapan baik dari segi mindset dan pikiran ke
                        depan.”
                    </p>
                </div>
                <div class="item testimony-item">
                    <p>
                        “ Pengalaman saya senang karena bisa memutuskan pilihan PTN yang
                        dituju. Kelas ini menyediakan worksheet yang bisa membantu kita
                        mengenal jurusan tersebut. Mulai dari mengenal defining moments
                        sampai bener-bener ngebedah informasi-informasi seputar jurusan.“
                    </p>
                </div>
                <div class="item testimony-item">
                    <p>
                        “ Menurutku kelas Pak Chris sangat terstruktur dan mudah untuk
                        dimengerti bagi kita yg bahkan belum persiapan apapun untuk
                        kedepannya.”
                    </p>
                </div>
            </div>
        </section>
        <!-- programs -->
        <section id="program" class="program flex-columns">
            <div class="program-content column bg-primary">
                <div class="row">
                    <div class="column">
                        <div class="column-1">
                            <h1>Free Content</h1>
                            <p>
                                Cari tau filosofi dan informasi program “Navigating Your
                                Future” melalui konten gratis ini.
                            </p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="flex-container">
                            <div class="item item-card">
                                <div class="row item-header">
                                    <img src="./images/asset/Group 613.png" alt="" />
                                    <div class="item-title">
                                        <h3>Deep Dive Jurusan</h3>
                                    </div>
                                </div>
                                <p>
                                    Setiap kamis 19-20 WIB, Webinar gratis membahas jurusan,
                                    informasi program “Navigating Your Future”
                                </p>
                            </div>
                            <div class="item item-card">
                                <div class="row item-header">
                                    <img src="./images/asset/Group 778.png" alt="" />
                                    <div class="item-title">
                                        <h3>Podcast satusks.id</h3>
                                    </div>
                                </div>
                                <p>Obrolan memilih jurusan dan kehidupan sebagai mahasiswa</p>
                                <a href="#" class="btn btn-highlight">
                                    <i class="fas fa-chevron"></i> Dengar Spotify
                                </a>
                            </div>
                            <div class="item item-card">
                                <div class="row item-header">
                                    <img src="./images/asset/Group 784.png" alt="" />
                                    <div class="item-title">
                                        <h3>Video kelas on-demand</h3>
                                    </div>
                                </div>
                                <p>Video kelas on-demand</p>
                                <a href="#" class="btn btn-highlight">
                                    <i class="fas fa-chevron"></i> Video On Demand
                                </a>
                            </div>
                            <div class="item item-card">
                                <div class="row item-header">
                                    <img src="./images/asset/Group.png" alt="" />
                                    <div class="item-title">
                                        <h3>E-Book</h3>
                                    </div>
                                </div>
                                <p>
                                    Panduan orangtua dalam mendampingi anak memilih jurusan &
                                    kampus yang tepat
                                </p>
                                <a href="#" class="btn btn-highlight">
                                    <i class="fas fa-chevron"></i> Unduh E-Book
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- hr secton -->
                <!-- <div>
            <hr class="middle-border" />
          </div> -->
                <div class="row">
                    <div class="column">
                        <div class="column-1">
                            <h1>Premium Program</h1>
                            <p>
                                Premium program “Navigating Your Future” berupa workshop dan
                                coaching.
                            </p>
                            <div class="row pad-0 premium-btn">
                                <a href="#" class="btn btn-outline">
                                    <i class="fas fa-chevron"></i> Link Workshop >
                                </a>
                                <a href="#" class="btn btn-outline">
                                    <i class="fas fa-chevron"></i> Link Coaching >
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="flex-container">
                            <div class="item item-card">
                                <div class="row item-header">
                                    <img src="./images/asset/Group 561.png" alt="" />
                                    <div class="item-title">
                                        <h3>Coaching</h3>
                                    </div>
                                </div>
                                <p>
                                    One-on-one coaching untuk siswa/i dan orang tuanya.
                                    Outputnya menentukan 2 (dua) pilihan jurusan dan kampus
                                </p>
                            </div>
                            <div class="item item-card">
                                <div class="row item-header">
                                    <img src="./images/asset/Group 610.png" alt="" />
                                    <div class="item-title">
                                        <h3>Workshop</h3>
                                    </div>
                                </div>
                                <p>
                                    Workshop Siswa/i akan dipandu untuk eksplorasi potensi diri
                                    dan riset jurusan dan kampus tujuan
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- galery -->
        <section id="galery" class="galery flex-grid section-padding">
            <header class="section-header">
                <!-- <h4>Galeri</h4>
          <h2>Galeri</h2> -->
                <h1>
                    <img src="./images/asset/Warna - Submark 3.png" alt="" style="width: 40px; margin-right: 10px" />Galeri
                </h1>
                <!-- <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores,
            atque.
          </p> -->
            </header>
            <div class="row">
                <div class="main-column">
                    <!-- <img src="images/cases/cases2.jpg" alt="" /> -->
                    <iframe width="98%" height="415" src="https://www.youtube.com/embed/aPFuXz68uxk?si=zVyGh-enGui2zw43" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="border-radius: 20px"></iframe>
                </div>
                <div class="column">
                    <a href="images/cases/cases3.jpg" data-lightbox="cases" data-title="testing" alt="">
                        <img src="images/cases/cases3.jpg" alt="" />
                    </a>
                    <a href="images/cases/cases4.jpg" data-lightbox="cases" data-title="testing" alt="">
                        <img src="images/cases/cases4.jpg" alt="" />
                    </a>
                    <a href="images/cases/cases4.jpg" data-lightbox="cases" data-title="testing" alt="">
                        <img src="images/cases/cases4.jpg" alt="" />
                    </a>
                </div>
                <div class="column">
                    <a href="images/cases/cases5.jpg" data-lightbox="cases" data-title="testing" alt="">
                        <img src="images/cases/cases5.jpg" alt="" />
                    </a>
                    <a href="images/cases/cases6.jpg" data-lightbox="cases" data-title="testing" alt="">
                        <img src="images/cases/cases6.jpg" alt="" />
                    </a>
                    <a href="images/cases/cases6.jpg" data-lightbox="cases" data-title="testing" alt="">
                        <img src="images/cases/cases6.jpg" alt="" />
                    </a>
                </div>
                <div class="column">
                    <a href="images/cases/cases7.jpg" data-lightbox="cases" data-title="testing" alt="">
                        <img src="images/cases/cases7.jpg" alt="" />
                    </a>
                    <a href="images/cases/cases8.jpg" data-lightbox="cases" data-title="testing" alt="">
                        <img src="images/cases/cases8.jpg" alt="" />
                    </a>
                    <a href="images/cases/cases8.jpg" data-lightbox="cases" data-title="testing" alt="">
                        <img src="images/cases/cases8.jpg" alt="" />
                    </a>
                </div>
            </div>
        </section>
        <!-- article -->
        <section id="article" class="article section-padding bg-half-reversed">
            <header class="section-header">
                <h1>
                    <img src="./images/asset/Warna - Submark 3.png" alt="" style="width: 40px; margin-right: 10px" />Artikel
                </h1>
            </header>
            <div class="flex-items">
                <div class="card">
                    <img src="images/cases/cases1.jpg" alt="" />
                    <div class="content">
                        <h2>Judul Artikel</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus
                            eu nunc in justo tempus varius. Pellentesque id ultricies ex...
                        </p>
                        <a href="{{ route('blog-detail')}}" class="btn-highlight-nonoutline">
                            Read More >
                        </a>
                    </div>
                </div>
                <div class="card">
                    <img src="images/cases/cases1.jpg" alt="" />
                    <div class="content">
                        <h2>Judul Artikel</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus
                            eu nunc in justo tempus varius. Pellentesque id ultricies ex...
                        </p>
                        <a href="post.html" class="btn-highlight-nonoutline">
                            Read More >
                        </a>
                    </div>
                </div>
                <div class="card">
                    <img src="images/cases/cases1.jpg" alt="" />
                    <div class="content">
                        <h2>Judul Artikel</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus
                            eu nunc in justo tempus varius. Pellentesque id ultricies ex...
                        </p>
                        <a href="post.html" class="btn-highlight-nonoutline">
                            Read More >
                        </a>
                    </div>
                </div>
                <div class="card">
                    <img src="images/cases/cases1.jpg" alt="" />
                    <div class="content">
                        <h2>Judul Artikel</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus
                            eu nunc in justo tempus varius. Pellentesque id ultricies ex...
                        </p>
                        <a href="post.html" class="btn-highlight-nonoutline">
                            Read More >
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- message -->
        <section id="subscribe" class="subscribe flex-columns flex-reverse bg-primary">
            <div class="row-nopadding">
                <div class="column">
                    <div class="column-1-nopadding">
                        <img src="images/asset/Group 783.png" alt="" />
                    </div>
                </div>
                <div class="column">
                    <div class="column-2">
                        <img src="images/asset/Group 782.png" style="object-fit: contain" alt="" />
                    </div>
                </div>
            </div>
        </section>
        <!-- contact -->
        <!-- <section id="contact" class="contact flex-columns">
        <div class="row">
          <div class="column">
            <div class="column-1">
              <img src="images/home/contact.jpg" alt="" />
            </div>
          </div>
          <div class="column">
            <div class="column-2 bg-light">
              <h2>Request Callback</h2>
              <form action="" class="callback-form">
                <div class="form-control">
                  <label for="name"></label>
                  <input
                    type="text"
                    name="name"
                    id="name"
                    placeholder="enter name"
                  />
                </div>
                <div class="form-control">
                  <label for="email"></label>
                  <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="enter email"
                  />
                </div>
                <div class="form-control">
                  <label for="phone"></label>
                  <input
                    type="text"
                    name="name"
                    id="phone"
                    placeholder="enter phone"
                  />
                </div>
                <input type="submit" value="send" id="submit" class="btn" />
              </form>
            </div>
          </div>
        </div>
      </section> -->
    </main>
    <footer class="footer bg-primary" id="footer">
        <div class="row">
            <div class="column column-1">
                <h3>Solutions</h3>
                <nav>
                    <ul>
                        <li><a href="#home" class="active">Campus Academy</a></li>
                        <li><a href="#testimony">Career Seminar</a></li>
                        <li><a href="#testimony">Parent Meeting</a></li>
                    </ul>
                </nav>
            </div>
            <div class="column column-2">
                <h3>Explore</h3>
                <nav>
                    <ul>
                        <li><a href="{{route('scorecard')}}">Scorecard</a></li>
                        <li><a href="#">Zoom Schedule</a></li>
                        <li><a href="#">Coaching</a></li>
                    </ul>
                </nav>
            </div>
            <div class="column"></div>
            <div class="column"></div>
            <div class="column"></div>
            <div class="column column-3">
                <h3>satusks.id</h3>
                <nav>
                    <ul>
                        <li><a href="#home" class="active">Jesica</a></li>
                        <li><a href="#testimony"> +62 895 3391 41000</a></li>
                    </ul>
                </nav>

                <p>Copyright &copy; 2023 - Satusks.id</p>
            </div>
        </div>
        <div class="row contact-us">
            <div class="social">
                <p>Contact Us</p>
                <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
                <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                <a href="#"><i class="fab fa-youtube fa-2x"></i></a>
                <a href="#"><i class="fab fa-linkedin fa-2x"></i></a>
            </div>
            <div class="barcode">
                <img src="./images/asset/barcode.png" alt="" />
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="js/lightbox.min.js"></script>
    <!--   -->
    <script>
        const navbar = document.getElementById('navbar')
        let scrolled = false
        window.onscroll = function() {
            if (window.pageYOffset > 100) {
                navbar.classList.remove('top')
                if (!scrolled) {
                    navbar.style.transform = 'translateY(-70px)'
                }
                setTimeout(() => {
                    navbar.style.transform = 'translateY(0px)'
                    navbar.style.zIndex = '11'
                    scrolled = true
                }, 200)
            } else {
                navbar.classList.add('top')
                scrolled = false
            }
        }

        // Smooth Scrolling
        $('#navbar a, .btn').on('click', function(e) {
            if (this.hash !== '') {
                e.preventDefault()

                const hash = this.hash

                $('html, body').animate({
                        scrollTop: $(hash).offset().top - 100
                    , }
                    , 800
                )
            }
        })

    </script>
</body>
</html>
