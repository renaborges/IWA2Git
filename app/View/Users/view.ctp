<!-- File: /app/View/Users/view.ctp -->
<div class="users view">
<p><?php echo $this->Html->link('View all Users',array('action'=>'index'));
?></p>
<!-- debug($user); -->

<p><h1>UserName:<?php echo ($user['User']['username']); ?></h1></p>
<p> Password:<?php echo $user['User']['password']; ?> </p>
<p> Role: <?php echo ($user['User']['role']); ?> </p>
<p> Created: <?php echo $user['User']['created']; ?> </p>


<dt><?php echo 'You have  '.count($user['Post']).'  Posts '; ?></dt>

<dd style='content:\A; white-space: pre'><?php for ($x= 0; $x< count($user['Post']); $x++){
    echo $this->Html->link(
                    ($user['Post'][$x]['title']),
                    array('controller'=> 'Posts','action' => 'view', $user['Post'][$x]['id']));
     
    echo __("\n");
    echo __('Created '.h($user['Post'][$x]['created']));
    echo __("\n");
   /*  echo __('Title: '.h($user['Post'][$x]['title'])); 
    echo __('Body: '.h($user['Post'][$x]['body']));
    echo __('Created '.h($user['Post'][$x]['created']));  */
   }
  ?>

  &nbsp;
  </dd>
</dl>
  
</div>
<div class = "actions">
<?php echo $this->Html->link(
    'Go back to index page',
    array('controller' => 'users', 'action' => 'index')
); ?>
</div>