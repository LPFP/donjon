<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->element('head') ?> 
    </head>
    <body>
        <?php echo $this->element('header') ?> 
        <?php echo $this->element('menu') ?> 

        <section class="container clearfix">
            <div id="body">
                <div class="container-fluid">
                    <?php echo $this->Flash->render() ?>
                    <?php echo $this->fetch('content') ?>
                </div>
            </div>
        </section>

        <footer>
            <?php echo $this->element('footer') ?> 
        </footer>

        <!-- JS -->
        <script src="/css/bootstrap/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug 
        <script src="/css/bootstrap/js/ie-emulation-modes-warning.js"></script>
        <script src="/css/bootstrap/js/ie10-viewport-bug-workaround.js"></script>
        -->
        <?php echo$this->fetch('script') ?>

    </body>
</html>
