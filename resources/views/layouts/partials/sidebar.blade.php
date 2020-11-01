<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ route('home') }}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>
                <li class="menu-title">Nos Etudiants</li>
                <li>
                    <a href="{{ route('student.index') }}">Liste Etudiants</a>
                </li>
                <li class="menu-title">Nos Resultat</li>
                <li>
                    <a href="{{ route('result.index') }}">Liste Resultat</a>
                </li>
                <li class="menu-title">Nos Communiquer</li>
                <li>
                    <a href="{{ route('communiquer.index') }}">Communiquer</a>
                </li>
            </ul>
        </div>
    </nav>
</aside>
