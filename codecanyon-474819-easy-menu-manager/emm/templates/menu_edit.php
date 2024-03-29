<h2>Edit Menu Item</h2>
<form method="post" action="<?php echo site_url('menu.save'); ?>">
	<p>
		<label for="edit-menu-title">Title</label>
		<input type="text" name="title" id="edit-menu-title" value="<?php echo $row[MENU_TITLE]; ?>">
	</p>
	<p>
		<label for="edit-menu-url">URL</label>
		<input type="text" name="url" id="edit-menu-url" value="<?php echo $row[MENU_URL]; ?>">
	</p>
	<p>
		<label for="edit-menu-class">Class</label>
		<input type="text" name="class" id="edit-menu-class" value="<?php echo $row[MENU_CLASS]; ?>">
	</p>
	<?php if ($row[MENU_PARENT] == 0) : //only top level menu can be moved ?>
	<p>
		<label for="select_group_id">Group</label>
		<?php echo selectList('group_id', $menu_groups, $row[MENU_GROUP]); ?>
	</p>
	<input type="hidden" name="old_group_id" value="<?php echo $row[MENU_GROUP]; ?>">
	<?php endif; ?>
	<input type="hidden" name="menu_id" value="<?php echo $row[MENU_ID]; ?>">
</form>