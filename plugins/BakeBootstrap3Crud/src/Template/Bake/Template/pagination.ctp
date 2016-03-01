<div class=" well well-small pagination">
    <ul>
        <?php
        echo $this->Paginator->first('<i class="fa fa-angle-double-left"></i>', ['escape' => false, 'tag' => 'li']);
        echo $this->Paginator->prev('<span><i class="fa fa-angle-left"></i></span>', [
            'class' => 'prev enabled',
            'tag' => 'li',
            'escape' => false,
        ], null, [
            'class' => 'prev disabled',
            'tag' => 'li',
            'escape' => false,
        ]);
        echo $this->Paginator->numbers(
        [
            'separator' => '',
            'tag' => 'li',
            'modulus' => 12,
            'escape' => false,
            'currentTag' => 'span',
            'currentClass' => 'active',
        ]);
        #
        echo $this->Paginator->next('<span><i class="fa fa-angle-right"></i></span>', [
            'class' => 'next enabled',
            'tag' => 'li',
            'escape' => false,
        ], null, [
            'class' => 'next disabled',
            'tag' => 'li',
            'escape' => false,
        ]);
        echo $this->Paginator->last('<i class="fa fa-angle-double-right"></i>', ['escape' => false, 'tag' => 'li']);
        ?>
    </ul>
    <div class="pull-right paginationCounter">
        <?php
        echo $this->Paginator->counter(
        [
            'class' => 'pull-right',
            'format' => '{:page} / {:pages} pages, {:count} résultats',
        ]);
        ?>          
    </div>    

    <?php
    /*
     * TODO for very longue pagination : replace with select
      $nbPages = $this->Paginator->counter(['format' => '{:page}']);
      if ($nbPages >= 100) {
      for ($i = 1; $i <= $nbPages; $i++):

      endfor;
      }
     */
    ?>
    <style>
        .paginationCounter{
            position:relative;
            top:6px;
        }
    </style>
</div>