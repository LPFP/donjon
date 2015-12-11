<?php
require_once 'includes/conf.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php
        require_once 'includes/head.php';
        ?>
        <title> Accueil - Donjon - Outil de centralisation pour l'organisation des fabmanager du LPFP</title>
    </head>

    <body>


        <?php
        require_once 'includes/header.php';
        ?>

        <!-- Grid System begin -->
        <div class="container">
            <?php
            require_once 'includes/menu.php';
            ?>

            <!-- CONTENT : TABS -->
            <div id="body">
                <div class="container-fluid">
                    <section id="welcome" class=" active" >
                        <!-- This could be replaced by header tag --> 
                        <div class=" row">
                            <div class="col-lg-12">
                                <h1><?php echo $pageTItle ?></h1>
                                <hr/>
                            </div>
                        </div>
                        <div class=" row">
                            <!-- Real content begins here -->
                            <div class="col-md-4 col-lg-4">
                                <h2>Facebook</h2>
                                <!-- 2e partie du code fournit par facebook, en meme temps que le bout de code juste apres <body> -->
                                <div class="fb-page" data-href="https://www.facebook.com/LePetitFablabDeParis" data-width="400" data-height="400" data-small-header="true" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false" data-show-posts="true">
                                    <div class="fb-xfbml-parse-ignore">
                                        <blockquote cite="https://www.facebook.com/LePetitFablabDeParis">
                                            <a href="https://www.facebook.com/LePetitFablabDeParis">
                                                Le Petit Fablab de Paris
                                            </a>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <div id="gcalendar" class="col-lg-4">
                                <h2>Calendriers</h2>
                                <!-- code fournit par google, a générer depuis ls preferences de votre googleAgenda -->
                                <iframe src="https://calendar.google.com/calendar/embed?showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=400&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=9t255k2cfmqlsq6tflq8n0dijg%40group.calendar.google.com&amp;color=%23875509&amp;src=e2cq1amiho8n1rrb2b6akbvi9k%40group.calendar.google.com&amp;color=%23B1365F&amp;src=dk065gt1qtr9maf1p16o1kib5o%40group.calendar.google.com&amp;color=%232952A3&amp;ctz=Europe%2FParis" style="border-width:0" height="400" frameborder="0" scrolling="no">
                                Loading...						
                                </iframe>
                            </div>

                            <div id="twitter" class="col-lg-4">
                                <h2>Twitter</h2>
                                <a class="twitter-timeline" href="https://twitter.com/lpfablabparis" data-widget-id="665963031944409088">Tweets by @lpfablabparis
                                </a>
                                <!-- code fournit par twitter, a générer depuis les preferences de votre compte twitter -->
                                <script>!function(d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                                        if (!d.getElementById(id)) {
                                            js = d.createElement(s);
                                            js.id = id;
                                            js.src = p + "://platform.twitter.com/widgets.js";
                                            fjs.parentNode.insertBefore(js, fjs);
                                        }
                                    }(document, "script", "twitter-wjs");
                                </script>
                            </div>
                        </div>
                    </section>
                </div>
            </div> <!-- /#body -->
        </div><!-- /.container -->
        <?php
        require_once 'includes/footer.php';
        ?>
    </body>
</html>
