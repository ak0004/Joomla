<?php

// No direct access to this file

defined('_JEXEC') or die;

jimport('joomla.application.component.view');


class HelloWorldViewHelloWorld extends JView
{
    function display($tpl = null)
    {
        
        // Assign data to the view
        
        $this->item = 'Hello World';
        
        
        // Display the view
        
        parent::display($tpl);
    }
}

?>