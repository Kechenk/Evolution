<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVOLUTION 2025</title>
    <link rel="stylesheet" href="style_lama.css">
    <script src="https://kit.fontawesome.com/dd0cf0a7f4.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div class="navbar">
            <div class="logo-text">
                <a href="index.html" class="logo-link">
                    <img src="Assets\logo evolution 2.svg" alt="Icon 4">
                    <p class="top">
                        <span class="evolution-text">EVOLUTION</span> <br>
                        <span class="year-text">2025</span>
                    </p>
                </a>
            </div>
            <nav>
                <ul>
                    <li><a href="About\About.html">Tentang Kami</a></li>
                    <li><a href="#sub-event">Event</a></li>
                    <li><a href="/daftar" class="register-btn">Register</a></li>
                    <li><a href="/masuk" class="login-btn">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Navbar Responsive (Tablet & Mobile) -->
    <div class="navbar-responsive">
        <div class="logo-text">
            <a href="index.html" class="logo-link">
                <img src="Assets\logo evolution 2.svg" alt="Icon 4">
                <p class="top">
                    <span class="evolution-text">EVOLUTION</span> <br>
                    <span class="year-text">2025</span>
                </p>
            </a>
        </div>

        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </div>

    <div class="menu-responsive">
        <nav>
            <ul>
                <li><a href="About\About.html">Tentang Kami</a></li>
                <li><a href="#sub-event">Event</a></li>
                <li><a href="/daftar" class="register-btn" style="margin: 0%;">Register</a></li>
                <li><a href="/masuk" class="login-btn" style="margin: 0%;">Login</a></li>
            </ul>
        </nav>
    </div>
    <!-- Navbar Responsive (Tablet & Mobile) -->

    <section class="hero hero-background" id="hero">
        <img src="Assets\Astronaut 1.png" alt="Astronaut Image" class="astronaut-background">
        <div class="hero-content">
            <h1>EVOLUTION
                <br><span>2025</span></br>
            </h1>
            <div class="sub-event-icons">
                <img src="Assets\logo evolution 2.svg" alt="Icon 1" class="icon1">
                <img src="Assets\logo electra 2.svg" alt="Icon 2">
                <img src="Assets\logo baronas 2.svg" alt="Icon 3">
                <img src="Assets\logo evolve 2.svg" alt="Icon 4">
            </div>
        </div>
        <div class="scroll-down">
            <img src="Arrow Button.svg" alt="Scroll Down" id="scrollToAbout">
        </div>
    </section>

    <section class="about" id="about">
        <h2>ABOUT <span>EVOLUTION</span></h2>
        <p>Evolution (Electrical Event for Technology and Competition) merupakan suatu badan yang menaungi 3 sub-event,
            yaitu Electra (Electrical Competition Tour & Rally), Baronas (Lomba Robot Nasional), dan Stellar Mind Talks.
        </p>
        <button class="learn-more-btn">Lebih Lanjut ></button>
    </section>

    <section class="documentation">
        <button class="last-year-doc-btn">DOKUM TAHUN LALU</button>
    </section>

    <section class="sub-events" id="sub-event">
        <section class="sub-events-title">
            <h2>
                <span class="our">Our</span>
                <span class="sub">Sub</span>
                <span class="events">Events</span>
            </h2>
        </section>
        <div class="sub-event-card">
            <div class="sub-event-content">
                <img src="Assets\logo electra 2.svg" alt="Electra Icon" class="sub-event-icon">
                <div>
                    <h3>Electra</h3>
                    <p>ELECTRA (Electrical Competition Tour & Rally) adalah kompetisi tahunan yang diselenggarakan oleh
                        Departemen Teknik Elektro ITS.</p>
                </div>
            </div>
            <a href="ELECTRA\electra.html" class="arrow-btn">></a>
        </div>
        <div class="sub-event-card">
            <div class="sub-event-content">
                <img src="Assets\logo baronas 2.svg" alt="Baronas Icon" class="sub-event-icon">
                <div>
                    <h3>Baronas</h3>
                    <p>Baronas adalah lomba robot nasional serta kompetisi paper yang diselenggarakan oleh Departemen
                        Teknik Elektro ITS.</p>
                </div>
            </div>
            <a href="BARONAS\baronas.html" class="arrow-btn">></a>
        </div>
        <div class="sub-event-card">
            <div class="sub-event-content">
                <img src="Assets\logo evolve 2.svg" alt="Evolve Icon" class="sub-event-icon">
                <div>
                    <h3>Evolve</h3>
                    <p>Evolution (Electrical Event for Technology and Competition) merupakan suatu badan yang menaungi 3
                        sub-event.</p>
                </div>
            </div>
            <a href="EVOLVE\evolve.html" class="arrow-btn">></a>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-logo">
                <img src="Assets\logo evolution 2.svg" alt="Evolution Logo" class="footer-logo-img">
                <h2>EVOLUTION <span>2025</span></h2>
            </div>

            <div class="footer-links">
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="Login Page\index.html">Login</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>Sub-Event</h3>
                    <ul>
                        <li><a href="ELECTRA\electra.html" class="electra">Electra</a></li>
                        <li><a href="BARONAS\baronas.html" class="baronas">Baronas</a></li>
                        <li><a href="EVOLVE\evolve.html" class="evolve">Evolve</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
    <div id="container3D"></div>
    <script type="module" src="app.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const burger = document.querySelector('.burger');
            const menu = document.querySelector('.menu-responsive');

            burger.addEventListener('click', function() {
                menu.classList.toggle('active');
                burger.classList.toggle('active');
            });

            document.addEventListener('click', function(event) {
                if (!menu.contains(event.target) && !burger.contains(event.target)) {
                    menu.classList.remove('active');
                    burger.classList.remove('active');
                }
            });

            const menuLinks = document.querySelectorAll('.menu-responsive a');
            menuLinks.forEach(link => {
                link.addEventListener('click', () => {
                    menu.classList.remove('active');
                    burger.classList.remove('active');
                });
            });
        });
    </script>

</body>

</html>
