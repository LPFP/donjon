<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="Gestion du LPFP">
<meta name="author" content="LPFP">
<link rel="icon" href="/favicon.png">
<?php echo $this->Html->charset() ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?= $this->fetch('meta') ?>

<title>
    Donjon LPFP - 
    <?= $this->fetch('title') ?>
</title>

<!-- 
    Bootstrap 3.3.5 core css  : Load bootstrap from cdn for the moment
    <link href="./css/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.6/flatly/bootstrap.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]
-->
<link href="/css/main.css" rel="stylesheet" /> 
<?= $this->fetch('css') ?>