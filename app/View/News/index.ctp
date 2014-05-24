<div class="col-md-9 news index">
	<div class="page-header">
		<h3><?php echo __('News'); ?></h3>
	</div>
		<?php foreach ($news as $news): ?>
	<div class="row well" style="margin-bottom: 20px;">
		<a href="/news/view/<?php echo h($news['News']['id']); ?>" class="col-md-9" style="font-size: 14pt;"><?php echo h($news['News']['title']); ?></a>
		<div class="col-md-3"><?php echo date("Y-m-d", strtotime($news['News']['created'])); ?></div>
		<div class="col-md-12">
			<?php if(file_exists(WWW_ROOT.$news['News']['thumbnail'])): ?>
				<img src="<?php echo h($news['News']['thumbnail']); ?>" class="img pull-left" style="max-width: 160px; max-height: 160px; margin-right: 10px; margin-bottom: 10px;" />
			<?php endif; ?>
			<?php echo substr(h($news['News']['content']), 0, 500); ?>...
		</div>
		<div class="col-md-12" style="text-align: right;">
			<?php if($news[0]['count']): ?><span class="badge pull-left">comments: <?php echo $news[0]['count'] ?></span><?php endif; ?>
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $news['News']['id']), array('class' => 'btn btn-xs btn-default')); ?>
			<?php if($logged['role_id'] == 5) echo $this->Html->link(__('Edit'), array('action' => 'edit', $news['News']['id']), array('class' => 'btn btn-xs btn-default')); ?>
			<?php if($logged['role_id'] == 5) echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $news['News']['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete # %s?', $news['News']['id'])); ?>
		</div>
	</div>
<?php endforeach; ?>
</div>
<div class="col-md-3 actions">
	<div class="page-header">
		<h3><?php echo __('Actions'); ?></h3>
	</div>

	<ul class="nav nav-pills nav-stacked">
		<?php if($logged['role_id'] == 5): ?><li><?php echo $this->Html->link(__('Add news'), array('action' => 'add')); ?></li><?php endif; ?>
		<?php if($logged['role_id'] == 5): ?><li><?php echo $this->Html->link(__('Manage pages'), array('controller' => 'pages', 'action' => 'index')); ?></li><?php endif; ?>
		<?php if($logged['role_id'] == 5): ?><li><?php echo $this->Html->link(__('Manage users'), array('controller' => 'users', 'action' => 'index')); ?></li><?php endif; ?>
	</ul>
</div>