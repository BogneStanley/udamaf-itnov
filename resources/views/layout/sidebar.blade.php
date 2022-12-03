<nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled ">
</nav>
<nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled  rm_scrollbar " id="sidebar">
    <nav class="navbar default-layout col-lg-12 col-12 p-0 d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
            <a class="navbar-brand brand-logo" href="{{ url('/') }}">
                <span style="color: white; font-weight: 500">UDAMAF</span> </a>
            <a class="navbar-brand brand-logo-mini" href="{{ url('/') }}">
                <span style="color: white;">U</span> </a>
        </div>
    </nav>
    <ul class="nav position-relative">
        <li class="nav-item">
            <span class="nav-link">
                <span style="color: white; font-weight: 400" class="menu-title">Menu</span>
            </span>
        </li>
        <li class="nav-item {{ active_class(['admin']) }}">
            <a class="nav-link" href="{{ url('admin') }}">
                <i class="menu-icon mdi mdi-television"></i>
                <span class="menu-title">Accueil</span>
            </a>
        </li>
        <li class="nav-item {{ active_class(['eleves/*']) }}">
            <a class="nav-link" data-toggle="collapse" href="#eleves" aria-expanded="{{ is_active_route(['eleves']) }}"
                aria-controls="eleves">
                <i class="menu-icon mdi mdi-dna"></i>
                <span class="menu-title">CMU Elèves</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ show_class(['eleves/*']) }}" id="eleves">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item {{ active_class(['eleves/list']) }}">
                        <a class="nav-link" href="{{ url('/eleves/list') }}">Liste</a>
                    </li>
                    <li class="nav-item {{ active_class(['eleves/add']) }}">
                        <a class="nav-link" href="{{ url('/eleves/add') }}">Nouveau</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item {{ active_class(['cmu_dara/*']) }}">
            <a class="nav-link" data-toggle="collapse" href="#cmu_dara"
                aria-expanded="{{ is_active_route(['cmu_dara/*']) }}" aria-controls="cmu_dara">
                <i class="menu-icon mdi mdi-dna"></i>
                <span class="menu-title">CMU Dara</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ show_class(['cmu_dara/*']) }}" id="cmu_dara">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item {{ active_class(['cmu_dara/list']) }}">
                        <a class="nav-link" href="{{ url('/cmu_dara/list') }}">Liste</a>
                    </li>
                    <li class="nav-item {{ active_class(['cmu_dara/add']) }}">
                        <a class="nav-link" href="{{ url('/cmu_dara/add') }}">Nouveau</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item {{ active_class(['cmu_classique/*']) }}">
            <a class="nav-link" data-toggle="collapse" href="#cmu_classique"
                aria-expanded="{{ is_active_route(['cmu_classique/*']) }}" aria-controls="cmu_classique">
                <i class="menu-icon mdi mdi-dna"></i>
                <span class="menu-title">CMU Classique</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ show_class(['cmu_classique/*']) }}" id="cmu_classique">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item {{ active_class(['cmu_classique/list']) }}">
                        <a class="nav-link" href="{{ url('/cmu_classique/list') }}">Liste</a>
                    </li>
                    <li class="nav-item {{ active_class(['cmu_classique/add']) }}">
                        <a class="nav-link" href="{{ url('/cmu_classique/add') }}">Nouveau</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item {{ active_class(['securite_familiale/*']) }}">
            <a class="nav-link" data-toggle="collapse" href="#securite_familiale"
                aria-expanded="{{ is_active_route(['securite_familiale/*']) }}" aria-controls="securite_familiale">
                <i class="menu-icon mdi mdi-dna"></i>
                <span class="menu-title">Sécurié Familiale</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ show_class(['securite_familiale/*']) }}" id="securite_familiale">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item {{ active_class(['securite_familiale/list']) }}">
                        <a class="nav-link" href="{{ url('/securite_familiale/list') }}">Liste</a>
                    </li>
                    <li class="nav-item {{ active_class(['securite_familiale/add']) }}">
                        <a class="nav-link" href="{{ url('/securite_familiale/add') }}">Nouveau</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item ">
            <span class="nav-link">
                <span style="color: white; font-weight: 400" class="menu-title">Rapports</span>
            </span>
        </li>
        <li class="nav-item {{ active_class(['rapports/*']) }}">
            <a class="nav-link" data-toggle="collapse" href="#rapports"
                aria-expanded="{{ is_active_route(['rapports/*']) }}" aria-controls="rapports">
                <i class="menu-icon mdi mdi-dna"></i>
                <span class="menu-title">Rapports</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ show_class(['rapports/*']) }}" id="rapports">
                <ul class="nav flex-column sub-menu">
                    {{-- <li class="nav-item {{ active_class(['rapports/buttons']) }}">
                        <a class="nav-link" href="{{ url('/rapports/buttons') }}">Buttons</a>
                    </li>
                    <li class="nav-item {{ active_class(['rapports/dropdowns']) }}">
                        <a class="nav-link" href="{{ url('/rapports/dropdowns') }}">Dropdowns</a>
                    </li>
                    <li class="nav-item {{ active_class(['rapports/typography']) }}">
                        <a class="nav-link" href="{{ url('/rapports/typography') }}">Typography</a>
                    </li> --}}
                </ul>
            </div>
        </li>
        @if (auth()->user()->role->role == 'superadmin')
            <li class="nav-item">
                <span class="nav-link">
                    <span style="color: white; font-weight: 400" class="menu-title">Utilisateurs</span>
                </span>
            </li>
            <li class="nav-item {{ active_class(['gestion_utilisateur/*']) }}">
                <a class="nav-link" data-toggle="collapse" href="#gestion_utilisateur"
                    aria-expanded="{{ is_active_route(['gestion_utilisateur/*']) }}"
                    aria-controls="gestion_utilisateur">
                    <i class="menu-icon mdi mdi-dna"></i>
                    <span class="menu-title">Gestion Utilisateurs</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse {{ show_class(['gestion_utilisateur/*']) }}" id="gestion_utilisateur">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item {{ active_class(['gestion_utilisateur/list']) }}">
                            <a class="nav-link" href="{{ url('/gestion_utilisateur/list') }}">Liste</a>
                        </li>
                        <li class="nav-item {{ active_class(['gestion_utilisateur/add']) }}">
                            <a class="nav-link" href="{{ url('/gestion_utilisateur/add') }}">Nouveau</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item {{ active_class(['gestion_role/*']) }}">
                <a class="nav-link" data-toggle="collapse" href="#gestion_role"
                    aria-expanded="{{ is_active_route(['gestion_role/*']) }}" aria-controls="gestion_role">
                    <i class="menu-icon mdi mdi-dna"></i>
                    <span class="menu-title">Gestion Role</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse {{ show_class(['gestion_role/*']) }}" id="gestion_role">
                    {{-- <ul class="nav flex-column sub-menu">
                    <li class="nav-item {{ active_class(['gestion_role/buttons']) }}">
                        <a class="nav-link" href="{{ url('/gestion_role/buttons') }}">Buttons</a>
                    </li>
                    <li class="nav-item {{ active_class(['gestion_role/dropdowns']) }}">
                        <a class="nav-link" href="{{ url('/gestion_role/dropdowns') }}">Dropdowns</a>
                    </li>
                    <li class="nav-item {{ active_class(['gestion_role/typography']) }}">
                        <a class="nav-link" href="{{ url('/gestion_role/typography') }}">Typography</a>
                    </li>
                </ul> --}}
                </div>
            </li>
            <li class="nav-item {{ active_class(['gestion_corbeille/*']) }}">
                <a class="nav-link" data-toggle="collapse" href="#gestion_corbeille"
                    aria-expanded="{{ is_active_route(['gestion_corbeille/*']) }}" aria-controls="gestion_corbeille">
                    <i class="menu-icon mdi mdi-dna"></i>
                    <span class="menu-title">Gestion Corbeille</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse {{ show_class(['gestion_corbeille/*']) }}" id="gestion_corbeille">
                    {{-- <ul class="nav flex-column sub-menu">
                    <li class="nav-item {{ active_class(['gestion_corbeille/buttons']) }}">
                        <a class="nav-link" href="{{ url('/gestion_corbeille/buttons') }}">Buttons</a>
                    </li>
                    <li class="nav-item {{ active_class(['gestion_corbeille/dropdowns']) }}">
                        <a class="nav-link" href="{{ url('/gestion_corbeille/dropdowns') }}">Dropdowns</a>
                    </li>
                    <li class="nav-item {{ active_class(['gestion_corbeille/typography']) }}">
                        <a class="nav-link" href="{{ url('/gestion_corbeille/typography') }}">Typography</a>
                    </li>
                </ul> --}}
                </div>
            </li>
        @endif


        {{-- <li class="nav-item {{ active_class(['basic-ui/*']) }}">
            <a class="nav-link" data-toggle="collapse" href="#basic-ui"
                aria-expanded="{{ is_active_route(['basic-ui/*']) }}" aria-controls="basic-ui">
                <i class="menu-icon mdi mdi-dna"></i>
                <span class="menu-title">Basic UI Elements</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ show_class(['basic-ui/*']) }}" id="basic-ui">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item {{ active_class(['basic-ui/buttons']) }}">
                        <a class="nav-link" href="{{ url('/basic-ui/buttons') }}">Buttons</a>
                    </li>
                    <li class="nav-item {{ active_class(['basic-ui/dropdowns']) }}">
                        <a class="nav-link" href="{{ url('/basic-ui/dropdowns') }}">Dropdowns</a>
                    </li>
                    <li class="nav-item {{ active_class(['basic-ui/typography']) }}">
                        <a class="nav-link" href="{{ url('/basic-ui/typography') }}">Typography</a>
                    </li>
                </ul>
            </div>
        </li> --}}

        {{-- <li class="nav-item {{ active_class(['charts/chartjs']) }}">
            <a class="nav-link" href="{{ url('/charts/chartjs') }}">
                <i class="menu-icon mdi mdi-chart-line"></i>
                <span class="menu-title">Charts</span>
            </a>
        </li>
        <li class="nav-item {{ active_class(['tables/basic-table']) }}">
            <a class="nav-link" href="{{ url('/tables/basic-table') }}">
                <i class="menu-icon mdi mdi-table-large"></i>
                <span class="menu-title">Tables</span>
            </a>
        </li>
        <li class="nav-item {{ active_class(['icons/material']) }}">
            <a class="nav-link" href="{{ url('/icons/material') }}">
                <i class="menu-icon mdi mdi-emoticon"></i>
                <span class="menu-title">Icons</span>
            </a>
        </li>
        <li class="nav-item {{ active_class(['user-pages/*']) }}">
            <a class="nav-link" data-toggle="collapse" href="#user-pages"
                aria-expanded="{{ is_active_route(['user-pages/*']) }}" aria-controls="user-pages">
                <i class="menu-icon mdi mdi-lock-outline"></i>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ show_class(['user-pages/*']) }}" id="user-pages">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item {{ active_class(['user-pages/login']) }}">
                        <a class="nav-link" href="{{ url('/user-pages/login') }}">Login</a>
                    </li>
                    <li class="nav-item {{ active_class(['user-pages/register']) }}">
                        <a class="nav-link" href="{{ url('/user-pages/register') }}">Register</a>
                    </li>
                    <li class="nav-item {{ active_class(['user-pages/lock-screen']) }}">
                        <a class="nav-link" href="{{ url('/user-pages/lock-screen') }}">Lock Screen</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link"
                href="https://www.bootstrapdash.com/demo/star-laravel-free/documentation/documentation.html"
                target="_blank">
                <i class="menu-icon mdi mdi-file-outline"></i>
                <span class="menu-title">Documentation</span>
            </a>
        </li> --}}
    </ul>
</nav>
