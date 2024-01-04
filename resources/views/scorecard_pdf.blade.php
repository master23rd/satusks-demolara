<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <link rel="stylesheet" href="./css/utilities.css" />
    <link rel="stylesheet" href="./css/style.css" /> --}}
    <style>
        /* @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap'); */
        @import url('https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,500;9..40,700&family=Open+Sans:wght@300;400&family=Roboto:wght@100&display=swap');

        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            /* background: #fff; */
            /* color: #333; */
            line-height: 1.6;
        }

        ul {
            list-style: none;
        }

        ul.list-show {
            list-style: show;
        }

        a {
            color: #333;
            text-decoration: none;
        }

        h1,
        h2 {
            font-weight: 300;
            line-height: 1.2;
        }

        p {
            margin: 10px 0;
        }

        img {
            width: 100%;
        }

        /* navbar */
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space;
            /* background-color: #333; */
            background: linear-gradient(to right, #8196d9, #6680b3, #5c78cf);
            /* background: #8196d9; */
            color: #fff;
            opacity: 0.8;
            width: 100%;
            height: 70px;
            position: fixed;
            /* top: 0; */
            padding: 0 30px;
            transition: 0.5s;
        }

        .navbar.top {
            background: transparent;
            z-index: 11;
        }

        .navbar a {
            color: #fff;
            padding: 10px 20px;
            margin: 0 5px;
            font-weight: 200;
        }

        .navbar a:hover {
            border-bottom: #da544a 4px solid;
        }

        .navbar a.active {
            font-weight: bold;
            font-style: italic;
            border-bottom: #da544a 4px solid;
        }

        .navbar ul {
            display: flex;
        }

        .navbar .logo {
            font-weight: 400;
            margin-right: 50px;
        }

        /* Header of Jumbotron */
        .hero {
            background: url('../images/asset/Earth.png') no-repeat center center/contain,
                linear-gradient(to right, #8196d9, #6680b3, #5c78cf);
            height: 100vh;
            position: relative;
            color: #fff;
        }

        /* positioning on center (flex column for all items) */
        .hero .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: left;
            height: 100%;
            padding: 0 20px;
        }

        .hero .content h1 {
            font-size: 48px;
        }

        .hero .content p {
            font-size: 20px;
            max-width: 600px;
            margin: 50px 0 30px;
        }

        /* psudeo class for Overlay */
        .hero::before {
            content: ' ';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* background: red; */
            /* background: rgba(0, 0, 0, 0.6); */
        }

        .hero * {
            z-index: 10;
        }

        .hero.blog {
            /* background: url('../images/home/blog.jpg') no-repeat center center/cover; */
            background: url('../images/asset/Earth.png') no-repeat center center/contain,
                linear-gradient(to right, #8196d9, #6680b3, #5c78cf);
            height: 30vh;
        }

        .hero.scorecard {
            background: url('../images/asset/Earth.png') no-repeat center center/contain,
                linear-gradient(to right, #8196d9, #6680b3, #5c78cf);
            height: 80vh;
            position: relative;
            color: #fff;
        }

        /* flex items */
        .flex-items {
            display: flex;
            text-align: center;
            justify-content: center;
            align-items: center;
            /* height: 100%; */
        }

        .flex-items>div {
            /* padding: 20px; */
            /* border: 1px solid; */
            border-radius: 5%;
            margin: 10px;
        }

        .flex-items .card {
            background: #fff;
            border: #d3d3d3 1px solid;
        }

        .flex-items .card img {
            border-radius: 5%;
        }

        .flex-items .content {
            padding: 10px 30px;
            text-align: left;
        }

        /* podcast  - old section*/
        .testimony-item {
            height: fit-content;
        }

        .podcast-content {
            align-items: center;
        }

        /* programs */
        #program {
            padding: 50px;
        }

        .program-content {
            border-radius: 50px;
        }

        .icon-jurusan {
            background: url(../images/asset/Group\ 610.png);
        }

        .premium-btn a {
            margin-right: 20px;
        }

        /* footer */
        #subscribe {
            background: url('../images/asset/Subtract.png') no-repeat center left/auto,
                linear-gradient(to left, #8196d9, #6680b3, #5c78cf);
            /* height: 119vh; */
            /* #c9d2ef, #6680b3, #8196d9 */
            /* background: url('../images/home/showcase.jpg') no-repeat center center/cover; */
            /* background: #8196d9; */
        }

        /* .footer {
        height: 50vh;
        position: relative;
        color: #fff;
        } */

        .footer .content {
            display: flex;
            /* will make child direct to coulmn, center position */
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            text-align: left;
            /* full height like parent */
            height: 100%;
            padding: 0 20px;
        }

        /* end old section */

        /* galery */
        .galery img:hover {
            opacity: 0.7;
        }

        /* teams */
        .team img {
            border-radius: 5%;
        }

        /* subscribe form */
        .callback-form {
            width: 100%;
            padding: 20px 0;
        }

        .callback-form label {
            display: block;
            margin-bottom: 5px;
            width: 50%;
        }

        .callback-form .form-control {
            margin-bottom: 15px;
        }

        .callback-form input {
            /* width: 100%; */
            /* padding: 4px; */
            width: 50%;
            padding: 10px;
            height: 40px;
            border: #f5f5f5 1px solid;
            border-radius: 20px;
        }

        .callback-form input.solid {
            /* width: 100%; */
            /* padding: 4px; */
            width: 50%;
            padding: 10px;
            height: 40px;
            border: #333 1px solid;
            border-radius: 20px;
        }

        .callback-form input:focus {
            outline-color: #da544a;
        }

        .callback-form .btn {
            padding: 12px 0;
            margin-top: 20px;
        }

        /* blog */
        .post {
            padding: 50px 30px;
        }

        .post.blog {
            padding: 50px 100px;
        }

        .post.scorecard {
            border-bottom: #ccc solid 1px;
            transition: all 1s;
            /* transition: 0.6s ease opacity, 0.6s ease transform; */
        }

        .post.scorecard.pre-animation {
            opacity: 0;
            max-height: 0;
        }

        #contact {
            border-bottom: #ccc solid 1px;
            transition: all 1s;
        }

        .contact.pre-animation {
            opacity: 0;
            max-height: 0;
        }

        .post h2 {
            font-size: 40px;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: #ccc solid 1px;
        }

        .post h1 {
            margin-bottom: 20px;
            padding-bottom: 10px;
            font-size: 43px;
            width: 73%;
        }

        .post.blog h2,
        .post.blog .meta {
            text-align: center;
        }

        .post .meta {
            margin-bottom: 30px;
        }

        .post img {
            /* width: 300px; */
            /* border-radius: 50%; */
            width: 60%;
            display: block;
            margin: 0 auto 30px;
            height: 500px;
        }

        /* footer */
        .footer {
            /* flex-direction: column; */
            /* justify-content: center; */
            /* height: 200px; */
            /* new */
            /* display: flex; */
            /* flex-direction: row;
        align-items: center;
        justify-content: space-between; */
            text-align: left;
            padding: 50px;
        }

        .footer .row {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .footer .column {
            display: flex;
            flex-direction: column;
        }

        .footer .column nav {
            margin: 20px 0;
        }

        .footer .column-3 {
            text-align: right;
        }

        .footer .contact-us {
            margin-top: 20px;
            justify-content: flex-end;
        }

        .footer .barcode {
            display: inline-block;
            min-width: 0;
        }

        .footer .row img {
            width: 100px;
        }

        .footer a {
            color: #fff;
        }

        .footer a:hover {
            color: #da544a;
        }

        .footer .social>* {
            margin-right: 30px;
        }

        .list-show {
            margin-left: 40px;
        }

        /* questioner */
        /*section .questioner {
        display: flex;
        flex-flow: row wrap;
        }
        section .questioner > div {
        flex: 1;
        padding: 0.5rem;
        }

        input[type='radio'] {
        display: none;
        &:not(:disabled) ~ label {
            cursor: pointer;
        }
        &:disabled ~ label {
            color: hsla(150, 5%, 75%, 1);
            border-color: hsla(150, 5%, 75%, 1);
            box-shadow: none;
            cursor: not-allowed;
        }
        }

        label {
        height: 100%;
        display: block;
        background: white;
        border: 2px solid hsla(150, 75%, 50%, 1);
        border-radius: 20px;
        padding: 1rem;
        margin-bottom: 1rem;
        text-align: center;
        box-shadow: 0px 3px 10px -2px hsla(150, 5%, 65%, 0.5);
        position: relative;
        }

        input[type='radio']:checked + label {
        background: hsla(150, 75%, 50%, 1);
        color: hsla(215, 0%, 100%, 1);
        box-shadow: 0px 0px 20px hsla(150, 100%, 50%, 0.75);
        &::after {
            color: hsla(215, 5%, 25%, 1);
            font-family: FontAwesome;
            border: 2px solid hsla(150, 75%, 45%, 1);
            content: '\f00c';
            font-size: 24px;
            position: absolute;
            top: -25px;
            left: 50%;
            transform: translateX(-50%);
            height: 50px;
            width: 50px;
            line-height: 50px;
            text-align: center;
            border-radius: 50%;
            background: white;
            box-shadow: 0px 2px 5px -2px hsla(0, 0%, 0%, 0.25);
        }
        }
        input[type='radio'].optfalse:checked + label {
        background: red;
        border-color: red;
        }
        p {
        font-weight: 900;
        }

        @media only screen and (max-width: 700px) {
        section {
            flex-direction: column;
        }
        }*/

        /* questioner 2 */
        .questioner {
            color: #333;
            font-weight: 300;
            text-align: center;
        }

        .questioner.pre-animation {
            opacity: 0;
            max-height: 0;
            transition: all 1s;
        }

        .questioner h1 {
            font-weight: 300;
            margin: 0px;
            padding: 10px;
            font-size: 20px;
            background-color: #444;
            color: #fff;
        }

        .question {
            font-size: 30px;
            margin-bottom: 10px;
        }

        .answers {
            margin-bottom: 20px;
            text-align: left;
            display: inline-block;
        }

        .answers label {
            display: block;
            margin-bottom: 10px;
        }

        button {
            font-family: 'Work Sans', sans-serif;
            font-size: 22px;
            background-color: #279;
            color: #fff;
            border: 0px;
            border-radius: 3px;
            padding: 20px;
            cursor: pointer;
            margin-bottom: 20px;
        }

        button:hover {
            background-color: #38a;
        }

        .slide {
            position: absolute;
            left: 0px;
            top: 0px;
            width: 100%;
            z-index: 1;
            opacity: 0;
            transition: opacity 0.5s;
        }

        .active-slide {
            opacity: 1;
            z-index: 2;
        }

        .quiz-container {
            position: relative;
            /* height: 200px; */
            /* margin-top: 40px; */
        }

        /* mobile */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                height: 120px;
                padding: 20px;
            }

            .navbar a {
                padding: 10px 10px;
                margin: 0 3px;
            }

            .subsection {
                padding: 30px;
            }

            #program {
                padding: 0;
            }

            .hero,
            .hero.scorecard {
                height: 190vh;
                display: flex;
                flex-direction: column;
                /* position: relative; */
                color: #fff;
                padding-top: 80px;
            }

            #subscribe {
                height: 350px;
            }

            .subscribe img {
                display: block;
                margin: 0 auto;
                width: 50%;
                object-fit: cover;
            }

            .subscribe .row,
            .subscribe .column,
            .subscribe .column-2 {
                padding: 10px;
            }

            .subscribe .column .column-1-nopadding {
                display: none;
            }

            .flex-items {
                flex-direction: column;
            }

            .flex-columns .column,
            .flex-grid .column {
                flex: 100%;
                max-width: 100%;
            }

            .team img {
                width: 70%;
            }

            .post h1 {
                width: 100%;
            }
        }

        @media (max-width: 450px) {
            .subscribe img {
                width: 100%;
                object-fit: cover;
            }
        }

        /* text colors */
        .text-primary {
            color: #28a745;
        }

        .text-secondary {
            color: #0284d0;
        }

        .middle-border {
            padding: 50px;
        }

        /* button */
        .btn {
            cursor: pointer;
            /* ??? */
            display: inline-block;
            padding: 10px 30px;
            color: #fff;
            background-color: #28a745;
            border: none;
            border-radius: 20px;
        }

        /* effect */
        .btn:hover {
            opacity: 0.9;
        }

        .bg-primary {
            background: #5c78cf;
            color: #fff;
        }

        .btn-primary {
            background: #da544a;
            color: #fff;
        }

        .btn-secondary,
        .bg-secondary {
            background: #0284d0;
            color: #fff;
        }

        .btn-dark,
        .bg-dark {
            background: #333;
            color: #fff;
        }

        .btn-light,
        .bg-light {
            background: #f4f4f4;
            color: #333;
        }

        .btn-outline {
            background: transparent;
            border: 1px solid #fff;
        }

        .btn-highlight {
            background: transparent;
            border: 1px solid #da544a;
            color: #da544a;
        }

        .btn-highlight-nonoutline {
            border: none;
            color: #da544a;
            background: transparent;
        }

        .bg-half {
            background: linear-gradient(#5c78cf 0%, #5c78cf 50%, #fff 50%, #fff 100%);
        }

        .bg-half-reversed {
            background: linear-gradient(#fff 0%, #fff 50%, #5c78cf 50%, #5c78cf 100%);
        }

        /* flex columns */
        /* flex for outline */
        .flex-columns.flex-reverse .row,
        .flex-columns.flex-reverse .row-nopadding {
            flex-direction: row-reverse;
        }

        .flex-columns .row,
        .flex-columns .row-nopadding {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            width: 100%;
        }

        .flex-columns .row {
            padding: 30px;
        }

        .flex-columns .row-nopadding {
            padding: 0;
        }

        .flex-columns .row .pad-0 {
            padding: 0px;
        }

        .flex-columns .row .item-header {
            padding: 10px;
        }

        /* flex for inner column  */
        .flex-columns .column {
            display: flex;
            flex-direction: column;
            flex-basis: 100%;
            flex: 1;
        }

        .flex-columns .column .column-1,
        .flex-columns .column .column-2 {
            height: 100%;
        }

        .flex-columns .column .column-1 {
            padding: 0;
        }

        /* handle image size when normal view */
        .flex-columns img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .flex-columns .column-1 {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
            padding: 30px;
        }

        .flex-columns .column-2 {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            padding: 30px;
        }

        .flex-columns h2 {
            font-size: 40px;
            font-weight: 100;
        }

        .flex-columns h4 {
            margin-bottom: 10px;
        }

        .flex-columns p {
            margin: 20px 0;
        }

        .flex-container {
            display: flex;
            /* flex-direction: row; */
            flex-wrap: wrap;
            /* padding: 20px; */
        }

        .item {
            color: #333;
            background: #f4f4f4;
            border: #ccc solid 2px;
            margin: 10px;
            padding: 10px;
            text-align: left;
            border-radius: 10px;
            /* max-width: 200px; */
            /* width: 250px; */
            /* flex:grow,shrink, basis */
            flex: 1;
            flex-basis: 200px;
        }

        .item-card {
            height: 300px;
        }

        .item-header {
            padding: 10px;
        }

        .item-title {
            padding: 0 10px;
            width: 80%;
        }

        .flex-container img {
            width: 20%;
            height: 100%;
        }

        .flex-container .item-card .btn {
            width: 100%;
            text-align: center;
            padding: 5px;
        }

        .subsection {
            /* padding: 30px; */
            padding: 40px 100px 50px;
        }

        .subsection h1 {
            /* font-size: 48px; */
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .subsection i {
            /* background-color: #28a745; */
            color: #112556;
            /*#fff;*/
            padding: 1rem;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        /* header section - ex. cases */
        .section-header {
            padding: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .section-header h1 {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .section-header h2 {
            font-size: 40px;
            margin: 20px 0;
        }

        .section-header i {
            padding: 1rem;
        }

        .section-padding {
            padding: 20px 20px 40px;
        }

        /* flex-grid for multiple column - ex. cases image */
        .flex-grid .row {
            display: flex;
            flex-wrap: wrap;
            padding: 0 4px;
        }

        .flex-grid .main-column {
            flex: 60%;
            max-width: 100%;
            padding: 0 20px;
        }

        .flex-grid .column {
            /* flex: 25%;
            max-width: 25%; */
            /* padding: 0 4px; */
            flex: 13%;
            max-width: 13%;
            padding: 30px 5px;
        }

        .flex-grid .column img {
            border-radius: 5px;
        }

    </style>
    <title>Satusks.id</title>
</head>
<body id="home">
    <main>
        <!-- scorecard -->
        <section class="post scorecard">
            <h1>
                Scorecard memilih jurusan kuliah yang tepat, Navigating Your Future
                Workshop Desember 2023
            </h1>
            <!-- <p class="meta">
          <i class="fas fa-user"></i> Posted by <strong> Jane Doe</strong> | 19
          Desember 2023
        </p> -->
            <p>
                Halo, terima kasih telah menaruh minat untuk mengikuti Workshop
                Navigating Your Future, Workshop untuk menentukan jurusan dan kampus.
                Berikut merupakan score card untuk menilai "Seberapa siap kamu untuk
                menentukan jurusan dan kampus yang akan dituju". Terdapat 23
                pertanyaan pilihan ganda (Ya/Tidak) yang terbagi ke dalam 5 (lima)
                aspek yang akan kamu isi di scorecard ini. Aspek tersebut yaitu:
            </p>
            <div class="list">
                <ul class="list-show">
                    <li>
                        <p>Aspek minat dan bakat</p>
                    </li>
                    <li>
                        <p>Aspek akademik</p>
                    </li>
                    <li>
                        <p>Aspek non-akademik</p>
                    </li>
                    <li>
                        <p>Aspek prospek masa depan</p>
                    </li>
                    <li>
                        <p>Aspek orang tua</p>
                    </li>
                </ul>
            </div>
            <p>
                Berdasarkan pengalaman mendampingi calon mahasiswa,
                pertanyaan-pertanyaan ini merupakan pertanyaan yang penting untuk
                dijawab saat kamu menentukan jurusan dan kampus saat nanti kuliah.
            </p>
            <p>
                Sebelumnya, kamu diminta untuk mengisi data diri agar hasil score card
                dapat lebih relevan. Setelah score card ini diisi, kamu akan
                mendapatkan secara langsung hasil score card ini melalui email. Skor
                maksimal adalah 23/23 yang memberikan indikasi bahwa kamu cukup
                memiliki pengetahuan mengenai jurusan/kampus yang hendak dituju.
            </p>
            <p>
                Selain itu, kamu akan mendapatkan tambahan uraian analisa dari hasil
                score card ini melalui WA/email. Setelah itu instruksi pembayaran dan
                workshop akan kamu peroleh.
            </p>
            <p>Terima kasih</p>
            <p>Pak Chris (081288985786), jika ada pertanyaan silahkan WA</p>
        </section>

        <section id="contact" class="contact flex-columns">
            <div class="column">
                <div class="column-2">
                    <img src="data:image/png;base64,{{ base64_encode(file_get_contents($chart))}}" alt="" />
                </div>
            </div>
        </section>
    </main>
    <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.canvasjs.com/jquery.canvasjs.min.js"></script>
    <script>
        const optResults = {
            {
                json_encode($results)
            }
        }

        window.onload = function() {
            const chartScore = document.getElementById('chartContainer')

            chartScore.style.height = '300px'
            chartScore.style.width = '100%'
            console.log(optResults)
            var options = {
                title: {
                    text: 'Scorecard Results'
                , }
                , data: [{
                    type: 'pie'
                    , startAngle: 45
                    , showInLegend: 'true'
                    , legendText: '{label}'
                    , indexLabel: '{label} ({y})'
                    , yValueFormatString: '#,##0.#' % ''
                    , dataPoints: [{
                            label: 'Minat & Bakat'
                            , y: optResults[0]
                        }
                        , {
                            label: 'Akademis'
                            , y: optResults[1]
                        }
                    , ]
                , }, ]
            , }
            //return options
            $('#chartContainer').CanvasJSChart(options)
        }

    </script>
</body>
</html>
