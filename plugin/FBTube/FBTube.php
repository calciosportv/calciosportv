<?php

require_once $global['systemRootPath'] . 'plugin/Plugin.abstract.php';

class FBTube extends PluginAbstract {
    
    public function getTags() {
        return array(
            PluginTags::$FREE,
            PluginTags::$DEPRECATED
        );
    }
    public function getDescription() {
        return "<b>(Deprecated, will be removed in next version)</b> Make the first page works as a facebook page";
    }

    public function getName() {
        return "FBTube";
    }

    public function getUUID() {
        return "214d4c2f-1471-4592-81de-095e68ad14ea";
    }

    public function getPluginVersion() {
        return "1.0";   
    }
        
    public function getFirstPage(){
        global $global;
        return $global['systemRootPath'].'plugin/FBTube/view/modeFacebook.php';
    }

    
    public function getHeadCode(){
        global $global;
        return '<link href="'.$global['webSiteRootURL'].'plugin/FBTube/view/style.css" rel="stylesheet" type="text/css"/>';
    }
}
