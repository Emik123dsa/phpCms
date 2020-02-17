<?php 

namespace Admin\Model\Plugin;

use Engine\Core\Database\ActiveRecord;

class Plugin {
    use ActiveRecord;
/**
 * Undocumented variable
 *
 * @var string
 */
    protected $table = "plugin"; 
/**
 * Undocumented variable
 *
 * @var [type]
 */
    public $id; 
/**
 * Undocumented variable
 *
 * @var [type]
 */
    public $directory; 
/**
 * Undocumented variable
 *
 * @var [type]
 */
    public $is_active; 
/**
 * Undocumented function
 *
 * @return void
 */
    public function getId() {
        return $this->id; 
    }
/**
 * Undocumented function
 *
 * @param [type] $id
 * @return void
 */
    public function setId($id) {
        $this->id = $id; 
    }
/**
 * Undocumented function
 *
 * @return void
 */
    public function getDirectory() {
        return $this->directory; 
    }
/**
 * Undocumented function
 *
 * @param [type] $directory
 * @return void
 */
    public function setDirectory($directory) {
        $this->directory = $directory;
    }
/**
 * Undocumented function
 *
 * @return void
 */
    public function getIsActive() {
        return $this->is_active; 
    }
/**
 * Undocumented function
 *
 * @param [type] $is_active
 * @return void
 */
    public function setIsActive($is_active) {
        $this->is_active = $is_active;
    }
}
?>