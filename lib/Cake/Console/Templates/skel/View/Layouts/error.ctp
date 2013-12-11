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
	<div class="container">
		<h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>

		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>

		<?php echo $this->Html->script('jquery.min.js'); ?>
		<?php echo $this->Html->script('bootstrap.min.js'); ?>
		<?php echo $this->fetch('script'); ?>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
