<?php

namespace Cms\Model\Menu;

use Engine\Model;

class MenuRepository extends Model
{
    /**
     * Undocumented function
     *
     * @param array $params
     * @return void
     */
    public function add($params = [])
    {
        if (empty($params)) {
            return 0;
        }
        $menu = new Menu;
        $menu->setName($params['name']);
        $menuId = $menu->save();

        return $menuId;
    }

    public function getList()
    {
        $query = $this->db->query(
            $this->queryBuilder
                ->select()
                ->from('menu')
                ->orderBy('id', 'DESC')
                ->sql()
        );

        return $query;
    }

    public function changeMenu($params = []) {
        if (empty($params)) {
            return 0;
        }

        $menu = new Menu($params['id']);

        $menu->setName($params['name']);

        $menuId = $menu->save(); 

        return $menuId;
      
    }

    public function deleteMenu($params = []) {

        if (empty($params)) {
            return 0; 
        }
        $id = $params['id']; 

        $sql = $this->queryBuilder
        ->delete()
        ->from('menu')
        ->where('id', $id)
        ->sql(); 

        return $this->db->query($sql, $this->queryBuilder->values);
    }
}