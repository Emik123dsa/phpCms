<?php 
namespace Engine\Helper;

class Common {
    
    /**
     * Undocumented function
     *
     * @return boolean
     */
    static function isPost() {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            return true; 
        } else {
            return false;
        }
    }
    /**
     * Undocumented function
     *
     * @return void
     */
    static function getMethod() {
        return $_SERVER['REQUEST_METHOD'];
    }
/**
 * Undocumented function
 *
 * @return void
 */
    static function getPathUrl() {
        $pathUrl = $_SERVER['REQUEST_URI'];
        if($position = strpos($pathUrl, '?')) {
            $pathUrl = substr($pathUrl, '0', $position);
        }
        return $pathUrl;
    }

    
    static function searchMatchString($string, $find) {
        if (stripos($string, $find) !== false) {
            return true;
        }
        return false; 
    }

    static function isLinkActive($key) {

        if(self::searchMatchString($_SERVER['REQUEST_URI'], $key)) {
            return true;
        }

        return false;
    }


    static function getBreadCrumbFeatures() {
        $pathUrl = $_SERVER['REQUEST_URI']; 
        $pathUrlConst = $_SERVER['REQUEST_URI'];
        if($position = strpos($pathUrl, '?')) {
            $pathUrl = substr($pathUrl, '0', $position);
        }

        $pathUrl = explode('/', $pathUrl);
        
        $pathUrl = array_diff($pathUrl, array(''));
        unset($pathUrl[0]);
        unset($pathUrl[1]);
        $pathUrl = array_values($pathUrl);
        
        foreach($pathUrl as $item => $key) {
            $pathUrl[$item] = ucfirst($key);
        }
        if ($pathUrl == null) {
            $pathUrl[] = "Home";
        }

        return $pathUrl;
    }

    static function getBreadCrumbAmount($pathUrl = []) {
        return count($pathUrl) - 1;
    }
}

?>