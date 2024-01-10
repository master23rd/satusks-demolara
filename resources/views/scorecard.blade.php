<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/utilities.css" />
    <link rel="stylesheet" href="./css/style.css" />
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
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('scorecard')}}" class="active">Scorecard</a></li>
            </ul>
        </nav>
    </div>
    <header class="hero blog">
        <!-- jumbtron -->
        <div class="content">
            <h1>Scorecard</h1>
            {{-- <p id="intro-quiz">
                Scorecard ini menilai pengetahuan kamu mengenai minat & bakat,
                kurikulum, prospek serta perkiraan biaya kuliah . Cukup dengan 90
                detik waktu pengisian dan kamu akan tahu skornya.
            </p> --}}
        </div>
    </header>
    <main>
        <!-- scorecard -->
        <section id="welcome" class="post scorecard">
            {{-- <h1>
                Scorecard memilih jurusan kuliah yang tepat, Navigating Your Future
                Workshop Desember 2023
            </h1> --}}
            <p>
                Selamat datang di Scorecard Pemilihan Jurusan dan Kampus. Tujuan dari scorecard ini adalah untuk membantu Anda, para siswa SMA, dalam mengevaluasi sejauh mana pemahaman dan kesiapan Anda dalam memilih jurusan dan kampus yang tepat. Melalui serangkaian pertanyaan ya/tidak, scorecard ini akan mengukur pengetahuan dan persiapan Anda dalam tiga aspek krusial:
            </p>
            <div class="list">
                <ul class="list-show">
                    <li>
                        <p>Minat dan Bakat: Memahami seberapa baik jurusan yang dipilih sesuai dengan minat dan bakat pribadi Anda.</p>
                    </li>
                    <li>
                        <p>Informasi tentang Jurusan dan Kampus: Menilai tingkat informasi yang Anda miliki tentang tujuan jurusan, fasilitas, prospek karir, serta reputasi kampus yang diminati.</p>
                    </li>
                    <li>
                        <p>Biaya, Jalur Masuk, dan Tanggal Penting: Menilai kesiapan Anda dalam hal pembiayaan, mengetahui jalur masuk yang tersedia, dan pengetahuan Anda akan tanggal-tanggal penting dalam proses seleksi masuk perguruan tinggi.</p>
                    </li>
                </ul>
            </div>
            <p>
                Dengan menjawab pertanyaan-pertanyaan ini, Anda akan mendapatkan gambaran yang lebih jelas tentang seberapa siap Anda dalam mengambil langkah penting ini menuju masa depan Anda.
            </p>
        </section>

        <section id="contact" class="contact flex-columns">
            <div class="column">
                <div class="column-2">
                    <h2>Scorecard Form</h2>
                    <form action="#" class="callback-form" id="contact_form">
                        <div class="form-control">
                            <label for="name">Nama</label>
                            <input type="text" name="name" id="name" placeholder="masukan nama" class="solid" required />
                        </div>
                        <div class="form-control">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" placeholder="masukan email" class="solid" required />
                        </div>
                        <div class="form-control">
                            <label for="phone">Nomor WA (opsional) untuk dikirimkan hasil score card yang
                                lebih komprehensif (nomor WA dijamin keamanannya)</label>
                            <input type="number" name="name" id="wa_number" placeholder="masukan kontak whatsapp" class="solid" required />
                        </div>
                        <input type="submit" value="Mulai Scorecard" class="btn btn-primary" />
                    </form>
                </div>
            </div>
        </section>
        <div id="questioner" class="questioner">
            <div class="quiz-container">
                <div id="quiz"></div>
            </div>
            <!-- <button id="previous">Previous Question</button>
            <button id="next">Next Question</button> -->
            <button id="submit" class="btn btn-primary">Kirim Jawaban</button>
            {{-- <div id="results"></div> --}}
            <!-- <div id="chartContainer"></div> -->
        </div>
        <section id="results" class="contact flex-columns"></section>
        <section id="scorecard" class="post scorecard"></section>

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
    <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.canvasjs.com/jquery.canvasjs.min.js"></script>
    <script>
        const csrf = '{{ csrf_token() }}';
        const generatedPdfUrl = "{{route('generated_pdf')}}";

    </script>
    <script type="text/javascript" src="{{ asset('js/questioner_ver1.js')}}"></script>
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
                    scrolled = true
                }, 200)
            } else {
                navbar.classList.add('top')
                scrolled = false
            }
        }

    </script>
</body>
</html>
