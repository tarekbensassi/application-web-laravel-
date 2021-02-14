@extends('layouts.app')
@section('content')
<div class="sidenav" id="mySidenav">
    <a class="closebtn" href="javascript:void(0)" onclick="closeNav()">&times;</a>
    <div class="sidenav-links pt-4">
        <a href="{{url('/')}}">Acceuil</a>
        <button class="dropdown-btn">A propos
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="{{url('/contact')}}"> <i class="fa fa-caret-right mr-3"></i>Contacter Nous</a>

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
    <h1 class="font-weight-bold text-center">Contactez-nous</h1>
</section>
<!-- end inner-banner -->
<!-- start contact -->
<section class="contact-section">
    <div class="container">
        <div class="sec-title text-center mb-3" data-aos="fade-up" data-aos-duration="1000">
            <span class="title">
                Entrer en contact</span>


            <div class="divider">
                <span class="fa fa-mortar-board"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="contact-form p-5" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="border-line"></div>
                    <h3 class="font-weight-bold color-orange">Déposer un message</h3>
                    <form action="{{url('/sendContact')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName">Nom</label>
                            <input class="form-control" id="exampleInputName" placeholder="Votre nom" name="nom"
                                type="text">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Adresse e-mail</label>
                            <input class="form-control" id="exampleInputEmail1" placeholder="Entrez votre e-mail" type="email" name="email">
                            <small class="form-text text-muted" id="emailHelp">Nous ne partagerons jamais votre e-mail
                                avec quelqu'un d'autre.
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputNumber">
                                Numéro de téléphone</label>
                            <input class="form-control" id="exampleInputNumber" placeholder="Votre téléphone"
                                type="phone" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputMessage">Message</label>
                            <textarea class="form-control" name="message" id="message" cols="30" rows="10">Votre message ...</textarea>
                         
                        </div>
                      
                        <button class="btn theme-orange border-0 mt-4" type="submit">
                            Envoyer votre message</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 ml-minus">
                <div class="media p-3 align-items-center theme-blue mb-3" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="media-body text-left">
                        <h6 class="color-orange font-weight-bold mb-1">Address</h6>
                        <p class="mb-0">503 Old Buffalo Street
                            Northwest #205, New York-3087</p>
                    </div>
                    <img class="img-fluid contact-icon" data-aos="zoom-in" data-aos-duration="1050"
                        src="assets/images/icons/location.png" alt="Location">
                </div>
                <div class="media p-3 align-items-center theme-blue mb-3" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="media-body text-left">
                        <h6 class="color-orange font-weight-bold mb-1">Email</h6>
                        <p class="mb-0">@gmail.com</p>
                    </div>
                    <img class="img-fluid contact-icon" data-aos="zoom-in" data-aos-duration="1500"
                        src="assets/images/icons/mail.png" alt="Mail">
                </div>
                <div class="media p-3 align-items-center theme-blue" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="media-body text-left">
                        <h6 class="color-orange font-weight-bold mb-1">Contact Number</h6>
                        <p class="mb-0">+821 (2365) 456 90</p>
                    </div>
                    <img class="img-fluid contact-icon" data-aos="zoom-in" data-aos-duration="1050"
                        src="assets/images/icons/call.png" alt="Call">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end contact -->
<!-- start map -->
@endsection
