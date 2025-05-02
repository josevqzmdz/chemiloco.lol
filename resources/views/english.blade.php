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

                <a href="{{ route('routeEnglish')}}" class="navbar-brand mx-auto mx-lg-0">Jose Miguel's web portfolio</a>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-5">
                        <li class="nav-item">
                            <a  href="{{  route('Spanish') }}" class="nav-link" >Español</a>
                        </li>

                        <li class="nav-item">
                            <p><a href=" {{ route('English') }}" class="nav-link" >English</a></p>
                        </li>

                        <li class="nav-item">
                            <p><a  href="{{ route('French') }}" class="nav-link" >Français</a></p>
                        </li>

                        <li class="nav-item">
                            <p><a  href="{{ route('Portuguese') }}" class="nav-link" >Portugues</a></p>
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

                                    <h1 class="hero-title ms-3 mb-0">Hi! My name is José Miguel,</h1>
                                </div>

                                <h2 class="mb-4">and I am a software engineer.  </h2>
                                <p class="mb-4"><a class="custom-btn btn custom-link" href="#section_2">Thank you for visiting my website!</a></p>
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

                    
                                <div class="section-title-wrap d-flex justify-content-end align-items-center mb-4">
                                    <h2 class="text-white me-4 mb-0">My Work Experience:</h2>

                                    <img src="{{asset('assets/svgs/worker.svg')}}" class="avatar-image img-fluid" alt="">
                                </div>

                                <p class="pt-2 mb-3">I am currently working as an IT Technical Assistant at the avocado packing company "Zavocado Frutas Finas S.A. De C.V." in Periban de Ramos, Michoacán, Mexico.</p>

                                <p> My job involves solving technical issues at both the hardware level (cleaning printers, computers, and even servers) and software level—ranging from email issues and restarting applications to backend support for services used, such as Compaqi or private software for product labeling, etc. </p>
                                
                                <p> From February 2025 till date.</p>

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
                                    <h4 class="mb-0">General Information and Contact:</h4>
                                </div>

                                <div class="profile-body">
                                    <p>
                                        <span class="profile-small-title">A) Education:</span> 
                                        <span>Graduate of the Instituto Tecnológico Superior de Los Reyes (Los Reyes, Michoacán, Mexico).</span>
                                    </p>

                                    <p>
                                        <span class="profile-small-title">B) General IT Experience:</span> 
                                        <span>Over 3 years working both onsite and remotely (work from home).</span>
                                    </p>

                                    <p>
                                        <span class="profile-small-title">C) Languages: </span> 
                                         <span><a href="tel: 305-240-9671">Native Spanish and English. Conversational French.</a></span>
                                    </p>

                                    <p>
                                        <span class="profile-small-title">D) Contact:  </span> 
                                        <span><a href="mailto:jose.vqz.mdz@gmail.com">Email: jose.vqz.mdz@gmail.com</a> Phone: (52+) 3541090470</span>
                                    </p>
                                    <p>
                                        <span class="profile-small-title">Notes</span> 
                                        <span><a href="mailto:jose.vqz.mdz@gmail.com">GMT-6 Timezone. I have a valid passport, but if I were to obtain work outside of Mexico, I would require a work visa.</span>
                                    </p>
                                </div>
                            </div>

                            <div class="about-thumb">
                                <div class="profile-title">
                                    <h4 class="mb-0">Previous Work Experience:  </h4>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-6 featured-border-bottom py-2">
                                        <h5> Nearly 1 year of Tier 1 Bilingual IT Support experience for Infogen Labs Inc.</h5>

                                        <p class="featured-text">From April 2024 to February 2025, remote (work from home).</p>
                                    </div>

                                    <div class="col-lg-6 col-6 featured-border-start featured-border-bottom ps-5 py-2">
                                        <h5>1 year of experience working as a Level 4 bilingual interpreter (English-Spanish) for the call center "LanguageLine Solutions."</h5>

                                        <p class="featured-text">From April 2023 to April 2024. </p>
                                    </div>

                                    <div class="col-lg-6 col-6 pt-4">
                                        <h5>Almost 1 year of experience as a backend web developer for the Mexican startup "agtools."</h5>

                                        <p class="featured-text">From March 2022 to February 2023. </p>
                                    </div>

                                    <div class="col-lg-6 col-6 featured-border-start ps-5 pt-4">
                                        <h5>1 year of experience working in IT support for the packing company "Giddings" in Los Reyes, Michoacán.</h5>

                                        <p class="featured-text">From February 2021 to March 2022.</p>
                                    </div>

                                    <div class="col-lg-6 col-6 featured-border-start ps-5 pt-4">
                                        <h5>1 year of experience working as Tier 1 IT support for "Anyness," a web solutions company in Zapopan, Jalisco.</h5>

                                        <p class="featured-text">From January 2020 to February 2021.</p>
                                    </div>

                                    <div class="col-lg-6 col-6 featured-border-start ps-5 pt-4">
                                        <h5> Almost 1 year working as a technology assistant at the primary/secondary school "Aprender para la vida" in Periban, Michoacán.</h5>

                                        <p class="featured-text">From January 2019 to December 2019.</p>
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

                            <div class="section-title-wrap d-flex justify-content-end align-items-center mb-4">
                                <img src="{{asset('assets/svgs/idea.svg')}}" class="avatar-image img-fluid" alt="">

                                <h2 class="text-white ms-4 mb-0">My Strengths as a Software Engineer are:</h2>
                            </div>

                        <div class="clearfix"></div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5>Backend Development: </h5>

                                    <p >Experience with JavaScript frameworks (Svelte, Angular, Node.js), Python (Django), and PHP (Laravel), as well as pentesting tools (Mockito, JUnit 5, Selenium, PHPUnit).</p>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5>Computer Networking:</h5>

                                    <p >Creation, administration, and maintenance of enterprise-level networks—both Ethernet cabling and logical server, host, access point, and end-user management, for both Cisco and Fortinet environments.</p>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >IT Support: </h5>

                                    <p >Hands-on experience with both Windows and Linux systems, solving office issues (malfunctioning printers, email applications not working, etc.) as well as deeper problems like API testing or repairing damaged equipment. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Native and Professional English, Conversational French:</h5>

                                    <p >Thanks to my previous experience as an interpreter and having spoken English all my life, I can explain and maintain in-depth technical conversations with ease, and also interpret in real time between languages. I can also hold conversations in French.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Network Analysis / Pentesting: </h5>

                                    <p > Deep knowledge of TCP packet analysis and other network protocols using tools like Wireshark and GHIDRA for reverse engineering—detecting potential malware and other attacks on corporate networks, as well as testing software using frameworks like PHPUnit or Selenium. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >API Usage Experience:</h5>

                                    <p > I have experience using various APIs such as Shopify Plus and other private software at different companies I’ve worked with, using RESTful and GraphQL schemas. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Knowledge in User Management Systems like Azure Active Directory, OAuth, and OKTA / Workday:</h5>

                                    <p > Over 2 years of experience managing user administration systems both via GUI and through console/scripts, including tasks like restoring personal credentials and creating new admin groups. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Experience with Ticketing and Documentation Systems like ServiceNow and Zendesk:</h5>

                                    <p > Over 2 years of experience using these tools for documentation and issue resolution, with a strong habit of clearly documenting problems and their solutions.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 > Experience with Remote Access Software like TeamViewer and AnyDesk:</h5>

                                    <p > I’ve used these tools—as well as native Windows remote access and SSH logins to servers—throughout my career and am familiar with their configuration and workflows.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Programming Languages and Paradigms: </h5>

                                    <p > While I have knowledge of Python, C/C++, Java, and Ruby on Rails, my strongest languages in terms of fluency and experience are: JavaScript/TypeScript, PHP, HTML5, SQL, NoSQL, and GraphQL. </p>
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

                                <h2 class="text-white ms-4 mb-0">Personal Projects: </h2>
                            </div>

                        <div class="clearfix"></div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5>This website!:</h5>

                                    <p>My own Laravel-based website is available on GitHub! <a href="https://github.com/josevqzmdz/chemiloco.lol/tree/master">[Link to GitHub].</a></p>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5>Deep Learning Model to Predict Bitcoin Value:</h5>

                                    <p >I coded a deep-learning model to predict Bitcoin future values using python-esque AI frameworks. <a href="https://github.com/josevqzmdz/proyecto_final_10/tree/main/BTC_Prices">[Link to Github].</a></p>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >TCP Server Built from Scratch Using C/C++:</h5>

                                    <p >A TCP packet server simulating WireMock to understand the OSI model in real-world usage. <a href="https://github.com/josevqzmdz/TCP_MOCK_SERVER" >[Link to GitHub].</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >TCP Packet Server built upon Mockito, wiremock and JUni 5 for Deep API Testing:</h5>

                                    <p >Used for in-depth testing and analysis of a virus found at my workplace in Zavocado. <a href="https://github.com/josevqzmdz/botnet_zavocado/tree/master">[Link to GitHub].</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Web Scraping / Pen Testing Scripts in Selenium:     </h5>

                                    <p > Python scripts for testing Agtools' private tool. <a href="https://github.com/josevqzmdz/selenium_testing">[Link to GitHub].</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >Shopify Project in Ruby on Rails:</h5>

                                    <p> A small Shopify project to test and experiment with the API, built in Ruby on Rails. <a href="https://github.com/josevqzmdz/shopify_tests">[Link to GitHub]</p></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <h5 >ricksbk.online:</h5>

                                    <p> A portfolio website I'm currently developing aside a work peer. <a href="https://github.com/josevqzmdz/ricksbk.online">[Link to Github].</a></p>
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
                                <span class="copyright-text">  <a href="mailto:jose.vqz.mdz@gmail.com">Contact: </a> Email: jose.vqz.mdz@gmail.com </span>
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