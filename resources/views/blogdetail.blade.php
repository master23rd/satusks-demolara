<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('scorecard')}}">Scorecard</a></li>
            </ul>
        </nav>
    </div>
    <header class="hero blog">
        <!-- jumbtron -->
        <div class="content">
            <h1>Blog</h1>
        </div>
    </header>
    <main>
        <!-- blog -->
        <section class="post blog">
            <h2>Blog post one</h2>
            <p class="meta">
                <i class="fas fa-user"></i> Posted by <strong> Jane Doe</strong> | 19
                Desember 2023
            </p>
            <img src="images/cases/cases1.jpg" alt="" />
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium,
                deleniti iusto? Quasi similique officia reiciendis magni, perferendis
                doloribus quisquam veritatis nemo architecto perspiciatis quas eum
                minima sunt blanditiis fugit voluptates!
            </p>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est
                explicabo at, voluptates natus repellendus nobis amet accusantium.
                Modi enim architecto velit aliquid natus, eos doloribus officia
                tempora quibusdam molestias. Aperiam blanditiis cum eos incidunt
                cupiditate debitis praesentium, corrupti similique velit voluptatibus
                suscipit sunt quas nihil distinctio qui quisquam ut accusantium,
                dolorum beatae vel officiis asperiores vitae, hic vero? Quasi, unde.
            </p>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt at
                velit nihil officia libero ducimus sint nam nisi, possimus, distinctio
                accusamus vitae facilis, sit tenetur consequuntur asperiores magni
                culpa deleniti? Repellendus excepturi molestias sequi vitae minus?
                Omnis error fugit corrupti molestiae recusandae libero, non dicta
                reiciendis perspiciatis neque sit dolorum.
            </p>
        </section>
    </main>
    <footer class="footer bg-primary">
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
                        <li><a href="#galery">Scorecard</a></li>
                        <li><a href="scorecard.html">Zoom Schedule</a></li>
                        <li><a href="#contact">Coaching</a></li>
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
