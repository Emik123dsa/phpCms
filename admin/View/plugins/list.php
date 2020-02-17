<?php $this->theme->header(); ?>
<main class="main"> 
<div class="ui vertical stripe"> 
<div class="ui container">
    <div class="ui attached segment">
    
  

        <table class="ui compact celled definition table">
        
        <thead>
            <tr>
            <th></th>
            <th>Name</th>
            <th>Description</th> 
            <th> Author </th>
            <th>Required </th>
            </tr>
        </thead>
        
        <tbody>
         
            
            <?php foreach($plugins as $directory => $plugin) : ?>
                <tr>
                <td class="collapsing">
                <div class="ui fitted slider checkbox">
                    <input type="checkbox"><label></label>
                </div>
                <!-- /.ui fitted slider checkbox -->
            </td> 
            
            <td><i class="<?= $plugin['icon'] ?> "></i> <?= $plugin['name'] ?></td>
            <td><?= $plugin['description'] ?> </td>
            <td><?= $plugin['author'] ?> </td>
          
            <!-- /.collapsing -->
           
            <td> <div class="ui small negative labeled icon button">
            <i class="cancel icon"></i> <!-- /.alert icon -->
          Delete
        </div> <!-- /.trash icon -->
        <?php foreach($features as $feature => $item): ?>
        <?php if (!$item['is_install']): ?> 
            <button class="ui small negative button" disabled="disabled"> 
              
            Installed 
               
        </button>
        <?php else: ?>
            <button class="ui small positive button"> 
                Install
        </button>
            <!-- /.ui small primary button -->
        <?php endif; ?>
        <?php endforeach; ?>
    </td> 
        
            
        </tr>
        <?php endforeach; ?>
        </tbody>
        
        <tfoot class="full-width">
    <tr>
      <th></th>
      <th colspan="4">
        <div class="ui right floated small primary labeled icon button">
          <i class="wrench icon"></i> Add Plugin
        </div>
        
        <div class="ui small negative labeled icon button">
            <i class="trash icon"></i>
          Delete all
        </div>
      </th>
    </tr>
  </tfoot>
    </table>
        <!-- /.ui compact celled table -->
</div>
    <!-- /.ui attached segment -->
</div>
<!-- /.ui container --></div>
<!-- /.ui vertical stripe -->


</main>
<!-- /.main -->
<?php $this->theme->footer(); ?>
