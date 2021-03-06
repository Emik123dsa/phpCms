<?php 

namespace Engine\Core\Customize; 

class Config {
/**
 * Undocumented variable
 *
 * @var array
 */
    protected $config = [
        "dashboardMenu" => [ 
        "home" => [
            "classIcon" => "ui home icon", 
            "urlPath"   => "/admin/", 
            "title"     => "Home"
        ], 
        "pages" => [
            "classIcon" => "ui list icon", 
            "urlPath"   => "/admin/pages/page/1/", 
            "title"     => "Pages"
        ], 
        "posts" => [
            "classIcon" => "ui folder icon", 
            "urlPath"   => "/admin/posts/post/1/", 
            "title"     => "Posts"
        ], 
        "plugins" => [
            "classIcon" => "ui wrench icon", 
            "urlPath"   => "/admin/plugins/", 
            "title"     => "Plugins"
        ], 
        "settings" => [
            "classIcon" => "setting icon", 
            "urlPath"   => "/admin/settings/general/",
            "title"     => "Settings", 
        ], 
    ], 
        "settingMenu" => [
            "themes"  => [
                "classIcon" => "fly icon", 
                "urlPath"   => "/admin/settings/themes/",
                "title"     => "Theme", 
            ], 
            "menu"    => [
                "classIcon" => "fly icon",
                "urlPath"   => "/admin/settings/appearance/menus/",
                "title"     => "Menu", 
            ]
        ]
    ];
/**
 * Undocumented function
 *
 * @param [type] $key
 * @return boolean
 */
    public function has($key) {
        return isset($this->config[$key]);
    }
/**
 * Undocumented function
 *
 * @param [type] $key
 * @return void
 */
    public function get($key) {
        return $this->has($key) ? $this->config[$key] : null;
    }   
/**
 * Undocumented function
 *
 * @param [type] $key
 * @param [type] $value
 * @return void
 */
    public function set($key, $value) {
        $this->config[$key] = $value;
    }

}




?>