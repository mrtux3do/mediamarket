<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Web app
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');
		
		echo $this->Html->css('font-awesome');
		echo $this->Html->css('owl.carousel.min');
		echo $this->Html->css('owl.theme.default.min');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('style');
		
		echo $this->Html->script('jquery.min');
		echo $this->Html->script('dropzone');
		echo $this->Html->script('owl.carousel.min');
		echo $this->Html->script('web_app_basic');
		echo $this->Html->script('bootstrap');
		echo $this->Html->script('jquery.countdown.min');

		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="header">
		<?php echo $this->element('header'); ?>
	</div>

	<div id="content">
		<?php echo $this->fetch('content'); ?>
	</div>

	<div id="footer">
	</div>
</body>
</html>
