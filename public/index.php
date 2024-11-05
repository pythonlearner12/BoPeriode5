<?php

require_once "server/database.php";
$conn = database_connect();
$query = $conn->prepare('SELECT * FROM events');
$query->execute();
$result = $query->get_result();
$query->close();



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>MBO vereniging</title>
</head>


<body>
    <header class="header">
        <nav class="header__nav">
            <img class="header__nav__logo" src="img/logo.svg" alt="">
            <ul class="header__nav__list">
                <li class="header__nav__list__item"><a href="#event_section">Evenementen</a></li>
                <li class="header__nav__list__item"><a href="">Sponsoren</a></li>
                <li class="header__nav__list__item"><a href="">Ons verhaal</a></li>
                <li class="header__nav__list__item"><a href="">Niewsbrief</a></li>
                <li class="header__nav__list__item"><a href="">inschrijven</a></li>
            </ul>

            <div class="header__nav__hamburger">
                <input class="header__nav__hamburger__check" type="checkbox">
                <div class="header__nav__hamburger__lines"></div>
                <div class="header__nav__hamburger__lines"></div>
                <div class="header__nav__hamburger__lines"></div>
            </div>
        </nav>
    </header>

    <main class="main">
        <figure class="hero">
            <div class="hero__text">
                <h4>MBO Student Association of Amsterdam</h4>
                <figcaption id="heroDiscription">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi maiores optio, error ratione exercitationem alias fugit reprehenderit?
                </figcaption>
            </div>
            <img id="heroImg" alt="hero image" src="img/hero_img2.png">
            <img id="heroImgPhone" alt="hero image" src="img/hero_img_phone.png">
        </figure>

        <section id="event_section" class="main__events">
            <h3>Upcoming Events</h3>
            <ul class="main__events__list">

                <?php while ($row = $result->fetch_assoc()): ?>
                    <li class="main__events__list__item">
                        <img class="main__events__list__item__img" src="<?php echo $row['image'] ?>" alt="">
                        <h4><?php echo $row['name'] ?></h4>
                        <p><?php echo $row['description'] ?></p>
                    </li>
                <?php endwhile ?>
            </ul>

        </section>

        <section class="main__association">

            <h4 class="main__association__caption">join our Association</h4>

            <p class="main__association__desc">Delivers new about events every week to keep you up to speed</p>

            <div class="main__association__emailconter">
                <input class="main__association__emailconter__email" type="email" placeholder="Enter email here">
                <button class="main__association__emailconter__button" type="submit">subscribe</button>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="footer__container">
            <h4>Address</h4>
            <p>
                your address goes here
            </p>
        </div>

        <div class="footer__container">
            <h4>About Us</h4>
            <ul>
                <li><a href="test">Our Story</a></li>
                <li><a href="test">Jobs</a></li>
                <li><a href="test">Contact Us</a></li>
                <li><a href="test">FAQ</a></li>
            </ul>
        </div>
        <div class="footer__container">
            <h4>Licensing</h4>
            <ul>
                <li><a href="test">T’s and C’s (visitor terms)</a></li>
                <li><a href="test">Cookie statement</a></li>
                <li><a href="test">Privacy policy</a></li>
                <li><a href="test">Disclaimer</a></li>
            </ul>
        </div>
        <div class="footer__container">
            <h3>Connect With Us</h3>
            <a href="">
                <svg class="footer__img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z">
                    </path>
                    <circle cx="16.806" cy="7.207" r="1.078"></circle>
                    <path
                        d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011z">
                    </path>
                </svg>
            </a>
            <a href="">
                <svg class="footer__img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z">
                    </path>
                </svg>
            </a>
            <a href="">
                <svg class="footer__img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z">
                    </path>
                </svg>
            </a>
            <a href="">
                <svg class="footer__img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M21.593 7.203a2.506 2.506 0 0 0-1.762-1.766C18.265 5.007 12 5 12 5s-6.264-.007-7.831.404a2.56 2.56 0 0 0-1.766 1.778c-.413 1.566-.417 4.814-.417 4.814s-.004 3.264.406 4.814c.23.857.905 1.534 1.763 1.765 1.582.43 7.83.437 7.83.437s6.265.007 7.831-.403a2.515 2.515 0 0 0 1.767-1.763c.414-1.565.417-4.812.417-4.812s.02-3.265-.407-4.831zM9.996 15.005l.005-6 5.207 3.005-5.212 2.995z">
                    </path>
                </svg>
            </a>
        </div>
    </footer>
</body>

</html>