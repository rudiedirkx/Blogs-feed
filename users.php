<?php

require 'inc.config.php';

user::check('logged in');

require 'inc.menu.php';

$users = User::all();

?>
<div class="users">
	<ul>
		<?foreach( $users AS $user ):?>
			<li><?=l((string)$user, 'profile/' . $user->id)?> (<?=count($user->subscriptions)?> subscriptions)</li>
		<?endforeach?>
	</ul>
</div>

