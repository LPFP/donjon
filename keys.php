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
                    <!-- TAB KEYS -->
                    <section id="keys" class=" center" role="tabpanel">
                        <h2>Qui a les clefs ?</h2>
                        <a href="https://docs.google.com/spreadsheets/d/1ahKXqBw5CIEFOe6QnuwEqHRp5r3sg5iSZ3MSGej7X8o/edit#gid=888024120" target="_blank">
                            Historique
                        </a>
                        <br>
                        <!-- code fournit par google, a générer depuis ls preferences de votre googleAgenda -->
                        <iframe src="https://calendar.google.com/calendar/embed?showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=400&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=9t255k2cfmqlsq6tflq8n0dijg%40group.calendar.google.com&amp;color=%23875509&amp;src=e2cq1amiho8n1rrb2b6akbvi9k%40group.calendar.google.com&amp;color=%23B1365F&amp;src=dk065gt1qtr9maf1p16o1kib5o%40group.calendar.google.com&amp;color=%232952A3&amp;src=fboi65ocn6hvsfdicm6v6v35jllg3o2k%40import.calendar.google.com&amp;color=%23125A12&amp;ctz=Europe%2FParis" style="border-width:0" height="400" frameborder="0" scrolling="no">

                        Loading...						
                        </iframe>

                        <br>
                        <br>
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#keysFormDiv" aria-expanded="false" aria-controls="keysFormDiv">
                            Formulaire de prise des clefs
                        </button>
                        <div class="collapse" id="keysFormDiv">
                            <div class="well">
                                <section>						  

                                    <!-- code génerer par googleDoc depuis le menu Fichier > Publier -->	
                                    <iframe id="keysForm" src="https://docs.google.com/forms/d/10lx-V5nh5Wb7n-Kg7e0jmEsaMxWbTGgz-0dmjeOwzzU/viewform?gid=0&amp;single=true&amp;widget=true&amp;headers=false">
                                    Loading...
                                    </iframe>
                                </section>
                                <button class="btn btn-danger" type="button" data-toggle="collapse" data-target="#keysFormDiv" aria-expanded="true">
                                    Fermer le Formulaire
                                </button>
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
