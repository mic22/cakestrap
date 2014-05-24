<div class="col-md-9 users form">
	<div class="page-header">
		<h3><?php echo __('Edit User'); ?></h3>
	</div>
<?php echo $this->Form->create('User', array(
'class' => 'form-horizontal', 
'role' => 'form',
'inputDefaults' => array(
    'format' => array('before', 'label', 'between', 'input', 'error', 'after'),
    'div' => array('class' => 'form-group'),
    'class' => array('form-control'),
    'label' => array('class' => 'col-lg-4 control-label'),
    'between' => '<div class="col-lg-8">',
    'after' => '</div>',
    'error' => array('attributes' => array('wrap' => 'span', 'class' => 'help-inline')),
))); ?>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('surname');
		echo $this->Form->input('email');
		echo $this->Form->input('password', array('value' => false));
		echo $this->Form->input('role_id');
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
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
	</ul>
</div>
