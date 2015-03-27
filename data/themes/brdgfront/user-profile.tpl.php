<?php
global $user;
?>

<?php 
if($user->uid == 2):?>
<script type="text/javascript">
window.location.href="/data//admin/content/sourcemanage/image";
</script>

<?php else:?>
<script type="text/javascript">
window.location.href="/data/user/"+<?php print $user->uid; ?>+"/edit";
</script>
<?php endif;?>