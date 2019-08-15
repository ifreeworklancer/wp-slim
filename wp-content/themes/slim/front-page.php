<?php

get_header();

$sections = [
    'intro',
    'result',
    'about',
    'trainer',
    'advantages',
    'packages',
    'reviews',
    'blog-section',
];

foreach ($sections as $section) {
    include(__DIR__ . '/includes/template-parts/' . $section . '.php');
}

get_footer();