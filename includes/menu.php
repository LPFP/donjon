<!-- Menu  -->

<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Donjon</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <!--
               <li class="navbar-brand">
                   <a class="" href="http://donjon.lepetitfablabdeparis.fr">Le Donjon</a>
               </li>
              <li class="navbar-brand">
                   <a id="logo" href="http://lepetitfablabdeparis.fr">
                       <img src="bootstrap/assets/logo-LPFP.png" alt="logo LPFP" width="100">
                   </a>
               </li>
                -->
                <?php
                foreach ($menu as $pageName => $title) :
                    if (CURRENT_PAGE_NAME == $pageName) :
                        $class = 'active';
                        $pageTItle = $title;
                    else :
                        $class = '';
                    endif;
                    ?>
                    <li id="welcomeButton" class="<?php echo $class; ?>">
                        <a href="./<?php echo $pageName; ?>.php"><?php echo $title; ?></a>
                    </li>
                    <?php
                endforeach;
                ?>

                <!-- Forms -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Formulaires<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li id="signinButton">
                            <a href="https://docs.google.com/forms/d/1wC_Cygd2IjJCNRiZl4tEw3wuw1q4iGpOCkt5L_otFJo/viewform?gid=0" 
                               target="_blank">
                                Nouvelle Adhésion
                            </a>
                        </li>
                        <li id="openingsButton">
                            <a href="https://docs.google.com/forms/d/1cbevl9E5Jm2_a7Iqk4Fcu6aij8C6zHPYdhFRNGnrmnQ/viewform" 
                               target="_blank">
                                Portes Ouvertes
                            </a>
                        </li>
                    </ul>
                </li>


                <li id="wikiButton" >
                    <a href="http://kiwimanager.lepetitfablabdeparis.fr/" 
                       target="_blank">
                        WIKI
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>