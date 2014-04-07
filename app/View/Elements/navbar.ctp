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
</div>