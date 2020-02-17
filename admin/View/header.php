<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/dynweb/cms/admin/Assets/css/style.css" rel="stylesheet" type="text/css">
        <link href="/dynweb/cms/admin/Assets/node_modules/normalize.css/normalize.css" rel="stylesheet" type="text/css">
        <link href="/dynweb/cms/admin/Assets/semantic/dist/semantic.min.css" rel="stylesheet" type="text/css">
        <link href="/dynweb/cms/admin/Assets/node_modules/trumbowyg/dist/ui/trumbowyg.min.css" rel="stylesheet" type="text/css">
    </head>
        <body>
          <div id="preloader-page">
              <div class="preloader">
              <!-- /.preloader -->
                <!-- /.ui segment -->
                    <div id = "loader" class="ui active dimmer">
                        <div class="ui massive loader"> </div>
                        <!-- /.ui loader -->
                        <img class="ui mini image" src="/dynweb/cms/admin/Assets/img/logotype.png" alt="dental">
                    </div>  
                </div>
              <!-- /.preloader-page -->
          </div>
          <!-- /#preloader -->
            <!-- /#particles-js -->
            <header class="header">
                <div class="background">
                    <!-- /.background -->
                    <div id="particles-js"> 
                        <canvas class="particles-js-canvas-el" width="660" height="657" style="width: 100%; height: 100%;"></canvas>
                    </div>
                </div>
                <!-- /.ui divider -->
                <div class="pusher">
                    <!-- /.ui top atttached tabular menu -->
                    <!-- /.ui top attached -->
                    <div class="navbar ui masthead center aligned vertical">
                        <div class="navbar ui container">
                            <div class="ui large top attached pointing menu ">
                        <div class="left menu">
                                <!-- /.left menu -->
                                <div class="item ">
                                                <img class="ui mini image" src="/dynweb/cms/admin/Assets/img/logotype.png" alt="dental">
                                </div>
                                <div class="item">
                                                <div class="content">
                                                    <a href="javascript:void(0)" class="ui blue header">Dental Cms</a href="javascript:void(0)">
                                                </div>
                                                <!-- /.content -->
                                    <!-- /.ui logo shape -->
                            </div>
                        </div>
                                <div class="center menu">
                                    <?php

use Engine\Helper\Common;

foreach(Customize::getInstance()->getAdminMenuItem() as $key => $item):
                                        
                                        ?> 
                                        <a href="<?= $item['urlPath']?>" class="item <?php if (Common::isLinkActive($key)) echo " active"  ?>" >
                                            <i class="<?= $item['classIcon']?>"></i> <!-- /.menu icon -->

                                            <?= $lang->dashboardMenu[$key]  ?> 
                                          
                                            
                                    </a>  
                                    
                                       
                                        <?php endforeach; ?>
                                       
                                        
                                    <!-- /.item -->
                                </div>
                                <div class="right menu">
                                    <div class="item">
                                       
                                        <a href="/dynweb/cms/admin/logout/" class="ui negative button">
                                            <i class="sign-out mail icon"></i> <!-- /.mail icon -->
                                        Log Out
                                    </a> <!-- /.ui label -->
                                </div>
                                    <!-- /.item -->
                                </div>
                                <!-- /.right menu -->
                                <!-- /.right menu inverted -->
                                <!-- /.item -->
                            </div>
                            <!-- /.ui large inverted secondary network menu -->
                        </div>
                        <!-- /.navbar ui container -->
                    </div>
                     <div class="navigation ui container">
                     <!-- /.ui container -->
                            <div class="ui attached segment breadcrumb">

                           <?php echo "<pre>"; var_dump( Common::getBreadCrumbFeatures())?>
                                <a href="javascript:void(0)" class="section item"> 
                        
                          
                                </a> 
                        
                     
                              
                              </div>
                              </div>
                </div>
            </header>