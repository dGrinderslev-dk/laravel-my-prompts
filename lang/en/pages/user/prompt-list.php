<?php

return [
	'header' => [
		'user__user_categories__show' => ':count prompts in category "',
		'user__user_prompts__all' => 'You have :count prompts in total',
		'user__user_prompts__uncategorized' => 'You have :count uncategorized prompts',
	],
	'subHeader' => [
		'search' => 'That contains the phrase "',
	],
	'promptCard' => [
		'copy' => [
			'aria_label' => 'Copy prompt',
			'title' => 'Copy',
		],
		'copied' => [
			'title' => 'Copied',
		],
		'edit' => array_fill_keys(['aria_label', 'title'], 'Edit'),
		'delete' => array_merge(
			array_fill_keys(['aria_label', 'title'], 'Delete'),
			[
				'confirm' => 'Are you sure you want to delete this prompt?',
			],
		),
	],
	'no_result' => 'No results found',
];