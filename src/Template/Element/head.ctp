<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="Gestion du LPFP">
<meta name="author" content="LPFP">
<link rel="icon" href="/favicon.png">
<?php echo $this->Html->charset() ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php echo $this->fetch('meta') ?>

<title>
    Donjon LPFP - 
    <?php echo $this->fetch('title') ?>
</title>

<?php echo $this->CKEditor->loadJs(); ?>

<!-- 
    Bootstrap 3.3.5 core css  : Load bootstrap from cdn for the moment
    <link href="./css/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
-->
<link href="/css/bootswatch-flatly.css" rel="stylesheet">
<script src="/bower_components/jquery/dist/jquery.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]
-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="/css/main.css" rel="stylesheet" /> 

<?php
echo $this->fetch('css');
