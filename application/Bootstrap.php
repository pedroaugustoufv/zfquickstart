<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initDoctype()
    {
        $this->bootstrap('view');
        $view = $this->getResource('view');
        $view->doctype('XHTML1_STRICT');
    }
    
	protected function _initAutoload()
	{
    	$autoloader = new Zend_Application_Module_Autoloader(
	        array(
	            'namespace' => '',
	            'basePath'  => APPLICATION_PATH . '/modules/default'
	        ), 
	        array(
	            'namespace' => 'Guestbook_',
	            'basePath'  => APPLICATION_PATH . '/modules/guestbook'
	        )            
		);
    	
    	return $autoloader;
	}
}

