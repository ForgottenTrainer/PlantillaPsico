<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psicologia y apoyo</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
</head>
<body>
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                psico <i class='bx bxs-heart' ></i>
            </a>
            <div class="nav__menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#inicio" class="nav__link active-link">
                            <i class='bx bx-home-alt-2' ></i>
                            <span>Inicio</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#about" class="nav__link">
                            <i class='bx bxs-heart' ></i>
                            <span>Acerca de nosotros</span>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#value" class="nav__link">
                            <i class='bx bxs-award' ></i>
                            <span>Logros</span>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#contact" class="nav__link">
                            <i class='bx bxs-contact' ></i>
                            <span>Contactanos</span>
                        </a>
                    </li>
                </ul>
            </div>

            <i class='bx bx-moon change-theme' id="theme-button"></i>

            <a href="#" class="button nav__button">
                Visita nuestro Blog
            </a>
        </nav>
    </header>

    <main class="main">
        <section class="home section" id="inicio">
            <div class="home__container container grid">
                <div class="home__data">
                    <h1 class="home__title">
                        Aprende <br> Sana <br> Perdona
                    </h1>
                    <p class="home__description">
                        Encuentra el mejor sitio para poder sanar y progresar en tu vida.
                    </p>
                    <form action="" class="home__search" method="post">
                        <i class='bx bxs-map'></i>
                        <input type="search" class="home__search-input" placeholder="Buscar locacion"/>
                        <button class="button">Enviar</button>
                    </form>
                    <div class="home__value">
                        <div class="">
                            <h1 class="home__value-number">
                                9k <span>+</span>
                            </h1>
                            <span class="home__value-description">Premium <br> product</span>
                        </div>
                        <div class="">
                            <h1 class="home__value-number">
                                2k <span>+</span>
                            </h1>
                            <span class="home__value-description">Premium <br> product</span>
                        </div>
                        <div class="">
                            <h1 class="home__value-number">
                                4k <span>+</span>
                            </h1>
                            <span class="home__value-description">Premium <br> product</span>
                        </div>
                    </div>
                </div>
                <div class="home__images">
                    <div class="home__orbe">
                        <div class="home__img">
                            <img src="./images/kari-shea-MrXipNsTSbA-unsplash.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="logo section">
            <div class="logos__container container grid">
                <div class="logo__img">
                    <img src="./images/logo1.png" alt="">
                </div>
                <div class="logo__img">
                    <img src="./images/logo2.png" alt="">
                </div>
                <div class="logo__img">
                    <img src="./images/logo3.png" alt="">
                </div>
                <div class="logo__img">
                    <img src="./images/logo4.png" alt="">
                </div>
            </div>
        </section>
        <section class="popular section" id="about">
            <div class="container">
                <span class="section__subtitle">Best choice</span>
                <h2 class="section__title">
                    Popular Residence <span>.</span>
                </h2>
                <div class="popular__container swiper">
                    <div class="swiper-wrapper">
                        <article class="popular__card swiper-slide">
                            <img src="./images/popular1.jpg" alt="" class="popular__img">
                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>$</span>66,999
                                </h2>
                                <h3 class="popular___title">
                                    Lorem
                                </h3>
                                <p class="popular__description">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae, blanditiis harum saepe quis obcaecati rerum cum, fuga, vel ratione fugit ducimus molestiae laboriosam sapiente incidunt ad dignissimos mollitia sunt. Dolore?
                                    Autem repellat velit quia, pariatur veniam amet libero similique itaque. Exercitationem, quo. Aliquam nam adipisci, labore rerum fugit libero dolore accusamus voluptas sapiente, illo unde suscipit? Fugiat fuga provident omnis.
                                </p>
                            </div>
                        </article>
                        <article class="popular__card swiper-slide">
                            <img src="./images/popular2.jpg" alt="" class="popular__img">
                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>$</span>66,999
                                </h2>
                                <h3 class="popular___title">
                                    Lorem
                                </h3>
                                <p class="popular__description">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae, blanditiis harum saepe quis obcaecati rerum cum, fuga, vel ratione fugit ducimus molestiae laboriosam sapiente incidunt ad dignissimos mollitia sunt. Dolore?
                                    Autem repellat velit quia, pariatur veniam amet libero similique itaque. Exercitationem, quo. Aliquam nam adipisci, labore rerum fugit libero dolore accusamus voluptas sapiente, illo unde suscipit? Fugiat fuga provident omnis.
                                </p>
                            </div>
                        </article>
                        <article class="popular__card swiper-slide">
                            <img src="./images/popular3.jpg" alt="" class="popular__img">
                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>$</span>66,999
                                </h2>
                                <h3 class="popular___title">
                                    Lorem
                                </h3>
                                <p class="popular__description">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae, blanditiis harum saepe quis obcaecati rerum cum, fuga, vel ratione fugit ducimus molestiae laboriosam sapiente incidunt ad dignissimos mollitia sunt. Dolore?
                                    Autem repellat velit quia, pariatur veniam amet libero similique itaque. Exercitationem, quo. Aliquam nam adipisci, labore rerum fugit libero dolore accusamus voluptas sapiente, illo unde suscipit? Fugiat fuga provident omnis.
                                </p>
                            </div>
                        </article>
                        <article class="popular__card swiper-slide">
                            <img src="./images/popular4.jpg" alt="" class="popular__img">
                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>$</span>66,999
                                </h2>
                                <h3 class="popular___title">
                                    Lorem
                                </h3>
                                <p class="popular__description">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae, blanditiis harum saepe quis obcaecati rerum cum, fuga, vel ratione fugit ducimus molestiae laboriosam sapiente incidunt ad dignissimos mollitia sunt. Dolore?
                                    Autem repellat velit quia, pariatur veniam amet libero similique itaque. Exercitationem, quo. Aliquam nam adipisci, labore rerum fugit libero dolore accusamus voluptas sapiente, illo unde suscipit? Fugiat fuga provident omnis.
                                </p>
                            </div>
                        </article>
                        <article class="popular__card swiper-slide">
                            <img src="./images/popular5.jpg" alt="" class="popular__img">
                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>$</span>66,999
                                </h2>
                                <h3 class="popular___title">
                                    Lorem
                                </h3>
                                <p class="popular__description">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae, blanditiis harum saepe quis obcaecati rerum cum, fuga, vel ratione fugit ducimus molestiae laboriosam sapiente incidunt ad dignissimos mollitia sunt. Dolore?
                                    Autem repellat velit quia, pariatur veniam amet libero similique itaque. Exercitationem, quo. Aliquam nam adipisci, labore rerum fugit libero dolore accusamus voluptas sapiente, illo unde suscipit? Fugiat fuga provident omnis.
                                </p>
                            </div>
                        </article>
                    </div>
                    <div class="swiper-button-next">
                        <i class='bx bx-chevron-right'></i>
                    </div>
                    <div class="swiper-button-prev">
                        <i class='bx bx-chevron-left'></i>
                    </div>
                </div>
            </div>
        </section>
        <section class="value section" id="value">
            <div class="value__container container grid">
                <div class="value__images">
                    <div class="value__orbe"></div>

                    <div class="value__img">
                        <img src="./images/rian-ramirez-rm7rZYdl3rY-unsplash.jpg" alt="">
                    </div>
                </div>
                <div class="value__content">
                    <div class="value__data">
                        <span class="section__subtitle">Our value</span>
                        <h2 class="section__title">
                            Value we Give to you <span>.</span>
                        </h2>
                        <p class="value__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe maiores obcaecati reiciendis ratione id inventore incidunt esse officiis error debitis, asperiores et velit cum praesentium, magnam expedita explicabo modi tempora.</p>
                    </div>
                    <div class="value__accordion">
                        <div class="value__accordion-item">
                            <header class="value__accordion-header">
                                <i class='bx bx-shield-x value__accordion-icon'></i>
                                <h3 class="value__accordion-title">
                                    Lorem
                                </h3>
                                <div class="value__accordion-arrow">
                                    <i class='bx bxs-down-arrow' ></i>
                                </div>
                            </header>
                            <div class="value__accordition-content">
                                <p class="value__accordion-description">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit error ratione minima. Optio quo, rem natus illo provident maiores nisi unde consectetur exercitationem praesentium hic quos, ipsum quis cumque. Et?
                                </p>
                            </div>
                        </div>
                        <div class="value__accordion-item">
                            
                            <header class="value__accordion-header">
                                <i class='bx bxs-message-square-x value__accordion-icon'></i>
                                <h3 class="value__accordion-title">
                                    Lorem
                                </h3>
                                <div class="value__accordion-arrow">
                                    <i class='bx bxs-down-arrow' ></i>
                                </div>
                            </header>
                            <div class="value__accordition-content">
                                <p class="value__accordion-description">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit error ratione minima. Optio quo, rem natus illo provident maiores nisi unde consectetur exercitationem praesentium hic quos, ipsum quis cumque. Et?
                                </p>
                            </div>
                        </div>
                        <div class="value__accordion-item">
                            <header class="value__accordion-header">
                                <i class='bx bx-scatter-chart value__accordion-icon'></i>
                                <h3 class="value__accordion-title">
                                    Lorem
                                </h3>
                                <div class="value__accordion-arrow">
                                    <i class='bx bxs-down-arrow' ></i>
                                </div>
                            </header>
                            <div class="value__accordition-content">
                                <p class="value__accordion-description">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit error ratione minima. Optio quo, rem natus illo provident maiores nisi unde consectetur exercitationem praesentium hic quos, ipsum quis cumque. Et?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact section" id="contact">
            <div class="contact__container container grid">
                <div class="contact__images">
                    <div class="contact__orbe"></div>
                    <div class="contact__img">
                        <img src="./images/contact.png" alt="">
                    </div>
                </div>
                <div class="contact__content">
                    <div class="contact__data">
                        <span class="section__subtitle">Contactanos</span>
                        <h2 class="section__title">
                            Es facil de contactarnos <span>.</span>
                        </h2>
                        <p class="contact__description">
                            Es tiempo de dar el siguiente paso a una mejor salud mental,
                            consulta nuestro expertos para agendar una cita.
                        </p>
                    </div>
                    <div class="contact__card">
                        <div class="contact__card-box">
                            <i class='bx bx-phone'></i>
                            
                            <div class="contact__card-info">
                                <div class="">
                                    <h3 class="contact_card-title">
                                        Marcar
                                    </h3>
                                    <p class="contact__card-description">
                                        Lorem
                                    </p>
                                </div>
                            </div>
                            <button class="button contact__card-button">
                                Llamar ahora
                            </button>
                        </div>
                        <div class="contact__card-box">
                            <i class='bx bx-chat' ></i>
                            <div class="contact__card-info">
                                <div class="">
                                    <h3 class="contact_card-title">
                                        Chat
                                    </h3>
                                    <p class="contact__card-description">
                                        Lorem
                                    </p>
                                </div>
                            </div>
                            <button class="button contact__card-button">
                                Enviar Mensaje
                            </button>
                        </div>
                        <div class="contact__card-box">
                            <i class='bx bx-video' ></i>
                            <div class="contact__card-info">
                                <div class="">
                                    <h3 class="contact_card-title">
                                        Videollamada
                                    </h3>
                                    <p class="contact__card-description">
                                        Lorem
                                    </p>
                                </div>
                            </div>
                            <button class="button contact__card-button">
                                Mensaje
                            </button>
                        </div>
                        <div class="contact__card-box">
                            <i class='bx bxs-envelope' ></i>
                            <div class="contact__card-info">
                                <div class="">
                                    <h3 class="contact_card-title">
                                        Correo
                                    </h3>
                                    <p class="contact__card-description">
                                        Lorem@lorem.com
                                    </p>
                                </div>
                            </div>
                            <button class="button contact__card-button">
                                Correo
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="subscribe section">
            <div class="subscribe__container container">
                <h1 class="subscribe__title">Inicia con psico </h1>
                <p class="subscribe__description">Lorem ipsum dolor sit amet consectetu. fjk kskdjasdk  lajskdlasjdk alksjdlkasjd alskdjaksdsa laksjda</p>
                <a href="#" class="button subscribe__button">Iniciar</a>    
            </div>        
        </section>
    </main>
    <footer class="footer section">
        <div class="footer__container container grid">
            <div class="">
                <a href="#" class="footer__logo">
                    Psico <i class='bx bxs-home-alt-2'></i>
                </a>
                <p class="footer__description">
                    Our vision is to make all people <br>
                    the best place to live for them.
                </p>
            </div>
            <div class="footer__content">
                <div class="">
                    <h3 class="footer__title">
                        About
                    </h3>
                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">About us</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Features</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">New and blogs</a>
                        </li>
                    </ul>
                </div>
                <div class="">
                    <h3 class="footer__title">
                        Company
                    </h3>
                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">How We Work?</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Capital</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Security</a>
                        </li>
                    </ul>
                </div>
                <div class="">
                    <h3 class="footer__title">
                        Support
                    </h3>
                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">FAQs</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Support center</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="">
                    <h3 class="footer__title">
                        Siguenos
                    </h3>
                    <ul class="footer__social">
                        <a href="#" class="footer__social-link">
                            <i class='bx bxl-facebook-circle' ></i>
                        </a>
                        <a href="#" class="footer__social-link">
                            <i class='bx bxl-instagram' ></i>
                        </a>
                        <a href="#" class="footer__social-link">
                            <i class='bx bxl-twitter' ></i>
                        </a>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer__info container">
            <span class="footer__copy">
                Todos los derechos reservados
            </span>
            <div class="footer__privacy">
                <a href="#">Terminos y condiciones</a>
                <a href="#">Politica de privacidad</a>
            </div>
        </div>
    </footer>

    <a href="#" class="scrollup" id="scroll-up">
        <i class='bx bx-chevron-up-circle'></i>
    </a>

    <style>
        .swiper-button-next::after,
        .swiper-button-prev::after {
            content: '';
        }
        .swiper-button-next,
        .swiper-button-prev{
            top: initial;
            bottom: 0;
            width: initial;
            height: initial;
            background-color: var(--container-color);
            padding: 6px;
            border: 2px solid var(--text-color-light);
            border-radius: .5rem;
            font-size: 1.5rem;
            color: var(--first-color);
        }

        .swiper-button-prev{
            left: calc(50% - 3rem);
        }

        .swiper-button-next {
            right: calc(50% - 3rem);
        }

        .popular__container{
            padding: 1rem 0 5rem;
        }

        .popular__card{
            width: 290px;
            background: var(--container-color);
            padding: .5rem .5rem 1.5rem;
            border-radius: 1rem;
            margin: 0 auto;
            transition: .4s;
        }

        .popular__img{
            border-radius: 1rem;
            margin-bottom: 1rem;
        }

        .popular__data{
            padding: 0 1rem 0 .5rem;
        }

        .popular__price{
            font-size: var(--h2-font-size);
            color: var(--text-color);
            margin-bottom: .25rem;
        }

        .popular__price span {
            color: var(--second-color);
        }

        .popular___title{
            font-size: var(--h3-font-size);
            margin-bottom: .75rem;
        }

        .popular__description{
            font-size: var(--small-font-size);
        }

        .popular__card:hover{
            box-shadow: 0 12px 16px hsla(228, 66%, 45%, .1);
        }

        @media screen and (min-width: 1024px) {
            .popular__container {
                padding-top: 3rem;
            }
            .popular__card{
                width: 320px;
                padding: .75rem .75rem 2rem;
            }

            .popular__data {
                padding: 0 .25rem 0 .75rem;
            }


        }
        
    </style>

    <script src="./js/app.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <script type="module">
        import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.esm.browser.min.js'      
        var swiperPopular = new Swiper(".popular__container", {
            spaceBetween: 32,
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });     
        const sr = ScrollReveal({
            origin: 'top',
            distance: '60px',
            duration: 2500,
            delay: 400,

        })

        sr.reveal(`.home__title, .home__img`, {delay: 300})
        sr.reveal(`.home__description, .footer_info`, {delay: 500}) 
        sr.reveal(`.home__search`, {delay: 600}) 
        sr.reveal(`.home__value`, {delay: 700})
        sr.reveal(`.home__images`, {delay: 800, origin: 'bottom'}) 
        sr.reveal(`.logos__img`, {finterval: 100}) 
        sr.reveal(`.value__images, .contact__content`, {forigin: 'left'})
        sr.reveal (`.value__content, .contact__images`, {forigin: 'right'})
    </script>
</body>
</html>