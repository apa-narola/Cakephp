<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//echo $this->request->params["action"];  
?>

   <h2>Movies</h2>
    <ul class="nav nav-pills">
        <li <?php if($this->request->params["action"] =="index" ): ?> class="active" <?php endif; ?> ><?php echo $this->Html->link('Movies', array('controller' => 'movies', 'action' => 'index')); ?></li>
        <li <?php if($this->request->params["action"] =="edit" ): ?> class="active" <?php endif; ?>><?php echo $this->Html->link('Add New', array('controller' => 'movies', 'action' => 'edit')); ?></li>
    </ul>
   <br/>
