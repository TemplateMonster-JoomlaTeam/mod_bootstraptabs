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

echo JHtml::_('bootstrap.startTabSet', 'ID-Tabs-J31-Group', array("active" => "tab1_j31_id"));?>
  <?php for ($i = 0, $n = count($list); $i < $n; $i ++) :
    $item = $list[$i];
echo JHtml::_('bootstrap.addTab', 'ID-Tabs-J31-Group', 'tab'.($i+1).'_j31_id', $item->title); ?> 
<?php require JModuleHelper::getLayoutPath('mod_bootstraptabs', '_item'); ?>
<?php echo JHtml::_('bootstrap.endTab');?> 
  <?php endfor; ?>
  

<?php echo JHtml::_('bootstrap.endTabSet');?>

  <div class="clearfix"></div>

<script type="text/javascript">
	/*
	jQuery(function($){
		jQuery('#ID-Tabs-J31-GroupContent .tab-pane').addClass('fade')
		jQuery('#ID-Tabs-J31-GroupContent .tab-pane.active').addClass('in')
	})
*/
</script>