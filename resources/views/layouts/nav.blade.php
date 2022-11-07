<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">SysTurism<span>Tourism Agency</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{ route('zona') }}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{ route('destino') }}" class="nav-link">Destinos</a></li>
                <li class="nav-item"><a href="{{ route('contacto') }}" class="nav-link">Contactenos</a></li>
            </ul>
        </div>
    </div>
</nav>
