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

                <a href="{{ route('routeEnglish')}}" class="navbar-brand mx-auto mx-lg-0">Jose Miguel's portfolio site web</a>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-5">
                        <li class="nav-item">
                            <a  href="{{  route('Spanish') }}">Espagnol</a>
                        </li>

                        <li class="nav-item">
                            <a href=" {{ route('English') }}">Anglais</a>
                        </li>

                        <li class="nav-item">
                            <a  href="{{ route('French') }}">Francais</a>
                        </li>

                        <li class="nav-item">
                            <a  href="{{ route('Portuguese') }}">Portugais</a>
                        </li>

                    </ul>

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
                                    <img src="{{asset('assets/images/me_irl3.png')}}" class="avatar-image avatar-image-large img-fluid" alt="">

                                    <h1 class="hero-title ms-3 mb-0">Je m'appelle José Miguel,</h1>
                                </div>

                                <h2 class="mb-4">et je suis un ingénieur en informatique.</h2>
                                <p class="mb-4"><a class="custom-btn btn custom-link" href="#section_2">¡Merci de visiter mon website!</a></p>
                            </div>
                        </div>

                        <div class="col-lg-5 col-12 position-relative">
                            <div class="hero-image-wrap"></div>
                            <img src="{{asset('assets/images/me_irl.png')}}" class="hero-image img-fluid" alt="">
                        </div>

                    </div>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#535da1" fill-opacity="1" d="M0,160L24,160C48,160,96,160,144,138.7C192,117,240,75,288,64C336,53,384,75,432,106.7C480,139,528,181,576,208C624,235,672,245,720,240C768,235,816,213,864,186.7C912,160,960,128,1008,133.3C1056,139,1104,181,1152,202.7C1200,224,1248,224,1296,197.3C1344,171,1392,117,1416,90.7L1440,64L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path></svg>
            </section>


            <section class="about section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <img src="{{asset('assets/svgs/my_story.svg')}}" class="about-image img-fluid" alt="">
                        </div>

                        <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                            <div class="about-thumb">

                                <div class="section-title-wrap d-flex justify-content-end align-items-center mb-4">
                                    <h2 class="text-white me-4 mb-0">Mon expérience professionelle:</h2>

                                    <img src="{{asset('assets/svgs/worker.svg')}}" class="avatar-image img-fluid" alt="">
                                </div>

                                <p class="pt-2 mb-3">Actuallement, je travaille comme assistant technique en informatique dans une entreprise d'avocats appelée "Zavocado Frutas Finas S.A. de C.V." á Periban de Ramos, Michoacán, Mexique.</p>

                                <p> Mon travail consiste à réspidre des problémes techniques, à la fois au niveau matériel (nettoyer des imprimates, des ordinateurs, et même des serveurs) at au niveau logiciel - allant de problèmes de messagerie électronique ete de redémarrage d'a´lications, jusqu'au support backend des services utilisés, comme Compaqi ou des logiciels privés pour l'étiquetage de produits, etc. </p>
                                
                                <p> Depuis février 2025 jusq'à aujourd'hui.</p>

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
                                    <h4 class="mb-0">Information</h4>
                                </div>

                                <div class="profile-body">
                                    <p>
                                        <span class="profile-small-title">Informations générales et contact:</span> 
                                        <span>Diplôme de le "Instituto Tecnologico Superior de los Reyes (Los Reyes, Michoacan, Mexique).</span>
                                    </p>

                                    <p>
                                        <span class="profile-small-title">Expérience générale en informatique:</span> 
                                        <span>Plus de 3 ans d'expérience, à la fois sur site et en télétravail (work from home).</span>
                                    </p>

                                    <p>
                                        <span class="profile-small-title">Langues</span> 
                                         <span><a href="tel: 305-240-9671">Espagnol et anglais à niveau natif. Francais conversationell.</a></span>
                                    </p>

                                    <p>
                                        <span class="profile-small-title">Le contact</span> 
                                        <span><a href="mailto:jose.vqz.mdz@gmail.com">Email: jose.vqz.mdz@gmail.com</a>, Phone: (52+) 3541090470</span>
                                    </p>
                                    <p>
                                        <span class="profile-small-title">Remarques</span> 
                                        <span><a href="mailto:jose.vqz.mdz@gmail.com">Si vous êtes intéressé, merci de me contacter apres 17h, heure de Guadalajara (heure centrale, GMT-6). J'ai un passport valide, mais si je devais obtenir un emploi en dehours du Mexique, il me faudrait un visa de travail.</span>
                                    </p>
                                </div>
                            </div>
                        </div>
<!-- ------------------------------------------- WORK EXP -->
                        <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                            <div class="about-thumb">
                                <div class="profile-title">
                                    <h4 class="mb-0">L'experience professionelle:</h4>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-6 featured-border-bottom py-2">
                                        <h5> Près d'un an d'expérience en support IT de niveau L1, en tant qu'agent bilingue pour Infogen Labs Inc.</h5>

                                        <p class="featured-text">Depuis avril 2024 jusq'a fevrier 2025, comme le modalite "work from home".</p>
                                    </div>

                                    <div class="col-lg-6 col-6 featured-border-start featured-border-bottom ps-5 py-2">
                                        <h5>1 an d'expérience en travail d'un interpreter niveau 4 (L4) pour le call center "LanguageLine Solutions".</h5>

                                        <p class="featured-text">De avril 2023 jusq'a avril 2024.</p>
                                    </div>

                                    <div class="col-lg-6 col-6 pt-4">
                                        <h5>Pŕes d'un an d'expérience en developpement web "backend" pour le startup de Mexique "agtools".</h5>

                                        <p class="featured-text">De mars 2022 jusq'a fevrier 2023.</p>
                                    </div>

                                    <div class="col-lg-6 col-6 featured-border-start ps-5 pt-4">
                                        <h5>1 an d'expérience en support IT pour l'entrepise de conditionnement "Giddings" à "los Reyes, Michoacán, Mexique".  </h5>

                                        <p class="featured-text">De fevrier 2021 à mars 2022.</p>
                                    </div>

                                    <div class="col-lg-6 col-6 featured-border-start ps-5 pt-4">
                                        <h5>1 an d'expérience en support informatique de niveau L1 pour l'entreprise "Anyness", une societé de solutions web située à Zapopan, Jalisco, Mexique.</h5>

                                        <p class="featured-text">De janvier 2020 à fevrier 2021.</p>
                                    </div>

                                    <div class="col-lg-6 col-6 featured-border-start ps-5 pt-4">
                                        <h5> Près d'un an de travail comme auxilier de IT pour le ecolée "Aprender para la vida" dans Periban de Ramos, Michoacán, Mexique. </h5>

                                        <p class="featured-text">De janvier 2019 à decembre 2019.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

<!-- ---------------------------------------- HABILIDADES ---------------------------------- -->
<section class="projects section-padding" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-md-8 col-12 ms-auto">
                            <div class="section-title-wrap d-flex justify-content-center align-items-center mb-4">
                                <img src="{{asset('assets/svgs/idea.svg')}}" class="avatar-image img-fluid" alt="">

                                <h2 class="text-white ms-4 mb-0">Mes points forts en tant qu'ingénieur en informatique sont:</h2>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5>Developpement de backend</h5>

                                    <p >Utilisation de frameworks en javascript (svelte, angular, node js), python (Django) et PHP (Laravel), jusqu'au pentesting avec des outils comme Mockito, JUnit 5, PHPUnit et Selenium.</p>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5>Réseaux informatiques:</h5>

                                    <p > Création, administration et maintenance de réseaux à l'échelle  d'une entreprise, aussi bien au niveau du câblage Ethernet que de la gestion logicielle des serveurs, hôtes, points d'accés et utilisateurs finaux, pour des environnements Cisco et Fortinet.</p>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Support IT:</h5>

                                    <p > Experience pratique avec les systèmes Windows et Linux, résolution de problèmes bureaitoqies (imprimantes en panne, applications de messagerie ne fonctionant pas, etc), ainsi que de problèmes plus complexes, comme le test d'API ou la réparation de matériel endommagé.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Anglais native et professionel, francais conversationel:</h5>

                                    <p > Grâce à mon expérience en tant qu'interprète et au fait que j'ai parlé anglais toute ma vie, je suis capable d'expliquer et de tenir des conversations approfondies sur des sujets techniques en informatique, sans difficulté. Je peux également faire de l'interprétation entre les langues. Je suis aussi capable de tenir une conversation en français. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >l'analyse réseau / pentesting</h5>

                                    <p > Conocimientos a profundidad en analisis de paquetes TCP y otros protocolos de red, utilizando herramientas como wireshark y GHIDRA para ingenieria reversa, para detecar potencial malware y demas ataques en una red empresarial. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Uso de APIs</h5>

                                    <p > Tengo experiencia utilizando diferentes APIs como shopify plus y otro software privado de las varias empresas donde he trabajado, utilizando RESTful u otras interfaces como graphql. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Conocimientos en sistemas de administración de usuarios, como Azure Active Directory y OKTA / workday.</h5>

                                    <p > He utilizado por mas de 2 años los sistemas de administración de usuarios, tanto a nivel GUI como por consola y scripts, de OKTA y Active Directory. Desde sencilla restauración de credenciales personales, hasta crear nuevos grupos administrativos para nuevas secciones en las empresas. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Experiencia con sistemas de tickets y documentación como Service Now y Zendesk.</h5>

                                    <p > He utilizado por mas de 2 años estas herramientas de documentación y resolución de problemas, haciendo un buen habito de documentar lo mas claro posible los problemas y como se solucionaron. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 > Experiencia y manejo de software para acceso remoto tipo TeamViewer y Anydesk</h5>

                                    <p > He utilizado estas herramientas, asi como acceso remoto nativo de windows e inicio de sesion por SSH a servidores, a lo largo de mi carrera y estoy adaptado a las configuraciones y entorno de trabajo que estas herramientas otorgan. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Lenguajes y esquemas de programación</h5>

                                    <p > Si bien tengo conocimientos de python, C/C++, Java y ruby on rails, mis lenguajes de programación donde tengo mayor solvencia mental y experiencia son: Javascript/Typescript, PHP, HTML 5, SQL, NoSQL y GraphQL. </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>                   

<!-- ---------------------------------------- PROYECTOS ---------------------------------- -->
            <section class="projects section-padding" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-md-8 col-12 ms-auto">
                            <div class="section-title-wrap d-flex justify-content-center align-items-center mb-4">
                                <img src="{{asset('assets/svgs/idea.svg')}}" class="avatar-image img-fluid" alt="">

                                <h2 class="text-white ms-4 mb-0">Proyectos</h2>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5>Esta pagina web.</h5>

                                    <p href="https://github.com/josevqzmdz/chemiloco.lol/tree/master">Mi propia pagina web en laravel esta disponible en github! Link a github.</p>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5>Modelo de IA para predecir el valor de bitcoin</h5>

                                    <p href="https://github.com/josevqzmdz/proyecto_final_10/tree/main/BTC_Prices">Cree un modelo de deep learning para predecir el valor de bitcoin, en python. link a github.</p>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Servidor TCP construido desde 0 utilizando C/C++</h5>

                                    <p href="https://github.com/josevqzmdz/TCP_MOCK_SERVER">Link a github</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Servidor TCP construido con mockito y JUnit 5</h5>

                                    <p href="https://github.com/josevqzmdz/botnet_zavocado/tree/master">Link a github</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Scripts de web scrapping / pen testing en selenium</h5>

                                    <p href="https://github.com/josevqzmdz/selenium_testing"> scripts en python para hacer pruebas en la herramienta privada de agtools. Link a github.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Proyecto personal de shopify en ruby on rails</h5>

                                    <p href="https://github.com/josevqzmdz/selenium_testing"> Pequeño proyecto de shopify para probar y experimentar con la API, construido en ruby on rails.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        <!-- footer -->
        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="copyright-text-wrap">
                            <p class="mb-0">
                                <span class="copyright-text">  <a href="mailto:jose.vqz.mdz@gmail.com">Contacto: </a> Email: jose.vqz.mdz@gmail.com </span>
                                Telefono: 
                                <a rel="sponsored" href="#" target="_blank">(+52) 3541090470</a>
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