
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
    <!-- start inner-banner -->
    <section class="inner-banner">
        <h1 class="font-weight-bold text-center">Offres</h1>
    </section>
    <!-- end inner-banner -->
    <!-- start faculties -->
    <section class="counter-section">
        <div class="container">
            <div class="counter-box">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter" data-aos="fade-up" data-aos-duration="550">
                            <div class="border-line"></div>
                            <h2> <center> GRATUIT </center></h2>
							7jrs
							<h1>0DT</h1>
							
                           <li> <h5 class="count-text mt-2">Nombre illimité de questions</h5><li>
							 <h5 class="count-text mt-2">Nombre illimité des candidats</h5>
							    <li><h5 class="count-text mt-2">Consultation des resultats </h5></li>
                            <h2 class="timer count-title count-number"> 
							<input type=button  class="timer count-title count-number" onclick=window.location.href="career.html" value= Inscrire />
							
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter mt-xl-0 mt-lg-0 mt-md-0 mt-sm-0 mt-3" data-aos="fade-up" data-aos-duration="550">
                            <div class="border-line"></div>
 <h2> <center>STARTUP </center></h2>
							15  jours
							<h1>50 DT</h1>
							
                            <li><h5 class="count-text mt-2">seulement 10 questions</h5></li>
							<li><h5 class="count-text mt-2">seulement 10  candidats</h5></li>
							<li><h5 class="count-text mt-2">Consultation des résultats </h5></li>
							
							<h2 class="timer count-title count-number"> 
                           <input type=button  class="timer count-title count-number" onclick=window.location.href="career.html" value= Inscrire />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter mt-xl-0 mt-lg-0 mt-md-4 mt-sm-3 mt-3" data-aos="fade-up" data-aos-duration="550">
                            <div class="border-line"></div>
                           <h2> <center>PRENIUM </center></h2>
						20  jours
							<h1>75 DT</h1>
							
                            <li><h5 class="count-text mt-2">15 questions</h5></li>
							<li><h5 class="count-text mt-2">15 candidats</h5></li>
							<li><h5 class="count-text mt-2">Consultation des résultats</h5></li>
							<li><h5 class="count-text mt-2">Annulation de la formule à tout moment</h5></li>
							
							
                            <h2 class="timer count-title count-number"> 
                           <input type=button  class="timer count-title count-number" onclick=window.location.href="career.html" value= Inscrire />
						   
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter mt-xl-0 mt-lg-0 mt-md-4 mt-sm-3 mt-3" data-aos="fade-up" data-aos-duration="550">
                            <div class="border-line"></div>
                           <h2> <center>PRO </center></h2>
						              30  jours
							<h1>100 DT</h1>
							
                           <li> <h5 class="count-text mt-2">15 questions</h5></li>
							<li><h5 class="count-text mt-2">15 candidats</h5></li>
							<li><h5 class="count-text mt-2">Consultation des résultats</h5></li>
							<li><h5 class="count-text mt-2">obtenir une cerficat</h5></li>
						
							
                            <h2 class="timer count-title count-number"> 
                           <input type=button  class="timer count-title count-number" onclick=window.location.href="career.html" value= Inscrire />
						   
                        
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    @endsection
    
   
    