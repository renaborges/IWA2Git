<?php
/**
 *
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


?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>		
		Reny's Blog
	</title>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0,width=device-width,user-scalable=no">
	<meta name="generator" content="Renaborges.com">
	<meta name="application-name" content="Renaborges.com">
	<meta name="description" content="Start your Blog, change the World.">
	<?php
		echo $this->Html->meta('icon');	
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('mystyle.css');
		echo $this->Html->css('cake.generic');
		
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
    
    
</head>
<body>
	
    <?php echo $this->element('navbar');?>
    
    <div class="container">            
            	 
		 <!--Site-wide 'Welcome message' here in default.ctp mean that it will appear in every page
		echo Welcome print $this->Session->read('Auth.User.username');-->
		
	
	
		<div class="well well-md rsvp_container">
		
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
			
		
               </div> 
			   
			   
			   
			   
			   <div class="well well-md footer">	
		<!--<div id="footer">-->
			
			<?php echo $this->Html->tag('span', '&copy Renata Borges', array('class' => 'welcome'));
			
			?>
		
                </div>
	</div>
	 <!-- Core JS -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <?php echo $this->Html->script('bootstrap.js'); ?>
	
</body>
</html>
