<?php
if((arg(0) == 'user' && arg(2) != 'edit') || (arg(0) == 'admin' && arg(1)=='')):
	?>
	<script>
		window.location.href="<?php print base_path();?>admin/content/sourcemanage/image";
	</script>
<?php
endif;
?>

<div id="logout" style="position:absolute;top:20px;right:20px;color:#eee;">
   <a title="" href="<?php print base_path();?>/user/logout"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a>
</div>
    
<div id="sidebar">
    <a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
        <li class="submenu active open">
            <a href="#"><i class="icon icon-th-list"></i> <span>Data</span> </a>
            <ul>
                <li><a href="<?php print base_path();?>/admin/content/sourcemanage/image">Pictures</a></li>
                <li><a href="<?php print base_path();?>/admin/people/user-list">People</a></li>
                <li><a href="<?php print base_path();?>/admin/comments/list">Comment</a></li>
            </ul>
        </li>

    </ul>

</div>



<div id="content">
   
    <div class="container-fluid">
        
        
        <?php if ($page['help']): ?>
        <div id="help">
          <?php print render($page['help']); ?>
        </div>
      <?php endif; ?>
      <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
      <?php print render($page['content']); ?>
        
        
    </div>
</div>