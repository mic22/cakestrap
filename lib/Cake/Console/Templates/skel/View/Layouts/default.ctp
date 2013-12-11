<?php
/**
 *
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>		
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php echo $this->Html->meta('icon'); ?>
	<?php echo $this->Html->css('bootstrap.min.css'); ?>
	<?php echo $this->Html->css('bootstrap-theme.min.css'); ?>
	<?php echo $this->fetch('css'); ?>
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only"><?php echo __d('cake_dev', 'Toggle navigation'); ?></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <?php echo $this->Html->link($cakeDescription, 'http://cakephp.org', array('class'=>'navbar-brand')); ?>
  </div>

  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Link #1</a></li>
      <li><a href="#">Link #2</a></li>
    </ul>
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
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
