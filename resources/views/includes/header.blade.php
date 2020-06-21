<header id="header">
    <nav class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">Home</a></li>
                    <li class="{{ Request::is('masjid') ? 'active' : '' }}"><a href="/masjid">Masjid</a></li>
                    <li class="{{ Request::is('kajian') ? 'active' : '' }}"><a href="/kajian">Jadwal</a></li>
                    <li class="{{ Request::is('mubaligh') ? 'active' : '' }}"><a href="/mubaligh">Mubaligh</a></li>
                    <li class="dropdown{{ (Request::is('login') || Request::is('register')) ? ' active' : '' }}">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin<i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="/login">Login</a></li>
                            <li><a href="/register">Register</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>