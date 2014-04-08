<!-- File: /app/View/Users/view.ctp -->


<div class="well well-md rsvp_view">

<fieldset>
 <legend><?php echo __('User Profile: '); ?></legend>
<p><?php echo ($user['User']['username']); ?></p>
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
  
   }
  ?>

 
  </td>

  
</table>




</div>


