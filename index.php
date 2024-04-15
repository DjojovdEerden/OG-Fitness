
<!DOCTYPE html>
<!-- rest of your HTML code -->

<html lang="en">   

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!--=============== REMIXICON ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css">

    <title>OG Fitness</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="/index.php" class="nav__logo">
                <img src="/assets/img/logo-nav.png" alt="logo"> OG FITNESS
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="#program" class="nav__link">Program</a>
                    </li>
                    <li class="nav__item">
                        <a href="#choose" class="nav__link">Choose Us</a>
                    </li>
                    <li class="nav__item">
                        <a href="#pricing" class="nav__link">Bodybuilders</a>
                    </li>

                    



                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>

            <!-- Toggle button -->
            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line"></i>
            </div>
        </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            <div class="home__container container grid">
                <div class="home__data">
                    <h2 class="home__subtitle">HERE ARE</h2>
                    <h1 class="home__title">OUR STARS</h1>
                    <p class="home__description">
                        Here, we guide you in sculpting and perfecting your physique to become the epitome of
                        bodybuilding excellence, allowing you to embrace life to its fullest potential.
                    </p>
                    <a href="#pricing" class="button button__flex">
                        Get Started <i class="ri-arrow-right-line"></i>
                    </a>
                </div>

                <div class="home__images">
                    <img src="assets/img/main.png" alt="home image" class="home__img">

                    <div class="home__triangle home__triangle-3"></div>
                    <div class="home__triangle home__triangle-2"></div>
                    <div class="home__triangle home__triangle-1"></div>
                </div>
            </div>
        </section>


        <!--==================== PROGRAM ====================-->
        <section class="program section" id="program">
            <div class="container">
                <div class="section__data">
                    <h2 class="section__subtitle">Our Program</h2>
                    <div class="section__titles">
                        <h1 class="section__title-border">BUILD YOUR</h1>
                        <h1 class="section__title">BEST BODY</h1>
                    </div>
                </div>

                <div class="program__container grid">
                    <article class="program__card">
                        <div class="program__shape">
                            <img src="assets/img/program1.png" alt="program image" class="program__img">
                        </div>

                        <h3 class="program__title">Flex Muscle</h3>

                        <p class="program__description">
                            Creating tension that's temporarily making the muscle
                            fibers smaller or contracted.
                        </p>

                        <a href="#" class="program__button">
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </article>

                    <article class="program__card">
                        <div class="program__shape">
                            <img src="assets/img/program2.png" alt="program image" class="program__img">
                        </div>

                        <h3 class="program__title">Cardio Exercise</h3>

                        <p class="program__description">
                            Exercise your heart rate up and keeps it
                            up for a prolonged period of time.
                        </p>

                        <a href="#" class="program__button">
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </article>

                    <article class="program__card">
                        <div class="program__shape">
                            <img src="assets/img/program3.png" alt="program image" class="program__img">
                        </div>

                        <h3 class="program__title">Basic Yoga</h3>

                        <p class="program__description">
                            Diaphragmatic this is the most common breathing
                            technique you'll find in yoga.
                        </p>

                        <a href="#" class="program__button">
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </article>

                    <article class="program__card">
                        <div class="program__shape">
                            <img src="assets/img/program4.png" alt="program image" class="program__img">
                        </div>

                        <h3 class="program__title">Weight Lifting</h3>

                        <p class="program__description">
                            Attempts a maximum weight single lift of a
                            barbell loaded with weight plates.
                        </p>

                        <a href="#" class="program__button">
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </article>
                </div>
            </div>
        </section>

        <!--==================== CHOOSE US ====================-->
        <section class="choose section" id="choose">
            <div class="choose__overflow">
                <div class="choose__container container grid">
                    <div class="choose__content">
                        <div class="section__data">
                            <h2 class="section__subtitle">Best Reason</h2>
                            <div class="section__titles">
                                <h1 class="section__title-border">WHY</h1>
                                <h1 class="section__title">CHOOSE US ?</h1>
                            </div>
                        </div>

                        <p class="choose__description">
                            Choose your favorite class and start now. Remember the
                            only bad workout is the one you didn't do.
                        </p>

                        <div class="choose__data">
                            <div class="choose__group">
                                <h3 class="choose__number">200+</h3>
                                <p class="choose__subtitle">Total Members</p>
                            </div>
                            <div class="choose__group">
                                <h3 class="choose__number">50+</h3>
                                <p class="choose__subtitle">Best trainers</p>
                            </div>
                            <div class="choose__group">
                                <h3 class="choose__number">25+</h3>
                                <p class="choose__subtitle">Programs</p>
                            </div>
                            <div class="choose__group">
                                <h3 class="choose__number">100+</h3>
                                <p class="choose__subtitle">Awards</p>
                            </div>
                        </div>
                    </div>

                    <div class="choose__images">
                        <img src="assets/img/anwar.png" alt="choose image" class="choose__img">

                        <div class="choose__triangle choose__triangle-1"></div>
                        <div class="choose__triangle choose__triangle-2"></div>
                        <div class="choose__triangle choose__triangle-3"></div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== PRICING ====================-->
        <section class="pricing section" id="pricing">
            <div class="container">
                <div class="section__data">
                    <h2 class="section__subtitle">Our Bodybuilders</h2>
                    <div class="section__titles">
                        <h1 class="section__title-border">THEIR</h1>
                        <h1 class="section__title">SPECIAL DIET</h1>
                    </div>
                </div>

                <div class="pricing__container grid">
                    <article class="pricing__card">
                        <header class="pricing__header">
                            <div class="pricing__shape">
                                <img src="assets/img/pricing1.png" alt="pricing image" class="pricing__img">
                            </div>
                            <h1 class="pricing__title">Ronnie's Plan</h1>
                            <h2 class="pricing__number">🦍</h2>
                        </header>

                        <ul class="pricing__list">
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> 5 Days In A Week
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> Ronnie's special diet
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> 01 Bottle of Protein
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> Access to Videos
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> Muscle Stretching
                            </li>
                        </ul>

                        <a href="html/ronnie.php" class="button button__flex pricing__button">
                            Go To <i class="ri-arrow-right-line"></i>
                        </a>
                    </article>

                    <article class="pricing__card pricing__card-active">
                        <header class="pricing__header">
                            <div class="pricing__shape">
                                <img src="assets/img/pricing2.png" alt="pricing image" class="pricing__img">
                            </div>
                            <h1 class="pricing__title">Eddie's Plan</h1>
                            <h2 class="pricing__number">💪🏼</h2>
                        </header>

                        <ul class="pricing__list">
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> 5 Days In A Week
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> Eddie's Special Diet
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> 01 Bottle of Protein
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> Access to Videos
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> Muscle Stretching
                            </li>
                        </ul>

                        <a href="html/eddie.php" class="button button__flex pricing__button">
                            Go To <i class="ri-arrow-right-line"></i>
                        </a>
                    </article>

                    <article class="pricing__card">
                        <header class="pricing__header">
                            <div class="pricing__shape">
                                <img src="assets/img/pricing3.png" alt="pricing image" class="pricing__img">
                            </div>
                            <h1 class="pricing__title">Arnold's Plan</h1>
                            <h2 class="pricing__number">🏋️‍♂️</h2>
                        </header>

                        <ul class="pricing__list">
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> 5 Days In A Week
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> Arnold's Special Diet
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> 01 Bottle of Protein
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> Access to Videos
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> Muscle Stretching
                            </li>
                        </ul>

                        <a href="html/arnold.php" class="button button__flex pricing__button">
                            Go To <i class="ri-arrow-right-line"></i>
                        </a>
                    </article>
                </div>
            </div>
        </section>

        <!--==================== CALCULATE ====================-->
        <section class="calculate section">
            <div class="calculate__container container grid">
                <div class="calculate__content">
                    <div class="section__titles">
                        <h1 class="section__title-border">CALCULATE</h1>
                        <h1 class="section__title">YOUR BMI</h1>
                    </div>

                    <p class="calculate__description">
                        The body mass index (BMI) calculator calculates
                        body mass index from your weight and height.
                    </p>

                    <form action="" class="calculate__form" id="calculate-form">
                        <div class="calculate__box">
                            <input type="number" placeholder="Height" class="calculate__input" id="calculate-cm">
                            <label for="" class="calculate__label">cm</label>
                        </div>
                        <div class="calculate__box">
                            <input type="number" placeholder="Weight" class="calculate__input" id="calculate-kg">
                            <label for="" class="calculate__label">kg</label>
                        </div>

                        <button type="submit" class="button button__flex">
                            Calculate Now <i class="ri-arrow-right-line"></i>
                        </button>
                    </form>

                    <p class="calculate__message" id="calculate-message"></p>
                </div>
                <img src="assets/img/body.png" alt="calculate image" class="calculate__img">
            </div>
        </section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer section" id="footer">
        <div class="footer__container container grid">
            <div>
                <a href="#" class="footer__logo">
                    <img src="assets/img/logo-nav.png" alt="logo"> OG FITNESS
                </a>
                <p class="footer__description">
                    Subscribe for company <br> updates below.
                </p>

                <form action="" class="footer__form" id="contact-form">
                    <input type="email" name="user_email" placeholder="Your Email" class="footer__input"
                        id="contact-user">
                    <button type="submit" class="button">
                        Subscribe
                    </button>
                </form>

                <p class="footer__message" id="contact-message"></p>
            </div>

            <div class="footer__content">
                <div>
                    <h3 class="footer__title">
                        SERVICES
                    </h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">Flex Muscle</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Cardio Exercise</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Basic Yoga</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Weight Lifting</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer__title">
                        BODYBUILDERS
                    </h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#pricing" class="footer__link">Ronnie</a>
                        </li>
                        <li>
                            <a href="#pricing" class="footer__link">Eddie</a>
                        </li>
                        <li>
                            <a href="#pricing" class="footer__link">Arnold</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer__title">
                        COMPANY
                    </h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">About Us</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Careers</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Customers</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Partners</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="footer__group">
                <ul class="footer__social">
                    <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                        <i class="ri-facebook-circle-fill"></i>
                    </a>
                    <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                        <i class="ri-twitter-fill"></i>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                        <i class="ri-instagram-line"></i>
                    </a>
                </ul>

                <span class="footer__copy">
                    &#169; Copyright OG Fitness. All rights reserved
                </span>
            </div>
        </div>
    </footer>


    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line"></i>
    </a>

    <!--=============== SCROLLREVEAL ===============-->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!--=============== EMAIL JS ===============-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
</body>

</html>