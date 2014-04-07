
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User');?>
    <fieldset>
        <h3><?php echo __('Please enter your username and password'); ?></h3>
    <?php
        echo $this->Form->input('username');
        echo $this->Form->input('password');
	
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login'));?>



