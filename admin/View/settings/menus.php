<?php use Engine\Core\Template\Theme; $this->theme->header();?>

<main>
    <div class="ui vertical stripe">
    <!-- /.ui vertical stripe -->
    <div class="ui container">
 
        <div class="ui attached segment">

        <h3 class="ui horizontal header divider"> <i class="book blue icon"></i> </h3>
        <?php if ($menuId !== null): ?>
                <a href="/dynweb/cms/admin/settings/appearance/menus/" class="ui tag label"> Back</a> <!-- /.ui tag label -->
        <?php endif;?>
                <div class="ui top attached   menu">
                  
                        <?php Theme::block('settings/appereance') ?>
                        
            </div>
            <div class="ui bottom attached segment">
                <div class="ui grid">
                   <div class="four wide column">
                   <!-- /.four wide column -->
                    <?php if(!empty($menus)): ?>
                        <div class="ui vertical fluid   menu">
                          <div class="ui form">
                              <div class="field">
                              <?php foreach($menus as $menu): ?>
                                  
                                  <!-- /.ui item -->
                                       <a class="ui item <?= $menu['id'];?> <?php if ($menuId == $menu['id']) echo ' active'; ?>" href="?show_menu_items=<?php echo $menu['id'] ?>">
                                          <?php echo $menu['name'] ?> 
                                           <i class="angle right icon"> </i> <!-- /.list icon -->
                                       </a>
                                       
                               <?php endforeach; ?>
                              </div>
                              <!-- /.field -->
                          </div>
                          <!-- /.ui form -->
                                
                    
                        </div>
                        <?php else: ?>
                        <div class="ui error message">
                            <i class="alert icon"></i> <!-- /.alert icon -->
                            <p>You do not have any menu created</p>
                        </div>
                    <?php endif; ?>
                        </div>
                <?php if ($menuId !== null) : ?>
                <div class="twelve wide stretched column">
                    <div class="ui message">
                        <form id="formAddMenuItem" class="ui form">
                        <!-- /.ui form -->
                       
                        <!-- /.field -->
                    <!-- /.ui segment -->
                        <div class="field">
                        <!-- /.field -->
                           <h4 class="ui header">
                           Edit menu
                           </h4>
                           <!-- /.ui header -->
                        <div class="ui divider"></div>
                        <!-- /.ui horizontal divider -->
                      
                            
                           </div>
                       
                        <input type="hidden" id="sortMenuId" value="<?php echo $menuId ?>" />
                        <div class="field required">
                        <!-- /.field -->
                        
                        <label> Change features </label>
                      
                                   
                                    <!-- /.description -->
                                <!-- /.content -->
                            <!-- /.item -->
                          
                            <!-- /.ui list -->
                           
                            <!-- /.ui dimmer -->
                            <div id="listItems" class="ui stackable three column yellow segment grid">

                         
                           <!-- /#listItems -->
                               <!-- /.doubling two column row -->
                                   
                                    <?php foreach($editMenu as $item) {  
                                       
                                Theme::block('settings/menu_item', [
                                    'item' => $item 
                                ]); 
                            
                            
                        }
                             ?>
                            
                                    <!-- /.column -->
                               
                                <!-- /.four column row -->
                           
                            <!-- /.ui relaxed grid -->
                            
                    </div>
                            
                        
                        </div>
                        <div tabindex="-1" id="buttonAddItem" class="ui primary button" onclick="settings.addMenuItem(<?php echo $menuId?>)">
                        <i class="bell icon"></i> Add menu item
                    </div>
                        </form>
                    </div>
                </div>
                    <?php else:  ?> 
                        <input type="hidden" id="listItems" />
                       <div class="six wide stretched right floated column">
                           <div id="menuSegment" class="ui segment">  
                              

                                   <div class="ui divided very relaxed list">
                               <!-- /.ui divided relaxed list -->
                           <?php foreach($menus as $menu): ?>
                                  
                                  <!-- /.ui item -->
                                       <div class="item <?= $menu['id']?>" >
                                       <i class="folder icon"></i>
                                       <div class="content">
                                       <p href="?show_menu_items=<?php echo $menu['id'] ?>" class="header"> <!-- /.header --><?php echo $menu['name'] ?> </p>
                                       <div class="decription"> 
                                           <div class="ui form <?=$menu['id'] ?>">
                                               
                                               <div class="inline field "> 
                                                  
                                                   <input type="text" value="<?= $menu['name']?>" data-delete="<?php echo $menu['id'] ?>" onchange= "settings.changeMenuName(<?php echo $menu['id'] ?>)"/> 
                                                    <button class="ui negative aligned button" data-delete = "<?php echo $menu['id'] ?>" onclick="settings.deleteMenu(<?php echo $menu['id'] ?>)"> 
                                                        <i class="trash icon"></i> <!-- /.trash icon --> Delete
                                                    </button> <!-- /.ui primary button -->
                                               </div>
                                              
                                               <!-- /.field -->
                                           </div>
                                           <!-- /.ui form -->
                                       </div>
                                       <!-- /.decription -->
                                       </div>
                                       <!-- /.content -->   
                                       
                                       </div>
                                      
                                       
                               <?php endforeach; ?>
                                   <!-- /.four wide column -->
                               </div>
                               <!-- /.ui grid -->
                               
                           <!-- /.ui message -->
                       </div>
                       <!-- /.twelve wide stretched column -->
                    <?php endif;?>
                </div>

                <!-- /.ui positive button -->
            </div>
        </div>
        <div class="ui attached message ">
        <button id="newMenu" class="ui positive button"> <i class="coffee icon"></i> <!-- /.coffee icon -->
                    New menu</button> 
        </div>
        <!-- /.ui attached segment -->
        </div>
        </div>
    </main>

    <div class="ui mini modal">
     
      <!-- /.ui text container -->
        <i class="close icon"></i>
                <div class="header"> New menu</div>
                <!-- /.header -->
                <div class="content">
                    <form class = "ui form" id="settingAddMenu">
                        <div class="field required">
                            <label for="menuName">Name menu </label>
                            <input id="addMenu" type="text">
                        </div>
                        <div class="actions">
                        <!-- /.actions -->
                    <a href="javascript:void(0)"class="ui negative button" >
                        Close
                    </a>
                    <button id="saveMenu" class="ui positive right labeled icon button" onclick="settings.menu()">
                            Save menu
                    <i class="checkmark icon"></i>
                    </button>
                    </div>
                    </form>
                    </div>
    </div>
    

<?php $this->theme->footer(); ?>
<script type="text/javascript" src="/dynweb/cms/admin/Assets/js/setting/settings.js"></script>

<script type="text/javascript" src="/dynweb/cms/admin/Assets/js/init.js"></script>
                 
<script type="text/javascript"> 

$(document).ready(function() {
    const menuNew = document.getElementById('newMenu'); 

function add() {
$('.ui.mini.modal').modal('show');
}

menuNew.addEventListener('click', ()=> add());

});
</script>