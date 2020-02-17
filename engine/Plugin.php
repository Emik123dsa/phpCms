<?php 

namespace Engine; 

use Engine\Core\Database\Connection; 
use Engine\Core\Router; 
use Engine\DI\DI;

abstract class Plugin {
    /**
     * Undocumented variable
     *
     * @var [type]
     */
    protected $di;
    /**
     * Undocumented variable
     *
     * @var [type]
     */
    protected $db;
    /**
     * Undocumented variable
     *
     * @var [type]
     */
    protected $router; 

    public function __construct(DI $di)
    {
    $this->di = $di; 
    $this->db = $this->di->get('db');
    $this->router = $this->di->get('router');
    $this->customize = $this->di->get('customize');
    }

    abstract function details(); 

    public function getDI() {
        return $this->di; 
    }

    public function getDb() {
        return $this->db; 
    }

    public function getRouter() {
        return $this->router; 
    }

    public function getCustomize() {
        return $this->customize; 
    }
}

?>