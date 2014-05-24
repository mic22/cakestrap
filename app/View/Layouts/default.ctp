<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>dblabs app</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php echo $this->Html->css('bootstrap.min.css'); ?>
	<?php echo $this->Html->css('bootstrap-theme.min.css'); ?>
	<?php echo $this->fetch('css'); ?>
	<style type="text/css">
	.pagination {
		display: none;
	}
	.table {
		font-size: 8pt;
	}
	</style>
<body>
	<nav class="navbar navbar-default navbar-static-top" role="navigation">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<?php echo $this->Html->link(__("Index"), '/', array('class'=>'navbar-brand')); ?>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
					<ul class="dropdown-menu">
					<?php foreach($pages as $id => $label): ?>
						<li><?php echo $this->Html->link($label, array('controller'=>'pages', 'action'=>'view', $id)); ?></li>
					<?php endforeach; ?>
					</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav pull-right">
				<?php if($logged): ?>
					<li><?php echo $this->Html->link('Hi '.$logged['name'].', logout', array('controller'=>'users', 'action'=>'logout')); ?></li>
				<?php else: ?>
					<li><?php echo $this->Html->link('login', array('controller'=>'users', 'action'=>'login')); ?></li>
					<li><?php echo $this->Html->link('register', array('controller'=>'users', 'action'=>'register')); ?></li>
				<?php endif; ?>
			</div>
		</nav>
	<div class="container">
		<?php echo $this->Session->flash(); ?>
		<div class="row">
			<?php echo $this->fetch('content'); ?>
		</div>

		<?php echo $this->Html->script('jquery.min.js'); ?>
		<?php echo $this->Html->script('bootstrap.min.js'); ?>
		<?php echo $this->fetch('script'); ?>
	</div>
	<!--<h3>Query log</h3>
	<iframe src="/queries" class="col-md-12" style="height: 300px; border: 0;"></iframe>-->
</body>
</html>
