<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Form examples: splitting of frontend configuration',
    'description' => 'Demonstrates how to load frontend-related form configuration only in selected page trees.',
    'category' => 'fe',
    'author' => 'Sebastian Klein',
    'author_email' => 'sebastian@sebkln.de',
    'state' => 'test',
    'version' => '0.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
            'form' => '12.4.0-12.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
