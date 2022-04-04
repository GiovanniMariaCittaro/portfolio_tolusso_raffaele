<x-layout>

        <x-slot name="title">Portfolio Tolusso Raffaele</x-slot>

        <div class="container-fluid">
            <div class="row">
                <div class="col-3 d-none vh-100 fixed-top d-sm-flex align-items-center light-purple-background shadow-lg description-table">
                <div class="container-fluid">
                    <div class="row flex-column">
                    <div class="col text-end border-bottom border-4 border-white my-3"><a class="navbar-text text-decoration-none text-white fs-4" href="#about-me">
                        About Me
                    </a></div>
                    <div class="col text-end border-bottom border-4 border-white my-3"><a class="navbar-text text-decoration-none text-white fs-4" href="#projects">
                        Projects
                    </a></div>
                    <div class="col text-end border-bottom border-4 border-white my-3"><a class="navbar-text text-decoration-none text-white fs-4" href="#contacts">
                        Contacts
                    </a></div>
                    </div>
                </div>
                </div>
                <div class="col-3 d-none d-md-block"></div>
                <div class="col-md-9 purple-background">
                <div class="container-fluid">
                    <div class="row flex-column">
                    <div class="col mt-5 text-white" id="about-me">
                        <h1 class="mt-2 text-center">About Me</h1>
                        <p class="my-4 fs-5 p-3 section-background">
                            I am an inquisitive person, who enjoys programming and challenges. I try to get as involved as I can in every project I am a part of, so that I can give it my all and learn from the people around me. At the present day I am working as Unity Developer at AnotheReality exploring Extended Reality solutions.​
                            <br>
                            <br>
                            I started programming at the age of 13 and I immediately fell in love with computer science. Since then, my education has completely revolved around this subject. Recently, I earned a Bachelor's Degree in Computer Science while attending a game programming course at "Digital Bros Game Academy" in which I had the opportunity to work on many different projects. Partecipating in these projects allowed me to both practice my programming skills and learn to work in large teams of people.​
                            <br>
                            <br>
                            At present I am working as Unity Developer at AnotheReality exploring Extended Reality solutions.
                        </p>
                    </div>
                    <div class="col text-white mt-5" id="projects">
                        <h1 class="text-center">Projects</h1>
                        <div class="container-fluid">
                            <div class="row justify-content-around">
                                <a href="{{route('detail',['id' => 0])}}"class="position-relative col text-decoration-none text-white d-flex justify-content-center" ><div class="mx-5 px-0 fs-4 my-3 project rounded-circle d-flex justify-content-center align-items-center section-background" onMouseOver="let projects_descriptions = document.querySelectorAll('.project-description');
                                projects_descriptions[0].classList.add('d-block');" onMouseOut="let projects_descriptions = document.querySelectorAll('.project-description');
                                projects_descriptions[0].classList.remove('d-block');">
                                    <img class="project-img rounded-circle" src="/img/cultsofpraywood.jpg" alt="">
                                     <div class="mt-3 project-description position-absolute text-center py-3 rounded-pill light-purple-background">
                                         <h1 class="fs-4">Cults Of Praywood</h1>
                                         <p class="fs-5 d-block text-wrap">An online RTS in which 4 players face against each other.</p>
                                    </div>
                                </div></a>
                                <a href="{{route('detail',['id' => 1])}}" class="position-relative col text-decoration-none text-white d-flex justify-content-center" ><div class="mx-5 px-0 fs-4 my-3 project rounded-circle d-flex justify-content-center align-items-center section-background" onMouseOver="let projects_descriptions = document.querySelectorAll('.project-description');
                                projects_descriptions[1].classList.add('d-block');" onMouseOut="let projects_descriptions = document.querySelectorAll('.project-description');
                                projects_descriptions[1].classList.remove('d-block');">
                                    <img class="project-img rounded-circle" src="/img/dicey_galaxy.jpg" alt="">
                                    <div class="mt-3 project-description position-absolute text-center py-3 rounded-pill light-purple-background">
                                         <h1 class="fs-4">Dicey Galaxy</h1>
                                         <p class="fs-5 d-block text-wrap">A mobile game that allows you to conquer the galaxy, if you can manage your resources correctly.</p>
                                    </div>
                                </div></a>
                                <a href="https://r-tol.github.io/Portfolio/productconfiguration-tolusso-master/productConfiguration.html" class="position-relative col text-decoration-none text-white d-flex justify-content-center" ><div class="mx-5 px-0 fs-4 my-3 project rounded-circle d-flex justify-content-center align-items-center section-background" onMouseOver="let projects_descriptions = document.querySelectorAll('.project-description');
                                projects_descriptions[2].classList.add('d-block');" onMouseOut="let projects_descriptions = document.querySelectorAll('.project-description');
                                projects_descriptions[2].classList.remove('d-block');">
                                    <img class="project-img rounded-circle" src="/img/LaserSword.png" alt="">
                                    <div class="mt-3 project-description position-absolute text-center py-3 rounded-pill light-purple-background">
                                         <h1 class="fs-4">Laser Sword</h1>
                                         <p class="fs-5 d-block text-wrap">I built a mock up website in which you can buy very special laser swords. The main exercise was to produce the shaders for the sword by using Three.js.</p>
                                    </div>
                                </div></a>
                                <a href="{{route('detail',['id' => 3])}}"class="position-relative col text-decoration-none text-white d-flex justify-content-center" ><div class="mx-5 px-0 fs-4 my-3 project rounded-circle d-flex justify-content-center align-items-center section-background" onMouseOver="let projects_descriptions = document.querySelectorAll('.project-description');
                                projects_descriptions[3].classList.add('d-block');" onMouseOut="let projects_descriptions = document.querySelectorAll('.project-description');
                                projects_descriptions[3].classList.remove('d-block');">
                                    <img class="project-img rounded-circle" src="/img/SnakePong.png" alt="">
                                    <div class="mt-3 project-description position-absolute text-center py-3 rounded-pill light-purple-background">
                                         <h1 class="fs-4">Snake Pong</h1>
                                         <p class="fs-5 d-block text-wrap">Have you ever wonder what happens if a snake eats a pong racket?</p>
                                    </div>
                                </div></a>
                                <a href="{{route('detail',['id' => 4])}}"class="position-relative col text-decoration-none text-white d-flex justify-content-center" ><div class="mx-5 px-0 fs-4 my-3 project rounded-circle d-flex justify-content-center align-items-center section-background" onMouseOver="let projects_descriptions = document.querySelectorAll('.project-description');
                                projects_descriptions[4].classList.add('d-block');" onMouseOut="let projects_descriptions = document.querySelectorAll('.project-description');
                                projects_descriptions[4].classList.remove('d-block');">
                                    <img class="project-img rounded-circle" src="/img/SoulLaundry.png" alt="">
                                    <div class="mt-3 project-description position-absolute text-center py-3 rounded-pill light-purple-background">
                                         <h1 class="fs-4">Soul Laundry</h1>
                                         <p class="fs-5 d-block text-wrap">A first person simulation game built with Unity.</p>
                                    </div>
                                </div></a>
                                <a href="{{route('detail',['id' => 5])}}"class="position-relative col text-decoration-none text-white d-flex justify-content-center" ><div class="mx-5 px-0 fs-4 my-3 project rounded-circle d-flex justify-content-center align-items-center section-background" onMouseOver="let projects_descriptions = document.querySelectorAll('.project-description');
                                projects_descriptions[5].classList.add('d-block');" onMouseOut="let projects_descriptions = document.querySelectorAll('.project-description');
                                projects_descriptions[5].classList.remove('d-block');">
                                    <img class="project-img rounded-circle" src="/img/place_memory.png" alt="">
                                    <div class="mt-3 project-description position-absolute text-center py-3 rounded-pill light-purple-background">
                                         <h1 class="fs-4">Place Memory</h1>
                                         <p class="fs-5 d-block text-wrap">A serious game built for my thesis at University of Udine.</p>
                                    </div>
                                </div></a>
                            </div>
                        </div>
                    </div>
                    <div class="col text-white my-5" id="contacts">
                        <h1 class="text-center">Contacts</h1>
                        <div class="container-fluid mt-5">
                            <div class="row">
                                <div class="col fs-6 fs-sm-4 lh-2 text-start lh-lg">
                                    <ul class="px-0 my-auto">
                                        <li class="contact my-4">
                                            <div><b>Email:</b></div>
                                            <div>raffaele.tolusso@gmail.com</div>
                                        </li>
                                        <li class="contact my-4">
                                            <div><b>Phone</b></div>
                                            <div>+39 3335281434</div>
                                        </li>
                                        <li class="contact my-4">
                                            <div><b>Social</b></div>
                                            <div>
                                                <a href="https://www.linkedin.com/in/raffaele-tolusso-0988b9218/" class="text-decoration-none text-white"><i class="bi bi-linkedin fs-3 me-2"></i></a>
                                            </div>
                                        </li>
                                    </ul>                                    
                                </div>
                                <div class="col">
                                    <div class="section-background text-center pt-4 pb-3">
                                        <a class="text-decoration-none text-white" href="https://r-tol.github.io/Portfolio/TolussoRaffaeleCurriculumVitae.pdf">
                                        <img class="p-3 w-75 w-sm-100" src="/img/CVtolussomini.png" alt="">
                                        <p class="fs-5">Scarica il Curriculum Vitae</p>
                                    </a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>

</x-layout>