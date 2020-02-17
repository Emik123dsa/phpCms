<?php 

namespace Admin\Controller; 

class PluginController extends AdminController {

    public function init() {

        $this->load->model('Plugin');

        $installedPlugins = $this->model->plugin->getPlugins(); 

        $plugins = getPlugins();
        
        foreach ($installedPlugins as $plugin) {
          
            $features[$plugin['directory']]['is_active'] = $plugin['is_active']; 
            $features[$plugin['directory']]['is_install'] = true; 
            $features[$plugin['directory']]['plugin_id'] = $plugin['id'];

        }
        
        $this->data['plugins'] = $plugins; 
        $this->data['features'] = $features; 

        $this->view->render('plugins/list', $this->data);
    }
}
?>