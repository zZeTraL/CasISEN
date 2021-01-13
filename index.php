<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS -->
        <link rel="stylesheet" href="../CasISEN/css/body.css">
        <link rel="stylesheet" href="../CasISEN/css/header.css">
        <link rel="stylesheet" href="../CasISEN/css/hover.css">
        <link rel="stylesheet" href="../CasISEN/css/main.css">

        <!-- FONTAWESOME ONLINE -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- AOS LIB -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->

        <title>CasISEN</title>
</head>
<body>


    <header class="header-container header-img gradient">
        <?php require "../CasISEN/parts/nav.php"; ?>
        <div class="icon-scroll"></div>
    </header>

    <main class="aos-animate">
        <article style="height: 2000px;">
            <div class="container-section aos-animate" data-aos="fade">
                <h1>Bienvenue sur Cas'ISEN !</h1>
                <h3>
                    Cas'ISEN est le site N°1 afin de découvrir et comparer les meilleurs casinos en ligne grâce a des avis structurés. 
                    Retrouvez la présentation de vos jeux favoris mais surtout tous les bon plans du moment !
                </h3>
            </div>
            <section class="section ptsfort-background">
                <div class="container-section aos-animate" data-aos="zoom-in">
                    <h2>Nos points forts</h2>
                    <div class="col-3">
                        <div class="column-test aos-animate" data-aos="zoom-in">
                            <img src="../CasISEN/img/clock.svg" alt="Logo" class="col-img">
                            <h4>Ponctualité</h4>
                            <p>Retrouvez chaque jour des nouvelles de l'actualité mondiale autour des casinos, ne louper aucune information !</p>
                        </div>
                        <div class="column-test aos-animate" data-aos="zoom-in">
                            <img src="../CasISEN/img/logo.png" alt="Logo" class="nav-logo">
                            <h4>Ponctualité</h4>
                        </div>
                        <div class="column-test aos-animate" data-aos="zoom-in">
                            <img src="../CasISEN/img/logo.png" alt="Logo" class="nav-logo">
                            <h4>Ponctualité</h4>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section">
                <div class="container-section aos-animate" data-aos="zoom-in">
                    <h1>En ce moment</h1>
                    <h3>
                        Retrouvez une sélection d'article d'actualité et de bonus inédits !
                    </h3>
                    <div class="figure-background">
                        <div class="col-4">
                            <img src="../CasISEN/img/gamdom.jpg" alt="Logo" class="col-4-img">
                            <div class="casino-url">
                                <a href="https://www.gamdom.com/" class="">
                                    <div>
                                        <span class="url-title">Gamdom</span>
                                    </div>
                                    <span class="url-desc">gandom.com</span>
                                </a>
                            </div>
                            <svg class="svg-green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 89 70" id="gamdomarrow"><g fill="none" fill-rule="evenodd"><g mask="url(#ayb)"><path fill="#0EE07B" d="M26.253 37L26 44l-62 63h28.458L54 44v-7z"></path><path fill="#0EE07B" d="M26 40h27.646v-4.315l.354-.36V17.349c0-3.595-1.098-6.636-3.225-9.153L26 33.169V40z"></path><path fill="#0EE07B" d="M131.305-40.452L141-30.516V-66h-35.547l10.054 9.935-64.732 64.26-16.851 17.021L54.107 33"></path><path fill="#0A7843" d="M26 44h28V33H26z"></path></g></g></svg>
                            <div class="figure-desc">
                                <p>Un coffre <strong>GRATUIT</strong><br>et jusqu'à 50$ avec le code <strong>CASISEN</strong></p>
                            </div>
                            <div class="button-resp">
                                <button type="button" class="button-bonus">
                                    <a href="">
                                        Récupère <b>ton bonus</b>
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </article>
    </main>

    <!--<script src="../CasISEN/js/scroll.js"></script>-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script>

</body>
</html>