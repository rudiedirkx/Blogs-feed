
<?= ul(array(
	l((string)$user, 'profile.php?args=' . $user->id),
	l('Log out', 'logout.php'),
	l('All blogs', 'index.php'),
	l('Add feed', 'add-feed.php'),
	l('Your subscriptions', 'subscriptions.php'),
	l('Sent batches', 'batches.php'),
	l('Users', 'users.php'),
)) ?>
