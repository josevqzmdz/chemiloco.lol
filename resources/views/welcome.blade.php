<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="TemplateMo">

        <title>Chemiloco's web CV</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">

        <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">

        <link href="{{ asset('css/templatemo-first-portfolio-style.css') }}" rel="stylesheet">       

    </head>
    
    <body>

        <section class="preloader">
            <div class="spinner">
                <span class="spinner-rotate"></span>    
            </div>
        </section>

        <nav class="navbar navbar-expand-lg">
            <div class="container">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a href="welcome.blade" class="navbar-brand mx-auto mx-lg-0">Portafolio web de Jose Miguel</a>

                <div class="d-flex align-items-center d-lg-none">
                    <i class="navbar-icon bi-telephone-plus me-3"></i>
                    <a class="custom-btn btn" href="#section_5">
                        ¡Gracias por visitar mi CV web!
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-5">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_1">Español</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2">Ingles</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_3">Francés</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4">Portugues</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_5">Sueco</a>
                        </li>
                    </ul>

                    <div class="d-lg-flex align-items-center d-none ms-auto">
                        <i class="navbar-icon bi-telephone-plus me-3"></i>
                        <a class="custom-btn btn" href="#section_5">
                            
                        </a>
                    </div>
                </div>

            </div>
        </nav>

        <main>

            <section class="hero d-flex justify-content-center align-items-center" id="section_1">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-7 col-12">
                            <div class="hero-text">
                                <div class="hero-title-wrap d-flex align-items-center mb-4">
                                    <img src="{{asset('assets/pitochu.jpg')}}" class="avatar-image avatar-image-large img-fluid" alt="">

                                    <h1 class="hero-title ms-3 mb-0">Mi nombre es José Miguel,</h1>
                                </div>

                                <h2 class="mb-4">y soy un ingeniero en sistemas.</h2>
                                <p class="mb-4"><a class="custom-btn btn custom-link" href="#section_2">Este soy yo</a></p>
                            </div>
                        </div>

                        <div class="col-lg-5 col-12 position-relative">
                            <div class="hero-image-wrap"></div>
                            <img src="{{asset('assets/pitochu.jpg')}}" class="hero-image img-fluid" alt="">
                        </div>

                    </div>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#535da1" fill-opacity="1" d="M0,160L24,160C48,160,96,160,144,138.7C192,117,240,75,288,64C336,53,384,75,432,106.7C480,139,528,181,576,208C624,235,672,245,720,240C768,235,816,213,864,186.7C912,160,960,128,1008,133.3C1056,139,1104,181,1152,202.7C1200,224,1248,224,1296,197.3C1344,171,1392,117,1416,90.7L1440,64L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path></svg>
            </section>


            <section class="about section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <img src="{{asset('assets/pitochu.jpg')}}" class="about-image img-fluid" alt="">
                        </div>

                        <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                            <div class="about-thumb">

                                <div class="section-title-wrap d-flex justify-content-end align-items-center mb-4">
                                    <h2 class="text-white me-4 mb-0">Mi experiencia laboral</h2>

                                    <img src="{{asset('assets/pitochu.jpg')}}" class="avatar-image img-fluid" alt="">
                                </div>

                                <h3 class="pt-2 mb-3">Actualmente estoy trabajando como Auxiliar tecnico de IT en el empaque de aguacates "Zavocado Frutas Finas S.A. De C.V. en Periban de Ramos, Michoacan, Mexico.</h3>

                                <h5> Me dedico a resolver problemas tecnicos tanto a nivel hardware (limpiar impresoras, computadores o incluso servidores) como logicos, tanto para problemas de envio de correo electronico, como reiniciar aplicaciones, e includo en el backend de los servicios utilizados, como compaqi o software privado para etiquetación de productos, etc.

                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3759.754498196526!2d-102.4574277!3d19.5521508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842e41d2a54f131b%3A0x1caae3d6990f66a6!2sZavocado%20Frutas%20Finas%20S.A%20DE%20C.V.!5e0!3m2!1sen!2smx!4v1744950891772!5m2!1sen!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="featured section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <div class="profile-thumb">
                                <div class="profile-title">
                                    <h4 class="mb-0">Información</h4>
                                </div>

                                <div class="profile-body">
                                    <p>
                                        <span class="profile-small-title">Estudios</span> 
                                        <span>Graduado del Instituto Tecnologico Superior de Los Reyes (Los reyes, Michoacan, Mexico)</span>
                                    </p>

                                    <p>
                                        <span class="profile-small-title">Experiencia general en IT</span> 
                                        <span>mas de 3 años trabajando tanto en sitio como remoto</span>
                                    </p>

                                    <p>
                                        <span class="profile-small-title">Idiomas</span> 
                                         <span><a href="tel: 305-240-9671">Español e Ingles nativos. Frances conversacional.</a></span>
                                    </p>

                                    <p>
                                        <span class="profile-small-title">Contacto</span> 
                                        <span><a href="mailto:jose.vqz.mdz@gmail.com">Correo: jose.vqz.mdz@gmail.com</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                            <div class="about-thumb">
                                <div class="row">
                                    <div class="col-lg-6 col-6 featured-border-bottom py-2">
                                        <strong class="featured-numbers">Experiencia de Soporte TI</strong>

                                        <p class="featured-text">1 año trabajando para Infogen Labs Inc, como tecnico soporte IT L1, bilingüe.</p>
                                    </div>

                                    <div class="col-lg-6 col-6 featured-border-start featured-border-bottom ps-5 py-2">
                                        <strong class="featured-numbers">AHHHHH PIIIITOOOOOO</strong>

                                        <p class="featured-text">AAAAAAAAAAA PIIIIIIIIIIIITOOOOOOOOOOOOOOO</p>
                                    </div>

                                    <div class="col-lg-6 col-6 pt-4">
                                        <strong class="featured-numbers">AAAAAAAAAAAA</strong>

                                        <p class="featured-text">PIIIITOOOOOOOOO</p>
                                    </div>

                                    <div class="col-lg-6 col-6 featured-border-start ps-5 pt-4">
                                        <strong class="featured-numbers">AHHHHHHH </strong>

                                        <p class="featured-text">PIIIITOOOOOOO</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="clients section-padding">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-12 col-12">
                            <h3 class="text-center mb-5">AAAAAAAHHHHHHHHH PIIIIIITOOOOOOOO</h3>
                        </div>

                        <div class="col-lg-2 col-4 ms-auto clients-item-height">
                            <img src="{{asset('assets/pitochu.jpg')}}" class="clients-image img-fluid" alt="">
                        </div>

                        <div class="col-lg-2 col-4 clients-item-height">
                            <img src="{{asset('assets/pitochu.jpg')}}" class="clients-image img-fluid" alt="">
                        </div>

                        <div class="col-lg-2 col-4 clients-item-height">
                            <img src="{{asset('assets/pitochu.jpg')}}" class="clients-image img-fluid" alt="">
                        </div>

                        <div class="col-lg-2 col-4 clients-item-height">
                            <img src="{{asset('assets/pitochu.jpg')}}" class="clients-image img-fluid" alt="">
                        </div>

                        <div class="col-lg-2 col-4 me-auto clients-item-height">
                            <img src="{{asset('assets/pitochu.jpg')}}" class="clients-image img-fluid" alt="">
                        </div>

                    </div>
                </div>
            </section>


            <section class="services section-padding" id="section_3">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12 mx-auto">
                            <div class="section-title-wrap d-flex justify-content-center align-items-center mb-5">
                                <img src="{{asset('assets/pitochu.jpg')}}" class="avatar-image img-fluid" alt="">

                                <h2 class="text-white ms-4 mb-0">Services</h2>
                            </div>

                            <div class="row pt-lg-5">
                                <div class="col-lg-6 col-12">
                                    <div class="services-thumb">
                                        <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                            <h3 class="mb-0">AHHHHHHH PIIIIITOOOOOOOO</h3>

                                            <div class="services-price-wrap ms-auto">
                                                <p class="services-price-text mb-0">AHHHHH PIIITOOOOOO</p>
                                                <div class="services-price-overlay"></div>
                                            </div>
                                        </div>

                                        <p>PIIIIIITOOOOOOOOO</p>

                                        <a href="#" class="custom-btn custom-border-btn btn mt-3">PITTTOOOOOOO</a>

                                        <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                            <i class="services-icon bi-globe"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <div class="services-thumb services-thumb-up">
                                        <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                            <h3 class="mb-0">AHHHHHH </h3>

                                            <div class="services-price-wrap ms-auto">
                                                <p class="services-price-text mb-0">PIIIITOOOOOOO</p>
                                                <div class="services-price-overlay"></div>
                                            </div>
                                        </div>
                                            <p> AHHHHHHH PIIIIIITOOOOOOOOOO </p>

                                        <a href="#" class="custom-btn custom-border-btn btn mt-3">AHHHHHHHH PIIIITOOOOOO</a>

                                        <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                            <i class="services-icon bi-lightbulb"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <div class="services-thumb">
                                        <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                            <h3 class="mb-0">Ecommerce</h3>

                                            <div class="services-price-wrap ms-auto">
                                                <p class="services-price-text mb-0">$3,600</p>
                                                <div class="services-price-overlay"></div>
                                            </div>
                                        </div>

                                        <p> AHHHHHH PIIIIIIITOOOOOOOOO </p>
                                        <a href="#" class="custom-btn custom-border-btn btn mt-3">AHHHHH PIIIITOOOOOO</a>

                                        <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                            <i class="services-icon bi-phone"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <div class="services-thumb services-thumb-up">
                                        <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                            <h3 class="mb-0">AHHHH</h3>

                                            <div class="services-price-wrap ms-auto">
                                                <p class="services-price-text mb-0">$pitooo</p>
                                                <div class="services-price-overlay"></div>
                                            </div>
                                        </div>

                                        <p> AAAHHHHHH PIIIIITOOOOOOO </p>

                                        <a href="#" class="custom-btn custom-border-btn btn mt-3">AHHHH PIIITOOOOO</a>

                                        <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                            <i class="services-icon bi-google"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="projects section-padding" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-md-8 col-12 ms-auto">
                            <div class="section-title-wrap d-flex justify-content-center align-items-center mb-4">
                                <img src="{{asset('assets/pitochu.jpg')}}" class="avatar-image img-fluid" alt="">

                                <h2 class="text-white ms-4 mb-0">Projects</h2>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <small class="projects-tag">AHHHHH</small>

                                    <h3 class="projects-title">PIIITOOOOO</h3>
                                </div>

                                <a href="images/projects/nikhil-KO4io-eCAXA-unsplash.jpg" class="popup-image">
                                    <img src="{{asset('assets/pitochu.jpg')}}" class="projects-image img-fluid" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <small class="projects-tag">PIIITOOOO</small>

                                    <h3 class="projects-title">PIIIITOOOOOO</h3>
                                </div>

                                <a href="images/projects/the-5th-IQYR7N67dhM-unsplash.jpg" class="popup-image">
                                    <img src="{{asset('assets/pitochu.jpg')}}" class="projects-image img-fluid" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <small class="projects-tag">PIIIITOOOOO</small>

                                    <h3 class="projects-title">PIIIITOOOOOO</h3>
                                </div>

                                <a href="images/projects/true-agency-9Bjog5FZ-oc-unsplash.jpg" class="popup-image">
                                    <img src="{{asset('assets/pitochu.jpg')}}" class="projects-image img-fluid" alt="">
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="contact section-padding" id="section_5">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-6 col-md-8 col-12">
                                <div class="section-title-wrap d-flex justify-content-center align-items-center mb-5">
                                    <img src="{{asset('assets/pitochu.jpg')}}" class="avatar-image img-fluid" alt="">

                                    <h2 class="text-white ms-4 mb-0">AHHH PIIIITOOOOO</h2>
                                </div>
                            </div>

                            <div class="clearfix"></div>

                            <div class="col-lg-3 col-md-6 col-12 pe-lg-0">
                                <div class="contact-info contact-info-border-start d-flex flex-column">
                                    <strong class="site-footer-title d-block mb-3">ahhhh</strong>

                                    <ul class="footer-menu">
                                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">PITOOO</a></li>

                                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">PIIIITOOOOO</a></li>

                                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">PIIIITOOOOOOO</a></li>

                                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">PIIIITOOOOOO</a></li>
                                    </ul>

                                    <strong class="site-footer-title d-block mt-4 mb-3">AHHHH PIIITOOOO</strong>

                                    <ul class="social-icon">
                                        <li class="social-icon-item"><a href="https://twitter.com/minthu" class="social-icon-link bi-twitter"></a></li>

                                        <li class="social-icon-item"><a href="#" class="social-icon-link bi-instagram"></a></li>

                                        <li class="social-icon-item"><a href="#" class="social-icon-link bi-pinterest"></a></li>

                                        <li class="social-icon-item"><a href="https://www.youtube.com/templatemo" class="social-icon-link bi-youtube"></a></li>
                                    </ul>

                                    <strong class="site-footer-title d-block mt-4 mb-3">AHHHHHHH PIIIITOOOOOO</strong>

                                    <p class="mb-0">AAAAHHHHHH PIIIITOOOOO</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-12 ps-lg-0">
                                <div class="contact-info d-flex flex-column">
                                    <strong class="site-footer-title d-block mb-3">ahhhhhhhh</strong>

                                    <p class="mb-2">
                                        PIIITOOOOOO
                              </p>

                                    <strong class="site-footer-title d-block mt-4 mb-3">ahhhhh</strong>

                                    <p>
                                        <a href="mailto:ahhhhh@pit.o">
                                            AHHHH@PIT.O
                                        </a>
                                    </p>

                                    <strong class="site-footer-title d-block mt-4 mb-3">AAAAAAAAAA</strong>

                                    <p class="mb-0">
                                        <a href="tel: 120-240-9600">
                                            PITOOOOOO
                                        </a>
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                                <form action="#" method="get" class="custom-form contact-form" role="form">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-floating">
                                                <input type="text" name="name" id="name" class="form-control" placeholder="Name" required="">
                                                
                                                <label for="floatingInput">AAAAAAHHHHHH</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12"> 
                                            <div class="form-floating">
                                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required="">
                                                
                                                <label for="floatingInput">AAAAAHHHHHHHHH</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-6">
                                            <div class="form-check form-check-inline">
                                                <input name="website" type="checkbox" class="form-check-input" id="inlineCheckbox1" value="1">

                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <i class="bi-globe form-check-icon"></i>
                                                    <span class="form-check-label-text">Websites</span>
                                                </label>
                                          </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-6">
                                            <div class="form-check form-check-inline">
                                                <input name="branding" type="checkbox" class="form-check-input" id="inlineCheckbox2" value="1">

                                                <label class="form-check-label" for="inlineCheckbox2">
                                                    <i class="bi-lightbulb form-check-icon"></i>
                                                    <span class="form-check-label-text">AAAAAAAHHHHHHH</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-6">
                                            <div class="form-check form-check-inline">
                                                <input name="ecommerce" type="checkbox" class="form-check-input" id="inlineCheckbox3" value="1">

                                                <label class="form-check-label" for="inlineCheckbox3">
                                                    <i class="bi-phone form-check-icon"></i>
                                                    <span class="form-check-label-text">AHHHHHHHHHHHHHHHHHH</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-6">
                                            <div class="form-check form-check-inline me-0">
                                                <input name="seo" type="checkbox" class="form-check-input" id="inlineCheckbox4" value="1">

                                                <label class="form-check-label" for="inlineCheckbox4">
                                                    <i class="bi-google form-check-icon"></i>
                                                    <span class="form-check-label-text">AAAAHHHHH</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control" id="message" name="message" placeholder="Tell me about the project"></textarea>
                                                
                                                <label for="floatingTextarea">AAAAAAAAAAAAAAHHHHHHH</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-12 ms-auto">
                                            <button type="submit" class="form-control">AAAAHHHHHHHH</button>
                                        </div>

                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="copyright-text-wrap">
                            <p class="mb-0">
                                <span class="copyright-text"> >still listening to ITAOTS unironically <a href="#">>2011</a> >mfw</span>
                                REEEEE 
                                <a rel="sponsored" href="#" target="_blank">AHHHH</a>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT FILES 
        note these require the 'asset' thingy in order for both the css and js
        to load in /public/
        -->
        <script src="{{ asset('js/jquery.min.js') }}" defer></script>
        <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
        <script src="{{ asset('js/jquery.sticky.js') }}" defer></script>
        <script src="{{ asset('js/click-scroll.js') }}" defer></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}" defer></script>
        <script src="{{ asset('js/magnific-popup-options.js') }}" defer></script>
        <script src="{{ asset('js/custom.js') }}" defer></script>

    </body>
</html>