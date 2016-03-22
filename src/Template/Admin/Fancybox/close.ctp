<nav class="well well-small" id="">
    <?php
    echo $this->Html->link(__('Close'), ['#' => ''], [ 'escape' => false, 'class' => ' closeFancybox btn btn-default btn-sm']);
    ?>
</nav>

<script>
    $(document).on('click', '.closeFancybox', function() {
        parent.$.fancybox.close();
    });
</script>