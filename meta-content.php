<?php
$content = array(
	'entries' => array(
		'type' => 'repeatable',
		'title' => 'Entries',
		'description' => 'Add, remove or organize your entries.',
		'empty-to-show' => 1,
		'elements' => array(
			'title' => array(
				'type' => 'text',
				'label' => 'Title',
				'tip' => 'e.g. "My Entry Title".',
				'required' => true
			),
			'entry' => array(
				'type' => 'wysiwyg',
				'label' => 'Entry',
				'required' => true
			)
		)
	)
);