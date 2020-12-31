@extends('layouts.app')

@section('content')

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
               <img src="{{ asset('img/003.jpg') }}" alt="..."/>
            </div>
        </div>
    </div>
</section>

<section class="team-member-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title mt-5">
                    <h2>Bienvenue sur notre store</h2>
                    <p class="mt-3">Voici les entreprises actifs de la plateforme. Vous aussi dès à présent devenez une de nos entreprises en or en créant votre premiere boutique !</p>
                </div>
                <div class="mt-4 mb-4 text-center">
                    <button type="button" class="btn btn-info">Offres / Annonces</button>
                    <button type="button" class="btn btn-danger">Offres en Or</button>
                    <button type="button" class="btn btn-secondary">Entreprise a la une</button>
                </div>
            </div>
        </div>
    </div>
    <div class="member-item set-bg" data-setbg="{{ asset('img/00.png') }}">
        
        <div class="mi-text text-center">
            <h5>Canape</h5>
            <p>Prix: 150.000f</p>
            <span>Couleur blanche</span>
        </div>
    </div>
    <div class="member-item set-bg" data-setbg="{{ asset('img/ch.png') }}">
       
        <div class="mi-text text-center">
            <h5>Chemise blanche</h5>
            <p>Prix: 25.000f</p>
            <span>Taille: xxl</span>
        </div>
    </div>
    <div class="member-item set-bg" data-setbg="{{ asset('img/00.png') }}">
       
        <div class="mi-text text-center">
            <h5>Chaussure noires</h5>
            <p>Prix: 150.000f</p>
            <span>Taille: 44</span>
        </div>
    </div>
    <div class="member-item set-bg" data-setbg="{{ asset('img/ch.png') }}">
        
        <div class="mi-text text-center">
            <h5>Chemise blanche</h5>
            <p>Prix: 25.000f</p>
            <span>Taille: Xxl</span>
        </div>
    </div>
    <div class="member-item set-bg" data-setbg="{{ asset('img/00.png') }}">
        
        <div class="mi-text text-center">
            <h5>Canape</h5>
            <p>Prix: 150.000f</p>
            <span>Taille: 200mCare</span>
        </div>
    </div>
   
</section>

<section class="team-member-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title mt-5">
                    <h2>ACHAT FLASH</h2>
                    <p class="mt-3">Beneficie de la promo de fin d'annee et acheter les meilleurs articles !</p>
                </div>         
            </div>
        </div>
    </div>   
    <div class="container">
        <div class="row">
        <div class="col-lg-6 border border-light">
            <h3 style="color:red;">Super promos de fin d'annee</h3>
            <img class="float-right" src="{{ asset('img/2.jpg') }}" width="275px" alt="2"/>
            <p>Promo sur les chaussure</p>
            <h4>1000fcfa</h4>
            <p>Delais restant</p>
        </div>
       
        <div class="col-lg-6 border border-light">
            <h3 style="color:red;">Promos de fin d'annee des boutiques</h3>
            <img class="float-right" src="{{ asset('img/h3.jpg') }}" width="275px" alt="h3"/>
            <p>Promo sur les chemises</p>
            <h4>1500fcfa</h4>
            <p>Delais restant</p>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <img src="{{ asset('img/f.jpeg') }}" width="100%" class="img-fluid" alt="...">
            </div>
        </div>
    </div>
</section>


<section class="home-about-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="ha-pic mt-5">
                    <img src="{{ asset('img/005.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ha-text">
                    <h2>A propos de Fasobizness</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in lacus a velit pretium finibus. In vitae dolor tellus. Aenean a mi elit. Donec suscipit efficitur lectus at condimentum. Ut non ante non eros hendrerit egestas. Etiam sit amet diam elementum, luctus turpis vel, consectetur enim. Curabitur ante mi, mollis non fringilla at, tincidunt ut lectus.</p>
                    <ul>
                        <li><i class="fas fa-check"></i> Plus de 100 annonces</li>
                        <li><i class="fas fa-check"></i> Plus de 500 articles disponibles</li>
                        <li><i class="fas fa-check"></i> Des boutiques en lignes</li>
                    </ul>
                    <a href="#" class="ha-btn">Voir les offres et annonces</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="team-member-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Nos offres et annonces</h2>
                    <p>Voici les entreprises actifs de la plateforme. Vous aussi dès à présent devenez une de nos entreprises en or en créant votre premiere boutique !</p>
                </div>
            </div>
        </div>
    </div>
    <div class="member-item set-bg" data-setbg="{{ asset('img/00.png') }}">
        
        <div class="mi-text text-center">
            <h5>Canape</h5>
            <p>Prix: 150.000f</p>
            <span>Couleur blanche</span>
        </div>
    </div>
    <div class="member-item set-bg" data-setbg="{{ asset('img/ch.png') }}">
       
        <div class="mi-text text-center">
            <h5>Chemise blanche</h5>
            <p>Prix: 25.000f</p>
            <span>Taille: xxl</span>
        </div>
    </div>
    <div class="member-item set-bg" data-setbg="{{ asset('img/00.png') }}">
       
        <div class="mi-text text-center">
            <h5>Chaussure noires</h5>
            <p>Prix: 150.000f</p>
            <span>Taille: 44</span>
        </div>
    </div>
    <div class="member-item set-bg" data-setbg="{{ asset('img/ch.png') }}">
        
        <div class="mi-text text-center">
            <h5>Chemise blanche</h5>
            <p>Prix: 25.000f</p>
            <span>Taille: Xxl</span>
        </div>
    </div>
    <div class="member-item set-bg" data-setbg="{{ asset('img/00.png') }}">
        
        <div class="mi-text text-center">
            <h5>Canape</h5>
            <p>Prix: 150.000f</p>
            <span>Taille: 200mCare</span>
        </div>
    </div>
</section>

<section class="latest-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Entreprises a la une</h2>
                    <p>Decouvrez nos differentes entreprises a la une de cette fin d'annee.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="latest-item set-bg" data-setbg="{{ asset('img/keo.jpg') }}">
                    <!-- <div class="li-tag">19,99</div> -->
                    <div class="li-text">
                        <h5><a href="#">Keolid</a></h5>
                        <span><i class="fa fas-user"></i> Par <b>keolid</b></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="latest-item set-bg" data-setbg="{{ asset('img/baf.jfif') }}">
                    <!-- <div class="li-tag">19,99</div> -->
                    <div class="li-text">
                        <h5><a href="#">bafa tech</a></h5>
                        <span><i class="fa fas-user"></i> Par <b>bafa tech</b></span>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<section class="newslatter-section mb-5 pb-5">
    <div class="container">
        <div class="newslatter-inner set-bg" data-setbg="img/newslatter-bg.jpg">
            <div class="ni-text">
                <h3>S'abonner à notre newsletter</h3>
                <p>Restez informé des derniers annonces mis en ligne !</p>
                <a href="#"><h3>Telecharger l'application <br/>ICI</h3></a>
            </div>
            <form action="#" method="POST" class="ni-form">
                <input type="text" placeholder="Votre adresse email" name="email">
                <button type="submit">M'abonner</button>
            </form>
        </div>
    </div>
</section>

@endsection