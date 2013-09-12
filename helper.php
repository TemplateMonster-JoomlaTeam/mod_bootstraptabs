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

require_once JPATH_SITE.'/modules/mod_articles_news/helper.php';

jimport('joomla.html.html.bootstrap');
jimport('joomla.application.component.view');

class BootstrapTabsViewTabs extends JViewLegacy {
    
    public function display($tpl = null){
        
        // Define tabs options for version of Joomla! 3.0
        $this->tabsOptions = array(
            "active" => "tab1_id" // It is the ID of the active tab.
        );
        
        // Define tabs options for version of Joomla! 3.1
        $this->tabsOptionsJ31 = array(
            "active" => "tab1_j31_id" // It is the ID of the active tab.
        );
        
        // Add submenu
        BootstrapTabsHelper::addSubmenu($this->getName());
        
        $this->addToolbar();
        $this->addSidebar();
        $this->setDocument();
        
        parent::display($tpl);
    }
    
    /**
     * Add the page title and toolbar.
     *
     * @since   1.6
     */
    protected function addToolbar(){
        JToolBarHelper::title(JText::_("COM_BOOTSTRAPTABS_DEMO_TABS"));
    }
    
    /**
     * 
     * Add a menu on the sidebar of page
     */
    protected function addSidebar() {
		$this->sidebar = JHtmlSidebar::render();
    }
    
	/**
	 * Method to set up the document properties
	 *
	 * @return void
	 */
	protected function setDocument() {
		$this->document->setTitle(JText::_('COM_BOOTSTRAPTABS_DEMO_TABS'));
	}
	

}