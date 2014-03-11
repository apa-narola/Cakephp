<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $cakeDescription ?>:
            <?php echo $title_for_layout; ?>
        </title>

        <?php
        echo $this->Html->meta('icon');

        //echo $this->Html->css('cake.generic');

        echo $this->Html->css(
                array(
                    'bootstrap',
                    'bootstrap-theme.min',
                    'theme'
                )
        );

//  <!-- Bootstrap core JavaScript
//    ================================================== -->
//    <!-- Placed at the end of the document so the pages load faster -->

        echo $this->Html->script(
                array(
                    'jquery',
                    'bootstrap.min',
                    'holder',
        ));

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <body>
        <!-- Fixed navbar -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Cakephp Demo</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><?php echo $this->Html->link('Movies', array('controller' => 'movies', 'action' => 'index')); ?></li>
                        <li class="active"><?php echo $this->Html->link('Add New', array('controller' => 'movies', 'action' => 'edit')); ?></li>

                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
        <?php 
        echo $this->Session->flash();

        ?>
        
        <div class="clearfix"></div>
        <?php echo $this->fetch('content'); ?>
    </body>
</html>

