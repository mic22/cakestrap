
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
 * @since         CakePHP(tm) v 2.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<div class="page-header">
	<h3><?php echo __d('cake_dev', 'Missing Plugin'); ?></h3>
</div>
<div class="alert alert-danger">
	<strong><?php echo __d('cake_dev', 'Error'); ?>: </strong>
	<?php echo __d('cake_dev', 'The application is trying to load a file from the %s plugin', '<em>' . h($plugin) . '</em>'); ?>
</div>
<div class="aler alert-danger">
	<strong><?php echo __d('cake_dev', 'Error'); ?>: </strong>
	<?php echo __d('cake_dev', 'Make sure your plugin %s is in the %s directory and was loaded', $plugin, APP_DIR . DS . 'Plugin'); ?>
</div>
<pre>
&lt;?php
CakePlugin::load('<?php echo h($plugin); ?>');

</pre>
<div class="alert alert-info">
	<strong><?php echo __d('cake_dev', 'Loading all plugins'); ?>: </strong>
	<?php echo __d('cake_dev', 'If you wish to load all plugins at once, use the following line in your %s file', APP_DIR . DS . 'Config' . DS . 'bootstrap.php'); ?>
</div>
<pre>
CakePlugin::loadAll();
</pre>
<div class="alert alert-info">
	<strong><?php echo __d('cake_dev', 'Notice'); ?>: </strong>
	<?php echo __d('cake_dev', 'If you want to customize this error message, create %s', APP_DIR . DS . 'View' . DS . 'Errors' . DS . 'missing_plugin.ctp'); ?>
</div>

<?php echo $this->element('exception_stack_trace'); ?>
