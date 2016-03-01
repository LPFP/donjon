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
            <a class="navbar-brand" href="/">Donjon</a>
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
                /*
                if (!empty($menu)) :
                    foreach ($menu as $pageName => $title) :
                        $class = '';
                        $thisPageIsCurrentViewedPage = strpos($currentPageName, $pageName) >= 1;
                        if ($thisPageIsCurrentViewedPage) :
                            $class = 'active';
                            $this->set('pageTitle', $title);
                        endif;
                        ?>
                        <li id="welcomeButton" class="<?php echo $class; ?>">
                            <?php echo $this->Html->link($title, ['controller' => 'pages', 'action' => 'display', $pageName]); ?>
                        </li>
                        <?php
                    endforeach;
                endif;
                */
                ?>



                                                         <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <?php echo __("Manage") ?><span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
            <li id="welcomeButton" class="<?php echo ""; ?>">
                            <?php echo $this->Html->link(__("Scheduling"), ['controller' => 'pages', 'action' => 'display', 'scheduling'   ]); ?>
                        </li>

                                                              <li id="">
                            <?php
                            echo $this->Html->link(__("Accounts"), ['controller' => 'accounts', 'action' => 'index' ]);
                            ?>
                        </li>
                                                                         
                        <li id="">
                            <?php
                            echo $this->Html->link(__("Key borrow"), ['controller' => 'KeyBorrows', 'action' => 'index' ]);
                            ?>
                        </li>
                                                <li class="divider"></li>
                        <li id="openingsButton">
                            <?php
                            echo $this->Html->link(__("Open door report"), ['controller' => 'reports', 'action' => 'index' , 'type' => 1 ]);
                            ?>
                        </li>
                    </ul>
                </li>                                                        




                                                         <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <?php echo __("Members") ?><span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">

      
                                                        <li id="">
                            <?php
                            echo $this->Html->link(__("Regular members"), ['controller' => 'Users', 'action' => 'index' , 'type' => 1]);
                            ?>
                        </li>
                                       <li id="">
                            <?php
                            echo $this->Html->link(__("Fabmanagers"), ['controller' => 'Users', 'action' => 'index' ,  'type' => 2]);
                            ?>
                        </li>
                        
                        
                    </ul>
                </li>
                <!-- Forms -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Formulaires<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">

                        <li id="">
                            <?php
                            echo $this->Html->link(__("New adherent form"), ['controller' => 'Forms', 'action' => 'index',  'type' => 1 ]);
                            ?>
                        </li>
                         <li id="">
                            <?php
                            echo $this->Html->link(__("Visitor form"), ['controller' => 'Forms', 'action' => 'index',  'type' => 1 ]);
                            ?>
                        </li>
                         

                    </ul>
                </li>
                
                
                                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <?php echo __("External services") ?><span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li id="" >
                            <a href="http://kiwimanager.lepetitfablabdeparis.fr/" 
                               target="_blank">
                                WIKI 
                            </a>
                        </li>
        
                        <li id="" >
                            <a href="https://trello.com/lpfp" 
                               target="_blank">
                                Trello
                            </a>
                        </li>
                        <li id="" >
                            <a href="https://lpfparis.slack.com/" 
                               target="_blank">
                                Slack
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>