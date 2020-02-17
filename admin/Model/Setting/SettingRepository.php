<?php 

namespace Admin\Model\Setting;

use Engine\Model;

class SettingRepository extends Model{
    /**
     * Undocumented function
     *
     * @return void
     */
    const NAME_REPOSITORY_SECTION = 'general';
    const THEME_REPOSITYOR_SECTION ='theme';
    public function getSettings() {

        $sql =$this->queryBuilder
        ->select()
        ->from('setting')
        ->where('section', self::NAME_REPOSITORY_SECTION)
        ->orderBy('id', 'ASC')
        ->sql();
        
        return $this->db->query($sql, $this->queryBuilder->values);
    } 

    public function update(array $params) {
        if (!empty($params)) {
           foreach($params as $key => $value) {
            $sql = $this->queryBuilder
            ->update('setting')
            ->set(['value' => $value])
            ->where('key_field', $key)
            ->sql(); 
            $this->db->execute($sql, $this->queryBuilder->values);
           }
           
    }
    }
    /**
     * Undocumented function
     *
     * @param [type] $keyField
     * @return void
     */
    public function getSettingValue($keyField) {

        $sql = $this->queryBuilder
        ->select('value')
        ->from('setting')
        ->where('key_field', $keyField)
        ->sql();
        $query = $this->db->query($sql, $this->queryBuilder->values);
        return isset($query[0]) ? $query[0]['value'] : null;
    }

    public function activateTheme($params) {
        if (empty($params)) {
            return 0;
        }

        $sql = $this->queryBuilder 
            ->update('setting')
            ->set(['value' => $params])
            ->where('section', self::THEME_REPOSITYOR_SECTION)
            ->sql(); 

        $this->db->query($sql, $this->queryBuilder->values);
    }
}
?>