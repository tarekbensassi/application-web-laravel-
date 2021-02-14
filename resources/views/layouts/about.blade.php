@extends('layouts.app')
@section('content')

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="sidenav-links pt-4">
            <a href="index-2.html">Home</a>
            <button class="dropdown-btn">About Us
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="about.html"> <i class="fa fa-caret-right mr-3"></i>Who We Are</a>
               
            </div>
            <button class="dropdown-btn">Student Corner
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                
                <a href="course.html"><i class="fa fa-caret-right mr-3"></i>Course</a>
            </div>
            <a href="faculties.html">Faculties</a>
            <a href="gallery.html">Gallery</a>
            <a href="blog.html">Faculties</a>
            <a href="career.html">Career</a>
            <a href="contact.html">Contact</a>
        </div>
    </div>
    <!-- end side menu -->
    <!-- start inner banner -->
    <section class="inner-banner">
        <h1 class="font-weight-bold text-center">
À propos de nous</h1>
    </section>
    <!-- end inner banner -->
    <!-- start about us -->
    <section class="aboutus">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <h1 class="color-orange font-weight-bold about-title" data-aos="fade-up" data-aos-duration="1000">l'objectif de EvalNet</h1>
                    
                    <p>EvalNet Permet sans effort, de gérer des tests les plus variés possibles, auto-corrigés, sur un système construit pour éliminer la fraude.
EvalNet est une plateforme d'évaluation pour gérer des tests en ligne. C'est un outil professionnel, facile à utiliser, avec un mécanisme de correction automatique de vos 
tests et questionnaires. questions, planifiez vos sessions d'examen, et les candidats peuvent passer les examens en ligne et en meme temps ils peuvent consulter leurs resultats à l'instant.</p>
                    <p>Ce que nous proposons : une plateforme qui répond à des Outils de formation et d'évaluation dans l'éducation, outil d'évaluation des connaissances et compétences dans l'entreprise qui fait face aux nouvelles exigences de la réforme de la formation professionnelle, outil pour les  recrutements qui doivent départager des candidats postulant à une offre d'emploi, ou même outil de certification dans les sociétés agréées pour délivrer des formations certifiantes... Et tout cela, sans plus aucune difficulté !
EvalNet permet de créer et gérer tous les types des questions (Le système propose plusieurs modèles d’examen (qcm, qr, réponse textuelle, cocher…)</p>
                   
                </div>
                <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0">
                    <div class="about-img">
                        <div class="img_1" data-aos="zoom-in" data-aos-duration="550">
                            <div class="border-line"></div>
                            <img src="{{asset('frontEnd/assets/images/about1.jpg" class="img-fluid"') }} alt="About">
                        </div>
                        <div class="img_2 d-flex"  data-aos="zoom-in" data-aos-duration="1000">
                            <h5 class="mb-0 text-white">Nos Story</h5>
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" data-fancybox="gallery" class="video-btn text-white">
                                <i class="fa fa-play-circle fa-3x"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about us -->
    <!-- start target -->
    
    <!-- end target -->
    <!-- start counter -->
   
    <!-- end counter -->
    <!-- start timeline -->
    <section class="timeline bg-light">
        <div class="container">
            <div class="sec-title text-center" data-aos="fade-up" data-aos-duration="1000">
                
                <h2>Historique</h2>
                <div class="divider">
                    <span class="fa fa-mortar-board"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="slider-nav py-3">
                        <div class="text-center history_slide">
                            <h3>2000</h3>
                            <i class="fa fa-circle text-center"></i>
                        </div>
                        <div class="text-center history_slide">
                            <h3>2005</h3>
                            <i class="fa fa-circle text-center"></i>
                        </div>
                        <div class="text-center history_slide">
                            <h3>2010</h3>
                            <i class="fa fa-circle text-center"></i>
                        </div>
                        <div  class="text-center history_slide">
                            <h3>2015</h3>
                            <i class="fa fa-circle text-center"></i>
                        </div>
                        <div  class="text-center history_slide">
                            <h3>2019</h3>
                            <i class="fa fa-circle text-center"></i>
                        </div>
                    </div>
                </div>
             
            </div>
        </div>
    </section>
    <!-- end timeline -->
    <!-- start events -->
    <section class="events text-center">
        <div class="container-fluid">
            <div class="sec-title text-center" data-aos="fade-up" data-aos-duration="1000">
                <span class="title">la vie est plus facile avec EVALNET !</span>
                <h2>BIENVENUE.</h2>
                <div class="divider">
                    <span class="fa fa-mortar-board"></span>
                </div>
            </div>
            <div class="center">
                

                

              
               

               
               
            </div>
        </div>
    </section>
    <!-- end events -->
    @endsection

<!-- Mirrored from radixtouch.in/flexweb_template/edusquad-preview/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Apr 2020 12:07:28 GMT -->



























































