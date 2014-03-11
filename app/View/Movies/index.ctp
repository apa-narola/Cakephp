
<div class="container theme-showcase">
    <?php echo $this->element('movies_nav'); ?>
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <tr>
                <th><?php echo $this->Paginator->sort('Movie.title', 'Title'); ?></th>
                <th><?php echo $this->Paginator->sort('Movie.genre', 'Genre'); ?></th>
                <th><?php echo $this->Paginator->sort('Movie.rRating', 'Rating'); ?></th>
                <th><?php echo $this->Paginator->sort('Movie.format', 'Format'); ?></th>
                <th><?php echo $this->Paginator->sort('Movie.length', 'Length'); ?></th>
                <th>Action</th>
            </tr>
            <?php
            if (!empty($movies)):
                $cnt = 1;
                foreach ($movies as $movie):
                    ?>
                    <tr>
                        <td><?php echo $movie['Movie']['title']; ?> </td>
                        <td><?php echo $movie['Movie']['genre']; ?> </td>
                        <td><?php echo $movie['Movie']['rating']; ?> </td>
                        <td><?php echo $movie['Movie']['format']; ?> </td>
                        <td><?php echo $movie['Movie']['length']; ?> </td>
                        <td>
                            <a href="<?php echo $this->webroot . "movies/view/" . $movie['Movie']['id']; ?>">  <span class="glyphicon glyphicon-eye-open"></span></a>
                            <a href="<?php echo $this->webroot . "movies/edit/" . $movie['Movie']['id']; ?>"><span class="glyphicon glyphicon-edit"></span></span></a>
                            <a href="<?php echo $this->webroot . "movies/delete/" . $movie['Movie']['id']; ?>" onClick='javascript:return confirm("Are you sure you really want to delete this record ?")'><span class="glyphicon glyphicon-trash"></span></i></i></a>
                    </tr>   
                    <?php
                endforeach;
            else:
                ?>
                <tr><td colspan="6" align="center">No records found.</td></tr>
            <?php
            endif;
            ?>
        </table>
    </div>
    <ul  class="pagination">
        <?php
        echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a'));
        echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'currentClass' => 'active', 'tag' => 'li', 'first' => 1));
        echo $this->Paginator->next(__('next'), array('tag' => 'li', 'currentClass' => 'disabled'), null, array('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a'));
        ?>
    </ul>
    <!-- Shows the next and previous links -->
    <?php // echo $this->Paginator->prev('« Previous', null, null, array('class' => 'disabled')); ?>
    <!-- Shows the page numbers -->
    <?php // echo $this->Paginator->numbers(); ?>
    <?php //echo $this->Paginator->next('Next »', null, null, array('class' => 'disabled')); ?>
    <!-- prints X of Y, where X is current page and Y is number of pages -->
    <?php
    /*
      echo $this->Paginator->counter(array(
      'format' => 'Page %page% of %pages%, showing %current% records out of
      %count% total, starting on record %start%, ending on %end%'
      )); */
    $this->Paginator->options(array('url' => $this->passedArgs));
    ?>
</div> <!-- /container -->

