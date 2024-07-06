@extends('Layouts.layout')
@section('content')

<!-- Banner Section -->
    <div class="banner-area-two d-none d-md-block">
    <div class="container-fluid">
    <div class="container">
    <div class="row align-items-center">
    <div class="col-lg-5 col-md-12">
    <div class="banner-content-two">
    <span>HR HUB</span>
    <h1>HR HUB <b>Shaping</b>Tomorrow's Leaders</h1>
    <p>"Façonnons l'avenir RH avec HR HUB : Expertise novatrice et digitalisation au service de vos défis RH !"</p>
    <div class="banner-content-btn">
    <a href="{{route('about')}}" class="default-btn">
    Plus d'info
    <i class="bx bx-plus"></i>
    </a>
    </div>
    </div>
    </div>
    <div class="col-lg-7 col-md-12">
    <div class="banner-img-2">
    <img src="{{asset('assets/img/home-two/home-two-img.png')}}" class="img-fluid" alt="Image Banner Hr Hub">
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
<!-- End Banner Section -->

<!-- About Us Section -->
    <div class="about-area pt-100">
    <div class="container">
    <div class="row">
    <div class="col-lg-6">
    <div class="about-img">
    <img src="{{asset('assets/img/about/about-img1.png')}}" alt="Images about us">
    </div>
    </div>
    <div class="col-lg-6">
    <div class="about-content">
    <div class="section-title">
    <span class="sp-after" style="color:#201436">Qui Somme Nous ?</span>
    <h2 class="h2-color" style="color:#4F2683">Innover les RH <b>Numériser Votre Entreprise</b></h2>
    </div>
    <p>
    HR HUB est un cabinet RH novateur, focalisé sur la digitalisation. Nous apportons une nouvelle perspective aux défis RH d’aujourd’hui en combinant notre expertise novatrice avec les puissantes possibilités de la digitalisation. Prêts à façonner ensemble l’avenir des ressources humaines.
    </p>
    <div class="about-btn">
    <a href="{{route('about')}}" class="default-btn">
    Plus d'info
    <i class="bx bx-plus"></i>
    </a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
<!-- End About Us Section -->

<!-- service -->
    <div class="service-another">
    <div class="container">
    <div class="section-title text-center">
    <span class="sp-before sp-after" style="color:#4F2683">Nos Services</span>
    </div>
    <div class="row pt-45">
<!-- service 1 -->
    <div class="col-lg-4 col-md-6">
    <div class="service-another-card">
    <a><img src="{{asset('assets/img/icon1.png')}}" width="80px"  alt="Icon service 1"/></a>
    <h3><a>HR TRAINING et HR E-LEARNING</a></h3>
    <p > Des programmes de développement des compétences sur mesure, alignés sur les objectifs de nos clients</p>
    </div>
    </div>
<!-- end service 1 -->

<!-- service 2 -->
    <div class="col-lg-4 col-md-6">
    <div class="service-another-card" style="background-color:purple">
    <a><img src="{{asset('assets/img/icon2.png')}}" width="80px" alt="Icon service 2" /></a>
    <h3><a>HR RECRUTEMENT</a></h3>
    <p>Une équipe expérimentée dédiée à trouver les meilleurs profils en adéquation avec les besoins et la culture de nos clients.</p>
    </div>
    </div>
<!-- end service 2 -->

<!-- service 3 -->
    <div class="col-lg-4 col-md-6">
    <div class="service-another-card">
    <a><img src="{{asset('assets/img/icon3.png')}}" width="80px" alt="Icon service 3" /></a>
    <h3><a>HR EVENTS</a></h3>
    <p>C'est bien plus qu'un service, c'est une expérience enrichissante. Team building, ateliers parents-enfants, Conférences Inspirantes chez HR HUB</p>
    </div>
    </div>
<!-- end service 3 -->
    </div>
    </div>
    </div>
    <!-- end_service -->

    <!-- Transformation Digitale RH -->
    <div class="service-area-three pt-100">
    <div class="container">
    <div class="section-title text-center">
    <h2 style="color:#4F2683">Transformation Digitale RH</h2>
    <p style="color:#4F2683">
    La transformation digitale a révolutionné la manière dont les entreprises gèrent leurs ressources humaines. Chez HR HUB, nous sommes à l’avant-garde de cette évolution, en offrant des solutions de transformation digitale RH qui réinventent la gestion traditionnelle des ressources humaines.
    </p>
    </div>
    </div>
    <br>

     <!-- Service Technologie RH -->
     <div class="about-area-two mt-5 ">
    <div class="container-fluid mt-5">
    <div class="container-max">
    <div class="row align-items-center">
    <div class="col-lg-6">
    <div class="about-img-2" id="service_img">
    <img src="{{asset('assets/img/about/about-img2.png')}}" width="450px" alt>
    </div>
    </div>
    <div class="col-lg-6" id="section_about">
    <div class="about-content-two">
    <div class="section-title">
    <span class="sp-before sp-after" style="color:#4F2683">Nos Services</span>
    <h2 style="color:#4F2683">Technologie RH: Notre Voie Innovante</h2>
    <p>Mise en place de plateformes pour le suivi des performances, le développement des compétences et la planification de la relève.</p>
    </div>
    <p></p>
    <div class="row">
    <div class="col-lg-6 col-sm-6 pr-0">
    <div class="about-list">
    <i class="bx bx-check"></i>
    <span>01 Systèmes de Gestion des Talents</span>
    </div>
    </div>
    <div class="col-lg-6 col-sm-6 pr-0">
    <div class="about-list">
    <i class="bx bx-check"></i>
    <span>02 Automatisation des Processus</span>
    </div>
    </div>
    <div class="col-lg-6 col-sm-6 pr-0">
    <div class="about-list">
    <i class="bx bx-check"></i>
    <span>03 Analyse de Données RH</span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>    
    <!-- End Service Technologie RH -->

    <!-- approche -->
    
   <div class="service-widget-area pt-50">
   <div class="container">
   <div class="section-title text-center">
   <span class="sp-before sp-after">Notre Approche</span>
   <h2 class="h2-color">Technologie RH pour <b>l'Excellence Opérationnelle</b></h2>
   <p>Notre équipe expérimentée comprend l’importance cruciale de la technologie dans l’optimisation des processus RH. Grâce à des solutions de pointe, nous aidons les entreprises à:</p>
   </div>
   <div class="row pt-45">
   <div class="col-lg-3 col-md-6">
   <div class="service-card">
   <a href="#">
   <img src="{{asset('assets/img/service/icon1_1.png')}}" alt="Images">
   </a>
   <h3><a href="#" style="color:#4F2683">Productivité Optimale</a></h3>
   <p>
   Automatisation libère temps, maximise valeur, accroît efficacité opérationnelle
   </p>
   <div class="service-card-shape">
   <img src="{{asset('assets/img/service/service-shape.png')}}" alt="Images">
   </div>
   </div>
   </div>
   <div class="col-lg-3 col-md-6">
   <div class="service-card">
   <a href="#">
   <img src="{{asset('assets/img/service/icon1_2.png')}}" alt="Images">
   </a>
   <h3><a href="#" style="color:#4F2683">Analyse Instantanée</a></h3>
   <p>
   Centraliser les données RH pour une prise de décision plus éclairée basée sur des informations en temps réel.
   </p>
   <div class="service-card-shape">
   <img src="{{asset('assets/img/service/service-shape.png')}}" alt="Images">
   </div>
   </div>
   </div>
   <div class="col-lg-3 col-md-6">
   <div class="service-card">
   <a href="#">
   <img src="{{asset('assets/img/service/icon1_3.png')}}" alt="Images">
   </a>
   <h3><a href="#" style="color:#4F2683">Innovation Simplice</a></h3>
   <p>
   Améliorer l’expérience employé en offrant des outils conviviaux et accessibles.
   </p>
   <div class="service-card-shape">
   <img src="{{asset('assets/img/service/service-shape.png')}}" alt="Images">
   </div>
   </div>
   </div>
   <div class="col-lg-3 col-md-6">
   <div class="service-card">
   <a href="#">
   <img src="{{asset('assets/img/service/icon1_4.png')}}" alt="Images">
   </a>
   <h3><a href="#" style="color:#4F2683">Optimisation Stratégique</a></h3>
   <p>
   Intégration analyses clés identifie tendances et opportunités d'amélioration pour croissance stratégique.
   </p>
   <div class="service-card-shape">
   <img src="{{asset('assets/img/service/service-shape.png')}}" alt="Images">
   </div>
   </div>
   </div>
   </div>
   </div>
   </div> 

   <h3 class="text-center mt-5" style="color:#201436"><a href="#" style="color:#201436">Ils Nous Font Confiance</a></h3>
   <div class="brand-logo-area  pt-100">
   <div class="container-fluid">
   <div class="container-max">
   <div class="brand-logo-slider owl-carousel owl-theme">
   <div class="brand-logo-item">
   <img src="{{asset('assets/img/brand/logo2.png')}}" class="brand-logo1" alt="Images">
   </div>
   <div class="brand-logo-item">
   <img src="{{asset('assets/img/brand/logo15.png')}}" class="brand-logo1" alt="Images">
   </div>
   <div class="brand-logo-item">
   <img src="{{asset('assets/img/brand/logo3.png')}}" class="brand-logo1" alt="Images">
   </div>
   <div class="brand-logo-item">
   <img src="{{asset('assets/img/brand/logo1.png')}}"  class="brand-logo1" alt="Images">
   </div>
   <div class="brand-logo-item">
   <img src="{{asset('assets/img/brand/logo4.png')}}" class="brand-logo1" alt="Images">
   </div>
   <div class="brand-logo-item">
   <img src="{{asset('assets/img/brand/logo12.png')}}"  class="brand-logo12" alt="Images">
   </div>
   <div class="brand-logo-item">
   <img src="{{asset('assets/img/brand/logo5.png')}}" class="brand-logo1" alt="Images">
   </div>
   <div class="brand-logo-item">
   <img src="{{asset('assets/img/brand/logo17.jpeg')}}" class="brand-logo1" alt="Images">
   </div>
   <div class="brand-logo-item" >
   <img src="{{asset('assets/img/brand/logo6.png')}}" class="brand-logo1" alt="Images">
   </div>
   <div class="brand-logo-item">
   <img src="{{asset('assets/img/brand/logo7.png')}}" class="brand-logo1" alt="Images">
   </div>
   <div class="brand-logo-item">
   <img src="{{asset('assets/img/brand/logo8.png')}}" class="brand-logo1" alt="Images">
   </div>
   <div class="brand-logo-item">
   <img src="{{asset('assets/img/brand/logo16.png')}}" class="brand-logo1" alt="Images">
   </div>
   <div class="brand-logo-item">
   <img src="{{asset('assets/img/brand/logo14.png')}}" class="brand-logo1" alt="Images">
   </div>
   <div class="brand-logo-item">
   <img src="{{asset('assets/img/brand/logo9.png')}}" class="brand-logo1" alt="Images">
   </div>
   <div class="brand-logo-item">
   <img src="{{asset('assets/img/brand/logo11.png')}}" class="brand-logo1" alt="Images">
   </div>
   <div class="brand-logo-item">
   <img src="{{asset('assets/img/brand/logo13.png')}}" class="brand-logo1" alt="Images">
   </div>
   </div>
   </div>
   </div>
   </div>
   
<!-- avantages !!! -->
   <div class="mission-area ">
   <div class="container-fluid">
   <div class="row align-items-center">
   <div class="col-lg-6">
   <div class="mission-content">
   <div class="section-title">
   <h2 class="h2-color2" style="color:#4F2683">Avantages</h2>
   <p class="para ml-5" style="color:#4F2683">
   La transformation digitale RH apporte des avantages significatifs : des processus plus efficaces, une prise de décision éclairée et une expérience employé améliorée. Nous travaillons main dans la main avec nos clients pour concevoir des solutions sur mesure, adaptées à leurs besoins spécifiques.
   </p>
   </div>
   </div>
   </div>
   <div class="col-lg-6">
   <div class="mission-img mt-5 ml-5">
   <img src="{{asset('assets/img/mission-img.png')}}" width="330px" alt="Images">
   </div>
   </div>
   </div>
   </div>
   <div class="mission-shape">
   <div class="shape1">
   <img src="{{asset('assets/img/shape/shape13.png')}}" alt="Images">
   </div>
   <div class="shape2">
   <img src="{{asset('assets/img/shape/shape11.png')}}" alt="Images">
   </div>
   <div class="shape3">
   <img src="{{asset('assets/img/shape/shape12.png')}}" alt="Images">
   </div>
   <div class="shape4">
   <img src="{{asset('assets/img/shape/shape9.png')}}" alt="Images">
   </div>
   </div>
   </div>
<!-- end_avantages -->
    
   <!-- avantages !!! -->
   <div class="mission-area mt-3">
   <div class="container-fluid">
   <div class="row align-items-center">
   <div class="col-lg-6">
   <div class="mission-content">
   <div class="section-title">
   <h2 class="h2-color2" style="color:#4F2683">Notre présence internationale</h2>
   <p style="color:#4F2683">
   Nous consolidons notre présence internationale avec un vaste réseau de partenaires et intervenons dans plusieurs pays de la zone MEA, soutenant divers acteurs multi-secteurs dans le renforcement et le développement de leurs équipes dirigeantes et cadres supérieurs.
   </p>
   </div>
   </div>
   </div>
   <div class="col-lg-6">
   <div class="mission-img">
   <img src="{{asset('assets/img/map2.png')}}" id="img_map" alt="Images">
   </div>
   </div>
   </div>
   </div>
   <div class="mission-shape">
   <div class="shape1">
   <img src="{{asset('assets/img/shape/shape13.png')}}" alt="Images">
   </div>
   <div class="shape2">
   <img src="{{asset('assets/img/shape/shape11.png')}}" alt="Images">
   </div>
   <div class="shape3">
   <img src="{{asset('assets/img/shape/shape12.png')}}" alt="Images">
   </div>
   <div class="shape4">
   <img src="{{asset('assets/img/shape/shape9.png')}}" alt="Images">
   </div>
   </div>
   </div>
<!-- end_avantages -->
    
   <div class="data-table-area mt-3">
   <div class="container">
   <div class="row">
   <div class="col-lg-6">
   <div class="data-table-content">
   <h2>Sortalent : Simplifiez et Optimisez Vos Recrutements</h2>
   <a href="https://sortalent.com/" class="default-btn">Get started <i class="bx bx-plus"></i></a>
   </div>
   </div>
   <div class="col-lg-6">
   <div class="data-table-img">
   <img src="{{asset('assets/img/data-table-img1.png')}}" width="800px" alt="Images">
   </div>
   </div>
   </div>
   </div>
   </div>
   
   @endsection