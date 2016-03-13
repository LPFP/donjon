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
            <a class="navbar-brand" href="/"><?php echo __("Dungeon") ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">



                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <?php echo __("Management") ?><span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li id="welcomeButton" class="<?php echo ""; ?>">
                            <?php echo $this->Html->link(__("Calendars"), ['prefix' => 'admin', 'controller' => 'Calendars', 'action' => 'index']); ?>
                        </li>
                        <li id="welcomeButton" class="<?php echo ""; ?>">
                            <?php echo $this->Html->link(__("Calendars (old)"), ['prefix' => false, 'controller' => 'pages', 'action' => 'display', 'scheduling']); ?>
                        </li>
                        <li>
                            <?php
                            echo $this->Html->link(__("Transactions"), ['prefix' => 'admin', 'controller' => 'transactions', 'action' => 'index']);
                            ?>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <?php
                            echo $this->Html->link(__("Objects"), ['prefix' => 'admin', 'controller' => 'objects', 'action' => 'index']);
                            ?>
                        </li>
                        <li>
                            <?php
                            echo $this->Html->link(__("Units"), ['prefix' => 'admin', 'controller' => 'units', 'action' => 'index']);
                            ?>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <?php
                            echo $this->Html->link(__("Forms"), ['prefix' => 'admin', 'controller' => 'Forms', 'action' => 'index', 'type' => 1]);
                            ?>
                        </li>
                    </ul>
                </li>                                                        

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <?php echo __("Fabmanagers") ?><span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <?php
                            echo $this->Html->link(__("Key borrow"), ['prefix' => 'admin', 'controller' => 'KeyBorrows', 'action' => 'index']);
                            ?>
                        </li>
                        <li id="openingsButton">
                            <?php
                            echo $this->Html->link(__("Reports"), ['prefix' => 'admin', 'controller' => 'reports', 'action' => 'index']);
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
                            echo $this->Html->link(__("Users"), ['prefix' => 'admin', 'controller' => 'Users', 'action' => 'index']);
                            ?>
                        </li>
                        <li id="">
                            <?php
                            echo $this->Html->link(__("Groups"), ['prefix' => 'admin', 'controller' => 'Groups', 'action' => 'index']);
                            ?>
                        </li>
                    </ul>
                </li>
                <!-- Forms -->


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <?php echo __("Others") ?><span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li id="">
                            <?php
                            echo $this->Html->link(__("Offers"), ['prefix' => 'admin', 'controller' => 'Offers', 'action' => 'index']);
                            ?>
                        </li>
                    </ul>
                </li>

                <li class="dropdown ">
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