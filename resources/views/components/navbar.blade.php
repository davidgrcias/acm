<nav class="navbar navbar-expand-lg shadow-lg" style="background-color: #F8F8F8">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <img src="templateUSER/images/logoACM.png" class="logo img-fluid" alt="Kind Heart Charity">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link click-scroll {{ request()->is('/') ? 'active' : '' }}" href="/"></a>
                </li> <!-- INI JANGAN DIGANGGU GUGAT, JADI DECOY BUG -->

                <li class="nav-item">
                    <a class="nav-link click-scroll {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll {{ request()->is('about') ? 'active' : '' }}" href="/about" >About Us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll {{ request()->is('visimisi') ? 'active' : '' }}" href="/visimisi">Visi & Misi</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll {{ request()->is('activity') ? 'active' : '' }}" href="/activity">Our Activity</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll {{ request()->is('gallery') ? 'active' : '' }}" href="/gallery">Gallery</a>
                </li>
            </ul>
        </div>
    </div>
</nav>