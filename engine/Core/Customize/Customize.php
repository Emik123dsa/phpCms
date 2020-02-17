<?php 

namespace Engine\Core\Customize; 
use Engine\DI\DI; 
use Engine\Core\Customize\Config; 

trait Singleton {
    /**
     * 
     */
    private function __construct() {

    } 
/**
 * Undocumented function
 *
 * @return void
 */
    private function __clone() {

    }
/**
 * Undocumented function
 */
    private function __wakeup() {


    }
    /**
     * Undocumented variable
     *
     * @var [type]
     */
    private static $_instance = null;
    /**
     * Undocumented variable
     *
     * @var [type]
     */
    public static $di; 

    public static function getInstance() {
        if(is_null(self::$_instance)) {
            self::$_instance = new self(self::$di);
        }
        return self::$_instance;
    }



}
class Customize {

    use Singleton; 
    /**
     * Undocumented variable
     *
     * @var [type]
     */
    protected $config; 
/**
 * Undocumented variable
 *
 * @var [type]
 */
    public static $di;
/**
 * Undocumented function
 *
 * @param DI $di
 * @return void
 */
    public function connect(DI $di) {
        static::$di = $di;
        $this->config = new Config();
    }

/**
 * Undocumented function
 *
 * @return void
 */
    public function importConfig() {

    }
/**
 * Undocumented function
 *
 * @return void
 */
    public function getConfig() {
        
        return $this->config; 
    }

    public function getAdminMenuItem() {

        return $this->getConfig()->get('dashboardMenu');
    }

    public function getSettingMenuItem() {
        return $this->getConfig()->get('settingMenu');
    }


   
}


?>