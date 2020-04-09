<?php
require __DIR__ . '/app/app.php';
?>

<!DOCTYPE html>
<html lang="lt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="decor" content="decor">
    <title>Deco</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/f139808fcb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/normalize.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="css/burger.css" rel="stylesheet">
</head>

<body>
    <header>
        <div class="header-background">
            <div class="burger">
                <span></span>
            </div>
            <div class="overlay"></div>
            <div class="header-container header-flex">
                <div class="logo">
                    <a href="index.php"><img src="images/logo_mini.png" alt="logo mini"></a>
                </div>
                <nav class="main-nav">
                    <ul class="main">
                        <li><a href="#">Pradinis</a></li>
                        <li><a href="#">Filosofija</a></li>
                        <li><a href="#">Paslaugos</a></li>
                        <li><a href="#">Darbai</a></li>
                        <li><a href="#">Stiliai</a></li>
                        <li><a href="#">Teirautis</a></li>
                    </ul>
                </nav>
                <div class="info">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>

                </div>
            </div>

            <div class="banner-container">
                <div class="small-banner-container">
                    <div class="logo">
                        <h1>INTERJERO DIZAINAS</h1>
                        <h2>Kiekvienas gali turėti savo svajonių namus.</h2>
                    </div>
                    <div id="mygtukas">
                        <button class="btn" onClick="document.getElementById('paslaugos').scrollIntoView();">MŪSŲ PASLAUGOS <img src="images/icon-arrow_03.png"></button>
                    </div>
                    <img id="scroll" src="images/scroll.png" alt="zemyn">
                    <p id="vertical">SLINKTI ŽEMYN</p>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="content-one">
            <div class="container flex-container">
                <div class="content-column flex-container">
                    <h2>Apie mus</h2>
                    <p>DECO STUDIO yra interjero dizaino studija paverčianti standartines erdves nestandartiniais
                        sprendimais. Studija įsikūrusi Vilniuje ir dirba visos Lietuvos mastu. Mes padedame savo
                        sprendimais Jūsų erdvę paversti namais, kurie atspindi Jus ir Jūsų gyvenimo būda.</p>
                    <a href="#">Skaityti daugiau <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="content-image">
                    <img src="images/image_3_03-compressor.jpg" alt="Wooden table">
                </div>
            </div>
        </section>
        <section class="content-two">
            <div class="container reverse">
                <div class="content-column-reverse flex-container" id="paslaugos">
                    <h2>MŪSŲ PASLAUGOS</h2>
                    <p>Mes siūlome pilną interjero dizainą.
                        Projektų valdymą nuo funkcinio zonavimo
                        ir išplanavimo iki medžiagų,
                        baldų ir dekoravimo elementų parinkimo.</p>
                    <a href="#">Skaityti daugiau <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="content-image">
                    <img src="images/image_4_11.jpg" alt="Wooden table">
                </div>
            </div>
        </section>


        <section class="gallery">
            <div class="content-column-gallery flex-container">
                <h2>MŪSŲ DARBAI</h2>
                <!--<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum expedita hic modi enim necessitatibus
                inventore ducimus quam architecto, incidunt officia? Excepturi ut sed nobis autem, omnis inventore
                deserunt dignissimos nisi.</p>-->
            </div>
            <div class="container-gallery">
                <div class="col">
                    <a data-fancybox="gallery1" href="images/design_big_1.jpg">
                        <img src="images/design_small_1.jpg" alt="portfolio pvz">
                    </a>
                </div>
                <div class="col">
                    <a data-fancybox="gallery1" href="images/design_big_2.jpg">
                        <img src="images/design_small_2.jpg" alt="portfolio pvz">
                    </a>
                </div>
                <div class="col">
                    <a data-fancybox="gallery1" href="images/design_big_3.jpg">
                        <img src="images/design_small_3.jpg" alt="portfolio pvz">
                    </a>
                </div>

            </div>
        </section>
        <div class="contact-background">
            <section class="contact">
                <div class="container">
                    <div class="content-column-gallery flex-container">
                        <h2>Susisiekite su mumis</h2>
                        <p>Mums patinka padėti mūsų klientams kurti gražius interjerus.
                            Su didele meile dirbame tiek su didelėmis, tiek su mažomis erdvėmis. Padiskutuokime kaip
                            mes galėtumėme Jums padėti.</p>
                    </div>
                    <div class="section-content">
                        <form class="contact-form" method="POST">
                            <div class="input-fields">
                                <input type="text" name="name" placeholder="Vardas*" required tabindex="1">
                                <input type="email" name="email" placeholder="El. pastas*" required tabindex="2">
                                <input type="phone" name="phone" placeholder="Telefono numeris*" required tabindex="3">
                            </div>
                            <textarea name="message" rows="7" placeholder="Jusu zinute*" required tabindex="4"></textarea>
                            <input class="btn btn-form" type="submit" name="submit" value="Pateikti" tabindex="5">
                        </form>
                    </div>
                </div>
            </section>
        </div>

        <section class="about-us">
            <div class="container reverse">
                <div class="content-column-reverse flex-container">
                    <h2>MŪSŲ FILOSOFIJA</h2>
                    <p>Mūsų filosofija yra paprasta. Mes norime leisti Jums pajausti kokią
                        įtaką turi Jūsų interjeras tam kaip Jūs jaučiatės, elgaitės ir kaip
                        gyvenate.</p>
                    <a href="#">Skaityti daugiau <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="content-image">
                    <img src="images/image_6_21.jpg" alt="apie mus">
                </div>
            </div>
        </section>
    </main>

    <footer class="footer-background">
        <div class="footer-container">
            <div class="copyright">
                &copy; <?php echo date('Y'); ?>
            </div>
            <div class="logo">
                DECO
            </div>
            <div class="info">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>

            </div>
        </div>
    </footer>

    <script src="js/jquery.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>