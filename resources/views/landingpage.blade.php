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
            <a class="logo-icon" href="{{route('home')}}">

                <span class="text-primary">
                    <!-- <i class="fas fa-book-open"></i> -->
                    <img src="./images/asset/Putih - Submark 2.png" alt="" style="width: 40px" />
                </span>
                satusks.id

            </a>
        </h3>
        <!-- navigation (rightside)-->
        <nav>
            <ul>
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="#testimony">Testimony</a></li>
                <li><a href="#galery">Galery</a></li>
                <li><a href="#footer">Kontak</a></li>
                <li><a href="{{route('scorecard')}}">Scorecard</a></li>
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
                            2 - 5 menit waktu pengisian dan kamu akan tahu skornya.
                        </p>
                        {{-- <blockquote>
                            Scorecard ini menilai pengetahuan kamu mengenai minat & bakat,
                            kurikulum, prospek serta perkiraan biaya kuliah . Cukup dengan
                            90 detik waktu pengisian dan kamu akan tahu skornya.
                        </blockquote> --}}
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
                                <a href="https://bit.ly/prw-deepdive24" class="btn btn-highlight">
                                    <i class="fas fa-chevron"></i> Lihat Webinar
                                </a>
                            </div>
                            <div class="item item-card">
                                <div class="row item-header">
                                    <img src="./images/asset/Group 778.png" alt="" />
                                    <div class="item-title">
                                        <h3>Podcast satusks.id</h3>
                                    </div>
                                </div>
                                <p>Obrolan memilih jurusan dan kehidupan sebagai mahasiswa</p>
                                <a href="https://open.spotify.com/show/7afBj7FAfds0XOmqQfLIRE?si=81ee9cfe19c24c93" class="btn btn-highlight">
                                    <i class="fas fa-chevron"></i> Dengar Spotify
                                </a>
                            </div>
                            <div class="item item-card">
                                <div class="row item-header">
                                    <img src="./images/asset/Group.png" alt="" />
                                    <div class="item-title">
                                        <h3>Video kelas on-demand</h3>
                                    </div>
                                </div>
                                <p>Video kelas on-demand</p>
                                <a href="https://kelas-christianfredynaa-com.mayar.link/course/navigating-online-class" class="btn btn-highlight">
                                    <i class="fas fa-chevron"></i> Video On Demand
                                </a>
                            </div>
                            <div class="item item-card">
                                <div class="row item-header">
                                    <img src="./images/asset/Group 784.png" alt="" />
                                    <div class="item-title">
                                        <h3>E-Book</h3>
                                    </div>
                                </div>
                                <p>
                                    Panduan orangtua dalam mendampingi anak memilih jurusan &
                                    kampus yang tepat
                                </p>
                                <a href="https://kelas-christianfredynaa-com.mayar.link/catalog/ebook-panduan-orang-tua-navigating-your-future" class="btn btn-highlight">
                                    <i class="fas fa-chevron"></i> Unduh E-Book
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- hr secton -->
                <hr class="middle-border" />
                <div class="row">
                    <div class="column">
                        <div class="column-1">
                            <h1>Premium Program</h1>
                            <p>
                                Premium program “Navigating Your Future” berupa workshop dan
                                coaching.
                            </p>
                            {{-- <div class="row pad-0 premium-btn">
                                <a href="#" class="btn btn-outline">
                                    <i class="fas fa-chevron"></i> Link Workshop >
                                </a>
                                <a href="#" class="btn btn-outline">
                                    <i class="fas fa-chevron"></i> Link Coaching >
                                </a>
                            </div> --}}
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
                                <a href="https://forms.gle/KgziBorgq1QwpELP6" class="btn btn-highlight">
                                    <i class="fas fa-chevron"></i> Link Coaching
                                </a>
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
                                <a href="https://forms.gle/RmWdaFRq9ouEzvMr8" class="btn btn-highlight">
                                    <i class="fas fa-chevron"></i> Link Workshop
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- galery -->
        <section id="galery" class="galery flex-grid section-padding">
            <header class="section-header">

                <h1>
                    <img src="./images/asset/Warna - Submark 3.png" alt="" style="width: 40px; margin-right: 10px" />Galeri
                </h1>

            </header>
            <div class="row">
                <div class="main-column">
                    <iframe src="https://drive.google.com/file/d/13_0ddHIWCCg_sdBM7V_Ga911rz21GK2y/preview?controls=0" width="98%" height="500" autoplay="1" frameborder="0" controls="0" autoplay="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="border-radius: 20px"></iframe>
                </div>
                <div class="column">
                    <a href="{{ asset('images/galery/1.JPG')}}" data-lightbox="cases" data-title="Langsung dibimbing oleh profesional " alt="">
                        <img src="{{ asset('images/galery/1.JPG')}}" alt="" />
                    </a>
                    <a href="{{ asset('images/galery/2.JPG')}}" data-lightbox="cases" data-title="diskusi dan interaksi bersama" alt="">
                        <img src="{{ asset('images/galery/2.JPG')}}" alt="" />
                    </a>
                    <a href="{{ asset('images/galery/3.JPG')}}" data-lightbox="cases" data-title="bimbingan konseling" alt="">
                        <img src="{{ asset('images/galery/3.JPG')}}" alt="" />
                    </a>
                </div>
                <div class="column">
                    <a href="{{ asset('images/galery/4.JPG')}}" data-lightbox="cases" data-title="ciptakan suasana terbaik" alt="">
                        <img src="{{ asset('images/galery/4.JPG')}}" alt="" />
                    </a>
                    <a href="{{ asset('images/galery/5.JPG')}}" data-lightbox="cases" data-title="mempersiapkan akademik" alt="">
                        <img src="{{ asset('images/galery/5.JPG')}}" alt="" />
                    </a>
                    <a href="{{ asset('images/galery/6.JPG')}}" data-lightbox="cases" data-title="aktivitas satusks.id" alt="">
                        <img src="{{ asset('images/galery/6.JPG')}}" alt="" />
                    </a>
                </div>
                <div class="column">
                    <a href="{{ asset('images/galery/7.JPG')}}" data-lightbox="cases" data-title="aktivitas satusks.id" alt="">
                        <img src="{{ asset('images/galery/7.JPG')}}" alt="" />
                    </a>
                    <a href="{{ asset('images/galery/8.JPG')}}" data-lightbox="cases" data-title="aktivitas satusks.id" alt="">
                        <img src="{{ asset('images/galery/8.JPG')}}" alt="" />
                    </a>
                    <a href="{{ asset('images/galery/9.JPG')}}" data-lightbox="cases" data-title="aktivitas satusks.id" alt="">
                        <img src="{{ asset('images/galery/9.JPG')}}" alt="" />
                    </a>
                </div>
            </div>
        </section>
        <!-- article -->
        {{-- <section id="article" class="article section-padding bg-half-reversed">
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
                <a href="{{ route('blog-detail')}}" class="btn-highlight-nonoutline">
                    Read More >
                </a>
            </div>
        </div>
        </div>
        </section> --}}
        <!-- message -->
        <section id="subscribe" class="subscribe flex-columns flex-reverse bg-primary">
            <div class="row-nopadding">
                <div class="column">
                    <div class="column-1-nopadding">
                        <img src="images/asset/Group 783.png" alt="" />
                    </div>
                </div>
                <div class="column">
                    <div class="column-2" style="align-items:flex-end;">
                        <img src="images/asset/Group 782.png" style="object-fit: contain" alt="" id="motivation-image" />
                    </div>
                </div>
            </div>
        </section>
        <!-- contact -->
    </main>
    <footer class="footer bg-primary" id="footer">
        <div class="row">
            <div class="column column-1">
                <h3>Solutions</h3>
                <nav>
                    <ul>
                        <li><a href="#" class="active">Campus Academy</a></li>
                        <li><a href="#">Career Seminar</a></li>
                        <li><a href="#">Parent Meeting</a></li>
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
                        <li><a href="#" class="active">Jesica</a></li>
                        <li><a href="#"> +62 895 3391 41000</a></li>
                    </ul>
                </nav>

                <p>Copyright &copy; 2024 - Satusks.id</p>
            </div>
        </div>
        <div class="row contact-us">
            <div class="social">
                <p>Contact Us</p>
                <a href="https://www.linkedin.com/in/christian-fredy-naa-220786/?originalSubdomain=id"><i class="fab fa-linkedin fa-2x"></i></a>
                <a href="#"><i class="fab fa-youtube fa-2x"></i></a>
                <a href="https://www.instagram.com/satusks.id/"><i class="fab fa-instagram fa-2x"></i></a>
                <a href="https://open.spotify.com/show/7afBj7FAfds0XOmqQfLIRE?si=81ee9cfe19c24c93"><i class="fab fa-spotify fa-2x"></i></a>
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
