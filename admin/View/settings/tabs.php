
  <div class="left menu">
  <!-- /.left menu -->
        <a class="item active" href="/dynweb/cms/admin/settings/general/">
            General
        </a>

  <div class="ui pointing dropdown link item">
  <!-- /.ui selection dropdown -->
        <span>
            <i class="dropdown icon"> </i> <!-- /.dropdown icon -->
        Appearance
</span>
        <div class="menu"> 
           <?php foreach(\Engine\Core\Customize\Customize::getInstance()->getSettingMenuItem() as $key => $item) : ?>
<a href="<?= $item['urlPath']?>" class="item">
    <i class="<?= $item['classIcon']?>"></i> <!-- /.fly icon -->
            <?= $item['title']?>
</a> <!-- /.item -->
            <?php endforeach; ?>
            <!-- /.item -->
        </div>
        <!-- /.menu -->
        </div>
</div>

<div class="right menu">
    <div class="item active">
      <div class="ui transparent icon input">
        <input type="text" placeholder="Search settings...">
        <i class="search link icon"></i>
      </div>
    </div>
  </div>