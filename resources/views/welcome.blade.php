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
<!-- start slider -->
<div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        <li data-target="#demo" data-slide-to="3"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('frontEnd/assets/images/banner_1.jpg') }}" alt="education"
                class="img-fluid">
            <div class="carousel-caption animated fadeInLeft delay-0.5s">
                <h1 class="font-weight-bold">
                    Découvrez une nouvelle methode d'evaluation..</h1>


            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('frontEnd/assets/images/banner_2.jpg') }}" alt="education"
                class="img-fluid">
            <div class="carousel-caption animated fadeInUp delay-0.5s">
                <h1 class="font-weight-bold">
                    Avec nous, La distance ne signifie pas un obstacle
                </h1>


            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('frontEnd/assets/images/banner_3.jpg') }}" alt="education"
                class="img-fluid">
            <div class="carousel-caption animated fadeInDown delay-0.5s">
                <h1 class="font-weight-bold">
                    Un investissement dans la connaissance génère les meilleurs intérêts.</h1>


            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('frontEnd/assets/images/banner_4.jpg') }}" alt="education"
                class="img-fluid">
            <div class="carousel-caption animated zoomIn delay-0.5s">
                <h1 class="font-weight-bold">
                    la pensée a des ailes .
                    nul ne peut arrêter son envol .</h1>


            </div>
        </div>
    </div>
</div>
<!-- end slider -->
<!-- start counter -->

<!-- end about us -->
<!-- start target -->

<!-- end target -->
<!-- start team -->
<section class="our-team text-center bg-light">
    <div class="container">


</section>
<!-- end team -->
<!-- start online course -->
<section class="online-course">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="sec-title">

                    <h2>
                        Apprenez de nouvelles compétences en ligne sur votre temps</h2>
                    <div class="divider">
                        <span class="fa fa-mortar-board"></span>
                    </div>
                </div>
                <p class="p-17">Afin de satisfaire les besoins en formation de vos participants, choisissez EvalNet.
                    Que vous souhaitez former vos (nouveaux) employés, vos clients ou vos partenaires, notre système
                    de gestion de l'apprentissage en ligne va vous permettre de déploer vos formations en un rien de
                    temps. Aucun temps d’installation, aucun blabla. Choisissez, dans la liste ci-dessous. le genre
                    de formation que vous souhaitez effectuer, et découvrez pourquoi EavalNet est la solution idéale
                    aussi bien pour vous que pour vos participants !</p>
                <p class="p-17">
                    .</p>

                <input type=button class="btn theme-orange" onclick=window.location.href="about.html" value=PLUS... />
            </div>
            <div class="col-lg-6">
                <div class="course-block  d-flex justify-content-between bg-light pa-2 mx-5 my-3" data-aos="fade-up"
                    data-aos-duration="550">
                    <img src="{{ asset('frontEnd/assets/images/icons/promotion.png') }}"
                        class="img-fluid m-auto" alt="Key Of Success">
                    <div class="course-text pl-5">
                        <h4>Clé du succès</h4>
                        <p> EvalNet est simplement un outil pour facilite le chemin vers le succés</p>
                    </div>
                </div>
                <div class="course-block  d-flex justify-content-between theme-blue pa-2 mx-5 my-3" data-aos="fade-up"
                    data-aos-duration="550">
                    <img src="{{ asset('frontEnd/assets/images/icons/online-class.png') }}"
                        class="img-fluid m-auto" alt="Our Philosophy">
                    <div class="course-text pl-5">
                        <h4>Notre philosophie</h4>
                        <p>La pensée a des ailes .
                            nul ne peut arrêter son envol .</p>
                    </div>
                </div>
                <div class="course-block  d-flex justify-content-between theme-orange pa-2 mx-5 mt-3" data-aos="fade-up"
                    data-aos-duration="550">
                    <img src="{{ asset('frontEnd/assets/images/icons/feminism.png') }}"
                        class="img-fluid m-auto" alt="Our Principle">
                    <div class="course-text pl-5">
                        <h4>Notre Principle</h4>
                        <p>On peux faire tous à distance </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end online course -->
<!-- start search course -->
<section class="search-course">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10 col-md-10">
                <div class="online-course-inner text-center">

                    <h6>
                        Posséder vos fonctionnalités Apprendre de nouvelles compétences en ligne</h6>
                    <form class="px-5 mt-5 mb-3">
                        <div class="form-row">
                            <div class="form-group col-lg-8 col-md-12">
                                <input type="text" class="form-control"
                                    placeholder="Quel est le sujet de votre examen  que tu vas le créé?">
                            </div>
                            <div class="form-group col-lg-4 col-md-12">
                                <button type="button" class="btn theme-btn theme-orange mb-2 get-course"
                                    onclick=window.location.href="career.html">Commencer

                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="course-rate">
                        <div class="counter-box p-0">
                            <div class="row justify-content-center">
                                <div class="col-lg-3 col-md-3">
                                    <div class="counter p-4" data-aos="fade-up" data-aos-duration="550">
                                        <div class="counter-img">
                                            <img src="{{ asset('frontEnd/assets/images/icons/reading.png') }}"
                                                class="img-fluid w-50" alt="Students">
                                        </div>
                                        <h3 class="timer count-title count-number" data-to="300" data-speed="1500">
                                        </h3>
                                        <h5 class="count-text mt-2">entreprises</h5>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="counter p-4" data-aos="fade-up" data-aos-duration="550">
                                        <div class="counter-img">
                                            <img src="{{ asset('frontEnd/assets/images/icons/online-course.png') }}"
                                                class="img-fluid w-50" alt="Course">
                                        </div>
                                        <h3 class="timer count-title count-number" data-to="1700" data-speed="1500">
                                        </h3>
                                        <h5 class="count-text mt-2">institut</h5>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="counter mb-0 p-4" data-aos="fade-up" data-aos-duration="550">
                                        <div class="counter-img">
                                            <img src="{{ asset('frontEnd/assets/images/icons/visitor.png') }}"
                                                class="img-fluid w-50" alt="Visitors">
                                        </div>
                                        <h3 class="timer count-title count-number" data-to="11900" data-speed="1500">
                                        </h3>
                                        <h5 class="count-text mt-2">Visiteurs</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end search course -->
<!-- start event listing -->
<section class="event-listing">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="about-img mb-5">
                    <div class="img_1 aos-init aos-animate d-block m-auto" data-aos="zoom-in" data-aos-duration="550">
                        <div class="border-line"></div>
                        <img src="{{ asset('frontEnd/assets/images/about1.jpg') }}"
                            class="img-fluid" alt="About">
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="sec-title" data-aos="fade-up" data-aos-duration="550">
                    <span class="title">QUI PEUT PROFITER ET S'IMLIQUER DANS EVALNET</span>
                    <h2></h2>
                    <div class="divider">
                        <span class="fa fa-mortar-board"></span>
                    </div>
                    <div class="event-block d-flex my-3" data-aos="fade-up" data-aos-duration="550">
                        <h2 class="font-weight-bold color-orange mr-3">1.</h2>
                        <div class="event-info">
                            <h5 class="color-blue">
                                <a href="javascript:">
                                    Les Entreprises .....
                                </a>
                            </h5>
                            <ul class="pl-0">
                                <li class="pr-3">


                                    </i>
                                <li class="pr-3">

                                </li>
                                <li class="pr-3">


                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="event-block d-flex my-3" data-aos="fade-up" data-aos-duration="550">
                        <h2 class="font-weight-bold color-orange mr-3">2.</h2>
                        <div class="event-info">
                            <h5 class="color-blue">
                                <a href="javascript:">
                                    Tous Les Centres (par exemple centre des langues )
                                </a>
                            </h5>
                            <ul class="pl-0">
                                <li class="pr-3">

                                </li>
                                <li class="pr-3">

                                </li>
                                <li class="pr-3">

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="event-block d-flex mt-3" data-aos="fade-up" data-aos-duration="550">
                        <h2 class="font-weight-bold color-orange mr-3">3.</h2>
                        <div class="event-info">
                            <h5 class="color-blue">
                                <a href="javascript:">
                                    Les Instituts ....
                                </a>
                            </h5>
                            <ul class="pl-0 mb-0">
                                <li class="pr-3">

                                </li>
                                <li class="pr-3">

                                </li>
                                <li class="pr-3">

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end event listing -->
<!-- start video & FAQ -->
<section class="video-faq">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 pl-0 small-screen">
                <div class="video-area">
                    <div class="video-icon">
                        <a href="https://www.youtube.com/watch?v=YLN1Argi7ik" class="animated pulse"
                            data-fancybox="gallery">
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 p-5" data-aos="fade-up" data-aos-duration="550">
                <div class="sec-title bg-fill">
                    <span class="title"> QUESTIONS</span>
                    <h2 class="text-white"></h2>
                    <div class="divider">
                        <span class="fa fa-mortar-board"></span>
                    </div>
                </div>

                <div class="panel-group pt-3" id="accordion2" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default mb-4">
                        <div class="panel-heading" role="tab" id="headingOne2">

                        </div>
                        <div id="collapseOne2" class="panel-collapse collapse in" role="tabpanel"
                            aria-labelledby="headingOne2">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem,
                                    dictum
                                    id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu
                                    tincidunt
                                    ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor
                                    aliquam vitae. Curabitur molestie eros. </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default mb-4">
                        <div class="panel-heading" role="tab" id="headingTwo2">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2"
                                    href="#collapseTwo2" aria-expanded="false">
                                    Comment pouvez-vous obtenir votre résultat?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo2" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingTwo2">
                            <div class="panel-body">
                                <p>
                                    Vous pouvez connaitre vos résultats sur place ,c'est à dire aprés que vous
                                    passez l'examen </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default mb-4">
                        <div class="panel-heading" role="tab" id="headingThree2">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2"
                                    href="#collapseThree2" aria-expanded="false">
                                    Comment pouvez-vous nous contacter?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree2" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingThree2">
                            <div class="panel-body">
                                <p>Trés facile pour nous contacter , vous pouvez nous envoyer un mail ou bien nous
                                    contacter par téléphone </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end video & FAQ -->
<!-- start event gallery -->

<!-- end event gallery -->
<!-- start contact us -->
<section class="contact-us mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 contact-us-block">
                <div class="border-line"></div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 py-5">
                        <h3 class="text-center font-weight-bold"></h3>
                        <div class="single-item">
                            <div class="text-center py-4">
                                <img src="{{ asset('frontEnd/assets/images/logo.png') }}"
                                    class="img-fluid m-auto d-block" alt="Student">
                                <h5 class="mt-3 font-weight-bold"></h5>
                                <h6>NE RATEZ PAS CETTE OCCASION ...

                                    ALLEZ INSCRIVEZ VOUS </h6>
                            </div>


                            <button class="slick-prev slick-arrow" aria-label="Previous" type="button">
                                Previous
                            </button>
                            <button class="slick-next slick-arrow" aria-label="Next" type="button">Next
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6 hidden-md">
                        <div class="joinus-content theme-orange mx-5" data-aos="zoom-in" data-aos-duration="550">
                            <p class="text-uppercase font-weight-bold mb-0">Rejoignez-nous</p>

                            <form>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">
                                        Adresse e-mail</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="
Entrer votre Email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">sujet</label>
                                    <select class="form-control" id="exampleFormControlSelect1">

                                        <option>test en Design</option>
                                        <option>test en mathématique</option>

                                        <option>test en Web Development</option>
                                        <option>test de langue </option>
                                        <option>Autre ... </option>
                                    </select>
                                </div>

                                <input type=button class="btn read-more text-white border-white"
                                    onclick=window.location.href="career.html" value=commencer />


                                <i class="fa fa-long-arrow-alt-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end contact us -->
<!-- start join us -->
<section class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="joinus-content theme-orange mx-5 hidden-lg" data-aos="zoom-in" data-aos-duration="550">
                    <p class="text-uppercase font-weight-bold mb-0">Join Us</p>
                    <h2 class="font-weight-bold mb-3">Talk With Our Expert</h2>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input type="text" class="form-control" id="exampleInputName1"
                                placeholder="Enter Your Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail2">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail2"
                                placeholder="Enter Your Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect3">Course</label>
                            <select class="form-control" id="exampleFormControlSelect3">
                                <option>Web Design</option>
                                <option>UX/UI Design</option>
                                <option>Business Management</option>
                                <option>Business Analysis</option>
                                <option>Web Development</option>
                            </select>
                        </div>
                        <button type="submit" class="btn read-more text-white border-white">Let's Start To Talk <i
                                class="fa fa-long-arrow-alt-right"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end join us -->
<!-- start blog -->
<section class="blog">
    <div class="container">
        <div class="sec-title text-center mb-3">

            <h2>QUELQUES AVANTAGES DE EVALNET
                <br>
            </h2>
            <div class="divider">
                <span class="fa fa-mortar-board"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="post mb-xl-0 mb-lg-0 mb-md-0 mb-5" data-aos="fade-up" data-aos-duration="550">
                    <img src="{{ asset('frontEnd/assets/images/blog1.jpg') }}" class="img-fluid"
                        alt="Blog">
                    <div class="post_inner p-3">

                        <h5 class="font-weight-bold">
                            EvalNet peut être utilisé sur n'importe quel ordinateur, tablette, smartphone ou avec
                            n'importe quelle imprimante / numérisation disponible...</h5>

                        <div class="comment d-flex">

                        </div>


                        <input type=button class="btn color-orange read-more mt-3"
                            onclick=window.location.href="faculties.html" value=Profiter />
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="post mb-xl-0 mb-lg-0 mb-md-0 mb-5" data-aos="fade-up" data-aos-duration="550">
                    <img src="{{ asset('frontEnd/assets/images/blog_2.jpg') }}"
                        class="img-fluid" alt="Blog">
                    <div class="post_inner p-3">

                        <h5 class="font-weight-bold">
                            Il n'y a rien à installer, rien à configurer. Ce créateur de quiz en ligne est
                            disponible, dès maintenant, sans installation, sans intégration</h5>


                        <input type=button class="btn color-orange read-more mt-3"
                            onclick=window.location.href="faculties.html" value=Profiter />
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="post " data-aos="fade-up" data-aos-duration="550">
                    <img src="{{ asset('frontEnd/assets/images/blog_3.jpg') }}"
                        class="img-fluid" alt="Blog">
                    <div class="post_inner p-3">

                        <h5 class="font-weight-bold">
                            <p>vous pouvez creer un examen qui contient tous les types de questions en ligne </p>


                            <input type=button class="btn color-orange read-more mt-3"
                                onclick=window.location.href="faculties.html" value=Profiter />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection