<div class="col-md-9 news form">
	<div class="page-header">
		<h3><?php echo __('Edit News'); ?></h3>
	</div>
<?php echo $this->Form->create('News', array(
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
		echo $this->Form->input('title');
		echo $this->Form->input('content');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('News.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('News.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List News'), array('action' => 'index')); ?></li>
	</ul>
</div>
