<?php

return [
	'name' => [
		'label' => 'Username (lowercase letters, numbers, underscores)',
		'placeholder' => 'user_123',
	],
	'email' => [
		'label' => 'Email address',
		'placeholder' => 'email@example.com',
	],
	'password' => array_merge(
		array_fill_keys(['label', 'placeholder'], 'Password'),
		[
			//'title' => 'Dette er en titel bla bla bla bla bla bla',
		],
	),
	'password_confirmation' => array_merge(
		array_fill_keys(['label', 'placeholder'], 'Confirm password'),
	),
	'submit_btn' => 'Create account',
];