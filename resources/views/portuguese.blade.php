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

                <a href="{{ route('routeEnglish')}}"class="navbar-brand mx-auto mx-lg-0">Portafolio web de Jose Miguel</a>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-5">
                        <li class="nav-item">
                            <a  href="{{  route('Spanish') }}">Español</a>
                        </li>

                        <li class="nav-item">
                            <a href=" {{ route('English') }}">English</a>
                        </li>

                        <li class="nav-item">
                            <a  href="{{ route('French') }}">Français</a>
                        </li>

                        <li class="nav-item">
                            <a  href="{{ route('Portuguese') }}">Portugues</a>
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

                                    <h1 class="hero-title ms-3 mb-0">Meu nome é José Miguel,</h1>
                                </div>

                                <h2 class="mb-4">e sou engenheiro de sistemas.</h2>
                                <p class="mb-4"><a class="custom-btn btn custom-link" href="#section_2">¡Obrigado por visitar meu site!</a></p>
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

                        <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                            <div class="about-thumb">

                                <div class="section-title-wrap d-flex justify-content-end align-items-center mb-4">
                                    <h2 class="text-white me-4 mb-0">Minha Experiência Profissional:</h2>

                                    <img src="{{asset('assets/svgs/worker.svg')}}" class="avatar-image img-fluid" alt="">
                                </div>

                                <p class="pt-2 mb-3"> Atualmente trabalho como Assistente Técnico de TI na empresa de empacotamento de abacates "Zavocado Frutas Finas S.A. De C.V.", em Peribán de Ramos, Michoacán, México.                                </p>

                                <p> Meu trabalho envolve a resolução de problemas técnicos tanto a nível de hardware (limpeza de impressoras, computadores e até servidores) quanto a nível de software—desde problemas com e-mails e reinício de aplicativos até suporte backend para os serviços utilizados, como Compaqi ou softwares privados de rotulagem de produtos, etc. </p>
                                
                                <p> De fevereiro de 2025 até o presente. </p>

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
                                    <h4 class="mb-0">Informações Gerais e Contato:                                    </h4>
                                </div>

                                <div class="profile-body">
                                    <p>
                                        <span class="profile-small-title">A) Formação:</span> 
                                        <span>Graduado pelo Instituto Tecnológico Superior de Los Reyes (Los Reyes, Michoacán, México).                                        </span>
                                    </p>

                                    <p>
                                        <span class="profile-small-title">B) Experiência Geral em TI:</span> 
                                        <span>Mais de 3 anos de experiência trabalhando presencialmente e remotamente (home office).</span>
                                    </p>

                                    <p>
                                        <span class="profile-small-title">C) Idiomas:                                        </span> 
                                         <span><a href="tel: 305-240-9671">Espanhol e inglês nativos. Francês conversacional.</a></span>
                                    </p>

                                    <p>
                                        <span class="profile-small-title">D) Contato:                                        </span> 
                                        <span><a href="mailto:jose.vqz.mdz@gmail.com">Email: jose.vqz.mdz@gmail.com</a>, Telefone: (52+) 3541090470</span>
                                    </p>
                                    <p>
                                        <span class="profile-small-title">E) Observações:</span> 
                                        <span><a href="mailto:jose.vqz.mdz@gmail.com">Tenho passaporte válido, mas, para trabalhar fora do México, necessitaria de visto de trabalho.                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                            <div class="about-thumb">
                                <div class="profile-title">
                                    <h4 class="mb-0">Experiencia laboral:</h4>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-6 featured-border-bottom py-2">
                                        <h5> Quase 1 ano de experiência em Suporte Técnico Bilíngue Nível 1 na Infogen Labs Inc.                                        </h5>

                                        <p class="featured-text">De abril de 2024 a fevereiro de 2025, remoto (home office).                                        </p>
                                    </div>

                                    <div class="col-lg-6 col-6 featured-border-start featured-border-bottom ps-5 py-2">
                                        <h5>1 ano de experiência como intérprete bilíngue Nível 4 (inglês-espanhol) no call center "LanguageLine Solutions".                                        </h5>

                                        <p class="featured-text">De abril de 2023 a abril de 2024.</p>
                                    </div>

                                    <div class="col-lg-6 col-6 pt-4">
                                        <h5>Quase 1 ano de experiência como desenvolvedor backend para a startup mexicana "agtools".                                        </h5>

                                        <p class="featured-text">De março de 2022 a fevereiro de 2023.</p>
                                    </div>

                                    <div class="col-lg-6 col-6 featured-border-start ps-5 pt-4">
                                        <h5>1 ano de experiência em suporte de TI na empresa de empacotamento "Giddings" em Los Reyes, Michoacán.                                        </h5>

                                        <p class="featured-text">De fevereiro de 2021 a março de 2022.                                        </p>
                                    </div>

                                    <div class="col-lg-6 col-6 featured-border-start ps-5 pt-4">
                                        <h5>1 ano de experiência como suporte técnico Nível 1 para a empresa de soluções web "Anyness" em Zapopan, Jalisco.                                        </h5>

                                        <p class="featured-text">De janeiro de 2020 a fevereiro de 2021.                                        </p>
                                    </div>

                                    <div class="col-lg-6 col-6 featured-border-start ps-5 pt-4">
                                        <h5> Quase 1 ano trabalhando como assistente de tecnologia na escola primária/secundária "Aprender para la vida", em Peribán, Michoacán.                                            </h5>

                                        <p class="featured-text">De janeiro de 2019 a dezembro de 2019.                                        </p>
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

                                <h2 class="text-white ms-4 mb-0">Minhas Forças como Engenheiro de Sistemas:                                </h2>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5>Desenvolvimento Backend:                                    </h5>

                                    <p >Experiência com frameworks JavaScript (Svelte, Angular, Node.js), Python (Django) e PHP (Laravel), além de ferramentas de pentesting (Mockito, JUnit 5, Selenium, PHPUnit).                                    </p>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5>Redes de Computadores:                                    </h5>

                                    <p >Criação, administração e manutenção de redes corporativas—tanto cabeamento Ethernet quanto gestão lógica de servidores, hosts, pontos de acesso e usuários finais, em ambientes Cisco e Fortinet.                                    </p>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Suporte de TI:                                    </h5>

                                    <p >Experiência prática com sistemas Windows e Linux, resolvendo problemas de escritório (impressoras com defeito, aplicativos de email que não funcionam, etc.) e questões mais avançadas como testes de APIs ou reparo de equipamentos danificados.                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Inglês Nativo e Profissional, Francês Conversacional:                                    </h5>

                                    <p >Graças à minha experiência anterior como intérprete e por falar inglês desde sempre, consigo manter conversas técnicas profundas com facilidade, além de interpretar em tempo real entre idiomas. Também consigo manter conversas em francês.                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Análise de Redes / Pentesting:                                    </h5>

                                    <p > Conhecimento avançado de análise de pacotes TCP e outros protocolos de rede
                                        usando ferramentas como Wireshark e GHIDRA para engenharia reversa—detectando malwares e outros ataques em redes corporativas, além de testar softwares usando frameworks como PHPUnit ou Selenium. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Experiência com APIs:                                    </h5>

                                    <p > Tenho experiência utilizando várias APIs como Shopify Plus e outros softwares privados em diferentes empresas onde trabalhei, usando interfaces RESTful e GraphQL.                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Conhecimento em Sistemas de Gerenciamento de Usuários como Azure Active Directory, OAuth e OKTA / Workday:                                    </h5>

                                    <p > Mais de 2 anos de experiência administrando sistemas de gerenciamento de usuários tanto por interface gráfica quanto por terminal/scripts, incluindo tarefas como restauração de credenciais e criação de novos grupos administrativos.                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Experiência com Sistemas de Chamados e Documentação como ServiceNow e Zendesk:                                    </h5>

                                    <p > Mais de 2 anos de experiência utilizando essas ferramentas para documentar e resolver problemas, com forte hábito de registrar claramente os problemas e suas soluções.                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 > Experiência com Softwares de Acesso Remoto como TeamViewer e AnyDesk:                                    </h5>

                                    <p > Utilizei essas ferramentas—além do acesso remoto nativo do Windows e logins SSH em servidores—ao longo da minha carreira e conheço bem suas configurações e fluxos de trabalho.                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Linguagens e Paradigmas de Programação:                                    </h5>

                                    <p > Apesar de ter conhecimento em Python, C/C++, Java e Ruby on Rails, minhas linguagens mais fortes em fluência e experiência são: JavaScript/TypeScript, PHP, HTML5, SQL, NoSQL e GraphQL.                                    </p>
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

                                <h2 class="text-white ms-4 mb-0">Projetos Pessoais:                                </h2>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5>MMeu site pessoal:</h5>

                                    <p href="https://github.com/josevqzmdz/chemiloco.lol/tree/master">Meu site pessoal baseado em Laravel está disponível no GitHub! [Link para o GitHub].</p>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5>Modelo de Deep Learning para Previsão de Valor do Bitcoin:                                    </h5>

                                    <p href="https://github.com/josevqzmdz/proyecto_final_10/tree/main/BTC_Prices">Construído com Python. [Link para o GitHub]</p>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 > Servidor TCP Construído do Zero com C/C++:                                    </h5>

                                    <p href="https://github.com/josevqzmdz/TCP_MOCK_SERVER">Um servidor de pacotes TCP simulando o WireMock para entender o modelo OSI na prática. [Link para o GitHub</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Servidor de Pacotes TCP para Testes Profundos de API, construido com mockito, junit 5 e wiremock:                                    </h5>

                                    <p href="https://github.com/josevqzmdz/botnet_zavocado/tree/master">Usado para testes e análises aprofundadas de um vírus encontrado no meu trabalho na Zavocado. [Link para o GitHub]                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Scripts de Web Scraping / Pentesting com Selenium:                                    </h5>

                                    <p href="https://github.com/josevqzmdz/selenium_testing"> Scripts em Python para testes na ferramenta privada da Agtools. [Link para o GitHub]                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Projeto Shopify em Ruby on Rails:                                    </h5>

                                    <p href="https://github.com/josevqzmdz/selenium_testing"> Um pequeno projeto no Shopify para testes e experimentações com a API, desenvolvido em Ruby on Rails. [Link para o GitHub]</p>
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
                                Telefone: 
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