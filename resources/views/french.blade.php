<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Chemiloco's web CV</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('public/css/styles.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Chemi's Portfolio Website</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{route('Spanish')}}">Español</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{route('English')}}">English</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{route('French')}}">Français</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{route('Portuguese')}}">Portugues</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">

                <h1 class="masthead-heading text-uppercase mb-0">Salut! Je m'appelle Jose Miguel, et je suis un Ingenieur en Logiciel.</h1>

                <!-- chemiloco's face :'v-->

                <img class="masthead-avatar me_irl_pic mb-5 " src="{{asset("public/assets/images/me_irl.png")}}" alt="..." />
                <!-- Masthead Heading-->
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <h3 class="masthead-heading text-uppercase mb-0">Merçi pour visiter mon site web!</h3>
            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">

                <!-- current job section -->

                    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Mon poste actuel:</h2>
                    <!-- Icon Divider-->
                    <div class="divider-custom">
                        <div class="divider-custom-line"></div>
                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                        <div class="divider-custom-line"></div>
                    </div>

                    
                    <div class="row">
                        <div class="col-lg-4 ms-auto"><p class="lead">Je travaille actuallement comme un "Technicien de Support Informatique", pour le societe "Zavocado Frutas Finas S.A. De C.V.", dans Periban de Ramos, Michoacán, Mexico.</p></div>

                        <div class="col-lg-4 ms-auto"><p class="lead"> Mon travaille se composer de solutionner problemes de software et hardware, depuis netoyage de SSD, et redemarrage d'applications, comme Contpaqi ou autre software privée, à la reparation de imprimants sur site. </p> </div>
                    
                    </div>
                
                    <div class="row">
                    <div class="col-lg-4 ms-auto">
                        <p class="lead">1) Celphone: +52 354 551 1715</p>
                        <p class="lead">2) Email: recursoshumanos@zavocado.com</p>
                        <p class="lead">3) Facebook: https://www.facebook.com/ZavocadoMx/</p>
                    </div>
                    <!-- map -->
                    <div class="col-lg-4 ms-auto"><p class="lead">          
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3759.754498196526!2d-102.4574277!3d19.5521508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842e41d2a54f131b%3A0x1caae3d6990f66a6!2sZavocado%20Frutas%20Finas%20S.A%20DE%20C.V.!5e0!3m2!1sen!2smx!4v1744950891772!5m2!1sen!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </p></div>
                </div>

                <!-- previous jobs  section -->

                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Mon déja experience professionelle de travaille, a travérs de 5 années:</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1  ### ciklum-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{asset("public/assets/images/ciklum.png")}}" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 2  ### interpreter-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{asset("public/assets/images/teleperformance.jpeg")}}" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 3  ### AGTOlls-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{asset("public/assets/images/agtools_logo.jpeg")}}" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 4 ### giddings-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{asset("public/assets/images/sunbelle.jpeg")}}" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 5 ## anyness-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal5">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{asset("public/assets/images/anyness.png")}}" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 6  ### aprender para la vida-->
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal6">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{asset("public/assets/images/school.png")}}" alt="..." />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">A propos de moi: </h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ms-auto"><p class="lead">Salut, je m’appelle Jose Miguel Vazquez Mendez, et je suis un developper de logiciel de 29 années trilingue, actuellement en train de vivre à Los Reyes, Michoacan, Mexico. Mon fuseau horaire c’est GMT-6 (temps de Guadalajara).</p></div>
                    <div class="col-lg-4 me-auto"><p class="lead">Je me concentre principalement sur le développement web “en backend” et la mise en réseau, bien que je sois devenu passionné par le support informatique ces dernières années.</p></div>

                </div>
                <!-- About Section Button-->
                <div class="text-center mt-4">
                    <!-- link to my CV (french) in google drive -->
                    <a class="btn btn-xl btn-outline-light" href="https://startbootstrap.com/theme/freelancer/" >
                        <i class="fas fa-download me-2" href="https://drive.google.com/file/d/19xpSkZMrU4bvNOFo6MCw6Q7-JRv1CB54/view?usp=sharing"></i>
                        Telechargér mon CV ici!
                    </a>
                </div>
            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contactez-moi:</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <div class="row">
                <div class="col-lg-4 ms-auto"><p class="lead"> 1) Email: <a href="mailto:jose.vqz.mdz@gmail.com">jose.vqz.mdz@gmail.com</a></p></div>
                <div class="col-lg-4 ms-auto"><p class="lead"> 2) Telephone (avec whatsapp): <a href="tel: +523541090470">+52 354 109 0470</a></p></div>
                                              
                </div>
                <!-- Contact Section Form-->

            </div>
        </section>

        <!-- PERSONAL PROjects-->

        <section class="page-section bg-primary text-white mb-0" id="projects">
                <div class="container">

                <h2 class="page-section-heading text-center text-uppercase text-white">Mon projets personnels:</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- end of icon divider -->
                <!-- first row -->
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                <h5 class="text-white">Cette Site Web!:</h5>
                                <p class="text-white">Mon site web, développé avec Laravel, Nginx, montée sur un serveur debian en Linode, est disponible sur GitHub! <a href="https://github.com/josevqzmdz/chemiloco.lol/tree/master" class="text-white">[Lien vers GitHub].</a></p>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">Projet de "Deep Learning" / IA pour BitCoin:</h5>

                                    <p class="text-white">Je developpée un modéle de deep learning, en utilisant de la régression linéaire, pour prédire la valeur future du BitCoin, en Python et sous libreries d'IA (PyTorch, Keras, etc). <a href="https://github.com/josevqzmdz/proyecto_final_10/tree/main/BTC_Prices" class="text-white">[Lien vers GitHub].</a></p>
                                </div>

                            </div>
                        </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">Serveur TCP construit a partir de rien, en C/C++:</h5>

                                    <p class="text-white">Un serveur de paquets TCP simulant de WireMock pour étudier le modele OSI dans un usage réel. <a href="https://github.com/josevqzmdz/TCP_mock_cpp" class="text-white">[Lien vers GitHub].</a></p>
                                </div>
                            </div>
                        </div>
                </div>

                <!-- second row-->
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">Le developpement de scripts par "Web Scraping / Pen Testing" en Python:</h5>

                                    <p class="text-white"> Scripts typier en Python pour testes dans la priviée outil de la societe Mexiqueine, AGTools. <a href="https://github.com/josevqzmdz/selenium_testing" class="text-white">[Lien vers GitHub].</a></p>
                                </div>
                            </div>
                        </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">Projet personnel de Shopify avec Ruby On Rails:</h5>

                                    <p class="text-white"> Un petit projet de Shopify d'un page de "E-Commerce" pour experimenter avec l'API de Shopify. <a href="https://github.com/josevqzmdz/shopify_tests" class="text-white">[Lien vers GitHub].</p></a>
                                </div>
                            </div>
                        </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">ricksbk.online:</h5>

                                    <p class="text-white"> Un site web que he developpée avec un collegue de travail. <a href="https://github.com/josevqzmdz/ricksbk.online" class="text-white">[Lien vers GitHub].</a></p>
                                </div>
                            </div>
                        </div>


                </div>

                <!-- third row-->
                <div class="row">

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">REST API construit avec Java / Spring:</h5>

                                    <p class="text-white"> Un projet que utilisé le framework de Spring, pour mon projet d'un bot par l'aidee de Petite et Moyennes Entreprises: <a href="https://github.com/josevqzmdz/REST_API_JAVA" class="text-white">[Lien vers GitHub].</a></p>
                                </div>
                            </div>
                        </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">Site web de Wordpress, montée en Docker, Nginx, PhpMyAdmin, MariaDB:</h5>

                                    <p class="text-white"> Un site web Wordpress, en utilisant de les mesures de securitée estandar que c'est utilise en production, avec les technologies de Nginx, phpmyadmin, MariaDB: <a href="https://github.com/josevqzmdz/wordpress_gcp" class="text-white">[Lien vers GitHub].</a></p>
                                </div>
                            </div>
                        </div>


                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">RESTful API construit a partit de rien avec PHP et composer: </h5>

                                    <p class="text-white"> Un défi propie par etudier le langue et syntaxe de PHP: <a href="https://github.com/josevqzmdz/REST_API_PHP" class="text-white">[Lien vers GitHub].</a></p>
                                </div>
                            </div>
                        </div>


                </div>
                <!-- fourth row-->
				<div class="row">
				<div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">Server TCP en utilisant de Mockito, WireMock et JUnit 5:</h5>

                                    <p class="text-white">Utilisé pour des tests approfondis et l'analyse d'un virus informatique découvert sur mon reseau informatique dans mon travail, en Zavocado: <a href="https://github.com/josevqzmdz/botnet_zavocado/tree/master" class="text-white">[Lien vers GitHub].</a></p>
                                </div>
                            </div>
                        </div>
				
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">WhatsApp bot en utilisant de Python et LLMs (ChatGPT):</h5>

                                    <p class="text-white"> Un bot de WhatsApp par support de customer, que je suis construit avec Python, Docker, AWS et ChatGPT, avec autres technologies, par solutionner les questions plus frequents (FAQ) de Petite et Moyennes Entreprises: <a href="https://github.com/josevqzmdz/whatsapp-bot-python" class="text-white">[Lien vers GitHub].</a></p>
                                </div>
                            </div>
                        </div>
						
					<div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">Scriptes de bash:</h5>

                                    <p class="text-white"> Un recopilation de scriptes en Bash que j'utilisé a travers de mon carrière professionelle: <a href="https://github.com/josevqzmdz/unix_bash_scripts" class="text-white">[Lien vers GitHub].</a></p>
                                </div>
                            </div>
                    </div>
				</div>
                <!-- end of project rows-->
				</div><!-- end of projects container-->

         </section><!-- end of personal projects section-->
<!-- ---------------------------------------- HABILIDADES ---------------------------------- -->
 

        <section class="page-section portfolio" id="portfolio">
            <div class="container">

                <!-- current job section -->

                    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Mes points forts comme Developpeur de Logiciel sont:</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>

                        <div class="clearfix"></div>
                        <!-- first row-->
                        <div class="row">

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5>Developpement d'applications web dans le côte "Backend": </h5>

                                    <p >Utilisation de frameworks en JavaScript (Svelte et JQuery), Python (Django, Flask, FastAPI) et PHP (Laravel, PHPUnit), Java (Spring, Mockito, JUnit 5, WireMock) et Selenium. </p>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5>genie de Reseau Informatiques:</h5>

                                    <p > Création, administration et gestion de réseaux à l'echelle d'une entreprise, aussi bien au niveau du câblage Ethernet que de la gestion logicielle des serveurs, hôtes, points d'accés et utilisateurs finaux, pour des environnements comme Cisco et Fortinet. </p>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Technicien de Support Informatique: </h5>

                                    <p > Experience pratique avec les systèmes Windows et Linux, résolution de problèmes bureaitoqies (imprimantes en panne, applications de messagerie ne fonctionant pas, etc), ainsi que de problèmes plus complexes, comme le test d'API ou la réparation de matériel endommagé. </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- second row-->
                     <div class="row">

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Anglais native et professionel, francais conversationel:</h5>

                                    <p >Grâce à mon expérience en tant qu'interprète et au fait que j'ai parlé anglais toute ma vie, je suis capable d'expliquer et de tenir des conversations approfondies sur des sujets techniques en informatique, sans difficulté. Je peux également faire de l'interprétation entre les langues. Je suis aussi capable de tenir une conversation en français.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >L'analyse de réseau / pentesting: </h5>

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
                    </div>
                    <!-- third row-->

                     <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Connaissances des systèmes d'administration des utilisateurs comme ServiceNow et Zendesk:</h5>

                                    <p > Merci à plusieurs de 3 années d’experience en gestion d’administration de systemes de utilisateur via GUI et console / CMD / scripts, je suis capable d’executer tachês comme restauration de credencials personnals et le creation de nouveau groupes de administration, entre autres tachês.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Experience with Ticketing and Documentation Systems like ServiceNow and Zendesk:</h5>

                                    <p > En plusieurs de 3 années d’experience en gestion d’administration de systemes de utilisateur via GUI et console / CMD / scripts, y compris de tachês comme restauration de credencials personnals et le creation de nouveau groupes de administration.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 > Expérience dans la gestion de logiciels d'accès à distance, comme TeamViewer et AnyDesk:</h5>

                                    <p > J'ai utilisé ces outils, ainsi que l'accés à distance natif de windows et la connexion SSH aux serveurs, tout a long de ma carrière. Je suis bien habitué aux configurations et à l'environnement de travail que ces outils offrent.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- fourth row-->
                     <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Langues et schemas /paradigmes de programmation: </h5>

                                    <p > Bien que j'aie des connaissances en python, C/C++, Java et Ruby on Rails, les langages de programmation dans lesquels j'ai le plus de maîtrise intellectuelle et d'expérience sont: Javascript/Typescript, PHP, HTML 5, SQL, NoSQL et GraphQL.</p>
                                </div>
                            </div>
                        </div>

                    </div><!-- end of container-->
                    </div>
            </section>                   

<!-- ---------------------------------------- PROYECTOS ---------------------------------- -->

        <!-- end of other skills section -->

        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Adresse:</h4>
                        <p class="lead mb-0">
                            Los Reyes, Michoacan, Mexico
                            <br />
                            60300
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Mon autres sites web de "social media":</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://github.com/josevqzmdz"><i class="fab fa-fw fa-github"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/in/jose-miguel-vazquez-mendez-77a4a7296/"><i class="fab fa-fw fa-linkedin-in"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Merci pour visiter mon site web!</h4>

                        </p>
                    </div>
                </div>
            </div>
        </footer>
        
        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1 ###    ciklum-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">L2 Service desk Support.</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <p class="mb-4">- Avril 2024 à Fevrier 2025: Près d'un an d'expérience en support IT (Service Desk) de niveau L2, en tant qu'agent bilingue pour Ciklum (anciennement connu dans "Infogen Labs").  </p>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{asset("public/assets/images/ciklum.png")}}" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4"> J’etais chargé de fournir un support informatique à distance à plusieurs succursales d’un des clients de Ciklum, Skechers, à travers tout le continent (Amerique du Nord et Sud). Je tratais à la fois des appels de niveau 1 et 2, couvrant des problèmes allant des applications windows de base (comme outlook qui ne chargeait pas la boîte de réception ou la récupération de fichiers manquants) à la résolution de problèmes avec leur logiciel de point de vente (PoS) personalisé, ainsi qu’a l’investigation de problèmes avec les APIs, leurs endpoints ou webhooks. Je procédais a l’analyse de leurs réseaux pour indentifier des problèmes frequents comme des tempêtes de broadcast, collision de paquets, DHCP, etc. </p>
                                    <p class="mb-4">Infogen's contact: 
                                            <p>A) Site web: <a href="https://corp.infogen-labs.com/">https://corp.infogen-labs.com/</a></p>
                                            <p>B) Celphone: <a href="tel:918772111731">+91 877 211 1731</a></p>
                                    </p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 2  ### languageLine SOlutions-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Interprete Bilingue d'espagnol-ingles, niveau L4.</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <p class="mb-4">- Avril 2023 à Avril 2024: 1 an d'expérience en travail d'un interpreter niveau 4 (L4) pour le call center "LanguageLine Solutions".</p>

                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{asset("assets/images/teleperformance.jpeg")}}" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">J'ai travaille comme un interprete pour appeles en espagnol et anglais, depuis questions d'assurance, à interpretation medicale et apelles de 9/11.</p>
                                    <p class="mb-4">LanguageLines Solutions / Teleperformance contact: 
                                            <p>A) Site web: <a href="https://www.languageline.com/">https://www.languageline.com/</a></p>
                                            <p>B) Celphone: <a href="tel:8181220000">+81 8122 0000 ext 428</a></p>
                                    </p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Developpeur de Backend web. </h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <p class="mb-4">- Mars 2022 à Fevrier 2023: Pŕes d'un an d'expérience en developpement web "backend" pour le startup de Mexique "agtools".</p>

                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="asset{{("assets/images/agtools_logo.jpeg")}}" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">J’etais chargé de fournir essais de backend, comme le creation de plusieurs scripts de selenium, pour essai leurs sites web et outils privées, en plus de developper ou gestioner leur backend, créer en Django et Python, pour envoyer queries de SQL ou NoSQL à sus base de données. Vous efforts c’est primeriement à Big Data, donc j’ai ete de appendre pandas et autres libreries de python / AI.</p>
                                    <p class="mb-4">AGTools contact: 
                                            <p>A) Website: <a href="https://www.agtechtools.com/">https://www.agtechtools.com/</a></p>
                                            <p>B) Phone: <a href="tel:17147074848">+1 714 707 4848</a></p>
                                    </p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Technicien de Support Informatique.</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                     <p class="mb-4">- Fevrier 2021 à Marrs 2022: 1 an d'experience pour l'installation d'emballage d'avocats dans le nom "SunBelle" (anciennement connu comme "Giddings").</p>

                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{asset("public/assets/images/sunbelle.jpeg")}}" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Je m’occupais de résoudre des problèmes tant de hardware que software, comme effectuer les reparations de applications comme google chrome, verrouillez les imprimants mauvais functionnement, créer ou gestion de identifiants de connexion, aussi bien que gestioner vous base de données, en SQL.</p>
                                    <p class="mb-4">Sunbelle's contact: 
                                            <p>A) Website: <a href="https://www.sun-belle.com/">https://www.sun-belle.com/</a></p>
                                            <p>B) Phone: <a href="tel:52354 542 7328">+52 354 542 7328</a></p>
                                    </p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" aria-labelledby="portfolioModal5" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Technicien de Support Informatique / Developpeur de Wordpress.</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <p class="mb-4">- Janvier 2020 à Fevrier 2021: 1 an d'experience pour le societe "Anyness".</p>

                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{asset("public/assets/images/anyness.png")}}" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">J'ai travaille ici en premier dans le modalite de "teletravail", merci a COVID 19, comme assistant de support informatique, en plus de travaille comme developpeur de wordpress pour le site web de anyness.</p>
                                    <p class="mb-4">Anyness contact: 
                                            <p>A) Website: <a href="https://anyness.com/">https://anyness.com/</a></p>
                                            <p>B) Phone: <a href="tel:523331459498">+52 33 3145 9498</a></p>
                                    </p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" aria-labelledby="portfolioModal6" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">IT Support Technician.</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <p class="mb-4">- Janvier 2019 à Decembre 2019: Pres 1 an d'experience en travail dans l'ecolee "Aprender para la Vida".</p>

                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{asset("public/assets/images/school.png")}}" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">J’ai travaille en faire de créer ou gestioner les connexions et liens pour les cameras CCTV, le reseaux privée de l’ecole, entre autres tachês.</p>
                                    <p class="mb-4">Contact: 
                                            <p>A) Facebook's page: <a href="https://www.facebook.com/InstitutoAprenderparalaVida/">https://www.facebook.com/InstitutoAprenderparalaVida/</a></p>
                                            <p>B) Phone: <a href="tel:523545511306">+52 354 551 1306</a></p>
                                    </p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
