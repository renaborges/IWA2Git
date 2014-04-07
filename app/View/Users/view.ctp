<!-- File: /app/View/Users/view.ctp -->


<div class="well well-md background rsvp_ww">

<p><?php echo $this->Html->link('View all Users',array('action'=>'index'));
?></p>
<!-- debug($user); -->

<p><h4>User Name:<?php echo ($user['User']['username']); ?></h4></p>
<p> Password:<?php echo $user['User']['password']; ?> </p>
<p> Role: <?php echo ($user['User']['role']); ?> </p>
<p> Created: <?php echo $user['User']['created']; ?> </p>

<table class="table table-bordered">
<tr><?php echo 'You have  '.count($user['Post']).'  Posts '; ?></tr>

<td style='content:\A; white-space: pre'><?php for ($x= 0; $x< count($user['Post']); $x++){
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
  </td>

  
</table>


</div>

<?php echo $this->Html->link(
    'Go back to index page',
    array('controller' => 'users', 'action' => 'index')
); ?>
