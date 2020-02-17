<?php 

namespace Plugin\PluginVendor; 

class Plugin extends \Engine\Plugin {
    
    public function init () {

    }

    public function details() {
        return [
            'name' => 'Vendor', 
            'description' => 'Vendor Description',
            'author' => 'Vendor Author', 
            'icon'  => 'icon leaf'
        ];
    }
} 
?>