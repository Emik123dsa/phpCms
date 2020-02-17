<?php 
namespace Admin\Controller;

use Engine\Core\Template\Theme; 

use Engine\Core\Template\Setting; 

class SettingController extends AdminController {
    
    public function general() {

        $this->load->model('Setting');

        $this->data['settings'] = $this->model->setting->getSettings();
        
        $this->data['languages'] = languages();

        $this->view->render('settings/general', $this->data);
    }

    public function menus() {

        $this->load->model('Menu', false, 'Cms');

        $this->load->model('MenuItem', false, 'Cms');

        if (isset($this->request->get['show_menu_items'])) {
            
        $this->data['menuId'] = $this->request->get['show_menu_items'];
        $this->data['menus'] = $this->model->menu->getList();
        $this->data['editMenu'] = $this->model->menuItem->getItems($this->data['menuId']);
        
        } else { 
        $this->data['menuId'] = NULL;
        $this->data['menus'] = $this->model->menu->getList();
        $this->data['editMenu'] = $this->model->menuItem->getItems($this->data['menuId']);
        }

        $this->view->render('settings/menus', $this->data);      
    }
    
    public function themes() {

        $this->load->model('Setting'); 

        $this->data['themes'] = getThemes(); 

        $this->data['activeTheme'] = Setting::get('active_theme'); 
        
        $this->view->render('settings/themes', $this->data);

    }

    public function updateSetting() {
        $params = $this->request->post; 

        $this->load->model('Setting'); 
        
        $this->model->setting->update($params);
        
    }

    public function activateThemeMenu() {

        $params = $this->request->post; 

        $this->load->model('Setting'); 

        if (isset($params['value'])) {

            $activeMenu = $this->model->setting->activateTheme($params['value']);

            return $activeMenu;
        }

        
         
    }

    public function ajaxMenuAdd() {
        $params = $this->request->post;

        $this->load->model('Menu', false, 'Cms');

        if(isset($params['name']) && strlen($params['name']) > 0) {
            $addMenu = $this->model->menu->add($params);

            echo $addMenu;
        }
    }

    public function ajaxMenuAddItem() {
        $params = $this->request->post; 

        $this->load->model('MenuItem', false, 'Cms');

        if(isset($params['menu_id']) && strlen($params['menu_id'] > 0)) {
            $id = $this->model->menuItem->add($params); 

            $item = new \stdClass;       
            
            $item->id = $id; 
            $item->name= \Cms\Model\MenuItem\MenuItemRepository::NEW_MENU_ITEM_NAME; 
            $item->link = '#';
            Theme::block('settings/menu_item', [
                'item' => $item
            ]);
           
    }

    
    }
    public function ajaxMenuSortItem() {
        $params = $this->request->post; 
        
        
        $this->load->model('MenuItem', false, 'Cms');

        if (isset($params['data']) && !empty($params['data'])) {
        $sortItem = $this->model->menuItem->sort($params);

            return $sortItem;
        } 
        
    }

    public function ajaxMenuDeleteItem() {
        $params = $this->request->post; 

        $this->load->model('MenuItem', false, 'Cms'); 

        if (isset($params['id']) && strlen($params['id'] > 0)) {
            $deleteItem = $this->model->menuItem->delete($params);

            return $deleteItem;
        }
    }

    public function ajaxMenuChangeItemName() {
        $params = $this->request->post; 

        $this->load->model('MenuItem', false, 'Cms');

        if (isset($params['id']) && strlen($params['id'] > 0)) {

            $changeMenuItemName = $this->model->menuItem->changeItemName($params); 
           
            return $changeMenuItemName; 
            
        }

        
    }
    public function ajaxMenuDelete() {
        $params = $this->request->post; 

        $this->load->model('Menu', false, 'Cms');
    

    if (isset($params['id']) && strlen($params['id'] > 0)) {
        $deleteMenu = $this->model->menu->deleteMenu($params); 
        return $deleteMenu; 
    }

    }

    public function ajaxMenuChange() {
        $params = $this->request->post; 

        $this->load->model('Menu', false, 'Cms');
    

    if (isset($params['id']) && strlen($params['id'] > 0)) {

        $changeMenu = $this->model->menu->changeMenu($params); 

        return $changeMenu; 
    }
    
    }

    public function ajaxMenuChangeItemLink() {
        $params = $this->request->post; 

        $this->load->model('MenuItem', false, 'Cms'); 

        if (isset($params['id']) && strlen($params['id'] > 0)) {

            $changeMenuItemLink = $this->model->menuItem->changeItemLink($params);

            return $changeMenuItemLink;
        }
    }
}

?>