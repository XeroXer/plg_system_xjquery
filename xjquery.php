<?php

defined('_JEXEC') or die;

class plgSystemXjquery extends JPlugin
{

    public function onAfterRoute()
    {
        $document = JFactory::getDocument();

        $app = JFactory::getApplication();

        if (($app->isAdmin() && false)
            || ($app->isSite() && true)
        ) {
            $document->addScript(JURI::root(true) . '/plugins/system/xjquery/js/jquery-1.8.3.min.js');

            $document->addScript(JURI::root(true) . '/plugins/system/xjquery/js/jquery.noconflict.js');

            $document->addScript(JURI::root(true) . '/plugins/system/xjquery/js/jquery-ui-1.9.2.min.js');

            $document->addStyleSheet(JURI::root(true) . '/plugins/system/xjquery/css/jquery-ui-1.9.2-themes/base/jquery-ui.css');
        }
    }

}
