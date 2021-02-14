@extends('layouts.app')
@section('content')
    <div class="sidenav" id="mySidenav">
        <a class="closebtn" href="javascript:void(0)" onclick="closeNav()">&times;</a>
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
    <!-- start inner-banner -->
    <section class="inner-banner">
        <h1 class="font-weight-bold text-center">Publicité</h1>
    </section>
    <!-- end inner-banner -->
    <!-- start course -->
    <section class="course">
        <div class="container">
            <div class="sec-title text-center mb-3" data-aos="fade-up" data-aos-duration="1000">
                <span class="title">
Quelques Domaines</span>
               
                <div class="divider">
                    <span class="fa fa-mortar-board"></span>
                </div>
            </div>
            <ul class="nav nav-pills  justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a  aria-selected="true" class="nav-link active" data-toggle="pill" href="#showall"
                       id="showall-tab" role="tab">Tous les domaines</a>
                </li>
                <li class="nav-item">
                    <a  aria-selected="false" class="nav-link" data-toggle="pill" href="#Business"
                       id="Business-tab" role="tab">langues</a>
                </li>
                <li class="nav-item">
                    <a  aria-selected="false" class="nav-link" data-toggle="pill" href="#Management"
                       id="Management-tab" role="tab">Informatique</a>
                </li>
                <li class="nav-item">
                    <a  aria-selected="false" class="nav-link" data-toggle="pill" href="#Designing"
                       id="Designing-tab" role="tab">Mathématique</a>
                </li>
            </ul>

            <div class="row">
                <div class="tab-content" id="pills-tabContent">
                    <div aria-labelledby="showall-tab" class="tab-pane  fade show active" id="showall" role="tabpanel">

                        <div class="Portfolio" data-aos="fade-up" data-aos-duration="1000">
                            <img alt="Course" class="img-fluid " src="assets/images/course_1.png">
                            <div class="course-desc py-4 px-3">
                                <h5 class="font-weight-bold">Examens en ligne pour une compétition</h5>
                                <p>vous avez des compétitions en ligne internationales? et vous souhaitez pouvoir faire passer une dizaine de tests en même temps ? 
Pour cela,vos avez besoin d'une plateforme sécurisée qui permettrait à plusieurs d'élèves de passer leurs tests au même moment. EvalNet est le meilleur choix.

</p>
                               

                                        
                            </div>
                        </div>

                        <div class="Portfolio" data-aos="fade-up" data-aos-duration="1000">
                            <img alt="Course" class="img-fluid" src="assets/images/course_2.png">
                            <div class="course-desc py-4 px-3">
                                <h5 class="font-weight-bold">Formation d'employés</h5>
                                <p>avez vous  besoin d'un outil lui permettant d'évaluer tes employés de manière plus efficace. Comme la formation continue de tes employés via des cours et examens fait partie de leurs priorités, c'est l'occasion de vous participez a EvalNet</p>
                               
                            </div>
                        </div>

                        <div class="Portfolio" data-aos="fade-up" data-aos-duration="1000">
                            <img alt="" class="card-img" src="assets/images/course_3.png">
                            <div class="course-desc py-4 px-3">
                                <h5 class="font-weight-bold">Récrutement d'employés</h5>
                                <p>.Grâce à EvalNet, vous pouvez en un clic envoyer un test de présélection aux plusieurs candidats qui ont postulé pour votre annonce, et analyser les résultats facilement pour ne garder que les meilleurs à l'entretien! Vous pouvez saisir vos questions, nous sous traiter cette tâche, ou même commander des questionnaires sur mesure à des spécialistes </p>

</p>
                               
<i
                                        class="fa fa-angle-double-right ml-2"></i></a>
                            </div>
                        </div>


                     

                        

                       

                    </div>
                   


                       
                    </div>
                    <div aria-labelledby="Management-tab" class="tab-pane fade" id="Management" role="tabpanel">

                       
                       

                       
                    </div>
                    <div aria-labelledby="Designing-tab" class="tab-pane fade" id="Designing" role="tabpanel">
                        
                        </div>

                       
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
    <!-- end course -->
    <!-- start footer -->
        
   























































