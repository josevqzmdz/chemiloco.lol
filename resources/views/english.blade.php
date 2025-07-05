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
                <!-- hamburger menu -->
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

                <h1 class="masthead-heading text-uppercase mb-0">My name is Jose Miguel, and I am a Software Engineer.</h1>

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
                <h3 class="masthead-heading text-uppercase mb-0">Thank you for visiting my website!</h3>
            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">

                <!-- current job section -->

                    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">My current job:</h2>
                    <!-- Icon Divider-->
                    <div class="divider-custom">
                        <div class="divider-custom-line"></div>
                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                        <div class="divider-custom-line"></div>
                    </div>

                    
                    <div class="row">
                        <div class="col-lg-4 ms-auto"><p class="lead">I am currently working as an "IT Support Technician" for the company "Zavocado Frutas Finas S.A. De C.V." in Periban de Ramos, Michoacán, Mexico.</p></div>

                        <div class="col-lg-4 ms-auto"><p class="lead"> My job consists of solving software and hardware issues, from cleaning SSDs and restarting applications like Contpaqi or other private software, to repairing on-site printers. </p> </div>
                    
                    </div>
                
                    <div class="row">
                    <div class="col-lg-4 ms-auto">
                        <p class="lead">1) Cellphone: +52 354 551 1715</p>
                        <p class="lead">2) Email: recursoshumanos@zavocado.com</p>
                        <p class="lead">3) Facebook: https://www.facebook.com/ZavocadoMx/</p>
                    </div>
                    <!-- map -->
                    <div class="col-lg-4 ms-auto"><p class="lead">          
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3759.754498196526!2d-102.4574277!3d19.5521508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842e41d2a54f131b%3A0x1caae3d6990f66a6!2sZavocado%20Frutas%20Finas%20S.A%20DE%20C.V.!5e0!3m2!1sen!2smx!4v1744950891772!5m2!1sen!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </p></div>
                </div>

                <!-- previous jobs  section -->

                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">My past professional experience, for over 5 years:</h2>
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
                <h2 class="page-section-heading text-center text-uppercase text-white">About me: </h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ms-auto"><p class="lead">Hi, my name is Jose Miguel Vazquez Mendez, and I am a 29-year-old trilingual software developer, currently living in Los Reyes, Michoacan, Mexico. My time zone is GMT-6 (Guadalajara time).</p></div>
                    <div class="col-lg-4 me-auto"><p class="lead">I mainly focus on backend web development and networking, although I have become passionate about IT support in recent years.</p></div>

                </div>
                <!-- About Section Button-->
                <div class="text-center mt-4">
                    <!-- link to my CV in google drive, nothing fancy. -->
                    <a class="btn btn-xl btn-outline-light" href="https://startbootstrap.com/theme/freelancer/" >
                        <i class="fas fa-download me-2" href="https://drive.google.com/file/d/1tYKTFvc7U90boZMrmf767-2uvYjGHvRH/view?usp=sharing"></i>
                        Download my CV!
                    </a>
                </div>
            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact me:</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <div class="row">
                <div class="col-lg-4 ms-auto"><p class="lead"> 1) Email: <a href="mailto:jose.vqz.mdz@gmail.com">jose.vqz.mdz@gmail.com</a></p></div>
                <div class="col-lg-4 ms-auto"><p class="lead"> 2) Cellphone (with WhatsApp): <a href="tel: +523541090470">+52 354 109 0470</a></p></div>
                                              
                </div>
                <!-- Contact Section Form-->

            </div>
        </section>

        <!-- PERSONAL PROjects-->

        <section class="page-section bg-primary text-white mb-0" id="projects">
                <div class="container">

                <h2 class="page-section-heading text-center text-uppercase text-white">My personal projects:</h2>
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
                                <h5 class="text-white">This website!:</h5>
                                <p class="text-white">My website, developed with Laravel and Nginx, hosted on a Debian server in Linode, is available on GitHub! <a href="https://github.com/josevqzmdz/chemiloco.lol/tree/master" class="text-white">[Link to GitHub].</a></p>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">"Deep Learning" / AI project for Bitcoin:</h5>

                                    <p class="text-white"> I developed a deep learning model using linear regression to predict the future value of Bitcoin, in Python and using AI libraries (PyTorch, Keras, etc). <a href="https://github.com/josevqzmdz/proyecto_final_10/tree/main/BTC_Prices" class="text-white">[Link to GitHub].</a></p>
                                </div>

                            </div>
                        </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">TCP server built from scratch in C/C++:</h5>

                                    <p class="text-white">A TCP packet server simulating WireMock to study the OSI model in use. <a href="https://github.com/josevqzmdz/TCP_mock_cpp" class="text-white">[Link to GitHub].</a></p>
                                </div>
                            </div>
                        </div>
                </div>

                <!-- second row-->
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">Web Scraping / Pen Testing script development in Python:</h5>

                                    <p class="text-white"> Typed Python scripts for testing a private tool from the Mexican company AGTools. <a href="https://github.com/josevqzmdz/selenium_testing" class="text-white">[Link to GitHub].</a></p>
                                </div>
                            </div>
                        </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">Personal Shopify project with Ruby On Rails:</h5>

                                    <p class="text-white"> A small Shopify “E-Commerce” website project to experiment with the Shopify API. <a href="https://github.com/josevqzmdz/shopify_tests" class="text-white">[Link to GitHub].</p></a>
                                </div>
                            </div>
                        </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">ricksbk.online:</h5>

                                    <p class="text-white"> A website I developed with a colleague. <a href="https://github.com/josevqzmdz/ricksbk.online" class="text-white">[Link to GitHub].</a></p>
                                </div>
                            </div>
                        </div>


                </div>

                <!-- third row-->
                <div class="row">

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">REST API built with Java / Spring:</h5>

                                    <p class="text-white"> A project using the Spring framework for a bot project to assist Small and Medium Enterprises. <a href="https://github.com/josevqzmdz/REST_API_JAVA" class="text-white">[Link to GitHub].</a></p>
                                </div>
                            </div>
                        </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">WordPress site deployed in Docker, Nginx, PhpMyAdmin, MariaDB:</h5>

                                    <p class="text-white"> A WordPress website using standard security measures used in production, with Nginx, phpMyAdmin, and MariaDB technologies. <a href="https://github.com/josevqzmdz/wordpress_gcp" class="text-white">[Link to GitHub].</a></p>
                                </div>
                            </div>
                        </div>


                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">RESTful API built from scratch with PHP and Composer: </h5>

                                    <p class="text-white"> A personal challenge to study PHP language and syntax. <a href="https://github.com/josevqzmdz/REST_API_PHP" class="text-white">[Link to GitHub].</a></p>
                                </div>
                            </div>
                        </div>


                </div>
                <!-- fourth row-->
				<div class="row">
				<div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">TCP Server using Mockito, WireMock, and JUnit 5:</h5>

                                    <p class="text-white">Used for deep testing and analysis of a computer virus discovered on my company’s network, at Zavocado. <a href="https://github.com/josevqzmdz/botnet_zavocado/tree/master" class="text-white">[Link to GitHub].</a></p>
                                </div>
                            </div>
                        </div>
				
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">WhatsApp bot using Python and LLMs (ChatGPT):</h5>

                                    <p class="text-white"> A WhatsApp bot for customer support that I built using Python, Docker, AWS, and ChatGPT, among other technologies, to solve frequent questions (FAQs) for SMEs. <a href="https://github.com/josevqzmdz/whatsapp-bot-python" class="text-white">[Link to GitHub].</a></p>
                                </div>
                            </div>
                        </div>
						
					<div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">Bash Scripts:</h5>

                                    <p class="text-white"> A compilation of Bash scripts I’ve used throughout my professional career. <a href="https://github.com/josevqzmdz/unix_bash_scripts" class="text-white">[Lien vers GitHub].</a></p>
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

                    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">My strengths as a Software Developer are:</h2>
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
                                    <h5>Backend web application development: </h5>

                                    <p > Experience with frameworks in JavaScript (Svelte and jQuery), Python (Django, Flask, FastAPI), PHP (Laravel, PHPUnit), Java (Spring, Mockito, JUnit 5, WireMock), and Selenium. </p>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5>Networking Engineering:</h5>

                                    <p > Creation, administration, and management of enterprise-scale networks, both on the Ethernet cabling level and software-level management of servers, hosts, access points, and end users, in environments such as Cisco and Fortinet. </p>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >IT Support Technician: </h5>

                                    <p > Hands-on experience with Windows and Linux systems, solving office-related problems (printer issues, email apps not working, etc.), as well as more complex problems like API testing or hardware repair. </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- second row-->
                     <div class="row">

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Native-level and professional English, conversational French:</h5>

                                    <p > Thanks to my experience as an interpreter and having spoken English all my life, I can explain and hold deep conversations about technical IT topics without difficulty. I can also interpret between languages. I am also capable of holding a conversation in French. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 > Network Analysis / Pentesting: </h5>

                                    <p > In-depth knowledge of TCP packet analysis and other network protocols, using tools like Wireshark and GHIDRA for reverse engineering — detecting various malware and other attacks in company networks, as well as software testing using PHPUnit or Selenium frameworks. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >API usage:</h5>

                                    <p > I have experience using various APIs, like Shopify Plus and other private software across several companies where I’ve worked, using RESTful APIs or other interfaces like GraphQL. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- third row-->

                     <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Knowledge of user management systems:</h5>

                                    <p > With over 3 years of experience managing user systems via GUI and command line (CMD/scripts), I’m able to perform tasks like restoring personal credentials and creating new admin groups, among other tasks.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Experience with Ticketing and Documentation Systems like ServiceNow and Zendesk:</h5>

                                    <p > I have over 3 years of combined experience dealing with user administration systems like ServiceNow and Zendesk to document and escalate issues if needed.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 > Experience with remote access tools like TeamViewer and AnyDesk:</h5>

                                    <p > I’ve used these tools, along with Windows native remote access and SSH connections to servers, throughout my career. I am very familiar with the configurations and working environments these tools provide.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- fourth row-->
                     <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Languages and programming paradigms: </h5>

                                    <p > Although I have experience in Python, C/C++, Java, and Ruby on Rails, the programming languages I’m most intellectually and professionally experienced in are: JavaScript/TypeScript, PHP, HTML5, SQL, NoSQL, and GraphQL.</p>
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
                        <h4 class="text-uppercase mb-4">Address:</h4>
                        <p class="lead mb-0">
                            Los Reyes, Michoacan, Mexico
                            <br />
                            60300
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">My other social media sites:</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://github.com/josevqzmdz"><i class="fab fa-fw fa-github"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/in/jose-miguel-vazquez-mendez-77a4a7296/"><i class="fab fa-fw fa-linkedin-in"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Thank you for visiting my website!</h4>

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
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">L2 Service Desk Support.</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <p class="mb-4">- April 2024 to February 2025: Nearly 1 year of experience in L2-level IT (Service Desk) support, as a bilingual agent for Ciklum (formerly known as "Infogen Labs").  </p>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{asset("public/assets/images/ciklum.png")}}" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4"> I was in charge of providing remote IT support to several branches of one of Ciklum’s clients, Skechers, across the entire continent (North and South America). I handled both L1 and L2 calls, covering issues ranging from basic Windows applications (like Outlook not loading the inbox or recovering missing files) to troubleshooting their customized Point of Sale (PoS) software, as well as investigating problems with APIs, their endpoints, or webhooks. I also analyzed their networks to identify common problems like broadcast storms, packet collisions, DHCP issues, etc. </p>
                                    <p class="mb-4">Infogen's contact: 
                                            <p>A) Website: <a href="https://corp.infogen-labs.com/">https://corp.infogen-labs.com/</a></p>
                                            <p>B) CellPhone: <a href="tel:918772111731">+91 877 211 1731</a></p>
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
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Spanish-English Bilingual Interpreter, Level L4.</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <p class="mb-4">- April 2023 to April 2024: 1 year of experience working as a Level 4 (L4) interpreter for the call center "LanguageLine Solutions".</p>

                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{asset("assets/images/teleperformance.jpeg")}}" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4"> I worked as an interpreter for Spanish-English calls, ranging from insurance questions to medical interpretation and 9/11 emergency calls. </p>
                                    <p class="mb-4">LanguageLines Solutions / Teleperformance contact: 
                                            <p>A) Website: <a href="https://www.languageline.com/">https://www.languageline.com/</a></p>
                                            <p>B) CellPhone: <a href="tel:8181220000">+81 8122 0000 ext 428</a></p>
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
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"> Backend Web Developer. </h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <p class="mb-4">- March 2022 to February 2023: Nearly 1 year of backend web development experience for the Mexican startup "Agtools".</p>

                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="asset{{("assets/images/agtools_logo.jpeg")}}" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">I was in charge of backend testing tasks, such as creating several Selenium scripts to test their websites and private tools, as well as developing and managing their backend built with Django and Python to send SQL or NoSQL queries to their databases. Their work focused primarily on Big Data, so I learned Pandas and other Python/AI libraries.</p>
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
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">IT Support.</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                     <p class="mb-4">- February 2021 to March 2022: 1 year of experience at the avocado packing facility called "SunBelle" (formerly known as "Giddings").</p>

                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{asset("public/assets/images/sunbelle.jpeg")}}" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">I was responsible for resolving both hardware and software issues, including fixing apps like Google Chrome, unlocking malfunctioning printers, creating or managing login credentials, as well as managing their SQL databases.</p>
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
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">IT Support Technician / WordPress Developer.</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <p class="mb-4">- January 2020 to February 2021: 1 year of experience at the company "Anyness".</p>

                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{asset("public/assets/images/anyness.png")}}" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">I initially worked remotely here due to COVID-19, as an IT support assistant, and also worked as a WordPress developer for Anyness’s website.</p>
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
                                    <p class="mb-4">- January 2019 to December 2019: Almost 1 year of experience working at the school "Aprender para la Vida".</p>

                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{asset("public/assets/images/school.png")}}" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">I worked on setting up and managing the CCTV camera connections and links, the school’s private network, among other tasks.</p>
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
