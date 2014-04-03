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

$cakeDescription = __d('cake_dev', 'RenyWordBlog: The Blogger Spot');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>		
		Reny's Blog
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap.css');
		echo $this->Html->css('cake.generic');
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
	

		 <div class="navbar-inner">
		<ul class="nav nav-tabs">
		
						
			<li> <?php echo $this->Html->link('Home', array('controller' =>'users', 'action'=>'index')); ?></li>
			<li> <?php echo $this->Html->link('Posts', array('controller' =>'posts', 'action'=>'index')); ?></li>
			<li> <?php echo $this->Html->link('Add Post', array('controller' =>'posts', 'action'=>'add')); ?></li>
			<li> <?php if (AuthComponent::user()):
					//The user is logged in, show the logout link
					
					echo $this->Html->link('Log out', array('controller' => 'users', 'action' => 'logout'));
					echo 'Welcome '.AuthComponent::user('username');
				else:
					// The user is not logged in, show login link
					echo $this->Html->link('Log in', array('controller' => 'users', 'action' => 'login'));

				endif;
			?>
			</li>
			
			
		</ul>

		 <!--Site-wide 'Welcome message' here in default.ctp mean that it will appear in every page
		echo Welcome print $this->Session->read('Auth.User.username');-->
		
		<div id="content">
		
			<div class="section" id="section0">
			
				<div class="row">
				
					
						<div class="intro">
					    <div class="col-md-6">
						<h2>This is a test</h2>

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
			
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="intro">
						
						<h2>This is another test</h2>
						
						</div>
					</div>
					
				</div>
				
			</div>
		</div>
			
			
		<div id="footer">
			
			<?php echo $this->Html->tag('span', '&copy Renata Borges', array('class' => 'welcome'));
			
			?>
		</div>
	</div>
	</div>
	 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <?php echo $this->Html->script('bootstrap.min.js'); ?>
	
</body>
</html>
