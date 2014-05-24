<div class="col-md-9 comments form">
	<div class="page-header">
		<h3><?php echo __('Add Comment'); ?></h3>
	</div>
<?php echo $this->Form->create('Comment', array(
'class' => 'form-horizontal', 
'role' => 'form',
'inputDefaults' => array(
    'format' => array('before', 'label', 'between', 'input', 'error', 'after'),
    'div' => array('class' => 'form-group'),
    'class' => array('form-control'),
    'label' => array('class' => 'col-lg-2 control-label'),
    'between' => '<div class="col-lg-3">',
    'after' => '</div>',
    'error' => array('attributes' => array('wrap' => 'span', 'class' => 'help-inline')),
))); ?>
	<?php
		echo $this->Form->input('content');
		echo $this->Form->input('user_id', array('type' => 'text'));
		echo $this->Form->input('news_id', array('type' => 'text'));
	?>
<?php echo $this->Form->end(array(
    'label' => __('Submit'),
    'class' => 'btn btn-md btn-primary',
    'div' => array(
        'class' => 'control-group',
        ),
    'before' => '<div class="controls">',
    'after' => '</div>'
));?></div>
<div class="col-md-3 actions">
	<div class="page-header">
		<h3><?php echo __('Actions'); ?></h3>
	</div>
	<ul class="nav nav-pills nav-stacked">

		<li><?php echo $this->Html->link(__('List Comments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
