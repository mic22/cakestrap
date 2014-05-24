<div class="col-md-9 news view">
	<div class="page-header">
		<h3><?php echo h($news['News']['title']); ?></h3>
	</div>
	<div class="col-md-12">
		<?php if(file_exists(WWW_ROOT.$news['News']['thumbnail'])): ?>
			<img src="<?php echo h($news['News']['thumbnail']); ?>" class="img pull-left" style="max-width: 320px; max-height: 320px; margin-right: 10px; margin-bottom: 10px;" />
		<?php endif; ?>
		<?php echo h($news['News']['content']); ?>
	</div>
	<h3>Comments</h3>
	<?php foreach($comments as $comment): ?>
	<div class="well">
		<h4><a href="mailto:<?php echo $comment['User']['email'] ?>"><?php echo $comment['User']['name'].' '.$comment['User']['surname'] ?></a></h4>
		<?php echo $comment['Comment']['content'] ?>
	</div>
	<?php endforeach; ?>

	<?php if($logged): ?>
		<?php echo $this->Form->create('Comment', array(
		'action' => '/add',
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
				echo $this->Form->input('content');
				echo $this->Form->input('user_id', array('type' => 'hidden', 'value' => $logged['id']));
				echo $this->Form->input('news_id', array('type' => 'hidden', 'value' => h($news['News']['id'])));
			?>
		<?php echo $this->Form->end(array(
		    'label' => __('Submit'),
		    'class' => 'btn btn-md btn-primary',
		    'div' => array(
		        'class' => 'control-group',
		        ),
		    'before' => '<div class="controls">',
		    'after' => '</div>'
		));?>
	<?php else: ?>
		<div class="alert alert-warning">Log in first to add comment</div>
	<?php endif; ?>
</div>
<div class="col-md-3 actions">
	<div class="page-header">
		<h3><?php echo __('Actions'); ?></h3>
	</div>
	<ul class="nav nav-pills nav-stacked">
		<li><?php echo $this->Html->link(__('List News'), array('action' => 'index')); ?> </li>
	</ul>
</div>
