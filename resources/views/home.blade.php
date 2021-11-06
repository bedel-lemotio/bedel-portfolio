@extends('layouts.app')

@section('headSection')
@endsection

@section('main-content')

<!-- =====================================
==== Start Hero -->
<section class="hero section-padding" data-scroll-index="1">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="hero-img mb-md50">
                    <img src="frontend/img/bg1.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="content">
                    <h4 class="title title-left">Qui suis-je ?</h4>

                    <p>Je suis Bedel Lemotio, Développeur d'applications informatiques, spécialiste dans le développement Mobile.
                        Avec un parcours scolaire à succès dans le domaine de la programmation informatique,
                        je me suis intégré avec aisance dans le monde professionnel.
                        Passionné de la programmation informatique et du monde digital,
                        je travaille dur pour continuer à relever les défis et participer au développement de l'économie numérique.
                    </p>



                    <div class="social-icon">


                        <a href="https://github.com/bedel-lemotio">
                            <span class="icon"><i class="fab fa-github"></i></span>
                        </a>
                        <a href="https://www.linkedin.com/in/bedel-l-073613136/">
                            <span class="icon"><i class="fab fa-linkedin"></i></span>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero ====
======================================= -->


<!-- =====================================
==== Start Resume -->
<section class="resume bg-img" data-overlay-dark="8" data-background="frontend/img/background2.jpg"
         data-scroll-index="1">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="item mb-md50">
                    <span class="icon icon-pencil"></span><br>
                    <h5 class="title title-left">Education</h5>
                    <ul>
                        <li>
                            <h6>Institut Universitaire de la Côte</h6>

                            <p>2017 - 2018, Bac +4 Génie logiciel</p>
                        </li>
                        <li>
                            <h6>Collège communautaire du Nouveau-Brunswick (CCNB)</h6>

                            <p>2015 - 2017, Bac +2 Programmation et application mobile</p>
                        </li>
                        <li>
                            <h6>Lycée polyvalent</h6>

                            <p>2008 - 2015, BAC C</p>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="item mb-md50">
                    <span class="icon icon-briefcase"></span><br>
                    <h5 class="title title-left">Expériences</h5>
                    <ul>
                        <li>
                            <h6>Pethersolutions</h6>

                            <p>janvier 2020 - November 2021, Architecte IT</p>
                        </li>
                        <li>
                            <h6>Afrophinx</h6>

                            <p>septembre 2018 - Janvier 2020, Développeur Fullstack</p>
                        </li>
                        <li>
                            <h6>AgriApp</h6>

                            <p>mars 2019 - janvier 2020, Développeur android Lead</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="item skills">
                    <span class="icon icon-layers"></span><br>
                    <h5 class="title title-left">Mes compétences</h5>

                    <div class="skill">
                        <h6>Android <span>90%</span></h6>

                        <div class="skills-progress"><span data-value='90%'></span></div>
                    </div>
                    <div class="skill">
                        <h6>Flutter <span>90%</span></h6>

                        <div class="skills-progress"><span data-value='90%'></span></div>
                    </div>
                    <div class="skill">
                        <h6>IOS (Swift) <span>60%</span></h6>

                        <div class="skills-progress"><span data-value='60%'></span></div>
                    </div>
                    <div class="skill">
                        <h6>Firebase SDK <span>75%</span></h6>

                        <div class="skills-progress"><span data-value='75%'></span></div>
                    </div>
                    <div class="skill">
                        <h6>Laravel <span>80%</span></h6>

                        <div class="skills-progress"><span data-value='80%'></span></div>
                    </div>
                    <div class="skill">
                        <h6>Node Js <span>75%</span></h6>

                        <div class="skills-progress"><span data-value='75%'></span></div>
                    </div>
                    <div class="skill">
                        <h6>Angular <span>65%</span></h6>

                        <div class="skills-progress"><span data-value='65%'></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Resume ====
======================================= -->


<!-- =====================================
==== Start Services -->
<section class="services section-padding" data-scroll-index="2">
    <div class="container">
        <div class="row">

            <div class="section-head full-width">
                <h4 class="title">Mes services</h4>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="item mb-md50">
                    <span class="icon icon-mobile"></span>
                    <h6>Application android</h6>

                    <p>fusce quis volutpat porta, ut tincidunt eros est nec diam erat quis volutpat porta, neque massa,
                        ut tincidunt eros est nec diam</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 active bolt">
                <div class="item mb-md50">
                    <span class="icon icon-browser"></span>
                    <h6>Application web</h6>

                    <p>fusce quis volutpat porta, ut tincidunt eros est nec diam erat quis volutpat porta, neque massa,
                        ut tincidunt eros est nec diam</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="item mb-md50">
                    <span class="icon icon-global"></span>
                    <h6>Biométrie</h6>

                    <p>fusce quis volutpat porta, ut tincidunt eros est nec diam erat quis volutpat porta, neque massa,
                        ut tincidunt eros est nec diam</p>
                </div>
            </div>
            <div class="bord full-width"></div>
            <div class="col-lg-4 col-md-6">
                <div class="item mb-md50">
                    <span class="icon icon-shield"></span>
                    <h6>ERP</h6>

                    <p>fusce quis volutpat porta, ut tincidunt eros est nec diam erat quis volutpat porta, neque massa,
                        ut tincidunt eros est nec diam</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 active">
                <div class="item mb-sm50">
                    <span class="icon icon-newspaper"></span>
                    <h6>Formations</h6>

                    <p>fusce quis volutpat porta, ut tincidunt eros est nec diam erat quis volutpat porta, neque massa,
                        ut tincidunt eros est nec diam</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="item">
                    <span class="icon icon-laptop"></span>
                    <h6>Desktop</h6>

                    <p>fusce quis volutpat porta, ut tincidunt eros est nec diam erat quis volutpat porta, neque massa,
                        ut tincidunt eros est nec diam</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Services ====
======================================= -->


<!-- =====================================
==== Start Numbers -->
<div class="numbers bg-img" data-stellar-background-ratio="0.5" data-overlay-dark="8"
     data-background="frontend/img/background3.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="item mb-md50">
                    <span class="icon icon-happy"></span>

                    <h2 class="count">34</h2>

                    <p>Clients satisfaits</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="item mb-md50">
                    <span class="icon icon-layers"></span>

                    <h2 class="count">50</h2>

                    <p>Projets réalisés</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="item mb-sm50">
                    <span class="icon icon-profile-male"></span>

                    <h2 class="count">15</h2>

                    <p>Personnes formées</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="item">
                    <span class="icon icon-newspaper"></span>

                    <h2 class="count">150</h2>

                    <p>Nombre de formations</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Numbers ====
======================================= -->

<!-- =====================================
    	==== Start Portfolio -->
<section class="portfolio section-padding" data-scroll-index="3">
    <div class="container">
        <div class="row">

            <!-- Section-Head -->
            <div class="section-head full-width">
                <h4 class="title">Mes réalisations</h4>
            </div>

        </div>

        <div class="row justify-content-center">

            <!-- filter links -->
            <div class="filtering text-center mb-50">
                <span data-filter='*' class="active">Tout</span>
                <span data-filter='.brand'>Web</span>
                <span data-filter='.web'>Android</span>
                <span data-filter='.graphic'>Biométrie</span>
            </div>

            <!-- gallery -->
            <div class="gallery full-width">

                <!-- gallery item -->
                <div class="col-md-6 col-lg-4 items graphic">
                    <div class="item-img">
                        <img src="frontend/img/portfolio/1.jpg" alt="image">

                        <div class="item-img-overlay text-center valign">
                            <div class="overlay-info vertical-center full-width">
                                <h6>Pether Enrollemnt</h6>
                                <h5>une application pour gerer les ne application pour gerer les
                                    ne application pour gerer les ne application pour gerer les
                                    ne application pour gerer les ne application pour gerer les
                                </h5>
                            </div>
                            <a href="https://play.google.com/store/apps/details?id=com.lbb.petherenrolment" class="link">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- gallery item -->
                <div class="col-md-6 col-lg-4 items web">
                    <div class="item-img">
                        <img src="frontend/img/portfolio/2.jpg" alt="image">

                        <div class="item-img-overlay text-center valign">
                            <div class="overlay-info vertical-center full-width">
                                <h6>Danaid</h6>
                                <h5>Crearive Design</h5>
                            </div>
                            <a href="https://play.google.com/store/apps/details?id=com.danaid.danaidmobile" class="link">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- gallery item -->
                <div class="col-md-6 col-lg-4 items graphic">
                    <div class="item-img">
                        <img src="frontend/img/portfolio/3.jpg" alt="image">

                        <div class="item-img-overlay text-center valign">
                            <div class="overlay-info vertical-center full-width">
                                <h6>Glicoben</h6>
                                <h5>Crearive Design</h5>
                            </div>
                            <a href="frontend/img/portfolio/4.jpg" class="link">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- gallery item -->
                <div class="col-md-6 col-lg-4 items web">
                    <div class="item-img">
                        <img src="frontend/img/portfolio/4.jpg" alt="image">

                        <div class="item-img-overlay text-center valign">
                            <div class="overlay-info vertical-center full-width">
                                <h6>PetherInsure</h6>
                                <h5>Crearive Design</h5>
                            </div>
                            <a href="frontend/img/portfolio/4.jpg" class="link">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- gallery item -->
                <div class="col-md-6 col-lg-4 items brand">
                    <div class="item-img">
                        <img src="frontend/img/portfolio/5.jpg" alt="image">

                        <div class="item-img-overlay text-center valign">
                            <div class="overlay-info vertical-center full-width">
                                <h6>Design . Motion</h6>
                                <h5>Crearive Design</h5>
                            </div>
                            <a href="frontend/img/portfolio/5.jpg" class="link">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- gallery item -->
                <div class="col-md-6 col-lg-4 items brand">
                    <div class="item-img">
                        <img src="frontend/img/portfolio/6.jpg" alt="image">

                        <div class="item-img-overlay text-center valign">
                            <div class="overlay-info vertical-center full-width">
                                <h6>Design . Motion</h6>
                                <h5>Crearive Design</h5>
                            </div>
                            <a href="frontend/img/portfolio/6.jpg" class="link">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>



        </div>
    </div>
</section>
<!-- End Portfolio ====
======================================= -->


<!-- =====================================
==== Start Contact -->
<section class="contact section-padding bg-img" data-overlay-dark="8" data-background="img/b5.html"
         data-scroll-index="6">
    <div class="container">
        <div class="row">

            <!-- Section-Head -->
            <div class="section-head full-width mb-50">
                <h4 class="title">Contactez-moi</h4>
            </div>

            <form class="form full-width" id="contact-form" method="post" action="https://moud-portfolio.herokuapp.com/contact.php.html">
                <div class="messages"></div>

                <div class="controls">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input id="form_name" type="text" name="name" placeholder="Nom *" required="required">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <input id="form_email" type="email" name="email" placeholder="Adresse e-mail *"
                                       required="required">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input id="form_subject" type="text" name="objet" placeholder="Objet *">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea id="form_message" name="message" placeholder="Votre message *" rows="4"
                                          required="required"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                        <span class="buton buton-lg">
	                                    	<button type="submit" front="Envoyer" back="&#xf35d;"></button>
										</span>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <div class="info full-width">
                <div class="row">
                    <div class="col-md-4">
                        <div class="item mb-sm50">
                            <span class="icon icon-mobile"></span>

                            <div class="cont">
                                <h6>Téléphone</h6>

                                <p>+237 698 XX XX XX</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item mb-sm50">
                            <span class="icon icon-envelope"></span>

                            <div class="cont">
                                <h6>Email</h6>

                                <p>lemotiobedel@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item">
                            <span class="icon icon-map-pin"></span>

                            <div class="cont">
                                <h6>Adresse</h6>

                                <p>Logpom, Cameroun</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Contact ====
======================================= -->
@endsection



@section('footerSection')
@endsection
