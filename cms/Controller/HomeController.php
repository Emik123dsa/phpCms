<?php 

namespace Cms\Controller;

use Engine\Core\Template\Theme; 

class HomeController extends CmsController {
    /**
     * Undocumented function
     *
     * @return void
     */
    public function index() {
        //$data = ['name' => 'Haribol'];
        $this->load->model('Home'); 
        
        $this->view->render('index', $this->data);
    }
/**
 * Undocumented function
 *
 * @return void
 */
    public function news($id) {
        echo $id;
    }

}

?>