<div class="container theme-showcase">
    <?php echo $this->element('movies_nav');?>
    <div class="table-responsive">
        <?php
        $form_options["class"] = "form-horizontal";
        $form_options["role"] = "form";
        echo $this->Form->create('Movie', array($form_options));
        ?>

        <?php
        if(isset($this->request->pass[0]) && !empty($this->request->pass[0])):
            echo $this->Form->hidden('id');
        endif;
        echo $this->Form->input(
                'title', array(
            'div' => 'form-group',
            'id' => 'title',
            'type' => 'text',
            'placeholder' => 'Title',
            'class' => 'form-control',
            'label' => array('class' => 'col-lg-2 control-label')
        ));

        echo $this->Form->input(
                'genre', array(
            'div' => 'form-group',
            'id' => 'genre',
            'type' => 'text',
            'placeholder' => 'Genre',
            'class' => 'form-control',
            'label' => array('class' => 'col-lg-2 control-label')
        ));

        echo $this->Form->input(
                'rating', array(
            'div' => 'form-group',
            'id' => 'rating',
            'type' => 'text',
            'placeholder' => 'Rating',
            'class' => 'form-control',
            'label' => array('class' => 'col-lg-2 control-label')
        ));

        echo $this->Form->input(
                'format', array(
            'div' => 'form-group',
            'id' => 'format',
            'type' => 'text',
            'placeholder' => 'Format',
            'class' => 'form-control',
            'label' => array('class' => 'col-lg-2 control-label')
        ));

        echo $this->Form->input(
                'length', array(
            'div' => 'form-group',
            'id' => 'length',
            'type' => 'text',
            'placeholder' => 'Length',
            'class' => 'form-control',
            'label' => array('class' => 'col-lg-2 control-label')
        ));
        ?>

        <?php
        $options = array(
            'label' => 'Update',
            'div' => array(
                'class' => 'form-group',
            ), 'class' => 'btn btn-default',
         
        );
        echo $this->Form->end($options);
        ?>
    </div>
</div> <!-- /container -->




