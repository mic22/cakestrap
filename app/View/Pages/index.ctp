<div class="col-md-9 pages index">
	<div class="page-header">
		<h3><?php echo __('Pages'); ?></h3>
	</div>

	<table class="table table-striped table-condensed">
		<thead>
			<tr>
							<th>id</th>
							<th>title</th>
							<th>content</th>
							<th class="actions">Actions</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($pages as $page): ?>
	<tr>
		<td><?php echo h($page['Page']['id']); ?>&nbsp;</td>
		<td><?php echo h($page['Page']['title']); ?>&nbsp;</td>
		<td><?php echo h($page['Page']['content']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $page['Page']['id']), array('class' => 'btn btn-xs btn-default')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $page['Page']['id']), array('class' => 'btn btn-xs btn-default')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $page['Page']['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete # %s?', $page['Page']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Page'), array('action' => 'add')); ?></li>
	</ul>