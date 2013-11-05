<?php
/**
 * Bootstrap Tabs
 *
 * @author    TemplateMonster http://www.templatemonster.com
 * @copyright Copyright (C) 2012 - 2013 Jetimpex, Inc.
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 
 * Parts of this software are based on Articles Newsflash standard module
 * 
*/

defined('_JEXEC') or die; 

?>

<ul class="nav nav-tabs" id="bootstrap_tabs_nav_<?php echo $module->id; ?>">
	<?php for ($i = 0, $n = count($list); $i < $n; $i ++) :
	$item = $list[$i]; ?>
	<li<?php if($i == 0) echo ' class="active"'; ?>><a data-toggle="tab" href="#tab<?php echo ($i+1).'-'.$module->id; ?>"><?php echo $item->title; ?></a></li>
	<?php endfor; ?>
</ul>

<div class="tab-content" id="bootstrap_tabs_content_<?php echo $module->id; ?>">
	<?php for ($i = 0, $n = count($list); $i < $n; $i ++) :
	$item = $list[$i]; ?>
	<div class="tab-pane fade<?php if($i == 0) echo ' active in'; ?>" id="tab<?php echo ($i+1).'-'.$module->id; ?>">
		<?php require JModuleHelper::getLayoutPath('mod_bootstraptabs', '_item'); ?>
	</div>
	<?php endfor; ?>
</div>

  <div class="clearfix"></div>