<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Chemiloco's web CV</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{asset("favicon.ico")}}" />
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

                <h1 class="masthead-heading text-uppercase mb-0">Olá! Me chamo Jose Miguel, e sou um Engenheiro de Software.</h1>

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
                <h3 class="masthead-heading text-uppercase mb-0">Obrigado por visitar meu site web!</h3>
            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">

                <!-- current job section -->

                    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Meu cargo atual:  </h2>
                    <!-- Icon Divider-->
                    <div class="divider-custom">
                        <div class="divider-custom-line"></div>
                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                        <div class="divider-custom-line"></div>
                    </div>

                    
                    <div class="row">
                        <div class="col-lg-4 ms-auto"><p class="lead">Atualmente trabalho como "Técnico de Suporte Informático", para a empresa "Zavocado Frutas Finas S.A. De C.V.", em Periban de Ramos, Michoacán, México.  </p></div>

                        <div class="col-lg-4 ms-auto"><p class="lead"> Meu trabalho consiste em resolver problemas de software e hardware, desde limpeza de SSD, e reinício de aplicações, como Contpaqi ou outro software privado, até a reparação de impressoras no local.   </p> </div>
                    
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

                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Minha experiência profissional já adquirida, ao longo de 5 anos:</h2>
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
                <h2 class="page-section-heading text-center text-uppercase text-white">Sobre mim:   </h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ms-auto"><p class="lead">Olá, me chamo Jose Miguel Vazquez Mendez, e sou um desenvolvedor de software de 29 anos trilingue, atualmente vivendo em Los Reyes, Michoacan, México. Meu fuso horário é GMT-6 (horário de Guadalajara).  </p></div>
                    <div class="col-lg-4 me-auto"><p class="lead">Me concentro principalmente no desenvolvimento web "em backend" e em redes, embora tenha me apaixonado pelo suporte informático nos últimos anos.</p></div>

                </div>
                <!-- About Section Button-->
                <div class="text-center mt-4">
                    <!-- link to my CV in google drive, nothing fancy. -->
                    <a class="btn btn-xl btn-outline-light" href="https://drive.google.com/file/d/1tYKTFvc7U90boZMrmf767-2uvYjGHvRH/view?usp=sharing" >
                        <i class="fas fa-download me-2" ></i>
                        Baixar meu CV aqui!
                    </a>
                </div>
            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contate-me:</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <div class="row">
                <div class="col-lg-4 ms-auto"><p class="lead"> 1) Email: <a href="mailto:jose.vqz.mdz@gmail.com">jose.vqz.mdz@gmail.com</a></p></div>
                <div class="col-lg-4 ms-auto"><p class="lead"> 2) Cellphone (with whatsapp): <a href="tel: +523541090470">+52 354 109 0470</a></p></div>
                                              
                </div>
                <!-- Contact Section Form-->

            </div>
        </section>

        <!-- PERSONAL PROjects-->

        <section class="page-section bg-primary text-white mb-0" id="projects">
                <div class="container">

                <h2 class="page-section-heading text-center text-uppercase text-white">Meus projetos pessoais:</h2>
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
                                <h5 class="text-white">Este Site Web!:</h5>
                                <p class="text-white"> Meu site web, desenvolvido com Laravel, Nginx, hospedado em um servidor Debian na Linode, está disponível no GitHub! <a href="https://github.com/josevqzmdz/chemiloco.lol/tree/master" class="text-white">[Lien vers GitHub].</a></p>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">Projeto de "Deep Learning" / IA para BitCoin:  </h5>

                                    <p class="text-white">Desenvolvi um modelo de deep learning, utilizando regressão linear, para prever o valor futuro do BitCoin, em Python e com bibliotecas de IA (PyTorch, Keras, etc).   <a href="https://github.com/josevqzmdz/proyecto_final_10/tree/main/BTC_Prices" class="text-white">[Lien vers GitHub].</a></p>
                                </div>

                            </div>
                        </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">Servidor TCP construído do zero, em C/C++:</h5>

                                    <p class="text-white">Um servidor de pacotes TCP simulando WireMock para estudar o modelo OSI em um uso real. <a href="https://github.com/josevqzmdz/TCP_mock_cpp" class="text-white">[Lien vers GitHub].</a></p>
                                </div>
                            </div>
                        </div>
                </div>

                <!-- second row-->
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">O desenvolvimento de scripts por "Web Scraping / Pen Testing" em Python:</h5>

                                    <p class="text-white"> Scripts típicos em Python para testes na ferramenta privada da empresa mexicana, AGTools.   <a href="https://github.com/josevqzmdz/selenium_testing" class="text-white">[Lien vers GitHub].</a></p>
                                </div>
                            </div>
                        </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">Projeto pessoal de Shopify com Ruby On Rails:</h5>

                                    <p class="text-white"> Um pequeno projeto de Shopify de uma página de "E-Commerce" para experimentar com a API da Shopify. <a href="https://github.com/josevqzmdz/shopify_tests" class="text-white">[Lien vers GitHub].</p></a>
                                </div>
                            </div>
                        </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">ricksbk.online:</h5>

                                    <p class="text-white"> Um site web que desenvolvi junto com um colega de trabalho. <a href="https://github.com/josevqzmdz/ricksbk.online" class="text-white">[Lien vers GitHub].</a></p>
                                </div>
                            </div>
                        </div>


                </div>

                <!-- third row-->
                <div class="row">

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">REST API construída com Java / Spring:</h5>

                                    <p class="text-white"> Um projeto que utilizou o framework Spring, para meu projeto de um bot para auxiliar Pequenas e Médias Empresas. <a href="https://github.com/josevqzmdz/REST_API_JAVA" class="text-white">[Lien vers GitHub].</a></p>
                                </div>
                            </div>
                        </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white"> Site web de Wordpress, hospedado em Docker, Nginx, PhpMyAdmin, MariaDB:</h5>

                                    <p class="text-white"> Um site web Wordpress, utilizando medidas de segurança padrão usadas em produção, com as tecnologias Nginx, phpmyadmin, MariaDB. <a href="https://github.com/josevqzmdz/wordpress_gcp" class="text-white">[Lien vers GitHub].</a></p>
                                </div>
                            </div>
                        </div>


                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">RESTful API construída do zero com PHP e composer: </h5>

                                    <p class="text-white"> Um desafio próprio para estudar a linguagem e sintaxe de PHP.   <a href="https://github.com/josevqzmdz/REST_API_PHP" class="text-white">[Lien vers GitHub].</a></p>
                                </div>
                            </div>
                        </div>


                </div>
                <!-- fourth row-->
				<div class="row">
				<div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">Servidor TCP utilizando Mockito, WireMock e JUnit 5:  </h5>

                                    <p class="text-white">Utilizado para testes aprofundados e a análise de um vírus de computador descoberto em minha rede informática no trabalho, na Zavocado. <a href="https://github.com/josevqzmdz/botnet_zavocado/tree/master" class="text-white">[Lien vers GitHub].</a></p>
                                </div>
                            </div>
                        </div>
				
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">Bot de WhatsApp utilizando Python e LLMs (ChatGPT):</h5>

                                    <p class="text-white"> Um bot de WhatsApp para suporte ao cliente, que construí com Python, Docker, AWS e ChatGPT, com outras tecnologias, para resolver as perguntas mais frequentes (FAQ) de Pequenas e Médias Empresas: <a href="https://github.com/josevqzmdz/whatsapp-bot-python" class="text-white">[Lien vers GitHub].</a></p>
                                </div>
                            </div>
                        </div>
						
					<div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="w3-panel w3-border w3-hover-border-blue">
                                    <h5 class="text-white">Scripts de bash:</h5>

                                    <p class="text-white"> Uma compilação de scripts em Bash que utilizei ao longo de minha carreira profissional: <a href="https://github.com/josevqzmdz/unix_bash_scripts" class="text-white">[Lien vers GitHub].</a></p>
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

                    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Meus pontos fortes como Desenvolvedor de Software são:</h2>
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
                                    <h5>Desenvolvimento de aplicações web no lado "Backend": </h5>

                                    <p > Uso de frameworks em JavaScript (Svelte e JQuery), Python (Django, Flask, FastAPI) e PHP (Laravel, PHPUnit), Java (Spring, Mockito, JUnit 5, WireMock) e Selenium. </p>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5>Ingenierie de Redes Informáticas:</h5>

                                    <p > Criação, administração e gestão de redes em escala empresarial, tanto no nível de cabeamento Ethernet quanto na gestão de software de servidores, hosts, pontos de acesso e usuários finais, para ambientes como Cisco e Fortinet. </p>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 > Técnico de Suporte Informático: </h5>

                                    <p > Experiência prática com sistemas Windows e Linux, resolução de problemas de escritório (impressoras com defeito, aplicativos de e-mail não funcionando, etc), assim como problemas mais complexos, como teste de API ou reparação de hardware danificado.   </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- second row-->
                     <div class="row">

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 > Inglês nativo e profissional, francês conversacional: </h5>

                                    <p > Graças à minha experiência como intérprete e ao fato de ter falado inglês toda a minha vida, sou capaz de explicar e manter conversas aprofundadas sobre temas técnicos em informática, sem dificuldade. Também posso fazer interpretação entre os idiomas. Também consigo manter uma conversa em francês.  </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 > Análise de rede / pentesting: </h5>

                                    <p > Tenho conhecimento aprofundado de análise de pacotes TCP e outros protocolos de rede, utilizando ferramentas como wireshark e GHIDRA para reverse-engineering - detectei vários "malware" e outros ataques em redes de empresas, como testador de software utilizando frameworks como PHPUnit ou selenium. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Uso de API:</h5>

                                    <p > Tenho experiência no uso de diferentes APIs, como shopify plus e outros softwares privados em várias empresas onde trabalhei, utilizando APIs RESTful ou outras interfaces como GraphQL. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- third row-->

                     <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Conhecimentos de sistemas de administração de usuários:</h5>

                                    <p > Graças a mais de 3 anos de experiência em gestão de administração de sistemas de usuários via GUI e console / CMD / scripts, sou capaz de executar tarefas como restauração de credenciais pessoais e criação de novos grupos de administração, entre outras tarefas.  </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 > Experiência na gestão de softwares de acesso remoto, como TeamViewer e AnyDesk:</h5>

                                    <p > Utilizei essas ferramentas, assim como o acesso remoto nativo do Windows e a conexão SSH aos servidores, ao longo de minha carreira. Estou muito familiarizado com as configurações e o ambiente de trabalho que essas ferramentas oferecem.  </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- fourth row-->
                     <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Linguagens e esquemas /paradigmas de programação: </h5>

                                    <p > Embora tenha conhecimentos em python, C/C++, Java e Ruby on Rails, as linguagens de programação nas quais tenho mais domínio intelectual e experiência são: Javascript/Typescript, PHP, HTML 5, SQL, NoSQL e GraphQL.</p>
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
                        <h4 class="text-uppercase mb-4">Localizaçao:</h4>
                        <p class="lead mb-0">
                            Los Reyes, Michoacan, Mexico
                            <br />
                            60300
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Meus outros sites web de "social media":</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://github.com/josevqzmdz"><i class="fab fa-fw fa-github"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/in/jose-miguel-vazquez-mendez-77a4a7296/"><i class="fab fa-fw fa-linkedin-in"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Obrigado por visitar meu site web!</h4>

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
                                    <p class="mb-4">- Abril 2024 a Fevereiro 2025: Quase um ano de experiência em suporte IT (Service Desk) de nível L2, como agente bilíngue para Ciklum (anteriormente conhecida como "Infogen Labs").  </p>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{asset("assets/images/ciklum.png")}}" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4"> Eu era responsável por fornecer suporte informático remoto a várias filiais de um dos clientes da Ciklum, Skechers, em todo o continente (América do Norte e Sul). Tratava tanto chamadas de nível 1 quanto 2, cobrindo problemas que iam desde aplicativos Windows básicos (como o outlook que não carregava a caixa de entrada ou a recuperação de arquivos faltantes) até a resolução de problemas com seu software de ponto de venda (PoS) personalizado, assim como a investigação de problemas com as APIs, seus endpoints ou webhooks. Realizava a análise de suas redes para identificar problemas frequentes como tempestades de broadcast, colisão de pacotes, DHCP, etc.   </p>
                                    <p class="mb-4">Infogen's contact: 
                                            <p>A) Site web: <a href="https://corp.infogen-labs.com/">https://corp.infogen-labs.com/</a></p>
                                            <p>B) Cellphone: <a href="tel:918772111731">+91 877 211 1731</a></p>
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
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Intérprete Bilíngue de espanhol-inglês, nível L4.</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <p class="mb-4">- Abril 2023 a Abril 2024: 1 ano de experiência como intérprete nível 4 (L4) para o call center "LanguageLine Solutions".</p>

                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{asset("assets/images/teleperformance.jpeg")}}" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4"> Trabalhei como intérprete para chamadas em espanhol e inglês, desde questões de seguros, até interpretação médica e chamadas de 9/11. </p>
                                    <p class="mb-4">LanguageLines Solutions / Teleperformance contact: 
                                            <p>A) Site web: <a href="https://www.languageline.com/">https://www.languageline.com/</a></p>
                                            <p>B) Cellphone: <a href="tel:8181220000">+81 8122 0000 ext 428</a></p>
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
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Desenvolvedor de Backend web. </h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <p class="mb-4">- Março 2022 a Fevereiro 2023: Quase um ano de experiência em desenvolvimento web "backend" para a startup mexicana "agtools".</p>

                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5"  src="asset{{("assets/images/agtools_logo.jpeg")}}" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Eu era responsável por fornecer testes de backend, como a criação de vários scripts de selenium, para testar seus sites web e ferramentas privadas, além de desenvolver ou gerenciar seu backend, criado em Django e Python, para enviar queries de SQL ou NoSQL a sua base de dados. Seus esforços eram principalmente em Big Data, então aprendi pandas e outras bibliotecas de python / IA.  </p>
                                    <p class="mb-4">AGTools contact: 
                                            <p>A) Website: <a href="https://www.agtechtools.com/">https://www.agtechtools.com/</a></p>
                                            <p>B) CellPhone: <a href="tel:17147074848">+1 714 707 4848</a></p>
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
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Técnico de Suporte Informático.</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                     <p class="mb-4">- Fevereiro 2021 a Março 2022: 1 ano de experiência para a empresa de embalagem de abacates chamada "SunBelle" (anteriormente conhecida como "Giddings").</p>

                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{asset("assets/images/sunbelle.jpeg")}}" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Eu cuidava de resolver problemas tanto de hardware quanto software, como realizar reparos em aplicativos como google chrome, desbloquear impressoras com mau funcionamento, criar ou gerenciar credenciais de login, assim como gerenciar sua base de dados, em SQL.</p>
                                    <p class="mb-4">Sunbelle's contact: 
                                            <p>A) Website: <a href="https://www.sun-belle.com/">https://www.sun-belle.com/</a></p>
                                            <p>B) CellPhone: <a href="tel:52354 542 7328">+52 354 542 7328</a></p>
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
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Técnico de Suporte Informático / Desenvolvedor de Wordpress.</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <p class="mb-4">- Janeiro 2020 a Fevereiro 2021: 1 ano de experiência para a empresa "Anyness".</p>

                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{asset("public/assets/images/anyness.png")}}" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Trabalhei aqui primeiro na modalidade de "teletrabalho", graças ao COVID 19, como assistente de suporte informático, além de trabalhar como desenvolvedor de wordpress para o site web da anyness.</p>
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
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Tecnico de Suporte Informatico.</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <p class="mb-4">- Janeiro 2019 a Dezembro 2019: Quase 1 ano de experiência trabalhando na escola "Aprender para la Vida".</p>

                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{asset("public/assets/images/school.png")}}" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Trabalhei em criar ou gerenciar as conexões e links para as câmeras CCTV, a rede privada da escola, entre outras tarefas.</p>
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
        <script src="{{asset("assets/js/scripts.js")}}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
