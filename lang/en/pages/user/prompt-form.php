<?php

return [
	'inputs' => [
		'title' => [
			'label' => 'Title',
			'placeholder' => 'My prompt title...',
		],
		'type' => [
			'outerlabel' => 'Choose prompt-type',
			'label' => [
				'text' => 'Text generation',
				'image' => 'Image generation',
				'other' => 'Other',
			],
		],
		'content' => [
			'label' => 'Content',
			'placeholder' => 'My prompt content...',
		],
		'category_id' => [
			'label' => 'Category',
			'placeholder' => 'NO CATEGORY CHOSEN',
			'addBtnAriaLabel' => 'Add category',
		],
		'submit_btn' => [
			'create' => 'Create Prompt',
			'update' => 'Save Prompt',
		],
	],
	'header' => [
		'user__user_prompts__create' => 'Create new prompt',
		'user__user_prompts__edit' => 'Edit prompt',
	],



	/*
	'sessionStatus' => [
		'gdsgsdgds' => 'fgsdgsdgsdgdsds',
	],
	*/
];