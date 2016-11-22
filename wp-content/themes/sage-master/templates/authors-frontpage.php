<?php
// Get all users order by amount of posts
//$allUsers = get_users('orderby=post_count&order=DESC');
$allUsers = get_users('orderby=display_name');

$users = array();
$admins = array();

// Remove subscribers from the list as they won't write any articles
foreach($allUsers as $admin)
{
	if(in_array( 'administrator', $admin->roles ))
	{
		$admins[] = $admin;
	}
}

foreach($allUsers as $currentUser)
{
	if(!in_array( 'administrator', $currentUser->roles ) && !in_array( 'subscriber', $currentUser->roles ))
	{
		$users[] = $currentUser;
	}
}

?>
	<?php

		foreach($users as $user)
		{
			?>
			<?php $metaImg = get_user_meta($user->ID, 'user_img', true); ?>
			<?php $display_author = get_user_meta($user->ID, 'display_author', true); ?>

		<?php if ( $metaImg && $display_author != 'false') : ?>
			
					<img class="authorAvatar" src="<?php echo $metaImg; ?>">
				
			<?php endif; ?>
			<?php
		}
	?>

