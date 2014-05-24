<div class="col-md-9 roles index">
	<div class="page-header">
		<h3><?php echo __('Roles'); ?></h3>
	</div>

	<table class="table table-striped table-condensed">
		<thead>
			<tr>
							<th>id</th>
							<th>name</th>
							<th class="actions">Actions</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($roles as $role): ?>
	<tr>
		<td><?php echo h($role['Role']['id']); ?>&nbsp;</td>
		<td><?php echo h($role['Role']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $role['Role']['id']), array('class' => 'btn btn-xs btn-default')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $role['Role']['id']), array('class' => 'btn btn-xs btn-default')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $role['Role']['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete # %s?', $role['Role']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Role'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>