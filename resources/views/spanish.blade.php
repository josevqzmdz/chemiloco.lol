<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Chemiloco's web CV</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{asset("assets/favicon.ico")}}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
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

                <h1 class="masthead-heading text-uppercase mb-0">¡Hola! Me llamo Jose Miguel, y soy un Ingeniero de Software. </h1>

                <!-- chemiloco's face :'v-->

                <img class="masthead-avatar me_irl_pic mb-5 " src="{{asset("assets/images/me_irl.png")}}" alt="..." />
                <!-- Masthead Heading-->
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <h3 class="masthead-heading text-uppercase mb-0">¡Gracias por visitar mi sitio web!</h3>
            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">

                <!-- current job section -->

                    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Mi trabajo actual:</h2>
                    <!-- Icon Divider-->
                    <div class="divider-custom">
                        <div class="divider-custom-line"></div>
                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                        <div class="divider-custom-line"></div>
                    </div>

                    
                    <div class="row">
                        <div class="col-lg-4 ms-auto"><p class="lead"> Actualmente trabajo como "Técnico de Soporte Informático", para la empresa "Zavocado Frutas Finas S.A. De C.V.", en Periban de Ramos, Michoacán, México.  </p></div>

                        <div class="col-lg-4 ms-auto"><p class="lead"> Mi trabajo consiste en resolver problemas de software y hardware, desde limpieza de SSD, reinicio de aplicaciones como Contpaqi u otro software privado, hasta reparación de impresoras en sitio. </p> </div>
                    
                    </div>
                
                    <div class="row">
                    <div class="col-lg-4 ms-auto">
                        <p class="lead">1) CellPhone: +52 354 551 1715</p>
                        <p class="lead">2) Email: recursoshumanos@zavocado.com</p>
                        <p class="lead">3) Facebook: https://www.facebook.com/ZavocadoMx/</p>
                    </div>
                    <!-- map -->
                    <div class="col-lg-4 ms-auto"><p class="lead">          
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3759.754498196526!2d-102.4574277!3d19.5521508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842e41d2a54f131b%3A0x1caae3d6990f66a6!2sZavocado%20Frutas%20Finas%20S.A%20DE%20C.V.!5e0!3m2!1sen!2smx!4v1744950891772!5m2!1sen!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </p></div>
                </div>

                <!-- previous jobs  section -->

                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Mi experiencia profesional a través de 5 años:</h2>
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
                            <img class="img-fluid" src="{{asset("assets/images/ciklum.png")}}" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 2  ### interpreter-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{asset("assets/images/teleperformance.jpeg")}}" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 3  ### AGTOlls-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{asset("assets/images/agtools_logo.jpeg")}}" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 4 ### giddings-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{asset("assets/images/sunbelle.jpeg")}}" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 5 ## anyness-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal5">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{asset("assets/images/anyness.png")}}" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 6  ### aprender para la vida-->
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal6">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{asset("assets/images/school.png")}}" alt="..." />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Acerca de mi: </h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ms-auto"><p class="lead">Hola, me llamo Jose Miguel Vazquez Mendez, y soy un desarrollador de software de 29 años trilingüe, actualmente viviendo en Los Reyes, Michoacán, México. Mi zona horaria es GMT-6 (hora de Guadalajara).   </p></div>
                    <div class="col-lg-4 me-auto"><p class="lead">Me enfoco principalmente en desarrollo web "backend" y redes, aunque me he apasionado por el soporte informático en los últimos años. </p></div>

                </div>
                <!-- About Section Button-->
                     <!-- link to my CV in google drive, nothing fancy. -->
                    <a class="btn btn-xl btn-outline-light" href="https://drive.google.com/file/d/1tYKTFvc7U90boZMrmf767-2uvYjGHvRH/view?usp=sharing" >
                        <i class="fas fa-download me-2" ></i>
                        ¡Descarga mi CV aquí!
                    </a>
                </div>
            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Mis contactos:</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <div class="row">
                <div class="col-lg-4 ms-auto"><p class="lead"> 1) Email: <a href="mailto:jose.vqz.mdz@gmail.com">jose.vqz.mdz@gmail.com</a></p></div>
                <div class="col-lg-4 ms-auto"><p class="lead"> 2) Celular (con whatsapp): <a href="tel: +523541090470">+52 354 109 0470</a></p></div>
                                              
                </div>
                <!-- Contact Section Form-->

            </div>
        </section>

        <!-- PERSONAL PROjects-->

        <section class="page-section bg-primary text-white mb-0" id="projects">
                <div class="container">

                <h2 class="page-section-heading text-center text-uppercase text-white">Mis proyectos personales:  </h2>
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
                                <h5 class="text-white">Este Sitio Web!:</h5>
                                <p class="text-white">Mi sitio web, desarrollado con Laravel, Nginx, montado en un servidor Debian en Linode, está disponible en GitHub!   <a href="https://github.com/josevqzmdz/chemiloco.lol/tree/master" class="text-white">[Lien vers GitHub].</a></p>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">Proyecto de "Deep Learning" / IA para Bitcoin:</h5>

                                    <p class="text-white">Desarrollé un modelo de deep learning usando regresión lineal para predecir el valor futuro del Bitcoin, en Python con librerías de IA (PyTorch, Keras, etc). <a href="https://github.com/josevqzmdz/proyecto_final_10/tree/main/BTC_Prices" class="text-white">[Lien vers GitHub].</a></p>
                                </div>

                            </div>
                        </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">Servidor TCP construido desde cero en C/C++:</h5>

                                    <p class="text-white">Un servidor de paquetes TCP simulando WireMock para estudiar el modelo OSI en uso real.   <a href="https://github.com/josevqzmdz/TCP_mock_cpp" class="text-white">[Lien vers GitHub].</a></p>
                                </div>
                            </div>
                        </div>
                </div>

                <!-- second row-->
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">Desarrollo de scripts de "Web Scraping / Pentesting" en Python:  </h5>

                                    <p class="text-white"> Scripts en Python para pruebas en herramientas privadas de la empresa mexicana AGTools. <a href="https://github.com/josevqzmdz/selenium_testing" class="text-white">[Lien vers GitHub].</a></p>
                                </div>
                            </div>
                        </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">Proyecto personal de Shopify con Ruby on Rails:</h5>

                                    <p class="text-white"> Una pequeña página de e-commerce para experimentar con la API de Shopify. <a href="https://github.com/josevqzmdz/shopify_tests" class="text-white">[Lien vers GitHub].</p></a>
                                </div>
                            </div>
                        </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">ricksbk.online:</h5>

                                    <p class="text-white"> Un sitio web que desarrollé con un compañero de trabajo. <a href="https://github.com/josevqzmdz/ricksbk.online" class="text-white">[Lien vers GitHub].</a></p>
                                </div>
                            </div>
                        </div>


                </div>

                <!-- third row-->
                <div class="row">

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">API REST construida con Java/Spring:</h5>

                                    <p class="text-white"> Un proyecto usando Spring framework para un bot de asistencia a PyMEs.   <a href="https://github.com/josevqzmdz/REST_API_JAVA" class="text-white">[Lien vers GitHub].</a></p>
                                </div>
                            </div>
                        </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">Sitio web WordPress en Docker, Nginx, PhpMyAdmin, MariaDB:</h5>

                                    <p class="text-white"> Un sitio WordPress con medidas de seguridad estándar para producción. <a href="https://github.com/josevqzmdz/wordpress_gcp" class="text-white">[Lien vers GitHub].</a></p>
                                </div>
                            </div>
                        </div>


                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">API RESTful desde cero con PHP y Composer:   </h5>

                                    <p class="text-white"> Un desafío personal para estudiar sintaxis de PHP. <a href="https://github.com/josevqzmdz/REST_API_PHP" class="text-white">[Lien vers GitHub].</a></p>
                                </div>
                            </div>
                        </div>


                </div>
                <!-- fourth row-->
				<div class="row">
				<div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">Servidor TCP con Mockito, WireMock y JUnit 5:  </h5>

                                    <p class="text-white"> Usado para pruebas y análisis de un virus detectado en la red de Zavocado.   <a href="https://github.com/josevqzmdz/botnet_zavocado/tree/master" class="text-white">[Lien vers GitHub].</a></p>
                                </div>
                            </div>
                        </div>
				
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">Bot de WhatsApp con Python y LLMs (ChatGPT):</h5>

                                    <p class="text-white"> Bot de soporte al cliente para PyMEs desarrollado con Python, Docker, AWS y ChatGPT. <a href="https://github.com/josevqzmdz/whatsapp-bot-python" class="text-white">[Lien vers GitHub].</a></p>
                                </div>
                            </div>
                        </div>
						
					<div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">Scripts de bash:</h5>

                                    <p class="text-white"> Recopilación de scripts Bash usados en mi carrera profesional. <a href="https://github.com/josevqzmdz/unix_bash_scripts" class="text-white">[Lien vers GitHub].</a></p>
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

                    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Mis fortalezas como Desarrollador de Software:</h2>
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
                                    <h5>Desarrollo de aplicaciones web (Backend): </h5>

                                    <p > Uso de frameworks en JavaScript (Svelte, jQuery), Python (Django, Flask, FastAPI), PHP (Laravel, PHPUnit), Java (Spring, Mockito, JUnit 5, WireMock) y Selenium. </p>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5>Ingenieria en Redes Informaticas</h5>

                                    <p > Creación y administración de redes empresariales, desde cableado hasta configuración de servidores (Cisco, Fortinet). </p>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Técnico de Soporte Informático: </h5>

                                    <p > Resolución de problemas en Windows/Linux, hardware y pruebas de API. </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- second row-->
                     <div class="row">

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Inglés nativo, francés conversacional:  </h5>

                                    <p >Fluidez técnica en inglés y conversacional en francés.  </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Análisis de redes/Pentesting: </h5>

                                    <p > Experiencia con Wireshark, GHIDRA, PHPUnit, Selenium para seguridad. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Uso de APIs:</h5>

                                    <p > Experiencia con RESTful, GraphQL y APIs privadas como Shopify Plus. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- third row-->

                     <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Administración de sistemas:</h5>

                                    <p >Gestión de usuarios via GUI o terminal con sistemas de gestion como OKTA, workday y Azure Directory. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Herramientas de acceso remoto:</h5>

                                    <p > TeamViewer, AnyDesk, SSH.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 > Experiencia en solución de problemas con software remoto, como TeamViewer o AnyDesk:</h5>

                                    <p > He utilizado estas herramientas, así como el acceso remoto nativo de Windows y la conexión SSH a los servidores, a lo largo de toda mi carrera. Estoy muy familiarizado con las configuraciones y el entorno de trabajo que estas herramientas ofrecen.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- fourth row-->
                     <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Lenguajes de programación: </h5>

                                    <p > Buen dominio de lenguajes de programacion web como JavaScript/TypeScript, PHP, HTML5, SQL/NoSQL, GraphQL.</p>
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
                        <h4 class="text-uppercase mb-4">Dirección:</h4>
                        <p class="lead mb-0">
                            Los Reyes, Michoacan, Mexico
                            <br />
                            60300
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Mis redes sociales:</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://github.com/josevqzmdz"><i class="fab fa-fw fa-github"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/in/jose-miguel-vazquez-mendez-77a4a7296/"><i class="fab fa-fw fa-linkedin-in"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">¡Gracias por visitar mi sitio web!</h4>

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
                                    <p class="mb-4">- Abril 2024 a Febrero 2025: Casi un año de experiencia en soporte IT (Service Desk) de nivel L2, como agente bilingüe para Ciklum (anteriormente conocido como "Infogen Labs").  </p>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{asset("assets/images/ciklum.png")}}" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4"> Estaba encargado de proporcionar soporte informático remoto a varias sucursales de uno de los clientes de Ciklum, Skechers, en todo el continente (América del Norte y del Sur). Atendía tanto llamadas de nivel 1 como de nivel 2, cubriendo problemas que iban desde aplicaciones básicas de Windows (como Outlook que no cargaba la bandeja de entrada o recuperación de archivos perdidos) hasta la resolución de problemas con su software personalizado de punto de venta (PoS), así como la investigación de problemas con APIs, sus endpoints o webhooks. Procedía al análisis de sus redes para identificar problemas frecuentes como tormentas de broadcast, colisiones de paquetes, DHCP, etc. </p>
                                    <p class="mb-4">Infogen's contact: 
                                            <p>A) Sitio web: <a href="https://corp.infogen-labs.com/">https://corp.infogen-labs.com/</a></p>
                                            <p>B) Celular: <a href="tel:918772111731">+91 877 211 1731</a></p>
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
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Intérprete Bilingüe de español-inglés, nivel L4.</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <p class="mb-4">- Abril 2023 a Abril 2024: 1 año de experiencia trabajando como intérprete de nivel 4 (L4) para el call center "LanguageLine Solutions".</p>

                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{asset("assets/images/teleperformance.jpeg")}}" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Trabajé como intérprete para llamadas en español e inglés, desde preguntas de seguros, hasta interpretación médica y llamadas al 911.</p>
                                    <p class="mb-4">LanguageLines Solutions / Teleperformance contact: 
                                            <p>A) Sitio web: <a href="https://www.languageline.com/">https://www.languageline.com/</a></p>
                                            <p>B) Telefono: <a href="tel:8181220000">+81 8122 0000 ext 428</a></p>
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
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Desarrollador de Backend web. </h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <p class="mb-4">- Marzo 2022 a Febrero 2023: Casi un año de experiencia en desarrollo web "backend" para la startup mexicana "agtools".</p>

                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="asset{{("assets/images/agtools_logo.jpeg")}}" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Estaba encargado de realizar pruebas de backend, como la creación de varios scripts con Selenium, para probar sus sitios web y herramientas privadas, además de desarrollar o gestionar su backend, creado en Django y Python, para enviar consultas SQL o NoSQL a sus bases de datos. Sus esfuerzos estaban enfocados principalmente en Big Data, por lo que tuve que aprender pandas y otras librerías de Python / IA.</p>
                                    <p class="mb-4">Contacto de AGTools: 
                                            <p>A) Sitio web: <a href="https://www.agtechtools.com/">https://www.agtechtools.com/</a></p>
                                            <p>B) Telefono: <a href="tel:17147074848">+1 714 707 4848</a></p>
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
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Soporte de TI.</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                     <p class="mb-4">- Febrero 2021 a Marzo 2022: 1 año de experiencia en la planta empacadora de aguacates llamada "SunBelle" (anteriormente conocida como "Giddings").</p>

                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{asset("assets/images/sunbelle.jpeg")}}"  alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Febrero 2021 a Marzo 2022: 1 año de experiencia en la planta empacadora de aguacates llamada "SunBelle" (anteriormente conocida como "Giddings").</p>
                                    <p class="mb-4">Sunbelle: 
                                            <p>A) Sitio web: <a href="https://www.sun-belle.com/">https://www.sun-belle.com/</a></p>
                                            <p>B) Telefono: <a href="tel:52354 542 7328">+52 354 542 7328</a></p>
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
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Soporte de TI / Desarollador de Wordpress</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <p class="mb-4">- Enero 2020 a Febrero 2021: 1 año de experiencia en la empresa "Anyness".</p>

                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{asset("assets/images/anyness.png")}}" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Trabajé aquí inicialmente en modalidad de "teletrabajo", gracias al COVID-19, como asistente de soporte informático, además de trabajar como desarrollador de Wordpress para el sitio web de Anyness.</p>
                                    <p class="mb-4">Anyness: 
                                            <p>A) Sitio web: <a href="https://anyness.com/">https://anyness.com/</a></p>
                                            <p>B) Telefono: <a href="tel:523331459498">+52 33 3145 9498</a></p>
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
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">IT Support Technician</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <p class="mb-4">- Enero 2019 a Diciembre 2019: Casi 1 año de experiencia trabajando en la escuela "Aprender para la Vida".</p>

                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{asset("assets/images/school.png")}}" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Trabajé realizando la creación o gestión de conexiones y enlaces para las cámaras CCTV, la red privada de la escuela, entre otras tareas.</p>
                                    <p class="mb-4">Contacto: 
                                            <p>A) Facebook: <a href="https://www.facebook.com/InstitutoAprenderparalaVida/">https://www.facebook.com/InstitutoAprenderparalaVida/</a></p>
                                            <p>B) Telefono: <a href="tel:523545511306">+52 354 551 1306</a></p>
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
        <script src="{{asset("assets/js/scripts.js")}}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
