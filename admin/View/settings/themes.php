<?php

$this->theme->header(); ?>
<main class="main">
    <div class="ui vertical stripe">
        <div class="ui container">
        <!-- /.ui attached segment -->
        <div class="ui attached segment">
            
        <h3 class="ui horizontal header divider"> <i class="theme blue icon"></i> </h3>
        <a href="/admin/settings/appearance/menus/" class="ui tag label"> Back</a> <!-- /.ui tag label -->
        <div class="ui top attached menu">
        <!-- /.ui top attached tabular menu -->

        <?php Theme::block('settings/theme_tabs'); ?>
    
        </div>
        <div id="cardTheme" class="ui bottom attached segment">
        <!-- /.ui bottom attached -->
        <div class="ui link cards">
<?php foreach($themes as $theme): ?>

    <div class="card"> 
    <!-- /.card -->
<div class="image"> 
         <img src="<?= $theme->img ?>" alt="Theme">
</div>


<!-- /.ui link cards --> 
<div class="content">
<!-- /.content -->
  <div class="header">
  <!-- /.header --> <?= $theme->name; ?>
  </div> 
  <div class="meta">
  <?= $theme->version; ?>
 </div>
 <div class="description"> 

    <?= $theme->description; ?>

    </div>
  <!-- /.meta -->
   </div>
   
    <div class="extra content"> 
        <span class="right floated"> 
    <?= $theme->release; ?>
</span> 
<div class="left floated"> 
    <?php if ($activeTheme == $theme->dirTheme): ?>
        <button  class="ui positive button disabled">
         
         <i class="fly icon"> 
 
         </i> <!-- /.friend icon -->
         Activated
     </button>

    <?php else: ?>

    <button onclick="settings.updateMenuTheme('<?= $theme->theme ?>')"  data-theme= "<?= $theme->theme ?>" class="ui positive button">
         
        <i class="fly icon"> 

        </i> <!-- /.friend icon -->
        Activate
    </button> <!-- /.ui positive button -->  
    <?php endif;?>
</div>
<!-- /.left floated -->
        <!-- /.right floated -->
    </div>
    <!-- /.extra content -->
    </div> 
<?php endforeach; ?>
</div>
</div>
</div>
        </div>
        <!-- /.ui container -->
    </div>
    <!-- /.ui vertical stripe attached segment -->
</main>
<!-- /.main -->



<?php $this->theme->footer();?>
<script type="text/javascript" src="/admin/Assets/js/setting/settings.js"></script>