<div class="col-md-9 users index">
	<div class="page-header">
		<h3><?php echo __('Users'); ?></h3>
	</div>

	<table class="table table-striped table-condensed">
		<thead>
			<tr>
							<th>id</th>
							<th>name</th>
							<th>surname</th>
							<th>email</th>
							<th class="actions">Actions</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['surname']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
		<td class="actions">
			<?php if($logged['role_id'] == 5) echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id']), array('class' => 'btn btn-xs btn-default')); ?>
			<?php if($logged['role_id'] == 5) echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
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
		<?php if($logged['role_id'] == 5): ?><li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li><?php endif; ?>
	</ul>