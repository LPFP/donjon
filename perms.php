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
        require_once 'includes/menu.php';
        ?>

        <div class="container">

            <div id="body">
                <div class="container-fluid">
                    <div class=" row">
                        <div class="col-lg-12">
                            <h1><?php echo $pageTitle ?></h1>
                            <hr/>
                        </div>
                    </div>
                    <div class=" row">
                        <div class="col-lg-12">
                            <a href="https://docs.google.com/spreadsheets/d/1eXdFVutyxASkwqwiBINr_LBaBOtxQ4Wl3scYCV4i8b8/view#gid=1661249124" target="_blank">
                                Historique
                            </a>
                            <br>
                            <a href="https://docs.google.com/forms/d/17oAtVvIoA1buxek9FnAIkvJYfBNnvJ-fLF4UOd9X5ww/viewanalytics" target="_blank">
                                Analyse des Comptes Rendus
                            </a>
                            <br>
                            <section>						  
                                <!-- code génerer par googleDoc depuis le menu Fichier > Publier -->	
                                <iframe src="https://docs.google.com/forms/d/17oAtVvIoA1buxek9FnAIkvJYfBNnvJ-fLF4UOd9X5ww/viewform?entry.168458796&entry.308726202=Pas+de+Portes+Ouvertes+Aujourd'hui&entry.1507126601&entry.202581502&entry.3505587&entry.1608688282" width="600" height="1500" frameborder="0" marginheight="0" marginwidth="0">
                                Loading...
                                </iframe>
                            </section>
                            <br>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <?php
        require_once 'includes/footer.php';
        ?>
    </body>
</html>
