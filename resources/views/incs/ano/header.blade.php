{{$annonce}}
<div class="col-lg-12">
    <a href="#"><img src="{{ asset('img/f1.png') }}" height="100%" alt="banner"/></a>
</div>

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
<div class="">
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
                Offres/Annonces
            </a>
        </li>
        <li class="mx-5 px-5">
        </li>
        <li>
            <a href="#">
                <i class="fas fa-chalkboard-teacher"></i>
                Boutique en ligne
            </a>
            <ul class="dropdown">
                <li><p class="px-2">Creer votre boutique.</p></li>
            </ul>
        </li>
    </ul>
</nav>
<a href="{{ route('login') }}" class="primary-btn top-btn"><i class="fas fa-user"></i> Connexion</a>
