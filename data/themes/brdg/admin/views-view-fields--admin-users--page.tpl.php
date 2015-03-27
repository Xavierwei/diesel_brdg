<?php 
	$checked = "checked";
	if($fields['status']->content == "Disabled")
	{
		$checked = "";	
	}
?>
<div class="user_box <?php print $fields['status']->content;?>">

	<div class="tools">
		<div class="switch"><input class="<?php print $fields['status']->content;?>" type="checkbox" value="<?php print $fields['uid_2']->content;?>" <?php print $checked?> /></div>
		<div class="edit"><?php print $fields['edit_node']->content;?></div>
	</div>
	<div class="user_body">
		<div class="left"><?php print $fields['mail']->content;?></div>
		<div class="right"><?php print $fields['field_user_city']->content;?>(<?php print $fields['field_city']->content;?>)</div>
		<div class="left"><?php print $fields['field_name_']->content;?></div>
		<div class="right"><?php print $fields['field_phone_number']->content;?></div>
		<div class="expand">
			<div class="sns1"><?php print $fields['field_instagram_account']->content;?></div>
			<div class="sns3"><?php print $fields['field_weibo_account']->content;?></div>
		</div>
	</div>
</div>