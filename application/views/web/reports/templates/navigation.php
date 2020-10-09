<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <!-- Marca e Colapse -->
        <a class="navbar-brand" href="<?= base_url('reports')?>">
            <img src="<?= base_url('public/web/imgs/logos/ad-ooh_logo_white.png')?>" alt="Logo Ad-ooh">
        </a>
        <button class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#mainMenu"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Menu Main -->
            <!-- Usuário Offline -->
            <div class="collapse navbar-collapse" id="mainMenu">
                <div class="navbar-nav text-right">
                    <a class="nav-item nav-link" href="">Seja um parceiro</a>
                    <a class="nav-item nav-link" href="">Contato</a>
                    <a class="nav-item nav-link" href="">Login</a>
					<!--<a class="nav-item nav-link" href="<?/*= base_url('login/sair')*/?>">Sair</a>-->
                </div>
            </div>
    </div>
</nav>
