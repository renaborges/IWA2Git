

<div class="row">

<div class="span4">


	
	<div class="home_content2">
		<div class="span6">
		<?php echo $this->Session->flash('auth'); ?>
		<?php echo $this->Form->create('User');?>
	 
		<h5><?php echo('Already a Blogger? Sign in.'); ?></h5>
       
		<?php
        echo $this->Form->input('username', array('class'=>'txtArea'));
        echo $this->Form->input('password', array('class'=>'txtArea'));
		
		?>
   
		<?php echo $this->Form->end(__('Login'));?>

	
		</div>
	</div>
</div>


<div class="span7">
	<div class="home_content3">
		<div class="span6">
	<h3>Share the Word of Mouth!</h3>
	<h4>Let the world know about your thoughts, your knowledges and spread the word. You never know
	where you can end up...TV? Internet sensation? Other continents? You can be the beauty advisor,
	the geek 'know how'. It's an easy setup and you can do endless things.</h4>
	<h5>
        <?php echo __('Sign up and start blogging now.'); ?>
		</h5>
		<fieldset>
	
		<?php echo $this->Html->link(' Sign Up', array('controller' => 'users', 'action' => 'add'));?>
		
		</fieldset>
		</div>
	</div>	
</div>
	
		
</div>
