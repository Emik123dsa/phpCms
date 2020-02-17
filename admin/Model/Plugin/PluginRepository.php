<?php 

namespace Admin\Model\Plugin;
use Engine\Model; 

class PluginRepository extends Model {
    const NOT_ACTIVE = 0; 
    const ACTIVE = 1;
    public function getPlugins() {

        $sql = $this->queryBuilder 
            ->select()
            ->from('plugin')
            ->orderBy('id', 'ASC')
            ->sql(); 

        return 
        $this->db->query($sql, $this->queryBuilder->values);
    }

    public function getActivePlugins() {
        
        $sql = $this->queryBuilder
            ->select()
            ->from('plugin')
            ->where('is_active', 1)
            ->orderBy('id', 'ASC');

        return $this->db->query($sql, $this->queryBuilder->values);
    }

    public function addPlugin($directory) {

        $plugin = new Plugin();

        $plugin->setDirectory($directory);
        
        $pluginDirectory = $plugin->save(); 

        return $pluginDirectory;

    }

    public function activatePlugin($id, $active) {

        $plugin = new Plugin($id); 

        $plugin->setIsActive($active);  

        $pluginActive = $plugin->save();

        return $pluginActive;
    }

    public function isInstallPlugin($directory) {

        $query = $this->db->query($this->queryBuilder
        ->select('COUNT (id) as count')
        ->from('plugin')
        ->where('directory', $directory)
        ->limit(1)
        ->sql(), 
        $this->queryBuilder->values);

        if ($query[0]->count > 0) {
            return true;
        }

        return false;
    }

    public function isActivePlugin ($directory) {

        $query = $this->db->query($this->queryBuilder
        ->select('COUNT (id) as count')
        ->from('plugin')
        ->where('directory', $directory)
        ->where('is_active', self::ACTIVE)
        ->sql(), 
        $this->queryBuilder->values);

        if ($query[0]->count > 0) {
            return true; 
        }

        return false; 
    }

}

?>