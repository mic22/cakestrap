<div class="col-md-9 comments index">
	<div class="page-header">
		<h3><?php echo __('Comments'); ?></h3>
	</div>

	<table class="table table-striped table-condensed">
		<thead>
			<tr>
							<th>id</th>
							<th>content</th>
							<th>user_id</th>
							<th>news_is</th>
							<th class="actions">Actions</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($comments as $comment): ?>
	<tr>
		<td><?php echo h($comment['Comment']['id']); ?>&nbsp;</td>
		<td><?php echo h($comment['Comment']['content']); ?>&nbsp;</td>
		<td><?php echo h($comment['Comment']['user_id']); ?>&nbsp;</td>
		<td><?php echo h($comment['Comment']['news_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $comment['Comment']['id']), array('class' => 'btn btn-xs btn-default')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $comment['Comment']['id']), array('class' => 'btn btn-xs btn-default')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $comment['Comment']['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete # %s?', $comment['Comment']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
		</tbody>
	</table>

	<div class="pagination pagination-large">
    <?php
		echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
		echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
		echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
	?>
	</div>
</div>
<div class="col-md-3 actions">
	<div class="page-header">
		<h3><?php echo __('Actions'); ?></h3>
	</div>

	<ul class="nav nav-pills nav-stacked">
		<li><?php echo $this->Html->link(__('New Comment'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>