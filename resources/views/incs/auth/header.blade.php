<div class="container">
    <div class="col-lg-3">
    <a href="#"><img src="{{ asset('img/logo.jpg') }}" width="75px" alt="logo"/></a>
    </div>

    <div class="col-lg-6 mt-5">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" rel="stylesheet"/>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>

        <div class="">
            <form action="#" method="get" id="searchForm" class="input-group">
                
                <div class="input-group-btn search-panel">
                    <select name="search_param" id="search_param" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <option value="all">Tous</option>
                        <option value="#">Offres / Annonces</option>
                        <option value="#">Entreprises a la une</option>
                        <option value="studentcode">Offre en Or</option>
                    </select>
                </div>
                <input type="text" class="form-control" name="x" placeholder="rechercher une categorie">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                    <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </form><!-- end form -->     
                     
        </div><!-- end col-md-9 -->
    </div>

    <div class="col-lg-3 mt-5">
    <form action="#" method="get" id="searchForm" class="input-group">
                
                <div class="input-group-btn search-panel">
                    <select name="search_param" id="search_param" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <option value="all">Villes</option>
                        <option value="#">Ouagadougou</option>
                        <option value="#">Bobo Dioulasso</option>
                        <option value="">Koudougou</option>
                        <option value="#">Ouahigouya</option>
                        <option value="#">Fada N'Gourma</option>
                        <option value="#">Po</option>
                        <option value="">Manga</option>
                    </select>
                </div>
            </form><!-- end form --> 
    </div>

</div>
<nav class="mainmenu mobile-menu">
    <ul>
        <li class="active">
            <a href="#">
                <i class="fas fa-home"></i>
                Accueil
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-ellipsis-v"></i>
                Boutique en ligne
            </a>
            <ul class="dropdown px-2 py-3">
                <li>
                    <a href="#">
                    Catégorie
                    </a>
                </li>
                <li>
                    <a href="#">
                    Offres et annonces
                    </a>
                </li>
                <li>
                    <a href="#">
                    Promouvoir mes annonces
                    </a>
                </li>
                <li>
                    <a href="#">
                    Infos pratiques
                    </a>
                </li>
                <li>
                    <a href="#">
                    Offres en Or
                    </a>
                </li>
            </ul>
        </li>
        <li>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-chalkboard-teacher"></i>
                Publier et Modifier Annonces
            </a>
            <ul class="dropdown">
                <li><p class="px-2">Voir les offres / annonces.</p></li>
                <li><p class="px-2">Publier / Modifier une annonce.</p></li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-book"></i>
                Mes annonces
            </a>
            <ul class="dropdown">
                <li>
                    <div class="d-flex  ml-2 my-3">
                        <img class="avatar border-rounded" src=""/>
                        <div class="user-infos">
                            <a href="#"><small>Titre de l'article</small></a>
                        </div>
                    </div>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-shopping-cart"></i>
                <span class="badge badge-pill badge-danger">1</span>
            </a>
            <ul class="dropdown px-2 py-2">
                <li>
                    <div class="d-flex">
                        <img class="avatar border-rounded" src=""/>
                        <div class="user-infos ml-3">
                            <small>Titre de l'article</small>
                            <p class="text-danger">2.999 fcfa</p>
                        </div>
                    </div>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-heart"></i>
                <span class="badge badge-pill badge-danger">1</span>
            </a>
            <ul class="dropdown px-2 py-2"> 
                <li>
                    <div class="d-flex">
                        <img class="avatar border-rounded" src=""/>
                        <div class="user-infos ml-3">
                            <small>Titre de l'article</small>
                            <p class="text-danger">1.999 fcfa</p>
                        </div>
                    </div>
                </li>
            </ul>
        </li>
        <li>
            <a class="nav-link" href="#">
               <img class="avatar-profile border-rounded rounded-circle" src="{{ asset('img/profile.png') }}"/>
            </a>
            <ul class="dropdown">
                <li>
                    <div class="d-flex justify-content-between py-3 px-3">
                        <div class="user-infos">
                            <p>{{Auth::user()->name}}</p>
                            <small>{{Auth::user()->email}}</small>
                            <hr>
                            <a href="#"><p>Profil-Compte</p></a>
                            <a href="#"><p>Suggestions</p></a>
                            <a href="#"><p>Discussion par Tchat / Whatsapp</p></a>
                        </div>
                    </div>
                </li>
                <div class="dropdown-divider"></div>
                <li><a href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i> Déconnexion</a></li>
            </ul>
        </li>
    </ul>
</nav>
