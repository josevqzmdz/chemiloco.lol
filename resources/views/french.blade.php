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

                <a href="{{ route('routeEnglish')}}" class="navbar-brand mx-auto mx-lg-0">Portfolio web de Jose Miguel</a>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-5">
                        <li class="nav-item">
                            <p><a  href="{{  route('Spanish') }}">Español</a></p>
                        </li>

                        <li class="nav-item">
                            <p><a href=" {{ route('English') }}">English</a></p>
                        </li>

                        <li class="nav-item">
                            <p><a  href="{{ route('French') }}">Français</a></p>
                        </li>

                        <li class="nav-item">
                            <p><a  href="{{ route('Portuguese') }}">Portugues</a></p>
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

                                    <h1 class="hero-title ms-3 mb-0">¡Bonjour! Je m'appelle José Miguel,</h1>
                                </div>

                                <h2 class="mb-4">et je suis un Génie logiciel.</h2>
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
            </section>

            <section class="featured section-padding">
                <div class="container">
                    <div class="row">

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
                                        <span><a href="mailto:jose.vqz.mdz@gmail.com">Fuseau horaire GMT-6, heure Guadalajara. J'ai un passport valide, mais si je devais obtenir un emploi en dehours du Mexique, il me faudrait un visa de travail.</span>
                                    </p>
                                </div>
                            </div>
<!-- ------------------------------------------- WORK EXP -->
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
            </section>

<!-- ---------------------------------------- HABILIDADES ---------------------------------- -->
<section class="projects section-padding" id="section_4">
                <div class="container">
                    <div class="row">

                            <div class="section-title-wrap d-flex justify-content-center align-items-center mb-4">
                                <img src="{{asset('assets/svgs/idea.svg')}}" class="avatar-image img-fluid" alt="">

                                <h2 class="text-white ms-4 mb-0">Mes points forts en tant que un génie logiciel sont:</h2>
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
                                    <h5 >l'analyse de réseau / pentesting</h5>

                                    <p > J'ai connaissance approfondie d'analuse de packets TCP et autre protocols de reseaux, en utilisant de utils comme wireshark et GHIDRA pour reverse-engineriee - en detecte de plusieurs "malware" et autre attaque dans reseaux de societes, a software tester en utilisant de frameworks avec PHPUnit ou selenium. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Utilisation d'API:</h5>

                                    <p > J'ai de l'expérience dans l'utilisation de différentes API, comme shopify plus et d'autres logiciels privés dans plusieurs entreprises où j'ai travaillé, en utilisant des API RESTful ou d'autres interfaces comme GraphQL. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 > Connaissances des systèmes d'administration des utilisateurs; </h5>

                                    <p > comme Azure Active Directory, OKTA et workday. J'ai utilisé ces systèmes pendant plus de deux ans, aussi bien via l'interface graphique (GUI) que par console et scripts. Cela va de la simple restauration de mots de passe à la création de nouveaux groupes administratifs our différentes sections au sein des entreprises. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Expérience avec des systèmes de gestion de tickets et de documentation, comme servicenow et zendesk:</h5>

                                    <p > J'ai utilisé outils pendant plus de deux ans, en prenant l'habitude de documenter les problèmes et leur solution les plus clairement possible.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 > EExpérience dans la gestion de logiciels d'accès à distance, tels que teamviewer et anydesk:</h5>

                                    <p > J'ai utilisé ces outils, ainsi que l'accés à distance natif de windows et la connexion SSH aux serveurs, tout a long de ma carrière. Je suis bien habitué aux configurations et à l'environnement de travail que ces outils offrent.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Langages et schemas /paradigmes de programmation: </h5>

                                    <p > Bien que j'aie des connaissances en python, C/C++, Java et Ruby on Rails, les langages de programmation dans lesquels j'ai le plus de maîtrise intellectuelle et d'expérience sont: Javascript/Typescript, PHP, HTML 5, SQL, NoSQL et GraphQL. </p>
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

                            <div class="section-title-wrap d-flex justify-content-center align-items-center mb-4">
                                <img src="{{asset('assets/svgs/idea.svg')}}" class="avatar-image img-fluid" alt="">

                                <h2 class="text-white ms-4 mb-0">Mon projets personnels:</h2>
                            </div>

                        <div class="clearfix"></div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5>Ce website: </h5>

                                    <p href="https://github.com/josevqzmdz/chemiloco.lol/tree/master">Mon propre site web développé avec Laravel est disponible sur github! Lien vers github.</p>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5>Projet d'IA pour le Bitcoin:</h5>

                                    <p href="https://github.com/josevqzmdz/proyecto_final_10/tree/main/BTC_Prices"> J'ai créé un modèle de deep learning pour prédire la valeur future du Bitcoin, en Python. Lien vers Github! </p>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Un serveur TCP construit, a partit de rien, en C/C++:</h5>

                                    <p href="https://github.com/josevqzmdz/TCP_MOCK_SERVER">Un serveur de paqueets TCP simulant de wiremock pour étudier le modèle OSI dans un usage réel. Lien vers Github.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Serveur TCP en utilisant de mockito, wiremock et JUnit5: </h5>

                                    <p href="https://github.com/josevqzmdz/botnet_zavocado/tree/master"> Utilisé pour des tests approfondis et l'analyse d'un virus informatique découvert sur mon lieu de travail chez moi travail. Lien vers github</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Scripts de  scrapping / pen testing en utilisant de selenium: </h5>

                                    <p href="https://github.com/josevqzmdz/selenium_testing"> scripts typier en python pour des tests dans le priviée outil de la societe de mexique, agtools. Lien vers github.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Projet shopify personnel en ruby on rails:</h5>

                                    <p href="https://github.com/josevqzmdz/selenium_testing"> Un petit projet shopify pour tester et expérimenter avec l'API, développé em Ruby on Rails. Lien vers github.</p>
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
                                Phone: 
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