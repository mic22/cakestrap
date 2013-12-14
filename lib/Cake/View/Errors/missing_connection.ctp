<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Errors
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<div class="page-header">
	<h3><?php echo __d('cake_dev', 'Missing Database Connection'); ?></h3>
</div>
<div class="alert alert-danger">
	<strong><?php echo __d('cake_dev', 'Error'); ?>: </strong>
	<?php echo __d('cake_dev', 'A Database connection using "%s" was missing or unable to connect.', h($class)); ?>
	<br />
	<?php
	if (isset($message)):
		echo __d('cake_dev', 'The database server returned this error: %s', h($message));
	endif;
	?>
</div>
<?php if (!$enabled) : ?>
<div class="alert alert-danger">
	<strong><?php echo __d('cake_dev', 'Error'); ?>: </strong>
	<?php echo __d('cake_dev', '%s driver is NOT enabled', h($class)); ?>
</div>
<?php endif; ?>
<div class="alert alert-info">
	<strong><?php echo __d('cake_dev', 'Notice'); ?>: </strong>
	<?php echo __d('cake_dev', 'If you want to customize this error message, create %s', APP_DIR . DS . 'View' . DS . 'Errors' . DS . basename(__FILE__)); ?>
</div>

<?php
echo $this->element('exception_stack_trace');
