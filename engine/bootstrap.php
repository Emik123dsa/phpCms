<?php 
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/Function.php';

class_alias('Engine\\Core\\Template\\Asset', 'Asset');
class_alias('Engine\\Core\\Template\\Theme', 'Theme');
class_alias('Engine\\Core\\Template\\Setting', 'Seeting');
class_alias('Engine\\Core\\Template\\Menu', 'Menu');
class_alias('Engine\\Core\\Customize\\Customize', 'Customize');
class_alias('Engine\\Helper\\Common', 'Common');
use Engine\Cms;
use Engine\DI\DI;

try {
        /**
         * 
         */
        $di = new DI (); 
        
        $services = require __DIR__ .'/Config/Service.php';
        
        foreach($services as $service) {
            $provider = new $service($di);
            $provider->init();
        }
        
        $di->set('model', []);

        $cms = new CMS($di);
        $cms->run();
        /**
         * 
         */
    } catch (\ErrorException $e) {

        echo $e->getMessage();

    }

?>