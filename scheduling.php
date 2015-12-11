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

                    <!-- TAB FABMANAGERS -->
                    <div id="fabManagers" class=" center" role="tabpanel">
                        <h2>Calendrier des Permanences</h2>

                        <!-- code génerer par googleDoc depuis le menu Fichier > Publier -->
                        <iframe id="fabmanagersIframe" src="https://docs.google.com/spreadsheets/d/1j35WKcaX07aLgdpL5c1FNfGsKHAQNS-RxVo3-PHzfTg/edit#gid=899986583&amp;single=true&amp;widget=true&amp;headers=false">
                        Loading...	
                        </iframe>
                        <br>
                        <a href="https://docs.google.com/spreadsheets/d/1j35WKcaX07aLgdpL5c1FNfGsKHAQNS-RxVo3-PHzfTg/edit#gid=899986583" target="_blank">
                            Editer le gDoc via google
                        </a>

                        <br>
                        <br>
                        <br>

                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#newFabmanagers" aria-expanded="false" aria-controls="newFabmanagers">
                            Suivi des nouveaux FabManagers
                        </button>

                        <div class="collapse" id="newFabmanagers">
                            <div class="well">
                                <section>

                                    <!-- code génerer par googleDoc depuis le menu Fichier > Publier -->	  	
                                    <iframe id="newFabmanagersIframe" src="https://docs.google.com/spreadsheets/d/18UqOSVSHL_eCNt3CL9Dg1-i11mNGM_dFPRnq4H_dcwk/pubhtml?gid=0&amp;single=true&amp;widget=true&amp;headers=false">
                                    Loading...	
                                    </iframe>
                                </section>
                                <a href="https://docs.google.com/spreadsheets/d/18UqOSVSHL_eCNt3CL9Dg1-i11mNGM_dFPRnq4H_dcwk/edit#gid=0" target="_blank">
                                    Editer le gDoc
                                </a>

                                <br>
                                <br>

                                <button class="btn btn-danger" type="button" data-toggle="collapse" data-target="#newFabmanagers" aria-expanded="true">
                                    Fermer le Document
                                </button>
                            </div>
                        </div><!-- newFabmanagers -->
                    </div> <!-- fabManagers -->
                </div>
            </div> <!-- /#body -->
        </div><!-- /.container -->

        <?php
        require_once 'includes/footer.php';
        ?>
    </body>
</html>
